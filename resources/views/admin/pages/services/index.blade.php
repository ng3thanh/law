@extends('admin.layout')
@section('title', 'Service list')

@section('css')
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box" style="padding:20px">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr class="header-table">
                                <th>ID</th>
                                <th>Service</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($services as $service)
                                <tr class="body-table">
                                    <td></td>
                                    <td class="text-left">
                                        <a href="#" target="_blank">
                                            <span class="short-text">{{ $service->title }}</span>
                                        </a>
                                    </td>
                                    <td>
                                        <img class="img-thumbnail" src='{{ asset("$service->image") }}' width="50px" height="">
                                    </td>
                                    <td>
                                        <span class="short-text">{!! $service->description !!}</span>
                                    </td>
                                    <td>
                                        {{ date('d/m/Y H:i', strtotime($service->publish_date)) }}
                                    </td>
                                    <td>
                                        {{ date('d/m/Y H:i', strtotime($service->end_date)) }}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('Service.copy', $service->id) }}" type="button" class="btn btn-default btn-sm"><i class="fa fa-copy"></i></a>
                                            <a href="{{ route('Service.edit', $service->id) }}" type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('Service.destroy', $service->id) }}" type="button" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{--<div class="text-center">--}}
                            {{--{{--}}
                                {{--$services->appends([--}}
                                    {{--"title" => Request::get('title'),--}}
                                    {{--"status" => Request::get('status'),--}}
                                    {{--"publish_date" => Request::get('publish_date'),--}}
                                    {{--"end_date" => Request::get('end_date'),--}}
                                    {{--"menu" => Request::get('menu')--}}
                                {{--])->links()--}}
                            {{--}}--}}
                        {{--</div>--}}
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

@endsection
