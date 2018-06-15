@extends('admin.layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @component('admin.components.breadcrumb')
            @slot('title') Edit category @endslot
            @slot('parent') Home @endslot
            @slot('active') Category @endslot
        @endcomponent
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="container">
            <hr>
            <form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                {{-- Form include --}}
                @include('admin.categories.partials.form')

            </form>

        </div>
@endsection