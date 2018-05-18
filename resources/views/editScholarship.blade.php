@extends('templates.admins.master')

@section('content')

<div class="right_col" role="main">
     <div class="">
        <div class="page-title">


                <div class="col-md-9 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Beasiswa</h2>
                    
                                <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left" action="{{ route('editScholarship.update', $editScholarship->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Beasiswa</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="name" value="{{ $editScholarship->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Perusahaan </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="firm" value="{{ $editScholarship->firm }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Deskripsi Beasiswa <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="form-control" rows="5" name="description">{{ $editScholarship->description }}</textarea>
                                        </div>
                                    </div>
                                    

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                    </div>
            </div>
            </div>
    @endsection