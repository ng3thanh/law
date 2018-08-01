@extends('admin.layout')
@section('title', 'Blog list')

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
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Publish date</th>
                                <th>End date</th>
                                <th>Action</th>
                            </tr>
                            @foreach($blogs as $blog)
                                <tr class="body-table">
                                    <td>{{ $number++ }}</td>
                                    <td class="text-left">
                                        <a href="#" target="_blank">
                                            <span class="short-text">{{ $blog->title }}</span>
                                        </a>
                                    </td>
                                    <td>
                                        <img class="img-thumbnail" src='{{ asset("$blog->image") }}' width="50px" height="">
                                    </td>
                                    <td>
                                        <span class="short-text">{!! $blog->description !!}</span>
                                    </td>
                                    <td>
                                        {{ date('d/m/Y H:i', strtotime($blog->publish_date)) }}
                                    </td>
                                    <td>
                                        {{ date('d/m/Y H:i', strtotime($blog->end_date)) }}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('blog.copy', $blog->id) }}" type="button" class="btn btn-default btn-sm"><i class="fa fa-copy"></i></a>
                                            <a href="{{ route('blog.edit', $blog->id) }}" type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('blog.destroy', $blog->id) }}" type="button" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                                        </div>
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

@endsection
