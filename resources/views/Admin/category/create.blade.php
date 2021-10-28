<!-- //anh xem view, add.blade.php va home.blade.php em extends tu admin.blade.php
//Nhung home thi no nhan duoc css tu admin, con add thi khong -->

@extends('Admin.layouts.admin')

@section('title')
    <title>Generate a new category</title>
@endsection

@section('current-page')
    Admin
@endsection

@section('main-content')
    <div class="content-wrapper">
        @include('Admin.partials.content-header', ['name' => 'category', 'key' => 'Add'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="newCategory">Categories's name</label>
                                <input type="text" class="form-control" id="newCategory" name="name" placeholder="Enter category name">
                                <div class="form-text">
                                    Choose a unique name. Maximum is 100 characters.
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
