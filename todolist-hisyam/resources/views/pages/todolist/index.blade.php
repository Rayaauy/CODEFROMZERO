@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <div class="border p-3 mb-2 bg-light text-dark shadow">
        <div class="border p-3 mb-2 bg-dark text-white shadow margin rounded text-center">
        <h1>TODOLIST {{ $nama }}</h1>
        </div>
        <div class="button">
            <a href="/todolist/add" class="btn btn-danger mb-3 mt-3 bg-dark text-white">Add Task</a>
        </div>
    <div class="border rounded p-2 mb-2 bg-light text-dark shadow">
      <div class="card p-2 bg-light">Daftar Task</div>
    <table class="table table-bordered table-striped mt-1">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">TASK</th>
      <th scope="col">DATE-LINE</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <!-- pengulangan untuk menampilkan setiap item dalam data_todolist -->
    @foreach ($data_todolist as $item)  
    <tr>
      <th scope="row">{{ $loop->iteration }}</th> <!-- menampilkan nomor urut berdasarkan iterasi loop -->
      <td>{{ $item->task }}</td> <!-- menampilkan nama tugas dari properti task pada item -->
      <td>{{ $item->due_date }}</td> <!-- menampilkan tanggal deadline dari properti due_date pada item -->
      </td>
      <td class="text-center">
        @if ($item->status == 1) <!-- kondisi untuk memeriksa status tugas -->
            <span class="badge bg-success">COMPLETED</span> 
        @else
            <span class="badge bg-warning text-dark">PENDING</span> <!-- jika status false, tampilkan badge Pending -->
        @endif
      </td>
      <td class="d-flex gap-2">
        <a href="/todolist/edit" class="btn btn-dark text-white">EDIT</a>
        <a href="/todolist/delete" class="btn btn-dark text-white">DELETE</a>
        <a href="/todolist/complete" class="btn btn-danger text-white">COMPLETE</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection