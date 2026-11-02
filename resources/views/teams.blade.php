@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Our Teams</h1>
        <p class="page-subtitle">Three Squads, One SpikeZone Family</p>
    </div>
</section>

<!-- Development Squad -->
<section class="section">
    <div class="container">
        <div class="team-section team-section-enhanced">
            <div class="team-header">
                <div class="team-header-content">
                    <h2 class="team-name">Development Squad</h2>
                    <p class="team-tagline">Building the Foundation</p>
                </div>
                <span class="team-badge">Beginners & Youth</span>
            </div>
            <div class="two-column">
                <div class="column-image">
                    <img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?w=800&h=600&fit=crop" alt="Development squad training">
                </div>
                <div class="column-content">
                    <p class="team-intro">Our Development Squad is designed for beginners, young players, and those new to competitive volleyball. We focus on building strong fundamentals, proper technique, and game awareness in a supportive, encouraging environment.</p>
                    
                    <div class="team-info-card">
                        <h4 class="team-info-title">Training Information</h4>
                        <ul class="team-list team-list-enhanced">
                            <li><strong>Schedule:</strong> 2-3 sessions per week</li>
                            <li><strong>Duration:</strong> 90-120 minutes per session</li>
                            <li><strong>Focus:</strong> Fundamentals, footwork, passing, serving, and basic tactics</li>
                            <li><strong>Coaching:</strong> Led by experienced coaches with emphasis on skill development</li>
                        </ul>
                    </div>
                    
                    <div class="team-info-card">
                        <h4 class="team-info-title">Target Audience</h4>
                        <p>Ages 12-18, complete beginners to intermediate players looking to build a solid foundation and develop their passion for the game.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Competitive Squad -->
<section class="section section-alt">
    <div class="container">
        <div class="team-section team-section-enhanced">
            <div class="team-header">
                <div class="team-header-content">
                    <h2 class="team-name">Competitive Squad</h2>
                    <p class="team-tagline">Excellence in Competition</p>
                </div>
                <span class="team-badge team-badge-orange">Elite Athletes</span>
            </div>
            <div class="two-column reverse">
                <div class="column-image">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=800&h=600&fit=crop" alt="Competitive squad match">
                </div>
                <div class="column-content">
                    <p class="team-intro">Our Competitive Squad represents SpikeZone at the highest levels of play. Comprising our most dedicated and skilled athletes, this team trains intensively and competes in regional and national tournaments throughout the season.</p>
                    
                    <div class="team-info-card">
                        <h4 class="team-info-title">Training Information</h4>
                        <ul class="team-list team-list-enhanced">
                            <li><strong>Schedule:</strong> 4-5 sessions per week plus matches</li>
                            <li><strong>Duration:</strong> 2-3 hours per training session</li>
                            <li><strong>Focus:</strong> Advanced tactics, position-specific training, physical conditioning, and video analysis</li>
                            <li><strong>Coaching:</strong> High-performance coaching with individualized development plans</li>
                        </ul>
                    </div>
                    
                    <div class="team-info-card">
                        <h4 class="team-info-title">Target Audience</h4>
                        <p>Experienced players (ages 16-25) with competitive experience who are committed to intensive training and tournament participation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recreational Squad -->
<section class="section">
    <div class="container">
        <div class="team-section team-section-enhanced">
            <div class="team-header">
                <div class="team-header-content">
                    <h2 class="team-name">Recreational Squad</h2>
                    <p class="team-tagline">Play for the Love of the Game</p>
                </div>
                <span class="team-badge">Fun & Fitness</span>
            </div>
            <div class="two-column">
                <div class="column-image">
                    <img src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?w=800&h=600&fit=crop" alt="Recreational squad play">
                </div>
                <div class="column-content">
                    <p class="team-intro">Our Recreational Squad is perfect for players who want to enjoy volleyball in a relaxed, friendly atmosphere. Whether you're staying active, socializing, or just having fun, this team offers a great way to be part of the SpikeZone community.</p>
                    
                    <div class="team-info-card">
                        <h4 class="team-info-title">Training Information</h4>
                        <ul class="team-list team-list-enhanced">
                            <li><strong>Schedule:</strong> 1-2 sessions per week</li>
                            <li><strong>Duration:</strong> 60-90 minutes per session</li>
                            <li><strong>Focus:</strong> Game play, skill refinement, fitness, and social interaction</li>
                            <li><strong>Coaching:</strong> Friendly, supportive coaching with emphasis on enjoyment</li>
                        </ul>
                    </div>
                    
                    <div class="team-info-card">
                        <h4 class="team-info-title">Target Audience</h4>
                        <p>Players of all ages and skill levels who prioritize fun, fitness, and community over competitive pressure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Volleyball Positions -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Common Volleyball Positions</h2>
            <p class="section-subtitle">Understanding the roles on court</p>
        </div>
        <div class="positions-grid">
            <div class="position-card">
                <div class="position-header">
                    <h3 class="position-name">Setter</h3>
                    <span class="position-badge">Playmaker</span>
                </div>
                <p class="position-description">The "quarterback" of the team. Sets up attacks by delivering accurate passes to hitters and runs the team's offensive strategy.</p>
            </div>
            <div class="position-card">
                <div class="position-header">
                    <h3 class="position-name">Outside Hitter</h3>
                    <span class="position-badge">Power Attacker</span>
                </div>
                <p class="position-description">The primary attacker on the left side of the court. Responsible for spiking, passing, and playing defense.</p>
            </div>
            <div class="position-card">
                <div class="position-header">
                    <h3 class="position-name">Opposite</h3>
                    <span class="position-badge">Versatile Scorer</span>
                </div>
                <p class="position-description">Plays opposite the setter. Provides a strong attacking option and often takes on key blocking responsibilities.</p>
            </div>
            <div class="position-card">
                <div class="position-header">
                    <h3 class="position-name">Middle Blocker</h3>
                    <span class="position-badge">Wall at the Net</span>
                </div>
                <p class="position-description">The team's main blocker at the net. Specializes in quick attacks and shutting down opponent hitters with strong blocks.</p>
            </div>
            <div class="position-card position-card-wide">
                <div class="position-header">
                    <h3 class="position-name">Libero</h3>
                    <span class="position-badge">Defensive Specialist</span>
                </div>
                <p class="position-description">A defensive specialist who wears a different colored jersey. Focuses on passing, digging, and serve reception with exceptional ball control.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Find Your Perfect Team</h2>
            <p class="cta-text">Ready to join one of our squads? We welcome players of all levels - start your SpikeZone journey today</p>
            <div class="cta-buttons">
                <a href="{{ url('/join') }}" class="btn btn-primary btn-large">Join SpikeZone Now</a>
                <a href="{{ url('/about') }}" class="btn btn-secondary btn-large">Learn More About Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
