<?php


require_once("ConectarDB.php");//incluye una sola vez el contenido del archivo
class admin{
    private $id_admin;
    private $username;
    private $password;



    public function __construct($usu="",$con="")
    {
        $this->id_admin = 0;
        $this->username    = $usu;
        $this->password = $con;
    }
    public function __destruct()
    {

    }
    public function setIdAdmin($idAdm)
    {
        $this->id_admin = $idAdm;
    }
    public function setUsername($usu)
    {
        $this->username = $usu;
    }
    public function setPassword($con)
    {
        $this->password = $con;
    }



    public function getIdAdmin()
    {
      return $this->id_admin;
    }
    public function getUsername()
    {
      return $this->username;
    }
    public function getPassword()
    {
      return $this->password;
    }
   
    /*public function adicionarUsuario()
    {
        $conexion = Conectar::conectarBD();
        if($conexion !=false)
        {
            $sql = "INSERT INTO admin(usuario, contrasena) VALUES(?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ss', $this->usuario, $this->contrasena);
            if($stmt->execute())
            {
                return(true);

            }
            else
            {
                return(false);
            }
            $conexion->close();
        }
    }


    public function obtenerTodos()
    {
        $sql="SELECT * FROM admin;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
   


    public function modificarUsuario($contra,$usu)
    {
        $conexion = Conectar::conectarBD();//nos conectamos a la base de datos
        if($conexion != false)
        {
            $sql = "UPDATE admin SET contrasena= '$contra' WHERE usuario= '$usu';";
            echo $sql;
            $stmt=$conexion->prepare($sql);
            $stmt->bind_param('ss',$contra, $usu);
            if($stmt->execute())
            {
                $conexion->close();
                return (true);
                
            }
            else
            {
                $conexion->close();
                return (false);
            }
          
        }
        
    }*/
    public function obtenerCuenta($usuario="",$contrasena="") {
        $sql = "SELECT * FROM admin WHERE username= '$usuario' AND password= '$contrasena';";
         $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return ($rows);
     }
    /*public function buscarCuenta($id) {
        $sql = "SELECT * FROM admin WHERE idAdmin='$id';";
         $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return ($rows);
     }

     public function ultimoCodigo()	{
	  $sql="select max(idAdmin) as maximo from admin;";	  
      $conexion = Conectar::conectarBD();
      $rows = $conexion->query($sql);
      $conexion->close();
      return ($rows);
	}
     public function borrarAdmin($id)
    {
        $sql = "DELETE FROM admin WHERE idAdmin='$id';";
        $conexion = Conectar::conectarBD();
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('s',$id);
        if($stmt->execute())
        {
            $conexion->close();
            return 1;
        }
        else
        {
            $conexion->close();
            return -1;
        }
    }*/

	
    
}
   
?>