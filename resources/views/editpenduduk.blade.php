@extends('master')

@section('content')

	<section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Data Penduduk </h3>
          </div>
        </div>

 
		<a href="penduduk"> Kembali</a>

		<br/>
		
	 	@foreach($penduduk as $p)
	 	<div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Form Add Data
              </header>
			 	<div class="panel-body">
					<form action="{{ url('penduduk/update', $p->id_penduduk) }}" method="post" class="form-horizontal" role="form">
						{{ csrf_field() }}

						<div class="form-group">
							<label class="col-lg-2 control-label"> Nama </label>
							<div class="col-lg-10">
							 <select type="text" name="id_kelahiran" class="form-control" required="required" id="nik"> 
								@foreach($kelahiran as $k)
									<option value="{{$k->id_kelahiran}}"> {{$k->nama_anak}} </option>
								@endforeach
							</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> NIK  </label>
							<div class="col-lg-10">
								<input type="text" name="nik" class="form-control" required="required" value="{{ $p->nik }}"> <br/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Agama  </label>
							<div class="col-lg-10">
								<input type="text" name="agama" class="form-control" required="required" value="{{ $p->agama }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Kabupaten/ Kota  </label>
							<div class="col-lg-10">
								<input type="text" name="kabupaten" class="form-control" required="required" value="{{ $p->kabupaten }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Kecamatan </label>
							<div class="col-lg-10">
								<input type="text" name="kecamatan" class="form-control" required="required" value="{{ $p->kecamatan }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Alamat </label>
							<div class="col-lg-10">
								<input type="text" name="alamat" class="form-control" required="required" value="{{ $p->alamat }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Pendidikan Terakhir </label>
							<div class="col-lg-10">
								<input type="text" name="pend_akhir" class="form-control" required="required" value="{{ $p->pend_akhir }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Status </label>
							<div class="col-lg-10">
								<input type="text" name="status" class="form-control" required="required" value="{{ $p->status }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Pekerjaan </label>
							<div class="col-lg-10">
								<input type="text" name="pekerjaan" class="form-control" required="required" value="{{ $p->pekerjaan }}">
							</div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
			</section>
		</div>
		@endforeach
		
	</section>

@endsection