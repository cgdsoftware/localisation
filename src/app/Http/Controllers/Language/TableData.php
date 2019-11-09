<?php

namespace LaravelEnso\Localisation\app\Http\Controllers\Language;

use Illuminate\Routing\Controller;
use LaravelEnso\Localisation\app\Tables\Builders\LanguageTable;
use LaravelEnso\Tables\app\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = LanguageTable::class;
}
