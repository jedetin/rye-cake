<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appoint $appoint
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appoint'), ['action' => 'edit', $appoint->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appoint'), ['action' => 'delete', $appoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoint->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appoint'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appoint'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appoint view content">
            <h3><?= h($appoint->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($appoint->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($appoint->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($appoint->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Consult') ?></th>
                    <td><?= h($appoint->consult) ?></td>
                </tr>
                <tr>
                    <th><?= __('Orderstr') ?></th>
                    <td><?= h($appoint->orderstr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($appoint->time) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Product') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($appoint->product)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
