<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImageFixture
 */
class ImageFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'image';
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
                'image' => 'Lorem ipsum dolor sit amet',
                'height' => 1,
                'width' => 1,
                'lefts' => 'Lorem ipsum dolor sit amet',
                'top' => 1,
            ],
        ];
        parent::init();
    }
}
