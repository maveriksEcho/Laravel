@foreach ($categories as $category)
    <ul>
        @if ($category->published)
        <li class="cat-item"><a href="#" title="View all posts">

            {!! $delimiter or " " !!}{{$category->title or ""}}

        </a></li>

    @if (count($category->children) > 0)

        @include('partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' &nbsp &nbsp ' . $delimiter
        ])

        @endif
            @endif
        </ul>
@endforeach
