## Menu horizontal
- Acceuil
- Candidature
- Quizz
- Params

## Menu vertical
- Etude de dossiers
  - Postulant
    . Affichage de tous les postulant avec le statut( **en attente**, **OK**, **NOK**, **out** ) et leurs informations contenu dans la table **Applicants**. Barre de recherche par noms et filtre par status.
    Champs de la table Applicants:
    - Status
    - id
    - civility
    - first_name
    - last_name
    - nationality
    - identity_document
    - email
    - city
  - Validations
    . Vue contenant les informations complémentaires contenu dans la table **Folders** donnant la possibilité d'affecter un statut (**OK**, **NOK**, **out** ) au postulant et de passer au suivant.
    NB: La validation sera conditionné a la présence d'une session qui existe.

- Tests 

  - Test Psychotechnique
    . Affichage des postulants ordonnées par date de sessions 
        . Au clic sur un postulant une vue permettant l'insertion des notes obtenus pour chaque sous-test.
        . Après insertion des notes et calcul de la moyenne. Option de validation en fonction de la note obtenu et assignation a une session pour le prochain test.

  - Test collectif
     . Affichage des postulants ordonnées par date de sessions 
        . Au clic sur un postulant une vue permettant l'insertion des notes obtenus pour chaque sous-test.
        . Après insertion des notes et calcul de la moyenne. Option de validation en fonction de la note obtenu et assignation a une session pour le prochain test.


  - Test Individuel
     . Affichage des postulants ordonnées par date de sessions 
        . Au clic sur un postulant une vue permettant l'insertion des notes obtenus pour chaque sous-test.
        . Après insertion des notes et calcul de la moyenne. Option de validation en fonction de la note obtenu et assignation a une session pour le prochain test.

- Demarrage Formation




###############################


## Structures des composants

- Layout: Layouts/App-layout.vue
  - Menu horizontale:
    - Logo
    - Canditatures
    - Quiz
    - Params
    - Profil de connexion
  - Menu vertical
    - Etude de dossier
    - Test Psychotechnique
    - Test collectif
    - Test individuel
    - Demarrage Formation


- Pages: 
  - Pages/FoldersCheckings.vue
        ApplicantsTable.vue -> ApplicantsInformation.vue
  - Pages/PsychotechnicTest.vue
        ApplicantsTable.vue -> RatingTests.vue
  - Pages/CollectiveTest.vue
        ApplicantsTable.vue -> RatingTests.vue
  - Pages/IndividualTest.vue
        ApplicantsTable.vue -> RatingTests.vue
  - Pages/FormationStart.vue

- Components
  - components/ApplicantsTable.vue
  - components/ApplicantsInformation.vue
  - components/RatingTests.vue
