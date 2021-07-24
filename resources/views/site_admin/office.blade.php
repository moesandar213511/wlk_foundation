@extends('layouts.site_admin.site_admin_design')
@section('css')
@endsection

@section('title')
   Admin | Site Profile
@endsection

@section('nav_bar_text')
    <!-- Blog List -->
@endsection
@section('content')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
  @if(Session::has('success'))
    <script type="text/javascript">
    toastr.success("{{Session('success')}}");</script>
  @endif
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Site Profile</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>
                        
                        
                         <form action="{{url('/admin/update_office')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}  
                            <input type="hidden" name="id" id="id" value="{{$get_office->id}}">
                            <div class="col-md-7 pt-2 pb-2 mx-auto card" style="margin-top:30px;">
                                    <div class="row">
                                        <div class="col-md-4">
                                             <img src="{{asset('upload/office/'.$get_office->photo)}}" class="imagePreview" id="imgs" style="width: 100%;height: 100px;">
                                    <label class="btn btn-md btn-success container-fluid rounded-0 m-0" for="edit_upload_photo">Upload</label>
                                    <input type="file" style="display:none;" id="edit_upload_photo" name="photo" class="form-control package_photo" onchange="displaySelectedPhoto('edit_upload_photo','imgs')">
                                        </div>
                                    </div>    <br>                                               
                                    {{-- <div class="form-group">
                                        <label style="color:black;" for="name" class="col-form-label">Name:</label>
                                        <input type="text" class="form-control" id="update_name" name="name">
                                    </div> --}}

                                    <div class="form-group">
                                        <label style="color:black;" for="phone" class="col-form-label">Phone No:</label><br>
                                        <input type="tel" class="form-control" id="update_phone" name="phone" value="{{$get_office->phone}}">
                                
                                    </div><br>

                                    <div class="form-group">
                                        <label style="color:black;" for="email" class="col-form-label">Email</label><br>
                                        <input type="tel" class="form-control" id="update_email" name="email" value="{{$get_office->email}}">
                                    </div><br>
                            
                                    <div class="form-group">
                                        <label style="color:black;" for="address" class="col-form-label">Address:</label><br>
                                        <textarea class="form-control" rows="4" id="update_address" name="address">{{$get_office->address}}</textarea> 
                                    </div>

                                    <div class="form-group">
                                        <label style="color:black;" for="about" class="col-form-label">About:</label><br>
                                        <textarea class="form-control" rows="4" id="update_about" name="about">{{$get_office->about}}</textarea>
                                    </div><br>

                                    <div class="form-group">
                                        <label style="color:black;" for="vision" class="col-form-label">Vision:</label><br>
                                        <textarea class="form-control" rows="4" id="update_vision" name="vision">{{$get_office->vision}}</textarea>
                                    </div><br>

                                    <div class="form-group">
                                        <label style="color:black;" for="mission" class="col-form-label">Mission:</label><br>
                                        <textarea class="form-control" rows="4" id="update_mission" name="mission">{{$get_office->mission}}</textarea>
                                    </div><br>
                                    <input type="submit" name="submit" class="rounded-0 btn btn-md btn-info" value="Change">                          
                            </div>
                        </form>                    
                </div>  
            </div>               
        </div>
    </div>
</div>
@endsection
