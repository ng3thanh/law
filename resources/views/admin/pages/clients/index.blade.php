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
                                <th>Client name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach($clients as $client)
                                <tr class="body-table">
                                    <td>{{ $number++ }}</td>
                                    <td class="text-left">
                                        <a href="#" target="_blank">
                                            <span class="short-text">{{ $client->name }}</span>
                                        </a>
                                    </td>
                                    <td>
                                        <img class="img-thumbnail" src='{{ asset("$client->image") }}' width="50px" height="">
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('clients.edit', $client->id) }}" type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('clients.destroy', $client->id) }}" type="button" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="text-center"> {{ $clients->links() }}</div>
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
