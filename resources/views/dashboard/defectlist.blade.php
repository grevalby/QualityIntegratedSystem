@extends('dashboard.index')

@section('judul')
    Defect List
@endsection

@section('isi')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Defect List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="project" class="table w-auto table-sm table-bordered table-striped">
        <thead>
        <tr>
          <th class="text-center">No</th>
          <th>Defect</th>
          <th>Defect Level</th>      
        </tr>
        </thead>
        <tbody>
            @php $no=0; @endphp
        @foreach($data as $item)
        @php $no++; @endphp
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $item->defect }}</td>
            <td>{{ $item->level_id }}</td>
        </tr>
        @endforeach
        </tfoot>
      </table>
    </div>
</div>
  @endsection