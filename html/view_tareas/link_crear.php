<!--<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
 </a>

<!-- Modal ->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
     <!--Modal content--
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Materia Descripción</h4>
				<button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
				<?php  //include("form/materia/form_.php"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div> 
</div>
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
        <!--Modal content--
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Materia Description</h4>
				<button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body modal2">
			
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Logout Modal--
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Desea Cerrar Sección <?php //echo $_COOKIE['nombre'];  ?> ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="principal.php?m=login_down">Logout</a>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content--
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Materia Description</h4>
				<button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body modal3">
			<?php //include("form/materia/u_view_form_.php"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>-->

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Desea Cerrar Sección <?php echo $_COOKIE['nombre'];  ?> ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="principal.php?m=login_down">Logout</a>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Tarea...  </h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body ">
                <?php include("form/tareas/form_.php"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Country Description</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body modal2">
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Country Description</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body modal3">
            <?php include("form/tareas/u_view_form_.php"); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="css/js/sb-admin-2.min.js"></script>