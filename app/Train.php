<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $guarded = [];

    /**
     * 培训动态的详情链接
     * 
     * @return mixed
     */
    public function detailLink()
    {
        return url('manage/train/detail/'.$this->id);
    }

    /**
     * 培训动态的编辑链接
     * 
     * @return mixed
     */
    public function editLink()
    {
        return url('manage/train/edit/'.$this->id);
    }
}
