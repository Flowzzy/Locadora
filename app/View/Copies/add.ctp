<div class="copies form">
<?php echo $this->Form->create('Copy'); ?>
	<fieldset>
		<legend><?php echo __('Add Copy'); ?></legend>
	<?php
		echo $this->Form->input('Film_id');
		echo $this->Form->input('Cstate_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Copies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cstates'), array('controller' => 'cstates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cstate'), array('controller' => 'cstates', 'action' => 'add')); ?> </li>
	</ul>
</div>
