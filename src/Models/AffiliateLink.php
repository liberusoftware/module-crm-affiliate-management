<?php

declare(strict_types=1);

namespace Liberu\CRM\AffiliateManagement\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $affiliate_id
 * @property string $status
 */
final class AffiliateLink extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_affiliate_links';

    protected $guarded = [];
}
