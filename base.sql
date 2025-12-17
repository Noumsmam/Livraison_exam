CREATE DATABASE livraison;
USE livraison;

CREATE TABLE livraison_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    logins VARCHAR(50),
    pwd VARCHAR(100)
);

CREATE TABLE livraison_entrepot (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    adresse VARCHAR(255)
);

CREATE TABLE livraison_chauffeur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    salaire_par_livraison DECIMAL(10,2)
);

CREATE TABLE livraison_vehicule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    immatriculation VARCHAR(50),
    type VARCHAR(50),
    cout_revient DECIMAL(10,2)
);

CREATE TABLE livraison_status (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(50)
);

CREATE TABLE livraison_colis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    poids_kg DECIMAL(10,2),
    valeur_par_kg DECIMAL(10,2)
);

CREATE TABLE livraison_livraison (
    id INT AUTO_INCREMENT PRIMARY KEY,
    colis_id INT,
    chauffeur_id INT,
    vehicule_id INT,
    entrepot_id INT,
    adresse_destination VARCHAR(255),
    status_id INT,
    date_livraison DATE,
    cout_revient DECIMAL(10,2),
    chiffre_affaire DECIMAL(10,2),
    FOREIGN KEY (colis_id) REFERENCES livraison_colis(id),
    FOREIGN KEY (chauffeur_id) REFERENCES livraison_chauffeur(id),
    FOREIGN KEY (vehicule_id) REFERENCES livraison_vehicule(id),
    FOREIGN KEY (entrepot_id) REFERENCES livraison_entrepot(id),
    FOREIGN KEY (status_id) REFERENCES livraison_status(id)
);

INSERT INTO livraison_user(logins,pwd) VALUES ('admin','1234');