<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php
session_start();
require_once './model/Proveedor.php';

?>
    <body>
         <form action="./controller/controller.php" style=" width: 100%;">
                                                        <input type="hidden" name="opcion" value="crear_proveedor">
                                                        <center><table style=" width: 100%;   border-collapse: collapse;width: 100%;">                                                                                    
                                                                <tr>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Identificación Proveedor:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br><input type="text" name="idproveedor" id="idproveedor" maxlength="13"></br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Tipo Identificación</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;">
                                                                        <select name="tipoidproveedor">
                                                                            <option value="C">CÉDULA</option>
                                                                            <option value="P">PASAPORTE</option>
                                                                            <option value="R">RUC</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Nombres:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br><input title="Se necesita un nombre" placeholder="Ej: Luis Lomas" pattern="^[a-zA-Z]+[ ][a-zA-Z]+"  type="text" name="nombreproveedor" maxlength="100" >  </br></td>                      
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Fecha Nacimiento:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br><input type="date" name="fecnacproveedor" required="true" autocomplete="off"  max="today" min="01-01-1800"  value="<?php echo date('d-m-Y'); ?>"></br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Ciudad Nacimiento:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br><input placeholder="Ej: Quito" pattern="^[A-Za-z]+" type="text" name="ciudnacproveedor" maxlength="50">                    </br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Tipo proveedor:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;">
                                                                        <table>
                                                                            <tr>
                                                                                <td><input type="radio" name="tipoproveedor" value='true' required="true">Credito</td>
                                                                                <td width="20"></td>
                                                                                <td><input type="radio" name="tipoproveedor" value='false' required="true">Efectivo</td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Dirección:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br><input placeholder="Ej: Quito y Via. Amazonas" pattern="^[0-9A-Za-z- ]+" type="text" name="direccionproveedor" maxlength="100" ></br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Teléfono:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br><input placeholder="Ej: 0909785967" pattern="^[0-9]+" type="tel" name="telefonoproveedor" maxlength="10" ></br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Email:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br><input type="text" name="emailproveedor" maxlength="50" placeholder="Ej: luis@gmail.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  ></br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;"><br>Estado:</br></td>
                                                                    <td style="text-align: left;padding: 8px;color: black;">
                                                                        <table>
                                                                            <tr>
                                                                                <td style="text-align: left;padding: 8px;color: black;"><input type="radio" name="estadoproveedor" value='true' >Activo</td>
                                                                                <td width="20"></td>
                                                                                <td style="text-align: left;padding: 8px;color: black;"><input type="radio" name="estadoproveedor" value='false' >Inactivo</td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <td>
                                                                <td style="padding: 8px;color: black;" colspan="4"><center><input type="submit" value="Crear" class="btn btn-sm" ></center></td>
                                                                </td>
                                                            </table></center>
                                                        
                                                    </form>
                                                </div>
                                                 <form action="./controller/controller.php" style=" width: 100%;">
                                                     <input type="hidden" name="opcion" value="listar_proveedores">
                                                 <input type="submit" value="listar_proveedores"  class="btn btn-sm" >
                                                    </form>
                                                
                                                <table  border="1" >   
                                                <tr class="titulo">
                                                    <th>IDENTIFICACION</th>
                                                    <th>TIPO IDENTIFICACION</th>
                                                    <th>NOMBRES</th>
                                                    <th>FECHA NACIMIENTO</th>                        
                                                    <th>CIUDAD NACIMIENTO</th>
                                                    <th>TIPO PROVEEDOR</th>
                                                    <th>DIRECCION</th>
                                                    <th>TELEFONO</th>
                                                    <th>EMAIL</th>
                                                    <th>ESTADO</th>
                                                    <th>ELIMINAR</th>
                                                    <th>EDITAR</th>
                                                </tr>
                                                <tbody >                    
                                                    <?php
                                                    //verificamos si existe en sesion el listado de proveedores:
                                                    if (isset($_SESSION['listaProveedores'])) {
                                                        $listado = unserialize($_SESSION['listaProveedores']);
                                                        foreach ($listado as $proveedor) {
                                                            echo "<tr>";
                                                            echo "<td>" . $proveedor->getIdproveedor() . "</td>";
                                                            if ($proveedor->getTipoidproveedor() == 'Cedula' || $proveedor->getTipoidproveedor() == 'c' || $proveedor->getTipoidproveedor() == 'C' || $proveedor->getTipoidproveedor() == 'cedula' || $proveedor->getTipoidproveedor() == 'CEDULA') {
                                                                echo "<td>CÉDULA</td>";
                                                            } else if ($proveedor->getTipoidproveedor() == 'ruc' || $proveedor->getTipoidproveedor() == 'r' || $proveedor->getTipoidproveedor() == 'R' || $proveedor->getTipoidproveedor() == 'Ruc' || $proveedor->getTipoidproveedor() == 'RUC') {
                                                                echo "<td>RUC</td>";
                                                            } else if ($proveedor->getTipoidproveedor() == 'pasaporte' || $proveedor->getTipoidproveedor() == 'p' || $proveedor->getTipoidproveedor() == 'P' || $proveedor->getTipoidproveedor() == 'Pasaporte' || $proveedor->getTipoidproveedor() == 'PASAPORTE') {
                                                                echo "<td>PASAPORTE</td>";
                                                            }
                                                            echo "<td>" . $proveedor->getNombreproveedor() . "</td>";
                                                            echo "<td>" . $proveedor->getFecnacproveedor() . "</td>";
                                                            echo "<td>" . $proveedor->getCiudnacproveedor() . "</td>";
                                                            if ($proveedor->getTipoproveedor() == 1) {
                                                                echo "<td>SI</td>";
                                                            } else {
                                                                echo "<td>NO</td>";
                                                            }
                                                            echo "<td>" . $proveedor->getDireccionproveedor() . "</td>";
                                                            echo "<td>" . $proveedor->getTelefonoproveedor() . "</td>";
                                                            echo "<td>" . $proveedor->getEmailproveedor() . "</td>";
                                                            if ($proveedor->getEstadoproveedor() == 1) {
                                                                echo "<td>ACTIVO</td>";
                                                            } else {
                                                                echo "<td>INACTIVO</td>";
                                                            }
                                                            echo "<td><center><a title='Eliminar dato' href='./controller/controller.php?opcion=eliminar_proveedor&idproveedor=" . $proveedor->getIdproveedor() . "'>Eliminar</a></center></td>";
                                                            echo "<td><center><a title='Actualizar dato' href='./controller/controller.php?opcion=editar_proveedor&idproveedor=" . $proveedor->getIdproveedor() . "'>Editar</a></center></td>";
                                                            echo "</tr>";
                                                        }
                                                    } else {
                                                        echo "No se han cargado datos.";
                                                    }
                                                    ?>
                                                </tbody >                    

                                            </table >
                                
    </body>
    
     
</html>
