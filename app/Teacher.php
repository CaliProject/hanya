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

    /**
     * 前端显示师资力量详情链接
     * 
     * @return mixed
     */
    public function showLink()
    {
        return url('teacher/'.$this->id);
    }

    /**
     * 名师推荐
     * 
     * @return mixed
     */
    public function good()
    {
        return static::where('is_good',1)->get();
    }
}
