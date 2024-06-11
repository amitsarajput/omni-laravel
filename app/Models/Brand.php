<?php

namespace App\Models;

use App\Models\Country;
use App\Models\SearchTag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=['country_id','name','slug'];

    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function search_tags():BelongsToMany
    {
        return $this->belongsToMany(SearchTag::class, 'brand_search_tag', 'brand_id', 'search_tag_id')->withPivot('kram')->orderByPivot('kram', 'asc');
    }

    public function tyres(): HasMany
    {
        return $this->hasMany(Tyre::class);
    }

}
