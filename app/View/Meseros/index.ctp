<div class="page-header">
<h1>Lista de Meseros
</h1>
</div>
<div class="pull-right">
    <?php
        echo $this->Html->link("Crear Mesero", array('controller'=> 'meseros', 'action' => 'nuevo'),array('class'=>'btn btn-primary'));
    ?>
</div>



<div class="row">
    <div class="col-md-12">
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $kop = 1; ?>
                <?php  foreach ($meseros as $mesero):  ?>
                <tr>
                    <td><?php echo $kop++ ?></td>
                    <td><?php echo $mesero['Mesero']['nombre']; ?></td>
                    <td><?php echo $mesero['Mesero']['apellido']; ?></td>
                    <td><?php echo $this->Html->link('Detalle', array('controller'=>'meseros', 'action' =>'ver', $mesero['Mesero']['id'] ),
                      array('class'=>'btn btn-xs btn-default')); ?>
                          <?php echo $this->Html->link('Editar', array('controller'=>'meseros', 'action' =>'editar', $mesero['Mesero']['id'] ),
                      array('class'=>'btn btn-xs btn-default')); ?>
                          <?php echo $this->Form->postLink('Eliminar', array('controller'=>'meseros', 'action' =>'eliminar', $mesero['Mesero']['id']),
                           array('class'=>'btn btn-xs btn-default'),
                          array('confirm' => 'Eliminar a '.$mesero['Mesero']['nombre'].'?')); ?>
                     </td>
                </tr>
              <?php endforeach;  ?>
            </tbody>
        </table>
    </div>
</div>
