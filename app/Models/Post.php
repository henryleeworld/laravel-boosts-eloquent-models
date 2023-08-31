<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\Fillable;
use WendellAdriel\Lift\Attributes\PrimaryKey;
use WendellAdriel\Lift\Attributes\Relations\BelongsTo;
use WendellAdriel\Lift\Attributes\Relations\MorphMany;
use WendellAdriel\Lift\Lift;

#[BelongsTo(User::class)]
#[MorphMany(Image::class, 'imageable')]
class Post extends Model
{
    use HasFactory, Lift;

    #[PrimaryKey]
    public int $id;

    #[Fillable]
    public string $title;

    #[Fillable]
    public string $content;

    #[Fillable]
    public ?int $user_id;
}
