<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //
    public function set_complete() {
        $this->completed=true;
        $this->save();
    }
}
