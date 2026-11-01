@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">About Us</h1>
        <p class="page-subtitle">Our Story, Mission, and Values</p>
    </div>
</section>

<!-- Club Introduction -->
<section class="section">
    <div class="container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">Club Introduction</h2>
                <p>Founded with a passion for volleyball, SpikeZone Volleyball Club has grown into one of the region's most respected and vibrant volleyball communities. We bring together players of all ages and skill levels who share a common love for the sport.</p>
                <p>Our club is built on the principles of excellence, respect, teamwork, and sportsmanship. We believe that volleyball is more than just a game—it's a way to build character, forge lifelong friendships, and develop discipline both on and off the court.</p>
            </div>
            <div class="column-image">
                <img src="https://images.unsplash.com/photo-1592656094267-764a45160876?w=800&h=600&fit=crop" alt="Volleyball team">
            </div>
        </div>
    </div>
</section>

<!-- Club Background -->
<section class="section section-alt">
    <div class="container">
        <div class="two-column reverse">
            <div class="column-content">
                <h2 class="section-title">Our Background</h2>
                <p>SpikeZone began as a small group of volleyball enthusiasts who wanted to create a welcoming space for players to train, compete, and grow together. Over the years, we've evolved into a comprehensive club offering multiple teams, professional coaching, and year-round programming.</p>
                <p>From grassroots development to elite competition, we've remained committed to our founding vision: making high-quality volleyball accessible to everyone while nurturing the next generation of players.</p>
            </div>
            <div class="column-image">
                <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?w=800&h=600&fit=crop" alt="Volleyball court action">
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Mission, Vision & Core Values</h2>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">🎯</div>
                <h3 class="value-title">Our Mission</h3>
                <p class="value-text">To develop skilled, confident, and respectful volleyball players by providing quality coaching, competitive opportunities, and a supportive community that fosters growth on and off the court.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">👁️</div>
                <h3 class="value-title">Our Vision</h3>
                <p class="value-text">To be the premier volleyball club in the region, recognized for excellence in player development, sportsmanship, and community impact.</p>
            </div>
        </div>
        
        <div class="core-values">
            <h3 class="core-values-title">Core Values</h3>
            <div class="values-list">
                <div class="value-item">
                    <strong>Excellence</strong> - Striving for the highest standards in everything we do
                </div>
                <div class="value-item">
                    <strong>Respect</strong> - Treating teammates, opponents, officials, and coaches with dignity
                </div>
                <div class="value-item">
                    <strong>Teamwork</strong> - Success comes through collaboration and mutual support
                </div>
                <div class="value-item">
                    <strong>Growth Mindset</strong> - Embracing challenges as opportunities to learn and improve
                </div>
                <div class="value-item">
                    <strong>Inclusivity</strong> - Welcoming players of all backgrounds, abilities, and experience levels
                </div>
                <div class="value-item">
                    <strong>Integrity</strong> - Playing with honesty, fairness, and unwavering sportsmanship
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
