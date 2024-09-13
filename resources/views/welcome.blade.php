<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="Imoblee: Arrendar, Comprar ou Partilhar em Portugal.">
    <meta name="description" content="Encontre imóveis em Portugal com facilidade. Arrendar, comprar ou compartilhar nunca foi tão simples!">
    <meta name="keywords" content="imóveis, arrendar, comprar, partilhar, apartamentos, moradias, terrenos, Portugal, anúncios imobiliários">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Imoblee: Arrendar, Comprar ou Partilhar imóveis em Portugal">
    <meta property="og:description" content="Encontre imóveis em Portugal com facilidade. Arrendar, comprar ou compartilhar nunca foi tão simples!">
    <meta property="og:image" content="{{ asset('assets/images/imoblee.jpg') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Imoblee">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Imoblee: Arrendar, Comprar ou Partilhar imóveis em Portugal">
    <meta name="twitter:description" content="Encontre imóveis em Portugal com facilidade. Arrendar, comprar ou compartilhar nunca foi tão simples!">
    <meta name="twitter:image" content="{{ asset('assets/images/imoblee.jpg') }}">
    <meta name="twitter:site" content="@imoblee">

    <link rel="canonical" href="{{ config('app.url') }}">

    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('assets/favicons/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#f9f9f9">
    <meta name="theme-color" content="#f9f9f9">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Imoblee: Arrendar, comprar ou partilhar em Portugal.</title>
    <style>
        * {
            font-family: "Poppins", system-ui;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #f9f9f9;
            color: rgba(33, 39, 65, 1);
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            height: 100%;
        }
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            text-align: center;
        }
        .logo {
            margin-bottom: 30px;
        }
        .title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
        }
        .subtitle {
            font-size: 17px;
            font-weight: 500;
            margin-bottom: 30px;
        }
        .small {
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .gif {
            margin-bottom: 30px;
            border-radius: 10%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .social {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        .social a {
            text-decoration: none;
            color: rgba(46, 204, 113, 1);
            font-size: 24px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="content">
        <img title="Imoblee" src="{{ asset('assets/images/logo.svg') }}" width="230" class="logo" alt="Imoblee logo" role="img" aria-label="Imoblee logo">
        <h1 class="title" role="heading" aria-level="1">Arrendar, comprar ou partilhar em Portugal.</h1>
        <h3 class="subtitle">Brevemente, o nosso portal estará disponível.</h3>
        <span class="small">Enquanto isso, desfrute de um GIF de um gato a pilotar.</span>
        <img src="{{ asset('assets/images/car_driving.gif') }}" class="gif" width="200" alt="Gato a Pilotar" role="img" aria-label="Gato a Pilotar">
        <div class="social">
            <a href="https://instagram.com/imobl.ee" title="Instagram" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.tiktok.com/@imoblee/" title="TikTok" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-tiktok"></i>
            </a>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/4988c53f2b.js" crossorigin="anonymous"></script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Imoblee",
    "url": "https://www.imoblee.com",
    "logo": "https://www.imoblee.com/imoblee.jpg",
    "description": "",
    "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer support",
    "email": "suporte@imoblee.com"
    }
}
</script>
</body>
</html>
