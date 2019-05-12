@extends('master')

@section('content')

<section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Data Kematian </h3>
          </div>
        </div>

                <table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th><i class="icon_star"></i> NIK </th>
                      <th><i class="icon_profile"></i> Tanggal Meninggal </th>
                      <th><i class="icon_profile"></i> Tempat Meninggal </th>
                      <th><i class="icon_profile"></i> Keterangan </th>
                      <th><i class="icon_cogs"></i>Opsi</th>
                    </tr>
                  
                    @foreach($kematian as $m)
                    <tr>
                      <td>{{ $m->penduduks->nik }}</td>
                      <td>{{ $m->tgl_meninggal }}</td>
                      <td>{{ $m->tempat_meninggal }}</td>
                      <td>{{ $m->keterangan }}</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="kematian/edit/{{ $m->id_kematian }}"><i class="icon_pencil-edit_alt"></i> &nbsp;Edit</a>
                          
                          <a class="btn btn-danger" href="kematian/destroy/{{ $m->id_kematian }}"><i class="icon_trash_alt"></i> &nbsp;Hapus</a>

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