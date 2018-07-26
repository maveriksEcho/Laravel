@extends('layouts.app')

@section('content')

    <!-- MAIN -->
    <div id="main">
        <div class="wrapper clearfix">


            <!-- posts list -->
            <div id="posts-list">

                <h2 class="page-heading"><span>BLOG</span></h2>


            @foreach ($posts as $post)
            @include('partials.post', ['post' => $post])
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
        @include('partials.right-column', ['categories' => $categories])
            <!-- ENDS sidebar -->

        </div>
    </div>
    <!-- ENDS MAIN -->

@endsection