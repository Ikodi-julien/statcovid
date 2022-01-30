# Quelques statistiques liées au COVID en France

Affiche les dernières données pour la France et par département :

- Aujourd'hui : patients hospitalisés, en réa, taux d'occupation des lits en réa,
- Cumul des décès et guérisons,
- Graphique de l'évolution des hospitalisations pour la France et par département.

## App visible à :

https://statcovid.ikodi.eu

## API Source

Repo github: https://github.com/florianzemma/CoronavirusAPI-France  
URL_API: https://coronavirusapifr.herokuapp.com/data/live/france

## Stack technique

- Image docker Symfony 5,
- Chart.js pour la création des graphiques,
- Déploiement AWS EC2.

## Installation

Avoir docker et docker-compose installé.

```bash
git clone
cd app/
npm i && npm run build
cd ..
docker pull ikodi/statcovid
docker-compose -f docker-compose.yml up -d
```
