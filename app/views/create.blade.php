@extends('layouts/main')

@section('content')
    <div class="page-header">
        <h1>Create Game <small>and someday finish it!</small></h1>
    </div>

    <form action="{{ action('GamesController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title"/>
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input class="form-control" type="text" name="publisher" id="publisher"/>
        </div>
        <div class="checkbox">
            <label for="complete">
                <input type="checkbox" name="complete" id="complete"/> Complete ?
            </label>
        </div>
        <input class="btn btn-primary" type="submit" value="Create"/>
        <a class="btn btn-link" href="{{ action('GamesController@index') }}">Cancel</a>
    </form>
@stop
