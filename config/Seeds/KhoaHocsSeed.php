<?php
use Migrations\AbstractSeed;

/**
 * KhoaHocs seed.
 */
class KhoaHocsSeed extends AbstractSeed
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

        $table = $this->table('khoa_hocs');
        $table->insert($data)->save();
    }
}
