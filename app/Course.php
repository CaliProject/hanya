<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['_token','_method'];

    /**
     * 课程通知编辑链接
     * 
     * @return mixed
     */
    public function editLink()
    {
        return url('manage/course/edit/'.$this->id);
    }

    /**
     * 课程通知详情链接
     * 
     * @return mixed
     */
    public function detailLink()
    {
        return url('manage/course/detail/'.$this->id);
    }

    public function showLink()
    {
        return url('course/'.$this->id);
    }

    public function next()
    {
        return static::where([['created_at','>',$this->created_at],['id','!=',$this->id]])->first();
    }

    public function previous()
    {
        return static::where([['created_at','<',$this->created_at],['id','!=',$this->id]])->first();
    }
}
