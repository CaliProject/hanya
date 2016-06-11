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

    public function showLink()
    {
        return url('culture/'.$this->id);
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
