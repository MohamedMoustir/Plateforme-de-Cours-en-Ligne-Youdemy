<?php
require_once "../../Class/Administrateur.php";
require_once "../../Config/db.php";

$users = new Administrateur();

$cours = $users->pourcentage_inscriptions();


if (!isset($_SESSION['role']) || $_SESSION['role'] === '' || $_SESSION['role'] == 'Enseignant' || $_SESSION['role'] == 'Etudiant') {
  header('Location:../my-account/login.php');
  exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <title>Document</title>
</head>

<body>


  <style>
    .button {
      appaerance: none;
      font: inherit;
      border: none;
      background: none;
      cursor: pointer;
    }

    .container {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translate(-40%);
      right: 0;
      bottom: 0;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;

    }

    .modal {
      display: flex;
      flex-direction: column;
      width: 100%;
      max-width: 500px;
      background-color: #fff;
      box-shadow: 0 15px 30px 0 rgba(0, 125, 171, 0.15);
      border-radius: 10px;
    }

    .modal__header {
      padding: 1rem 1.5rem;
      border-bottom: 1px solid #ddd;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .modal__body {
      padding: 1rem 1rem;
    }

    .modal__footer {
      padding: 0 1.5rem 1.5rem;
    }

    .modal__title {
      font-weight: 700;
      font-size: 1.25rem;
    }

    .button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: 0.15s ease;
    }

    .button--icon {
      width: 2.5rem;
      height: 2.5rem;
      background-color: transparent;
      border-radius: 0.25rem;
    }

    .button--icon:focus,
    .button--icon:hover {
      background-color: #ededed;
    }

    .button--primary {
      background-color: #007dab;
      color: #FFF;
      padding: 0.75rem 1.25rem;
      border-radius: 0.25rem;
      font-weight: 500;
      font-size: 0.875rem;
    }

    .button--primary:hover {
      background-color: #006489;
    }

    .input {
      display: flex;
      flex-direction: column;
    }

    .input+.input {
      margin-top: 1.75rem;
    }

    .input__label {
      font-weight: 700;
      font-size: 0.875rem;
    }

    .input__field {
      display: block;
      margin-top: 0.5rem;
      border: 1px solid #DDD;
      border-radius: 0.25rem;
      padding: 0.75rem 0.75rem;
      transition: 0.15s ease;
    }

    .input__field:focus {
      outline: none;
      border-color: #007dab;
      box-shadow: 0 0 0 1px #007dab, 0 0 0 4px rgba(0, 125, 171, 0.25);
    }

    .input__field--textarea {
      min-height: 100px;
      max-width: 100%;
    }

    .input__description {
      font-size: 0.875rem;
      margin-top: 0.5rem;
      color: #8d8d8d;
    }
  </style>


  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B4it Statistics</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-gray-50">
    <aside id="continer_dashboard"
      class=" block bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
      <div class="relative border-b border-white/20">
        <a class="flex items-center gap-4 py-6 px-8" href="#/">
          <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">
            Dashboard</h6>
        </a>

        <button onclick=" closeDashboard()"
          class="middle  none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
          type="button">
          <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
              stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-white">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </span>
        </button>
      </div>
      <div class="m-4">
        <ul class="mb-4 flex flex-col gap-1">
          <li>
            <a aria-current="page" class="active" href="statistiques.php">
              <button id="dashboard"
                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                  class="w-5 h-5 text-inherit">
                  <path
                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                  </path>
                  <path
                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                  </path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                  dashboard</p>
              </button>
            </a>
          </li>
          <li>

            <button id="open-modal" onclick="ajouteCards()"
              class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                class="w-5 h-5 text-inherit">
                <path fill-rule="evenodd"
                  d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                Ajoute</p>
            </button>

          </li>
          <li>
            <a class="" href="utilisateur.php">
              <button id="users_dash" onclick="users_dash()"
                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                  class="w-5 h-5 text-inherit">
                  <path fill-rule="evenodd"
                    d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                    clip-rule="evenodd"></path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize"
                  id="users_dash">Utilisateur & Enseignant</p>
              </button>
            </a>
          </li>
          <li>
            <a class="" href="#">
              <button
                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                  class="w-5 h-5 text-inherit">
                  <path fill-rule="evenodd"
                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                    clip-rule="evenodd"></path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                  notifactions</p>
              </button>
            </a>
          </li>
          <li>
            <a class="" href="cour.php">
              <button
                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                  class="w-5 h-5 text-inherit">
                  <path fill-rule="evenodd"
                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                    clip-rule="evenodd"></path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                  all Cours </p>
              </button>
            </a>
          </li>
          <li>
            <a class="" href="../dashorad/afficheCategory.php">
              <button
                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                  class="w-5 h-5 text-inherit">
                  <path fill-rule="evenodd"
                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                    clip-rule="evenodd"></path>
                </svg>
                <p onclick="removehidden()"
                  class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                  all Category</p>
              </button>
            </a>
          </li>
          <li>
            <a class="" href="../dashorad/afficheTags.php">
              <button
                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                  class="w-5 h-5 text-inherit">
                  <path fill-rule="evenodd"
                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                    clip-rule="evenodd"></path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                  table tags </p>
              </button>
            </a>
          </li>

        </ul>
        <ul class="mb-4 flex flex-col gap-1">
          <a href="../my-account/login.php?logout"
            class="flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-bold rounded-lg shadow-md hover:bg-blue-700 transition duration-200">
            <i class="fas fa-sign-out-alt mr-2"></i> Log Out
          </a>



        </ul>
      </div>
    </aside>
    <div class="max-w-7xl mx-auto p-6 ml-[340px]  ">
      <!-- Header Section -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Tableau de bord</h1>
        <p class="text-gray-600 mt-2">Vue d'ensemble des performances et statistiques</p>
      </div>

      <!-- Key Metrics Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Utilisateurs Actifs -->
        <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl p-6 text-white shadow-lg">
          <div class="flex justify-between items-start">
            <div>
              <p class="text-xs font-medium opacity-80">Utilisateurs Actifs</p>
              <p class="text-2xl font-bold mt-2"><?= $users->totalActive() ?></p>
            </div>
            <div class="bg-white/20 rounded-lg p-2">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
          </div>
          <div class="mt-4 flex items-center text-sm">
            <span class="flex items-center text-green-300">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
              </svg>
              +12.5%
            </span>
            <span class="ml-2 opacity-60">vs dernier mois</span>
          </div>
        </div>

        <!-- Projets Actifs -->
        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl p-6 text-white shadow-lg">
          <div class="flex justify-between items-start">
            <div>
              <p class="text-xs font-medium opacity-80">Cours Actifs</p>
              <p class="text-2xl font-bold mt-2"><?= $users->CoursActive() ?></p>
            </div>
            <div class="bg-white/20 rounded-lg p-2">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
              </svg>
            </div>
          </div>
          <div class="mt-4 flex items-center text-sm">
            <span class="flex items-center text-green-300">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
              </svg>
              +8.2%
            </span>
            <span class="ml-2 opacity-60">vs dernier mois</span>
          </div>
        </div>

        <!-- Taux de Réussite -->
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-6 text-white shadow-lg">
          <div class="flex justify-between items-start">
            <div>
              <p class="text-xs font-medium opacity-80">Pourcentage cours</p>
              <p class="text-2xl font-bold mt-2"><?= $users->pourcentage_Cours_Users() ?>%</p>
            </div>
            <div class="bg-white/20 rounded-lg p-2">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </div>
          <div class="mt-4 flex items-center text-sm">
            <span class="flex items-center text-green-300">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
              </svg>
              +2.4%
            </span>
            <span class="ml-2 opacity-60">vs dernier mois</span>
          </div>
        </div>

        <!-- Performance -->
        <div class="bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl p-6 text-white shadow-lg">
          <div class="flex justify-between items-start">
            <div>
              <p class="text-xs font-medium opacity-80">Performance</p>
              <p class="text-2xl font-bold mt-2">96.8%</p>
            </div>
            <div class="bg-white/20 rounded-lg p-2">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
          </div>
          <div class="mt-4 flex items-center text-sm">
            <span class="flex items-center text-green-300">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
              </svg>
              +1.8%
            </span>
            <span class="ml-2 opacity-60">vs dernier mois</span>
          </div>
        </div>
      </div>

      <!-- Main Content Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Progress Section -->
        <div class="bg-white rounded-xl shadow-lg p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-6">Progression des Cours</h2>
          <div class="space-y-6">
            <!-- Project 1 -->
            <?php foreach ($cours as $cour): ?>
              <div>
                <div class="flex justify-between items-center mb-2">
                  <span class="text-sm font-medium text-gray-700"><?= $cour['titre'] ?></span>
                  <span class="text-sm font-semibold text-indigo-600"><?= $cour['pourcentage_inscriptions'] ?>%</span>
                </div>
                <div class="h-2 bg-gray-200 rounded-full">
                  <div class="h-2 bg-indigo-500 rounded-full" style="width: <?= $cour['pourcentage_inscriptions'] ?>%">
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>

        <!-- Statistics Grid -->
        <div class="grid grid-cols-2 gap-6">
          <!-- Monthly Stats -->
          <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Statistiques Mensuelles</h3>
            <div class="space-y-4">
              <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Nouveaux Utilisateurs</span>
                <span class="text-sm font-semibold text-gray-900">+2,839</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Projets Complétés</span>
                <span class="text-sm font-semibold text-gray-900">483</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Taux de Satisfaction</span>
                <span class="text-sm font-semibold text-gray-900">98%</span>
              </div>
            </div>
          </div>

          <!-- Performance Overview -->
          <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Performance</h3>
            <div class="space-y-4">
              <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Temps de Réponse</span>
                <span class="text-sm font-semibold text-green-600">0.8s</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Disponibilité</span>
                <span class="text-sm font-semibold text-green-600">99.9%</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">Erreurs</span>
                <span class="text-sm font-semibold text-red-600">0.02%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>