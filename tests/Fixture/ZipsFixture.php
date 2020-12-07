<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZipsFixture
 */
class ZipsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'country_id' => ['type' => 'smallinteger', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'zip' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_hungarian_ci', 'comment' => '', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_hungarian_ci', 'comment' => '', 'precision' => null],
        'lat' => ['type' => 'float', 'length' => 10, 'precision' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'lng' => ['type' => 'float', 'length' => 10, 'precision' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'zip' => ['type' => 'index', 'columns' => ['zip'], 'length' => []],
            'name' => ['type' => 'index', 'columns' => ['name'], 'length' => []],
            'fk_zips_countries1_idx' => ['type' => 'index', 'columns' => ['country_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'country_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_hungarian_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'country_id' => 1,
                'zip' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'lat' => 1,
                'lng' => 1,
            ],
        ];
        parent::init();
    }
}
