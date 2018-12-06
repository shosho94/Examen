<?php

include_once 'Database.php';
include_once 'Proveedor.php';

/**
 * Clase para el manejo CRUD de clientes,empleado,buses y pedidos
 *
 * @author T30
 */
class CrudModel {

    
    
    /**
     * Retorna la lista de clientes de la bdd.
     * @return array
     */
    //56456456465456465456456
    //////////////////////////
    // CRUD PROVEEDORES:      //
    //////////////////////////
    /**
     * Retorna la lista de proveedores de la bdd.
     * @return array
     */
    public function getProveedores() {
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "select * from proveedor order by nombreproveedor";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos:
        $listado = array();
        foreach ($resultado as $res) {
            $proveedor = new Proveedor($res['idproveedor'], $res['tipoidproveedor'], $res['nombreproveedor'], $res['fecnacproveedor'], $res['ciudnacproveedor'], $res['tipoproveedor'], $res['direccionproveedor'], $res['telefonoproveedor'], $res['emailproveedor'], $res['estadoproveedor']);
            array_push($listado, $proveedor);
        }
        Database::disconnect();
        //retornamos el listado resultante:
        return $listado;
    }

    /**
     * Busca la informacion de un cliente especifico.
     * @param type $idproveedor El numero de $idproveedor del proveedor.
     * @return type
     */
    public function getProveedor($idproveedor) {
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "select * from proveedor where idproveedor=?";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($idproveedor));
        //obtenemos el registro especifico:
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $proveedor = new Proveedor($res['idproveedor'], $res['tipoidproveedor'], $res['nombreproveedor'], $res['fecnacproveedor'], $res['ciudnacproveedor'], $res['tipoproveedor'], $res['direccionproveedor'], $res['telefonoproveedor'], $res['emailproveedor'], $res['estadoproveedor']);
        Database::disconnect();
        //retornamos el objeto encontrado:
        return $proveedor;
    }

    /**
     * Inserta un nuevo proveedor en la bdd.
     * 
     */
    public function insertarProveedor($idproveedor, $tipoidproveedor, $nombreproveedor, $fecnacproveedor, $ciudnacproveedor, $tipoproveedor, $direccionproveedor, $telefonoproveedor, $emailproveedor, $estadoproveedor) {
        $pdo = Database::connect();
        $sql = "insert into proveedor(idproveedor,tipoidproveedor,nombreproveedor,fecnacproveedor, ciudnacproveedor, tipoproveedor, direccionproveedor,telefonoproveedor,emailproveedor,estadoproveedor) values(?,?,?,?,?,?,?,?,?,?)";
        $consulta = $pdo->prepare($sql);
        
        //Ejecutamos y pasamos los parametros:
        try {
            $consulta->execute(array($idproveedor, $tipoidproveedor, $nombreproveedor, $fecnacproveedor, $ciudnacproveedor, $tipoproveedor, $direccionproveedor, $telefonoproveedor, $emailproveedor, $estadoproveedor));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    /**
     * Elimina un proveedor especifico de la bdd.
     * @param type $idproveedor
     */
    public function eliminarProveedor($idproveedor) {
        //Preparamos la conexion a la bdd:
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "delete from proveedor where idproveedor=?";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos la sentencia incluyendo a los parametros:
        try {
            $consulta->execute(array($idproveedor));
        } catch (PDOException $e) {
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }

    /**
     * Actualiza un proveedor existente.

     */
    public function actualizarProveedor($idproveedor, $tipoidproveedor, $nombreproveedor, $fecnacproveedor, $ciudnacproveedor, $tipoproveedor, $direccionproveedor, $telefonoproveedor, $emailproveedor, $estadoproveedor) {
        //Preparamos la conexión a la bdd:
        $pdo = Database::connect();
        $sql = "update proveedor set tipoidproveedor=?,nombreproveedor=?,fecnacproveedor=?,ciudnacproveedor=?,tipoproveedor=?,direccionproveedor=?,telefonoproveedor=?,emailproveedor=?,estadoproveedor=?  where idproveedor=?";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos la sentencia incluyendo a los parametros:
        $consulta->execute(array($tipoidproveedor, $nombreproveedor, $fecnacproveedor, $ciudnacproveedor, $tipoproveedor, $direccionproveedor, $telefonoproveedor, $emailproveedor, $estadoproveedor, $idproveedor));
        Database::disconnect();
    }

    //////////////////////////
    //CRUD: USUARIOS       //
    /////////////////////////

    /**
     * Retorna la lista de usuarios de la bdd.
     * @return array
     */
   
}
