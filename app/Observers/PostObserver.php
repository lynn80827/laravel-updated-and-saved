<?php

namespace App\Observers;

use App\Post;

class PostObserver
{
    public function updated(Post $post)
    {
        echo 'updatedAt' . PHP_EOL;
    }

    public function saved(Post $post)
    {
        echo 'saved' . PHP_EOL;
    }
}
