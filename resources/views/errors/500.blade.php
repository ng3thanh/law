@extends('errors.elayout')

@section('title', '500 Internal Server Error')

@section('content')
    <div class="col-md-12">
        <div class="error-template">
            <h1>Oops!</h1>
            <h2>500 Internal Server Error</h2>
            <div class="error-details">Sorry, There are some problems!</div>
            <div class="error-actions">
                <a href="{{ route('main') }}" class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-home"></span>
                    Take Me Home
                </a>
                <a href="{{ route('main') . '#contact' }}" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-envelope"></span> Contact Support
                </a>
            </div>
        </div>
    </div>
@endsection
