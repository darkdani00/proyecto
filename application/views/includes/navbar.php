<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- navbar -->

    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <!-- Buscador -->
            <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                        <input type="text" class="form-control" placeholder="Search products">
                    </form>
                </li>
            </ul>
            <!-- Buscador -->

            <!-- Nueva Compra -->
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                        data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-shopping-cart"></i>
                        <span>2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="createbuttonDropdown">
                        <h6 class="p-3 mb-0">Carrito</h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="img/lsd.jpg" alt="image">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1"></p>Planilla LSD
                                    <p class="text-muted mb-0"  style="font-size:15px">x10 </p>
                                </div>
                            </a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="img/lsd-gotero.jpg" alt="image">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1"></p>Gotero LSD
                                    <p class="text-muted mb-0"  style="font-size:15px">x1 </p>
                                </div>
                            </a>

                    </div>
                    <!-- Nueva Compra -->
                </li>
                <!-- Mensajes -->
                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email"></i>
                        <span class="count bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0">Mensajes</h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="img/mr_yosie.jpg" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Barato el criko man $$$</p>
                                    <p class="text-muted mb-0"> 20 Minutes ago </p>
                                </div>
                            </a>
                    </div>
                </li>
                <!-- Mensajes -->
                <!-- Notificaciones -->
                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <span class="count bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notificaciones</h6>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="img/lsd-gotero.jpg" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Gotero LSD</p>
                                    <p class=" mb-0" style="color:green"> 50% offer </p>
                                </div>
                            </a>
                    </div>
                </li>
                <!-- Notificaciones -->
                <!-- Perfil -->
                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                        <div class="navbar-profile">
                            <img class="img-xs rounded-circle" src="img/chino.JPG" alt="">
                            <p class="mb-0 d-none d-sm-block navbar-profile-name">ChinoCrack</p>
                            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="profileDropdown">
                        <h6 class="p-3 mb-0">Perfil</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Configuración</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-logout text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Cerrar Sesión</p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- perfil -->


        </div>
    </nav>
    <!-- navbar -->