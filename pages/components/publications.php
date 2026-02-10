<!-- Page Specific Styles -->
<style>
    .publications-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }

    @media (min-width: 768px) {
        .publications-grid {
            grid-template-columns: 2fr 1fr;
        }
    }

    .intro-card {
        background: var(--white);
        padding: var(--spacing-lg);
        border-radius: 12px;
        box-shadow: var(--shadow-md);
        margin-bottom: var(--spacing-lg);
        border-left: 5px solid var(--primary-color);
    }

    .intro-title {
        font-size: 1.5rem;
        color: var(--primary-color);
        margin-bottom: var(--spacing-md);
    }

    .download-card {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
        color: var(--white);
        padding: var(--spacing-lg);
        border-radius: 12px;
        text-align: center;
        box-shadow: var(--shadow-lg);
        margin-bottom: var(--spacing-lg);
    }

    .download-btn {
        display: inline-block;
        background: var(--white);
        color: var(--primary-color);
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        margin-top: 15px;
        transition: transform var(--transition-fast);
        cursor: pointer;
    }

    .download-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .article-list {
        list-style: none;
    }

    .article-item {
        background: var(--white);
        padding: 15px;
        border-bottom: 1px solid var(--border-color);
        transition: background var(--transition-fast);
    }

    .article-item:hover {
        background: var(--bg-light);
    }

    .article-link {
        text-decoration: none;
        color: var(--text-primary);
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .category-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .category-badge {
        background: var(--bg-lighter);
        color: var(--text-secondary);
        padding: 8px 16px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 0.9rem;
        transition: all var(--transition-fast);
        border: 1px solid var(--border-color);
    }

    .category-badge:hover {
        background: var(--primary-color);
        color: var(--white);
        border-color: var(--primary-color);
    }
    
    .sidebar-section {
        background: var(--white);
        padding: var(--spacing-md);
        border-radius: 12px;
        box-shadow: var(--shadow-sm);
        margin-bottom: var(--spacing-md);
    }
    
    .sidebar-header {
        font-size: 1.2rem;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--bg-lighter);
        color: var(--text-primary);
    }
</style>

<section class="section fade-in">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Publications & Writings</h2>
            <p class="section-subtitle">Reflections, technical articles, and personal stories</p>
        </div>

        <div class="publications-grid">
            <!-- Main Content -->
            <div class="main-content">
                
                <!-- Item 1: Introduction / Diary Tool -->
                <div class="intro-card">
                    <h3 class="intro-title">The Digital Diary</h3>
                    <p style="margin-bottom: 15px; line-height: 1.8; color: var(--text-secondary);">
                        This had been my personal diary tool which I have been using for several years to note down the various things that happen on a day-to-day basis. An indigenous tool which helps me adjudicate the incidents and take particular decisions. ASP/ASP.NET had been with me since my college days and more than just a technology. I never hide anything from her (my better half) and she helps me streamline things and tide over the messes which I confront here and there.
                    </p>
                    <p style="font-weight: 600; color: var(--text-primary); margin-bottom: 10px;">Evolutionary Manifestations:</p>
                    <ul style="list-style: none; display: flex; gap: 15px; flex-wrap: wrap;">
                        <li><span class="category-badge">Todolist</span></li>
                        <li><span class="category-badge">Web2Project</span></li>
                        <li><span class="category-badge">ProjectPier</span></li>
                        <li><span class="category-badge">Microsoft ToDo</span></li>
                    </ul>
                </div>

                <!-- Item 3: Published Articles -->
                <div class="sidebar-section">
                    <h3 class="sidebar-header">Technical Articles & Tips</h3>
                    <ul class="article-list">
                        <li class="article-item">
                            <a href="#" onclick="openPDF('assets/resources/windowsit/new_scripting_console.pdf'); return false;" class="article-link"><span>📄</span> New Scripting Console</a>
                        </li>
                        <li class="article-item">
                            <a href="#" onclick="openPDF('assets/resources/windowsit/elegant_email_hyperlinks.pdf'); return false;" class="article-link"><span>🔗</span> Elegant Email Hyperlinks</a>
                        </li>
                        <li class="article-item">
                            <a href="#" onclick="openPDF('assets/resources/windowsit/6.pdf'); return false;"class="article-link"><span>💻</span> Scripting Console</a>
                        </li>
                        <li class="article-item">
                            <a href="#" onclick="openPDF('assets/resources/windowsit/tooltips_with_html_entities.pdf'); return false;" class="article-link"><span>💡</span> Tooltips with HTML Entities</a>
                        </li>
                        <li class="article-item">
                            <a href="#" onclick="openPDF('assets/resources/windowsit/netscape_communicator_tips.pdf'); return false;" class="article-link"><span>🌐</span> Netscape Communicator Tips</a>
                        </li>
                        <li class="article-item">
                            <a href="#" onclick="openPDF('assets/resources/windowsit/netscape_communicator_discovery.pdf'); return false;" class="article-link"><span>🌐</span> Netscape Communicator Discovery</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                
                <!-- Item 2: PDF Download -->
                <div class="download-card">
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px;">Lub Dub</h3>
                    <p style="opacity: 0.9; margin-bottom: 15px;">A word or two about 'Lavanya Deepak' - penned from my personal diary.</p>
                    <a href="javascript:void(0);" onclick="openPDF('assets/resources/writeup/lubdub.pdf'); return false;" class="download-btn">View PDF</a>
                </div>

                <!-- Item 4: Blog Categories -->
                <div class="sidebar-section">
                    <h3 class="sidebar-header">Blog Categories</h3>
                    <div class="category-badges">
                        <a href="https://deepakvasudevan.blogspot.com/" class="category-badge">General Gossip</a>
                        <a href="https://lavanyadeepak.blogspot.com/" class="category-badge">Tech</a>
                        <a href="https://viewsreviews.wordpress.com/" class="category-badge">Social Concern</a>
                        <a href="https://ldvoyage.wordpress.com/" class="category-badge">Travel</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>