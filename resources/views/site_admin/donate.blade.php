@extends('layouts.site_admin.site_admin_design')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('title')
    Admin | Donate
@endsection

@section('nav_bar_text')
@endsection
@section('content')

    {{session('contact')}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left rounded-0" data-toggle="modal" data-target="#modalBox"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add Donation List</button><br><br>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">View Donate List</h4>
                        </div><br>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                        No
                                        </th>
                                        <th>
                                            Name 
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>Action</th>
                                    </tr>
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

                {{--****************start model--}}  
    <div class="modal fade" id="modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Donation List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="insert_donation" class="md-form" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        
                        <div class="row">
                           <div class="col-md-12">
                           <div class="form-group">
                                <label for="name" class="col-form-label">Name:</label><br>
                                <textarea input type="text" id="name" class="form-control" name="name" required rows="1"></textarea>
                            </div>
                           </div>
                        </div>

                        {{-- <div class="row">
                           <div class="col-md-12">
                           <div class="form-group">
                                <label for="date" class="col-form-label">Date:</label><br>
                                <input type="date" class="form-control" name="date" required rows="1">
                            </div>
                           </div>
                        </div> --}}

                        <span class="detail_error"></span>
                       <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="summernote" class="form-control" rows="5" name="description"></textarea>
                                </div>
                            </div>
                       </div>

                       <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="amount" class="col-form-label">Amount:</label><br>
                                    <textarea class="form-control" id="amount" rows="1" name="amount"></textarea>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                         <button type="submit" class="btn btn-primary rounded-0 pull-right" id="btn_submit">Create</button>
                        <!-- <input type="submit" value="Create" class="btn btn-success"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--**********************end model--}}


               <!-- Edit Modal -->
    <div class="modal" id="edit_modalBox">
         <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Change Donation</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="update_donation" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <input type="hidden" name="id" id="id_edit">
                        <div class="row">
                           <div class="col-md-12">
                           <div class="form-group">
                                <label for="update_name" class="col-form-label">Name:</label><br>
                                <textarea id="update_name" class="form-control" name="name" required rows="1"></textarea>
                            </div>
                           </div>
                        </div>

                        {{-- <div class="row">
                           <div class="col-md-12">
                           <div class="form-group">
                                <label for="date" class="col-form-label">Date:</label><br>
                                <input type="date" class="form-control" name="date" required rows="1">
                            </div>
                           </div>
                        </div> --}}

                        <span class="detail_error"></span>
                       <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="update_summernote" class="col-form-label">Description:</label><br>
                                    <textarea id="update_summernote" class="form-control" rows="5" name="description"></textarea>
                                </div>
                            </div>
                       </div>

                       <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="update_amount" class="col-form-label">Amount:</label><br>
                                    <textarea class="form-control" id="update_amount" rows="1" name="amount"></textarea>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                         <button type="submit" class="btn btn-primary rounded-0 pull-right" id="btn_submit">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
        <!--End of Edit Modal -->
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $('document').ready(function(){
            var t = $('#dataTable').DataTable({
                "ordering": false,
                //"paging": false,
                "bInfo" : false,
                "bLsengthChange": false
            });

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

            $('#insert_donation').on('submit',function(e){
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax({
                    type : "post",
                    url : "{{url('admin/insert_donation')}}",
                    data : alldata,
                    cache : false,
                    processData : false,
                    contentType : false,
                    success : function(data){
                        toastr.success('Create Donation list successful');
                        $('#modalBox').modal('hide');
                        load();
                    }
                });
            });
          

            load();

            function load(){
                // var date=new Date();
                $.ajax({
                  type: "get",
                  url: "{{url('/admin/view_donate')}}",

                  cache: false,
                  success: function(data){
                  var data_return=JSON.parse(data);
                    // console.log(data);
                    // console.log(moment().format("MMM Do YY"));
                    t.clear().draw();
                    for(var i = 0;i<data_return.length;i++){
                      // var link=window.location.href+"/detail/"+data_return[i]['id'];
                    t.row.add([
                        i+1,
                        data_return[i]['name'],
                        data_return[i]['description'],
                        data_return[i]['amount'],
                
                    //    moment(data_return[i]['created_at']).format('LL'),
                        // '<a href="'+link+'" class="btn btn-primary btn-sm">Detail</a>',
                        '<button class="btn btn-primary btn-sm rounded-0" onclick="edit_donate('+data_return[i]['id']+')" data-toggle="modal" data-target="#edit_modalBox" data-keyboard="false" data-backdrop="static">Edit</button>'+
                        '<button class="btn btn-danger btn-sm rounded-0" onclick="delete_donate('+data_return[i]['id']+')">Delete</button>'
                        ]).draw( false );
                    }
                     $('#insert_donation')[0].reset();
                  }
                }).fail(function(error){
                    console.log(error);
                })
            }
            
            edit_donate = function (id) {
                $.ajax({
                    type : "get",
                    url : "./edit_donate/"+id,
                    cache : false,
                    success : function (data){
                        var string = JSON.parse(data);
                        $('#id_edit').val(string['id']);
                        $('#update_name').val(string['name']);
                        $('#update_summernote').summernote({
                            height : "150px",
                            toolbar: [
                                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                                ['font', ['strikethrough', 'superscript', 'subscript']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']],
                                ['view', ['fullscreen', 'codeview', 'help']],
                                ['insert', ['link']],
                            ],
                        });
                        $('#update_summernote').summernote('code',string['description']);
                        $('#update_amount').val(string['amount']);
                        $('#edit_modalBox').modal('show');                        
                    }
                });
            }

            $('#update_donation').on('submit',function(e){
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax({
                    type : "post",
                    url : "{{url('admin/update_donation')}}",
                    data : alldata,
                    cache : false,
                    processData : false,
                    contentType : false,
                    success : function(data){
                        toastr.success('Update Donation list successful');
                        $('#edit_modalBox').modal('hide');
                        load();
                    }
                });
            });
            // $('#refresh').click(function(){
            //     $('#start_date').val('');
            //     $('#end_date').val('');
            //     load();
            // });

            delete_donate=function(id){
                if(confirm('Are u want to delete!')){
                    $.ajax({
                    type: "POST",
                    data: { "_method" : "delete"},
                    url : "{{url('delete/donate')}}/"+id,
                    cache: false,
                    success:function(data){
                        load();
                        toastr.success('Delete successful');
                        }
                    })
                }
            }    

            $('#summernote').summernote({
            height : '150px',
            placeholder : 'Text',
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
                ]
            });
        })

    </script>

@endsection
