<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>En Construcción</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
            
        }

        .shadow-lg {
            filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.3));
        }


        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            background-color: #fff;
        }

        .icon svg {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .btn-custom {
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(21, 77, 26, 0.5);
        }

        .rotate {
            animation: spin 3s linear infinite;
        }


@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="text-center my-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#1a0352ff" class="bi bi-cone-striped shadow-lg" viewBox="0 0 16 16">
            <path d="M9.828.122a.5.5 0 0 0-.656.263L5.5 9H2.5a.5.5 0 0 0-.485.621l1.5 6A.5.5 0 0 0 4 16h8a.5.5 0 0 0 .485-.379l1.5-6A.5.5 0 0 0 13.5 9h-3L9.828.122zM6.14 9l2.36-7.09L10.86 9H6.14z"/>
        </svg>
        <h1 class="mt-3 fw-bold text-warning">🚧 Sitio en Construcción</h1>
        <p class="text-muted">Estamos trabajando para traerte algo increíble. ¡Vuelve pronto!</p>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

