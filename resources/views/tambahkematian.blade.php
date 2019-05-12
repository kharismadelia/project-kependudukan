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
					<form action="{{ url('kematian/store') }}" method="post" class="form-horizontal" role="form">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="id_penduduk" class="col-lg-2 control-label"> ID Penduduk </label>
							<div class="col-lg-10">
								<select type="text" name="id_penduduk" required="required" id="id_penduduk" class="form-control"> 
									@foreach($penduduk as $p)
										<option value="{{$p->id_penduduk}}"> {{$p->nik}} </option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="tgl_meninggal" class="col-lg-2 control-label"> Tanggal Meninggal </label>
							<div class="col-lg-10">
								<input type="date" name="tgl_meninggal" required="required" id="tgl_meninggal" class="form-control"> 
							</div>
						</div>

						<div class="form-group">
							<label for="tempat_meninggal" class="col-lg-2 control-label"> Tempat Meninggal </label>
							<div class="col-lg-10">
								<input type="text" name="tempat_meninggal" required="required" id="tempat_meninggal" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="keterangan" class="col-lg-2 control-label"> Keterangan </label>
							<div class="col-lg-10">
								<input type="text" name="keterangan" required="required" id="keteranagan" class="form-control">
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