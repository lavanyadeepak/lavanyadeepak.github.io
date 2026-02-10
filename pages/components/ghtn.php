<!-- Page Specific Styles -->
<style>
    .siva-pdf-list {
        list-style: none;
        padding: 0;
    }
    .siva-pdf-list li {
        margin-bottom: 8px;
    }
    .siva-pdf-list a {
        color: var(--text-secondary);
        text-decoration: none;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all var(--transition-fast);
    }
    .siva-pdf-list a:hover {
        color: var(--primary-color);
        transform: translateX(5px);
    }
</style>

<section class="section fade-in">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Global Hindu Temple Network (GHTN)</h2>
            <p class="section-subtitle">Connecting devotees with temples and spiritual resources worldwide.</p>
        </div>

        <div class="features-grid">
            <!-- Ayyappa Card -->
            <div class="feature-card">
                <div class="feature-icon">🙏</div>
                <h3 class="feature-title">Ayyappa</h3>
                <p class="feature-description">Explore temples, history, and rituals dedicated to Lord Ayyappa. Find information on pilgrimages and festivals.</p>
                <a href="javascript:void(0);" onclick="toggleAyyappaMenu(this)" class="work-link" style="margin-top: 15px;">Discover Temples →</a>

                       <div id="ayyappa-menu" style="display: none; margin-top: 20px; text-align: left; border-top: 1px solid var(--border-color); padding-top: 15px;">
                           <ul class="ayyappa-pdf-list">
                                <li><a href="#" onclick="openPDF('assets/resources/ayyappa/northsozha.pdf'); return false;">📄 Sozha Nadu (North)</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/ayyappa/southsozha.pdf'); return false;">📄 Sozha Nadu (South)</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/eastsozha.pdf'); return false;">📄 Sozha Nadu (East)</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/westsozha.pdf'); return false;">📄 Sozha Nadu (West)</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/kongu.pdf'); return false;">📄 Kongu Nadu</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/pandiya.pdf'); return false;">📄 Pandiya Nadu</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/cheran.pdf'); return false;">📄 Chera Nadu</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/tondai.pdf'); return false;">📄 Tondai Nadu</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/northarcot.pdf'); return false;">📄 North Arcot</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/southarcot.pdf'); return false;">📄 South Arcot</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/madurai.pdf'); return false;">📄 Madurai Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/tirunelveli.pdf'); return false;">📄 Tirunelveli Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/kanyakumari.pdf'); return false;">📄 Kanyakumari Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/coimbatore.pdf'); return false;">📄 Coimbatore Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/erode.pdf'); return false;">📄 Erode Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/salem.pdf'); return false;">📄 Salem Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/dharmapuri.pdf'); return false;">📄 Dharmapuri Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/vellore.pdf'); return false;">📄 Vellore Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/tiruvannamalai.pdf'); return false;">📄 Tiruvannamalai Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/chengalpattu.pdf'); return false;">📄 Chengalpattu Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/chennai.pdf'); return false;">📄 Chennai Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/thanjavur.pdf'); return false;">📄 Thanjavur Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/nagapattinam.pdf'); return false;">📄 Nagapattinam Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/tiruvarur.pdf'); return false;">📄 Tiruvarur Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/tiruchirapalli.pdf'); return false;">📄 Tiruchirapalli Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/karur.pdf'); return false;">📄 Karur Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/nilgiris.pdf'); return false;">📄 Nilgiris Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/perambalur.pdf'); return false;">📄 Perambalur Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/ariyalur.pdf'); return false;">📄 Ariyalur Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/pudukkottai.pdf'); return false;">📄 Pudukkottai Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/ramanathapuram.pdf'); return false;">📄 Ramanathapuram Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/sivagangai.pdf'); return false;">📄 Sivagangai Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/virudhunagar.pdf'); return false;">📄 Virudhunagar Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/theni.pdf'); return false;">📄 Theni Region</a></li>
                                <li><a href="#" onclick="openPDF('assets/resources/siva/dindigul.pdf'); return false;">📄 Dindigul Region</a></li>
                           </ul>
                       </div>
            </div>

            <!-- Siva Temples Card -->
            <div class="feature-card">
                <div class="feature-icon">🕉️</div>
                <h3 class="feature-title">Siva Temples</h3>
                <p class="feature-description">A comprehensive guide to prominent Siva temples, their significance, and architectural marvels.</p>
                <a href="javascript:void(0);" onclick="toggleSivaMenu(this)" class="work-link" style="margin-top: 15px;">Discover Temples →</a>
                
                <div id="siva-menu" style="display: none; margin-top: 20px; text-align: left; border-top: 1px solid var(--border-color); padding-top: 15px;">
                    <ul class="siva-pdf-list">
                        <li><a href="#" onclick="openPDF('assets/resources/siva/northsozha.pdf'); return false;">📄 Sozha Nadu (North) </a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/southsozha.pdf'); return false;">📄 Sozha Nadu (North) </a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/Ezha.pdf'); return false;">📄 Ezha Nadu</a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/kongu.pdf'); return false;">📄 Kongu Nadu</a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/malai.pdf'); return false;">📄 Malai Nadu</a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/nadu.pdf'); return false;">📄 Nadu Nadu</a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/pandya.pdf'); return false;">📄 Pandya Nadu</a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/thondai.pdf'); return false;">📄 Thondai Nadu</a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/thulluva.pdf'); return false;">📄 Thulluva Nadu</a></li>
                        <li><a href="#" onclick="openPDF('assets/resources/siva/vada.pdf'); return false;">📄 Vada Nadu</a></li>
                    </ul>
                </div>
            </div>

            <!-- Divyadesam Card -->
            <div class="feature-card">
                <div class="feature-icon">🏛️</div>
                <h3 class="feature-title">Divyadesam</h3>
                <p class="feature-description">Discover the 108 Divya Desams, the holy abodes of Lord Vishnu, revered by the Alvars in their hymns.</p>
                <a href="#" class="work-link" style="margin-top: 15px;">Start Tour →</a>
            </div>

            <!-- Prayer Time Card -->
            <div class="feature-card">
                <div class="feature-icon">⏳</div>
                <h3 class="feature-title">Prayer Time</h3>
                <p class="feature-description">Choose your preferred sloka and ensure to start praying</p>
                <a href="#" class="work-link" style="margin-top: 15px;">Open Prayer Hall →</a>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleSivaMenu(btn) {
        const menu = document.getElementById('siva-menu');
        if (menu.style.display === 'none') {
            menu.style.display = 'block';
            btn.textContent = 'Close Menu ↑';
        } else {
            menu.style.display = 'none';
            btn.textContent = 'Discover Temples →';
        }
    }

    function toggleAyyappaMenu(btn) {
        const menu = document.getElementById('ayyappa-menu');
        if (menu.style.display === 'none') {
            menu.style.display = 'block';
            btn.textContent = 'Close Menu ↑';
        } else {
            menu.style.display = 'none';
            btn.textContent = 'Discover Temples →';
        }
    }
</script>