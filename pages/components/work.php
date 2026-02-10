<!-- Page Specific Styles -->
<style>
    .work-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }

    @media (min-width: 992px) {
        .work-container {
            grid-template-columns: 1fr 2fr;
        }
    }

    /* Sidebar Styles */
    .sidebar-card {
        background: var(--white);
        padding: var(--spacing-md);
        border-radius: 12px;
        box-shadow: var(--shadow-md);
        margin-bottom: var(--spacing-md);
    }

    .sidebar-title {
        font-size: 1.2rem;
        color: var(--primary-color);
        margin-bottom: var(--spacing-md);
        border-bottom: 2px solid var(--bg-lighter);
        padding-bottom: var(--spacing-xs);
    }

    .info-list {
        list-style: none;
    }

    .info-list li {
        margin-bottom: var(--spacing-sm);
        font-size: 0.95rem;
    }

    .info-list strong {
        display: block;
        color: var(--text-primary);
        margin-bottom: 4px;
    }

    .info-list span {
        color: var(--text-secondary);
    }

    .badge-container {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 5px;
    }

    .badge {
        background: var(--bg-lighter);
        color: var(--primary-dark);
        padding: 4px 10px;
        border-radius: 15px;
        font-size: 0.85rem;
        font-weight: 500;
    }

    /* Skills */
    .skill-item {
        margin-bottom: var(--spacing-md);
    }

    .skill-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 5px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .progress-bar-bg {
        background: var(--bg-lighter);
        height: 8px;
        border-radius: 4px;
        overflow: hidden;
    }

    .progress-bar-fill {
        height: 100%;
        background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
        border-radius: 4px;
    }

    /* Resume Buttons */
    .resume-buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .btn-download {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        background: var(--bg-light);
        color: var(--text-primary);
        text-decoration: none;
        border-radius: 6px;
        transition: all var(--transition-fast);
        border: 1px solid var(--border-color);
    }

    .btn-download:hover {
        background: var(--primary-color);
        color: var(--white);
        border-color: var(--primary-color);
    }

    /* Experience Timeline */
    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background: var(--border-color);
    }

    .timeline-item {
        position: relative;
        margin-bottom: var(--spacing-xl);
    }

    .timeline-dot {
        position: absolute;
        left: -36px;
        top: 0;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: var(--primary-color);
        border: 3px solid var(--white);
        box-shadow: 0 0 0 2px var(--primary-color);
    }

    .timeline-content {
        background: var(--white);
        padding: var(--spacing-md);
        border-radius: 8px;
        box-shadow: var(--shadow-sm);
        border-left: 4px solid var(--primary-color);
    }

    .timeline-date {
        color: var(--primary-color);
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 5px;
        display: block;
    }

    .timeline-title {
        font-size: 1.3rem;
        margin-bottom: 5px;
        color: var(--text-primary);
    }

    .timeline-company {
        font-size: 1.1rem;
        color: var(--text-secondary);
        margin-bottom: var(--spacing-md);
        font-style: italic;
    }

    .timeline-desc ul {
        list-style-type: disc;
        padding-left: 20px;
        color: var(--text-muted);
    }

    .timeline-desc li {
        margin-bottom: 8px;
    }

    /* Highlights */
    .highlights-list {
        list-style: none;
    }

    .highlights-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 15px;
        color: var(--text-secondary);
    }

    .highlights-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--primary-color);
        font-weight: bold;
    }

    /* Table */
    .table-responsive {
        overflow-x: auto;
    }
    
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    
    .custom-table th, .custom-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid var(--border-color);
    }
    
    .custom-table th {
        background-color: var(--bg-light);
        color: var(--primary-dark);
        font-weight: 600;
    }
</style>

<section class="section fade-in">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Work & Experience</h2>
            <p class="section-subtitle">My professional journey, skills, and expertise</p>
        </div>

        <div class="work-container">
            <!-- Sidebar -->
            <aside>
                <!-- Quick Info -->
                <div class="sidebar-card">
                    <h3 class="sidebar-title">Profile</h3>
                    <ul class="info-list">
                        <li>
                            <strong>Degree</strong>
                            <span>Master of Business Administration</span>
                        </li>
                        <li>
                            <strong>Email</strong>
                            <span>deepak.vasudevan@outlook.com</span>
                        </li>
                        <li>
                            <strong>Availability</strong>
                            <div class="badge-container">
                                <span class="badge">Full Time</span>
                                <span class="badge">Contract to Hire</span>
                                <span class="badge">Remote Consultant</span>
                                <span class="badge">Freelancer</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Resume Download -->
                <div class="sidebar-card">
                    <h3 class="sidebar-title">Resume</h3>
                    <div class="resume-buttons">
                        <a href="https://cloudfiles.to/6Lzo8RHZyB4" target="_ldnew" class="btn-download">📄 Download Word</a>
                        <a href="https://cloudfiles.to/sU4SQ0bN21I" target="_ldnew" class="btn-download">📑 Download PDF</a>
                        <a href="https://registry.jsonresume.org/lavanyadeepak" target="_blank" class="btn-download">💻 View JSON</a>
                    </div>
                </div>

                <!-- Skills -->
                <div class="sidebar-card">
                    <h3 class="sidebar-title">Technical Skills</h3>
                    
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>HTML/CSS</span>
                            <span>95%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span>JavaScript/jQuery</span>
                            <span>75%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 75%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span>ASP.NET / MVC</span>
                            <span>90%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span>SQL Server</span>
                            <span>90%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span>CI/CD & Cloud</span>
                            <span>75%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="main-content">
                
                <!-- Summary -->
                <div class="sidebar-card" style="border-left: 4px solid var(--primary-color);">
                    <h3 class="sidebar-title" style="border:none; margin-bottom: 10px;">Professional Summary</h3>
                    <p style="color: var(--text-secondary); line-height: 1.7;">
                        20+ years of professional experience in different heads as Software Engineer, Technical Lead, Software Architect and Technical Manager in Microsoft technologies. Open-Source Stack, Cloud based Development and Software Consulting.
                    </p>
                </div>

                <!-- Highlights -->
                <div class="sidebar-card">
                    <h3 class="sidebar-title">Key Highlights</h3>
                    <ul class="highlights-list">
                        <li>Have hands-on experience in developing RIA using industry-grade tools and frameworks like jQuery/Kendo UI.</li>
                        <li>Strong experience in designing intensive database-driven applications with performance tuning/optimization on Access, SQL Server, MySQL, Oracle and PostgreSQL.</li>
                        <li>Rich experience in source control and configuration management with Team Foundation Server, ClearCase, SVN and GIT.</li>
                        <li>Rich exposure on wide range of software development strategies (Waterfall and Agile) and capable of handling all stages of SDLC with ease.</li>
                        <li>Hands on experience in migrating web and windows-based applications and have handled all types of applications from intranet, extranet and business-critical internet applications.</li>
                        <li>Click <a onclick="openPDF('assets/resources/writeup/rasnfs.pdf'); return false;" style="color: var(--primary-color); font-weight: bold;">here</a> for a report on my academic project.</li>
                    </ul>
                </div>

                <!-- Experience Timeline -->
                <h3 style="margin: 30px 0 20px; color: var(--text-primary); font-size: 1.5rem;">Experience History</h3>
                <div class="timeline">
                    
                    <!-- Expleo -->
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">March 2021 - January 2025</span>
                            <h4 class="timeline-title">Technical Architect</h4>
                            <div class="timeline-company">Expleo Group for FiServ | Bengaluru/Chennai</div>
                            <div class="timeline-desc">
                                <ul>
                                    <li>Supported BillPay API enhancements, bug fixes, and security hardening for healthcare-focused microservices.</li>
                                    <li>Led RESTful microservice design, scaffolding, and data modeling; actively participated in Agile ceremonies.</li>
                                    <li>Coordinated with QA/BA teams to meet acceptance criteria and streamline delivery across sprints.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- GuideHouse -->
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">August 2020 - March 2021</span>
                            <h4 class="timeline-title">Sr. Software Engineer (C2H)</h4>
                            <div class="timeline-company">GuideHouse India Ltd | Bengaluru</div>
                            <div class="timeline-desc">
                                <ul>
                                    <li>Contributed to feature development and bug fixes within a healthcare-focused application framework.</li>
                                    <li>Participated in Agile ceremonies to align on sprint goals and collaborated with developers for timely implementation.</li>
                                    <li>Worked closely with QA and BA teams to validate acceptance criteria.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- IdeaPlunge -->
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">January 2019 - January 2020</span>
                            <h4 class="timeline-title">.NET Specialist</h4>
                            <div class="timeline-company">IdeaPlunge LLC | Bengaluru/Chennai</div>
                            <div class="timeline-desc">
                                <ul>
                                    <li>Overseeing and supporting the design and development of Floor Design Software for CCTV Planning.</li>
                                    <li>Developed and published web services with .NET Core for the Customer Portal of CCTV.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Past Experience Table -->
                <div class="sidebar-card" style="margin-top: 30px;">
                    <h3 class="sidebar-title">Previous Engagements</h3>
                    <div class="table-responsive">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>Organization</th>
                                    <th>Location</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SLK Global Solutions</td>
                                    <td>Bengaluru KA-IN</td>
                                    <td>June 2018 to November 2018</td>
                                </tr>
                                <tr>
                                    <td>HCL Technologies</td>
                                    <td>Chennai TN-IN/Noida UP-IN</td>
                                    <td>July 2016 to June 2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>