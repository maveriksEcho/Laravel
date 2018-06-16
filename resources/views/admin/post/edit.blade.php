@extends('admin.layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @component('admin.components.breadcrumb')
            @slot('title') Edit post @endslot
            @slot('parent') Home @endslot
            @slot('active') Post @endslot
    @endcomponent
    <!-- /.content-header -->
        <div class="container">
        <hr />

        <form class="form-horizontal" action="{{route('admin.post.update', $post)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.post.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
    </div>

@endsection