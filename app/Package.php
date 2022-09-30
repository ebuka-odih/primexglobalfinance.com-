<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    public function total_return()
    {
        return $this->daily_interest * $this->term_days;
    }

    public function max()
    {
        if ($this->max_deposit == null) {
            return "UNLIMITED";
        }
        return $this->max_deposit;
    }

    public function profit()
    {
        $profit = ($this->daily_interest * $this->min_deposit) / 100;
        return $profit;
    }
}
