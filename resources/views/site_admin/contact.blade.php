@extends('layouts.site_admin.site_admin_design')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('title')
    Admin | Contact
@endsection

@section('nav_bar_text')
@endsection

@section('content')
<canvas id="myChart" width="400" height="200"></canvas>

    {{session('contact')}}
    <div class="content" style="margin-top:30px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Contact List</h4>
                            {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable">
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Name 
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                    <th>
                                        Phone Number
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
        });

        $('document').ready(function(){
            var t = $('#dataTable').DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false
            });

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

         load();

            function load(){
                $.ajax({
                  type: "get",
                  url: "{{url('/admin/view_contact')}}",

                  cache: false,
                  success: function(data){
                  var data_return=JSON.parse(data);
                    //console.log(data);
                    t.clear();
                    for(var i = 0;i<data_return.length;i++){
                      // var link=window.location.href+"/detail/"+data_return[i]['id'];
                    t.row.add([
                        i+1,
                        data_return[i]['name'],
                        data_return[i]['subject'],
                        data_return[i]['message'].substr(0,100),
                        data_return[i]['phone'],
                        data_return[i]['email'],
                        // '<a href="'+link+'" class="btn btn-primary btn-sm">Detail</a>',
                        '<a href="mailto:'+data_return[i]['email']+'" class="btn rounded-0 btn-primary btn-sm">Mail To</a>'
                        +'<button class="btn btn-danger btn-sm rounded-0" onclick="delete_contact('+data_return[i]['id']+')">Delete</button>'
                        ]).draw( false );
                    }
                  }
                });
            }

            delete_contact=function(id){
                if(confirm('Are u want to delete!')){
                    $.ajax({
                    type: "POST",
                    data: { "_method" : "delete"},
                    url : "{{url('delete/contact')}}/"+id,
                    cache: false,
                    success:function(data){
                        load();
                        toastr.success('Delete successful');
                        }
                    })
                }
            }    
        })

    </script>

@endsection
