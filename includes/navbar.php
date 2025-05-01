<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid container-custom">
        <a class="navbar-brand w-100 text-center" href="#">
            <img src="assets/images/logo.jpg" alt="Cubex Logo">
            <h2>Ucheldre Repertory Company</h2>
        </a>
        <div class="mobile-controls">
            <!-- Theme Toggle Button (visible only on mobile) -->
            <a class="nav-link d-inline-flex d-lg-none mobile-theme-toggle" href="#"
                onclick="toggleTheme(); return false;">
                <i id="mobile-theme-icon" class="fas fa-moon"></i>
            </a>
            <!-- Hamburger menu button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Theme Toggle Button (visible only on desktop) -->
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" onclick="toggleTheme(); return false;">
                        <i id="theme-icon" class="fas fa-moon"></i>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" onclick="smoothScroll('#header', 800)">Home</a></li>
                <li class="nav-item"><a class="nav-link" onclick="smoothScroll('#productions', 1000)">Productions</a></li>
                <li class="nav-item"><a class="nav-link" onclick="smoothScroll('#about', 1200)">About</a></li>
                <li class="nav-item"><a class="nav-link" onclick="smoothScroll('#faq', 1400)">Other Stages</a></li>
                <li class="nav-item"><a class="nav-link" onclick="smoothScroll('#links', 1600)">Links</a></li>
                <li class="nav-item"><a class="nav-link" onclick="smoothScroll('#contact', 1800)">Contact</a></li>

                <!-- Login Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle login-btn" href="#" id="loginDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/login.webp" alt="Login Icon" class="login-icon"> Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                        <li><a class="dropdown-item" href="https://billing.cubex.cc/">Billing Panel</a></li>
                        <li><a class="dropdown-item" href="https://panel.cubex.cc/">Game Panel</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>