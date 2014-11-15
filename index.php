<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('includes/cargatop.php'); ?>
<?php /*include('includes/head/google_tag_manager.php');*/?>    
<!-- Contenedor Encabezado-->
<div id="encabezado">
    <div class='encabezado-niveles'>
        <div class="container_12">                        
            <!-- Informacion Usuario-->
            <?php include('includes/head/info_user.php');?>    
            <!-- Logo Empresa Banner -->
            <?php include('includes/head/banner-informacion.php'); ?>     
            <!-- Menú Principal  -->
            <?php include('includes/menu-principal.php'); ?>
        </div>
    </div>
</div>
<!-- Contenedor Contenido -->
<div id="contenido" class="container_12" >            
    <?php  include("includes/cargaindex.php");?>
</div>
<!--Contenedor Pie de Página -->
<?php include('includes/footer/footer-page.php');?>   
<!-- Contenedor Pie de Página -->    
<?php include('includes/footer/bottom_page.php');?>