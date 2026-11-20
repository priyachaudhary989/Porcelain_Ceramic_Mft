JARRAL & BROS — PHP MULTI-PAGE WEBSITE

FOLDER STRUCTURE
- index.php
- about.php
- products.php
- quality.php
- gallery.php
- contact.php
- include/header.php
- include/footer.php
- include/facts-strip.php
- include/mission-vision.php
- include/product-cards.php
- assets/css/style.css
- assets/js/script.js
- assets/images/rameez-raja.jpg
- assets/images/shabir-hussain.jpg

HEADER / FOOTER INCLUDE
Every page includes the shared header using:
include __DIR__ . '/include/header.php';
Every page includes the shared footer using:
include __DIR__ . '/include/footer.php';

The active navigation item and page title are set at the top of each PHP page.

HOW TO RUN LOCALLY
PHP pages cannot be opened correctly by double-clicking them. Use a PHP server:
1. Install XAMPP.
2. Copy the extracted Jarral_Bros_Website folder into C:\xampp\htdocs\
3. Start Apache from XAMPP Control Panel.
4. Open http://localhost/Jarral_Bros_Website/ in your browser.

IMAGES
The website uses external Unsplash image URLs and Google Fonts, so an internet connection is required. Gallery and manufacturing images are illustrative, not verified photos of the company's own factory or inventory. The About page uses the two portrait images supplied by the user for Rameez Raja and Shabir Hussain.

All business details and NIC categories are based on the Udyam certificate supplied by the user. Confirm product availability/specifications before publishing.
