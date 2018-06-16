@extends('layouts.app')

@section('content')

    <!-- MAIN -->
    <div id="main">
        <div class="wrapper">

            <!-- slider holder -->
            <div id="slider-holder" class="clearfix">

                <!-- slider -->
                <div class="flexslider home-slider">
                    <ul class="slides">
                        <li>
                            <img src="img/slides/01.jpg" alt="alt text" />
                        </li>
                        <li>
                            <img src="img/slides/02.jpg" alt="alt text" />
                            <p class="flex-caption">Pellentesque habitant morbi  feugiat vitae.</p>
                        </li>
                        <li>
                            <img src="img/slides/03.jpg" alt="alt text" />
                        </li>
                    </ul>
                </div>
                <!-- ENDS slider -->

                <div class="home-slider-clearfix "></div>

                <!-- Headline -->
                <div id="headline">
                    <h1>RESPONSIVE, FREE AND SLEEK</h1>
                    <p>Zeni is a FREE Responsive HTML 5 Template.</p>
                    <p>Visit my <a href="http://www.luiszuno.com">site</a> for more freebies</p>
                    <em id="corner"></em>
                </div>
                <!-- ENDS headline -->


            </div>
            <!-- ENDS slider holder -->


            <!-- home-block -->
            <div class="home-block" >
                <h2 class="home-block-heading"><span>FEATURED POSTS</span></h2>
                <div class="one-third-thumbs clearfix" >
                    <figure>
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-1.jpg" alt="Alt text" /></a>
                    </figure>

                    <figure>
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-2.jpg" alt="Alt text" /></a>
                    </figure>

                    <figure class="last">
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-3.jpg" alt="Alt text" /></a>
                    </figure>

                    <figure>
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-4.jpg" alt="Alt text" /></a>
                    </figure>

                    <figure>
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-5.jpg" alt="Alt text" /></a>
                    </figure>

                    <figure class="last">
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-6.jpg" alt="Alt text" /></a>
                    </figure>


                </div>
            </div>
            <!-- ENDS home-block -->


            <!-- home-block -->
            <div class="home-block">
                <h2 class="home-block-heading"><span>LATEST PROJECTS</span></h2>
                <div class="one-fourth-thumbs clearfix">


                    <figure>
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-7.jpg" alt="Alt text" /></a>
                    </figure>

                    <figure>
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-8.jpg" alt="Alt text" /></a>
                    </figure>

                    <figure>
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-9.jpg" alt="Alt text" /></a>
                    </figure>

                    <figure class="last">
                        <figcaption>
                            <strong>Pellentesque habitant morbi</strong>
                            <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
                            <em>December 08, 2011</em>
                            <a href="{{ url('/post') }}" class="opener"></a>
                        </figcaption>

                        <a href="{{ url('/post') }}"  class="thumb"><img src="img/dummies/featured-10.jpg" alt="Alt text" /></a>
                    </figure>

                    <a href="#" class="more-link right">More projects  &#8594;</a>



                </div>


            </div>
            <!-- ENDS home-block -->

        </div>
    </div>
    <!-- ENDS MAIN -->

@endsection
