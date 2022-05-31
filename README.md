# 5euros - Test technique

## L’application

Le but de ce test est de créer une version très simplifiée d'un site e-commerce à partir d’une base déjà existante.

### Fonctionnalités

- [ ] Ajouter un compte admin dans les fixtures
- [ ] Créer un formulaire permettant aux utilisateurs de pouvoir créer leur propre produit (Titre, description et prix).
- [ ] Créer une page permettant à un admin de pouvoir valider un produit
- [ ] Lister les produits par date de création
- [ ] Permettre à un admin de pouvoir mettre un produit en tête d'affiche (encart headline) sur la page d'accueil
- [ ] Pouvoir ajouter les produits dans un panier (pas de quantité, un produit ne peut apparaître qu'une seule fois)
- [ ] Créer la page récapitulative du panier chaque ligne de produit et le total
- [ ] Bonus : Mettre à jour la topbar avec le total du panier et le nombre de produit
- [ ] Bonus : Pouvoir vider le panier

### Détail du projet

- PHP 7.4
- Symfony 5.4
- Serveur web PHP
- Base de donnée au choix (Sqlite est configuré par défaut)
- Gestionnaire de version : GIT

## Points importants

- Propreté du code et des standards (au besoin un outil pourra être utilisé)
- Mise en place de tests unitaires et focntionnels
- Création du modèle de donnée pour la gestion du panier
- Message de commit

## Déroulement du test

Vous devrez clôner le dépôt `git clone https://github.com/5euros/test-technique`. Une fois le travail terminé il vous faudra créer un dépôt privé et y ajouter la personne en charge du recrutement. 