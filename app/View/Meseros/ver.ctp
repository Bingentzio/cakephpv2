<h2>Detalle del Meser@ <?php echo $mesero['Mesero']['nombre'];  ?></h2>

<p><strong>DNI: </strong> <?php echo $mesero['Mesero']['dni']; ?></p>
<p><strong>Teléfono: </strong> <?php echo $mesero['Mesero']['telefono']; ?></p>
<p><strong>Creado: </strong> <?php echo $this->Time->format('d-m-Y; h:i A', $mesero['Mesero']['created']); ?></p>
<p><strong>Modificado: </strong> <?php echo $this->Time->format('d-m-Y; h:i A', $mesero['Mesero']['modified']); ?></p>
<?php 	echo $this->Html->link('Volver a lista de meseros', array('controller' => 'meseros', 'action'=> 'index')); ?>

<h3>Encargado de mesas:</h3>
<?php  if(empty($mesero['Mesa'])): ?>
    <p>No tiene mesas asociadas</p>
<?php endif ?>
<?php foreach ($mesero['Mesa'] as $mesa): ?>
    <p>
        Serie: <?php echo $mesa['serie']; ?>
        <br />
        Puestos: <?php echo $mesa['puestos']; ?>
        <br />
        Posición: <?php echo $mesa['serie']; ?>
        <br />
        Created: <?php echo $mesa['created']; ?>    
    </p>
<?php endforeach; ?>
