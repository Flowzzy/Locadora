<div class="films view">
<h2><?php echo __('Film'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($film['Film']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($film['Film']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinopse'); ?></dt>
		<dd>
			<?php echo h($film['Film']['sinopse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Protagonista'); ?></dt>
		<dd>
			<?php echo h($film['Film']['protagonista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo h($film['Film']['autor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($film['Category']['id'], array('controller' => 'categories', 'action' => 'view', $film['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Film'), array('action' => 'edit', $film['Film']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Film'), array('action' => 'delete', $film['Film']['id']), array(), __('Are you sure you want to delete # %s?', $film['Film']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
