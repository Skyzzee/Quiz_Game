# Quiz_Game

<div align="center">
  <a href="https://www.wf3.fr/" target="_blank">
    <img style="border-radius: 5px;" src="https://www.frenchtechbordeaux.com/wp-content/uploads/2021/02/WebForce3_logo-violet_JPEG.jpg" alt="Logo" width="200" height="80">
  </a>

  <p align ="left">
    Une formatrice souhaite créer un site d’exercices pour proposer une façon ludique et
    interactive de travailler.
  </p>
    
  <p align ="left">
    Le but est donc de créer une plateforme sur laquelle :
    <br><br>D’un côté, les enseignants peuvent mettre divers exercices (possibilité de
    créer des QCM ou des questions avec un formulaire à compléter avec des
    questions écrites, des images, des audios ou vidéos)
    <br><br>D’un autre côté, les étudiants peuvent faire ces quiz.
    <br><br>Voici un exemple de site pour vous donner une idée :
    https://www.leplaisirdapprendre.com/quiz-france/index.html
  </p>
</div>

## Commandes
# Quiz_Game

PROJET QUIZ_GAME

## Pour cloner le projet

```
git clone https://github.com/CSTLLI/WF3-QUIZ_GAME.git
```

## Installation

```
------------------------------------------------------------------------------------------------------------------------------------------------------------------
composer install (obligatoire lorsque l'on pull un projet)
npm install (obligatoire lorsque l'on pull un projet)
npm run dev (obligatoire lorsque l'on pull un projet)
------------------------------------------------------------------------------------------------------------------------------------------------------------------

      ***************************************************  BASE DE DONNEE  **************************************************
      *                                                                                                                     *
      *      symfony console doctrine:database:create (Création de la BDD)                                                  *
      *      symfony console doctrine:database:drop --force (Suppression de la base de données)                             *
      *      symfony console make:migration (Création du fichier migration)                                                 *
      *      symfony console doctrine:migrations:migrate (envoi du fichier migration a la BDD afin de la mettre a jour)     *
      *                                                                                                                     *
      ***********************************************************************************************************************


------------------------------------------------------------------------------------------------------------------------------------------------------------------
composer require symfony/webpack-encore-bundle
------------------------------------------------------------------------------------------------------------------------------------------------------------------
```

### Composant qui concerne le Webpack Encore

```
      ***************************** Composant à installer si vous souhaitez les utiliser *****************************
      *                                                                                                              *
      *     npm install sass-loader@^12.0.0 sass --save-dev                                                          *
      *     npm install postcss-loader@^6.0.0 --save-dev                                                             *
      *     npm install autoprefixer --save-dev                                                                      *  
      *     npm i bootstrap --save-dev                                                                               * 
      *     npm install jquery                                                                                       *
      *     npm install --save @fortawesome/fontawesome-free                                                         *
      *                                                                                                              *
      ****************************************************************************************************************
```

composer require symfony/rate-limiter (# Configuration du nombre maximum de tentatives de connexion échouées sur un temps donné)


## Répartition des tâches

| Développeur | Tâches | Etat | Dernière Mise à jour | 
|--|--|--|--|
| Baptiste | 
| Benjamin | 
| Lucas B |
| Vincent |
| Valerio |
