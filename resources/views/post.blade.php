@extends('layouts.app')

@section('content')

    <!-- MAIN -->
    <div id="main">
        <div class="wrapper clearfix">




            <!-- posts list -->
            <div id="posts-list" class="single-post">

                <h2 class="page-heading"><span>BLOG</span></h2>

                <article class="format-standard">
                    <div class="entry-date"><div class="number">23</div> <div class="year">Sep, 2011</div></div>
                    <div class="feature-image">
                        <a href="img/slides/01.jpg" data-rel="prettyPhoto"><img src="img/slides/01.jpg" alt="Alt text" /></a>
                    </div>
                    <h2  class="post-heading"><a href="single.html">Lorem ipsum dolor ametLorem ipsum dolor ametLorem ipsum dolor ametLorem ipsum dolor amet</a></h2>
                    <div class="post-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed.
                    </div>
                    <div class="meta">
                        <div class="categories">In <a href="#">Category 1</a>, <a href="#">Category 2</a></div>
                        <div class="comments"><a href="#">5 comments </a></div>
                        <div class="user"><a href="#">By admin</a></div>
                    </div>



                    <!-- comments list -->
                    <div id="comments-wrap">
                        <h3 class="heading">5 COMMENTS</h3>
                        <ol class="commentlist">

                            <li class="comment even thread-even depth-1" id="li-comment-1">

                                <div id="comment-1" class="comment-body clearfix">
                                    <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />
                                    <div class="comment-author vcard">Jhon</div>
                                    <div class="comment-meta commentmetadata">
                                        <span class="comment-date">3 days ago  </span>
                                        <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm("comment-1", "1", "respond", "432")'>Reply</a></span>

                                    </div>
                                    <div class="comment-inner">
                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                    </div>
                                </div>

                                <!-- child -->
                                <ul class='children'>
                                    <li class="comment even alt depth-2" id="li-comment-2-1">
                                        <div id="comment-2" class="comment-body clearfix">
                                            <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />
                                            <div class="comment-author vcard">Jhon</div>
                                            <div class="comment-meta commentmetadata">
                                                <span class="comment-date">1 hour ago  </span>
                                                <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=24#respond' onclick='return addComment.moveForm("comment-2", "2", "respond", "432")'>Reply</a></span>
                                            </div>
                                            <div class="comment-inner">
                                                <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="comment odd alt depth-2" id="li-comment-2-2">
                                        <div id="comment-3" class="comment-body clearfix">
                                            <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />
                                            <div class="comment-author vcard">Jhon</div>
                                            <div class="comment-meta commentmetadata">
                                                <span class="comment-date">1 hour ago  </span>
                                                <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=24#respond' onclick='return addComment.moveForm("comment-3", "2", "respond", "432")'>Reply</a></span>
                                            </div>
                                            <div class="comment-inner">
                                                <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                                <!-- ENDS child -->
                            </li>


                            <li class="comment odd thread-even depth-1" id="li-comment-3">

                                <div id="comment-4" class="comment-body clearfix">
                                    <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />
                                    <div class="comment-author vcard">Jhon</div>
                                    <div class="comment-meta commentmetadata">
                                        <span class="comment-date">3 days ago  </span>
                                        <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm("comment-4", "1", "respond", "432")'>Reply</a></span>

                                    </div>
                                    <div class="comment-inner">
                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="comment even thread-even depth-1" id="li-comment-4">

                                <div id="comment-5" class="comment-body clearfix">
                                    <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />
                                    <div class="comment-author vcard">Jhon</div>
                                    <div class="comment-meta commentmetadata">
                                        <span class="comment-date">3 days ago  </span>
                                        <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm("comment-5", "1", "respond", "432")'>Reply</a></span>

                                    </div>
                                    <div class="comment-inner">
                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                    </div>
                                </div>
                            </li>


                        </ol>
                    </div>
                    <!-- ENDS comments list -->


                    <!-- Respond -->
                    <div id="respond">

                        <div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></div>
                        <form action="single.html" method="post" id="commentform">
                            <h3 class="heading">LEAVE A REPLY</h3>
                            <input type="text" name="author" id="author" value="" tabindex="1" />
                            <label for="author">Name <small>*</small></label><br/>

                            <input type="text" name="email" id="email" value="" tabindex="2" />
                            <label for="email">Email <small>*</small> <span>(not published)</span></label><br/>

                            <input type="text" name="url" id="url" value="" tabindex="3" />
                            <label for="url">Website</label>

                            <textarea name="comment" id="comment"  tabindex="4"></textarea>

                            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Post" /></p>

                            <input type='hidden' name='comment_post_ID' value='' id='comment_post_ID' />
                            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <!-- ENDS Respond -->

                </article>

            </div>
            <!-- ENDS posts list -->

            <!-- sidebar -->
            <aside id="sidebar">

                <ul>
                    <li class="block">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li class="cat-item"><a href="#" title="View all posts">Film and video</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Print</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Photo and lomo</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Habitant morbi</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Film and video</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Print</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Photo and lomo</a></li>
                            <li class="cat-item"><a href="#" title="View all posts">Habitant morbi</a></li>
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