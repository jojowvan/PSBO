@extends('templates.admins.master')


@section('content')
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Beasiswa</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Beasiswa</th>
              <th>Perusahaan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <?php $no = 0;?>
              @foreach($readScholarship as $read)
              <?php $no++ ;?>
            <tr>
              <td>{{ $no }}</td>
              <td>{{ $read->name }}</td>
              <td>{{ $read->firm }}</td>
              <td>
                  <a class="btn btn-success btn-sm" href="{{ route('editScholarship.edit', $read->id) }}">Edit</a>
                  <form class="" action="{{ route('editScholarship.destroy', $read->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>	
      </div>
    </div>
  </div>





@endsection