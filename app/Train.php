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

    /**
     * 前端显示培训动态详情链接
     * 
     * @return mixed
     */
    public function showLink()
    {
        return url('train/'.$this->id);
    }

    /**
     * 下一篇培训动态文章
     * 
     * @return mixed
     */
    public function next()
    {
        return static::where([['created_at','>',$this->created_at],['id','!=',$this->id]])->first();
    }

    /**
     * 上一篇培训动态文章
     * 
     * @return mixed
     */
    public function previous()
    {
        return static::where([['created_at','<',$this->created_at],['id','!=',$this->id]])->first();
    }
}
