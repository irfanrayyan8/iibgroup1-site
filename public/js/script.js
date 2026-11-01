// SpikeZone Volleyball Club JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
        
        // Close menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
            });
        });
    }
    
    // Form Validation for Join Us page
    const enquiryForm = document.getElementById('enquiryForm');
    if (enquiryForm) {
        enquiryForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear previous errors
            const errorElements = document.querySelectorAll('.form-error');
            errorElements.forEach(el => {
                el.textContent = '';
            });
            
            const formSuccess = document.getElementById('formSuccess');
            if (formSuccess) {
                formSuccess.style.display = 'none';
            }
            
            let isValid = true;
            
            // Get form values
            const firstName = document.getElementById('firstName').value.trim();
            const lastName = document.getElementById('lastName').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const age = document.getElementById('age').value.trim();
            const experience = document.getElementById('experience').value;
            const teamInterest = document.getElementById('teamInterest').value;
            
            // Validate First Name
            if (firstName === '') {
                document.getElementById('error-firstName').textContent = 'First name is required';
                isValid = false;
            }
            
            // Validate Last Name
            if (lastName === '') {
                document.getElementById('error-lastName').textContent = 'Last name is required';
                isValid = false;
            }
            
            // Validate Email
            if (email === '') {
                document.getElementById('error-email').textContent = 'Email is required';
                isValid = false;
            } else {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    document.getElementById('error-email').textContent = 'Please enter a valid email address';
                    isValid = false;
                }
            }
            
            // Validate Phone
            if (phone === '') {
                document.getElementById('error-phone').textContent = 'Phone number is required';
                isValid = false;
            } else {
                const phoneRegex = /^[\d\s\-\+\(\)]+$/;
                if (!phoneRegex.test(phone) || phone.length < 10) {
                    document.getElementById('error-phone').textContent = 'Please enter a valid phone number';
                    isValid = false;
                }
            }
            
            // Validate Age
            if (age === '') {
                document.getElementById('error-age').textContent = 'Age is required';
                isValid = false;
            } else {
                const ageNum = parseInt(age);
                if (isNaN(ageNum) || ageNum < 12 || ageNum > 65) {
                    document.getElementById('error-age').textContent = 'Age must be between 12 and 65';
                    isValid = false;
                }
            }
            
            // Validate Experience
            if (experience === '') {
                document.getElementById('error-experience').textContent = 'Please select your experience level';
                isValid = false;
            }
            
            // Validate Team Interest
            if (teamInterest === '') {
                document.getElementById('error-teamInterest').textContent = 'Please select a team of interest';
                isValid = false;
            }
            
            // If form is valid, show success message (demo only)
            if (isValid) {
                if (formSuccess) {
                    formSuccess.style.display = 'block';
                    formSuccess.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
                // Reset form
                enquiryForm.reset();
            }
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});
