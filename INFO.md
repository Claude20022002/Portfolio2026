# 🚀 Portfolio Laravel — Claudia LUSAMOTE KIMFUTA

> README de référence complet pour la conception du portfolio personnel avec Laravel.
> Toutes les données sont extraites directement du CV.

---

## 👤 Identité

| Champ | Valeur |
|---|---|
| **Nom complet** | LUSAMOTE KIMFUTA Claudia |
| **Titre professionnel** | Développeuse Web & Technicienne Réseaux Junior |
| **Adresse** | Bd Ghandi, Casablanca, Maroc |
| **Email** | cl.lusamote@hestim.ma |
| **Téléphone** | +212 775-127-274 |
| **LinkedIn** | Claudia LUSAMOTE KIMFUTA |
| **GitHub** | Claude20022002 |
| **Année de naissance** | 2002 |

---

## 🧠 Profil / À propos

> *"Déterminée, sérieuse, autonome et consciente du travail qui m'attend, je suis persuadée que je serais un élément moteur au sein de votre structure !"*

**À utiliser dans la section "À propos" du portfolio.**

---

## 🎓 Formations

```
2025 - 2026   | 1ère année Cycle Ingénieur d'État        | HESTIM Casablanca
2023 - 2025   | Prépa Ingénierie Informatique             | HESTIM Casablanca
2021 - 2022   | Bac Scientifique (option Mathématiques)   | Lycée d'État — Gabon
```

---

## 💼 Expériences Professionnelles

### 1. Assistant Logistique & Support Informatique — AMBITION 28
- 📅 **Période :** Septembre 2025
- 📌 **Type :** Mission contractuelle rémunérée
- **Missions :**
  - Participation à l'organisation logistique de l'événement
  - Mise en place de solutions d'automatisation avec une équipe IT
  - Support technique et coordination opérationnelle
  - Interaction avec des représentants ministériels, diplomatiques et institutionnels

---

### 2. Stage en Robotique — HESTIM FabLab
- 📅 **Période :** Juillet 2025
- 📌 **Intitulé :** Déploiement d'un Système Robotique Collaboratif avec Vision IA
- **Missions :**
  - Mise en service de MyCobot280 pi et UltraArm P340
  - Recherche et réalisation de scénarios robotiques
  - Gestion de base de données

---

### 3. Téléprospecteur — MD CALLCENTER
- 📅 **Période :** Juin – Juillet 2024
- **Missions :**
  - Réaliser des campagnes d'appels ciblés pour promouvoir des services auprès des propriétaires de maisons en France
  - Gérer une base de données clients (mise à jour et suivi des informations)

---

### 4. Membre Actif — HIC Code Masters (HESTIM Clubs)
- 📅 **Période :** 2023 – 2025
- **Missions :**
  - Proposer et initier des projets collaboratifs pour approfondir les compétences en programmation
  - Découvrir de nouveaux langages informatiques
  - Assurer la promotion du club pour élargir la participation et renforcer l'engagement des membres

---

### 5. Aide Technicien — STI Company
- 📅 **Période :** Février – Août 2023
- **Missions :**
  - Aider les techniciens à entretenir les réacteurs, les ballons et les capacités durant les arrêts techniques
  - Effectuer des tâches spécifiques telles que le sablage, en collaboration avec une équipe

---

## 🛠️ Compétences Techniques

### Développement
| Catégorie | Technologies |
|---|---|
| **Langages** | Python, Java, PHP, JavaScript |
| **Front-end** | HTML, CSS, JavaScript |
| **Frameworks** | React JS, React Native, Laravel |
| **Back-end / Runtime** | Node.js, Express |

### Base de Données
| Type | Outils |
|---|---|
| **SQL** | MySQL, Oracle, Microsoft Access |
| **NoSQL** | MongoDB |

### Logiciels & Outils
| Catégorie | Outils |
|---|---|
| **IDE** | VS Code |
| **Réseau** | Cisco Packet Tracer |
| **API / Test** | Postman |
| **Rédaction** | Microsoft Word, LaTeX |
| **Industrie** | Automatisation |

---

## 📜 Certifications (2023 – 2026)
> Plateforme : Moocs — Coursera, Cisco (+14 certifications au total)

| # | Certification | Organisme |
|---|---|---|
| 1 | Notions de base sur les réseaux | Cisco |
| 2 | Analyse de données avec Python | IBM |
| 3 | React avancé | Meta |
| 4 | Fondamentaux du Project Management | Google |
| 5 | Fondements de la base de données Oracle | LearnQuest |
| 6 | Développement d'applications backend avec Node.js et Express | IBM |
| 7 | React Native | Meta |

> ⚠️ **Note :** 14+ certifications au total — à compléter avec les autres certifications non listées sur le CV.

---

## 🚀 Projets

| # | Projet | Description | Statut |
|---|---|---|---|
| 1 | **Site de bons plans** | Projet d'entrepreneuriat | 🔄 En cours |
| 2 | **Réseau LAN** | Conception et déploiement d'un réseau LAN | ✅ Terminé |
| 3 | **Application web de jardinage** | Projet scolaire | ✅ Terminé |
| 4 | **Application météo** | Avec l'API OpenWeather | ✅ Terminé |
| 5 | **Bibliothèque en ligne** | Avec Google Book API | ✅ Terminé |
| 6 | **HESTIM GAME** | Jeu de société — Projet scolaire | ✅ Terminé |
| 7 | **Portfolio** | Conçu avec React | ✅ Terminé |
| 8 | **Détection de mains** | Système de détection devant caméra avec Python | ✅ Terminé |
| 9 | **Gestion vente de voitures au Maroc** | PFA — Base de données avec Python | ✅ Terminé |

---

## 🌍 Langues

| Langue | Niveau |
|---|---|
| Français | Langue maternelle |
| Anglais | Niveau B1 |

---

## 🎯 Centres d'Intérêt

### 🏆 Sports
- Football
- Judo
- Basketball
- Pratique : Chaque week-end

### 📚 Lecture
- Documentation technique
- Romans

### ✈️ Voyages
- Congo Brazzaville
- Gabon
- Maroc

---

## 🗂️ Architecture suggérée du Portfolio Laravel

```
portfolio-laravel/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php         # Accueil + profil
│   │   ├── ProjectController.php      # Liste & détail des projets
│   │   ├── ExperienceController.php   # Expériences pro
│   │   ├── SkillController.php        # Compétences
│   │   └── ContactController.php      # Formulaire de contact
│   └── Models/
│       ├── Project.php
│       ├── Experience.php
│       ├── Skill.php
│       └── Certificate.php
├── resources/
│   ├── views/
│   │   ├── layouts/app.blade.php
│   │   ├── home.blade.php
│   │   ├── projects/index.blade.php
│   │   ├── projects/show.blade.php
│   │   ├── experiences.blade.php
│   │   ├── skills.blade.php
│   │   └── contact.blade.php
│   └── lang/
│       ├── fr/
│       └── en/
├── database/
│   └── seeders/
│       ├── ProjectSeeder.php
│       ├── ExperienceSeeder.php
│       └── SkillSeeder.php
└── public/
    ├── img/
    │   └── profile.jpg
    └── cv/
        └── Claudia_LUSAMOTE_CV.pdf
```

---

## 📄 Pages à créer

| Page | Contenu |
|---|---|
| `/` | Accueil — Nom, titre, profil, CTA |
| `/about` | À propos, langues, centres d'intérêt |
| `/projects` | Liste de tous les projets |
| `/projects/{id}` | Détail d'un projet |
| `/skills` | Compétences techniques et certifications |
| `/experience` | Parcours pro et formations |
| `/contact` | Formulaire + liens (email, GitHub, LinkedIn) |

---

## 🔗 Liens sociaux à intégrer

```php
// config/portfolio.php
return [
    'email'    => 'cl.lusamote@hestim.ma',
    'phone'    => '+212 775-127-274',
    'github'   => 'https://github.com/Claude20022002',
    'linkedin' => 'https://linkedin.com/in/claudia-lusamote-kimfuta',
    'location' => 'Bd Ghandi, Casablanca, Maroc',
];
```

---

## 💡 Fonctionnalités recommandées

- [ ] Mode sombre / clair
- [ ] Section projets filtrables par technologie
- [ ] Téléchargement du CV en PDF
- [ ] Formulaire de contact avec envoi d'email (Laravel Mail)
- [ ] Barre de progression des compétences
- [ ] Timeline pour les expériences et formations
- [ ] Badges pour les certifications
- [ ] Multilingue FR / EN (Laravel Localization)
- [ ] Animation d'entrée (AOS / GSAP)

---

## 🎨 Identité visuelle suggérée

> S'inspirer du CV (couleurs existantes)

| Élément | Valeur |
|---|---|
| **Couleur principale** | Bleu marine / Teal (`#1a3c5e` ou similaire) |
| **Couleur accentuation** | Orange / Doré (comme les titres du CV) |
| **Fond** | Blanc cassé ou gris clair |
| **Typographie** | Inter, Poppins ou Montserrat |

---

*README généré automatiquement à partir du CV de Claudia LUSAMOTE KIMFUTA.*
*Dernière mise à jour : Mars 2026*
