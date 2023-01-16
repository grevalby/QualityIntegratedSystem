@extends('dashboard.index')

@section('judul')
Machine Table
@endsection

@section('isi')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Machine Table</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="project" class="table w-auto table-sm table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Machine No</th>
          <th>Tonnage</th>
          <th>Maker</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php $no=0; @endphp
        @foreach($data as $item)
        @php $no++; @endphp
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $item->machine }}</td>
          <td>{{ $item->tonnage }}</td>
          <td>{{ $item->maker }}</td>
          <td>
            <a href="" class="badge bg-info"><i class="nav-icon fas fa-eye"></i></a>
            <a href="" class="badge bg-warning"><i class="nav-icon fas fa-edit"></i></a>
            <a href="" class="badge bg-danger"><i class="nav-icon fas fa-trash-alt"></i></a>
          </td>
        </tr>
        @endforeach
        </tfoot>
    </table>
  </div>
</div>
@endsection