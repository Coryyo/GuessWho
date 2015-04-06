<div class="utilisateurs view">
<h2><?php echo __('Utilisateur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($utilisateur['Utilisateur']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($utilisateur['Utilisateur']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($utilisateur['Utilisateur']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($utilisateur['Utilisateur']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($utilisateur['Utilisateur']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($utilisateur['Utilisateur']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($utilisateur['Utilisateur']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($utilisateur['Utilisateur']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Utilisateur'), array('action' => 'edit', $utilisateur['Utilisateur']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Utilisateur'), array('action' => 'delete', $utilisateur['Utilisateur']['id']), array(), __('Are you sure you want to delete # %s?', $utilisateur['Utilisateur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur'), array('action' => 'add')); ?> </li>
	</ul>
</div>
