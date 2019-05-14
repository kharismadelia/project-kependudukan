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
					<form action="{{ url('kelahiran/store') }}" method="post" class="form-horizontal" role="form">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="col-lg-2 control-label"> No Akte </label>
							<div class="col-lg-10">
								<input type="text" name="no_akte" required="required" class="form-control"> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Nama Anak </label>
							<div class="col-lg-10">
								<input type="text" name="nama_anak" required="required" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Jenis Kelamin </label>
							<div class="col-lg-10">
								<label>
									<input type="radio" name="jenis_kelamin" value="Perempuan" required="required" > Perempuan
								</label>
								<br/>
								<label>
									<input type="radio" name="jenis_kelamin" value="Laki-Laki" required="required"> Laki-laki
								</label>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Tempat Lahir </label>
							<div class="col-lg-10">
								<input type="text" name="tempat_lahir" required="required" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Tanggal Lahir </label>
							<div class="col-lg-10">
								<input type="date" name="tgl_lahir"required="required" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-2 control-label"> Nama Ayah </label>
							<div class="col-lg-10">
								<input type="text" name="nama_bapak" required="required" class="form-control">
							</div>
						</div>

						<div class="form-group">
						<label class="col-lg-2 control-label"> Nama Ibu </label>
							<div class="col-lg-10">
								<input type="text" name="nama_ibuk" required="required" class="form-control"> 
							</div>
						</div>

						<input type="submit" value="Submit" class="btn btn-primary">
					</form>
				</div>
			</section>
		</div>
	</section>
 
</body>

@endsection