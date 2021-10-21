<!-- //anh xem view, add.blade.php va home.blade.php em extends tu admin.blade.php
//Nhung home thi no nhan duoc css tu admin, con add thi khong -->

@extends('layouts.admin')

@section('title')
<title>Generate a new category</title>
@endsection

@section('content')
<div class="content-wrapper">
  @include('partials.content-header', ['name' => 'category', 'key' => 'Add'])

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('categories.create') }}" class="btn btn-primary float-right m-2">Add</a>
        </div>
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Categories's name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <select class="form-control" aria-label="Default select example">
              <option selected>Choose parent category</option>
              {!! $htmlOption !!}
            </select>
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