@extends('layouts/main')

@section('content')
    <div class="page-header">
        <h1>Edit Game <small>Go on, markit complete!</small></h1>
    </div>

    <form action="{{ action('GamesController@handleEdit') }}" method="post">
        <input name="id" type="hidden" value="{{ $game->id }}"/>

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $game->title }}"/>
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input class="form-control" type="text" name="publisher" id="publisher" value="{{ $game->publisher }}"/>
        </div>
        <div class="chekcbox">
            <label for="complete">
                <input type="checkbox" name="complete" id="complete" {{ $game->complete ? 'checked' : '' }} /> Complete ?
            </label>
        </div>
        <input class="btn btn-primary" type="submit" value="Save"/>
        <a class="btn btn-link" href="{{ action('GamesController@index') }}">Cancel</a>
    </form>
@stop