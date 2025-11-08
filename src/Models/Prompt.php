<?php
namespace Rmhl\LogAnalyzer\Models;

use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    protected $fillable = ['key', 'system', 'user'];
}
