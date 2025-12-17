CREATE DATABASE delivery;

CREATE TABLE delivery_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50),
    pwd VARCHAR(100)
);

CREATE TABLE delivery_vehicule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    immatriculation VARCHAR(50),
    modele VARCHAR(50)
);

CREATE TABLE delivery_chauffeur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    salaire_par_livraison DECIMAL(10,2)
);

CREATE TABLE delivery_zone (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE delivery_livraison (
    id INT AUTO_INCREMENT PRIMARY KEY,
    colis_id INT,
    chauffeur_id INT,
    vehicule_id INT,
    zone_id INT,
    date_livraison DATE,
    statut ENUM('en_attente','livre','annule'),
    cout_revient DECIMAL(10,2),
    chiffre_affaire DECIMAL(10,2),

    FOREIGN KEY (colis_id) REFERENCES delivery_colis(id),
    FOREIGN KEY (chauffeur_id) REFERENCES delivery_chauffeur(id),
    FOREIGN KEY (vehicule_id) REFERENCES delivery_vehicule(id),
    FOREIGN KEY (zone_id) REFERENCES delivery_zone(id)
);

CREATE TABLE delivery_parametre (
    id INT AUTO_INCREMENT PRIMARY KEY,
    montant_par_kg DECIMAL(10,2)
);
