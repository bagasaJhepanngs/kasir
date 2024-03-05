<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
<div class="sidebar-header">

</div>
<div class="sidebar-menu">
<ul class="menu">
    
        
        <li class='sidebar-title'>Main Menu</li>
        
    
        
        <li class="sidebar-item {{ Request::is('dashboard*') ? 'active' : '' }}">

            <a href="/dashboard" class='sidebar-link'>
                <i data-feather="home" width="20"></i> 
                <span>Dashboard</span>
            </a>

            
        </li>
        
    
        
        
        
        <li class='sidebar-title'>Pages</li>
        
    
        
        <li class="sidebar-item {{ Request::is('barang') ? 'active' : '' }} {{ Request::is('user') ? 'active' : '' }} has-sub">

            <a href="#" class='sidebar-link'>
                <i data-feather="user" width="20"></i> 
                <span>Fitur</span>
            </a>

            
            <ul class="submenu ">
                
                <li >
                    <a href="/barang">Barang</a>
                </li>
                
                <li>
                    <a href="/user">User</a>
                </li>
                
                <li>
                    <a href="auth-forgot-password.html">Penjualan</a>
                </li>

                <li>
                    <a href="auth-forgot-password.html">Kategori</a>
                </li>

                <li>
                    <a href="auth-forgot-password.html">Pelanggan</a>
                </li>
               
                
            </ul>
            
        </li>
        
    
        
        
        
    
</ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>