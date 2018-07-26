@foreach ($categories as $category)

    <option value="{{$category->id or ""}}"

            @isset($post->id)
            @foreach ($post->categories as $category_post)
            @if ($category->id == $category_post->id)
            selected="selected"
            @endif
            @endforeach
            @endisset

    >
        {!! $delimiter or "" !!}{{$category->title or ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.posts.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach 