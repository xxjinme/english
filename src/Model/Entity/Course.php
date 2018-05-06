<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $course_name
 * @property int $course_price
 * @property string $course_description
 * @property \Cake\I18n\FrozenTime $course_time
 * @property string $course_teacher
 * @property string $course_image
 *
 * @property \App\Model\Entity\ChiTietHoaDon[] $chi_tiet_hoa_dons
 */
class Course extends Entity
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
        'course_name' => true,
        'course_price' => true,
        'course_description' => true,
        'course_time' => true,
        'course_teacher' => true,
        'course_image' => true,
        'chi_tiet_hoa_dons' => true
    ];
}
