<?php 
// Pulls in the <head>, <nav>, and external style.css
include_once(__DIR__ . '/../header.php'); 
?>

<!-- HERO SECTION -->
<section class="hero" style="min-height: 50svh; justify-content: center;">
  <div class="hero-tag">Work With Us</div>
  <div class="hero-eyebrow">Limited Project Spaces Available</div>
  <h1>Let’s build something<br><em>extraordinary together.</em></h1>
  <div class="hero-bottom">
    <p class="hero-desc">
      Please note our project spaces are limited so if you are planning to launch a project this year, don’t wait to reach out. Explore our services below and launch our assistant to start your application.
    </p>
  </div>
</section>

<!-- SERVICES & FRAMEWORKS DEEP DIVE -->
<section id="package-deals" style="padding-top: 0;">
  <div class="section-label">Our Offerings</div>
  <h2 class="section-heading">Tailored design & strategy<br><em>built for impact.</em></h2>
  
  <div class="why-right" style="border-top: 1px solid var(--border); margin-bottom: 60px;">
    <!-- Core Brand & Web Strategy -->
    <div class="why-item reveal">
      <span class="why-item-num">01</span>
      <div>
        <h3>Brand Strategy & Website Design</h3>
        <p>Our flagship offering. We dive deep into your target positioning, design a beautiful custom Brand Identity, and deploy a high-performance web platform tailored entirely to your workflow. Most clients invest between $8,000 - $15,000 for this comprehensive transformation.</p>
        <button onclick="openChatBot('Brand & Web Design')" class="btn btn-outline" style="margin-top: 16px;">Apply for This Tier →</button>
      </div>
    </div>

    <!-- Website in a Week / Design Day -->
    <div class="why-item reveal">
      <span class="why-item-num">02</span>
      <div>
        <h3>Website in a Week & Design Days</h3>
        <p>Highly requested accelerated options for rapid execution. Secure a dedicated <strong>Design Day ($2,500)</strong> or apply for our exclusive <strong>Website in a Week</strong> framework to skip traditional multi-month agency timelines. Limited availability.</p>
        <button onclick="openChatBot('Website in a Week / Design Day')" class="btn btn-outline" style="margin-top: 16px;">Check Availability →</button>
      </div>
    </div>

    <!-- Audits & Bootcamps -->
    <div class="why-item reveal">
      <span class="why-item-num">03</span>
      <div>
        <h3>Business Coaching & Brand Bootcamps</h3>
        <p>Looking for strategic clarity before scaling your infrastructure? We offer focused Brand Audits and direct Business + Brand Bootcamp programs (available during summer months) to fine-tune your business engine.</p>
        <button onclick="openChatBot('Coaching / Bootcamp')" class="btn btn-outline" style="margin-top: 16px;">Inquire About Bootcamps →</button>
      </div>
    </div>
  </div>
</section>

<!-- INVESTMENT EXPECTATION & BOT LAUNCH SECTION -->
<section id="application-section" style="background: var(--bg2); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); padding: 80px 0;">
  <div class="why-layout">
    <div class="why-left">
      <div class="section-label">Investment & Scale</div>
      <h2 class="section-heading">Ready to make<br><em>the investment?</em></h2>
      <p style="color: var(--text-muted); line-height: 1.7; margin-top: 20px;">
        We do our best to work within your budget, but professional branding does take time and we do ask that you are ready to make the investment. 
      </p>
      <p style="color: var(--text-muted); line-height: 1.7; margin-top: 12px;">
        Most clients invest between <strong>$8,000 - $15,000</strong>, but we are always doing our best to make things work for both of us. Let's map out your parameters.
      </p>
    </div>
    
    <div class="why-right">
      <!-- Chatbot Onboarding Prompt Card -->
      <div style="background: var(--bg); border: 1px solid var(--border); padding: 40px; border-radius: 4px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 24px;">
        <div style="font-size: 2.5rem; line-height: 1;">✨</div>
        <h3 style="margin: 0; font-size: 1.5rem;">Start Your Application</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; max-width: 420px; margin: 0 auto; line-height: 1.6;">
          Please tap below to launch our chat assistant. It will guide you through our core consultation script to capture your business goals, location, scope selection, and exact target budget parameters.
        </p>
        <button onclick="openChatBot('General Application')" class="btn btn-accent" style="width: 100%; max-width: 320px; justify-content: center; padding: 14px;">
          Launch Project Application →
        </button>
      </div>
    </div>
  </div>
</section>

<!-- BOTTOM CONTACT & COMMUNITY INFO -->
<div class="cta-section">
  <div class="cta-left">
    <h2>Let’s be <em>friends!</em><br>Email our team directly.</h2>
    <div>
      <div class="cta-contact-item">
        <span class="cta-contact-label">Email</span>
        <a href="mailto:contact@princegeorgedesign.com" class="cta-contact-value">contact@princegeorgedesign.com</a>
      </div>
    </div>
  </div>
  <div class="cta-right">
    <p style="font-size: 1rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 32px;">
      We would love to follow your business journey! Feel free to connect with our studio on social media at <strong>@frontporchstudioca</strong>.
    </p>
    <div style="display: flex; flex-direction: column; gap: 12px;">
      <a href="/index.php#pricing" class="btn btn-outline" style="justify-content: center;">Alternatively, Browse Fixed Support Blocks →</a>
    </div>
  </div>
</div>

<!-- JavaScript Engine to trigger Tidio Widget -->
<script>
function openChatBot(contextSource) {
    // Check if the Tidio chat object exists on the frontend window
    if (typeof tidioChatApi !== 'undefined') {
        tidioChatApi.open();
    } else {
        // Safe UX fallback if an adblocker or slow connection delays the widget script
        alert("Our consultation assistant is loading in the bottom corner. If it does not pop up automatically, please write to us directly at contact@princegeorgedesign.com!");
    }
}
</script>

<?php 
// Pulls in the <footer> and the external script.js
include_once(__DIR__ . '/../footer.php'); 
?>
