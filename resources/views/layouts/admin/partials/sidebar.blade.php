<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
           <b> Aplikasi Monitoring Cargo</b>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
  @role('super-admin')
                    <ul class="sidebar-menu">
                <li class="menu-header"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
           
            <li class="menu-header" >Master Data</li>
                       <li class="active"><a class="nav-link" href="{{ route('cargo.index') }}"><i class="far fa-square"></i>
                    <span>Cargo</span></a></li>
                      
                          <li class="active"><a class="nav-link" href="{{ route('driver.index') }}"><i class="far fa-square"></i>
                    <span>Driver</span></a></li>
                   <li class="active"><a class="nav-link" href="{{ route('vehicle.index') }}"><i class="far fa-square"></i>
                    <span>Vehicle</span></a></li>
                     <li class="active"><a class="nav-link" href="{{ route('mitra.index') }}"><i class="far fa-square"></i>
                    <span>Mitra</span></a></li>                                        
                    <li class="menu-header"><a class="nav-link" href="{{ route('user.index') }}">Admin</a></li>
   
          
            @endrole
            @role('admin')
                    <ul class="sidebar-menu">
                <li class="menu-header"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
           
            <li class="menu-header" >Master Data</li>
                       <li class="active"><a class="nav-link" href="{{ route('cargo.index') }}"><i class="far fa-square"></i>
                    <span>Cargo</span></a></li>
                      
                          <li class="active"><a class="nav-link" href="{{ route('driver.index') }}"><i class="far fa-square"></i>
                    <span>Driver</span></a></li>
                   <li class="active"><a class="nav-link" href="{{ route('vehicle.index') }}"><i class="far fa-square"></i>
                    <span>Vehicle</span></a></li>
                                 <li class="active"><a class="nav-link" href="{{ route('mitra.index') }}"><i class="far fa-square"></i>
                    <span>Mitra</span></a></li>
    
     <li class="menu-header"><a class="nav-link" href="{{ route('user.index') }}">Admin</a></li>
   
          
            @endrole
             @role('mitra')
               <ul class="sidebar-menu">
                <li class="menu-header"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
           
            <li class="menu-header" >Master Data</li>
                       <li class="active"><a class="nav-link" href="{{ route('mitra.cargo.index') }}"><i class="far fa-square"></i>
                    <span>Cargo</span></a></li>
                          <li class="active"><a class="nav-link" href="{{ route('driver.index') }}"><i class="far fa-square"></i>
                    <span>Driver</span></a></li>
            @endrole
             @role('driver')
               <ul class="sidebar-menu">
                <li class="menu-header"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
           
            <li class="menu-header" >Master Data</li>
                       <li class="active"><a class="nav-link" href="{{ route('cargo.index') }}"><i class="far fa-square"></i>
                    <span>Cargo</span></a></li>
            @endrole
                
        </ul>

    </aside>
</div>