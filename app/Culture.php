<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    protected $dates = ['created_at','updated_at'];

    //
    protected $guarded = ['_token','_method'];

    /**
     * 编辑文章的链接
     * 
     * @return mixed
     */
    public function editLink()
    {
        return url('manage/culture/edit/'.$this->id);
    }

    /**
     * 后台文章详情链接
     * 
     * @return mixed
     */
    public function detailLink()
    {
        return url('manage/culture/detail/'.$this->id);
    }

    /**
     * 前端香道文化详情链接
     * 
     * @return mixed
     */
    public function showLink()
    {
        return url('culture/'.$this->id);
    }

    /**
     * 下一篇香道文化文章
     * 
     * @return mixed
     */
    public function next()
    {
        return static::where([['created_at','>',$this->created_at],['id','!=',$this->id]])->first();
    }

    /**
     * 上一篇香道文化文章
     * 
     * @return mixed
     */
    public function previous()
    {
        return static::where([['created_at','<',$this->created_at],['id','!=',$this->id]])->first();
    }
}
