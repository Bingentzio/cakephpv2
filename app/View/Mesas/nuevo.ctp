<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Mesa', array('role' => 'form')); ?>
				<fieldset>
					<legend><?php echo __('Crear Mesa'); ?></legend>
				<?php
					echo $this->Form->input('serie', array('class' => 'form-control', 'label' => 'Serie'));
					echo $this->Form->input('puestos', array('class' => 'form-control', 'label' => 'Puestos'));
					echo $this->Form->input('posicion', array('class' => 'form-control', 'label' => 'Posición'));
					echo $this->Form->input('mesero_id', array('class' => 'form-control', 'label' => 'Mesero'));
				?>
				</fieldset>
				<p>
				<?php echo $this->Form->end(array('label' => 'Crear Mesa', 'class' =>'btn btn-success')); ?>
				</p>
                <?php
                    echo $this->Html->link('Volver a la lista de mesas', array('controller'=> 'mesas', 'action' => 'index'))
                ?>
		</div>
	</div>
</div>
