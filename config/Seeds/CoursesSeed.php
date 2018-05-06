<?php
use Migrations\AbstractSeed;

/**
 * Courses seed.
 */
class CoursesSeed extends AbstractSeed
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

        $table = $this->table('courses');
        $table->insert($data)->save();
    }
}
