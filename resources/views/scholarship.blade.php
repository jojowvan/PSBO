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
              <th style="width: 1%" >No.</th>
              <th>Nama Beasiswa</th>
              <th>Perusahaan</th>
              <th style="width: 20%">Action</th>
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
                  <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View </a>
                  <a href="{{ route('editScholarship.edit', $read->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                  <a "{{ route('editScholarship.destroy', $read->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>	
      </div>
    </div>
  </div>

 



@endsection