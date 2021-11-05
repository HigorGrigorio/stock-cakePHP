<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */


$description = 'STOCK';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $description ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <?= $this->Html->css(
        [
            'bootstrap',
        ]
    ) ?>
    <?= $this->Html->script(['bootstrap']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 fixed-top">
            <div>
                <?= $this->Html->link(
                    __('stock'),
                    [
                        'controller' => 'products',
                        'action' => 'index'
                    ],
                    [
                        'class' => [
                            'link-primary', 'fs-2', 'text-uppercase', 'fw-bold', 'ps-4',
                            'text-decoration-none'
                        ]
                    ]
                ) ?>
                <div id="navbar-content" class="btn-group shadow-1 ms-4 mb-2">
                    <?= $this->Html->link(
                        __('Products'),
                        [
                            'controller' => 'products',
                            'action' => 'index'
                        ],
                        ['class' => 'btn btn-primary']
                    ) ?>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <?= $this->Html->link(
                                __('New Product'),
                                [
                                    'controller' => 'products',
                                    'action' => 'add'
                                ],
                                ['class' => 'dropdown-item text-center']
                            ) ?>


                        </li>
                        <li>

                            <?= $this->Html->link(
                                __('View Products'),
                                [
                                    'controller' => 'products',
                                    'action' => 'view'
                                ],
                                ['class' => 'dropdown-item text-center']
                            ) ?>
                        </li>

                    </ul>
                </div>
                <div class="btn-group shadow-1 ms-4 mb-2">
                    <?= $this->Html->link(
                        __('Products Categories'),
                        [
                            'controller' => 'products-categories',
                            'action' => 'index'
                        ],
                        ['class' => 'btn btn-primary']
                    ) ?>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <?= $this->Html->link(
                            __('New Category'),
                            [
                                'controller' => 'products-categories',
                                'action' => 'add'
                            ],
                            ['class' => 'dropdown-item text-center']
                        ) ?>
                        <?= $this->Html->link(
                            __('View Categories'),
                            [
                                'controller' => 'products-categories',
                                'action' => 'view'
                            ],
                            ['class' => 'dropdown-item text-center']
                        ) ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="nav-block" style="height: 6rem;"></div>
    <main class="main">
        <div class="mx-4">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
</body>

</html>