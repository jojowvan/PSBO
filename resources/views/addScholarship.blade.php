@extends('templates.admins.master')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Tambah Beasiswa</h2>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" action="{{ route('addScholarship.store') }}" method="post">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Beasiswa
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="name" placeholder="Nama Beasiswa" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Perusahaan 
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="firm" placeholder="Nama Perusahaan">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Program 
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" class="form-control" name="program" placeholder="D3,S1,S2">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" class="form-control" name="semester" placeholder="1-2">
                      </div>
                   </div>
        
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Fakultas </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" name="faculty" placeholder="FMIPA, FATETA">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Minimum IPK</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" name="gda" placeholder="2.7">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Batas Pendaftaran 
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" class="form-control" name="deadline">
                    </div>
                  </div>
                    
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Deskripsi <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea id="textarea" required="required" name="description" class="form-control col-md-7 col-xs-12"></textarea>
                    </div>
                  </div>

                  
              
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                    </form>               
        </div>
    </div>

    @endsection