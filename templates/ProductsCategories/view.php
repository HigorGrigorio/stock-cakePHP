<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsCategory $productsCategory
 */
?>
<div class="column container shadow-2-strong pt-4">
    <div>
        <div>
            <table class="table table-hover bg-light">
                <tr>
                    <th><?= __('Name Category') ?></th>
                    <td><?= h($productsCategory->name_category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productsCategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($productsCategory->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($productsCategory->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <aside class="pb-5">
        <div class="row">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(
                __('Edit Products Category'),
                ['action' => 'edit', $productsCategory->id],
                ['class' => 'link-warning']
            ) ?>
            <?= $this->Form->postLink(
                __('Delete Products Category'),
                ['action' => 'delete', $productsCategory->id],
                [
                    'confirm' => __('Are you sure you want to delete # {0}?', $productsCategory->id),
                    'class' => 'link-danger'
                ]
            ) ?>
        </div>
    </aside>
</div>