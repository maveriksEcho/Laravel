@extends('admin.layouts.app_admin')
<style>
    li {
        list-style-type: none; /* Убираем маркеры */
    }
    img {
        width: 120px;
    }
    td {
        vertical-align: middle !important;
    }
</style>

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @component('admin.components.breadcrumb')
            @slot('title') Post list @endslot
            @slot('parent') Home @endslot
            @slot('active') Post @endslot
    @endcomponent
    <!-- /.content-header -->
 <!-- Main content -->
    <div class="container-fluid" id="app">
    <hr>
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3" style="float: left" action="{{route('admin.post.index')}}" method="get">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" value="{{session()->get('search')}}" aria-label="Search" name="search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search"></i>
                        <button class="btn btn-navbar" type="submit" name="reset" value="reset">
                            <i class="fa fa-undo"></i>
                    </button>
                </div>
            </div>
        </form>

    <a href="{{route('admin.post.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i> Create post</a><br><br>
    <table class="table table-striped text-center tablesorter" id="myTable">
        <thead>
        <th>Title</th>
        <th>Slug</th>
        <th>Image</th>
        <th>Published</th>
        <th>Categories</th>
        <th>Tag</th>
        <th>Comments</th>
        <th>User</th>
        <th class="text-right">Action</th>
        </thead>
        <tbody>
        @forelse ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td><img src="{{asset($post->image)}}" alt="Alt text" /></td>
                <td><post-button-component :p="{{$post}}"></post-button-component> </td>
                <td>
                    <ul>
                    @foreach ($post->categories as $category)
                            <li>
                            {{$category->title}}
                            </li>
                    @endforeach
                    </ul>
                </td>
                <td>
                    <ul>
                        @foreach ($post->tags as $tag)
                            <li>
                                {{$tag->title}}
                            </li>
                        @endforeach
                    </ul>
                </td>
                <td>{{count($post->comments)}}</td>
                <td>{{$post->users->name}}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Delete?')) {return true} else {return false}" action="{{route('admin.post.destroy', $post)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-info" href="{{route('admin.post.show', $post)}}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{route('admin.post.edit', $post)}}"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9" class="text-center"><h2>No data</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="9">
                <ul class="pagination pull-right" ></ul>
                {{$posts->links()}}
            </td>
        </tr>
        </tfoot>
    </table>
    </div>




@endsection
