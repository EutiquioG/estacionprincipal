<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estación Meteorológica</title>
  <style>
    :root {
      --bg-color: #0f2027;
      --bg-gradient: linear-gradient(to right, #2c5364, #203a43, #0f2027);
      --primary: #00c6ff;
      --accent: #0072ff;
      --text-light: #f4f4f4;
      --card-bg: rgba(255, 255, 255, 0.05);
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: var(--bg-gradient);
      color: var(--text-light);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }

    .container {
      max-width: 500px;
      padding: 2rem;
      background: var(--card-bg);
      border-radius: 15px;
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
      color: var(--primary);
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }

    .badge {
      display: inline-block;
      padding: 0.5rem 1rem;
      border-radius: 50px;
      background-color: var(--accent);
      font-weight: bold;
      font-size: 0.9rem;
      color: white;
    }

    footer {
      margin-top: 2rem;
      font-size: 0.8rem;
      opacity: 0.6;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>🌤️ Estación Meteorológica</h1>
    <p>Tu sistema de monitoreo ambiental está activo y funcionando.</p>
    <div class="badge">ESP32 conectado ✅</div>

    <footer>
      <p>&copy; <?php echo date("Y"); ?> - Proyecto IoT con ESP32 y PHP</p>
    </footer>
  </div>
</body>
</html>
