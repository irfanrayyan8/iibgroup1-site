@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Events</h1>
        <p class="page-subtitle">Training, Matches & Tournaments - Sample Schedule</p>
    </div>
</section>

<!-- Notice -->
<section class="section">
    <div class="container">
        <div class="notice-box">
            <strong>Note:</strong> The events listed below are sample/illustrative events for demonstration purposes and may not represent confirmed real events.
        </div>
    </div>
</section>

<!-- Training Sessions -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Training Sessions</h2>
            <p class="section-subtitle">Regular practice to sharpen your skills</p>
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
                    <span class="event-day">12</span>
                </div>
                <div class="event-details">
                    <h3 class="event-title">Advanced Tactics Workshop</h3>
                    <p class="event-meta">📍 Training Hall B • ⏰ 7:00 PM - 9:00 PM</p>
                    <p class="event-description">Strategic play, blocking techniques, and offensive systems for competitive-level players.</p>
                    <span class="event-type event-type-advanced">Training - Advanced</span>
                </div>
            </div>
            <div class="event-card">
                <div class="event-date">
                    <span class="event-month">NOV</span>
                    <span class="event-day">19</span>
                </div>
                <div class="event-details">
                    <h3 class="event-title">Conditioning & Agility</h3>
                    <p class="event-meta">📍 Fitness Center • ⏰ 5:30 PM - 7:00 PM</p>
                    <p class="event-description">Volleyball-specific fitness training to enhance speed, jumping, and endurance.</p>
                    <span class="event-type">Training</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Friendly Matches -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Friendly Matches</h2>
            <p class="section-subtitle">Build team chemistry through friendly competition</p>
        </div>
        <div class="events-grid">
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
            <div class="event-card">
                <div class="event-date">
                    <span class="event-month">NOV</span>
                    <span class="event-day">16</span>
                </div>
                <div class="event-details">
                    <h3 class="event-title">Mixed Teams Scrimmage</h3>
                    <p class="event-meta">📍 SpikeZone Courts 1-2 • ⏰ 4:00 PM - 6:00 PM</p>
                    <p class="event-description">Mixed squad scrimmage bringing together players from all teams for fun and camaraderie.</p>
                    <span class="event-type event-type-match">Friendly Match</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tournaments -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tournaments</h2>
            <p class="section-subtitle">Compete and showcase your skills</p>
        </div>
        <div class="events-grid">
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
            <div class="event-card">
                <div class="event-date">
                    <span class="event-month">DEC</span>
                    <span class="event-day">07</span>
                </div>
                <div class="event-details">
                    <h3 class="event-title">Holiday Open Tournament</h3>
                    <p class="event-meta">📍 SpikeZone Sports Facility • ⏰ 9:00 AM - 6:00 PM</p>
                    <p class="event-description">One-day open tournament welcoming teams of all skill levels. Recreational squads encouraged to participate!</p>
                    <span class="event-type event-type-tournament">Tournament</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
