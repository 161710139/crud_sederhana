@extends('layouts.member')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Edit Destinasi<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('galeri.update',$galeri->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Foto</label>	
			  			<input type="file" name="foto" class="form-control" value="{{ $galeri->foto }}"  required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('artikel_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul Artikel</label>	
			  			<select name="artikel_id" class="form-control">
			  				@foreach($artikel as $data)
			  				<option value="{{ $data->id }}"  {{ $artikelselect == $data->id ? 'selected="selected"' : '' }}>{{ $data->judul_artikel }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('artikel_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('artikel_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-success">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>
		
	</div>
</div>
@endsection