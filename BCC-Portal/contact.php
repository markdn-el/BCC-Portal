<?php include 'header.php'; ?>

<main class="contact-container">
    <section class="contact-section">
        <div class="contact-header">
            <h2>Contact Us</h2>
            <p>Have questions? Send us a message and we will get back to you shortly.</p>
        </div>
        
        <form action="process.php" method="POST" class="contact-form">
            <div class="contact-form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            
            <div class="contact-form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="example@email.com" required>
            </div>
            
            <div class="contact-form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="What is this regarding?" required>
            </div>
            
            <div class="contact-form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>
            </div>
            
            <button type="submit" class="contact-btn">Send Message</button>
        </form>
    </section>
</main>

<?php include 'footer.php'; ?>