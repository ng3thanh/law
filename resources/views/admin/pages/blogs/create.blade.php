@extends('admin.layout')

@section('title', 'Create new blog')

@section('css')
@endsection

@php
    $oldPlDate = old('publish_date');
    $publishDate = isset($oldPlDate) ? $oldPlDate : date('d/m/Y');
@endphp
@section('content')
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Create new blog</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="box-body">
                        <form role="form" id="create-new-blog" class="form-horizontal" action="{{ URL::route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Title</label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" name="title" class="form-control" placeholder="Title ..." value="{{ old('title') }}">
                                        </div>
                                        @include('elements.error_line', ['attribute' => 'title'])
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Slug</label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                                        </div>
                                        @include('elements.error_line', ['attribute' => 'slug'])
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Description</label>
                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="des_ckediter" name="description" rows="8" cols="80">{{ old('description') }}</textarea>
                                        </div>
                                        @include('elements.error_line', ['attribute' => 'description'])
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Content</label>
                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="content_ckediter" name="content" rows="10" cols="80">{{ old('content') }}</textarea>
                                        </div>
                                        @include('elements.error_line', ['attribute' => 'content'])
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Main image</label>
                                        <div class="col-sm-9 input-group">
                                            <input type="file" class="form-control" name="main_img">
                                        </div>
                                        @include('elements.error_line', ['attribute' => 'main_img'])
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Publish date</label>
                                        <div class="col-sm-9 input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right datepicker" name="publish_date" value="{{ $publishDate }}">
                                        </div>
                                        @include('elements.error_line', ['attribute' => 'publish_date'])
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> End date</label>
                                        <div class="col-sm-9 input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right datepicker" name="end_date" value="{{ old('end_date') }}">
                                        </div>
                                        @include('elements.error_line', ['attribute' => 'end_date'])
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="box-footer col-xs-12" style="margin-top: 20px; padding-top: 20px">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="col-xs-3">
                                    <button class="btn btn-block btn-default" form="create-new-blog" type="submit">Create</button>
                                </div>
                                <div class="col-xs-offset-1 col-xs-3">
                                    <button class="btn btn-block btn-default" form="create-new-blog" type="reset">Reset</button>
                                </div>
                                <div class="col-xs-offset-1 col-xs-3">
                                    <a href="{{ URL::route('blog.index') }}" class="btn btn-block btn-default">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(function () {
            CKEDITOR.replace('des_ckediter');
            var contentEditor = CKEDITOR.replace( 'content_ckediter' );
            CKFinder.setupCKEditor(contentEditor);

            $('.datepicker').datepicker({
                autoclose: true
            })
        });
    </script>
@endsection
