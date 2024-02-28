<?php
namespace App\Livewire\Post;


use Livewire\Component;
use App\Models\Posts;

class ListPost extends Component
{
    public function render()
    {
        return view('livewire.post.list-post', [
            'posts' => Posts::latest()->paginate(),
        ]);
    }
}
