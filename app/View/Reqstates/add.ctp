<div class="reqstates form">
<?php echo $this->Form->create('Reqstate'); ?>
	<fieldset>
		<legend><?php echo __('Add Reqstate'); ?></legend>
	<?php
		echo $this->Form->input('designacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reqstates'), array('action' => 'index')); ?></li>
	</ul>
</div>
