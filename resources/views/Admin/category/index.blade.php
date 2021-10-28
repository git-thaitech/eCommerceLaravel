@extends('Admin.layouts.admin')

@section('title')
    <title>List of Categories</title>
@endsection

@section('current-page')
    List of Categories
@endsection

@section('main-content')
    <div class="content-wrapper">
        @include('Admin.partials.content-header', ['name' => 'category', 'key' => 'Add'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary float-right m-2">Create a new
                            category</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoryRecords as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
