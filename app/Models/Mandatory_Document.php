<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mandatory_Document extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function item()
{
    return $this->hasMany(Item::class, 'mandatory_doc_id', 'id');
}
}
