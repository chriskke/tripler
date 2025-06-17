<?php
// Note: The $current_page_meta variable is prepared in index.php
global $current_page_meta;

// Define a base URL for generating absolute paths for images
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
$og_image_url = $base_url . '/' . ($current_page_meta['image'] ?? 'img/logo.png');

// Create a comma-separated list for the article:tag properties
$keywords_array = array_map('trim', explode(',', $current_page_meta['keywords'] ?? ''));
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta name="author" content="Triple R Shade Sdn. Bhd.">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="renderer" content="webkit"/>
    <meta name="theme-color" content="#a6c1ee">
    <meta name="google-site-verification" content="tQCnHzjfT8ZUXcgioK9GbJCcLA7HpXY-SIQet6JV5LA" />
    <base href="/">

    <title><?php echo htmlspecialchars($current_page_meta['title'] ?? 'Triple R Shade Sdn. Bhd.'); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($current_page_meta['title'] ?? 'Triple R Shade Sdn. Bhd.'); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($current_page_meta['description'] ?? ''); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($current_page_meta['keywords'] ?? ''); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($current_page_meta['canonical'] ?? ''); ?>">   

    <!-- Schema.org for Google -->
    <meta itemprop="name" content="<?php echo htmlspecialchars($current_page_meta['title'] ?? 'Triple R Shade Sdn. Bhd.'); ?>">
    <meta itemprop="description" content="<?php echo htmlspecialchars($current_page_meta['description'] ?? ''); ?>">
    <meta itemprop="image" content="<?php echo htmlspecialchars($og_image_url); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="en-MY">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_page_meta['canonical'] ?? ''); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($current_page_meta['title'] ?? 'Triple R Shade Sdn. Bhd.'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($current_page_meta['description'] ?? ''); ?>">
    <meta property="og:site_name" content="Triple R Shade Sdn. Bhd.">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image_url); ?>">
<?php foreach ($keywords_array as $keyword): if (!empty($keyword)): ?>
    <meta property="article:tag" content="<?php echo htmlspecialchars($keyword); ?>">
<?php endif; endforeach; ?>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TripleRShade"> <!-- Replace with your actual Twitter handle -->
    <meta name="twitter:title" content="<?php echo htmlspecialchars($current_page_meta['title'] ?? 'Triple R Shade Sdn. Bhd.'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($current_page_meta['description'] ?? ''); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image_url); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/fav-tripler.png">
    <link rel="apple-touch-icon" href="img/fav-tripler.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav-tripler.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav-tripler.png">
    
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="css/vendors.min.css"/>
    <link rel="stylesheet" href="css/icon.min.css"/>
    <link rel="stylesheet" href="css/style.min.css"/>
    <link rel="stylesheet" href="css/responsive.min.css"/>
    <link rel="stylesheet" href="css/architecture.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/uwu.css" />
    <link rel="stylesheet" href="css/owo.css" />
    <link rel="stylesheet" href="css/hover-min.css" />
    <link rel="stylesheet" href="krttxform/style.css">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N27NQXZN');</script>
    <!-- End Google Tag Manager -->
     
</head>

<body data-mobile-nav-style="classic" class="custom-cursor"> 
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N27NQXZN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- start cursor -->
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header> 
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="dark">
            <div class="container-fluid">
                <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="/">
                        <img src="img/logo.png" data-at2x="img/logo.png" alt="Triple R Shade Logo" class="default-logo">
                        <img src="img/logo.png" data-at2x="img/logo.png" alt="Triple R Shade Logo" class="alt-logo">
                        <img src="img/logo.png" data-at2x="img/logo.png" alt="Triple R Shade Logo" class="mobile-logo"> 
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav"> 
                        <ul class="navbar-nav alt-font"> 
                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="/about-us/" class="nav-link">About Us</a></li>
                            <li class="nav-item dropdown dropdown-with-icon-style02">
                                <a href="#" class="nav-link">Products</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                    <li><a href="/retractable-awning/">Retractable Awning</a></li>
                                    <li><a href="/skylite/">Skylight Blinds</a></li>
                                    <li><a href="/pergola/">Louvers Pergola</a></li>
                                    <li><a href="/loop/">Loop Awning</a></li>
                                    <li><a href="/jumbrella/">Jumbrella</a></li>
                                    <li><a href="/parasols/" disabled>Parasols</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="/gallery/" class="nav-link">Gallery</a></li>
                            <li class="nav-item"><a href="/contact/" class="nav-link">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->