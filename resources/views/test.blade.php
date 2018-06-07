@extends('templates.admins.master')

@section('content')
    <div class="form-group">
        <label for="konten">konten</label>
        <textarea name="description" id="konten" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Submit</button>
@endsection

@section('script')
<script>
    CKEDITOR.replace( 'konten' );
</script>
@endsection


