## État actuel (tag lab-05)

- Validation des articles dans `StorePostRequest` et `UpdatePostRequest` (`$request->validated()`) : plus aucune règle dans le contrôleur.
- Messages flash après création, modification, suppression et publication, affichés par le layout avec `x-alert`.
- Middleware `EnsureSiteIsWritable` (alias `writable`) : avec `SITE_READ_ONLY=true` dans `.env`, les requêtes d'écriture reçoivent une erreur 503.
- Page « Article introuvable » (404) pour un article inexistant, rendue depuis `withExceptions` dans `bootstrap/app.php` ; les autres 404 gardent la page standard.
- Tests Pest : `PostPagesTest`, `PostWriteTest`, `PostRelationsTest`, `PostTaxonomyTest` et `PostFeedbackTest`.### Session 09

![Page d'un article avec le message flash « Article créé. »](screenshots/s09-message-flash.png)

![Page Article introuvable pour un identifiant inexistant](screenshots/s09-article-introuvable.png)