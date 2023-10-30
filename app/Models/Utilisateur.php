<?php

namespace App\Models;

use App\Http\Controllers\TaskController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    public function task(){
        return $this->hasMany(TaskController::class);

    }
    
    use HasFactory;
}
