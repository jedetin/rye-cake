<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appoint Entity
 *
 * @property string $id
 * @property string $phone
 * @property string $email
 * @property string $product
 * @property string $consult
 * @property string $orderstr
 * @property \Cake\I18n\FrozenTime $time
 */
class Appoint extends Entity
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
        'phone' => true,
        'email' => true,
        'product' => true,
        'consult' => true,
        'orderstr' => true,
        'time' => true,
    ];
}
