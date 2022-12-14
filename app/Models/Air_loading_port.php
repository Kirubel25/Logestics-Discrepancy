<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Origin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Air_loading_port extends Model
{
    use HasFactory;
    protected $fillable=['country','port_name','origin_id','isDeleted'];

    public function AirLoadingOrigin()
    {
        return $this->belongsTo(Origin::class, 'origin_id', 'id');
    }

    public function AirLoadingItem()
    {
        return $this->hasMany(Item::class, 'air_loading_id', 'id');
    }
}
