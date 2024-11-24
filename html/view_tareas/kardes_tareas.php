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
						Tarea N° <?php echo $data['id_tareas'];  ?> | <?php echo $data['title'];  ?>
					</h3>
				</div>
        </div>
        <div class="container card shadow ">

			<div class="row card-body">

				<div class="col-md-6 text-center ">
					<!--<h3 class="text-center">
						Mi Perfil | <?php //echo $_COOKIE['nombre'];  ?>
					</h3>-->
					<!--<img alt="Bootstrap Image Preview" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="rounded-circle img-thumbnail">--
          <br><br><br>
          <!-<div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book fa-10x"></i>
          </div>-->
          <br><br>
					<!--<div class="form-group">	 
						<label for="exampleInputFile">
							Subir Tarea | Formato DOC, PPT o PDF
						</label>
						<input type="file" name="file[]" class="form-control-file " id="exampleInputFile">
					</div>-->

          <form method="post" action="#" enctype="multipart/form-data">
              <div class="form-group">
                  <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book fa-10x"></i>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                          <label for="exampleInputFile">
                            Subir Tarea | Formato DOC, PPT o PDF
                          </label>
                          <input type="file" class="form-control-file" name="image" id="image">
                      </div>
                      <input type="button" class="btn btn-primary upload" value="ENTREGAR TAREA">
                  </div>
              </div>
          </form>


				</div>
				<div class="col-md-6">
					<form id="forms" role="form"  enctype="multipart/form-data" >
          <div class="form-group"> 
              <label for="InputID"> ID TAREA </label>
              <input type="text" class="form-control" id="InputID" value="<?php echo $data['id_tareas'];  ?>" disabled>
            </div>
						<div class="form-group"> 
							<label for="InputNombreM"> MATERIA </label>
							<input type="text" class="form-control" id="InputNombreM" value="<?php echo $data['nom_materia'];  ?>" disabled>
						</div>
						<div class="form-group">
							<label for="InputName">NOMBRE DE LA TAREA </label>
							<input type="text" class="form-control" id="InputName" value="<?php echo $data['title'];  ?>" disabled>
						</div>
						<div class="form-group">
							<label for="InputName">Descripcion </label>
							<input type="text" class="form-control" id="InputName" value="<?php echo $data['descripcion'];  ?>" disabled>
						</div>
						<div class="form-group">
							<label for="InputEmail">PUNTUACION </label>
							<input type="text" class="form-control" id="InputEmail" value="<?php echo $data['puntuacion'];  ?>" disabled>
						</div>
            <div class="form-group">
              <label for="InputEmail">PROFESOR RESPONSABLE </label>
              <input type="text" class="form-control" id="InputEmail" value="<?php echo $data['nombre'];  ?>" disabled>
            </div>
						<div class="form-group">
							<label for="InputFechaNac">FECHA DE ENTREGA</label>
							<input type="text" class="form-control" id="InputFechaNac" value="<?php echo $data['start'];  ?>" disabled>
						</div>
					
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




