<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit City'), ['action' => 'edit', $city->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete City'), ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Raccoons'), ['controller' => 'Raccoons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Raccoon'), ['controller' => 'Raccoons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cities view large-9 medium-8 columns content">
    <h3><?= h($city->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($city->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($city->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Raccoons') ?></h4>
        <?php if (!empty($city->raccoons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($city->raccoons as $raccoons): ?>
            <tr>
                <td><?= h($raccoons->id) ?></td>
                <td><?= h($raccoons->name) ?></td>
                <td><?= h($raccoons->description) ?></td>
                <td><?= h($raccoons->created) ?></td>
                <td><?= h($raccoons->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Raccoons', 'action' => 'view', $raccoons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Raccoons', 'action' => 'edit', $raccoons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Raccoons', 'action' => 'delete', $raccoons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raccoons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
