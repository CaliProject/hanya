<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];

    /**
     * 招贤纳士编辑链接
     * 
     * @return mixed
     */
    public function editLink()
    {
        return url('manage/job/edit');
    }
}
