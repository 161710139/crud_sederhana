@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Tambah Destinasi<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('destinasis.store') }}" method="post">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_destinasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Destinasi</label>	
			  			<input type="text" name="nama_destinasi" class="form-control" required>
			  			@if ($errors->has('nama_destinasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_destinasi') }}</strong>
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
</div>
@endsection