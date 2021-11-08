<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $productsCategories
 */
?>
<div class="container bg-light shadow-2-strong">
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend><?= __('Edit Product') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('products_categories_id', ['options' => $productsCategories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => ['btn', 'btn-primary', 'mb-4']]) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
