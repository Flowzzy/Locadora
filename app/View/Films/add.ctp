<div class="films form">
<?php echo $this->Form->create('Film'); ?>
	<fieldset>
		<legend><?php echo __('Add Film'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('sinopse');
		echo $this->Form->input('protagonista');
		echo $this->Form->input('autor');
		echo $this->Form->input('Category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
