@extends('admin.layout')

@section('title', 'Edit service')

@section('css')
@endsection

@php
    $oldName = old('name');
    $oldSlug = old('slug');
    $oldDescription = old('description');
    $oldContent = old('content');
    $name = isset($oldName) ? $oldName : $service->name;
    $slug = isset($oldSlug) ? $oldSlug : $service->slug;
    $description = isset($oldDescription) ? $oldDescription : $service->description;
    $content = isset($oldContent) ? $oldContent : $service->content;
@endphp

@section('content')
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Edit service</h3>
                <div class="box-tools pull-right required-text-box">
                    <span class="span-red">(*): The attribute must be required</span>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="box-body">
                        <form role="form" id="edit-service" class="form-horizontal" action="{{ route('services.update', [ $service->id ]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field("PUT") }}
                            <div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Service <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Service name" value="{{ $name }}">
                                            @include('elements.error_line', ['attribute' => 'name'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Slug <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <input type="text" id="slug" name="slug" class="form-control" value="{{ $slug }}">
                                            @include('elements.error_line', ['attribute' => 'slug'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Description <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="des_ckediter" name="description" rows="8" cols="80">{{ $description }}</textarea>
                                            @include('elements.error_line', ['attribute' => 'description'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Content <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <textarea class="form-control" id="content_ckediter" name="content" rows="10" cols="80">{{ $content }}</textarea>
                                            @include('elements.error_line', ['attribute' => 'content'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Main image <span class="span-red">*</span></label>
                                        <div class="col-sm-9 input-group">
                                            <img class="img-thumbnail" src='{{ asset("$service->image") }}' width="200px" height=""><br><br>
                                            <input type="file" class="form-control" name="image">
                                            @include('elements.error_line', ['attribute' => 'image'])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="box-footer col-xs-12" style="margin-top: 20px; padding-top: 20px">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="col-xs-3">
                                    <button class="btn btn-block btn-default" form="edit-service" type="submit">Update</button>
                                </div>
                                <div class="col-xs-offset-1 col-xs-3">
                                    <button class="btn btn-block btn-default" form="edit-service" type="reset">Reset</button>
                                </div>
                                <div class="col-xs-offset-1 col-xs-3">
                                    <a href="{{ route('services.index') }}" class="btn btn-block btn-default">Back</a>
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
    <script src="{{ asset('admin/js/pages/services/service.create.js') }}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('des_ckediter');
            var contentEditor = CKEDITOR.replace( 'content_ckediter' );
            CKFinder.setupCKEditor(contentEditor);
            ServiceCreate.init();
        });
    </script>
@endsection
