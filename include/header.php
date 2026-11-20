<?php
// Shared header. Set $pageTitle and $activePage before including this file.
$pageTitle = $pageTitle ?? 'Jarral & Bros | Tile Manufacturing';
$activePage = $activePage ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="M/s Jarral & Bros Tile Manufacturing — refractory, ceramic, concrete and cement-based tile products in Rajouri, Jammu & Kashmir.">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css?v=15">
</head>
<body class="<?= htmlspecialchars($pageClass ?? '', ENT_QUOTES, 'UTF-8') ?>">
<div class="topbar">
  <div class="container topbar-inner">
    <a href="tel:+917006291278">+91 7006291278</a>
    <a href="mailto:rajamirza1991@gmail.com">rajamirza1991@gmail.com</a>
    <span>144, Dhangri, Badhoon, Rajouri</span>
    <span class="topbar-registration">Udyam Reg. No.: UDYAM-JK-16-0018049</span>
  </div>
</div>
<header class="header">
  <div class="container nav">
    <a class="brand" href="index.php">
      <span class="brand-logo"><b>J</b><i>B</i></span>
      <span class="brand-name"><strong>JARRAL &amp; BROS</strong><small>TILE MANUFACTURING</small></span>
    </a>
    <button class="menu-btn" aria-label="Toggle navigation" aria-expanded="false">☰</button>
    <nav class="nav-links" aria-label="Main navigation">
      <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="index.php">Home</a>
      <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="about.php">About</a>
      <a class="<?= $activePage === 'manufacturing' ? 'active' : '' ?>" href="products.php">Manufacturing</a>
      <a class="<?= $activePage === 'quality' ? 'active' : '' ?>" href="quality.php">Quality</a>
      <a class="<?= $activePage === 'gallery' ? 'active' : '' ?>" href="gallery.php">Gallery</a>
      <a class="<?= $activePage === 'contact' ? 'active' : '' ?>" href="contact.php">Contact Us</a>
      <a class="nav-button" href="contact.php">Enquire Now <span>↗</span></a>
    </nav>
  </div>
</header>
<main>
