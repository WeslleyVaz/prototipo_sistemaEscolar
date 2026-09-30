<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar - SESI</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-family: Arial, sans-serif;
        }

        /* Cabeçalho */
        .cabecalho {
            height: 235px;
            border-bottom: 8px solid #ed1c24;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        /* Logo */
        .logo {
            margin-top: 85px;
            width: 220px;
            height: 70px;
            background-color: #ed1c24;
            color: white;
            font-size: 65px;
            font-weight: bold;
            font-style: italic;
            letter-spacing: -3px;
            text-align: center;
            line-height: 70px;
        }

        /* Conteúdo */
        .conteudo {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 100px;
            gap: 120px;
        }

        /* Botões */
        .botao-sesi {
            width: 250px;
            height: 60px;
            background-color: #ed0012;
            border: none;
            border-radius: 50px;
            color: white;
            font-size: 13px;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
            transition: 0.2s;
        }

        .botao-sesi:hover {
            background-color: #c90010;
            color: white;
        }
    </style>
</head>

<body>

  
    <header class="cabecalho">
        <div img src="sesi-logo-png_seeklogo-223485.png" alt="Logo SESI">
            SESI
        </div>
    </header>

    <main class="container-fluid conteudo">

        <button class="btn botao-sesi">
            Inspetoras
        </button>

        <button class="btn botao-sesi">
            Gestão
        </button>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>