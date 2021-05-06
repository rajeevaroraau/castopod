<?php

/**
 * Class class AnalyticsWebsiteByReferer
 * Entity for AnalyticsWebsiteByReferer
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Analytics\Entities;

use datetime;
use CodeIgniter\Entity\Entity;

class AnalyticsWebsiteByReferer extends Entity
{
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'podcast_id' => 'integer',
        'referer_url' => 'string',
        'date' => 'datetime',
        'hits' => 'integer',
    ];
}
