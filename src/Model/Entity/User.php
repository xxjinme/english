<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $user_name
 * @property string $user_password
 * @property string $email
 * @property string $user_role
 * @property string $user_avatar
 * @property string $user_gender
 *
 * @property \App\Model\Entity\HoaDon[] $hoa_dons
 */
class User extends Entity
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
        'user_name' => true,
        'user_password' => true,
        'email' => true,
        'user_role' => true,
        'user_avatar' => true,
        'user_gender' => true,
        'hoa_dons' => true
    ];
    protected $_hidden = [
        'password'
    ];
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
    protected function _setCheckcode($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
            
            return $hasher->hash($value);
        }
    }
}

