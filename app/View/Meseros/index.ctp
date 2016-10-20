<h2>Lista de Meseros</h2>

<?php
    echo $this->Html->link("Crear Mesero", array('controller'=> 'meseros', 'action' => 'nuevo'));
?>
<table>
    <tr>
      <td>Num</td>
      <td>Nombre</td>
      <td>Apellidos</td>
      <td>Acciones</td>
    </tr>
    <?php $kop = 1; ?>
    <?php  foreach ($meseros as $mesero):  ?>
      <tr>
        <td><?php echo $kop++ ?></td>
        <td><?php echo $mesero['Mesero']['nombre']; ?></td>
        <td><?php echo $mesero['Mesero']['apellido']; ?></td>
        <td><?php echo $this->Html->link('Detalle', array('controller'=>'meseros', 'action' =>'ver', $mesero['Mesero']['id'] )); ?> |
            <?php echo $this->Html->link('Editar', array('controller'=>'meseros', 'action' =>'editar', $mesero['Mesero']['id'] )); ?> |
            <?php echo $this->Form->postLink('Eliminar', array('controller'=>'meseros', 'action' =>'eliminar', $mesero['Mesero']['id']),
            array('confirm' => 'Eliminar a '.$mesero['Mesero']['nombre'].'?') ); ?>
        </td>
      </tr>
<?php endforeach;  ?>
</table>
