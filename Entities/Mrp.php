<?php

namespace Modules\Mrp\Models;

use Modules\Base\Models\BaseModel;

class Mrp extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "manufacture";

}
