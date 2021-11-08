<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsCategory[]|\Cake\Collection\CollectionInterface $productsCategories
 */
?>

<div class="container-lg overflow-visible bg-light shadow-2-strong">
    <h3><?= __('Products Categories') ?></h3>
    <table class="table container-lg table-hover bg-light">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name_category') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsCategories as $productsCategory) : ?>
                <tr>
                    <td><?= $this->Number->format($productsCategory->id) ?></td>
                    <td><?= h($productsCategory->name_category) ?></td>
                    <td><?= h($productsCategory->created) ?></td>
                    <td><?= h($productsCategory->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productsCategory->id], ['class' => 'link-primary']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsCategory->id], ['class' => 'link-warning']) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $productsCategory->id],
                            [
                                'confirm' => __('Are you sure you want to delete # {0}?', $productsCategory->id),
                                'class' => 'link-danger'
                            ]
                        ) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        <div class="paginator">
        <ul class="pagination justify-content-end">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <div class="container text-end pb-5">
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
</div>