@extends('layouts.site_admin.site_admin_design')
@section('css')
    <style>
        h1,h2,h3,h4,h5,h6,p{
            font-family:Pyidaungsu,Zawgyi-One;
        }
    </style>
@endsection

@section('title')
   Admin | Blog
@endsection

@section('nav_bar_text')
@endsection
@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div style="margin-bottom:-60px;" class="col-md-10 mx-auto mt-3 alert alert-info alert-dismissible fade show" role="alert">
        <strong>Important!</strong> Please use unicode.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left rounded-0" data-toggle="modal" data-target="#modalBox"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Create Blog</button><br><br>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Blog Data List</h4>
                            <!-- <p class="card-category"></p> -->
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th width="8%">
                                        NO
                                    </th>
                                    <th width="17%">
                                        Image
                                    </th>
                                    <th width="20%">
                                        Title
                                    </th>
                                    <th width="20%">
                                        Date
                                    </th>
                                    <th width="35%">Action</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="insert_blog" class="md-form" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <img src="{{asset('images/default.jpg')}}" class="imagePreview" id="image" style="width: 100%;height: 150px;">
                                <label class="btn btn-md btn-primary container-fluid rounded-0 m-0" for="upload_photo">Upload</label>
                                <input type="file" style="display:none;" id="upload_photo" name="photo" required class="form-control package_photo" onchange="displaySelectedPhoto('upload_photo','image')">
                            </div>
                        </div>
                        <input type="hidden" value="" name="blog_id">
                        
                        <div class="row">
                           <div class="col-md-12">
                           <div class="form-group">
                                <label for="title" class="col-form-label">Title:</label><br>
                                <textarea input type="text" class="form-control" name="title" required rows="1"></textarea>
                            </div>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-md-12">
                           <div class="form-group">
                                <label for="date" class="col-form-label">Date:</label><br>
                                {{-- <textarea input type="date" class="form-control" name="date" required rows="1"></textarea> --}}
                                <input type="date" class="form-control" name="date" required rows="1">
                            </div>
                           </div>
                        </div>
                        
                        <span class="detail_error"></span>
                       <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="detail" class="col-form-label">Detail:</label>
                                    <textarea id="summernote" class="form-control" rows="5" name="detail"></textarea>
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
                    <h4 class="modal-title">Change Blog</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="update_blog" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <img src="{{asset('images/default.jpg')}}" class="imagePreview" id="imgs" style="width: 100%;height: 150px;">
                                <label class="btn btn-md btn-info container-fluid rounded-0 m-0" for="edit_upload_photo">Upload</label>
                                <input type="file" style="display:none;" id="edit_upload_photo" name="photo" class="form-control package_photo" onchange="displaySelectedPhoto('edit_upload_photo','imgs')">
                            </div>
                        </div>

                    <input type="hidden" name="id" id="blog_id">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title:</label><br>
                        <textarea class="form-control" id="title" name="title" rows="1"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date:</label><br>
                        <input type="date" class="form-control" id="date" name="date" rows="1">
                    </div>

                    <div class="form-group">
                        <label for="detail" class="col-form-label">Detail:</label>
                        <textarea id="edit_summernote" class="form-control" rows="4" id="detail" name="detail"></textarea>
                    </div>                
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <input type="submit" class="btn btn-info rounded-0" value="Change">
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
    removeShowEntryOnDataTable("datatable");
         $(document).ready(function(){
        var t = $("#datatable").DataTable();

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        function reset(){
            $('#update_data')[0].reset();
        }

        load();

        function load(){
            $.ajax({
                type: "get",
                url: "{{url('/admin/view_blog')}}",
                cache:false,
                success:function(data){
                    // console.log(data);
                    var data_return = JSON.parse(data);
                    // console.log(data_return);
                    t.clear();
                    for(var i = 0; i<data_return.length; i++){
                         var link="{{url('/admin/blog/detail/')}}/"+data_return[i]['id'];  
                         var edit_blog="{{url('/admin/edit/blog/')}}/"+data_return[i]['id'];      
                        t.row.add([
                            i+1,
                            '<img src="'+data_return[i]['photo']+'" alt="" class="imagePreview">',
                            data_return[i]['title'],
                            data_return[i]['date'],
                            // data_return[i]['detail'].replace(/(<([^>]+)>)/ig,"").length > 40 ? data_return[i]['detail'].replace(/(<([^>]+)>)/ig,"").substring(0,40)+'.....' : data_return[i]['detail'],
                            '<a href="'+link+'" target="_blank" class="btn btn-primary rounded-0 btn-sm">Detail</a>'+
                             '<a href="'+edit_blog+'" target="_blank" class="btn btn-success rounded-0 btn-sm">Edit</a>'+
                            '<button class="btn btn-danger btn-sm rounded-0" onclick="delete_blog('+data_return[i]['id']+')">Delete</button>'
                            ]).draw(false);
                    }
                    $('#insert_blog')[0].reset();
                }
            }).fail(function(error){
                console.log(error);
            });
        }

        $('#insert_blog').on('submit',function(e){
            // alert("it work");
            e.preventDefault();
            var alldata = new FormData(this);
            if($("#summernote").summernote("isEmpty")){
                $(".detail_error").html('<span class="text-danger">This field is required.</span>');
            }else{
                $.ajax
                ({
                    type: "POST",
                    url: "{{url('/admin/blog/insert')}}",
                    data: alldata,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function(data){
                        $('#modalBox').modal('hide');
                        load();
                        toastr.success('Successful');
                        $("#insert_blog")[0].reset();
                        $(".detail_error").empty();
                        $("#image").attr('src','{{asset("images/default.jpg")}}');
                        $("#summernote").summernote('reset');
                    }
                });
                    return false;
                }
        
        });

       
        delete_blog=function(id){
        if(confirm('Are u want to delete!')){
            $.ajax({
                type: "POST",
                data: { "_method" : "delete"},
                url : "{{url('delete/blog')}}/"+id,
                cache: false,
                success:function(data){
                    load();
                    toastr.success('Delete successful');
                }
            })
        }
    }    

        // edit_blog=function(id){
        //     $.ajax({
        //         url: "{{url('edit/blog')}}/"+id,
        //         type : "get",
        //         dataType : "json"
        //     }).done(function(response){
        //         // alert(response);
        //         $("#title").val(response.title);
        //         $("#date").val(response.date);
        //         $("#edit_summernote").summernote({
        //             height : "150px",
        //             toolbar: [
        //                 ['style', ['style']],
        //                 ['font', ['bold', 'italic', 'underline', 'clear']],
        //                 ['color', ['color']],
        //                 ['para', ['ul', 'ol', 'paragraph']],
        //                 ['height', ['height']],
        //                 ['table', ['table']],
        //                 ['insert', ['link', 'hr']],
        //                 ['view', ['fullscreen', 'codeview']],
        //                 ['help', ['help']]
        //             ],
        //         });
        //         $("#edit_summernote").summernote('code',response.detail);
        //         $("#imgs").attr('src',response.photo);
        //         $("#blog_id").val(response.id);
        //     }).fail(function(error){
        //         console.log(error);
        //     });
        // }


        // start summernote
            $("#summernote").summernote({
                height : "150px",
                placeholder: 'Detail',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ],
            });

              $(document).on('click','.note-btn',function(){
                $(".note-group-select-from-files label").text("Upload image");
                $(".note-group-select-from-files label").attr('class','btn btn-primary');
                $(".note-group-select-from-files label").attr("for","photo_summernote");
                $(".note-group-select-from-files input:file").attr("id","photo_summernote");
              });
            });
    </script>

@endsection