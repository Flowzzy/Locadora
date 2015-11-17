<div class="clientsCopies index">
	<h2><?php echo __('Devolver Filme'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Copy_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Reqstate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reqdate'); ?></th>
			<th><?php echo $this->Paginator->sort('devdate'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientsCopies as $clientsCopy): ?>
	<tr>
		<td><?php echo h($clientsCopy['ClientsCopy']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientsCopy['Copy']['id'], array('controller' => 'copies', 'action' => 'view', $clientsCopy['Copy']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientsCopy['Client']['id'], array('controller' => 'clients', 'action' => 'view', $clientsCopy['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientsCopy['Reqstate']['id'], array('controller' => 'reqstates', 'action' => 'view', $clientsCopy['Reqstate']['id'])); ?>
		</td>
		<td><?php echo h($clientsCopy['ClientsCopy']['reqdate']); ?>&nbsp;</td>
		<td><?php echo h($clientsCopy['ClientsCopy']['devdate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientsCopy['ClientsCopy']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientsCopy['ClientsCopy']['id'])); ?>
                        <?php echo $this->Html->link(__('Devolver'), array('action' => 'edit', $clientsCopy['ClientsCopy']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Alugar Filme'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Devolver Filme'), array('action' => 'devolverfilme')); ?></li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reqstates'), array('controller' => 'reqstates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reqstate'), array('controller' => 'reqstates', 'action' => 'add')); ?> </li>
	</ul>
</div>
