@extends('layouts.admin')

@section('title', 'Product List')
@section('content')

    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Products</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Product List</h3>
                                    </div>
                                    <div>
                                        <a class="btn btn-block btn-outline-secondary btn-lg"
                                           href="{{route('admin_product_add')}}">
                                            Add Product
                                        </a>
                                    </div>
                                    <hr>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category</th>
                                                <th>Title(s)</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Image Gallery</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $rs)
                                                <tr>
                                                    <td>{{ $rs->id }}</td>
                                                    <td>{{ $rs->category_id }}</td>
                                                    <td>{{ $rs->title }}</td>
                                                    <td>{{ $rs->quantity }}</td>
                                                    <td>{{ $rs->price }}</td>
                                                    <td>
                                                        @if ($rs->image)
                                                            <img src="{{ Storage::url($rs->image) }}"
                                                            height="30" alt="">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_image_add', ['product_id'=>$rs->id])}}">
                                                            Gallery
                                                        </a>
                                                    </td>
                                                    <td>{{ $rs->status }}</td>
                                                    <td>
                                                        <a href="{{route('admin_product_edit', ['id'=>$rs->id])}}">
                                                            Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_product_delete', ['id'=>$rs->id])}}"
                                                           onclick="return confirm('you will delete it are you sure')">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.card-body -->
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
@endsection
@section('footer')
    <script src="{{asset('assets')}}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
