<h1>Contact Handler</h1>

<b>Description:</b>
<p>The Contact Handler package is a versatile solution for managing contact form submissions on your website. This package seamlessly integrates with your web application, allowing users to submit their contact details through a form. Upon submission, the package not only sends a notification email to the designated admin but also securely stores the contact details in a database for future reference.</p>
<h2>
✨ Features
</h2>
<b>
Email Notification:</b> Receive instant email notifications with user-submitted contact details to keep your admin informed and responsive.<br>

<b>Database Storage:</b> Safely store and organize contact details in a database, facilitating easy retrieval and management of user interactions.<br>
<b>Customizable Configuration:</b> Tailor the package to suit your specific needs with easy-to-configure settings for email templates, database connection, and more.<br>
<b>Secure and Efficient:</b> Prioritize the security of user information with built-in encryption and adopt an efficient approach to handle contact submissions seamlessly.
<br>
Implement Contact Handler to enhance your website's communication capabilities, ensuring prompt responses and organized storage of valuable

<h2>✨Quick Install</h2>
<p><b>First run these command only if mininum-satable is not set to developer (Optional)</b></p>
<p>composer config minimum-stability dev</p>
<p>composer config prefer-stable true</p>
<p><b>Second run below command to install and setup</b></p>
<p>composer require jivan_subedi/contact_handler</p>
<p>php artisan migrate</p>
<p>change send_mail_to to your destination email from config/contact.php</p>
<p><b>Set below lines in your .env file</b></p>
<p>MAIL_MAILER= your mail transfer protocol eg.smtp <br>
MAIL_HOST= your mail host eg.smtp.gmail.com<br>
MAIL_PORT= your mail port eg.465<br>
MAIL_USERNAME= your email eg.someone@example.com<br>
MAIL_PASSWORD= your password eg.12345678</p>

