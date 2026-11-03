@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-background">
        <img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?w=1920&h=1080&fit=crop" alt="SpikeZone Volleyball Club players in action" class="hero-image">
        <div class="hero-overlay"></div>
    </div>
    <div class="hero-content">
        <h1 class="hero-title">Welcome to <span class="hero-highlight">SpikeZone</span> Volleyball Club</h1>
        <p class="hero-subtitle">Where Passion Meets Performance. Train. Compete. Belong.</p>
        <div class="hero-buttons">
            <a href="{{ url('/join') }}" class="btn btn-primary">Join Us Today</a>
            <a href="{{ url('/about') }}" class="btn btn-secondary">Discover Our Club</a>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">About SpikeZone</h2>
            <p class="section-subtitle">A premier volleyball club dedicated to developing players of all skill levels</p>
        </div>
        <p class="intro-text">SpikeZone Volleyball Club is a thriving community of athletes, coaches, and enthusiasts united by our love for the game. We provide a supportive environment where players can develop their skills, build lasting friendships, and compete at the highest level. Whether you're a beginner taking your first steps on the court or an experienced player looking to elevate your game, SpikeZone is your home.</p>
    </div>
</section>

<!-- Statistics Section -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Club in Numbers</h2>
            <p class="section-subtitle">Our impact and growth over the years</p>
        </div>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">👥</div>
                <div class="stat-number">150+</div>
                <div class="stat-label">Active Members</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🏐</div>
                <div class="stat-number">3</div>
                <div class="stat-label">Competitive Teams</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">🏆</div>
                <div class="stat-number">25+</div>
                <div class="stat-label">Tournaments Annually</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⭐</div>
                <div class="stat-number">10+</div>
                <div class="stat-label">Years of Excellence</div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events Preview -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Events</h2>
            <p class="section-subtitle">Training sessions, matches and tournaments on the horizon</p>
        </div>
        <div class="events-grid">
            <div class="event-card">
                <div class="event-date">
                    <span class="event-month">NOV</span>
                    <span class="event-day">05</span>
                </div>
                <div class="event-details">
                    <h3 class="event-title">Technical Skills Training</h3>
                    <p class="event-meta">📍 Main Court • ⏰ 6:00 PM - 8:00 PM</p>
                    <p class="event-description">Focus on passing, setting, and footwork fundamentals. Open to Development and Recreational squads.</p>
                    <span class="event-type">Training</span>
                </div>
            </div>
            <div class="event-card">
                <div class="event-date">
                    <span class="event-month">NOV</span>
                    <span class="event-day">08</span>
                </div>
                <div class="event-details">
                    <h3 class="event-title">SpikeZone vs. Coastal Crushers</h3>
                    <p class="event-meta">📍 SpikeZone Main Court • ⏰ 3:00 PM - 6:00 PM</p>
                    <p class="event-description">Friendly exhibition match between our Competitive Squad and Coastal Crushers. All members welcome to watch!</p>
                    <span class="event-type event-type-match">Friendly Match</span>
                </div>
            </div>
            <div class="event-card event-card-featured">
                <div class="event-date">
                    <span class="event-month">NOV</span>
                    <span class="event-day">22-24</span>
                </div>
                <div class="event-details">
                    <h3 class="event-title">Regional Autumn Classic Tournament</h3>
                    <p class="event-meta">📍 Metro Sports Complex • ⏰ All Day</p>
                    <p class="event-description">Our flagship tournament featuring teams from across the region. SpikeZone's Competitive Squad will be participating in Division 1.</p>
                    <span class="event-type event-type-tournament">Tournament</span>
                </div>
            </div>
        </div>
        <div class="cta-center" style="margin-top: 2.5rem;">
            <a href="{{ url('/events') }}" class="btn btn-primary btn-large">View All Events</a>
        </div>
    </div>
</section>

<!-- Featured Activities -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Activities</h2>
            <p class="section-subtitle">Discover what makes SpikeZone special</p>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1547347298-4074fc3086f0?w=800&h=500&fit=crop" alt="Professional training session">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Professional Training</h3>
                    <p class="card-text">Expert coaching sessions focused on technique, strategy, and physical conditioning led by certified volleyball coaches.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=800&h=500&fit=crop" alt="Competitive volleyball match">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Competitive Play</h3>
                    <p class="card-text">Participate in local and regional tournaments, representing SpikeZone with pride and sportsmanship.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?w=800&h=500&fit=crop" alt="Team bonding activities">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Community & Fun</h3>
                    <p class="card-text">Build lifelong friendships through team events, social gatherings, and recreational play for all skill levels.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Highlights -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Teams</h2>
            <p class="section-subtitle">Three squads, one family</p>
        </div>
        <div class="highlights-grid">
            <div class="highlight-item">
                <h3>Development Squad</h3>
                <p>Nurturing young talent and beginners with foundational skills and game knowledge.</p>
            </div>
            <div class="highlight-item">
                <h3>Competitive Squad</h3>
                <p>Elite athletes competing at regional and national levels with rigorous training.</p>
            </div>
            <div class="highlight-item">
                <h3>Recreational Squad</h3>
                <p>Fun, friendly play for those who love the game without the pressure of competition.</p>
            </div>
        </div>
        <div class="cta-center">
            <a href="{{ url('/teams') }}" class="btn btn-primary btn-large">Explore Our Teams</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Spike With Us?</h2>
            <p class="cta-text">Join the SpikeZone family today and take your volleyball journey to the next level</p>
            <a href="{{ url('/join') }}" class="btn btn-primary btn-large">Join Us Now</a>
        </div>
    </div>
</section>
@endsection
