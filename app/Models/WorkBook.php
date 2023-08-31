<?php

namespace App\Models;

use WendellAdriel\Lift\Attributes\Relations\BelongsTo;

#[BelongsTo(User::class)]
class WorkBook extends Book
{
}
