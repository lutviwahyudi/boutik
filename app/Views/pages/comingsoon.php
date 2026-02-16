<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coming Soon | Zahira Boutique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #f8f5f2, #e9e4dd);
        }

        .coming-box {
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .brand {
            letter-spacing: 3px;
            font-weight: 600;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

<div class="container text-center">
    <div class="coming-box">
        <h5 class="text-muted mb-3 brand">ZAHIRA BOUTIQUE</h5>
        <h1 class="display-4 fw-bold mb-3">Coming Soon</h1>
        <p class="lead text-muted mb-4">
            We are preparing something beautiful for you.  
            Stay tuned and check back soon.
        </p>

        <div class="d-flex justify-content-center gap-3">
            <a href="/" class="btn btn-dark px-4">Back to Home</a>
            <a href="https://www.instagram.com/zahirabutiq/" target="_blank" class="btn btn-outline-dark px-4">
                Visit Instagram
            </a>
        </div>
    </div>
</div>

</body>
</html>
