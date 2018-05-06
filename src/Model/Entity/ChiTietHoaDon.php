<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChiTietHoaDon Entity
 *
 * @property int $id
 * @property string $cthd_id
 * @property string $hd_id
 * @property string $course_id
 * @property string $course_price
 *
 * @property \App\Model\Entity\Cthd $cthd
 * @property \App\Model\Entity\Hd $hd
 * @property \App\Model\Entity\Course $course
 */
class ChiTietHoaDon extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cthd_id' => true,
        'hd_id' => true,
        'course_id' => true,
        'course_price' => true,
        'cthd' => true,
        'hd' => true,
        'course' => true
    ];
}
