<?php
// Ensure this script only runs via POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /contact");
    exit;
}

// 1. Bot Protection (Honeypot)
if (!empty($_POST['website_url'])) {
    die("Bot detected.");
}

// 2. Sanitize Inputs
$name = strip_tags(trim($_POST["name"]));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = strip_tags(trim($_POST["message"]));

// 3. Get API Key from Vercel Env Variables (See image_2bbc9a.png)
$apiKey = getenv('RESEND_API_KEY');

// 4. Prepare Payload for Resend
$payload = [
    "from" => "Studio Inquiry <contact@princegeorgedesign.com>",
    "to" => ["contact@princegeorgedesign.com"],
    "reply_to" => $email, // Allows you to just hit 'Reply' in your inbox
    "subject" => "New Project Inquiry: $name",
    "html" => "
        <div style='font-family: sans-serif; line-height: 1.5; color: #333;'>
            <h2 style='color: #000;'>New Studio Inquiry</h2>
            <p><strong>From:</strong> $name ($email)</p>
            <p><strong>Message:</strong></p>
            <div style='background: #f4f4f4; padding: 20px; border-radius: 8px;'>$message</div>
        </div>
    "
];

// 5. Send via cURL
$ch = curl_init("https://api.resend.com/emails");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// 6. Handle the Result
if ($httpCode === 200 || $httpCode === 201) {
    header("Location: /contact?status=success");
} else {
    // If it fails, redirect with error status
    header("Location: /contact?status=error");
}
exit;
