## Testez vos compétences Laravel — Vues Blade

Ce dépôt est un exercice pratique : réalisez les tâches listées ci-dessous
et faites passer les tests PHPUnit, qui échouent volontairement pour le moment.

Pour vérifier votre progression, les tests se trouvent dans `tests/Feature/ViewsTest.php`.

Au départ, si vous exécutez `php artisan test`, tous les tests échouent.
Votre objectif est de les faire passer un par un.

> ⚠️ **Vous n'avez pas le droit de modifier les fichiers de tests.**


## Installation du projet

```sh
git clone <url-du-depot> projet
cd projet
cp .env.example .env  # Éditez vos variables d'environnement
composer install
php artisan key:generate
```

Puis lancez `php artisan test` pour voir les erreurs à corriger.


## Soumettre votre solution

Créez une Pull Request (ou Merge Request) vers la branche `main`.

---

## Tâche 1. Passer des données à une vue (View)

Dans le fichier `app/Http/Controllers/HomeController.php`, la méthode `users()` calcule
la variable `$usersCount` mais ne la transmet pas à la vue (view).
Corrigez cette méthode pour que la variable soit disponible dans la vue `resources/views/users.blade.php`.

Méthode de test : `test_users_list_get_with_values()`.

---

## Tâche 2. Prévenir les attaques XSS

La page `/alert` affiche une alerte JavaScript. Modifiez le fichier
`resources/views/alert.blade.php` pour que l'alerte ne s'exécute pas,
mais que son code HTML s'affiche tel quel (encodage des caractères spéciaux).

Méthode de test : `test_script_alert_does_not_fire_modal()`.

---

## Tâche 3. Boucle dans un tableau

Le fichier `resources/views/table.blade.php` doit afficher la liste de tous les utilisateurs
dans un tableau. Si aucun utilisateur n'existe, affichez à la place une ligne "No content".
Utilisez les directives Blade `@forelse` ou `@foreach` / `@if`.

Méthode de test : `test_loop_shows_table_or_empty()`.

---

## Tâche 4. Styliser les lignes du tableau

Dans le fichier `resources/views/rows.blade.php`, trois modifications sont à apporter
à la boucle existante :

- Dans la première colonne, affichez le numéro de la ligne : 1, 2, etc.
- Seules les lignes paires (2e, 4e, etc.) doivent avoir la classe CSS `bg-red-100`.
- Seule la **première** ligne doit avoir la colonne email avec la classe `font-bold`.

Indice : utilisez la variable `$loop` disponible dans les boucles Blade
(voir https://laravel.com/docs/blade#the-loop-variable).

Méthode de test : `test_rows_styled_with_number()`.

---

## Tâche 5. Affichage conditionnel selon l'authentification

Dans le fichier `resources/views/authenticated.blade.php`, affichez le texte approprié
selon que l'utilisateur est connecté ou non :

- Si connecté : `Yes, I am logged in as` suivi de l'email de l'utilisateur.
- Si non connecté : `No, I am not logged in.`

Utilisez les directives Blade `@auth` / `@guest` ou `@if(auth()->check())`.

Méthode de test : `test_authenticated()`.

---

## Tâche 6. Inclure un fichier Blade (@include)

Dans le fichier `resources/views/include.blade.php`, incluez le fichier partiel
`resources/views/includes/row.blade.php` à l'intérieur de la boucle,
en lui passant correctement la variable `$user`.

Indice : utilisez la directive `@include` de Blade
(voir https://laravel.com/docs/blade#including-subviews).

Méthode de test : `test_include_row()`.

---

## Tâche 7. Variable globale dans toutes les vues (View Composer)

Dans le fichier `resources/views/layouts/app.blade.php`, la variable `$metaTitle`
est utilisée comme titre de la page. Vous devez faire en sorte que cette variable
soit disponible dans toutes les vues avec la valeur `"Blade Test"`,
**sans toucher aux controllers**.

Indice : utilisez un View Composer dans `app/Providers/AppServiceProvider.php`
(voir https://laravel.com/docs/views#view-composers).

Méthode de test : `test_meta_title()`.

---

## Tâche 8. Changer le layout Blade

Modifiez le fichier `resources/views/layout.blade.php` pour qu'il utilise
le layout `layouts/main.blade.php` (sans composants Blade) au lieu de
`layouts/app.blade.php` (avec composants Blade).

Indice : remplacez `<x-app-layout>` par la directive `@extends('layouts.main')`
et utilisez `@section('content')` / `@endsection`.

Méthode de test : `test_layout()`.

---

## Questions / Problèmes ?

Si vous rencontrez des difficultés ou avez des suggestions, créez une Issue.

Bon courage !
