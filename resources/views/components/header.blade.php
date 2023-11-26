<header class="header" data-header>
    <div class="container">

        <a href="{{ url('/') }}" class="logo">
            <img src="./assets/images/my-logo.svg" width="151" height="28" alt="Imran home">
        </a>

        <nav class="navbar" data-navbar>
            <ul class="navbar-list">

                <li class="navbar-item">
                    <a href="{{ url('/') }}" class="label-lg navbar-link has-after active">Home</a>
                </li>

                <li class="navbar-item">
                    <a href="{{ url('/about') }}" class="label-lg navbar-link has-after">About</a>
                </li>

                <li class="navbar-item">
                    <a href="{{ url('/projects') }}" class="label-lg navbar-link has-after">Projects</a>
                </li>

                <li class="navbar-item">
                    <a href="{{ url('/contact') }}" class="label-lg navbar-link has-after">Contact</a>
                </li>

            </ul>
        </nav>

        <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Now</a>

        <button class="nav-toggle-btn" aria-label="menu" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

    </div>
</header>

<script>
    const currentPath = window.location.pathname;

    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach(link => {
        link.classList.remove('active');
        const linkPath = new URL(link.href).pathname;
        if (currentPath === linkPath) {
            link.classList.add('active');
        }
    });
</script>
