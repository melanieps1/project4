@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Villain Message</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Compose New Villain Message</h3>

                    <form method="get" action="/message/create" class="form-horizontal">

                        @component('components.static', [
                          'name' => 'From: ',
                          'sender' => $message->sender->name
                          ])
                        @endcomponent

                        @component('components.select', [
                          ])
                        @endcomponent
                        <br>

                        @component('components.field', [
                          'name' => 'Subject: ',
                          'placeholder' => 'Enter the topic of the email'
                          ])
                        @endcomponent

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Message: </label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" placeholder="Enter message here" style="min-height: 200px;"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                              <button class="btn btn-default" type="submit" style="float: right;"><a onclick="sendEmail()" href="{{ route('home') }}">Send Evil Email!</a></button>
                            </div>
                          </div>

                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection