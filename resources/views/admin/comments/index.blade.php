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
            @slot('title') Comments list @endslot
            @slot('parent') Home @endslot
            @slot('active') Comment @endslot
    @endcomponent
    <!-- /.content-header -->
 <!-- Main content -->
    <div class="container-fluid" id="app">
    <hr>

    <br><br>
    <table class="table table-striped text-center tablesorter" id="myTable">
        <thead>
        <th>Content</th>
        <th>User</th>
        <th>Parent comment</th>
        <th>Post</th>
        <th>Create time</th>
        <th class="text-right">Action</th>
        </thead>
        <tbody>
        @forelse ($comments as $comment)
            <tr>
                <td>{{$comment->content}}</td>
                <td>{{$comment->users->name}}</td>
                <td>
                    @if ($comment->children)
                        Without parent comments
                @else
                        $comment->posts->title
                        @endif
                </td>
                <td>{{$comment->posts->title}}</td>

                <td>{{$comment->created_at}}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Delete?')) {return true} else {return false}" action="{{route('admin.tag.destroy', $comment)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-success" href="#"><i class="fa fa-lock"></i></a>
                        <a class="btn btn-warning" href="{{route('admin.tag.edit', $comment)}}"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center"><h2>No data</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">
                <ul class="pagination pull-right" ></ul>
                {{$comments->links()}}
            </td>
        </tr>
        </tfoot>
    </table>
    </div>




@endsection
