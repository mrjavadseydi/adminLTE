@extends('adminLTE::master.master')
@section('position')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">کاربران</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="{{route('adminPanel')}}">خانه</a></li>
                <li class="breadcrumb-item active">کاربران</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-filter"></i>
                        فیلتر
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: none;">
                    <form method="get">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>نام و نام خانوادگی:</label>
                                    <input type="text" class="form-control" placeholder="نام و نام خانوادگی " name="name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>شماره دانشجویی:</label>
                                    <input type="text" class="form-control" placeholder="شماره دانشجویی" name="stunumber">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>کد ملی:</label>
                                    <input type="text" class="form-control" placeholder="کدملی" name="natnumber">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-success" value="فیلتر کن">
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">

                        </div>
                        {{--                        <div class="col-md-4">--}}
                        {{--                            <button id="copy" class="btn btn-outline-primary " onclick="s1()">--}}
                        {{--                                <i class="fa fa-copy"></i>--}}
                        {{--                                کپی محتوا--}}
                        {{--                            </button>--}}
                        {{--                            <button id="ExportReporttoExcel" class="btn btn-outline-success " onclick="s2()">--}}
                        {{--                                <i class="fa fa-file-excel-o"></i>--}}
                        {{--                                دریافت خروجی اکسل--}}
                        {{--                            </button>--}}
                        {{--                        </div>--}}
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
            </div>
            {{--!filter--}}

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-user"></i>
                        کاربران
                    </h3>
                </div>

                <div class="card-body pad table-responsive">
                    <table class="table table-striped" id="table-data2">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>نام کاربر</th>
                            <th>ایمیل</th>
                            <th>موبایل</th>
                            <th>وضعیت موبایل</th>
                            <th>تاریخ عضویت</th>
                            <th style="width: 40px">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $l =>$val)
                            <tr>
                                <td>{{$l+1}}.</td>
                                <td>
                                    @if($val->super_admin)
                                        <span class="badge badge-primary">
                                            <i class="fa fa-star"></i>
                                        </span>
                                    @endif
                                    {{$val->name}}</td>
                                <td>
                                    {{$val->email}}
                                </td>
                                <td>
                                    {{$val->mobile}}
                                </td>
                                <td>
                                    @if ($val->phone_verify)
                                        <span class="badge badge-success"> تایید شده</span>
                                    @else
                                        <span class="badge badge-danger">عدم تایید </span>
                                    @endif
                                </td>
                                <td>
                                    {{$val->created_at}}
                                </td>
                                <td>
                                    @if (!$val->super_admin)
                                        <a href="{{route('user.edit',$val->id)}}" class="btn btn-sm btn-warning">
                                            <i  class="fa fa-edit"></i>
                                        </a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('script')

    <script type="text/javascript" src="{{asset('plugin/datatables.js')}}"></script>
    <script>

        $(document).ready(function () {

            var table = $("#table-data2").DataTable({
                "bLengthChange": false,
                "pageLength": 10,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Persian.json"
                }
            });
        });

    </script>

@endsection
