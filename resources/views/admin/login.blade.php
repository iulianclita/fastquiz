@extends('layout')

@section('title')
    FastQuiz - Admin Zone
@stop

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        <div style="margin-top:150px;" class="panel panel-primary">
          <div class="panel-heading"><h4>Guess my name or get the fuck out</h4></div>
          <div class="panel-body">
            <form method="POST" action="{{ route('admin.post.login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="password" class="form-control" name="name" placeholder="What's my name, son?" required />
                </div>
                <button type="submit" class="btn btn-primary">I'm lucky!</button>
            </form>
          </div>
        </div>
    </div>
</div>

@stop
