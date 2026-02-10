    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <img src="assets/images/ldlogo.jpg" alt="LD Logo">
            </a>
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
                ☰
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="home" class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="about" class="nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>">About</a></li>
                <li><a href="work" class="nav-link <?php echo ($page == 'work') ? 'active' : ''; ?>">Work</a></li>
                <li><a href="publications" class="nav-link <?php echo ($page == 'publications') ? 'active' : ''; ?>">Publications</a></li>
                <li><a href="ghtn" class="nav-link <?php echo ($page == 'ghtn') ? 'active' : ''; ?>">GHTN</a></li>
                <li><a href="contact" class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </div>
    </nav>