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
      <table id="project" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Project</th>
                 
        </tr>
        </thead>
        <tbody>
            @php $no=0; @endphp
        @foreach($project as $item)
        @php $no++; @endphp
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $item['project'] }}</td>
        </tr>
        @endforeach
        </tfoot>
      </table>
    </div>
</div>
  @endsection