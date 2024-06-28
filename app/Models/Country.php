<?php

namespace App\Models;
use App\Models\Brand;
use App\Models\Region;
use App\Models\Tyre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $fillable=['region_id','name','code','locale_code','slug'];
    
    public function region():BelongsTo
    {
       return $this->belongsTo(Region::class, 'region_id');
    }
    

    public function brands():HasMany
    {
        return $this->hasMany(Brand::class);
    }

    public function tyres(): HasMany
    {
        return $this->hasMany(Tyre::class);
    }
}
