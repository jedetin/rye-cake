<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Image'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="image view content">
            <h3><?= h($image->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($image->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?=  $this->Html->image($image->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Left') ?></th>
                    <td><?= h($image->lefts) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($image->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Height') ?></th>
                    <td><?= $this->Number->format($image->height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Width') ?></th>
                    <td><?= $this->Number->format($image->width) ?></td>
                </tr>
                <tr>
                    <th><?= __('Top') ?></th>
                    <td><?= $this->Number->format($image->top) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
