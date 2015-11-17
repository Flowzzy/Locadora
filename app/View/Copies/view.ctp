<div class="copies view">
<h2><?php echo __('Copy'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($copy['Copy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film'); ?></dt>
		<dd>
			<?php echo $this->Html->link($copy['Film']['title'], array('controller' => 'films', 'action' => 'view', $copy['Film']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cstate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($copy['Cstate']['id'], array('controller' => 'cstates', 'action' => 'view', $copy['Cstate']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Copy'), array('action' => 'edit', $copy['Copy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Copy'), array('action' => 'delete', $copy['Copy']['id']), array(), __('Are you sure you want to delete # %s?', $copy['Copy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Copies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cstates'), array('controller' => 'cstates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cstate'), array('controller' => 'cstates', 'action' => 'add')); ?> </li>
	</ul>
</div>
