@extends('admin.layout')
@section('title', 'Contact index')

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/blue.css') }}">
@endsection
@php
    $from = $limit*($contacts->currentPage()-1) + 1;
    if ($contacts->currentPage() != $contacts->lastPage()) {
        $to = $limit*($contacts->currentPage()-1) + $limit;
    } else {
        $to = $contacts->total();
    }
@endphp
@section('content')
    <div id="url-delete-mail" data-url="{{ route('contact.delete') }}"></div>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Inbox</h3>
                        <div class="box-tools pull-right">
                            <div class="has-feedback">
                                <span>{{ $from }}-{{ $to }}/{{ $contacts->total() }}</span>
                            </div>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                                <i class="fa fa-square-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-default btn-sm delete-mail">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </th>
                                        <th>Status</th>
                                        <th>Customer name</th>
                                        <th>Content</th>
                                        <th>Attachment</th>
                                        <th>Time contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td><input class="mailbox-id" type="checkbox" value="{{ $contact->id }}"></td>
                                        <td class="mailbox-star"><a href="#"><i class="fa {{ ($contact->status == 1) ? 'fa-star-o' : 'fa-star'  }} text-yellow"></i></a></td>
                                        <td class="mailbox-name"><a href="{{ route('contact.show', $contact->id) }}">{{ $contact->name }}</a></td>
                                        <td class="mailbox-subject">
                                            <b>{{ $contact->subject }}</b> - {{ (strlen($contact->content) > 50) ? substr($contact->content, 0, 47) . ' ... ' : $contact->content }}
                                        </td>
                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                        <td class="mailbox-date">{{ timeElapsedString($contact->created_at) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer no-padding">
                        <div class="mailbox-controls">
                            <div class="pull-right">
                                {{ $contacts->links() }}
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                    </div>
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script src="{{ asset('admin/js/icheck.min.js') }}"></script>
    <script>
        $(function () {
            var url = $('#url-delete-mail').data('url');
            $('.delete-mail').click(function () {
                var deletes = [];
                $.each($(".mailbox-messages input[type='checkbox']:checked"), function(){
                    deletes.push($(this).val());
                });
                console.log(deletes);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        "delete": deletes,
                        "_token": "{{ csrf_token() }}"
                    }
                }).done(function (data) {
                    location.reload();
                }).fail(function (data) {
                    console.log("Error");
                });
            });
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            $('.mailbox-messages input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });

            //Enable check and uncheck all functionality
            $(".checkbox-toggle").click(function () {
                var clicks = $(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                    $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("check");
                    $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
                }
                $(this).data("clicks", !clicks);
            });

            //Handle starring for glyphicon and font awesome
            $(".mailbox-star").click(function (e) {
                e.preventDefault();
                //detect type
                var $this = $(this).find("a > i");
                var glyph = $this.hasClass("glyphicon");
                var fa = $this.hasClass("fa");

                //Switch states
                if (glyph) {
                    $this.toggleClass("glyphicon-star");
                    $this.toggleClass("glyphicon-star-empty");
                }

                if (fa) {
                    $this.toggleClass("fa-star");
                    $this.toggleClass("fa-star-o");
                }
            });
        });
    </script>
@endsection
