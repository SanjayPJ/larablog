<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;
use App\Tag;

class PagesController extends Controller
{
    public function index(){
    	$with_categories = Category::with('posts')->get();
    	$featured = Post::with('tags')->where('featured', '1')->where('status', 'PUBLISHED')->latest()->take(3)->get();
    	// return $featured;
    	return view('home')->with([
    		"categories"=> $with_categories,
    		"featured" => $featured,
    		"title" => "SeosightBlog - Index Page"
    	]);
    }

    public function single($slug){
        $blogtags = Tag::all();
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
                'blogtags' => $blogtags,
    			"title" => "SeosightBlog - " . $post->title . " - Blog Page"
    		]);
    	}
    	abort(404);
    }

    public function categories($slug){
        $blogtags = Tag::all();
    	$categories = Category::all();
    	$category = Category::with('posts')->where('slug', $slug)->first();
    	if($category){
    		return view('categories')->with([
    			'categories' => $categories, 
    			'category' => $category,
                'blogtags' => $blogtags,
    			"title" => "SeosightBlog - " . $category->name . " - Blog Page"
    		]);
    	}
    	abort(404);
    }

    public function tags($id){
        $blogtags = Tag::all();
        $categories = Category::all();
        $tag = Tag::with('posts')->where('id', $id)->first();
        if($tag){
            return view('tags')->with([
                'tag' => $tag, 
                'blogtags' => $blogtags,
                'categories' => $categories,
                "title" => "SeosightBlog - " . $tag->name . " - Blog Page"
            ]);
        }
        abort(404);
    }
}