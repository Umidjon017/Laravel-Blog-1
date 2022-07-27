<?php

namespace App\Http\Livewire\Buttons;

use Illuminate\Support\Facades\File;
use Livewire\Component;

class Delete extends Component
{
    public $post;
    public $confirmPostDelation = false;

    public function confirmPostDelation()
    {
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('confirming-delete-post');
        $this->confirmPostDelation = true;
    }

    public function deletePost()
    {
        File::delete(public_path('img/blog/' . $this->post->cover_image));
        $this->post->delete();

        session()->flash('success', 'Post successfully deleted!');

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.buttons.delete');
    }
}
