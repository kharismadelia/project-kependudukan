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

 
		<a href="kelahiran"> Kembali</a>
		
		<br/>
		<br/>
	 
		<form action="{{ url('kelahiran/store') }}" method="post">
			{{ csrf_field() }}
			No Akte <input type="text" name="no_akte" required="required"> <br/>
			Nama Anak <input type="text" name="nama_anak" required="required"> <br/>
			Tempat Lahir <input type="text" name="tempat_lahir" required="required"> <br/>
			Tanggal Lahir <input type="date" name="tgl_lahir"required="required"> <br/>
			Nama Ayah <input type="text" name="nama_bapak" required="required"> <br/>
			Nama Ibu <input type="text" name="nama_ibu" required="required"> <br/><br/><br/>

			<input type="submit" value="Submit">
		</form>
	</section>
 
</body>

@endsection