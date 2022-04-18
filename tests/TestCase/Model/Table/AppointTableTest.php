<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppointTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppointTable Test Case
 */
class AppointTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppointTable
     */
    protected $Appoint;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Appoint',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Appoint') ? [] : ['className' => AppointTable::class];
        $this->Appoint = $this->getTableLocator()->get('Appoint', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Appoint);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AppointTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
