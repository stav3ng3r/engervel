<?php

class GamesController extends BaseController
{
    public function index()
    {

        // Show a listing of games.
        $games = Game::all();
        return View::make('index', compact('games'));
    }

    public function create()
    {
        return View::make('create');
    }

    public function handleCreate()
    {
        // Hanlde create form submission.
        $game = new Game;
        $game->title = Input::get('title');
        $game->publisher = Input::get('publisher');
        $game->complete = Input::has('complete');
        $game->save();

        return Redirect::action('GamesController@index');
    }

    public function edit(Game $game)
    {
        // Show the edit game form.
        return View::make('edit', compact('game'));
    }

    public function handleEdit()
    {
        // Handle edit form submission.

        /** @var Game $game */
        $game = Game::findOrFail(Input::get('id'));
        $game->title = Input::get('title');
        $game->publisher = Input::get('publisher');
        $game->complete = Input::has('complete');
        $game->save();

        return Redirect::action('GamesController@index');

    }

    public function delete(Game $game)
    {
        return View::make('delete', compact('game'));
    }

    public function handleDelete()
    {
        // Handle the delete confirmation
        /** @var  Game $game */
        $id = Input::get('game');
        $game = Game::findOrFail($id);
        $game->delete();

        return Redirect::action('GamesController@index');

    }
}