<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsychotechnicTestController extends Controller
{
    
    public function index() {
        // Renvoie toutes les informations sur le candidat avec son statut ok (Table Applicants, Folders, Ratings, ...)
    }

    public function store() {
        // Enregistre des assessments, un rating, add_to_session..... et rediriger sur la page Psychotechnic.vue
    }

    public function show($applicant) {
        
        // Renvoie la vue des informations du test et toutes les informations sur un candidat (Table Applicants, Folders,...)
    }


    
}
