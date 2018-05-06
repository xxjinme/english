<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChiTietHoaDonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChiTietHoaDonsTable Test Case
 */
class ChiTietHoaDonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChiTietHoaDonsTable
     */
    public $ChiTietHoaDons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.chi_tiet_hoa_dons',
        'app.cthds',
        'app.hds',
        'app.courses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ChiTietHoaDons') ? [] : ['className' => ChiTietHoaDonsTable::class];
        $this->ChiTietHoaDons = TableRegistry::get('ChiTietHoaDons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChiTietHoaDons);

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
