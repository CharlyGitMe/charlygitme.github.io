<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
  public function index()
  {
    $projects = [
      [
        'image' => '',
        'title' => 'Project 1',
        'description' => 'Description of Project 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'githubLink' => '#',
        'liveSiteLink' => '#',
      ],
      // Add more project data as needed
    ];

    return view('index', compact('projects'));
  }
}
