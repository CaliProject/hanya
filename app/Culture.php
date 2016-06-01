<?php

namespace Hanya;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    //
    public function editLink()
    {
        return url('manager/culture/edit/'.$this->id);
    }
}
