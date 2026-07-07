<!-- Header / Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent pb-4 w-100">
    <div class="container-fluid px-0">
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo esc_url( dirname( home_url() ) ); ?>/index.php">
            <div style="display:flex; flex-direction:column; line-height:1.2;">
                <!-- Logo URL resolved relative to the main site -->
                <img class="img-fluid logo" width="400" src="<?php echo esc_url( dirname( home_url() ) . '/images/LOGO.png' ); ?>" alt="logo">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( dirname( home_url() ) ); ?>/index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( dirname( home_url() ) ); ?>/about.php">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?php echo esc_url( dirname( home_url() ) ); ?>/blogs.php">Blogs</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( dirname( home_url() ) ); ?>/contact-us.php">Contact Us</a></li>
            </ul>
            
            <a href="tel:9457528557" class="btn btn-book">
                <span class="btn-arrow-circle bg-white text-dark">
                    <svg viewBox="0 0 24 24">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </span>
                Get Connected
            </a>
        </div>
    </div>
</nav>
