@extends('dashboard.index')

@section('judul')
    Change Point
@endsection

@section('isi')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Changepoint</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="project" class="table w-auto table-sm table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Occur Date</th>
          <th>Submit Date</th>    
          <th>Workshop</th>
          <th>Part Number</th>
          <th>Lot</th>  
          <th>Reporter</th>
        </tr>
        </thead>
        <tbody>
            @php $no=0; @endphp
        @foreach($data as $item)
        @php $no++; @endphp
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $item->occur_date }}</td>
            <td>{{ $item->data_entry }}</td>
        </tr>
        @endforeach
        </tfoot>
      </table>
    </div>
</div>
  @endsection