<?php
$config = [];

$config['system_dump'] = false;
$config['variable_dump'] = false;

// Debug configuration
$config['debug'] = true; // Enable debug mode (true/false)

define('BASE', 'http://localhost/PureFrame/'); // Base URL for the site

// Site configuration
$config['app_name'] = "My Website"; // Site name
$config['app_desc'] = "My Website Description"; // Site description

// Email configuration
$config['smtp_host'] = "smtp.mailtrap.io"; // SMTP server hostname
$config['smtp_port'] = 2525; // SMTP server port
$config['smtp_username'] = "YOUR_SMTP_USERNAME"; // SMTP username
$config['smtp_password'] = "YOUR_SMTP_PASSWORD"; // SMTP password
$config['smtp_email'] = "admin@example.com"; // Administrator email address
$config['smtp_name'] = "Sender"; // Sender name

// Routes configuration
$config['defcon'] = 'Sample'; // Default controller
$config['defmet'] = 'index'; // Default method

$config['temp_eng'] = true; // Enable template engine
$config['mail_lib'] = true; // Enable mail library

return $config;
