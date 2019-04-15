@extends('master')

@section('content')

<section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Data Kelahiran </h3>
          </div>
        </div>

                <table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th><i class="icon_star"></i>No Akte</th>
                      <th><i class="icon_profile"></i>Nama Anak</th>
                      <th><i class="icon_pin_alt"></i>Tempat Lahir</th>
                      <th><i class="icon_calendar"></i>Tanggal Lahir</th>
                      <th><i class="icon_profile"></i>Nama Ayah</th>
                      <th><i class="icon_profile"></i>Nama Ibu</th>
                      <th><i class="icon_cogs"></i>Opsi</th>
                    </tr>
                  
                    @foreach($lahir as $k)
                    <tr>
                      <td>{{ $k->no_akte }}</td>
                      <td>{{ $k->nama_anak }}</td>
                      <td>{{ $k->tempat_lahir }}</td>
                      <td>{{ $k->tgl_lahir }}</td>
                      <td>{{ $k->nama_bapak }}</td>
                      <td>{{ $k->nama_ibu }}</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="/kelahiran/edit/{{ $k->id_kelahiran }}"><i class="icon_pencil"></i></a>
                          
                          <a class="btn btn-danger" href="/kelahiran/hapus/{{ $k->id_kelahiran }}"><i class="icon_close"></i></a>

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

  

