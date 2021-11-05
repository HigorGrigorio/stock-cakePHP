<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="column container shadow-2-strong  pt-4">
    <div>
        <div>
            <table class="table table-hover bg-light">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Products Category') ?></th>
                    <td><?= $product->has('products_category') ? $this->Html->link($product->products_category->id, ['controller' => 'ProductsCategories', 'action' => 'view', $product->products_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($product->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($product->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <aside class="pb-5">
        <div class="row">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(
                __('Edit Product'),
                ['action' => 'edit', $product->id],
                ['class' => 'link-warning']
            ) ?>
            <?= $this->Form->postLink(
                __('Delete Product'),
                ['action' => 'delete', $product->id],
                [
                    'confirm' => __('Are you sure you want to delete # {0}?', $product->id),
                    'class' => 'link-danger'
                ]
            ) ?>
        </div>
    </aside>
</div>