<?php

namespace Modules\Reports\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReportTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    protected $table = 'report_translations';

    public $timestamps = false;
}
