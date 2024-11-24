<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img class="sidebar-brand-text mx-3" src="img/logo/logo2.png" alt="">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="principal.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
	  <?php echo $menu; ?>
		<!-- Aqui finaliza el navengador-->
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        
      </li>

    

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           

            
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bienvenido Usuario ID: <?php echo $_COOKIE['nombre'];  ?> </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="principal.php?m=profile_user">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container card shadow card-header">
        	<div class="card-header align-items-center justify-content-between">
					<h3 class="text-center">
						Mi Perfil | <?php echo $_COOKIE['nombre'];  ?>
					</h3>
				</div>
        </div>
        <div class="container card shadow ">

			<div class="row card-body">

				<div class="col-md-6 text-center ">
					<!--<h3 class="text-center">
						Mi Perfil | <?php //echo $_COOKIE['nombre'];  ?>
					</h3>-->
					<img alt="Bootstrap Image Preview" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="rounded-circle img-thumbnail">
					<div class="form-group">	 
						<label for="exampleInputFile">
							Subir Imagen Perfil | tamaño 200x200 px
						</label>
						<input type="file" class="form-control-file" id="exampleInputFile">
						
					</div>
				</div>
				<div class="col-md-6">
					<form role="form">
						<div class="form-group"> 
							<label for="InputCedula"> Cédula 0 ID </label>
							<input type="text" class="form-control" id="InputCedula">
						</div>
						<div class="form-group">
							<label for="InputName">Nombre Completo </label>
							<input type="text" class="form-control" id="InputName" value="<?php echo $_COOKIE['nombre'];  ?>">
						</div>
						<div class="form-group">
							<label for="InputName">Telefono o Celular </label>
							<input type="text" class="form-control" id="InputName">
						</div>
						<div class="form-group">
							<label for="InputEmail">Correo Electronico </label>
							<input type="text" class="form-control" id="InputEmail">
						</div>
						<div class="form-group">
							<label for="InputFechaNac">Fecha de Nacimiento</label>
							<input type="text" class="form-control" id="InputFechaNac">
						</div>
						<button type="submit" class="btn btn-primary">
							Actualizar
						</button>
					</form>
				</div>
			</div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->




