<div class="clientsCopies view">
<h2><?php echo __('Clients Copy'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientsCopy['ClientsCopy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientsCopy['Copy']['id'], array('controller' => 'copies', 'action' => 'view', $clientsCopy['Copy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientsCopy['Client']['id'], array('controller' => 'clients', 'action' => 'view', $clientsCopy['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reqstate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientsCopy['Reqstate']['id'], array('controller' => 'reqstates', 'action' => 'view', $clientsCopy['Reqstate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reqdate'); ?></dt>
		<dd>
			<?php echo h($clientsCopy['ClientsCopy']['reqdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Devdate'); ?></dt>
		<dd>
			<?php echo h($clientsCopy['ClientsCopy']['devdate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clients Copy'), array('action' => 'edit', $clientsCopy['ClientsCopy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clients Copy'), array('action' => 'delete', $clientsCopy['ClientsCopy']['id']), array(), __('Are you sure you want to delete # %s?', $clientsCopy['ClientsCopy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients Copies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients Copy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reqstates'), array('controller' => 'reqstates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reqstate'), array('controller' => 'reqstates', 'action' => 'add')); ?> </li>
	</ul>
</div>
