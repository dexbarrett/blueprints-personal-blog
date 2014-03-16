<?php
class PostController extends BaseController
{
    public function getIndex()
    {
        $posts = Post::with('Author')
                    ->orderBy('id', 'DESC')
                    ->paginate(5);

        return View::make('index')
                    ->with(compact('posts'));

    }

    public function getAdd()
    {
        return View::make('addpost');
    }

    public function postAdd()
    {
        Post::create(Input::all());

        return Redirect::route('index');
    }
}