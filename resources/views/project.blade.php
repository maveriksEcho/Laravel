@extends('layouts.app')

@section('content')

    <!-- MAIN -->
    <div id="main">
        <div class="wrapper clearfix">


            <h2 class="page-heading"><span>WORK</span></h2>




            <!-- project content -->
            <div id="project-content" class="clearfix">



                <!-- slider -->
                <div class="project-slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="img/slides/01.jpg" alt="alt text" />
                            </li>
                            <li>
                                <img src="img/slides/02.jpg" alt="alt text" />
                            </li>
                            <li>
                                <img src="img/slides/03.jpg" alt="alt text" />
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ENDS slider -->

                <!-- heading -->
                <div class="project-heading">
                    <h2>Project name</h2>
                    <a href="http://www.thebeaststudio.com/" class="launch">Launch project</a>
                    <div class="clearfix"></div>
                </div>
                <!-- ENDS heading -->


                <div class="project-description">
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
                </div>

                <div class="project-info">
                    <p>
                        <strong>Date</strong><br/>
                        March 12, 2011
                    </p>
                    <p>
                        <strong>Skills</strong><br/>
                        Photoshop, Illustrator
                    </p>
                </div>
                <div class="clearfix"></div>

                <div class="project-pager">
                    <a class="previous-project" href="#">&#8592; Previous project</a>
                    <a class="next-project" href="#">Next project &#8594;</a>
                </div>


                <!-- related -->
                <div class="related-projects">
                    <div class="related-heading">Related projects</div>
                    <div class="related-list">
                        <figure>
                            <a href="#" class="thumb"><img src="img/dummies/featured-1.jpg" alt="Alt text" /></a>
                            <a href="single.html" class="heading">Pellentesque habitant morbi</a>
                        </figure>

                        <figure>
                            <a href="#" class="thumb"><img src="img/dummies/featured-2.jpg" alt="Alt text" /></a>
                            <a href="single.html" class="heading">Pellentesque habitant morbi</a>
                        </figure>

                        <figure>
                            <a href="#" class="thumb"><img src="img/dummies/featured-3.jpg" alt="Alt text" /></a>
                            <a href="single.html" class="heading">Pellentesque habitant morbi</a>
                        </figure>

                        <figure class="last">
                            <a href="#" class="thumb"><img src="img/dummies/featured-4.jpg" alt="Alt text" /></a>
                            <a href="single.html" class="heading">Pellentesque habitant morbi</a>
                        </figure>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- ENDS related -->

            </div>
            <!--  ENDS project content-->


        </div>
    </div>
    <!-- ENDS MAIN -->

@endsection