<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $totalPublishedPosts = Post::where('status', 1)->count();
        $totalUnpublishedPosts = Post::where('status', 0)->count();

        return view('dashboard', compact('totalPosts', 'totalPublishedPosts', 'totalUnpublishedPosts'));
    }
    
}
