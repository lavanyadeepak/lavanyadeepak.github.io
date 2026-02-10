<!-- Page Specific Styles -->
<style>
    .about-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
        margin-bottom: var(--spacing-3xl);
    }
    
    @media (min-width: 768px) {
        .about-grid {
            grid-template-columns: 300px 1fr;
            align-items: start;
        }
    }

    .profile-image-container {
        position: relative;
    }

    .profile-image {
        width: 100%;
        border-radius: 12px;
        box-shadow: var(--shadow-lg);
        transition: transform var(--transition-base);
    }

    .profile-image:hover {
        transform: scale(1.02);
    }

    .info-card {
        background: var(--white);
        padding: var(--spacing-md);
        border-radius: 8px;
        margin-bottom: var(--spacing-md);
        border-left: 4px solid var(--primary-color);
        box-shadow: var(--shadow-sm);
    }

    .info-title {
        font-size: 1.2rem;
        color: var(--primary-color);
        margin-bottom: var(--spacing-sm);
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .custom-list {
        list-style: none;
    }

    .custom-list li {
        margin-bottom: 12px;
        padding-left: 25px;
        position: relative;
        line-height: 1.6;
    }

    .custom-list li::before {
        content: "➤";
        color: var(--primary-color);
        position: absolute;
        left: 0;
        font-size: 0.9em;
    }

    .custom-list a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
    }

    .custom-list a:hover {
        text-decoration: underline;
    }
</style>

<!-- Dependencies -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/scripts/photoalbums.js"></script>

<section class="section fade-in">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">About Me</h2>
            <p class="section-subtitle">A glimpse into my journey, beliefs, and passions</p>
        </div>

        <div class="about-grid">
            <!-- Left Column: Image -->
            <div class="profile-image-container">
                <img src="assets/images/deepak1.jpg" alt="Lavanya Deepak" class="profile-image">
            </div>

            <!-- Right Column: Details -->
            <div class="about-content">
                <!-- Religious Beliefs -->
                <div class="info-card">
                    <h3 class="info-title">Religious Beliefs</h3>
                    <ul class="custom-list">
                        <li>Staunch Believer and Follower of <a href="index.php?pg=redir&url=ahobilamutt" target="_blank">Sri Ahobila Mutt</a>, including having completed the commitments of Samasrayanam (Pancha Samskaram) and Bharanyasam (Prapatti)</li>
                        <li>Vadagalai Iyengar</li>
                        <li>Firm Believer of Principles of my gurudev, <a href="http://www.shanidevmaharaj.blogspot.com/" target="_blank">Sri Shanidev</a></li>
                        <li>Fanatic devotee of my pet, <a href="http://www.saranamayyappa.tk/" target="_blank">Swamiyae Saranam Ayyappa</a></li>
                    </ul>
                </div>

                <!-- Professional -->
                <div class="info-card">
                    <h3 class="info-title">Professional</h3>
                    <p>I am a passionate developer and community builder. You can check out my full professional portfolio <a href="https://lavanyadeepak.github.io/" target="_blank" style="color: var(--primary-color); font-weight: bold;">here</a>.</p>
                </div>

                <!-- Certifications -->
                <div class="info-card">
                    <h3 class="info-title">Tech & Community Passions</h3>
                    <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="e46f6faa-7736-4444-a40c-2db8cde4e720" data-share-badge-host="https://www.credly.com"></div>
                    <script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
                </div>
            </div>
        </div>

        <!-- Photo Albums Section -->
        <div class="photo-albums-section">
            <div class="section-header">
                <h2 class="section-title">Photo Albums</h2>
                <p class="section-subtitle">Captured moments from travels and life events</p>
            </div>

            <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: var(--shadow-md);">
                <table id="tblAlbums" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Album</th>
                            <th>Notes</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Album</th>
                            <th>Notes</th>
                            <th>Link</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tblAlbums').DataTable({
            processing: true,
            data: photoAlbumsDataSet,
            responsive: true,
            language: {
                 emptyTable: "The photo albums are in the process of being re-organized and would be available shortly."
            },
            lengthMenu: [5, 10, 25, 50],
            pageLength: 10
        });
    });
</script>