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
    description TEXT,
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

-- Table entrepot
INSERT INTO livraison_entrepot(nom, adresse) VALUES
('Entrepot Central', '123 Rue Principale'),
('Entrepot Nord', '45 Avenue du Nord'),
('Entrepot Sud', '78 Boulevard du Sud');

-- Table chauffeur
INSERT INTO livraison_chauffeur(nom, prenom, salaire_par_livraison) VALUES
('Raso', 'Jean', 10.50),
('Rakoto', 'Marie', 12.00),
('Andrian', 'Paul', 9.75);

-- Table vehicule
INSERT INTO livraison_vehicule(immatriculation, type, cout_revient) VALUES
('123ABC', 'Camion', 50.00),
('456DEF', 'Fourgon', 30.00),
('789GHI', 'Moto', 15.00);

-- Table status
INSERT INTO livraison_status(status) VALUES
('en_attente'),
('livre'),
('annule');

-- Table colis
INSERT INTO livraison_colis(description, poids_kg, valeur_par_kg) VALUES
('Colis fragile', 2.5, 5.00),
('Colis lourd', 10.0, 3.50),
('Colis normal', 5.0, 4.00);

-- Table livraison
INSERT INTO livraison_livraison(colis_id, chauffeur_id, vehicule_id, entrepot_id, adresse_destination, status_id, date_livraison, cout_revient, chiffre_affaire) VALUES
(1, 1, 1, 1, '25 Rue de la Poste', 1, '2025-12-18', 50.00, 62.50),
(2, 2, 2, 2, '10 Avenue du Parc', 2, '2025-12-18', 30.00, 35.00),
(3, 3, 3, 3, '5 Boulevard des Fleurs', 1, '2025-12-19', 15.00, 20.00),
(1, 2, 2, 1, '50 Rue Victor Hugo', 2, '2025-12-19', 30.00, 35.00),
(2, 1, 1, 2, '12 Avenue des Champs', 3, '2025-12-20', 50.00, 30.00),
(3, 3, 3, 3, '8 Rue de la Gare', 1, '2025-12-20', 15.00, 20.00);
