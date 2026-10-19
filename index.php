<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunu Santé</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0ea5e9, #10b981);
            color: #1e293b;
        }
        .card {
            background: white;
            padding: 3rem 4rem;
            border-radius: 1rem;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,.25);
            text-align: center;
            max-width: 480px;
        }
        .logo { font-size: 3rem; margin-bottom: 1rem; }
        h1 { font-size: 2rem; margin-bottom: .5rem; }
        .tagline { color: #64748b; margin-bottom: 1.5rem; }
        .status {
            display: inline-block;
            background: #ecfdf5;
            color: #059669;
            padding: .5rem 1.25rem;
            border-radius: 9999px;
            font-weight: 600;
            font-size: .9rem;
        }
        footer { margin-top: 1.5rem; font-size: .8rem; color: #94a3b8; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">&#127973;</div>
        <h1>Sunu Sant&eacute;</h1>
        <p class="tagline">Votre application de santé est en ligne.</p>
        <span class="status">&#9989; D&eacute;ploiement r&eacute;ussi</span>
        <footer>Hébergé sur 000webhost &middot; Déploiement automatique via GitHub</footer>
    </div>
</body>
</html>
