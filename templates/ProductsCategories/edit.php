<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsCategory $productsCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsCategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Products Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsCategories form content">
            <?= $this->Form->create($productsCategory) ?>
            <fieldset>
                <legend><?= __('Edit Products Category') ?></legend>
                <?php
                    echo $this->Form->control('name_category');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
