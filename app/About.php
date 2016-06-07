<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded = [];

    /**
     * 关于汉雅编辑链接
     * 
     * @return mixed
     */
    public function editLink()
    {
        return url('manage/about/edit');
    }
}
