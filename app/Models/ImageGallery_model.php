<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageGallery_model extends Model
{
    protected $table='tblgallery';
    protected $primaryKey='id';
    protected $fillable=['products_id','image'];
}