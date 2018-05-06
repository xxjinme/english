<?php
use Migrations\AbstractSeed;

/**
 * HoaDons seed.
 */
class HoaDonsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $table = $this->table('hoa_dons');
        $table->insert($data)->save();
    }
}
