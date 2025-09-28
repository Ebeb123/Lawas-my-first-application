<!-- resources/views/jobs/show.blade.php -->
<x-layout>
    <x-slot:heading>
        {{ $job->title }} Position
    </x-slot:heading>
    
    <!-- Back Navigation -->
    <div class="navigation-section">
        <a href="/jobs" class="back-btn">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
            Back to Jobs
        </a>
        <div class="breadcrumb">
            <span>Jobs</span> → <span>{{ $job->title }}</span>
        </div>
    </div>

    <!-- Main Job Content -->
    <div class="job-hero-section">
        <div class="job-main-card">
            <!-- Job Header -->
            <div class="job-header">
                <div class="job-icon">
                    @if($job->title == 'Director')
                        🦁
                    @elseif($job->title == 'Programmer') 
                        🐺
                    @elseif($job->title == 'Teacher')
                        🦅
                    @else
                        🌿
                    @endif
                </div>
                <h1 class="job-title">{{ $job->title }}</h1>
                <div class="job-subtitle">{{ $job->employer->name ?? 'Wildlife Conservation Team' }}</div>
                <div class="job-salary">{{ $job->salary }} per year</div>
            </div>

            <!-- Job Quick Info -->
            <div class="job-quick-info">
                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div>
                        <div class="info-label">Location</div>
                        <div class="info-value">Global Remote</div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">⏰</div>
                    <div>
                        <div class="info-label">Type</div>
                        <div class="info-value">Full-time</div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">📈</div>
                    <div>
                        <div class="info-label">Experience</div>
                        <div class="info-value">
                            @if($job->title == 'Director')
                                5+ years
                            @elseif($job->title == 'Programmer')
                                2+ years
                            @else
                                3+ years
                            @endif
                        </div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">🎓</div>
                    <div>
                        <div class="info-label">Education</div>
                        <div class="info-value">Bachelor's</div>
                    </div>
                </div>
            </div>

           <!-- Action Buttons -->
<div class="action-buttons">
    <button class="apply-btn primary">Apply Now</button>
    <button class="save-btn secondary">Save Job</button>
    <button class="share-btn secondary">Share</button>

    <!-- Edit Job Button -->
    <a href="/jobs/{{ $job->id }}/edit" class="edit-btn">
        ✏️ Edit Job
    </a>
</div>

<style>
.edit-btn {
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg, #facc15, #fbbf24);
    color: black;
    padding: 1rem 2rem;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(251, 191, 36, 0.3);
}
.edit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(251, 191, 36, 0.5);
}
</style>


        <!-- Job Details Sidebar -->
        <div class="job-sidebar">
            <div class="sidebar-card">
                <h3>About WildLife</h3>
                <p>Leading wildlife conservation organization dedicated to protecting endangered species and their habitats worldwide.</p>
                <div class="company-stats">
                    <div class="stat">
                        <div class="stat-number">500+</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Countries</div>
                    </div>
                </div>
            </div>

            <div class="sidebar-card">
                <h3>Benefits</h3>
                <ul class="benefits-list">
                    <li>🏥 Health Insurance</li>
                    <li>🏖️ 25 Days PTO</li>
                    <li>🎓 Learning Budget</li>
                    <li>🌍 Travel Opportunities</li>
                    <li>💻 Remote Work</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Job Description Sections -->
    <div class="job-description-section">
        <div class="description-card">
            <h2>Job Description</h2>
            <div class="description-content">
                @if($job->title == 'Director')
                    <p>Lead our wildlife conservation efforts as a <strong>Director</strong>. You'll oversee strategic initiatives, manage cross-functional teams, and drive impactful conservation programs globally.</p>
                    <h3>Key Responsibilities:</h3>
                    <ul>
                        <li>Develop and execute conservation strategies</li>
                        <li>Lead a team of 20+ conservation specialists</li>
                        <li>Manage partnerships with international organizations</li>
                        <li>Oversee $2M+ annual conservation budget</li>
                        <li>Present to stakeholders and government officials</li>
                    </ul>
                @elseif($job->title == 'Programmer')
                    <p>Join our tech team as a <strong>Programmer</strong> and help build innovative solutions for wildlife tracking, data analysis, and conservation management systems.</p>
                    <h3>Key Responsibilities:</h3>
                    <ul>
                        <li>Develop wildlife tracking applications</li>
                        <li>Build data visualization dashboards</li>
                        <li>Create mobile apps for field researchers</li>
                        <li>Maintain conservation databases</li>
                        <li>Collaborate with biologists and researchers</li>
                    </ul>
                @else
                    <p>Educate the next generation about wildlife conservation as a <strong>Teacher</strong>. Create engaging programs that inspire students to protect our planet's precious wildlife.</p>
                    <h3>Key Responsibilities:</h3>
                    <ul>
                        <li>Develop conservation education curricula</li>
                        <li>Teach students about wildlife protection</li>
                        <li>Organize field trips to nature reserves</li>
                        <li>Create interactive learning materials</li>
                        <li>Coordinate with schools and educational institutions</li>
                    </ul>
                @endif

                <h3>Requirements:</h3>
                <ul>
                    @if($job->title == 'Director')
                        <li>Master's degree in Environmental Science, Biology, or related field</li>
                        <li>5+ years of leadership experience in conservation</li>
                        <li>Strong strategic planning and communication skills</li>
                        <li>Experience with budget management</li>
                    @elseif($job->title == 'Programmer')
                        <li>Bachelor's degree in Computer Science or related field</li>
                        <li>2+ years of programming experience (Python, JavaScript, SQL)</li>
                        <li>Experience with data analysis and visualization</li>
                        <li>Passion for environmental conservation</li>
                    @else
                        <li>Bachelor's degree in Education, Biology, or Environmental Science</li>
                        <li>3+ years of teaching experience</li>
                        <li>Strong communication and presentation skills</li>
                        <li>Experience with curriculum development</li>
                    @endif
                </ul>

                <h3>What We Offer:</h3>
                <ul>
                    <li>Competitive salary: <strong>{{ $job->salary }} per year</strong></li>
                    <li>Comprehensive health and dental insurance</li>
                    <li>Professional development opportunities</li>
                    <li>Flexible remote work options</li>
                    <li>Travel opportunities for field work</li>
                    <li>Chance to make a real impact on wildlife conservation</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Apply Section -->
    <div class="apply-section">
        <div class="apply-card">
            <h2>Ready to Join Our Mission?</h2>
            <p>Help us protect wildlife and preserve our planet for future generations.</p>
            <div class="apply-buttons">
                <button class="apply-btn-large">Apply for {{ $job->title }} Position</button>
                <a href="/jobs" class="browse-btn">Browse Other Positions</a>
            </div>
        </div>
    </div>

    <style>
        /* Navigation Section */
        .navigation-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .back-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .breadcrumb {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* Job Hero Section */
        .job-hero-section {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .job-main-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .job-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .job-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .job-title {
            font-size: 3rem;
            font-weight: bold;
            color: #4ade80;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .job-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .job-salary {
            font-size: 2rem;
            color: #fbbf24;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        /* Quick Info Grid */
        .job-quick-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .info-icon {
            font-size: 1.5rem;
        }

        .info-label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            margin-bottom: 0.25rem;
        }

        .info-value {
            color: white;
            font-weight: 600;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .apply-btn, .save-btn, .share-btn, .edit-btn {
            padding: 1rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .primary {
            background: linear-gradient(45deg, #4ade80, #22c55e);
            color: white;
            box-shadow: 0 4px 15px rgba(74, 222, 128, 0.4);
        }

        .primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(74, 222, 128, 0.6);
        }

        .secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Edit Button (Anchor) */
        .edit-btn {
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Sidebar */
        .job-sidebar {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .sidebar-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .sidebar-card h3 {
            color: #4ade80;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .company-stats {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .stat {
            text-align: center;
            flex: 1;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fbbf24;
        }

        .stat-label {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .benefits-list {
            list-style: none;
            padding: 0;
        }

        .benefits-list li {
            padding: 0.5rem 0;
            color: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .benefits-list li:last-child {
            border-bottom: none;
        }

        /* Description Section */
        .job-description-section {
            margin-bottom: 3rem;
        }

        .description-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .description-card h2 {
            color: #4ade80;
            font-size: 2rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .description-card h3 {
            color: #fbbf24;
            margin: 2rem 0 1rem 0;
            font-size: 1.3rem;
        }

        .description-content p {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .description-content ul {
            color: rgba(255, 255, 255, 0.8);
            margin-left: 2rem;
            margin-bottom: 2rem;
        }

        .description-content li {
            margin-bottom: 0.5rem;
            line-height: 1.5;
        }

        /* Apply Section */
        .apply-section {
            margin-top: 3rem;
        }

        .apply-card {
            background: linear-gradient(135deg, rgba(74, 222, 128, 0.2), rgba(34, 197, 94, 0.2));
            backdrop-filter: blur(15px);
            border: 1px solid rgba(74, 222, 128, 0.3);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .apply-card h2 {
            color: #4ade80;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .apply-card p {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            font-size: 1.2rem;
        }

        .apply-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .apply-btn-large {
            background: linear-gradient(45deg, #4ade80, #22c55e);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .apply-btn-large:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(74, 222, 128, 0.6);
        }

        .browse-btn {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 1rem 2rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .browse-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        @media (max-width: 1024px) {
            .job-hero-section {
                grid-template-columns: 1fr;
            }
        }
    </style>
</x-layout>