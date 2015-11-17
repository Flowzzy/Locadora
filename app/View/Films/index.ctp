<div class="films index">
	<h2><?php echo __('Films'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('sinopse'); ?></th>
			<th><?php echo $this->Paginator->sort('protagonista'); ?></th>
			<th><?php echo $this->Paginator->sort('autor'); ?></th>
			<th><?php echo $this->Paginator->sort('Category_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($films as $film): ?>
	<tr>
		<td><?php echo h($film['Film']['id']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['title']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['sinopse']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['protagonista']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['autor']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($film['Category']['id'], array('controller' => 'categories', 'action' => 'view', $film['Category']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $film['Film']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $film['Film']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $film['Film']['id']), array(), __('Are you sure you want to delete # %s?', $film['Film']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Alugar Filme'), array('controller' => 'ClientsCopy', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Devolver Filme'), array('controller' => 'ClientsCopy', 'action' => 'index')); ?> </li>
	</ul>
</div>
