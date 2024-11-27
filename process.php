<?php
/*
 * EDUCATIONAL DEMONSTRATION ONLY
 * This script demonstrates how phishing attacks might work.
 * It is illegal and unethical to use this for actual phishing.
 * Created for cybersecurity education purposes only.
 */

// Set header
header('Content-Type: text/html; charset=utf-8');

// Configuration
define('EDUCATIONAL_DEMO', true);

// Disable this script in production environments
if (!defined('EDUCATIONAL_DEMO')) {
    die('This script is for educational demonstration only.');
}

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
    $password = isset($_POST['password']) ? '[REDACTED]' : '';
    
    // Create demonstration output
    $html = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Educational Demonstration - Data Capture</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #f0f0f0;
            }
            .container {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .warning {
                background-color: #ff4444;
                color: white;
                padding: 10px;
                margin-bottom: 20px;
                border-radius: 4px;
                text-align: center;
            }
            .data-display {
                background-color: #f8f9fa;
                padding: 15px;
                border-radius: 4px;
                margin: 20px 0;
            }
            .educational-note {
                background-color: #fff3cd;
                padding: 15px;
                border-radius: 4px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="warning">
                EDUCATIONAL DEMONSTRATION ONLY
            </div>
            
            <h1>Phishing Attack Demonstration</h1>
            
            <p>This page demonstrates how a phishing attack could capture login credentials.</p>
            
            <div class="data-display">
                <h3>Captured Data:</h3>
                <pre>
Username: $username
Password: [REDACTED for security]
Timestamp: {$_SERVER['REQUEST_TIME']}
                </pre>
            </div>
            
            <div class="educational-note">
                <h3>Educational Notes:</h3>
                <ul>
                    <li>In a real phishing attack, this data would be stolen and sent to attackers.</li>
                    <li>Never enter real credentials on unfamiliar or suspicious websites.</li>
                    <li>Always verify the website's URL before logging in.</li>
                    <li>Look for HTTPS and valid SSL certificates.</li>
                    <li>Be suspicious of unexpected login requests.</li>
                </ul>
            </div>
            
            <p><strong>This demonstration is part of a cybersecurity education program.</strong></p>
            <p><a href="index.html">Return to Demo Login Page</a></p>
        </div>
    </body>
    </html>
    HTML;
    
    // Output the demonstration page
    echo $html;
    exit;
}

// If accessed directly without POST data, redirect to index
header('Location: index.html');
exit;