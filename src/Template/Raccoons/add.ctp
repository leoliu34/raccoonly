<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Raccoons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="raccoons form large-9 medium-8 columns content">
    <?= $this->Form->create($raccoon) ?>
    <fieldset>
        <legend><?= __('Add Raccoon') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->label('gender');
            echo $this->Form->select('gender', [
               'M' => 'Male',
               'F' => 'Female'
            ], [
               'empty' => false
            ]);
            echo $this->Form->label('has_cubs');
            echo $this->Form->radio('has_cubs', [
                 [ 'value' => 1, 'text' => 'Yes' ],
                 [ 'value' => 0, 'text' => 'No' ]
            ]);
            echo $this->Form->input('cities._ids', ['options' => $cities]);
            echo $this->Form->input('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
