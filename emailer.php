<?php
// Set the content type header to application/json, ensuring the frontend knows how to parse the response.
header('Content-Type: application/json');

// -----------------------------------------------------------------------------
// 1. CONFIGURATION
// -----------------------------------------------------------------------------

// **MANDATORY: REPLACE THIS WITH the actual email address hosted on your cPanel server.**
// This is where all contact form submissions will be sent.
$recipient_email = 'info@techvision.com.sg'; // Example: The actual mailbox

// **RECOMMENDED: Use a 'From' email that is also a valid account on your server.**
// Set this to the same mailbox or a generic one like webmaster@
$sender_email = 'info@techvision.com.sg'; // Set to the same address!


// -----------------------------------------------------------------------------
// 2. INPUT RETRIEVAL AND VALIDATION
// -----------------------------------------------------------------------------

// Check if the request method is POST. If not, reject the request.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit;
}

// Retrieve and sanitize/validate the input fields from the Svelte form.
// NOTE: The keys ('name', 'email', 'phone', 'message') MUST match the 'name' 
// attributes in your Svelte HTML and the keys used in your Svelte 'fetch' body.

$name    = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email   = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone   = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING); // Keeping it string to allow various formats
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Basic field validation check
if (!$name || !$email || !$phone || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400); // Bad Request
    echo json_encode(["status" => "error", "message" => "Please fill out all fields correctly."]);
    exit;
}

// -----------------------------------------------------------------------------
// 3. EMAIL CONSTRUCTION
// -----------------------------------------------------------------------------

$subject = "New Contact Message from " . $name . " (" . $email . ")";

$email_body = "You have received a new contact form submission:\n\n";
$email_body .= "--------------------------------------------------------\n";
$email_body .= "Name: " . $name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Phone: " . $phone . "\n\n";
$email_body .= "Message:\n" . $message . "\n";
$email_body .= "--------------------------------------------------------\n";


// Headers use the sender email you defined above
$headers = "From: " . $sender_email . "\r\n";
// The Reply-To header is critical, as it ensures that when you hit 'Reply'
// in your mailbox, it replies to the user who filled out the form, not the sender email.
$headers .= "Reply-To: " . $email . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


// -----------------------------------------------------------------------------
// 4. SEND EMAIL AND RESPOND TO SVELTE
// -----------------------------------------------------------------------------

// Attempt to send the email using the local server mailer.
if (mail($recipient_email, $subject, $email_body, $headers)) {
    
    // SUCCESS Response (200 OK)
    http_response_code(200); 
    echo json_encode(["status" => "success", "message" => "Thank you! Your message has been sent."]);
    
} else {
    
    // FAILURE Response (500 Internal Server Error)
    http_response_code(500); 
    echo json_encode(["status" => "error", "message" => "Server error: Could not send email. Check cPanel mail logs."]);
    
}

exit;
?>