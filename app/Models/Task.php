<?php

namespace App\Models;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function project(){
        return $this->hasOne(ProjetController::class);

    }

    public function user(){
        return $this->hasOne(UtilisateurController::class);

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
