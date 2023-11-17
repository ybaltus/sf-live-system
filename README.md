# SF-LIVE-SYSTEM

POC pour utiliser les twig et lives components (En version expérimental actuellement)

## Stack Technique
* Symfony 6.3
* [Twig Components](https://symfony.com/bundles/ux-twig-component/current/index.html)
* [Live Components](https://symfony.com/bundles/ux-live-component/current/index.html)


## Initialisation

```
1. composer install
2. npm install --force
3. npm run build
3. docker-compose up -d (la bdd est dans un container docker)
5. symfony console doctrine:migrations:migrate
6. symfony console doctrine:fixtures:load
7. symfony serve -d
```