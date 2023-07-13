-- Insertion des informations des personnes dans la table Utilisateur

-- Insérer les informations des hommes
INSERT INTO Utilisateur (ID_utilisateur, Nom, Prenom, Pseudo, Genre, Email, Téléphone, Photo, Centre_interet, Pays_visite, Pays_a_visiter, ID_destination)
VALUES
    ('1', 'Dupont', 'Alexandre', 'Alex91', 'Masculin', 'alexandre.dupont@example.com', '+33 6 12 34 56 78', 'photo1.jpg', 'Photographie, voyages, sports', 'France, Espagne, Italie', 'Japon', '1'),
    ('3', 'Silva', 'Tiago', 'TiagoSilva', 'Masculin', 'tiago.silva@example.com', '+351 912 345 678', 'photo3.jpg', 'Football, musique, films', 'Portugal, France, Brésil', 'Japon', '3'),
    ('5', 'Rossi', 'Marco', 'MarcoR', 'Masculin', 'marco.rossi@example.com', '+39 345 678 9012', 'photo5.jpg', 'Cuisine, musique, randonnée', 'Italie, Espagne, Grèce', 'États-Unis', '5'),
    ('7', 'García', 'Luis', 'LuisG', 'Masculin', 'luis.garcia@example.com', '+34 612 345 678', 'photo7.jpg', 'Football, musique, cinéma', 'Espagne, France, Allemagne', 'Australie', '7'),
    ('9', 'Schmidt', 'Klaus', 'KlausS', 'Masculin', 'klaus.schmidt@example.com', '+49 9876 543210', 'photo9.jpg', 'Technologie, jeux vidéo, photographie', 'Allemagne, Autriche, Pays-Bas', 'Nouvelle-Zélande', '9');

-- Insérer les informations des femmes
INSERT INTO Utilisateur (ID_utilisateur, Nom, Prenom, Pseudo, Genre, Email, Téléphone, Photo, Centre_interet, Pays_visite, Pays_a_visiter, ID_destination)
VALUES
    ('2', 'Leroy', 'Sophie', 'SoLeroy', 'Féminin', 'sophie.leroy@example.com', '+33 6 98 76 54 32', 'photo2.jpg', 'Lecture, danse, cuisine', 'Royaume-Uni, Allemagne, États-Unis', 'Australie', '2'),
    ('4', 'Müller', 'Anna', 'AnnaMüller', 'Féminin', 'anna.muller@example.com', '+49 1234 567890', 'photo4.jpg', 'Art, randonnée, histoire', 'Allemagne, Autriche, Suisse', 'Nouvelle-Zélande', '4'),
    ('6', 'Leblanc', 'Camille', 'CamiLeb', 'Féminin', 'camille.leblanc@example.com', '+33 6 54 32 10 98', 'photo6.jpg', 'Théâtre, voyages, photographie', 'France, Royaume-Uni,
