@extends('layouts.site_admin.site_admin_design')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
        h1,h2,h3,h4,h5,h6,p{
            font-family:Pyidaungsu,Zawgyi-One;
        }
        .imagePreview {
            width: 100%;
            height: 150px;
            background-position: center center;
            background:url('http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            /* box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2); */
        }
        .upload_btn
        {
            display:block;
            border-radius:10px;
            /* box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2); */
            margin-bottom: 15px;
        }
        .imgUp
        {
            margin-bottom:15px;
        }
    </style>
@endsection

@section('title')
   Admin | Edit Photos
@endsection

@section('nav_bar_text')
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                       <form id="update_blog" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <img src="{{$blog_detail['photo']}}" class="imagePreview" id="imgs" style="width: 100%;height: 150px;">
                                <label class="btn btn-md btn-info container-fluid rounded-0 m-0" for="edit_upload_photo">Upload</label>
                                <input type="file" style="display:none;" id="edit_upload_photo" name="photo" class="form-control package_photo" onchange="displaySelectedPhoto('edit_upload_photo','imgs')">
                            </div>
                        </div>

                    <input type="hidden" name="id" value="{{$blog_detail['id']}}" id="blog_id">
                    
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title:</label><br>
                        <textarea class="form-control" id="title" name="title" rows="1">{{$blog_detail['title']}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date:</label><br>
                        <input type="date" class="form-control" id="date" value="{{$blog_detail['date']}}" name="date" rows="1">
                    </div>

                    <div class="form-group">
                        <label for="detail" class="col-form-label">Detail:</label><br>
                        <textarea id="summernote" class="form-control" rows="4" id="detail" name="detail">{!! $blog_detail['detail'] !!}</textarea>
                    </div>                

                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <input type="submit" class="btn btn-info rounded-0" value="Change">
                </form>
                  </div>
                </div>
                  </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
    <script>
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });


        $(document).ready(function(){
    

        $('#update_blog').on('submit',function(e)
        {        
            e.preventDefault();
            var form_data=new FormData(this);
            $.ajax({
                url : "{{url('/admin/update_blog')}}",
                type : "post",
                data : form_data,
                cache : false,
                processData:false,
                contentType:false,
            }).done(function(response){
                if(response){
                    toastr.success('Update Successful');
                }
            }).fail(function(error){
                console.log(error);
            });
        });

            // start summernote
            $("#summernote").summernote({
                height : "300px",
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
