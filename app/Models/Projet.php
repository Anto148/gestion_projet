<?php

namespace App\Models;

use App\Http\Controllers\TaskController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    public function taches() {
        return $this->hasMany(TaskController::class);
    }

    public function calculerStatut() {
        $taches = $this->tasks; 

        if ($taches->count() === 0) {
            return 'En attente';
        }

        $toutesTerminees = $taches->every(function ($tache) {
            return $tache->statut === 'Terminée';
        });

        if ($toutesTerminees) {
            return 'Terminé';
        }

        return 'En cours';
    }
}
