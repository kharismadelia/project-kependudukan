<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                  <span> Data Kelahiran</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="{{ url('kelahiran')}}"> Lihat Data </a></li>
              <li><a class="" href="{{ url('tambahkelahiran')}}"> Tambah Data </a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                  <span> Data Penduduk </span>
                    <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="{{ url('penduduk')}}"> Lihat Data </a></li>
              <li><a class="" href="{{ url('tambahpenduduk')}}"> Tambah Data </a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                  <span> Data Kematian </span>
                    <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="{{ url('kematian')}}"> Lihat Data </a></li>
              <li><a class="" href="{{ url('tambahkematian')}}"> Tambah Data </a></li>
            </ul>
          </li>
      
    
        <!-- sidebar menu end-->
      </div>
    </aside>