@extends('layouts.app')

@section('content')

    <!-- MAIN -->
    <div id="main">
        <div class="wrapper clearfix">



            <!-- posts list -->
            <div id="posts-list">

                <h2 class="page-heading"><span>BLOG</span></h2>

                @foreach ($posts as $post)
                <article class="format-standard">
                    <div class="entry-date"><div class="number">23</div> <div class="year">Sep, 2011</div></div>
                    <div class="feature-image">
                        <a href="img/slides/01.jpg" data-rel="prettyPhoto"><img src="img/slides/01.jpg" alt="Alt text" /></a>
                    </div>
                    <h2  class="post-heading"><a href="{{ route('post') }}">{{$post->title}}</a></h2>
                    <div class="excerpt">{{$post->description}}.{{$post->created_at}}
                    </div>
                    <a href="{{ route('post') }}" class="read-more">continue &#8594;</a>
                    <div class="meta">
                        <div class="categories">In <a href="#">Category 1</a>, <a href="#">Category 2</a></div>
                        <div class="comments"><a href="#">5 comments </a></div>
                        <div class="user"><a href="#">By admin</a></div>
                    </div>
                </article>
                @endforeach

                <!-- page-navigation -->
                <div class="page-navigation clearfix">
                   <div class="nav-next">
                        <a  href=" {{$posts->previousPageUrl()}}">&#8592; Older Entries </a>
                    </div>
                    <div class="nav-previous">
                        <a href="{{$posts->nextPageUrl()}}">Newer Entries &#8594;</a>
                    </div>
                    <!--ENDS page-navigation -->

                </div>


            </div>
            <!-- ENDS posts list -->

            <!-- sidebar -->
            <aside id="sidebar">

                <ul>
                    <li class="block">
                        <h4>CATEGORIES</h4>
                        <ul>
                            @foreach ($categories as $category)
                            <li class="cat-item"><a href="#" title="View all posts">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="block">
                        <h4>ARCHIVES</h4>
                        <ul>
                            <li class="cat-item"><a href="#" title="View all posts">January</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">February</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">March</a></li>
                        </ul>
                    </li>

                </ul>

                <em id="corner"></em>
            </aside>
            <!-- ENDS sidebar -->

        </div>
    </div>
    <!-- ENDS MAIN -->

@endsection