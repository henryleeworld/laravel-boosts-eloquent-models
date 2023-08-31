<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\PrimaryKey;
use WendellAdriel\Lift\Attributes\Relations\HasMany;
use WendellAdriel\Lift\Attributes\Relations\HasManyThrough;
use WendellAdriel\Lift\Lift;

#[HasMany(User::class)]
#[HasManyThrough(Post::class, User::class)]
class Country extends Model
{
    use Lift;

    #[PrimaryKey]
    public int $id;
}
