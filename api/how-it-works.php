<?php 
// Pulls in the <head>, <nav>, and external style.css
include_once(__DIR__ . '/../header.php'); 
?>

<!-- HERO SECTION -->
<section class="hero" style="min-height: 60svh; justify-content: center;">
  <div class="hero-tag">Our Process</div>
  <div class="hero-eyebrow">Efficient. Transparent. Local</div>
  <h1>Support that flows<br>with your <em>workflow.</em></h1>
  <div class="hero-bottom">
    <p class="hero-desc">
      We’ve eliminated the friction of traditional agencies. No complex ticketing systems—just direct access to Local developers.
    </p>
  </div>
</section>

<!-- STEP-BY-STEP PROCESS -->
<section id="process-deep-dive" style="padding-top: 0;">
  <div class="section-label">The Journey</div>
  <h2 class="section-heading">How we handle your<br><em>digital heavy lifting.</em></h2>
  
  <div class="why-right" style="border-top: 1px solid var(--border);">
    <!-- Step 1 -->
    <div class="why-item reveal">
      <span class="why-item-num">01</span>
      <div>
        <h3>Choose Your Support Block</h3>
        <p>Select a block of hours that fits your monthly needs. Whether you're a startup needing a few tweaks or a scaling store requiring deep technical maintenance, we have a plan that fits. All hours are valid for 12 months.</p>
        <a href="/index.php#pricing" class="btn btn-outline" style="margin-top: 16px;">View Plans →</a>
      </div>
    </div>

    <!-- Step 2 -->
    <div class="why-item reveal">
      <span class="why-item-num">02</span>
      <div>
        <h3>Onboarding & Access</h3>
        <p>Once you've joined, we set up a secure staging environment for your site. You'll meet your dedicated developer via email, and we'll gather the necessary credentials to begin working safely without ever touching your live traffic initially.</p>
      </div>
    </div>

    <!-- Step 3 -->
    <div class="why-item reveal">
      <span class="why-item-num">03</span>
      <div>
        <h3>Send Your Requests</h3>
        <p>Need a plugin updated? A new feature built? Speed optimization? Simply email your developer. We acknowledge all requests within 24 hours and provide a time estimate for larger tasks before we begin.</p>
      </div>
    </div>

    <!-- Step 4 -->
    <div class="why-item reveal">
      <span class="why-item-num">04</span>
      <div>
        <h3>Review & Deploy</h3>
        <p>We perform all work in the staging environment first. You review the changes, and once you provide the "thumbs up," we push the updates live during low-traffic windows to ensure zero downtime for your customers.</p>
      </div>
    </div>
  </div>
</section>

<!-- THE GUARANTEE BLOCK -->
<section style="background: var(--bg2); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);">
  <div class="why-layout">
    <div class="why-left">
      <div class="section-label">Peace of Mind</div>
      <h2 class="section-heading">The 100%<br><em>Trust</em> Experience.</h2>
      <div class="accent-block reveal">
        <div class="big-num">100</div>
        <p>We are a partner you can completely trust. If the initial design isn't exactly what you envisioned, we will jump right in to refine it. No friction, just a total commitment to making it right.</p>
      </div>
    </div>
    <div class="why-right">
        <div class="feature-card" style="background: var(--bg); margin-bottom: 20px;">
            <h3>Direct Communication</h3>
            <p>No account managers or middle-men. You speak directly to the person writing the code.</p>
        </div>
        <div class="feature-card" style="background: var(--bg); margin-bottom: 20px;">
            <h3>Time Tracking</h3>
            <p>We track time to the minute. You'll receive a transparent report showing exactly how your support hours were utilized.</p>
        </div>
        <div class="feature-card" style="background: var(--bg);">
            <h3>Safety First</h3>
            <p>Every change is backed up. If anything goes wrong, we have the protocol to revert and fix it instantly.</p>
        </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<div class="cta-section">
  <div class="cta-left">
    <h2>Ready to start<br>your first <em>task?</em></h2>
    <div>
      <div class="cta-contact-item">
        <span class="cta-contact-label">Email</span>
        <a href="mailto:contact@princegeorgedesign.com" class="cta-contact-value">contact@princegeorgedesign.com</a>
      </div>
    </div>
  </div>
  <div class="cta-right">
    <p style="font-size: 1rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 32px;">Stop managing your website and start managing your business. Let our Local experts handle the technical details.</p>
    <div style="display: flex; flex-direction: column; gap: 12px;">
      <a href="/index.php#pricing" class="btn btn-accent" style="justify-content: center;">Browse Support Blocks →</a>
    </div>
  </div>
</div>

<?php 
// Pulls in the <footer> and the external script.js
include_once(__DIR__ . '/../footer.php'); 
?>
