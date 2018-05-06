<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher; // hash password
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
      /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'user_password'
    ];
    protected function _setUserPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
