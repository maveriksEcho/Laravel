@extends('admin.layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @component('admin.components.breadcrumb')
            @slot('title') Create category @endslot
            @slot('parent') Home @endslot
            @slot('active') Category @endslot
    @endcomponent
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="container">
            <hr>
            <form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
                {{ csrf_field() }}

                {{-- Form include --}}
                @include('admin.categories.partials.form')

                <input type="hidden" name="created_by" value="{{Auth::id()}}">

            </form>

        </div>
@endsection