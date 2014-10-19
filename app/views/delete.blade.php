@extends('layouts/main')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $game->title }} <small>Are you sure?</small></h1>

        <form action="{{ action('GamesController@handleDelete') }}" method="post">
            <input name="game" type="hidden" value="{{ $game->id }}"/>
            <input class="btn btn-danger" type="submit" value="Yes"/>
            <a class="btn btn-default" href="{{ action('GamesController@index') }}">No way!</a>
        </form>
    </div>
@stop