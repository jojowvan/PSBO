@extends('templates.admins.master')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Tambah Beasiswa</h2>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    

                    <div class="form-group">
                        <label class="control-label col-md-2">Nama Beasiswa
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-4">
                        <input type="file" class="form-control" name="avatar" >
                        </div>

                        
                    </div>
                    <img src="/storage/{{$users->avatar}}"  height="128">
                    <img src="{{ asset('storage/avatar/CMsyHPVgDEd3aeJO1Fgt8JKQnCSPNqKvuQ5rZhcU.jpeg' ) }}" alt="he" height="128">
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                    </form>               
        </div>
    </div>

    @endsection

@section('script')
  <script>
    CKEDITOR.replace( 'konten' );
  </script>
@endsection