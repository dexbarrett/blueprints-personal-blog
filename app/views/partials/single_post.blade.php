    <article>
        <h2>{{ link_to_action('PostController@getView', $post->title, $post->id) }}</h2>
        <p>{{ $post->content }}</p>
        <p>
            <small>
                Posted by <strong>{{ $post->author->name }}</strong> at
                <strong>{{ $post->created_at }}</strong>
            </small>
        </p>
    </article>