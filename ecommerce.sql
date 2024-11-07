CREATE TABLE CLIENT(
   Id_Client INT AUTO_INCREMENT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   addresse VARCHAR(50),
   telephone VARCHAR(50),
   PRIMARY KEY(Id_Client)
);   

CREATE TABLE FOURNISSEUR(
   Id_Fournisseur INT AUTO_INCREMENT,
   nom VARCHAR(50),
   adresse VARCHAR(50),
   telephone VARCHAR(50),
   PRIMARY KEY(Id_Fournisseur)
);   

CREATE TABLE CATEGORIE(
   Id_categorie INT AUTO_INCREMENT,
   nom VARCHAR(50),
   PRIMARY KEY(Id_categorie)
);   

CREATE TABLE COMMANDE(
   Id_order INT AUTO_INCREMENT,
   date_vente DATETIME,
   quantite INT,
   prix_vente DECIMAL,
   Id_Client INT NOT NULL,
   PRIMARY KEY(Id_order),
   FOREIGN KEY(Id_Client) REFERENCES CLIENT(Id_Client)
);   

CREATE TABLE PRODUIT(
   Id_produit INT AUTO_INCREMENT,
   nom VARCHAR(50),
   date_fab DATE,
   date_exp DATE,
   prix DECIMAL,
   quantite INT,
   Id_categorie INT NOT NULL,
   PRIMARY KEY(Id_produit),
   FOREIGN KEY(Id_categorie) REFERENCES CATEGORIE(Id_categorie)
);   

CREATE TABLE FOURNIR(
   Id_Fournisseur INT,
   Id_produit INT,
   PRIMARY KEY(Id_Fournisseur, Id_produit),
   FOREIGN KEY(Id_Fournisseur) REFERENCES FOURNISSEUR(Id_Fournisseur),
   FOREIGN KEY(Id_produit) REFERENCES PRODUIT(Id_produit)
);   

CREATE TABLE INCLURE(
   Id_produit INT,
   Id_order INT,
   PRIMARY KEY(Id_produit, Id_order),
   FOREIGN KEY(Id_produit) REFERENCES PRODUIT(Id_produit),
   FOREIGN KEY(Id_order) REFERENCES COMMANDE(Id_order)
);