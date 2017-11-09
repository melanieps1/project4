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

                    <form method="get" action="/message/create/">
                        <button class="btn btn-primary">
                            <strong>Compose</strong>
                        </button>
                    </form>

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
                    <tr >
                        <td>
                            @if ($message->is_starred) 
                                <strong style="color: #FFD700;">&#9734;</strong>
                            @elseif (!$message->is_starred)
                                <strong style="color: #e0e0e0;">&#9734;</strong>
                            @endif
                        </td>
                        @if ($message->is_read)
                            <td>{{ $message->sender->name }}</td>
                            <td>{{ $message->recipient->name }}</td>
                            <td><a href="/message/{{ $message->id }}">{{ $message->subject }}</a></td>
                            <td>{{ $message->created_at->format('m/d/Y') }}</td>
                        @else
                            <td><strong>{{ $message->sender->name }}</strong></td>
                            <td><strong>{{ $message->recipient->name }}</strong></td>
                            <td><strong><a href="/message/{{ $message->id }}">{{ $message->subject }}</a></strong></td>
                            <td><strong>{{ $message->created_at->format('m/d/Y') }}</strong></td>
                        @endif
                    </tr>
                    @endforeach
                    </table>

                    <h3>Sent</h3>
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
                        <td><a href="/sent/{{ $message->id }}">{{ $message->subject }}</a></td>
                        <td>{{ $message->created_at->format('m/d/Y') }}</td>
                    </tr>
                    @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
