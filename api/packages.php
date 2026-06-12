<?php 
// Pulls in the <head>, <nav>, and external style.css
include_once(__DIR__ . '/../header.php'); 
?>

<!-- HERO SECTION -->
<section class="hero" style="min-height: 50svh; justify-content: center;">
  <div class="hero-tag">Get a Quote</div>
  <div class="hero-eyebrow">Simple. No Obligation. Real Help.</div>
  <h1>Tell us about your project.<br>We’ll give you a <em>fair price.</em></h1>
  <div class="hero-bottom">
    <p class="hero-desc">
      Whether you need a brand-new website, some custom development work, or fresh graphic design, we make getting a quote incredibly easy. No pushy sales talk—just tell us what you need.
    </p>
  </div>
</section>

<!-- WHAT WE CAN HELP WITH (PLAIN ENGLISH) -->
<section id="what-we-do" style="padding-top: 0;">
  <div class="section-label">Our Services</div>
  <h2 class="section-heading">What are you looking<br><em>to get done?</em></h2>
  
  <div class="why-right" style="border-top: 1px solid var(--border); margin-bottom: 60px;">
    <!-- Web Design & Development -->
    <div class="why-item reveal">
      <span class="why-item-num">01</span>
      <div>
        <h3>Website Design & Development</h3>
        <p>Need a brand new website from scratch, or an update to your current one so it actually looks modern and works right? We handle the design, mobile optimization, and all the technical coding details.</p>
        <button onclick="openChatBot('Website Help')" class="btn btn-outline" style="margin-top: 16px;">Get a Web Quote →</button>
      </div>
    </div>

    <!-- Graphics & Branding -->
    <div class="why-item reveal">
      <span class="why-item-num">02</span>
      <div>
        <h3>Graphics, Logos & Branding</h3>
        <p>Looking for a professional logo, clean branding, or custom graphics for your business? We create eye-catching visuals that help your company stand out and look established.</p>
        <button onclick="openChatBot('Graphic Design Help')" class="btn btn-outline" style="margin-top: 16px;">Get a Graphics Quote →</button>
      </div>
    </div>

    <!-- Custom Tweaks & Fixes -->
    <div class="why-item reveal">
      <span class="why-item-num">03</span>
      <div>
        <h3>Custom Tech Help & Maintenance</h3>
        <p>Have a specific feature you want to add, a plugin that broke, or just need a reliable developer to fix up errors on your current site? We do quick tech fixes to keep your business running smoothly.</p>
        <button onclick="openChatBot('Tech Help / Maintenance')" class="btn btn-outline" style="margin-top: 16px;">Get a Maintenance Quote →</button>
      </div>
    </div>
  </div>
</section>

<!-- BUDGET PROMISE & BOT CALL TO ACTION -->
<section id="budget-promise-section" style="background: var(--bg2); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); padding: 80px 0;">
  <div class="why-layout">
    <div class="why-left">
      <div class="section-label">Our Promise</div>
      <h2 class="section-heading">We stick to<br><em>your budget.</em></h2>
      <p style="color: var(--text-muted); line-height: 1.7; margin-top: 20px;">
        Nobody likes surprise fees or projects that end up costing double what you expected. 
      </p>
      <p style="color: var(--text-muted); line-height: 1.7; margin-top: 12px;">
        You tell us what you can afford to spend, and we will tell you exactly what we can build for that amount. Once we agree on a price, **that is the price.** No hidden costs, period.
      </p>
    </div>
    
    <div class="why-right">
      <!-- Plain English Chatbot Prompt Card -->
      <div style="background: var(--bg); border: 1px solid var(--border); padding: 40px; border-radius: 4px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 24px;">
        <div style="font-size: 2.5rem; line-height: 1;">💬</div>
        <h3 style="margin: 0; font-size: 1.5rem;">Chat with our Assistant</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; max-width: 420px; margin: 0 auto; line-height: 1.6;">
          Tap the button below to open our quick chat window. Our assistant will ask you a few simple questions about what you need and what your budget looks like so we can send over a fast quote.
        </p>
        <button onclick="openChatBot('General Quote')" class="btn btn-accent" style="width: 100%; max-width: 320px; justify-content: center; padding: 14px;">
          Start Your Quick Quote →
        </button>
      </div>
    </div>
  </div>
</section>

<!-- BOTTOM CONTACT & COMMUNITY INFO -->
<div class="cta-section">
  <div class="cta-left">
    <h2>Prefer to just send<br>a regular <em>email?</em></h2>
    <div>
      <div class="cta-contact-item">
        <span class="cta-contact-label">Email</span>
        <a href="mailto:contact@princegeorgedesign.com" class="cta-contact-value">contact@princegeorgedesign.com</a>
      </div>
    </div>
  </div>
  <div class="cta-right">
    <p style="font-size: 1rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 32px;">
      If you already have a list of requirements written down, or want to send us a direct message, feel free to drop it in an email. We'd also love to follow your business on Instagram at <strong>@frontporchstudioca</strong>!
    </p>
    <div style="display: flex; flex-direction: column; gap: 12px;">
      <a href="/index.php#pricing" class="btn btn-outline" style="justify-content: center;">View Our Fixed Support Blocks instead →</a>
    </div>
  </div>
</div>

<!-- JavaScript to instantly launch Tidio -->
<script>
function openChatBot(projectType) {
    if (typeof tidioChatApi !== 'undefined') {
        tidioChatApi.open();
    } else {
        alert("Our chat assistant is loading. If the window doesn't open automatically, please send us a quick email at contact@princegeorgedesign.com!");
    }
}
</script>

<?php 
// Pulls in the <footer> and the external script.js
include_once(__DIR__ . '/../footer.php'); 
?>
