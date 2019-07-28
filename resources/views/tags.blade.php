@extends('layouts.app')

@section('content')

        <!-- Stunning Header -->

        <div class="stunning-header stunning-header-bg-lightviolet">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Tag: {{ $tag->name }}</h1>
            </div>
        </div>

        <!-- End Stunning Header -->

        <!-- Post Details -->


        <div class="container">
            <div class="row medium-padding120">
                <main class="main">

                    <div class="row">
                        @foreach($tag->posts as $post)
                            <div class="case-item-wrap">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb">
                                            <img src="{{ url('/storage/'. $post->image) }}" alt="our case">
                                        </div>
                                        <h6 class="case-item__title"><a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                        </h6>
                                        <p><small>{{ Str::limit($post->excerpt, 130) }}</small></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- End Post Details -->
                    <br>
                    <br>
                    <br>
                    
                    @include('inc.all-tags')

                </main>
            </div>
        </div>
@endsection