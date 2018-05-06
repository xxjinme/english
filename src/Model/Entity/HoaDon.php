<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HoaDon Entity
 *
 * @property int $id
 * @property string $hd_id
 * @property string $user_id
 * @property string $hd_tong
 * @property \Cake\I18n\FrozenTime $hd_ngaylap
 *
 * @property \App\Model\Entity\Hd $hd
 * @property \App\Model\Entity\User $user
 */
class HoaDon extends Entity
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
        'hd_id' => true,
        'user_id' => true,
        'hd_tong' => true,
        'hd_ngaylap' => true,
        'hd' => true,
        'user' => true
    ];
}
