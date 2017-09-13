## Changement

Suite au lancement de la partie programmation et notamment à l'enregistrement des données. Pour un gain de temps j'ai réaliser qu'une restructuration du schéma de la base de donnée était nécessaire car elle impliqué de nombreux changement dans les "Controllers" créer par CRUDBooster pour ajouter les liaisons initiallement prévues.

Suppression des bases de liaisons suivantes:

* Cat_Annonce
* Type_Annonce
* User_Annonce

Ajout des critères "Jardin" et "Surface" à la table Annonce.

Modification de la table Message.
* fk_Annonce->Titre