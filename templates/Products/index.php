<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>

<div class="container-lg overflow-visible bg-light shadow-2-strong">
    <h3><?= __('Products') ?></h3>
    <table class="table container-lg table-hover bg-light">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_categories_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= h($product->name) ?></td>
                    <td><?= h($product->created) ?></td>
                    <td><?= h($product->modified) ?></td>
                    <td><?= $product->has('products_category') ? $this->Html->link($product->products_category->id, ['controller' => 'ProductsCategories', 'action' => 'view', $product->products_category->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->id], ['class' => 'link-warning']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id], ['class' => 'link-primary']) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $product->id],
                            [
                                'confirm' => __('Are you sure you want to delete # {0}?', $product->id),
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
            <?= $this->Paginator->first('<< ' . __('')) ?>
            <?= $this->Paginator->prev('< ' . __('')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('') . ' >') ?>
            <?= $this->Paginator->last(__('') . ' >>') ?>
        </ul>
        <div class="container text-end pb-5">
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
</div>