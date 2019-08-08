<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];

    protected $date=['last_used_at'];

    protected $appends = ['full_address'];

    /**
     * 关联用户模型
     */
    public function user(){
        $this->belongsTo(User::class);
    }

    /**
     * 获取完成的收货地址
     * @return string
     */
    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
