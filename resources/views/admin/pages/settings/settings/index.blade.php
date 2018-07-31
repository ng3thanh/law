@extends('admin.layout')
@section('title', 'Slides setting')

@section('css')
@endsection

@section('content')
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Footer settings
                    <small class="pull-right">Date: 2/10/2014</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <i class="fa fa-{{ $footerInfo[1][0]->icon }}"></i> <strong class="text-capitalize">{{ $footerInfo[1][0]->name }}</strong>: <span>{{ $footerInfo[1][0]->value }}</span>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                @foreach($footerInfo[2] as $key => $value)
                    <i class="fa fa-{{ $value->icon }}"></i> <strong class="text-capitalize">{{ $value->name }}</strong>: <span>{{ $value->value }}</span><br>
                @endforeach
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                @foreach($footerInfo[3] as $key => $value)
                    <i class="fa fa-{{ $value->icon }}"></i> <strong class="text-capitalize">{{ $value->name }}</strong>: <span>{{ $value->value }}</span><br>
                @endforeach
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <hr>
        <!-- Table row -->
        <div class="row">
            <div class="box-body">
                <form role="form" id="update-setting" class="form-horizontal" action="{{ route('footer.update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Title <span class="span-red">*</span></label>
                            <div class="col-sm-9 input-group">
                                <input type="text" id="title" name="title" class="form-control" placeholder="Title ..." value="{{ old('title') }}">
                                @include('elements.error_line', ['attribute' => 'title'])
                            </div>
                        </div>
                    </div>
                </form>

                <div class="box-footer col-xs-12" style="margin-top: 20px; padding-top: 20px">
                    <div class="col-xs-8 col-xs-offset-2">
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-default" form="update-setting" type="submit">Create</button>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <button class="btn btn-block btn-default" form="update-setting" type="reset">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
@endsection

@section('script')

@endsection
