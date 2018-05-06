<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KhoaHocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KhoaHocsTable Test Case
 */
class KhoaHocsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KhoaHocsTable
     */
    public $KhoaHocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.khoa_hocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('KhoaHocs') ? [] : ['className' => KhoaHocsTable::class];
        $this->KhoaHocs = TableRegistry::get('KhoaHocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KhoaHocs);

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
