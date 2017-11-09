@extends('layouts.app')

@section('title')
  Show Message {{ $message->subject }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Villain Message</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4><strong>
                        @if ($message->is_starred) 
                            <strong>&#9734;</strong>
                        @endif
                        {{ $message->subject }}
                        </strong>
                    </h4>
                    <p>From: {{ $message->recipient->name }}</p>
                    <p style="float: right;">Sent: {{ $message->created_at->format('m/d/Y') }}</p>
                    <p>To: {{ $message->sender->name }}</p>
                    <br>
                    <p>{{ $message->body }}</p>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection