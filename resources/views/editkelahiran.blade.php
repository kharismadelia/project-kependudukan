@extends('master')

@section('content')

	<section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Data Kelahiran </h3>
          </div>
        </div>

 
		<a href="{{ url('kelahiran')}}"> Kembali</a>
		<br/>
		<br/>

	 	@foreach($lahir as $k)
	 	<div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Form Add Data
              </header>
			 	<div class="panel-body">
					<form action="{{ url('kelahiran/update', $k->id_kelahiran) }}" method="post" class="form-horizontal" role="form">
						{{ csrf_field() }}

						<div class="form-group">
							<label class="col-lg-2 control-label"> No Akte </label>
							<div class="col-lg-10">
								<input type="text" name="no_akte" class="form-control" required="required" value="{{ $k->no_akte }}">
							</div>
						</div> 

						<div class="form-group">
							<label class="col-lg-2 control-label"> Nama Anak </label>
							<div class="col-lg-10">
								<input type="text" name="nama_anak" class="form-control" required="required" value="{{ $k->nama_anak }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Jenis Kelamin </label>
							<div class="col-lg-10">
								<label>
									<input type="radio" name="jenis_kelamin" value="Perempuan"
									<?php if($k->jenis_kelamin=='Perempuan') : echo 'checked'; ?><?php endif;?>> Perempuan
								</label>
								<br/>
								<label>
									<input type="radio" name="jenis_kelamin" value="Laki-Laki" 
									<?php if($k->jenis_kelamin=='Laki-Laki') : echo 'checked'; ?><?php endif;?>> Laki-laki
								</label>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Tempat Lahir </label>
							<div class="col-lg-10">
								<input type="text" name="tempat_lahir" class="form-control" required="required" value="{{ $k->tempat_lahir }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Tanggal Lahir </label>
							<div class="col-lg-10">
								<input type="date" name="tgl_lahir" class="form-control" required="required" value="{{ $k->tgl_lahir }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Nama Ayah </label>
							<div class="col-lg-10">
								<input type="text" name="nama_bapak" class="form-control" required="required" value="{{ $k->nama_bapak }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Nama Ibu </label>
							<div class="col-lg-10">
								<input type="text" name="nama_ibuk" class="form-control" required="required" value="{{ $k->nama_ibuk }}">
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