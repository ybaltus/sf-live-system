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
3. docker-compose up -d
4. symfony console doctrine:database:create
5. symfony console doctrine:migrations:migrate
```