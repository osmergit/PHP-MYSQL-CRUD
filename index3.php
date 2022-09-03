<?php
require("class/personal.php");
include "header.php";
?>
<p>
     <a href="create.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Personal</a><br/>
</p>
<table id="ghatable" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
     <thead>
          <tr>
               <th>Id</th>
               <th>Nombre</th>
               <th>Tipo</th>
               <th>Fecha Open</th>
               <th>Hora Open</th>
               <th>Vlr Accion</th>
               <th>Vlr Operacion</th>
               <th>Contratos Negociados</th>
               <th>Comision</th>
              
          </tr>
     </thead>
     <tbody>
          <?php
          $objpersonal = new operaciones();
          $operaciones = $objpersonal->operaciones();
          if(sizeof($operaciones) > 0){
               foreach ($operaciones as $row){
                    ?>
                    <tr>
                         <td><?php echo $row['cod_oper'] ?></td>
                         <td><?php echo $row['nom_oper'] ?></td>
                         <td><?php echo $row['tipo_oper'] ?></td>
                         <td><?php echo $row['fecha_open'] ?></td>
                         <td><?php echo $row['hora_open'] ?></td>
                         <td><?php echo $row['valor_accion'] ?></td>
                         <td><?php echo $row['vlr_oper'] ?></td>
                         <td><?php echo $row['cant_oper'] ?></td>
                         <td><?php echo $row['com_oper'] ?></td>
                         <td>
                              <a href="update.php?u=<?php echo $row['cod_oper'] ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                         </td>
                         <td>
                              <a onclick="return confirm('Desea eliminar el registro')" href="delete.php?d=<?php echo $row['cod_oper'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a>
                         </td>
                    </tr>
                    <?php
               }
          }
          ?>
     </tbody>
</table>	    
<?php
include "footer.php";
?>