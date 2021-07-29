@extends('home.admin')

@section('title', 'Admin Panel Edit Page')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@section('content')

    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Page</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Setting</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('admin_setting_update')}}" method="post" role="form"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" id="title" name="title" value="{{$data->title}}"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$data->description}}"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" value="{{$data->company}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" value="{{$data->phone}}" name="phone"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" value="{{$data->fax}}" name="tax" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" value="{{$data->email}}" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Smtp Server</label>
                                <input type="text" value="{{$data->smtpserver}}" name="smtpserver" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Smtp Email</label>
                                <input type="text" value="{{$data->smtpemail}}" name="smtpemail" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Smtppassword</label>
                                <input type="password" value="{{$data->smtppassword}}" name="smtppassword"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Smtpport</label>
                                <input type="number" value="{{$data->smtpport}}" name="smtpport" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" value="{{$data->facebook}}" name="facebook" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" value="{{$data->instagram}}" name="instagram" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" value="{{$data->twitter}}" name="twitter" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Youtube</label>
                                <input type="text" value="{{$data->youtube}}" name="youtube" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>About Us</label>
                                <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Contact</label>
                                <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>References</label>
                                <textarea id="references" name="references">{{$data->references}}</textarea>
                            </div>

                            <script>
                                $(document).ready(function () {
                                    $('#aboutus').summernote();
                                    $('#contact').summernote();
                                    $('#references').summernote();
                                });
                            </script>

                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Card</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
@endsection
