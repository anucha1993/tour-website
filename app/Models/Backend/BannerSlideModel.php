<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSlideModel extends Model
{
    use HasFactory;
    
    protected $table = 'tb_banner_slide';
    protected $primaryKey = 'id';
    
    // แก้ไข timestamp property
    public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    // กำหนด fillable fields
    protected $fillable = [
        'title',
        'description', 
        'image_url',
        'link_url',
        'sort_order',
        'status',
        'created_at',
        'updated_at'
    ];
    
    // กำหนด cast types
    protected $casts = [
        'status' => 'boolean',
        'sort_order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    
    // Scope สำหรับ active banners
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
    
    // Scope สำหรับเรียงลำดับ
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc');
    }
}
