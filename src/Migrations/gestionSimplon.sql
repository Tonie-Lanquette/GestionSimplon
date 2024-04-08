#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: gestion_user
#------------------------------------------------------------

CREATE TABLE gestion_user(
        Id_user  Int  Auto_increment  NOT NULL ,
        Nom      Varchar (255) NOT NULL ,
        Prenom   Varchar (255) NOT NULL ,
        Password Varchar (255) NOT NULL ,
        Mail     Varchar (255) NOT NULL
	,CONSTRAINT gestion_user_AK UNIQUE (Mail)
	,CONSTRAINT gestion_user_PK PRIMARY KEY (Id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gestion_promo
#------------------------------------------------------------

CREATE TABLE gestion_promo(
        Id_promo Int  Auto_increment  NOT NULL ,
        Eleves   Int NOT NULL ,
        Nom      Varchar (255) NOT NULL ,
        Debut    Date NOT NULL ,
        Fin      Date NOT NULL
	,CONSTRAINT gestion_promo_PK PRIMARY KEY (Id_promo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gestion_cours
#------------------------------------------------------------

CREATE TABLE gestion_cours(
        Id_cours Int  Auto_increment  NOT NULL ,
        Nom      Varchar (255) NOT NULL ,
        Debut    Datetime NOT NULL ,
        Fin      Datetime NOT NULL ,
        Code     Int NOT NULL ,
        Id_promo Int
	,CONSTRAINT gestion_cours_PK PRIMARY KEY (Id_cours)

	,CONSTRAINT gestion_cours_gestion_promo_FK FOREIGN KEY (Id_promo) REFERENCES gestion_promo(Id_promo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gestion_role
#------------------------------------------------------------

CREATE TABLE gestion_role(
        Id_role Int  Auto_increment  NOT NULL ,
        Nom     Varchar (255) NOT NULL
	,CONSTRAINT gestion_role_PK PRIMARY KEY (Id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gestion_appartenir
#------------------------------------------------------------

CREATE TABLE gestion_appartenir(
        Id_promo Int NOT NULL ,
        Id_user  Int NOT NULL
	,CONSTRAINT gestion_appartenir_PK PRIMARY KEY (Id_promo,Id_user)

	,CONSTRAINT gestion_appartenir_gestion_promo_FK FOREIGN KEY (Id_promo) REFERENCES gestion_promo(Id_promo)
	,CONSTRAINT gestion_appartenir_gestion_user0_FK FOREIGN KEY (Id_user) REFERENCES gestion_user(Id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gestion_prendre
#------------------------------------------------------------

CREATE TABLE gestion_prendre(
        Id_user  Int NOT NULL ,
        Id_cours Int NOT NULL ,
        Absence  Bool NOT NULL ,
        Retard   Bool NOT NULL
	,CONSTRAINT gestion_prendre_PK PRIMARY KEY (Id_user,Id_cours)

	,CONSTRAINT gestion_prendre_gestion_user_FK FOREIGN KEY (Id_user) REFERENCES gestion_user(Id_user)
	,CONSTRAINT gestion_prendre_gestion_cours0_FK FOREIGN KEY (Id_cours) REFERENCES gestion_cours(Id_cours)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gestion_classer
#------------------------------------------------------------

CREATE TABLE gestion_classer(
        Id_user Int NOT NULL ,
        Id_role Int NOT NULL
	,CONSTRAINT gestion_classer_PK PRIMARY KEY (Id_user,Id_role)

	,CONSTRAINT gestion_classer_gestion_user_FK FOREIGN KEY (Id_user) REFERENCES gestion_user(Id_user)
	,CONSTRAINT gestion_classer_gestion_role0_FK FOREIGN KEY (Id_role) REFERENCES gestion_role(Id_role)
)ENGINE=InnoDB;

