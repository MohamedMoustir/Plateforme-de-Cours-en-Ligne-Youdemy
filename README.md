
# Youdemy: Plateforme de Cours en Ligne

![image](https://github.com/user-attachments/assets/bc07cb17-f982-4476-b743-1f87390fa02b)


## Description du Projet
**Youdemy** est une plateforme de cours en ligne qui vise à transformer l’apprentissage en offrant des expériences interactives et personnalisées aux étudiants et enseignants. La plateforme inclut des fonctionnalités robustes pour gérer les cours, utilisateurs et statistiques tout en assurant une sécurité et une convivialité optimales.

## Fonctionnalités Clés

### Partie Front Office

#### Visiteur
- 🔍 **Accès au catalogue des cours avec pagination.**
- 🔎 **Recherche de cours par mots-clés.**
- ➕ **Création d’un compte avec le choix du rôle (Étudiant ou Enseignant).**

#### Étudiant
- 📚 **Visualisation du catalogue des cours.**
- 🔍 **Recherche et consultation des détails des cours (description, contenu, enseignant, etc.).**
- ✉️ **Inscription à un cours après authentification.**
- 📝 **Accès à une section “Mes cours” regroupant les cours rejoints.**

#### Enseignant
- ➕ **Ajout de nouveaux cours avec des détails tels que :**
  - Titre, description, contenu (vidéo ou document), tags, et catégorie.
- 🔧 **Gestion des cours :**
  - Modification, suppression et consultation des inscriptions.
- 📊 **Accès à une section “Statistiques” sur les cours :**
  - Nombre d’étudiants inscrits, nombre de cours, etc.

### Partie Back Office

#### Administrateur
- ✅ **Validation des comptes enseignants.**
- 🔒 **Gestion des utilisateurs :**
  - Activation, suspension ou suppression.
- 📂 **Gestion des contenus :**
  - Cours, catégories et tags.
  - Insertion en masse de tags.
- 📊 **Accès à des statistiques globales :**
  - Nombre total de cours, répartition par catégorie, cours avec le plus d’étudiants, Top 3 enseignants.

### Fonctionnalités Transversales
- 🔗 **Relation many-to-many entre les cours et les tags.**
- 📚 **Application du polymorphisme dans les méthodes Ajouter cours et Afficher cours.**
- 🔒 **Système d’authentification et d’autorisation pour protéger les routes sensibles.**
- 🔧 **Contrôle d’accès basé sur les rôles des utilisateurs.**

## Exigences Techniques
- 🔒 **Respect des principes OOP (encapsulation, héritage, polymorphisme).**
- 🔐 **Base de données relationnelle avec gestion des relations (one-to-many, many-to-many).**
- 🔑 **Utilisation des sessions PHP pour la gestion des utilisateurs connectés.**
- ⚠️ **Validation des données utilisateur pour garantir la sécurité.**

## Bonus
- 🔍 **Recherche avancée avec filtres (catégorie, tags, auteur).**
- 📊 **Statistiques avancées : taux d’engagement par cours, catégories les plus populaires.**
- 📢 **Notifications (validation de compte enseignant, inscription confirmée).**
- 🔤 **Commentaires et évaluations sur les cours.**
- 🔧 **Génération de certificats PDF de complétion pour les étudiants.**

## Modalités Pédagogiques
- 🌐 **Travail individuel**
- ⏳ **Durée** : 5 jours
- ⏰ **Date de lancement** : 13/01/2025 à 09:00
- ⚡️ **Date limite** : 20/01/2025 avant 17:30

## Modalités d’évaluation
- 🔄 **Présentation publique** : 10 minutes pour démontrer le site web et expliquer le code source.
- ✍️ **Code Review & Questions** : 10 minutes.
- ⚠️ **Mise en situation** : 15 minutes.

## Livrables
- 📥 **Lien du repository GitHub.**
- 🔖 **Lien de la présentation.**
- 📊 **Diagrammes UML :**
  - Diagramme des cas d’utilisation.
  - Diagramme de classes.

## Critères de Performance
- ⚖️ **Séparation claire entre la logique métier et l’architecture.**
- ✔️ **Cohérence dans l’application des concepts OOP.**
- 🔧 **Structure et lisibilité du code améliorées.**
- 🔢 **Validation côté client et serveur pour minimiser les erreurs et garantir la sécurité.**
- 🔒 **Protection contre XSS, CSRF, et injections SQL.**
- 🌐 **Adaptation responsive des pages web pour tous les types d’écrans.**
