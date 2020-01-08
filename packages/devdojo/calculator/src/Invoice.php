<?php

namespace Devdojo\Calculator;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    public function items()
    {
        return $this->hasMany(Item::class, 'invoice_id');
    }
}
