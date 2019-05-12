@extends('master')

@section('content')

<section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Data Penduduk </h3>
          </div>
        </div>

                <table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th><i class="icon_star"></i> NIK </th>
                      <th><i class="icon_profile"></i> Nama </th>
                      <th><i class="icon_profile"></i> Agama </th>
                      <th><i class="icon_profile"></i> Kabupaten/Kota </th>
                      <th><i class="icon_profile"></i> Kecamatan </th>
                      <th><i class="icon_profile"></i> Alamat </th>
                      <th><i class="icon_profile"></i> Pend Akhir </th>
                      <th><i class="icon_profile"></i> Status </th>
                      <th><i class="icon_profile"></i> Pekerjaan </th>
                      <th><i class="icon_cogs"></i>Opsi</th>
                    </tr>
                  
                    @foreach($penduduk as $p)
                    <tr>
                      <td>{{ $p->nik }}</td>
                      <td>{{ $p->kelahirans->nama_anak }}</td>
                      <td>{{ $p->agama }}</td>
                      <td>{{ $p->kabupaten_kota }}</td>
                      <td>{{ $p->kecamatan }}</td>
                      <td>{{ $p->alamat }}</td>
                      <td>{{ $p->pendidikan_terakhir }}</td>
                      <td>{{ $p->status }}</td>
                      <td>{{ $p->pekerjaan }}</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="penduduk/edit/{{ $p->id_penduduk }}"><i class="icon_pencil-edit_alt"></i> &nbsp;Edit</a>
                          
                          <a class="btn btn-danger" href="penduduk/destroy/{{ $p->id_penduduk }}"><i class="icon_trash_alt"></i> &nbsp;Hapus</a>

                        </div>
                      </td>
                    </tr>
                    @endforeach

               </tbody>
              </table>
            </header>
          </section>
        </div></div>
              
               
  @endsection