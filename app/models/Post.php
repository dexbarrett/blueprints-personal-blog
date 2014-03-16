<?php
class Post extends Eloquent
{
    protected $fillable = array('title', 'content', 'author_id');

    public function Author()
    {
        return $this->belongsTo('User', 'author_id');
    }
}