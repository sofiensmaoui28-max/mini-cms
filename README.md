## État actuel (tag lab-08)

- `GET /api/categories` et `GET /api/categories/{category}`, avec le nombre d'articles publiés de chaque catégorie.
- `GET /api/posts?category=<slug>&tag=<slug>` : filtres par catégorie et par tag, comparaison exacte, slug inconnu refusé (422).
- `POST /api/login` renvoie un jeton Sanctum ; `POST /api/logout` le révoque.
- `POST`, `PUT/PATCH` et `DELETE /api/posts` protégés par `auth:sanctum`, avec les mêmes Form Requests et la même `PostPolicy` que le site (401, 403 et 422 en JSON).
- Tests Pest `ApiReadTest` et `ApiWriteTest`.| GET | `/api/categories` | `api.categories.index` | `Api\CategoryController@index` |
| GET | `/api/categories/{category}` | `api.categories.show` | `Api\CategoryController@show` |
| POST | `/api/login` | `api.login` | `Api\AuthController@login` |
| POST | `/api/logout` | `api.logout` | `Api\AuthController@logout` |
| POST | `/api/posts` | `api.posts.store` | `Api\PostController@store` |
| PUT/PATCH | `/api/posts/{post}` | `api.posts.update` | `Api\PostController@update` |
| DELETE | `/api/posts/{post}` | `api.posts.destroy` | `Api\PostController@destroy` |### Session 14

![Postman : POST /api/posts avec un jeton Bearer, onglet Body, réponse 201 Created](screenshots/s14-postman-201.png)

![Postman : PUT sur l'article d'un autre auteur, réponse 403](screenshots/s14-postman-403.png)