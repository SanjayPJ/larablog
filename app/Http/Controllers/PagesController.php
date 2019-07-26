<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class PagesController extends Controller
{
    public function index(){
    	$with_categories = Category::with('posts')->get();
    	$featured = Post::where('featured', '1')->where('status', 'PUBLISHED')->latest()->take(3)->get();
    	// return $categories;
    	return view('home')->with([
    		"categories"=> $with_categories,
    		"featured" => $featured,
    		"title" => "SeosightBlog - Index Page"
    	]);
    }

    public function single($slug){
    	$categories = Category::all();
    	$post = Post::where('slug', $slug)->with('author')->first();
        $next_post = Post::where('status', 'PUBLISHED')->where('id', '>', $post->id)->first();
        $prev_post = Post::where('status', 'PUBLISHED')->where('id', '<', $post->id)->first();
    	if($post){
    		return view('single')->with([
    			'categories' => $categories, 
    			'post' => $post,
                'next_post' => $next_post,
                'prev_post' => $prev_post,
    			"title" => "SeosightBlog - " . $post->title . " - Blog Page"
    		]);
    	}
    	abort(404);
    }

    public function categories($slug){
    	$categories = Category::all();
    	$category = Category::with('posts')->where('slug', $slug)->first();
    	if($category){
    		return view('categories')->with([
    			'categories' => $categories, 
    			'category' => $category,
    			"title" => "SeosightBlog - " . $category->name . " - Blog Page"
    		]);
    	}
    	abort(404);
    }
}