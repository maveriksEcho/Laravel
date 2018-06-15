@extends('admin.layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @component('admin.components.breadcrumb')
            @slot('title') Admin panel @endslot
            @slot('parent') Home @endslot
            @slot('active')  @endslot
    @endcomponent
    <!-- /.content-header -->

        <!-- Main content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You a admin!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
