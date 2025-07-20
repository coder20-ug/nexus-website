<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NexusSolutions | Enterprise Technology Solutions</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Custom External CSS (Optional) -->
  <link rel="stylesheet" href="css/test.css" />

  <!-- Internal CSS Styling -->
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="logo-icon"><i class="fas fa-network-wired"></i></span>
                <span>NexusSolutions</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Solutions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                            <li><a class="dropdown-item" href="#">Cloud Solutions</a></li>
                            <li><a class="dropdown-item" href="#">Data Analytics</a></li>
                            <li><a class="dropdown-item" href="#">AI & Machine Learning</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">All Solutions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="industriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Industries
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="industriesDropdown">
                            <li><a class="dropdown-item" href="#">Healthcare</a></li>
                            <li><a class="dropdown-item" href="#">Finance</a></li>
                            <li><a class="dropdown-item" href="#">Manufacturing</a></li>
                            <li><a class="dropdown-item" href="#">Retail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Consulting</a></li>
                            <li><a class="dropdown-item" href="#">Implementation</a></li>
                            <li><a class="dropdown-item" href="#">Support & Maintenance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#case-studies">Case Studies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                <div class="d-flex ms-lg-3 mt-3 mt-lg-0">
                    <a href="#" class="btn btn-outline-primary me-2">Login</a>
                    <a href="#" class="btn btn-primary">Contact Sales</a>
                </div>
            </div>
        </div>
    </nav>

    <!--css-->
    <style>
        /* Color Variables */
:root {
    --primary-color: #4F46E5;
    --primary-dark: #4338CA;
    --secondary-color: #10B981;
    --secondary-dark: #0D9F6E;
    --accent-color: #EC4899;
    --accent-dark: #DB2777;
    --dark-color: #111827;
    --gray-color: #6B7280;
    --light-gray: #F3F4F6;
    --white-color: #FFFFFF;
}

/* Base Styles */
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    color: var(--dark-color);
    line-height: 1.6;
    padding-top: 80px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1rem;
}

a {
    text-decoration: none;
    transition: all 0.3s ease;
}

/* Buttons */
.btn {
    font-weight: 600;
    padding: 10px 24px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    color: var(--white-color);
}

.btn-primary:hover {
    background-color: var(--primary-dark);
    border-color: var(--primary-dark);
}

.btn-secondary {
    background-color: var(--secondary-color);
    border-color: var(--secondary-color);
    color: var(--white-color);
}

.btn-secondary:hover {
    background-color: var(--secondary-dark);
    border-color: var(--secondary-dark);
}

.btn-outline-primary {
    border-color: var(--primary-color);
    color: var(--primary-color);
}

.btn-outline-primary:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
}

/* Navbar */
.navbar {
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    padding: 20px 0;
}

.navbar.scrolled {
    background-color: rgba(255, 255, 255, 0.98) !important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    padding: 15px 0;
}

.navbar-brand {
    font-weight: 700;
    font-size: 24px;
    color: var(--dark-color);
}

.logo-icon {
    color: var(--primary-color);
    margin-right: 8px;
}

.nav-link {
    font-weight: 500;
    color: var(--dark-color);
    padding: 8px 16px !important;
}

.nav-link:hover {
    color: var(--primary-color);
}
</style>