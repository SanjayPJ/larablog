@extends('layouts.app')

@section('content')

        <div class="header-spacer"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{ url('/storage/'. $featured[0]->image) }}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{ url('/storage/'. $featured[0]->image) }}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="{{ route('post.single', ['slug' => $featured[0]->slug]) }}" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href="{{ route('post.single', ['slug' => $featured[0]->slug]) }}">{{ $featured[0]->title }}</a>
                                </h2>

                                <p><small>{{ Str::limit($featured[0]->excerpt, 140) }}</small></p>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <span class="published">
                                            {{ $featured[0]->updated_at->diffForHumans() }}
                                        </span>

                                    </span>

                                    @if(count($featured[0]->tags))
                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            @foreach ($featured[0]->tags as $key => $tag)
                                                <a href="{{ route('tags.single', ['id' => $tag->id]) }}">{{ $tag->name }}</a>
                                                @if(!($key + 1 === count($featured[0]->tags)))
                                                ,
                                                @endif
                                            @endforeach
                                        </span>
                                    @endif

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        disqus
                                    </span>

                                </div>
                            </div>
                        </div>

                    </article>
                </div>
                <div class="col-lg-2"></div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{ url('/storage/'. $featured[1]->image) }}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{ url('/storage/'. $featured[1]->image) }}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="{{ route('post.single', ['slug' => $featured[1]->slug]) }}" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href="{{ route('post.single', ['slug' => $featured[1]->slug]) }}">{{ $featured[1]->title }}</a>
                                </h2>

                                <p><small>{{ Str::limit($featured[1]->excerpt, 140) }}</small></p>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <span class="published">
                                            {{ $featured[1]->created_at->diffForHumans() }}
                                        </span>

                                    </span>

                                    @if(count($featured[1]->tags))
                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            @foreach ($featured[1]->tags as $key => $tag)
                                                <a href="{{ route('tags.single', ['id' => $tag->id]) }}">{{ $tag->name }}</a>
                                                @if(!($key + 1 === count($featured[1]->tags)))
                                                ,
                                                @endif
                                            @endforeach
                                        </span>
                                    @endif

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        disqus
                                    </span>

                                </div>
                            </div>
                        </div>

                    </article>
                </div>
                <div class="col-lg-6">
                    <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{ url('/storage/'. $featured[2]->image) }}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{ url('/storage/'. $featured[2]->image) }}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="{{ route('post.single', ['slug' => $featured[2]->slug]) }}" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href="{{ route('post.single', ['slug' => $featured[2]->slug]) }}">{{ $featured[2]->title }}</a>
                                </h2>

                                <p><small>{{ Str::limit($featured[2]->excerpt, 140) }}</small></p>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <span class="published">
                                            {{ $featured[2]->created_at->diffForHumans() }}
                                        </span>

                                    </span>
                                    @if(count($featured[2]->tags))
                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            @foreach ($featured[2]->tags as $key => $tag)
                                                <a href="{{ route('tags.single', ['id' => $tag->id]) }}">{{ $tag->name }}</a>
                                                @if(!($key + 1 === count($featured[2]->tags)))
                                                ,
                                                @endif
                                            @endforeach
                                        </span>
                                    @endif

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        disqus
                                    </span>

                                </div>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row medium-padding120 bg-border-color">
                <div class="container">
                    <div class="col-lg-12">
                        @foreach ($categories as $category)
                        <div class="offers">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading">
                                        <h4 class="h1 heading-title">{{ $category->name }}</h4>
                                        <div class="heading-line">
                                            <span class="short-line"></span>
                                            <span class="long-line"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="case-item-wrap">

                                    @foreach ($category->posts as $key=>$post)
                                        @if ($key < 3)
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="case-item">
                                                    <div class="case-item__thumb">
                                                        <img src="{{ url('/storage/'. $post->image) }}" alt="our case">
                                                    </div>
                                                    <h6 class="case-item__title"><a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h6>
                                                    <p><small>{{ Str::limit($post->excerpt, 130) }}</small></p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <a href="{{ route('categories.index', ['slug' => $category->slug]) }}" class="ml-5">see more &rarr;</a>
                        </div>
                        <div class="padded-50"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection