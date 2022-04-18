<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $image
 */
?>
<div class="image index content">
    <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <!-- <form>
        <input type="text" placeholder="Search image as height x width">
    </form> -->
    <?= $this->Html->link(__('Go back to Users'), ['action' => '../users'], ['class' => 'button']) ?>
    <h3><?= __('Image') ?></h3>

        
    <?= $this->Form->create(null, ['type'=>'get'])?>
    <?= $this->Form->control('key',['label'=>'Search','placeholder'=> 'Width x Height', 'value'=>$this->request->getQuery('key')])?>
    <?= $this->Form->submit(null, ['class' => 'button float-right'])?>
    <?= $this->Form->end()?> 

    
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('image name') ?></th>

                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($image as $image): ?>
                <tr>
                    <td><?= $this->Number->format($image->id) ?></td>
                    <td><?= $this->Html->image($image->image, ['width'=>'100px'])?></td>
                    <td><?= h($image->image) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $image->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
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
