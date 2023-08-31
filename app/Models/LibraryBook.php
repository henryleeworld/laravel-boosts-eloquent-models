<?php

namespace App\Models;

use WendellAdriel\Lift\Attributes\Relations\BelongsTo;

#[BelongsTo(Library::class)]
class LibraryBook extends Book
{
}
