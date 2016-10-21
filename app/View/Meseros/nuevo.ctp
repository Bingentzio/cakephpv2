<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Mesero', array('role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Nuevo Mesero'); ?></h2>
				<?php
					echo $this->Form->input('dni', array('class' => 'form-control', 'label' => 'DNI'));
					echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
					echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'Apellido'));
					echo $this->Form->input('telefono', array('class' => 'form-control', 'label' => 'Teléfono'));
				?>
				</fieldset>

				<p>
				<?php echo $this->Form->end(array('label' => 'Crear Mesero', 'class' =>'btn btn-success')); ?>
				</p>

				<?php echo $this->Html->link(__('List Meseros'), array('action' => 'index')); ?></li>

			</div>
		</div>
	</div>
