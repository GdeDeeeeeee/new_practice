<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AutosFixture
 */
class AutosFixture extends TestFixture
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'marca_id' => 1,
                'imagen' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-10-31 14:58:45',
                'modified' => '2022-10-31 14:58:45',
            ],
        ];
        parent::init();
    }
}
