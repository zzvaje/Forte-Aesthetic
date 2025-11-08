<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Azul Fuerte - Mantenimiento</title>
    <!-- Favicon estándar -->
    <link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="../assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../assets/favicon/favicon-16x16.png" sizes="16x16">
    <!-- Apple Touch Icon para iOS -->
    <link rel="apple-touch-icon" href="assets/favicon/apple-touch-icon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
            margin: 0;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .card {
            max-width: 480px;
            width: 100%;
            padding: 3rem 2.5rem;
            border-radius: 1.25rem;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease forwards;
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 0.5rem;
        }

        h5 {
            color: #ffc107;
            font-weight: 600;
            font-size: 1.5rem;
            margin-bottom: 1.2rem;
        }

        p.description {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            line-height: 1.5;
        }

        .btn-home {
            margin-bottom: 2.5rem;
            transition: all 0.3s ease-in-out;
            font-weight: 600;
        }

        .btn-home:hover {
            transform: scale(1.05);
        }

        #ultima-verificacion {
            color: #6c757d;
            font-size: 0.9rem;
            font-style: italic;
            margin-top: 0;
        }

        /* Spinner CSS */
        .spinner {
            margin: 0 auto 2rem auto;
            width: 64px;
            height: 64px;
            border: 6px solid #e3f2fd;
            border-top: 6px solid #0d6efd;
            border-radius: 50%;
            animation: spin 1.2s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 2rem !important;
                /* Más pequeño en móvil */
            }
        }
    </style>
</head>

<body>
    <div class="card shadow">
        <div class="spinner" role="status" aria-label="Cargando"></div>
        <h1>Sitio en mantenimiento</h1>
        <h5>¡Estamos trabajando para ti!</h5>
        <p class="description">
            Estamos mejorando tu experiencia.<br />
            Por favor, vuelve a intentarlo en unos minutos.
        </p>
        <a href="../index" class="btn btn-outline-primary btn-home">Volver al inicio</a>
        <p id="ultima-verificacion"></p>
    </div>

    <script>
        function formatoFechaHoraAMPM(fecha) {
            const dia = String(fecha.getDate()).padStart(2, '0');
            const mes = String(fecha.getMonth() + 1).padStart(2, '0');
            const anio = fecha.getFullYear();

            let hora = fecha.getHours();
            const minutos = String(fecha.getMinutes()).padStart(2, '0');
            const segundos = String(fecha.getSeconds()).padStart(2, '0');
            const ampm = hora >= 12 ? 'PM' : 'AM';

            hora = hora % 12;
            hora = hora ? hora : 12; // 0 se convierte en 12

            return `${dia}/${mes}/${anio} ${hora}:${minutos}:${segundos} ${ampm}`;
        }

        window.addEventListener('DOMContentLoaded', () => {
            const fechaActual = new Date();
            const texto = `Última verificación: ${formatoFechaHoraAMPM(fechaActual)}`;
            document.getElementById('ultima-verificacion').textContent = texto;
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>