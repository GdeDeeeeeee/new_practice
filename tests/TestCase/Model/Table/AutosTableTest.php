<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutosTable Test Case
 */
class AutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AutosTable
     */
    protected $Autos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Autos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Autos') ? [] : ['className' => AutosTable::class];
        $this->Autos = $this->getTableLocator()->get('Autos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Autos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AutosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
