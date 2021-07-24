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
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                          <div class="table-responsive">
                                  <table class="table table-hovered">
                                    <tbody>
                                      <tr>
                                          <td><b>Photo</b></td>
                                          <td>
                                              <img src="{{$blog_detail['photo']}}" width="200px;" alt="">
                                          </td>
                                      </tr>
                                      <tr>
                                        <td><b>Title</b></td>
                                        <td class="myanmar">{{$blog_detail['title']}}</td>
                                      </tr>
                                      <tr>
                                        <td><b>Date</b></td>
                                        <td>{{$blog_detail['date']}}</td>
                                        {{-- <td>{{$blog_detail['date']->format('M d-Y')}}</td> --}}
                                      </tr>
                                      <tr>
                                        <td><b>Description</b></td>
                                        <td>{!!$blog_detail['detail']!!}</td>
                                      </tr>

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

    @endsection
