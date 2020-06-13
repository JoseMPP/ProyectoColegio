<?php
session_start();
$user = $_POST['username'];
$clave = $_POST['pass'];
$_SESSION['username'] = $user;
$_SESSION['pass'] = $clave;
require_once __DIR__.'/../Model/clsAdmin.php';
$Obj = new admin();
if(isset($_POST['btn_login'])) 
{
     if((isset($_POST['username'])) && (isset($_POST['pass'])))
     {
     $row = $Obj->obtenerCuenta($user,$clave);
     $fila=$row->fetch_row();
            if($fila[1]==$_POST['username']&&$fila[2]==$_POST['pass'])
            {
             echo " <script>window.location = '/ProyectoColegio/View/admin/template.html';</script>";
           
            }else
            {
            echo "<script>alert('NOMBRE DE USUARIO O CONTRASENA INCORRECTO!');</script>";
            echo " <script>window.location = '/ProyectoColegio/View/index.html';</script>";
 
            }
     }
}

/*if(isset($_POST['btn_registrar'])) 
{
echo " <script>window.location = '/proyectoFinal/vista/RegistraseComoCliente.php';</script>";

}




//echo " <script>window.location = '/ProyectoColegio/View/admin/template.html';</script>";*/
?>