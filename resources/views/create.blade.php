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
				<h2>Menu Add Data</h2>

					<form class="form-group" action="{{ route('bloggy.store') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="judul">Judul</label>
							<input type="text" name="judul" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label for="headline">Headline</label>
							<input type="text" name="headline" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label for="isi">Isi</label>
							<textarea name="isi" class="form-control" required="required"></textarea>
						</div>
						<div class="form-group">
							<label for="deskripsi">Deskripsi</label>
							<textarea name="deskripsi" class="form-control" required="required"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="simpan" value="Simpan">
						</div>
					</form>
			</div>
		</div>
	</div>
@endsection