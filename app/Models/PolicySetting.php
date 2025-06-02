<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PolicySetting extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'policy_settings';
    protected $guarded = ['id'];
}
