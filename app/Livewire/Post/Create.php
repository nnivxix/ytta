<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    use WithFileUploads;

    public string $content = '';
    public $thumbnail;

    public function submit()
    {
        $user = Auth::user();
        $validated = $this->validate([
            'content' => ['required'],
            'thumbnail' => 'required|image|max:1024'
        ]);

        $path = $this->thumbnail->store(path: 'public/posts');

        Post::create([
            'user_id'    => $user->id,
            'path_image' => $path,
            'content'    => $this->content,
            'is_public'  => true
        ]);
        // Log::debug('post', $validated);
        return $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.post.create');
    }
}
