<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Smart Farming</title>

    <!-- Bootstrap -->

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <!-- Font Awesome -->

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Chart.js -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="dashboard-body">

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">

    <div class="container-fluid">

        <!-- Logo -->

        <a class="navbar-brand fw-bold" href="#">

            <i class="fa-solid fa-leaf"></i>

            Smart Farming

        </a>

        <!-- Profile Dropdown -->

<div class="profile-menu">

    <button class="profile-btn">

        <div class="profile-circle">
            U
        </div>

        <span>Ujwala</span>

        <i class="fa-solid fa-angle-down"></i>

    </button>

    <div class="dropdown-content">

        <a href="profile.php">

            <i class="fa-solid fa-user"></i>

            My Profile

        </a>

        <a href="backend/logout.php">

            <i class="fa-solid fa-right-from-bracket"></i>

            Logout

        </a>

    </div>

</div>

    </div>

</nav>

<!-- Main Layout -->

<div class="container-fluid">

    <div class="row">

        <!-- Sidebar -->

        <div class="col-lg-2 sidebar p-0">

            <ul class="sidebar-menu">

                <li>
                    <a href="dashboard.php">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="crops.php">
                        <i class="fa-solid fa-seedling"></i>
                        Crops
                    </a>
                </li>

                <li>
                    <a href="expenses.php">
                        <i class="fa-solid fa-wallet"></i>
                        Expenses
                    </a>
                </li>

                <li>
                    <a href="weather.php">
                        <i class="fa-solid fa-cloud-sun"></i>
                        Weather
                    </a>
                </li>

                <li>
                    <a href="market.php">
                        <i class="fa-solid fa-chart-line"></i>
                        Market Prices
                    </a>
                </li>

                <li>
                    <a href="backend/logout.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </a>
                </li>

            </ul>

        </div>

        <!-- Main Content -->

        <div class="col-lg-10 p-4">

            <!-- Welcome -->

            <div class="mb-4">

                <h2 class="fw-bold">

                    Welcome to Smart Farming Dashboard

                </h2>

                <p class="text-muted">

                    Monitor your farming activities
                    in real-time.

                </p>

            </div>

            <!-- Dashboard Cards -->

            <div class="row g-4">

                <!-- Total Crops -->

                <div class="col-md-3">

                    <div class="card dashboard-card shadow border-0">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h6 class="text-muted">

                                        Total Crops

                                    </h6>

                                    <h3 class="fw-bold">

                                        25

                                    </h3>

                                </div>

                                <i class="fa-solid fa-seedling card-icon text-success"></i>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Expenses -->

                <div class="col-md-3">

                    <div class="card dashboard-card shadow border-0">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h6 class="text-muted">

                                        Expenses

                                    </h6>

                                    <h3 class="fw-bold">

                                        ₹15,000

                                    </h3>

                                </div>

                                <i class="fa-solid fa-wallet card-icon text-danger"></i>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Profit -->

                <div class="col-md-3">

                    <div class="card dashboard-card shadow border-0">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h6 class="text-muted">

                                        Profit

                                    </h6>

                                    <h3 class="fw-bold">

                                        ₹32,000

                                    </h3>

                                </div>

                                <i class="fa-solid fa-chart-line card-icon text-primary"></i>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Weather -->

                <div class="col-md-3">

                    <div class="card dashboard-card shadow border-0">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h6 class="text-muted">

                                        Weather

                                    </h6>

                                    <h3 class="fw-bold">

                                        28°C

                                    </h3>

                                </div>

                                <i class="fa-solid fa-cloud-sun card-icon text-warning"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Charts Section -->

            <div class="row mt-5">

                <!-- Expense Chart -->

                <div class="col-lg-8">

                    <div class="card shadow border-0">

                        <div class="card-body">

                            <h5 class="mb-4">

                                Monthly Expense Report

                            </h5>

                            <canvas id="expenseChart"></canvas>

                        </div>

                    </div>

                </div>

                <!-- Weather Card -->

                <div class="col-lg-4">

                    <div class="card shadow border-0">

                        <div class="card-body text-center">

                            <h5 class="mb-4">

                                Today's Weather

                            </h5>

                            <i class="fa-solid fa-cloud-sun-rain weather-big-icon"></i>

                            <h2 class="mt-3">

                                28°C

                            </h2>

                            <p class="text-muted">

                                Hyderabad, India

                            </p>

                            <hr>

                            <div class="d-flex justify-content-around">

                                <div>

                                    <h6>Humidity</h6>

                                    <p>72%</p>

                                </div>

                                <div>

                                    <h6>Wind</h6>

                                    <p>12 km/h</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Chart Script -->

<script>

const ctx = document.getElementById('expenseChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun'
        ],

        datasets: [{

            label: 'Expenses',

            data: [
                12000,
                19000,
                15000,
                22000,
                18000,
                25000
            ],

            borderWidth: 3,
            tension: 0.4

        }]

    },

    options: {

        responsive: true

    }

});

</script>

<!-- Bootstrap JS -->

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>