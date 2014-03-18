<?php
class Post extends Eloquent
{
    protected $fillable = array('title', 'content', 'author_id');

    public function author()
    {
        return $this->belongsTo('User');
    }

    public function summarize($length = 40)
    {
        $content = $this->content;

        if (strlen($content) > $length) {
            $content = substr($content, 0, $length) . ' [...]';
        }

        return $content;

    }
}