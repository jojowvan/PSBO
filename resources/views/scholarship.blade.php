@extends('templates.admins.master')


@section('content')
<div class="page-title">
    <div class="title_left">
       <h3></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tabel Daftar Beasiswa</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Beasiswa</th>
                          <th>Perusahaan</th>
                          <th>Deskripsi</th>
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
                          <td>{!! $read->description !!}</td>
                          <td>
                              <a class="btn btn-success btn-sm" href="{{ route('editScholarship.edit', $read->id) }}">Edit</a>

                              <form class="" action="{{ route('editScholarship.destroy', $read->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

             </tbody>
            </table>
	     	</div>
        </div>
    </div>
</div>


@endsection