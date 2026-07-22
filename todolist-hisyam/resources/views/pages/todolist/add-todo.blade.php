@extends('layouts.master')

@section('content')
<div class="container mt-3">
<div class="card">
  <div class="card-header">Tambah Task</div>
  <div class="card-body">
    <form action="/todolist" method="POST">
      @csrf
      <div class="row">
        <div class="col-sm-6">
          <div class="mb-3">
            <label class="form-label">TASK</label>
            <input type="text" name="task" class="form-control">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="mb-3">
            <label class="form-label">DATE LINE</label>
            <input type="date" name="date_line" class="form-control">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="mb-3 text-center">
            <input type="submit" class="form-control btn btn-dark text-white" value="SAVE">
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection