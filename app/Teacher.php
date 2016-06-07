<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];

    /**
     * 师资力量编辑链接
     * 
     * @return mixed
     */
    public function editLink()
    {
        return url('manage/teacher/edit/'.$this->id);
    }

    /**
     * 师资力量详情链接
     * 
     * @return mixed
     */
    public function detailLink()
    {
        return url('manage/teacher/detail/'.$this->id);
    }
}
