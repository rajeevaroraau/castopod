<?php

/**
 * Class AnalyticsUnknownUseragents
 * Entity for AnalyticsUnknownUseragents
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Analytics\Entities;

use CodeIgniter\Entity;

class AnalyticsUnknownUseragents extends Entity
{
    protected $casts = [
        'useragent' => 'integer',
        'hits' => 'integer',
    ];
}