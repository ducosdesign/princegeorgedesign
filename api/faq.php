<?php 
// Pulls in the <head>, <nav>, and external style.css
include_once(__DIR__ . '/../header.php'); 
?>

<!-- HERO SECTION -->
<section class="hero" style="min-height: 50svh; justify-content: center;">
  <div class="hero-tag">Support Center</div>
  <div class="hero-eyebrow">Clear Answers. No Jargon.</div>
  <h1>We’ve heard it all.<br><em>Here’s the lowdown.</em></h1>
  <div class="hero-bottom">
    <p class="hero-desc">
      Everything you need to know about how Prince George Design keeps your Canadian business running smoothly.
    </p>
  </div>
</section>

<!-- FAQ LIST -->
<section id="faq-deep-dive" style="padding-top: 0;">
  <div class="section-label">Common Questions</div>
  <h2 class="section-heading">Tailored for<br><em>Canadian Commerce.</em></h2>

  <div class="faq-list reveal">
    <!-- Q1 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        What is Prince George Design and how do you help?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        We are a premium digital support studio specializing in high-performance Shopify and WordPress maintenance. We operate as an ongoing technical partner for Canadian business owners, handling everything from custom development and speed optimization to local SEO and routine site health. We take the technical pain out of e-commerce so you can focus on growth.
      </div>
    </div>

    <!-- Q2 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        Does service start immediately after my purchase?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        Once you secure a support block, we respond within our core Canadian work hours (Monday to Friday). All tasks are queued as they arrive. Small requests (under 3 hours) are typically addressed within 1–2 business days, while larger strategic projects are scheduled with a proportionate timeline.
      </div>
    </div>

    <!-- Q3 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        What if my task is urgent?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        For critical site issues, you can utilize our Priority Service. By adding "PRIORITY" to your email subject line, your task moves to the absolute top of our queue and is billed at double the time spent to ensure immediate resolution.
      </div>
    </div>

    <!-- Q4 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        What are your working hours?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        Our core developers work Monday through Friday during standard North American business hours, ensuring we are available when you are. We are closed on weekends and Canadian statutory holidays.
      </div>
    </div>

    <!-- Q5 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        What happens to my unused support hours?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        We only bill for the exact time spent on your tasks. Any unused time remains in your account as credits and is valid for up to one full year from the date of purchase.
      </div>
    </div>

    <!-- Q6 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        Can you provide training or technical advice?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        Absolutely. Many of our partners use their hours for 1-on-1 walkthroughs or custom documentation on how to manage specific areas of their Shopify or WordPress stores. We provide detailed task reports and technical roadmaps for every project we touch.
      </div>
    </div>

    <!-- Q7 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        Can I pay after the work is completed?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        To keep our processes lean and our focus on development rather than debt collection, we operate strictly on a pre-paid support block model. This allows us to provide instant developer access without administrative delays.
      </div>
    </div>

    <!-- Q8 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        Can I get an estimate before I buy a package?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        We offer a special onboarding incentive for new partners to assess their site in-depth. We don't provide free quotes because we don't bake "unpaid sales time" into our rates—this keeps our CAD pricing competitive for everyone. We spend our time doing the work, not just talking about it.
      </div>
    </div>

    <!-- Q9 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        What payment methods do you accept?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
        We accept all major credit cards through our secure checkout, processed in CAD to ensure no hidden exchange fees for our Canadian partners.
      </div>
    </div>

  

    <!-- Q11 -->
    <div class="faq-item">
      <button class="faq-q" onclick="toggleFaq(this)">
        How do we communicate?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-a">
      Our primary methods of support are via email and our live chat box. This ensures we maintain a clear digital record of all technical updates while staying instantly accessible for quick check-ins and real-time assistance.      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<div class="cta-section">
  <div class="cta-left">
    <h2>Still have<br>questions for<br>our <em>team?</em></h2>
    <div>
      <div class="cta-contact-item">
        <span class="cta-contact-label">Email</span>
        <a href="mailto:contact@princegeorgedesign.com" class="cta-contact-value">contact@princegeorgedesign.com</a>
      </div>
    </div>
  </div>
  <div class="cta-right">
    <p style="font-size: 1rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 32px;">We're here to make your web experience effortless. Reach out for a direct conversation with a Local developer.</p>
    <div style="display: flex; flex-direction: column; gap: 12px;">
      <a href="/index#pricing" class="btn btn-accent" style="justify-content: center;">View Support Blocks →</a>
    </div>
  </div>
</div>

<?php 
// Pulls in the <footer> and the external script.js
include_once(__DIR__ . '/../footer.php'); 
?>
