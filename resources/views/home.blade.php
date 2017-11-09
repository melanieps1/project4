@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Villain Mail</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Inbox</h3>
                    <table class="table">
                    <tr>
                        <th></th>
                        <th>From</th>
                        <th>To</th>
                        <th>Subject</th>
                        <th>Date</th>
                    </tr>
                    @foreach ($received_messages as $message)
                    <tr>
                        <td>
                            @if ($message->is_starred) 
                                <strong>&#9734;</strong>
                            @endif
                        </td>
                        <td>{{ $message->sender->name }}</td>
                        <td>{{ $message->recipient->name }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->created_at }}</td>
                    </tr>
                    @endforeach
                    </table>

                    <h3>Outbox</h3>
                    <table class="table">
                    <tr>
                        <th></th>
                        <th>From</th>
                        <th>To</th>
                        <th>Subject</th>
                        <th>Date</th>
                    </tr>
                    @foreach ($sent_messages as $message)
                    <tr>
                        <td>
                            @if ($message->is_starred) 
                                <strong>&#9734;</strong>
                            @endif
                        </td>
                        <td>{{ $message->sender->name }}</td>
                        <td>{{ $message->recipient->name }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->created_at }}</td>
                    </tr>
                    @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
