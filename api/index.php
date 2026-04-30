<?php include __DIR__ . '/../header.php'; ?>

<!-- HERO -->
<section class="hero">
    <div class="hero-tags">
        <span class="tag">Shopify Maintenance</span>
        <span class="tag">WordPress Care</span>
        <span class="tag">Speed Optimization</span>
        <span class="tag">Security</span>
    </div>

    <h1 class="hero-title">
        Web support<br />
        <em>made local.</em>
    </h1>

    <p class="hero-sub">
        Premium Shopify &amp; WordPress maintenance for Prince George business owners.
        Reach out by email — we reply within 24 hours.
    </p>

    <div class="hero-cta">
        <a href="mailto:<?php echo $contact_email; ?>" class="btn btn-primary">
            <?php echo $contact_email; ?> <span class="arrow">→</span>
        </a>
        <a href="#pricing" class="btn btn-ghost">View pricing</a>
    </div>

    <div class="hero-promo">
        <span class="promo-label">New Partner Special</span>
        <span class="promo-text"><strong>$75 CAD OFF</strong> your first order — applied automatically at checkout.</span>
    </div>
</section>

<!-- STATS -->
<section class="stats">
    <h2 class="section-title">Reliability you can bank on.</h2>
    <div class="stats-grid">
        <div class="stat-card">
            <span class="stat-num">100%</span>
            <span class="stat-label">Refund Guarantee</span>
        </div>
        <div class="stat-card">
            <span class="stat-num">24h</span>
            <span class="stat-label">Response Time</span>
        </div>
        <div class="stat-card">
            <span class="stat-num">CAD</span>
            <span class="stat-label">Transparent Pricing</span>
        </div>
        <div class="stat-card">
            <span class="stat-num">2s</span>
            <span class="stat-label">Avg. Page Load</span>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="services" id="services">
    <div class="services-head">
        <span class="eyebrow">Services</span>
        <h2 class="section-title">Beyond the basics.</h2>
    </div>

    <div class="services-list">
        <article class="service-row">
            <span class="service-num">{ 01 }</span>
            <div class="service-body">
                <h3>Performance</h3>
                <p>Custom speed optimization to ensure your store loads in under 2 seconds for a better customer experience.</p>
            </div>
        </article>

        <article class="service-row">
            <span class="service-num">{ 02 }</span>
            <div class="service-body">
                <h3>Mobile First</h3>
                <p>Flawless shopping experiences designed specifically for the mobile-heavy traffic your store sees every day.</p>
            </div>
        </article>

        <article class="service-row">
            <span class="service-num">{ 03 }</span>
            <div class="service-body">
                <h3>Security</h3>
                <p>Proactive patches and 24/7 monitoring to protect your business data and customer transactions.</p>
            </div>
        </article>

        <article class="service-row">
            <span class="service-num">{ 04 }</span>
            <div class="service-body">
                <h3>Ongoing Support</h3>
                <p>A direct line to a developer who already knows your site’s history, stack, and quirks.</p>
            </div>
        </article>
    </div>
</section>

<!-- VALUE PROPS -->
<section class="value">
    <h2 class="section-title">Support that actually understands your business.</h2>
    <div class="value-grid">
        <div class="value-card">
            <h3>No Tickets.</h3>
            <p>Skip the help-desk queues. You get a direct line to a developer who knows your site’s history and setup.</p>
        </div>
        <div class="value-card">
            <h3>Safe Updates.</h3>
            <p>We never “auto-update” and hope for the best. Every plugin update is tested in a staging environment first.</p>
        </div>
        <div class="value-card">
            <h3>Local Support.</h3>
            <p>We aren’t a giant agency in another time zone. We’re right here when you need us, working when you work.</p>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="process" id="process">
    <div class="services-head">
        <span class="eyebrow">Our process</span>
        <h2 class="section-title">Four steps. Zero surprises.</h2>
    </div>
    <div class="process-grid">
        <div class="process-step">
            <span class="step-num">01</span>
            <h3>Audit</h3>
            <p>We review your current Shopify or WordPress setup and flag risks before they break.</p>
        </div>
        <div class="process-step">
            <span class="step-num">02</span>
            <h3>Stage</h3>
            <p>Updates and changes are built and tested in staging — your live site stays untouched.</p>
        </div>
        <div class="process-step">
            <span class="step-num">03</span>
            <h3>Deploy</h3>
            <p>Once approved, we ship to production with rollback ready in case anything misbehaves.</p>
        </div>
        <div class="process-step">
            <span class="step-num">04</span>
            <h3>Monitor</h3>
            <p>Continuous uptime, performance, and security monitoring with monthly reporting.</p>
        </div>
    </div>
</section>

<!-- PRICING -->
<section class="pricing" id="pricing">
    <div class="services-head">
        <span class="eyebrow">Pricing</span>
        <h2 class="section-title">Simple plans, in CAD.</h2>
    </div>

    <div class="pricing-grid">
        <div class="price-card">
            <h3>Starter</h3>
            <p class="price-hours">4 Hours of Support</p>
            <p class="price-desc">For small business owners who need the occasional safety net.</p>
            <ul class="price-features">
                <li>Plugin &amp; theme updates</li>
                <li>Uptime monitoring</li>
                <li>Email support</li>
            </ul>
            <a href="mailto:<?php echo $contact_email; ?>" class="btn btn-ghost">Choose Starter</a>
        </div>

        <div class="price-card price-featured">
            <span class="badge">Most popular</span>
            <h3>Growth</h3>
            <p class="price-hours">10 Hours of Support</p>
            <p class="price-desc">For growing stores that need consistent care every month.</p>
            <ul class="price-features">
                <li>Everything in Starter</li>
                <li>Priority response window</li>
                <li>Monthly performance report</li>
                <li>Staging environment</li>
            </ul>
            <a href="mailto:<?php echo $contact_email; ?>" class="btn btn-primary">Choose Growth</a>
        </div>

        <div class="price-card">
            <h3>Scale</h3>
            <p class="price-hours">20 Hours of Support</p>
            <p class="price-desc">For established brands running on Shopify Plus or complex WordPress builds.</p>
            <ul class="price-features">
                <li>Everything in Growth</li>
                <li>Dedicated developer</li>
                <li>Custom feature work</li>
                <li>Quarterly strategy call</li>
            </ul>
            <a href="mailto:<?php echo $contact_email; ?>" class="btn btn-ghost">Choose Scale</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="faq" id="faq">
    <div class="services-head">
        <span class="eyebrow">FAQ</span>
        <h2 class="section-title">Before you reach out.</h2>
    </div>

    <div class="faq-list">
        <details class="faq-item">
            <summary>Do you only work with businesses in Prince George?</summary>
            <p>Local businesses get priority, but we work with clients across BC and Canada. Pricing is always in CAD.</p>
        </details>
        <details class="faq-item">
            <summary>What platforms do you support?</summary>
            <p>Primarily Shopify (including Plus) and WordPress / WooCommerce. If you’re on something else, get in touch and we’ll let you know honestly.</p>
        </details>
        <details class="faq-item">
            <summary>How fast do you respond?</summary>
            <p>Within 24 hours on business days. Growth and Scale partners get priority queueing.</p>
        </details>
        <details class="faq-item">
            <summary>What happens if an update breaks the site?</summary>
            <p>It shouldn’t — every change is tested in staging first. If something does go wrong in production, we roll back immediately at no extra cost.</p>
        </details>
        <details class="faq-item">
            <summary>Is there really a 100% refund guarantee?</summary>
            <p>Yes. If you’re not satisfied with the work delivered in your first month, you get a full refund. No tickets, no friction.</p>
        </details>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2>Let’s keep your store running smoothly.</h2>
    <p>Send a quick note describing your site and what you need help with — we’ll reply within 24 hours.</p>
    <a href="mailto:<?php echo $contact_email; ?>" class="btn btn-primary btn-lg">
        <?php echo $contact_email; ?> <span class="arrow">→</span>
    </a>
</section>

<?php include __DIR__ . '/../footer.php'; ?>
