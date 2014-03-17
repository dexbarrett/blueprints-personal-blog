<?php
class PostController extends BaseController
{
    public function getIndex()
    {
        $posts = Post::with('Author')
                    ->orderBy('id', 'DESC')
                    ->paginate(5);

        return View::make('all_posts')
                    ->with(compact('posts'));

    }

    public function getView($id)
    {
        $post = Post::find($id);

        return View::make('view_post')
            ->with('post', $post);
    }

    public function getAdd()
    {
        return View::make('addpost');
    }

    public function postAdd()
    {
        $rules = array(
            'title'   => 'required|min:5|max:255',
            'content' => 'required'
        );

        $validator = Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return Redirect::route('add_new_post')
                ->withInput()
                ->withErrors($validator);
        }

        Post::create(Input::all());

        return Redirect::route('index');
    }
}