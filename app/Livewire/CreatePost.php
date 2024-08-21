<?php

namespace App\Livewire;

use App\Models\Post;
use App\Mail\PostMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class CreatePost extends Component
{
    
    public $title = '';
    public $content = '';

    public function save()
    {

    $contactData = $this->only(['title', 'content']);

    Mail::to('noreply@powerwin.com.au')->send(new PostMail($contactData));
      return redirect('/post')
        ->with('message', 'Post successfully created.');
    }




    public function render()
    {
        return view('livewire.create-post');
    }

}
