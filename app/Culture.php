<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
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
     * 文章详情链接
     * 
     * @return mixed
     */
    public function detailLink()
    {
        return url('manage/culture/detail/'.$this->id);
    }
}
