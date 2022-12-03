<?php

//CLASE QUE UTILIZARA PARA CREAR EL MODELO QUE INTERACTUA CON LA BD api_restful

class Usuario extends Conectar
{
    //funcion para traer todos los registros de la tabla Usuarios

    public function getUsuario()
    {

        //LLAMAR LA CADENA DE CONEXION A LA BD
        $conectar=parent::Conexion();

        $sql="select * from recientes";

        $sql=$conectar->prepare($sql);

        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

    
    public function getUsuario_id($id)
    {

        $conectar=parent::Conexion();
        $sql="select * from recientes where id=?";
        $sql=$conectar->prepare($sql);
        //UTILIZAR LOS PRAMETROS EN LA CONSULTA
        $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }



//Funcion para agregar un registro en la tabla Usuarios
    public function postUsuario($nombre,$fecha,$duracion)
    {

    
        $conectar=parent::Conexion();
        $sql="insert into recientes values (null,?,?,?)";
        $sql=$conectar->prepare($sql);
        //Para indicar en el string del SQL el parametro que utilizara
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$fecha);
        $sql->bindValue(3,$duracion);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }


    //Funcion para actualizar un registro en la tabla Usuarios
    public function putUsuario($nombre,$fecha,$duracion,$id)
    {

    
        $conectar=parent::Conexion();
        $sql="update recientes set nombre=?,fecha=?,duracion=? where id=?";
        $sql=$conectar->prepare($sql);
        //Para indicar en el string del SQL el parametro que utilizara
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$fecha);
        $sql->bindValue(3,$duracion);
        $sql->bindValue(4,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

    //Funcion para eliminar un registro en la tabla Usuarios
    public function deleteUsuario($id)
    {

    
        $conectar=parent::Conexion();
        $sql="delete from recientes where id=?";
        $sql=$conectar->prepare($sql);
        //Para indicar en el string del SQL el parametro que utilizara
        $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }


}
?>