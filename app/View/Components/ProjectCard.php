<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectCard extends Component
{
  public $image;
  public $title;
  public $description;
  public $githubLink;
  public $liveSiteLink;

  public function __construct($image, $title, $description, $githubLink, $liveSiteLink)
  {
    $this->image = $image;
    $this->title = $title;
    $this->description = $description;
    $this->githubLink = $githubLink;
    $this->liveSiteLink = $liveSiteLink;
  }

  public function render()
  {
    return view('components.project-card');
  }
}
