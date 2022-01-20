<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMaterialTopicsCourse extends Model
{
    use HasFactory;

    protected $table = 'product_material_topics_course';

    protected $fillable = [
        'product_id', 'type', 'caption', 'hour', 'order'
    ];
}
