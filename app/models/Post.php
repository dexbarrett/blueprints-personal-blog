<?php
class Post extends Eloquent
{
    protected $fillable = array('title', 'content', 'author_id');

    public function author()
    {
        return $this->belongsTo('User', 'author_id');
    }
}