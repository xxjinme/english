<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HoaDonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HoaDonsTable Test Case
 */
class HoaDonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HoaDonsTable
     */
    public $HoaDons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hoa_dons',
        'app.hds',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HoaDons') ? [] : ['className' => HoaDonsTable::class];
        $this->HoaDons = TableRegistry::get('HoaDons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HoaDons);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
