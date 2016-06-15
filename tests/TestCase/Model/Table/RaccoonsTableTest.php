<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RaccoonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RaccoonsTable Test Case
 */
class RaccoonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RaccoonsTable
     */
    public $Raccoons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.raccoons',
        'app.cities',
        'app.cities_raccoons',
        'app.tags',
        'app.raccoons_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Raccoons') ? [] : ['className' => 'App\Model\Table\RaccoonsTable'];
        $this->Raccoons = TableRegistry::get('Raccoons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Raccoons);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
