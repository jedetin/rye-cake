<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppointFixture
 */
class AppointFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'appoint';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '4e7f67e2-5825-4d81-b42e-1375e60b3a0b',
                'phone' => 'Lorem ip',
                'email' => 'Lorem ipsum dolor sit amet',
                'product' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'consult' => 'Lorem ips',
                'orderstr' => 'Lorem ipsum dolor sit amet',
                'time' => 1649527718,
            ],
        ];
        parent::init();
    }
}
