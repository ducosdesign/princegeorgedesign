<?php 
// Pulls in the <head>, <nav>, and external style.css
include_once(__DIR__ . '/../header.php'); 
?>

<!-- HERO SECTION -->
<section class="hero" style="min-height: 50svh; justify-content: center;">
  <div class="hero-tag">Custom Packages</div>
  <div class="hero-eyebrow">Tailored. Scalable. Fixed-Price.</div>
  <h1>Bundle your requirements.<br>Get a precise <em>quote.</em></h1>
  <div class="hero-bottom">
    <p class="hero-desc">
      Need more than standard maintenance? Choose one of our core package frameworks below or request a completely bespoke estimate tailored to your exact business specifications.
    </p>
  </div>
</section>

<!-- PACKAGE OPTIONS DEEP DIVE -->
<section id="package-deals" style="padding-top: 0;">
  <div class="section-label">The Offerings</div>
  <h2 class="section-heading">Frameworks designed to<br><em>kickstart your project.</em></h2>
  
  <div class="why-right" style="border-top: 1px solid var(--border); margin-bottom: 60px;">
    <!-- Package 1 -->
    <div class="why-item reveal">
      <span class="why-item-num">01</span>
      <div>
        <h3>The Launchpad Package</h3>
        <p>Perfect for new startups or businesses looking to build a clean, lightning-fast web presence from scratch. Includes custom responsive design, foundational SEO setup, and essential CMS configuration.</p>
        <button onclick="selectPackage('Launchpad Package')" class="btn btn-outline" style="margin-top: 16px;">Select Framework ↓</button>
      </div>
    </div>

    <!-- Package 2 -->
    <div class="why-item reveal">
      <span class="why-item-num">02</span>
      <div>
        <h3>The Scale & Optimize Package</h3>
        <p>For existing operations needing major performance upgrades, UI overhauls, or seamless API integrations (CRM, accounting plugins, or shipping endpoints). Built to eliminate your current site friction.</p>
        <button onclick="selectPackage('Scale & Optimize Package')" class="btn btn-outline" style="margin-top: 16px;">Select Framework ↓</button>
      </div>
    </div>

    <!-- Package 3 -->
    <div class="why-item reveal">
      <span class="why-item-num">03</span>
      <div>
        <h3>Bespoke Enterprise Scope</h3>
        <p>Full-scale product architecture. If you need complex application builds, advanced databases, multi-tiered permission systems, or highly customized multi-tenant SaaS environments.</p>
        <button onclick="selectPackage('Bespoke Enterprise Scope')" class="btn btn-outline" style="margin-top: 16px;">Select Framework ↓</button>
      </div>
    </div>
  </div>
</section>

<!-- INTERACTIVE QUOTE REQUEST FORM SECTION -->
<section id="quote-form-section" style="background: var(--bg2); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); padding: 80px 0;">
  <div class="why-layout">
    <div class="why-left">
      <div class="section-label">Estimate Tool</div>
      <h2 class="section-heading">Tell us about<br><em>your scope.</em></h2>
      <p style="color: var(--text-muted); line-height: 1.7; margin-top: 20px;">
        Fill out your baseline parameters here. Our team will analyze your architecture requirements and deliver a detailed fixed-price quote or schedule a brief, direct call within 24 business hours.
      </p>
    </div>
    
    <div class="why-right">
      <!-- Styled Form Container to seamlessly blend with existing feature-card properties -->
      <form action="" method="POST" style="background: var(--bg); border: 1px solid var(--border); padding: 32px; border-radius: 4px; display: flex; flex-direction: column; gap: 20px;">
        
        <div>
          <label style="display: block; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px; font-weight: 600;">Selected Configuration Framework</label>
          <select id="chosen-package" name="package_type" style="width: 100%; padding: 12px; background: var(--bg2); border: 1px solid var(--border); color: inherit; border-radius: 4px; font-family: inherit; font-size: 0.95rem;">
            <option value="General Custom Quote">-- Select a package or option --</option>
            <option value="Launchpad Package">The Launchpad Package</option>
            <option value="Scale & Optimize Package">The Scale & Optimize Package</option>
            <option value="Bespoke Enterprise Scope">Bespoke Enterprise Scope</option>
          </select>
        </div>

        <div style="display: flex; gap: 16px; flex-wrap: wrap;">
          <div style="flex: 1; min-width: 200px;">
            <label style="display: block; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px; font-weight: 600;">Your Name *</label>
            <input type="text" name="client_name" required style="width: 100%; padding: 12px; background: var(--bg2); border: 1px solid var(--border); color: inherit; border-radius: 4px; font-family: inherit; box-sizing: border-box;">
          </div>
          <div style="flex: 1; min-width: 200px;">
            <label style="display: block; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px; font-weight: 600;">Email Address *</label>
            <input type="email" name="client_email" required style="width: 100%; padding: 12px; background: var(--bg2); border: 1px solid var(--border); color: inherit; border-radius: 4px; font-family: inherit; box-sizing: border-box;">
          </div>
        </div>

        <div>
          <label style="display: block; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px; font-weight: 600;">Project Scope & Key Functionalities</label>
          <textarea name="project_details" rows="5" placeholder="Describe what functionalities you need (e.g., e-commerce, user registration, integration targets, timeline preferences)..." style="width: 100%; padding: 12px; background: var(--bg2); border: 1px solid var(--border); color: inherit; border-radius: 4px; font-family: inherit; line-height: 1.5; resize: vertical; box-sizing: border-box;"></textarea>
        </div>

        <div style="margin-top: 10px;">
          <button type="submit" class="btn btn-accent" style="width: 100%; justify-content: center; padding: 14px;">Submit Quote Request →</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- BOTTOM CTA SECTION -->
<div class="cta-section">
  <div class="cta-left">
    <h2>Prefer an immediate<br>discovery <em>consultation?</em></h2>
    <div>
      <div class="cta-contact-item">
        <span class="cta-contact-label">Email</span>
        <a href="mailto:contact@princegeorgedesign.com" class="cta-contact-value">contact@princegeorgedesign.com</a>
      </div>
    </div>
  </div>
  <div class="cta-right">
    <p style="font-size: 1rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 32px;">
      If you have a formal RFP or design wireframes ready to transmit, feel free to submit them straight to our inbox. Let's build your next digital platform exactly as it should be.
    </p>
    <div style="display: flex; flex-direction: column; gap: 12px;">
      <a href="/index.php#pricing" class="btn btn-outline" style="justify-content: center;">Alternatively, Browse Fixed Support Blocks →</a>
    </div>
  </div>
</div>

<!-- Tiny helper JS to link package clicks to the form drop-down menu -->
<script>
function selectPackage(packageName) {
    const selector = document.getElementById('chosen-package');
    if(selector) {
        selector.value = packageName;
        document.getElementById('quote-form-section').scrollIntoView({ behavior: 'smooth' });
    }
}
</script>

<?php 
// Pulls in the <footer> and the external script.js
include_once(__DIR__ . '/../footer.php'); 
?>
