@extends('layouts.app')

@section('content')

    <!-- MAIN -->
    <div id="main">
        <div class="wrapper clearfix">




            <!-- posts list -->
            <div id="posts-list">

                <h2 class="page-heading"><span>BLOG</span></h2>

            @include('partials.post', ['post' => $post[0]])



                    <!-- comments list -->
                    <div id="comments-wrap">
                        <h3 class="heading">{{$post[0]->comments->count()}} COMMENTS</h3>
                        <ol class="commentlist">

                            <li class="comment even thread-even depth-1" id="li-comment-1">

                                @foreach($post[0]->comments as $comment)

                                <div id="comment-1" class="comment-body clearfix">
                                    <img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />
                                    <div class="comment-author vcard">{{$comment->users->name}}</div>
                                    <div class="comment-meta commentmetadata">
                                        <span class="comment-date">{{$comment->created_at}}</span>
                                        <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm("comment-1", "1", "respond", "432")'>Reply</a></span>

                                    </div>
                                    <div class="comment-inner">
                                        <p style="word-wrap: break-word;">{{$comment->content}}</p>
                                    </div>
                                </div>

                                @endforeach

                                <!-- child
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

                                </ul>
                                 ENDS child -->
                            </li>


                        </ol>
                    </div>
                    <!-- ENDS comments list -->


                    <!-- Respond -->
                    <div id="respond">

                        <div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></div>
                        <form action="{{ route('comment') }}" method="post" id="commentform">
                            <h3 class="heading">LEAVE A REPLY</h3>
                            @csrf
                            <input type="hidden" name="created_by" value="{{Auth::id()}}" />
                            <input type="hidden" name="post_id" value="{{$post[0]->id}}"  />
                            <input type="hidden" name="parent_id" value="0" id='comment_parent'/>

                            <textarea name="content" id="comment"  tabindex="4"></textarea>

                            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Post" /></p>

                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <!-- ENDS Respond -->

                </article>

            </div>
            <!-- ENDS posts list -->

            <!-- sidebar -->
    @include('partials.right-column', ['categories' => $categories])
            <!-- ENDS sidebar -->

        </div>
    </div>
    <!-- ENDS MAIN -->

@endsection
