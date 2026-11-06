@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Join Us</h1>
        <p class="page-subtitle">Become Part of the SpikeZone Family</p>
    </div>
</section>

<!-- Membership Introduction -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Membership</h2>
            <p class="section-subtitle">Start your volleyball journey with us today</p>
        </div>
        <p class="intro-text">Whether you're looking to learn the basics, compete at a high level, or simply have fun with friends, SpikeZone has a place for you. Our welcoming community and professional coaching make it easy to get started and grow as a player.</p>
    </div>
</section>

<!-- Membership Benefits -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Membership Benefits</h2>
        </div>
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">🏐</div>
                <h3 class="benefit-title">Expert Coaching</h3>
                <p class="benefit-text">Learn from certified coaches with years of playing and coaching experience</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">👥</div>
                <h3 class="benefit-title">Great Community</h3>
                <p class="benefit-text">Join a supportive family of players who become lifelong friends</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">🏆</div>
                <h3 class="benefit-title">Competition Opportunities</h3>
                <p class="benefit-text">Participate in local, regional, and national tournaments</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">💪</div>
                <h3 class="benefit-title">Fitness & Health</h3>
                <p class="benefit-text">Stay active with volleyball-specific training and conditioning</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">🎓</div>
                <h3 class="benefit-title">Skill Development</h3>
                <p class="benefit-text">Structured programs for all levels from beginner to elite</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">🎉</div>
                <h3 class="benefit-title">Social Events</h3>
                <p class="benefit-text">Enjoy team bonding activities, parties, and club gatherings</p>
            </div>
        </div>
    </div>
</section>

<!-- Joining Instructions -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">How to Join</h2>
        </div>
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3 class="step-title">Reach Out</h3>
                <p class="step-text">Submit the enquiry form below or contact us directly via email or phone</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h3 class="step-title">Tryout Session</h3>
                <p class="step-text">Attend a free trial session to meet the coaches and experience SpikeZone</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h3 class="step-title">Get Placed</h3>
                <p class="step-text">We'll recommend the best team based on your skill level and goals</p>
            </div>
            <div class="step-card">
                <div class="step-number">4</div>
                <h3 class="step-title">Start Playing</h3>
                <p class="step-text">Complete registration and begin your SpikeZone journey!</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Contact Information</h2>
        </div>
        <div class="contact-grid">
            <div class="contact-card">
                <h3>📧 Email</h3>
                <p>info@spikezone.org</p>
            </div>
            <div class="contact-card">
                <h3>📞 Phone</h3>
                <p>(555) 123-4567</p>
            </div>
            <div class="contact-card">
                <h3>📍 Location</h3>
                <p>SpikeZone Sports Facility<br>123 Court Avenue<br>Sports City, SC 12345</p>
            </div>
        </div>
    </div>
</section>

<!-- Membership Enquiry Form -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Membership Enquiry Form</h2>
            <p class="section-subtitle">Send us your details and we'll get back to you</p>
        </div>
        <div class="notice-box" style="margin-bottom: 2rem;">
            <strong>Demonstration Form:</strong> This form is for demonstration purposes only. It does not actually submit or store enquiries.
        </div>
        <form class="enquiry-form" id="enquiryForm" novalidate>
            <p class="form-required-note"><span class="required-asterisk">*</span> Required fields</p>
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName" class="form-label">First Name <span class="required-asterisk">*</span></label>
                    <input type="text" id="firstName" name="firstName" class="form-input" required>
                    <span class="form-error" id="error-firstName"></span>
                </div>
                <div class="form-group">
                    <label for="lastName" class="form-label">Last Name <span class="required-asterisk">*</span></label>
                    <input type="text" id="lastName" name="lastName" class="form-input" required>
                    <span class="form-error" id="error-lastName"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email" class="form-label">Email Address <span class="required-asterisk">*</span></label>
                    <input type="email" id="email" name="email" class="form-input" required>
                    <span class="form-error" id="error-email"></span>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number <span class="required-asterisk">*</span></label>
                    <input type="tel" id="phone" name="phone" class="form-input" required placeholder="e.g. 5551234567">
                    <span class="form-error" id="error-phone"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="age" class="form-label">Age <span class="required-asterisk">*</span></label>
                <input type="number" id="age" name="age" class="form-input" min="12" max="65" required>
                <span class="form-error" id="error-age"></span>
            </div>
            <div class="form-group">
                <label for="experience" class="form-label">Volleyball Experience <span class="required-asterisk">*</span></label>
                <select id="experience" name="experience" class="form-select" required>
                    <option value="">Select experience level</option>
                    <option value="beginner">Complete Beginner</option>
                    <option value="beginner-intermediate">Beginner-Intermediate</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced/Competitive</option>
                </select>
                <span class="form-error" id="error-experience"></span>
            </div>
            <div class="form-group">
                <label for="teamInterest" class="form-label">Team of Interest <span class="required-asterisk">*</span></label>
                <select id="teamInterest" name="teamInterest" class="form-select" required>
                    <option value="">Select team</option>
                    <option value="development">Development Squad</option>
                    <option value="competitive">Competitive Squad</option>
                    <option value="recreational">Recreational Squad</option>
                    <option value="unsure">Not Sure</option>
                </select>
                <span class="form-error" id="error-teamInterest"></span>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message (Optional)</label>
                <textarea id="message" name="message" class="form-textarea" rows="5" placeholder="Tell us about your goals or any questions you have..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large">Submit Enquiry</button>
            <div id="formSuccess" class="form-success" style="display: none;">
                Thank you for your interest in SpikeZone Volleyball Club! This is a demonstration form - no data was actually submitted.
            </div>
        </form>
    </div>
</section>
@endsection
