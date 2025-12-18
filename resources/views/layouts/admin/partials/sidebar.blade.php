<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
           <b> KPI Dinkes</b>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
                <li class="menu-header"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
           
            <li class="menu-header" >Master Data</li>
                       <li class="active"><a class="nav-link" href="{{ route('bidang_kesehatan.index') }}"><i class="far fa-square"></i>
                    <span>Bidang Kesehatan Masyarakat</span></a></li>
                       <li class="active"><a class="nav-link" href="{{ route('bidang_pelayanan_kesehatan.index') }}"><i class="far fa-square"></i>
                    <span>Bidang Pelayanan Kesehatan</span></a></li>
                          <li class="active"><a class="nav-link" href="{{ route('bidang_pencegahan.index') }}"><i class="far fa-square"></i>
                    <span>Bidang Pencegahan Penyakit Menular</span></a></li>
                   <li class="active"><a class="nav-link" href="{{ route('sumber_daya.index') }}"><i class="far fa-square"></i>
                    <span>Bidang Sumber Daya Kesehatan</span></a></li>
                                       <li class="active"><a class="nav-link" href="{{ route('sekretariat.index') }}"><i class="far fa-square"></i>
                    <span>Sekretariat</span></a></li>
     <li class="menu-header"><a class="nav-link" href="{{ route('user.index') }}">Admin</a></li>
        </ul>

    </aside>
</div>