@extends('layout.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- 
					-judul
					-headline
					-isi
					-deskripsi
				-->
				<h2>Edit Add Data</h2>

					<form class="form-group" action="{{ route('bloggy.update',$bloggy->id) }}" method="post">
						<input type="hidden" name="_method" value="PUT">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="judul">Judul</label>
							<input type="text" name="judul" class="form-control" value="{{ $bloggy->judul}}" required="required">
						</div>
						<div class="form-group">
							<label for="headline">Headline</label>
							<input type="text" name="headline" class="form-control" value="{{ $bloggy->headline}}" required="required">
						</div>
						<div class="form-group">
							<label for="isi">Isi</label>
							<textarea name="isi" class="form-control" required="required">{{ $bloggy->isi}}</textarea>
						</div>
						<div class="form-group">
							<label for="deskripsi">Deskripsi</label>
							<textarea name="deskripsi" class="form-control" required="required">{{ $bloggy->deskripsi}}</textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="simpan" value="Simpan">
						</div>
					</form>
			</div>
		</div>
	</div>
@endsection