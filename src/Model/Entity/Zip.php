<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Zip Entity
 *
 * @property int $id
 * @property int $country_id
 * @property string|null $zip
 * @property string|null $name
 * @property float $lat
 * @property float $lng
 *
 * @property \App\Model\Entity\Country $country
 */
class Zip extends Entity
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
        'zip' => true,
        'name' => true,
        'lat' => true,
        'lng' => true,
        'country' => true,
    ];
}
