<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $productsCategories
 */
?>
<div class="container bg-light shadow-2-strong">
    <div class="column-responsive column">
        <div>
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend class="mt-4"><?= __('Add Product') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control(
                    'products_categories_id',
                    ['options' => $productsCategories]
                );
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), [
                'class' => [
                    'btn', 'btn-primary', 'mb-4',
                ]
            ]);
            echo $this->Form->end() ?>
        </div>
    </div>
</div>