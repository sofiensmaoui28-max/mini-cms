<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Heure</title>
</head>
<body>
    <p>Heure : {{ now()->format('H:i') }}</p>
    <p>Date : {{ now()->format('d/m/Y') }}</p>
</body>
</html>