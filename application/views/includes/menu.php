<body>
    <!-- division y orientacion -->
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a href="home" class="mdi mdi-flask-outline">TASHAS LOCAS</a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="img/chino.JPG" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <!-- division -->
                            <!-- Perfil Izquierdo-->
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">ChinoCrack</h5>
                                <span>Comprador</span>
                            </div>
                        </div>
                </li>
                <!-- Perfil Izquierdo-->
                <li class="nav-item nav-category">
                    <span class="nav-link">Menu</span>
                </li>
                <!-- Home -->
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?=base_url('Home');?>">
                        <span class="menu-icon">
                            <i class="fas fa-home"></i>
                        </span>
                        <span class="menu-title">Home</span>
                    </a>
                </li>
                <!-- Home -->
                <!-- Inventario -->
                <li class="nav-item menu-items">
                    <a class="nav-link" href="#">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Inventario</span>
                    </a>
                </li>
                <!-- Inventario -->
                <!-- Proveedores -->
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?=base_url('Provedor');?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-contacts"></i>
                        </span>
                        <span class="menu-title">Proveedores</span>
                    </a>
                </li>
                <!-- Proveedores -->
                <!-- seguridad -->
                <li class="nav-item menu-items">
                    <a class="nav-link"  href="<?=base_url('Seguridad');?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-security"></i>
                        </span>
                        <span class="menu-title"> Seguridad</span>
                    </a>
                </li>
                <!-- Seguridad -->
                <!-- Productos -->
                <li class="nav-item menu-items">
                    <a class="nav-link"  href="<?=base_url('Products');?>">
                        <span class="menu-icon">
                            <i class="fas fa-shopping-bag"></i>
                        </span>
                        <span class="menu-title"> Productos</span>
                    </a>
                </li>
                <!-- Productos -->

            </ul>
        </nav>