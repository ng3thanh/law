@extends('admin.layout')

@section('title', 'Create new blog')

@section('css')
@endsection

@php
    $oldPlDate = old('publish_date');
    $publishDate = isset($oldPlDate) ? $oldPlDate : date('m/d/Y');
@endphp
@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create new blog</h3>
            </div>
            <div class="box-body">
                <form role="form" id="create-new-blog" class="form-horizontal" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-xs-12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_en" data-toggle="tab" aria-expanded="true">English</a></li>
                                <li class=""><a href="#tab_vn" data-toggle="tab" aria-expanded="false">Vietnamese</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_en">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Title <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" id="title" name="title" data-rule-required="true" class="form-control" placeholder="Title ..." value="{{ old('title') }}">
                                            @include('elements.error_line', ['attribute' => 'title'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Slug <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug') }}">
                                            @include('elements.error_line', ['attribute' => 'slug'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Description <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="des_ckediter" name="description" rows="8" cols="80">{{ old('description') }}</textarea>
                                            @include('elements.error_line', ['attribute' => 'description'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Content <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="content_ckediter" name="content" rows="10" cols="80">{{ old('content') }}</textarea>
                                            @include('elements.error_line', ['attribute' => 'content'])
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_vn">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Title <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Title ..." value="{{ old('title') }}">
                                            @include('elements.error_line', ['attribute' => 'title'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Slug <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug') }}">
                                            @include('elements.error_line', ['attribute' => 'slug'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Description <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="des_ckediter_vn" name="description" rows="8" cols="80">{{ old('description') }}</textarea>
                                            @include('elements.error_line', ['attribute' => 'description'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Content <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="content_ckediter_vn" name="content" rows="10" cols="80">{{ old('content') }}</textarea>
                                            @include('elements.error_line', ['attribute' => 'content'])
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <!-- nav-tabs-custom -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Main image <span class="span-red">*</span></label>
                                    <div class="col-sm-9 input-group">
                                        <input type="file" class="form-control" name="image">
                                        @include('elements.error_line', ['attribute' => 'image'])
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> Publish date <span class="span-red">*</span></label>
                                    <div class="col-sm-9 input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right datepicker" name="publish_date" value="{{ $publishDate }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"> End date <span class="span-red">*</span></label>
                                    <div class="col-sm-9 input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right datepicker" name="end_date" value="{{ old('end_date') }}">
                                    </div>
                                </div>

                                <div class="button-list col-lg-12">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="col-lg-3">
                                            <button class="btn btn-block btn-default" form="create-new-blog" type="submit">Create</button>
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-3">
                                            <button class="btn btn-block btn-default" form="create-new-blog" type="reset">Reset</button>
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-3">
                                            <a href="{{ route('blog.index') }}" class="btn btn-block btn-default">Back</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.tab-content -->
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/js/utilities/jquery.validate.messages.js') }}"></script>
    <script src="{{ asset('admin/js/utilities/form.validate.js') }}"></script>
    <script src="{{ asset('admin/js/pages/blog/blog.create.js') }}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('des_ckediter');
            var contentEditor = CKEDITOR.replace( 'content_ckediter' );
            CKFinder.setupCKEditor(contentEditor);
            CKEDITOR.replace('des_ckediter_vn');
            var contentEditorVn = CKEDITOR.replace( 'content_ckediter_vn' );
            CKFinder.setupCKEditor(contentEditorVn);
            BlogCreate.init();
            FormUtil.validate('#create-new-blog');
        });
    </script>
@endsection
