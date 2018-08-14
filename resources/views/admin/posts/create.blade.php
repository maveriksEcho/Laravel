@extends('admin.layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @component('admin.components.breadcrumb')
            @slot('title') Create post @endslot
            @slot('parent') Home @endslot
            @slot('active') Post @endslot
    @endcomponent
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="container" id="app" >
        <hr />

        <form class="form-horizontal" action="{{route('admin.post.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.posts.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
    </div>
@endsection
