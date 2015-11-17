<div class="clientsCopies form">
<?php echo $this->Form->create('ClientsCopy'); ?>
	<fieldset>
		<legend><?php echo __('Add Clients Copy'); ?></legend>
	<?php
		echo $this->Form->input('Copy_id');
		echo $this->Form->input('Client_id');
		echo $this->Form->input('Reqstate_id');
		echo $this->Form->input('reqdate');
		echo $this->Form->input('devdate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients Copies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reqstates'), array('controller' => 'reqstates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reqstate'), array('controller' => 'reqstates', 'action' => 'add')); ?> </li>
	</ul>
</div>
