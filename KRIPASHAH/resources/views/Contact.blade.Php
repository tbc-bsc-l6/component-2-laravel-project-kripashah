<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Clinic</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <div class="main-content">
            <h1>Contact Us</h1>
            <p>Reach out for inquiries or clinical submissions using the forms below.</p>

            <h2>Contact Information</h2>
            <table class="info-table">
                <tr><th>Address</th><td>456 Clinic Avenue<br>Medical City, State 67890</td></tr>
                <tr><th>Phone</th><td>+1 (555) 987-6543</td></tr>
                <tr><th>Email</th><td>contact@clinicexample.com</td></tr>
                <tr><th>Hours</th><td>Mon-Fri: 8AM-6PM<br>Sat: 9AM-1PM</td></tr>
            </table>

            <h2>Sample Case Report Form (CRF)</h2>
            <p>Basic CRF-style table for clinical data entry.</p>
            <form action="#" method="post">
                <table class="crf-table">
                    <tr><th>Field</th><th>Value / Entry</th></tr>
                    <tr><td>Patient ID</td><td><input type="text" name="patient_id"></td></tr>
                    <tr><td>Visit Date</td><td><input type="date" name="visit_date"></td></tr>
                    <tr><td>Subject Initials</td><td><input type="text" name="initials" maxlength="3"></td></tr>
                    <tr><td>Blood Pressure</td><td><input type="text" name="bp" placeholder="e.g., 120/80"></td></tr>
                    <tr><td>Heart Rate (bpm)</td><td><input type="number" name="hr"></td></tr>
                    <tr><td>Adverse Events</td><td><textarea name="adverse_events" rows="3"></textarea></td></tr>
                    <tr><td>Notes</td><td><textarea name="notes" rows="4"></textarea></td></tr>
                </table>
                <button type="submit" class="submit-btn">Submit CRF Data</button>
            </form>

            <h2>General Message</h2>
            <form action="#" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>

        <div class="sidebar">
            <h3>Our Location</h3>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086!2d-122.419!3d37.7749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDQ2JzI5LjIiTiAxMjLCsDI1JzA5LjQiVw!5e0!3m2!1sen!2sus!4v1630000000000" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <h3>Quick Contact</h3>
            <p><strong>Phone:</strong> +1 (555) 987-6543<br>
               <strong>Email:</strong> contact@clinicexample.com</p>

            <h3>Office Hours</h3>
            <ul>
                <li>Monday - Friday: 8:00 AM - 6:00 PM</li>
                <li>Saturday: 9:00 AM - 1:00 PM</li>
                <li>Sunday: Closed</li>
            </ul>

            <h3>Need Help?</h3>
            <p>Call us or fill out the form. We're here to assist you!</p>
        </div>
    </div>
</body>
</html>