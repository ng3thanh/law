@extends('errors.elayout')

@section('title', '404 Page Not Found')

@section('content')
    <div class="col-md-12">
        <div class="error-template">
            <h1>Oops!</h1>
            <h2>404 Not Found</h2>
            <div class="error-details">Sorry, an error has occured, Requested page not found!</div>
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
