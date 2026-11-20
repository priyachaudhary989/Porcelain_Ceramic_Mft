<?php
$pageTitle = 'Contact Us | Jarral & Bros';
$activePage = 'contact';
include __DIR__ . '/include/header.php';
?>
<section class="page-hero page-hero-contact" id="top">
  <div class="container">
    <div class="eyebrow"><span></span> GET IN TOUCH</div>
    <h1>Let's Talk <em>Business.</em></h1>
    <p>For business enquiries and product information, contact us using the details below.</p>
    <p>Send your enquiry through WhatsApp or call us at +91 7006291278.</p>
    <div class="page-hero-actions">
      <a class="btn btn-dark" href="#whatsapp-enquiry">Send an enquiry <span>↗</span></a>
      <a class="btn btn-outline" href="tel:+917006291278">Call us</a>
    </div>
  </div>
  <div class="page-hero-badge"><span aria-hidden="true">✦</span><div><b>Manufacturing with purpose</b><small>Building materials for everyday spaces</small></div></div>
</section>
<?php include __DIR__ . '/include/facts-strip.php'; ?>
<section class="section whatsapp-enquiry-section" id="whatsapp-enquiry">
  <div class="container whatsapp-enquiry-layout">
    <aside class="whatsapp-enquiry-intro">
      <div class="eyebrow"><span></span> WHATSAPP ENQUIRY</div>
      <h2>Send your message directly to us.</h2>
      <p>Share your contact details and question. WhatsApp will open with your enquiry ready for you to review and send.</p>
      <div class="whatsapp-enquiry-number">
        <strong>JARRAL &amp; BROS</strong>
        <a href="https://wa.me/917006291278" target="_blank" rel="noopener noreferrer">WhatsApp: +91 7006291278</a>
      </div>
      <a class="btn whatsapp-direct-link" href="https://wa.me/917006291278" target="_blank" rel="noopener noreferrer">Open WhatsApp Chat <span>↗</span></a>
    </aside>
    <form class="whatsapp-enquiry-form" id="whatsapp-enquiry-form" action="https://wa.me/917006291278" method="get" target="_blank" rel="noopener">
      <h2>Send Your Enquiry</h2>
      <p class="whatsapp-form-note" id="whatsapp-form-note">Your enquiry opens in WhatsApp for you to review and send. This website does not store or automatically send your message.</p>
      <input type="hidden" name="text" id="whatsapp-message">
      <div class="whatsapp-form-grid">
        <div class="whatsapp-form-field">
          <label for="whatsapp-name">Your Full Name</label>
          <input id="whatsapp-name" type="text" autocomplete="name" maxlength="100" placeholder="Enter your name" required>
        </div>
        <div class="whatsapp-form-field">
          <label for="whatsapp-phone">Mobile Number</label>
          <input id="whatsapp-phone" type="tel" autocomplete="tel" maxlength="30" placeholder="Enter mobile number" required>
        </div>
        <div class="whatsapp-form-field">
          <label for="whatsapp-email">Email Address <span>(optional)</span></label>
          <input id="whatsapp-email" type="email" autocomplete="email" maxlength="254" placeholder="Enter your email address">
        </div>
        <div class="whatsapp-form-field">
          <label for="whatsapp-subject">Enquiry Subject</label>
          <select id="whatsapp-subject" required>
            <option value="" selected disabled>Select enquiry</option>
            <option value="Product information">Product information</option>
            <option value="Manufacturing categories">Manufacturing categories</option>
            <option value="Quality enquiry">Quality enquiry</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="whatsapp-form-field whatsapp-message-field">
          <label for="whatsapp-enquiry-message">Your Message</label>
          <textarea id="whatsapp-enquiry-message" rows="5" maxlength="1500" placeholder="Write your message here..." required></textarea>
        </div>
      </div>
      <button class="btn btn-dark whatsapp-submit" type="submit">Continue to WhatsApp <span>↗</span></button>
    </form>
  </div>
</section>
<section class="section contact"><div class="container contact-grid">
  <div class="contact-details">
    <div class="contact-item"><span class="contact-icon">⌖</span><div><small>OUR LOCATION</small><p>144, Dhangri, Kalakot Road,<br>Badhoon, Rajouri,<br>Jammu &amp; Kashmir – 185132, India</p></div></div>
    <div class="contact-item"><span class="contact-icon">☎</span><div><small>PHONE NUMBER</small><p><a href="tel:+917006291278">+91 7006291278</a></p></div></div>
    <div class="contact-item"><span class="contact-icon">✉</span><div><small>EMAIL ADDRESS</small><p><a href="mailto:rajamirza1991@gmail.com">rajamirza1991@gmail.com</a></p></div></div>
  </div>
  <div class="business-panel"><div class="panel-top"><span>BUSINESS PROFILE</span><b>JB</b></div><h3>M/s Jarral &amp; Bros<br>Tile Manufacturing</h3>
    <div class="profile-row"><span>Enterprise Type</span><b>Micro (2026–27)</b></div><div class="profile-row"><span>Major Activity</span><b>Manufacturing</b></div><div class="profile-row"><span>Udyam Registration</span><b>UDYAM-JK-16-0018049</b></div><div class="profile-row"><span>Registration Date</span><b>04 May 2026</b></div>
  </div>
</div></section>
<section class="compact-section contact-guide-section">
  <div class="container contact-guide">
    <div><div class="eyebrow dark"><span></span> BEFORE YOU GET IN TOUCH</div><h2>A few details can help <em>guide the conversation.</em></h2></div>
    <div class="contact-guide-items"><span>Product category</span><span>Intended application</span><span>Your question or requirement</span></div>
    <img class="contact-guide-image" src="assets/images/img13.jpeg" alt="Bathroom finished with gray marble-style tiles">
  </div>
</section>
<section class="compact-section contact-location">
  <div class="container compact-split">
    <div><div class="eyebrow dark"><span></span> FIND US</div><h2>Visit our base in <em>Badhoon.</em></h2></div>
    <p>144, Dhangri, Kalakot Road, Badhoon, Rajouri, Jammu &amp; Kashmir – 185132, India.</p>
    <a class="text-link" href="https://maps.google.com/?q=144+Dhangri+Kalakot+Road+Badhoon+Rajouri+Jammu+Kashmir+185132">Open map <b>↗</b></a>
  </div>
</section>
<section class="compact-section contact-channels">
  <div class="container">
    <div class="compact-heading"><div class="eyebrow dark"><span></span> CHOOSE A CONTACT METHOD</div><h2>We’re a call or <em>email away.</em></h2></div>
    <div class="compact-link-list"><a href="tel:+917006291278">Call +91 7006291278 <b>↗</b></a><a href="mailto:rajamirza1991@gmail.com">Email Jarral &amp; Bros <b>↗</b></a></div>
  </div>
</section>
<section class="compact-section contact-topics">
  <div class="container compact-split">
    <div><div class="eyebrow dark"><span></span> BUSINESS ENQUIRIES</div><h2>Ask about our <em>registered activities.</em></h2></div>
    <div class="activity-tags"><span>Refractory products</span><span>Ceramic products</span><span>Concrete &amp; cement products</span></div>
    <a class="text-link" href="products.php">View manufacturing <b>↗</b></a>
  </div>
</section>
<section class="compact-section contact-registration">
  <div class="container compact-split">
    <div><div class="eyebrow dark"><span></span> BUSINESS REGISTRATION</div><h2>Micro enterprise, <em>manufacturing activity.</em></h2></div>
    <p>Udyam registration: UDYAM-JK-16-0018049. Registered on 04 May 2026.</p>
    <a class="text-link" href="about.php">About the enterprise <b>↗</b></a>
  </div>
</section>
<section class="compact-section contact-explore">
  <div class="container compact-split">
    <div><div class="eyebrow dark"><span></span> EXPLORE OUR WEBSITE</div><h2>Find the right <em>information.</em></h2></div>
    <p>Review the quality approach or browse the illustrative gallery.</p>
    <div class="compact-link-list"><a href="quality.php">Quality <b>↗</b></a><a href="gallery.php">Gallery <b>↗</b></a></div>
  </div>
</section>
<?php include __DIR__ . '/include/mission-vision.php'; ?>
<?php include __DIR__ . '/include/footer.php'; ?>
