@extends('admin.layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @component('admin.components.breadcrumb')
            @slot('title') Show category @endslot
            @slot('parent') Home @endslot
            @slot('active') Category @endslot
    @endcomponent
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="container">
            <hr>

                {{-- Form  --}}
            <label for="">Status</label>

                @if (isset($category->id))
                <input type="text" class="form-control"  name="published"
                       value="@if ($category->published == 0) Draft @else Published @endif " readonly="">


            <label for="">Title</label>

            <input type="text" class="form-control" name="title" placeholder="Category title" value="{{$category->title or ""}}" readonly="">

            <label for="">Parent category</label>

                <input type="text" class="form-control" name="title" placeholder="Category title"
                       @if ($category->parent_id != 0)
                       @foreach ($categories as $category_list)
                       @if ($category_list->id == $category->parent_id) value="{{$category_list->title}}"
                       @endif
                       @endforeach
                       @else value="-- without parent category --" @endif readonly="">


            @endif
            <hr />



        </div>
@endsection