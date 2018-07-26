<aside id="sidebar">

                <ul>
                    <li class="block">
                        <h4>CATEGORIES</h4>

@include('partials.categories', ['categories' => $categories])

</li>

<li class="block">
    <h4>TAGS</h4>
    <ul>
        <li class="cat-item"><a href="#" title="View all posts">Tag 1</a></li>
        <li class="cat-item"><a href="#" title="View all posts">Tag 2</a></li>
        <li class="cat-item"><a href="#" title="View all posts">Tag 3</a></li>
    </ul>
</li>

</ul>

<em id="corner"></em>
</aside>