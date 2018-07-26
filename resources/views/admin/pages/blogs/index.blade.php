@extends('admin.layout')
@section('title', 'Danh sách sản phẩm')

@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tìm kiếm</h3>
                    </div>

                    <div class="box-body">
                        <form role="form" class="form-horizontal" action="{{ route('blog.index') }}" method="get">
                            <!-- text input -->
                            <div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm ..." value="{{ Request::get('name') ? Request::get('name') : null }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Loại sản phẩm</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="menu" style="width: 100%;">
                                                <option value="">Tất cả</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Giá</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                <input type="text" class="form-control" placeholder="Từ"
                                                       name="start_price" disabled="disabled">
                                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                <input type="text" class="form-control" placeholder="Đến"
                                                       name="end_price" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Trạng thái</label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" name="status[]" value="1"
                                                               @if(!empty(Request::get('status'))) @if(in_array(1, Request::get('status'))) checked="checked" @endif @endif>
                                                    </span>
                                                    <input type=" text" style="background-color: #00a65a"
                                                           class="form-control" disabled value="Đang hiện">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" name="status[]" value="2"
                                                             @if(!empty(Request::get('status'))) @if(in_array(2, Request::get('status'))) checked="checked" @endif @endif>
                                                    </span>
                                                    <input type="text" class="form-control" style="background-color: #00c0ef" disabled value="Chưa hiện">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" name="status[]" value="3"
                                                            @if(!empty(Request::get('status')))  @if(in_array(3, Request::get('status'))) checked="checked" @endif @endif>
                                                    </span>
                                                    <input type="text" class="form-control" style="background-color: #f39c12" disabled value="Không hiện">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" name="status[]" value="4"
                                                             @if(!empty(Request::get('status')))  @if(in_array(4, Request::get('status'))) checked="checked" @endif @endif>
                                                    </span>
                                                    <input type="text" class="form-control" style="background-color: #dd4b39" disabled value="Đã xóa">
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-xs-4 col-xs-offset-4">
                                <div class="col-xs-5">
                                    <button class="btn btn-block btn-info btn-sm" type="submit">
                                        <i class="fa fa-search"></i> &nbsp;&nbsp;Tìm kiếm
                                    </button>
                                </div>
                                <div class="col-xs-offset-2 col-xs-5">
                                    <a href="{{ route('blog.create') }}"
                                       class="btn btn-block btn-success btn-sm col-xs-offset-1 col-xs-1">
                                        <i class="fa fa-plus"></i> &nbsp;&nbsp;Tạo mới
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.box -->
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <div class="box" style="padding:20px">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr class="header-table">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Short content</th>
                                <th>Publish date</th>
                                <th>End date</th>
                                <th>Action</th>
                            </tr>
                            @foreach($blogs as $blog)
                                <tr class="body-table">
                                    <td></td>
                                    <td class="text-left">
                                        <a href="#" target="_blank">
                                            <span class="short-text">{{ $blog->title }}</span>
                                        </a>
                                    </td>
                                    <td>
                                        <img src='{{ asset("$blog->image") }}' width="50px" height="">
                                    </td>
                                    <td>
                                        <span class="short-text">{!! $blog->description !!}</span>
                                    </td>
                                    <td>
                                        <span class="short-text">{!! $blog->content !!}</span>
                                    </td>
                                    <td>
                                        {{ date('d-m-Y H:i:s', strtotime($blog->publish_date)) }}
                                    </td>
                                    <td>
                                        {{ date('d-m-Y H:i:s', strtotime($blog->end_date)) }}
                                    </td>
                                    <td>
                                        <a href="{{ route('blog.copy', $blog->id) }}" class="btn btn-block btn-success btn-xs">Copy</a>
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-block btn-warning btn-xs">Edit</a>
                                        <form role="form" id="create-new-product" class="form-horizontal"
                                              style="margin-top: 5px"
                                              action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                              enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-block btn-danger btn-xs">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="text-center">
                            {{
                                $blogs->appends([
                                    "title" => Request::get('title'),
                                    "status" => Request::get('status'),
                                    "publish_date" => Request::get('publish_date'),
                                    "end_date" => Request::get('end_date'),
                                    "menu" => Request::get('menu')
                                ])->links()
                            }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->


@endsection

@section('script')
    <script src="{{ asset('admin/js/select2.full.min.js') }}"></script>

    <!-- date-range-picker -->
    <script src="{{ asset('admin/js/daterangepicker.js') }}"></script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                },
            })
        });

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };

        var time = getUrlParameter('publish_time');

        if (typeof time !== "undefined") {
            $('#reservationtime').val(time.replace(/\+/g, ' '));
        }

    </script>
@endsection
