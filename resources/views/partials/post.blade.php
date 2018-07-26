        @if  ($post->published and $post->categories[0]->published)
            <article class="format-standard">
                <div class="entry-date"><div class="number">{{date("d", strtotime($post->created_at))}}</div> <div class="year">{{date("M, Y", strtotime($post->created_at))}}</div></div>
                <div class="feature-image" style="width: 450px">
                    <a href="{{asset($post->image)}}" data-rel="prettyPhoto"><img  src="{{asset($post->image)}}" alt="Alt text" /></a>
                </div>
                <h2  class="post-heading"><a href="{{ route('post', $post->slug) }}">{{$post->title}}</a></h2>
                    @if  (isset($posts))
                    <div class="excerpt">{!! $post->description_short !!} </div>
                    @else
                    <div class="post-content"> {!! $post->description !!}    </div>
                    @endif
                <a href="{{route('post', $post->slug)}}" class="read-more">continue &#8594;</a>
                <div class="meta">
                    <div class="categories">In
                        @foreach ($post->categories as $category)
                            <a href="#">{{$category->title}}</a>
                        @endforeach
                    </div>
                    <div class="comments">
                        @foreach ($post->tags as $tag)
                            <a href="#">{{$tag->title}}</a>
                        @endforeach
                    </div>
                    <div class="comments"><a href="#">{{count($post->comments)}} comments </a></div>
                    <div class="user"><a href="#">{{$post->users->name}}</a></div>
                </div>
            </article>
@endif
