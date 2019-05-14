@extends('master')

@section('content')

	<section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Data Kematian </h3>
          </div>
        </div>
 
		<a href="{{ url('kematian')}}"> Kembali</a>
		<br/>
		<br/>
		
		
	 	@foreach($kematian as $m)
	 	<div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Form Add Data
              </header>
			 	<div class="panel-body">
					<form action="{{ url('kematian/update', $m->id_kematian) }}" method="post" class="form-horizontal" role="form">
						{{ csrf_field() }}

						<div class="form-group">
							<label class="col-lg-2 control-label"> NIK</label>
							<div class="col-lg-10">
								<select type="text" name="id_penduduk" class="form-control" required="required" id="id_penduduk"> 
								@foreach($penduduk as $p)
									<option value="{{$p->id_penduduk}}"> {{$p->nik}} </option>
								@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Tanggal Meninggal </label>
							<div class="col-lg-10">
								<input type="date" name="tgl_meninggal" class="form-control" required="required" value="{{ $m->tgl_meninggal }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Tempat Meninggal </label>
							<div class="col-lg-10">
								<input type="text" name="tempat_meninggal" class="form-control" required="required" value="{{ $m->tempat_meninggal }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Keterangan </label>
							<div class="col-lg-10">
								<input type="text" name="keterangan" class="form-control" required="required" value="{{ $m->keterangan }}">
							</div>
						</div>
						
						<input type="submit" value="Submit">
					</form>
		@endforeach
		
	</section>

@endsection