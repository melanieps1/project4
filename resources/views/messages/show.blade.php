@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Message</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>
                        <strong>{{ $message->subject }}</strong>
                        @if ($message->is_starred) 
                            <strong style="color: #FFD700;">&#9734;</strong>
                        @elseif (!$message->is_starred)
                            <strong style="color: #e0e0e0;">&#9734;</strong>
                        @endif
                    </h4>
                    <p>From: {{ $message->recipient->name }}</p>
                    <p style="float: right;">Sent: {{ $message->created_at->format('F d, Y') }}</p>
                    <p>To: {{ $message->sender->name }}</p>
                    <br>
                    <p>{{ $message->body }}</p>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection