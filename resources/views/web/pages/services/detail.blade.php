@extends('web.layout')

@section('title', 'Blogs')
@section('css')
    <style>
        .service-detail {
            padding-top: 100px;
        }

        .service-detail .service-footer {
            font-size: 0.8em;
        }

        .service-detail .service-footer .author {
            margin: 0 10px 0 50px;
        }

        .service-detail .service-footer .author .avatar{
            max-width: 40px;
            min-width: 40px;
            height: 40px;
            overflow: hidden;
            border-radius: 50%;
            margin-right: 10px;
        }

        .service-detail .service-footer .title, .service-detail .service-footer .date {
            font-weight: 400;
            color: #999;
            text-transform: capitalize;
            letter-spacing: 0.05em;
        }

        .service-detail .panel.panel-default {
            border-top-width: 3px;
        }

        .service-detail .panel {
            box-shadow: 0 1px 1px -1px rgba(0,0,0,.14),0 1px 2px 0 rgba(0,0,0,.098),0 1px 3px 0 rgba(0,0,0,.084);
            border: 0;
            border-radius: 2px;
            margin-bottom: 16px;
        }
        .service-detail .panel-body {
            padding: 15px 0 15px 0;
        }
        .service-detail .thumb96 {
            width: 96px!important;
            height: 96px!important;
        }
        .service-detail .service-name {
            margin: 15px 0 15px 0;
        }

        .service-detail .service-content {
            padding: 10px 30px 10px 30px;
        }
    </style>
@endsection

@section('content')
    <div class="container bootstrap snippet">
        <div class="row ng-scope service-detail">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div class="pv-lg">
                            <img class="center-block img-responsive img-circle img-thumbnail thumb96" src='{{ asset("$service->image") }}' alt="{{ $service->name or '' }}">
                        </div>
                        <h3 class="m0 text-bold service-name">{{ $service->name or '' }}</h3>
                        <div class="service-footer d-flex align-items-center flex-column flex-sm-row">
                            <a href="#" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar">
                                    <img src="{{ asset('web/img/admin_logo.png') }}" alt="..." class="img-fluid">
                                </div>
                                <div class="title">
                                    <span>Admin</span>
                                </div>
                            </a>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="date meta-last"><i class="icon-clock"></i> {{ timeElapsedString($service->created_at) }}</div>
                            </div>
                        </div>
                        <div class="mv-lg">
                            {!! $service->description or '' !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row pv-lg">
                            <div class="col-lg-8">
                                <span class="service-content">
                                    {!! $service->content !!}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection