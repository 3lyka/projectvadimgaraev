<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Info extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'info';
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(CategoryInfo::class, 'category_id', 'id');
    }
}
