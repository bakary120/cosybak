# cosybak

## Instructions

#### Etape 1 - Layout

- analyser les zones qui se répètent d'une page à l'autre
- commencer l'intégration HTML/CSS/layout/view/inc

#### Etape 2 - Templates / Views

- une fois le "layout" mis en place, on va le mettre en place dans notre projet _cosybak_
- ensuite placer dans le répertoire `public/assets/` les fichiers CSS, images et JavaScript

#### Etape 3 - Home

- faire l'intégration HTML/CSS de la page d'accueil, page category, page panier directement dans le projet
- anime un peu interface, la présentation de nos produits
- ajouter un carousel à la page d'accueil

### PHP

#### Description

C'est une boutique en ligne de thé.

#### MVP

Pour l'instant, nous souhaitons créer un MVP (minimum viable product) de la boutique.  
Ce MVP contiendra :

- une page d'accueil
- une page des produits pour chaque catégorie
- une page produit
- une page panier
- une interface d'administration :
  - login sécurisé
  - gestion des catégories (ajout, modification, suppression)
  - gestion des produits (ajout, modification, suppression)
  - gestion des commandes (liste + changement du statut payé-envoyé-annulé-retourné)
  - gestion des utilisateurs de l'interface d'administration

Les produits pourront être ajoutés au panier depuis la liste de produits de la page "catégorie" et depuis la page du produit.  
Un produit est attaché à une seule catégorie.

En bas de chaque page, il y aura :

- le nom de la boutique
- les liens vers les pages de la boutique sur les réseaux sociaux
- plusieur types de produits

Sur la page d'accueil, plusieur catégories seront mises en avant.

En bas de page d'accueil, nous souhaitons mettre en avant que la livraison et les retours sont gratuits, que les clients ont 30 jours pour renvoyer leur produit, que les internautes peuvent nous contacter au numéro du service client : 01 02 03 04 05 de 8h à 19h, du lundi au vendredi.

#### V2

Une fois le test terminé, nous souhaitons mettre en place :

- un tunnel de vente :
  - adresse de facturation
  - adresse de livraison
  - choix de la méthode livraison
  - méthode de paiement
  - paiement
  - confirmation de commande
  - annulation de commande

En bas de chaque page, il y aura en plus un formulaire d'inscription à la newsletter.
