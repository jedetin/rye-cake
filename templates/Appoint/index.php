<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appoint[]|\Cake\Collection\CollectionInterface $appoint
 */
?>
<div class="appoint index content">
    <?= $this->Html->link(__('New Appoint'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Appoint') ?></h3>

    <?= $this->Form->create(null, ['type'=>'get'])?>
    <?= $this->Form->control('key',['label'=>'Search', 'value'=>$this->request->getQuery('key')])?>
    <?= $this->Form->submit()?>
    <?= $this->Form->end()?>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('consult') ?></th>
                    <th><?= $this->Paginator->sort('orderstr') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appoint as $appoint): ?>
                <tr>
                    <td><?= h($appoint->id) ?></td>
                    <td><?= h($appoint->phone) ?></td>
                    <td><?= h($appoint->email) ?></td>
                    <td><?= h($appoint->consult) ?></td>
                    <td><?= h($appoint->orderstr) ?></td>
                    <td><?= h($appoint->time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $appoint->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appoint->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoint->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
