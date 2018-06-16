<label for="">Status</label>
<select class="form-control" name="published">
    @if (isset($post->id))
        <option value="0" @if ($post->published == 0) selected="" @endif>Draft</option>
        <option value="1" @if ($post->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Draft</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Post title" value="{{$post->title or ""}}" required>

<label for="">Parent category</label>
<select class="form-control" name="categories[]" multiple="">
    @include('admin.post.partials.categories', ['categories' => $categories])
</select>

<label for="">Short description</label>
<textarea class="form-control" id="description_short" name="description_short">{{$post->description_short or ""}}</textarea>

<label for="">Full description</label>
<textarea class="form-control" id="description" name="description">{{$post->description or ""}}</textarea>

<hr />

<label for="">Meta title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta title" value="{{$post->meta_title or ""}}">

<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta description" value="{{$post->meta_description or ""}}">

<label for="">Meta keywords</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Meta keywords" value="{{$post->meta_keyword or ""}}">

<hr />

<input class="btn btn-primary" type="submit" value="Save">