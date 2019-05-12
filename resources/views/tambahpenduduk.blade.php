@extends('master')

@section('content')

<body>
	<section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Data Kelahiran </h3>
          </div>
        </div>

		<div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Form Add Data
              </header>
			 	<div class="panel-body">
					<form action="{{ url('penduduk/store') }}" method="post" class="form-horizontal" role="form">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="nik" class="col-lg-2 control-label"> ID Kelahiran </label>
							<div class="col-lg-10">
								<select type="text" name="id_kelahiran" required="required" id="nik" class="form-control"> 
									@foreach($kelahiran as $k)
										<option value="{{$k->id_kelahiran}}"> {{$k->nama_anak}} </option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="nik" class="col-lg-2 control-label"> NIK </label>
							<div class="col-lg-10">
								<input type="text" name="nik" required="required" id="nik" class="form-control"> 
							</div>
						</div>

						<div class="form-group">
							<label for="agama" class="col-lg-2 control-label"> Agama </label>
							<div class="col-lg-10">
								<input type="text" name="agama" required="required" id="agama" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="Kabupaten" class="col-lg-2 control-label"> Kabupaten / Kota </label>
							<div class="col-lg-10">
								<input type="text" name="kabupaten" required="required" id="kabupaten" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="kecamatan" class="col-lg-2 control-label"> Kecamatan </label>
							<div class="col-lg-10">
								<input type="text" name="kecamatan" required="required" id="kecamatan" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="alamat" class="col-lg-2 control-label"> Alamat </label>
							<div class="col-lg-10">
								<input type="text" name="alamat"required="required" id="alamat" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="pendakhir" class="col-lg-2 control-label"> Pendidikan Terakhir </label>
							<div class="col-lg-10">
								<input type="text" name="pend_akhir" required="required" id="pendakhir" class="form-control">
							</div>
						</div>

						<div class="form-group">
						<label for="status" class="col-lg-2 control-label"> Status </label>
							<div class="col-lg-10">
								<input type="text" name="status" required="required" id="status" class="form-control"> 
							</div>
						</div>

						<div class="form-group">
						<label for="pekerjaan" class="col-lg-2 control-label"> Pekerjaan </label>
							<div class="col-lg-10">
								<input type="text" name="pekerjaan" required="required" id="pekerjaan" class="form-control"> 
							</div>
						</div>

						<br/>

						<input type="submit" value="Submit" class="btn btn-primary">
					</form>
				</div>
			</section>
		</div>
	</section>
 
</body>

@endsection