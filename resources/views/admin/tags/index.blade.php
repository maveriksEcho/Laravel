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
            @slot('title') Tags list @endslot
            @slot('parent') Home @endslot
            @slot('active') Tag @endslot
    @endcomponent
    <!-- /.content-header -->
 <!-- Main content -->
    <div class="container-fluid" id="app">
    <hr>

    <a href="{{route('admin.tag.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i> Create tag</a><br><br>
    <table class="table table-striped text-center tablesorter" id="myTable">
        <thead>
        <th>Title</th>
        <th>Slug</th>
        <th>Description</th>
        <th class="text-right">Action</th>
        </thead>
        <tbody>
        @forelse ($tags as $tag)
            <tr>
                <td>{{$tag->title}}</td>
                <td>{{$tag->slug}}</td>
                <td>{{$tag->description}}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Delete?')) {return true} else {return false}" action="{{route('admin.tag.destroy', $tag)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-info" href="{{route('admin.tag.show', $tag)}}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{route('admin.tag.edit', $tag)}}"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center"><h2>No data</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4">
                <ul class="pagination pull-right" ></ul>
                {{$tags->links()}}
            </td>
        </tr>
        </tfoot>
    </table>
    </div>




@endsection
