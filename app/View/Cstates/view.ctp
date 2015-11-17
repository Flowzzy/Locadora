<div class="cstates view">
<h2><?php echo __('Cstate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cstate['Cstate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Designacao'); ?></dt>
		<dd>
			<?php echo h($cstate['Cstate']['designacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cstate'), array('action' => 'edit', $cstate['Cstate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cstate'), array('action' => 'delete', $cstate['Cstate']['id']), array(), __('Are you sure you want to delete # %s?', $cstate['Cstate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cstates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cstate'), array('action' => 'add')); ?> </li>
	</ul>
</div>
