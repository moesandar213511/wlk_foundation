@extends('layouts.site_admin.site_admin_design')
@section('css')
@endsection

@section('title')
   Admin | About
@endsection

@section('nav_bar_text')
    Blog List
@endsection
@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modalBox">Manage About</button><br><br>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">About List</h4>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Detail
                                    </th>
                                    <th>
                                        Photo
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


        {{--****************start model--}}  
    <div class="modal fade" id="modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="insert_about" class="md-form" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <input type="hidden" value="" name="about_id">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="detail" class="col-form-label">Detail:</label>
                            <textarea class="form-control" rows="5" name="detail" required></textarea>
                        </div>

                        <input type="file" name="photo" required>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                         <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
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
                    <h4 class="modal-title">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="update_about" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                    <img src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="" id="imgs" class="imagePreview" style="width: 80%;height: 150px;">
                    <div class="col-md-4">
                         <label class="btn btn-primary upload_btn">
                        Upload<input type="file" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                    </div>

                    <input type="hidden" name="id" id="about_id">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="detail" class="col-form-label">Detail:</label>
                        <textarea class="form-control" rows="4" id="detail" name="detail"></textarea>
                    </div>                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Change">
                    </div>
                </form>

            </div>
        </div>
    </div>
        <!--End of Edit Modal -->

    </div>
@endsection

@section('js')
    <script>
         $(document).ready(function(){
        var tt = $("#datatable").DataTable();

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        load();

        function load(){
            $.ajax({
                type : "get",
                url : "{{url('/admin/view_about')}}",
                cache : false,
                success : function(data){
                    console.log(data);
                    var datas = JSON.parse(data);
                    tt.clear();
                    for(var i=0; i < datas.length; i++){
                        tt.row.add([
                            i+1,
                            datas[i]['title'],
                            datas[i]['detail'].substr(0,100),
                            '<img src="'+datas[i]['photo']+'" alt="" style="width:150px; height="150px">',
                            '<button class="btn btn-info btn-sm" onclick="edit_about('+datas[i]['id']+')" data-toggle="modal" data-target="#edit_modalBox" data-keyboard="false" data-backdrop="static">Edit</button>'+
                            '<button class="btn btn-danger btn-sm" onclick="delete_about('+datas[i]['id']+')">Delete</button>'
                        ]).draw();
                    }
                    $('#insert_about')[0].reset();
                }
            }).fail(function(error){
                console.log(error);
            });
        }

        $('#insert_about').on('submit',function(e){
            // alert("it work");
            e.preventDefault();
            var alldata = new FormData(this);
            $.ajax
            ({
                type: "POST",
                url: "{{url('/admin/about/insert')}}",
                data: alldata,
                cache:false,
                processData:false,
                contentType:false,
                success:function(data){
                    $('#modalBox').modal('hide');
                    load();
                }
            });
                return false;
        });

        edit_about = function(id){
            $.ajax({
                type : "get",
                url : "{{url('/edit/about')}}/"+id,
                dataType : "json",
                success:function(response){
                    console.log(response);
                    $("#title").val(response.title);
                    $("#detail").val(response.detail);
                    $("#imgs").attr('src',response.photo);
                    $("#about_id").val(response.id);
                }
            }).fail(function(error){
                console.log(error);
            });
        }

        $('#update_about').on('submit',function(e)
        {        
            e.preventDefault();
            var form_data=new FormData(this);
            $.ajax({
                url : "{{url('/admin/update_about')}}",
                type : "post",
                data : form_data,
                processData:false,
                contentType:false,
            }).done(function(response){
                if(response){
                    load();
                    $("#edit_modalBox").modal('hide');
                }
            }).fail(function(error){
                console.log(error);
            });
        });

        delete_about=function(id){
        if(confirm('Are u want to delete!')){
            $.ajax({
                type: "POST",
                data: { "_method" : "delete"},
                url : "{{url('delete/about')}}/"+id,
                cache: false,
                success:function(data){
                    alert('Success');
                    load();
                }
            })
        }
    }
        // // start summernote
        //       $("#summernote").summernote({
        //         height : "150px",
        //         placeholder: 'Description',
        //       });

        //       $(document).on('click','.note-btn',function(){
        //         $(".note-group-select-from-files label").text("Upload image");
        //         $(".note-group-select-from-files label").attr('class','btn btn-primary');
        //         $(".note-group-select-from-files label").attr("for","photo_summernote");
        //         $(".note-group-select-from-files input:file").attr("id","photo_summernote");
        //       });
            });
    </script>

@endsection

