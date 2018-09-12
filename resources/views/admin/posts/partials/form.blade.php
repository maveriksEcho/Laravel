<label for="">Status</label><br>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Post title" value="{{$post->title or ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Autogenerete post slug" value="{{$post->slug or ""}}" readonly="">

<label for="">Category</label>
<select class="form-control" name="categories[]" multiple="" required>
    @include('admin.posts.partials.categories', ['categories' => $categories])
</select>

<label for="">Tags</label>
<select class="form-control" name="tags[]" multiple="">
    @foreach ($tags as $tag)
    <option value="{{$tag->id}}"  >{{$tag->title}}</option>
    @endforeach
</select>

<label for="">Short description</label>
<textarea rows="5" class="form-control" id="description_short" name="description_short">{{$post->description_short or ""}}</textarea>

<label for="">Full description</label>
<textarea rows="25" class="form-control" id="description" name="description">{{$post->description or ""}}</textarea>

<hr />

<label for="">Meta title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta title" value="{{$post->meta_title or ""}}">

<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta description" value="{{$post->meta_description or ""}}">

<label for="">Meta keywords</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Meta keywords" value="{{$post->meta_keyword or ""}}">

<hr />

<input class="btn btn-primary" type="submit" value="Save">
