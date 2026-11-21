## État actuel (tag lab-07)

- API JSON en lecture seule, installée avec `php artisan install:api` (Sanctum installé ; les jetons arrivent en session 14).
- `GET /api/posts` : articles publiés, paginés (`?per_page=` de 1 à 50, 5 par défaut), avec auteur et catégorie.
- `GET /api/posts/{post}` : un article publié ; un brouillon renvoie 403 et un numéro inconnu 404, en JSON.
- Réponses mises en forme par `PostResource` et `CategoryResource` : ni e-mail ni rôle des auteurs, dates ISO 8601.
- Testée avec Postman et `curl.exe -H "Accept: application/json"`.| GET | `/api/posts` | `api.posts.index` | `Api\PostController@index` |
| GET | `/api/posts/{post}` | `api.posts.show` | `Api\PostController@show` |### Session 13

![Postman : réponse JSON de GET /api/posts?per_page=2, avec data, links et meta](screenshots/s13-postman-liste.png)

![Postman : réponse 422 de GET /api/posts?per_page=500, avec le message en français](screenshots/s13-postman-422.png)