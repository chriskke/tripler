<?php
// --- Simple Router & SEO Data ---

// 1. Define SEO data for each page.
$seo_data = [
    'home' => [
        'canonical' => 'https://tripler.com.my/',
        'title' => 'Outdoor Sunshade, Canopy & Awning Installation - Free Visit!',
        'description' => 'Outdoor sunshade, canopy & awning installation in Malaysia. Serving KL, Selangor, Ipoh & Melaka. Book your free site visit today!',
        'keywords' => 'Triple R Shade, retractable awning Malaysia, pergola Malaysia, outdoor shades, garden umbrella, shade solutions',
        'image' => 'img/logo.png'
    ],
    'about' => [
        'canonical' => 'https://tripler.com.my/about-us/',
        'title' => 'About Triple R Shade - A 30-Year Legacy in Shade Solutions',
        'description' => 'Learn about Triple R Shade\'s history as a leading shade supplier in Malaysia. Discover our commitment to quality, innovation, and customer satisfaction.',
        'keywords' => 'about Triple R Shade, shade supplier Malaysia, outdoor living solutions, company history',
        'image' => 'img/about/tr-about-01.jpg'
    ],
    'retractable-awning' => [
        'canonical' => 'https://tripler.com.my/retractable-awning/',
        'title' => 'Retractable Awnings Malaysia - Stylish & Durable | Triple R Shade',
        'description' => 'Explore our premium range of retractable awnings. Perfect for patios and balconies, providing stylish and durable sun shade solutions for your home or business.',
        'keywords' => 'retractable awning, motorized awning, patio awning, sun shade, custom awning',
        'image' => 'img/logo.png' // You can change this to a specific product image
    ],
    'skylite-blinds' => [
        'canonical' => 'https://tripler.com.my/skylite/',
        'title' => 'Skylight Blinds & Shades in Malaysia | Triple R Shade',
        'description' => 'Discover our elegant and functional skylight blinds. Control light and heat in your space with our custom-fit skylite solutions.',
        'keywords' => 'skylight blinds, skylite shades, roof blinds, motorized skylight blinds',
        'image' => 'img/logo.png'
    ],
    'louvers-pergola' => [
        'canonical' => 'https://tripler.com.my/pergola/',
        'title' => 'Motorized Louvered Pergolas Malaysia | Triple R Shade',
        'description' => 'Transform your outdoor area with our modern motorized louvered pergolas. Enjoy sun or shade on demand with a durable and stylish aluminum pergola.',
        'keywords' => 'louvered pergola, motorized pergola, aluminum pergola, outdoor pergola',
        'image' => 'img/logo.png'
    ],
    'loop-awning' => [
        'canonical' => 'https://tripler.com.my/loop/',
        'title' => 'Loop Awnings - Modern Vertical Shade | Triple R Shade',
        'description' => 'Loop awnings offer a sleek and modern solution for vertical shading on windows and balconies. Enhance privacy and block the sun with our stylish loop awnings.',
        'keywords' => 'loop awning, vertical shade, outdoor blinds, window awning',
        'image' => 'img/logo.png'
    ],
    'jumbrella' => [
        'canonical' => 'https://tripler.com.my/jumbrella/',
        'title' => 'Jumbrella - Large Commercial Umbrellas | Triple R Shade',
        'description' => 'Discover the Jumbrella, the ultimate large-scale umbrella for commercial spaces like cafes and restaurants. Robust, durable, and stylish shade solutions.',
        'keywords' => 'jumbrella, large umbrella, commercial umbrella, outdoor parasol',
        'image' => 'img/logo.png'
    ],
    'parasols' => [
        'canonical' => 'https://tripler.com.my/parasols/',
        'title' => 'Garden & Patio Parasols Malaysia | Triple R Shade',
        'description' => 'Find the perfect garden or patio parasol from our wide selection. High-quality materials and stylish designs to complement any outdoor space.',
        'keywords' => 'parasol, garden umbrella, patio umbrella, outdoor parasol',
        'image' => 'img/logo.png'
    ],
    'gallery' => [
        'canonical' => 'https://tripler.com.my/gallery/',
        'title' => 'Our Project Gallery - Triple R Shade Portfolio',
        'description' => 'Browse our gallery to see stunning examples of our retractable awnings, pergolas, and shade solutions in action. Get inspired for your own project!',
        'keywords' => 'shade project gallery, awning portfolio, pergola design ideas, Triple R Shade projects',
        'image' => 'img/logo.png'
    ],
    'contact' => [
        'canonical' => 'https://tripler.com.my/contact/',
        'title' => 'Contact Triple R Shade - Get a Quote Today',
        'description' => 'Get in touch with the team at Triple R Shade. Contact us for a consultation or quote on our wide range of outdoor shade solutions in Malaysia.',
        'keywords' => 'contact Triple R Shade, get a quote, shade solutions Malaysia',
        'image' => 'img/logo.png'
    ],
    'dealer' => [
        'canonical' => 'https://tripler.com.my/dealer/',
        'title' => 'Become a Dealer | Triple R Shade Partnership Opportunities',
        'description' => 'Join us as a dealer or partner. We welcome architects, designers, and contractors to partner with us in providing premier shade solutions.',
        'keywords' => 'become a dealer, shade supplier partnership, awning distributor',
        'image' => 'img/logo.png'
    ],
    'accessories' => [
        'canonical' => 'https://tripler.com.my/accessories/',
        'title' => 'Awning Parts & Accessories | Triple R Shade',
        'description' => 'Find a complete range of parts and accessories for your awnings, pergolas, and umbrellas. We stock everything you need for maintenance and repairs.',
        'keywords' => 'awning parts, awning accessories, pergola parts, umbrella parts',
        'image' => 'img/logo.png'
    ],
    'parts' => [
        'canonical' => 'https://tripler.com.my/parts/',
        'title' => 'Awning & Shade System Parts | Triple R Shade',
        'description' => 'We provide a comprehensive inventory of spare parts for all our shade systems, ensuring long-term performance and peace of mind.',
        'keywords' => 'awning spare parts, shade system parts, replacement parts',
        'image' => 'img/logo.png'
    ],
];

// 2. Get the requested URL path and clean it up.
$request_uri = $_SERVER['REQUEST_URI'];
$request_path = strtok($request_uri, '?'); // Remove query string
$page_slug = trim($request_path, '/');   // Remove leading/trailing slashes

// 3. Map the URL slugs to the actual PHP filenames.
$page_map = [
    '' => 'home',
    'about-us' => 'about',
    'retractable-awning' => 'retractable-awning',
    'skylite' => 'skylite-blinds',
    'pergola' => 'louvers-pergola',
    'loop' => 'loop-awning',
    'jumbrella' => 'jumbrella',
    'parasols' => 'parasols',
    'gallery' => 'gallery',
    'contact' => 'contact',
    'dealer' => 'dealer',
    'accessories' => 'accessories',
    'parts' => 'parts'
];

// 4. Determine the current page's file key.
$page_key = null;
if (array_key_exists($page_slug, $page_map)) {
    $file_key_candidate = $page_map[$page_slug];
    if (file_exists('php/' . $file_key_candidate . '.php')) {
        $page_key = $file_key_candidate;
    }
}

// If no specific page is found, determine if it's a 404 or the homepage.
if ($page_key === null) {
    if (!empty($page_slug)) { // If there's a slug but it didn't match, it's a 404.
        $page_key = '404';
    } else { // If there's no slug, it's the homepage.
        $page_key = 'home';
    }
}

// 5. Get the SEO metadata for the current page.
$current_page_meta = $seo_data[$page_map[$page_slug] ?? 'home'] ?? $seo_data['home'];
if ($page_key === '404') {
    header("HTTP/1.0 404 Not Found");
    $current_page_meta = [
        'canonical' => 'https://tripler.com.my' . htmlspecialchars($request_path),
        'title' => '404 - Page Not Found',
        'description' => 'The page you are looking for could not be found.',
        'keywords' => '404, page not found',
        'image' => 'img/logo.png'
    ];
}

?>
<!doctype html>
<html lang="en-MY" dir="ltr">

<?php include 'php/header-footer/header.php';?>

<?php
// 6. Decide which file to load.
$file_to_include = 'php/' . $page_key . '.php';

// 7. Load the page file or show a 404 error.
if (file_exists($file_to_include)) {
    include $file_to_include;
} else {
    // This is a fallback 404, in case the $page_key is somehow invalid.
    echo '<section class="bg-dark-gray pt-0 pb-0" style="height: 100vh; display: flex; align-items: center; justify-content: center;">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center">';
    echo '<h1 class="text-white">404 - Page Not Found</h1>';
    echo '<p class="text-white">Sorry, the page you are looking for does not exist.</p>';
    echo '<a href="/" class="btn btn-medium btn-base-color">Go to Homepage</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
}
?>

<?php include 'php/header-footer/footer.php';?>

</html>