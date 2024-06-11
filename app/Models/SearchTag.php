<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Icon;
use App\Models\Tyre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SearchTag extends Model
{
    use HasFactory;

    protected $fillable=['name','icon_id','slug'];

    public function brands():BelongsToMany
    {
        return $this->belongsToMany(Brand::class, 'brand_search_tag', 'search_tag_id', 'brand_id')->withPivot('kram')->orderByPivot('kram', 'asc');
    }
    public function tyres(): HasMany
    {
        return $this->hasMany(Tyre::class);
    }
    public function icon(): BelongsTo
    {
        return $this->belongsTo(Icon::class);
    }
}
