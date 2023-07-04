<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class Analytics extends Controller
{
  public function index()
  {
      $articles = Article::inRandomOrder()->get();

      return view('content.dashboard.dashboards-analytics', compact('articles'));
  }
}
