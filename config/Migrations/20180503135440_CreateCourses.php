<?php
use Migrations\AbstractMigration;

class CreateCourses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('courses');
        $table->addColumn('course_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('course_price', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('course_description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('course_time', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('course_teacher', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('course_image', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
