@extends('admin.layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @component('admin.components.breadcrumb')
            @slot('title') Category list @endslot
            @slot('parent') Home @endslot
            @slot('active') Category @endslot
    @endcomponent
    <!-- /.content-header -->

        <!-- Main content -->
    <div class="container">
    <hr>
        <div id="app">

            <router-view name="categoryIndex"></router-view>
            <router-view></router-view>

        </div>

    </div>

@endsection