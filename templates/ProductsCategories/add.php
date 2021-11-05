<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsCategory $productsCategory
 */
?>
<div class="container bg-light shadow-2-strong">
    <div class="column-responsive column">
        <div>
            <?= $this->Form->create($productsCategory) ?>
            <fieldset>
                <legend class="mt-4"><?= __('Add Products Category') ?></legend>
                <?php
                echo $this->Form->control(
                    'name_category'
                );
                ?>
            </fieldset>
            <?= $this->Form->button(
                __('Submit'),
                ['class' => [
                    'btn', 'btn-primary', 'mb-4',
                ]]
            ) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>