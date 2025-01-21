
-- Structure de la table `categorie`
CREATE TABLE `categorie` (
  `categorieID` int NOT NULL,
  `categorieNom` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;


-- Déchargement des données de la table `categorie`


INSERT INTO `categorie` (`categorieID`, `categorieNom`, `date`) VALUES
(45, 'Graphic Designg', '2025-01-16 12:14:46'),
(46, 'Digital Marketing', '2025-01-16 12:14:46'),
(47, 'Business Management', '2025-01-16 12:14:46'),
(48, 'Photography', '2025-01-16 12:14:46'),
(49, 'Cybersecurity', '2025-01-16 12:14:46'),
(50, 'UI/UX Design', '2025-01-16 12:14:46');


-- Structure de la table `cours`


CREATE TABLE `cours` (
  `coursID` int NOT NULL,
  `titre` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `enseignant_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `statu` enum('approved','rejected','still') NOT NULL DEFAULT 'still',
  `imageCours` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CoursUrl` varchar(255) DEFAULT NULL,
  `URLVido` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Structure de la table `cours_inscriptions`


CREATE TABLE `cours_inscriptions` (
  `id_inscri` int NOT NULL,
  `etudiant_id` int NOT NULL,
  `cours_id` int NOT NULL,
  `statu` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Structure de la table `cours_tags`


CREATE TABLE `cours_tags` (
  `id` int NOT NULL,
  `cours_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Structure de la table `tags`


CREATE TABLE `tags` (
  `idTag` int NOT NULL,
  `nomTag` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Structure de la table `utilisateur`


CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `role` enum('Etudiant','Enseignant','Administrateur') NOT NULL,
  `photoProfil` varchar(255) DEFAULT NULL,
  `dateInscription` datetime DEFAULT CURRENT_TIMESTAMP,
  `statut` enum('Actif','Suspendu') DEFAULT 'Actif',
  `Actions` int DEFAULT '1'
) ;


-- Déchargement des données de la table `utilisateur`


INSERT INTO `utilisateur` (`id`, `nom`, `email`, `motDePasse`, `role`, `photoProfil`, `dateInscription`, `statut`, `Actions`) VALUES
(135, 'kesijalisy', 'rukujady@mailinator.com', '$2y$10$rJLbif/iiIA2MQ8Bf/1Z5.Z4F7hOhfIh7yZgVwEJBZQJ2M0tAkk0a', 'Administrateur', '../../image/c1bc091824.jpg', '2025-01-18 02:10:16', 'Actif', 1),
(137, 'xesyzupy', 'zita@mailinator.com', '$2y$10$Cj1IM0.6m5NBOMFyjgKyhupLs5YIQbsB4gGQAKL8aBIB0PbdhsFfe', 'Etudiant', '../../image/38b617de2f.jpg', '2025-01-18 02:33:45', 'Actif', 1),
(138, 'tonukiluza', 'nysypap@mailinator.com', '$2y$10$meKuhuB.UVviw./NW1tzDuNP./.zAhEyAA7fCwEnZZuymfnRs5Gie', 'Etudiant', '../../image/9b60d302e2.jpg', '2025-01-18 02:57:43', 'Actif', 1),
(139, 'difuk', 'kmal@mailinator.com', '$2y$10$sFgoEPI1fjKwjt.DLsCjiej8.a8wPcXUL90RcN4q/vz4wGRRqvQke', 'Enseignant', '../../image/41509ee8be.jpg', '2025-01-18 02:58:39', 'Actif', 1),
(140, 'menubix', 'vihas@mailinator.com', '$2y$10$z3MgWQKlwgX5Wvy0nuH/l.JNBCPcNdnNOZHD3aHXrFJycRiIJHu.i', 'Etudiant', '../../image/fabb1a46c7.jpg', '2025-01-18 02:59:24', 'Actif', 1),
(141, 'wubiforyru', 'fejumygute@mailinator.com', '$2y$10$9nGSuGGJ3pS8XiMDT32uvuMgXIiurJobOT2dEvCdkKEPCMImZDGBm', 'Etudiant', '../../image/eac40d0e64.jpg', '2025-01-18 03:01:07', 'Actif', 1);
--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`categorieID`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`coursID`),
  ADD KEY `enseignant_id` (`enseignant_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `cours_inscriptions`
--
ALTER TABLE `cours_inscriptions`
  ADD PRIMARY KEY (`id_inscri`),
  ADD UNIQUE KEY `etudiant_id` (`etudiant_id`,`cours_id`),
  ADD KEY `cours_id` (`cours_id`);
--
-- Index pour la table `cours_tags`
--
ALTER TABLE `cours_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cours_tags_ibfk_1` (`cours_id`),
  ADD KEY `cours_tags_ibfk_2` (`tag_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`idTag`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `categorieID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `coursID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT pour la table `cours_inscriptions`
--
ALTER TABLE `cours_inscriptions`
  MODIFY `id_inscri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT pour la table `cours_tags`
--
ALTER TABLE `cours_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `idTag` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`enseignant_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categorie` (`categorieID`) ON DELETE SET NULL;

--
-- Contraintes pour la table `cours_inscriptions`
--
ALTER TABLE `cours_inscriptions`
  ADD CONSTRAINT `cours_inscriptions_ibfk_1` FOREIGN KEY (`etudiant_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cours_inscriptions_ibfk_2` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`coursID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cours_tags`
--
ALTER TABLE `cours_tags`
  ADD CONSTRAINT `cours_tags_ibfk_1` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`coursID`) ON DELETE CASCADE,
  ADD CONSTRAINT `cours_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`idTag`) ON DELETE CASCADE;
COMMIT;




