<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TNP extends Model
{
    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("name", "LIKE","%$keyword%")
                    ->orWhere("email", "LIKE", "%$keyword%")
                    ->orWhere("regdno", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }
}
