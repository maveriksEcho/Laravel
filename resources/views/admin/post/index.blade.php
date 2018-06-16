@extends('admin.layouts.app_admin')

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
    <div class="container">
    <hr>

    <a href="{{route('admin.post.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i> Create post</a><br><br>
    <table class="table table-striped">
        <thead>
        <th>Title</th>
        <th>Published</th>
        <th class="text-right">Action</th>
        </thead>
        <tbody>
        @forelse ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>@if ($post->published == 0) Draft @else Published @endif </td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Delete?')) {return true} else {return false}" action="{{route('admin.post.destroy', $post)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('admin.post.show', $post)}}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-default" href="{{route('admin.post.edit', $post)}}"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>No data</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination pull-right" ></ul>
                {{$posts->links()}}
            </td>
        </tr>
        </tfoot>
    </table>
    </div>

@endsection