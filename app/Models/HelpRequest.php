<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpRequest extends Model
{
    use HasFactory, SoftDeletes;

    public function store($values, $images)
    {
        $model                   = new self();
        $model->fullname         = $values->fullname;
        $model->province         = $values->province;
        $model->birth_date       = $values->birth_date;
        $model->email            = $values->email;
        $model->contact_no       = $values->contact_no;
        $model->contact_no_other = $values->contact_no_other;
        $model->zone             = $values->zone;
        $model->address          = $values->address;
        $model->gender           = $values->gender;
        $model->assistance       = $values->assistance;
        $model->brgy_cpt_name    = $values->brgy_cpt_name;
        $model->name_of_mayor    = $values->name_of_mayor;
        $model->salaysay         = $values->salaysay;
        $model->actual_langitude = $values->actual_langitude;
        $model->actual_longitude = $values->actual_longitude;
        $model->image1           = $images[0] ?? '';
        $model->image2           = $images[1] ?? '';
        $model->image3           = $images[2] ?? '';
        $model->save();
    }
}
