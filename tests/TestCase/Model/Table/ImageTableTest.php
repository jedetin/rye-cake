<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImageTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImageTable Test Case
 */
class ImageTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImageTable
     */
    protected $Image;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Image',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Image') ? [] : ['className' => ImageTable::class];
        $this->Image = $this->getTableLocator()->get('Image', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Image);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImageTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
