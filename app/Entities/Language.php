<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Language extends Entity
{
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'code' => 'string',
        'native_name' => 'string',
    ];
}
