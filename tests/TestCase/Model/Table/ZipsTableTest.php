<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZipsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZipsTable Test Case
 */
class ZipsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZipsTable
     */
    protected $Zips;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Zips',
        'app.Countries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Zips') ? [] : ['className' => ZipsTable::class];
        $this->Zips = $this->getTableLocator()->get('Zips', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Zips);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
