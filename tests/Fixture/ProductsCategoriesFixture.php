<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsCategoriesFixture
 */
class ProductsCategoriesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name_category' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-11-01 00:49:38',
                'modified' => 1635727778,
            ],
        ];
        parent::init();
    }
}
