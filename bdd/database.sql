-- Table de base pour héro
CREATE TABLE Hero (
    hero_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    identite_secrete VARCHAR(255) NOT NULL,
    sexe ENUM('Masculin', 'Féminin') NOT NULL,
    couleur_cheveux VARCHAR(50),
    planete_origine VARCHAR(255),
    descriptio TEXT,
    UNIQUE KEY (nom, identite_secrete)
);

CREATE TABLE Superpouvoir (
    pouvoir_id INT PRIMARY KEY AUTO_INCREMENT,
    pouvoir_nom VARCHAR(255) NOT NULL
);

CREATE TABLE Ville (
    ville_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL
);

CREATE TABLE Gadget (
    gadget_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL
);

CREATE TABLE Coequipier (
    coequipier_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL
);

CREATE TABLE Vehicule (
    vehicule_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL
);

CREATE TABLE Groupe (
    groupe_id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL
);

CREATE TABLE HeroRelation (
    hero_id INT,
    pouvoir_id INT,
    ville_id INT,
    gadget_id INT,
    coequipier_id INT,
    vehicule_id INT,
    groupe_id INT,
    PRIMARY KEY (hero_id),
    FOREIGN KEY (hero_id) REFERENCES Hero(hero_id),
    FOREIGN KEY (pouvoir_id) REFERENCES Superpouvoir(pouvoir_id),
    FOREIGN KEY (ville_id) REFERENCES Ville(ville_id),
    FOREIGN KEY (gadget_id) REFERENCES Gadget(gadget_id),
    FOREIGN KEY (coequipier_id) REFERENCES Coequipier(coequipier_id),
    FOREIGN KEY (vehicule_id) REFERENCES Vehicule(vehicule_id),
    FOREIGN KEY (groupe_id) REFERENCES Groupe(groupe_id)
);
