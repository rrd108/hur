<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FirstnamesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FirstnamesTable Test Case
 */
class FirstnamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FirstnamesTable
     */
    protected $Firstnames;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Firstnames',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Firstnames') ? [] : ['className' => FirstnamesTable::class];
        $this->Firstnames = $this->getTableLocator()->get('Firstnames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Firstnames);

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
