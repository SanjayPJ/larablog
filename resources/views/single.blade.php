@extends('layouts.app')

@section('content')
    <div class="content-wrapper">

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{ $post->title }}</h1>
    </div>
</div>

<!-- End Stunning Header -->

<!-- Post Details -->


<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{ url('/storage/' . $post->image)  }}" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                    <a href="#" class="post__author-link"> {{ $post->author->name }}</a>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <span class="published">
                                    {{ $post->updated_at->diffForHumans() }}
                                </span>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="#">Business,</a>
                                <a href="#">Seo</a>
                            </span>

                        </div>

                        <div class="post__content-info">
                            {!! $post->body !!}
                        </div>
                    </div>

                    <div class="socials text-center">
                        <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
                    </div>

                </article>

                <div class="blog-details-author">

                    <div class="blog-details-author-thumb">
                        <img src="{{ url('/storage/' . $post->author->avatar) }}" alt="Author" width="100px">
                    </div>

                    <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name">{{ $post->author->name }}</h5>
                            <p class="author-info">SEO Specialist</p>
                        </div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod.
                        </p>
                        <div class="socials">

                            <a href="#" class="social__item">
                                <img src="{{ url('app/svg/circle-facebook.svg') }}" alt="facebook">
                            </a>

                            <a href="#" class="social__item">
                                <img src="{{ url('app/svg/twitter.svg') }}" alt="twitter">
                            </a>

                            <a href="#" class="social__item">
                                <img src="{{ url('app/svg/google.svg') }}" alt="google">
                            </a>

                            <a href="#" class="social__item">
                                <img src="{{ url('app/svg/youtube.svg') }}" alt="youtube">
                            </a>

                        </div>
                    </div>
                </div>

                <div class="pagination-arrow">
                    @if($next_post)
                    <a href="{{ route('post.single', ['slug' => $next_post->slug]) }}" class="btn-prev-wrap">
                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                        <div class="btn-content">
                            <div class="btn-content-title">Next Post</div>
                            <p class="btn-content-subtitle">{{ Str::limit($next_post->title, 40) }}</p>
                        </div>
                    </a>
                    @endif

                    @if($prev_post)
                    <a href="{{ route('post.single', ['slug' => $prev_post->slug]) }}" class="btn-next-wrap">
                        <div class="btn-content">
                            <div class="btn-content-title">Previous Post</div>
                            <p class="btn-content-subtitle">{{ Str::limit($prev_post->title, 40) }}</p>
                        </div>
                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                    @endif

                </div>

                <div class="comments">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @include('inc.comments')
                </div>


            </div>

            <!-- End Post Details -->
                <!-- Sidebar-->

            <div class="col-lg-12 mt-5">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL BLOG TAGS</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">
                            <a href="#" class="w-tags-item">SEO</a>
                            <a href="#" class="w-tags-item">Advertising</a>
                            <a href="#" class="w-tags-item">Business</a>
                            <a href="#" class="w-tags-item">Optimization</a>
                            <a href="#" class="w-tags-item">Digital Marketing</a>
                            <a href="#" class="w-tags-item">Social</a>
                            <a href="#" class="w-tags-item">Keyword</a>
                            <a href="#" class="w-tags-item">Strategy</a>
                            <a href="#" class="w-tags-item">Audience</a>
                        </div>
                    </div>
                </aside>
            </div>

            <!-- End Sidebar-->

        </main>
    </div>
</div>
@endsection