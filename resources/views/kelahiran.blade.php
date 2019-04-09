<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Kelahiran</h3>

	<a href="/kelahiran/tambah"> + Tambah AData Kelahiran Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>No Akte</th>
			<th>Nama Anak</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
			<th>Opsi</th>
		</tr>
		@foreach($kelahiran as $k)
		<tr>
			<td>{{ $k->no_akte }}</td>
			<td>{{ $k->nama_anak }}</td>
			<td>{{ $k->tempat_lahir }}</td>
			<td>{{ $k->tgl_lahir }}</td>
            <td>{{ $k->tgl_lahir }}</td>
            <td>{{ $k->tgl_lahir }}</td>
			<td>
				<a href="/kelahiran/edit/{{ $k->id_kelahiran }}">Edit</a>
				|
				<a href="/kelahiran/hapus/{{ $k->id_kelahiran }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>

