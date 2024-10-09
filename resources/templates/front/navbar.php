 <nav class="navbar myNavbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand myNav-brand" href="<?php echo $path; ?>">
            <img src="<?php echo $path; ?>images/logo.svg" alt="" class="img-fluid logo-img">
        </a>
        <button class="navbar-toggler myNav-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon myNav-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse myNav-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item myNav-item">
                    <a class="nav-link myNav-link" href="<?php echo $path; ?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item myNav-item">
                    <a class="nav-link myNav-link" href="<?php echo $path; ?>about-us">About</a>
                </li>
                <li class="nav-item myNav-item">
                    <a class="nav-link myNav-link" href="<?php echo $path; ?>">Service</a>
                </li>
                <li class="nav-item myNav-item">
                    <a class="nav-link myNav-link" href="<?php echo $path; ?>contact-us">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>