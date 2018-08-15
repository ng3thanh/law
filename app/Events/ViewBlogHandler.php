<?php

namespace App\Events;

use App\Models\Blogs;
use Illuminate\Session\Store;

class ViewBlogHandler
{
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function handle(Blogs $blog)
    {
        dd($blog);
        if (!$this->isPostViewed($blog))
        {
            $blog->increment('view');
            $this->storePost($blog);
        }
    }

    private function isPostViewed($blog)
    {
        $viewed = $this->session->get('viewed_blogs', []);

        return array_key_exists($blog->id, $viewed);
    }

    private function storePost($blog)
    {
        $key = 'viewed_blogs.' . $blog->id;

        $this->session->put($key, time());
    }
}