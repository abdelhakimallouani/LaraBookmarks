# Odin - Plateforme de gestion de ressources

Odin est une plateforme web de gestion de ressources développée avec **Laravel** et **MySQL**, permettant aux utilisateurs de gérer des liens, catégories et tags. Le projet a pour objectif de valider la maîtrise de l'authentification, de l'architecture MVC, des relations Eloquent et des middlewares pour sécuriser l'accès.

---

## 📝 Contexte du projet

Le projet a pour but de créer une plateforme sécurisée pour gérer des liens et ressources en ligne, organisée par catégories et tags. Il inclut :

- Authentification des utilisateurs
- Gestion des comptes avec statut actif/inactif
- Organisation des liens par catégories et tags
- Système de filtrage et recherche
- Relations **One-to-Many** et **Many-to-Many** via Eloquent ORM

---

## 💻 Technologies utilisées

- **Framework** : Laravel 12.x
- **Base de données** : MySQL (5 tables minimum : `users`, `categories`, `links`, `tags`, `link_tag`)
- **Front-end** : Blade (Layouts et composants)
- **Sécurité** : Middleware pour gestion des comptes et authentification
- **Relations Eloquent** :
  - Catégorie → Liens : One-to-Many
  - Liens ↔ Tags : Many-to-Many via table pivot `link_tag`

---

## 📌 User Stories

- **US-01 – Authentification**  
  Créer un compte, se connecter et se déconnecter pour accéder à un espace personnel sécurisé.

- **US-02 – Statut de compte (Middleware)**  
  Si un utilisateur est inactif (`is_active = false`), l'accès est bloqué avec le message :  
  `"Votre compte est désactivé. Veuillez contacter l'administrateur."`

- **US-03 – Gestion des Catégories**  
  Créer, modifier et supprimer des catégories pour organiser les liens (1:N).

- **US-04 – Gestion des Liens**  
  Ajouter des liens (Titre, URL) associés à une catégorie.

- **US-05 – Système de Tags**  
  Associer plusieurs tags à un lien et un tag à plusieurs liens (relation Many-to-Many via table pivot).

- **US-06 – Filtrage & Recherche**  
  Rechercher un lien par nom ou filtrer par catégorie/tag.

---

## 🎯 Bonus

- Vérification OTP : système d’envoi d’un code OTP par mail lors de l’inscription pour valider le compte.  
- Déploiement de l’application sur un serveur Linux.

---

## 📅 Planning (5 jours)

| Jour | Tâches |
|------|--------|
| J1   | UML (Cas d'utilisation + Classes), Auth, migration et création du Middleware `CheckAccountStatus`. |
| J2   | CRUD Catégories et Liens (Relations One-to-Many). |
| J3   | Système de Tags et Table Pivot (Relation Many-to-Many). |
| J4   | Interface de filtrage, recherche Eloquent et messages flash. |
| J5   | Bonus : OTP, déploiement Linux. |

---

## 🚀 Installation

1. Cloner le projet :  

git clone https://github.com/abdelhakimallouani/LaraBookmarks.git
cd odin

2. Installer les dépendances :

composer install
npm install
npm run dev

3. Configurer l’environnement :

cp .env.example .env
php artisan key:generate
Modifier .env pour configurer la base de données et le mailer.

4. Lancer les migrations :

php artisan migrate --seed

5. Lancer le serveur :

php artisan serve

🗂 Structure de la base de données
users : gestion des utilisateurs (auth, is_active)

categories : catégories de liens

links : liens avec titre, URL, catégorie

tags : tags disponibles

link_tag : table pivot Many-to-Many pour associer tags ↔ liens

🔗 Liens utiles
Documentation Laravel

Blade Templates

Eloquent ORM

Middlewares

📄 Auteur
Nom : Abdelhakim Allouani

Projet académique : Odin - Gestion de ressources


---

Si tu veux, je peux te faire **une version plus courte et moderne** pour GitHub avec badges (Laravel, PHP, License) et screenshots de l’interface, qui est plus “pro” pour un portfolio.  

Veux‑tu que je fasse ça ?