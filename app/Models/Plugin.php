<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public static function getPlugins()
    {
        $plugins = self::where('status', 'active')->get();
        return $plugins;
    }
}
