<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Market Prices | Smart Farming</title>

    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <!-- Chart.js -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="dashboard-body">

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">

        <div class="container-fluid">

            <a class="navbar-brand fw-bold" href="dashboard.php">

                <i class="fa-solid fa-leaf"></i>
                Smart Farming

            </a>

            <div class="text-white">

                <i class="fa-solid fa-chart-line"></i>
                Market Prices

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
                        <a href="market.php" class="active">
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

                <!-- Heading -->

                <div class="mb-4">

                    <h2 class="fw-bold">

                        Crop Market Prices

                    </h2>

                    <p class="text-muted">

                        Monitor real-time crop prices
                        and market trends.

                    </p>

                </div>

                <!-- Market Summary Cards -->

                <div class="row g-4 mb-5">

                    <!-- Highest Price -->

                    <div class="col-md-4">

                        <div class="card dashboard-card shadow border-0">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <div>

                                        <h6 class="text-muted">

                                            Highest Crop Price

                                        </h6>

                                        <h3 class="fw-bold">

                                            ₹6500

                                        </h3>

                                    </div>

                                    <i class="fa-solid fa-arrow-trend-up card-icon text-success"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Lowest Price -->

                    <div class="col-md-4">

                        <div class="card dashboard-card shadow border-0">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <div>

                                        <h6 class="text-muted">

                                            Lowest Crop Price

                                        </h6>

                                        <h3 class="fw-bold">

                                            ₹1800

                                        </h3>

                                    </div>

                                    <i class="fa-solid fa-arrow-trend-down card-icon text-danger"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Market Growth -->

                    <div class="col-md-4">

                        <div class="card dashboard-card shadow border-0">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <div>

                                        <h6 class="text-muted">

                                            Market Growth

                                        </h6>

                                        <h3 class="fw-bold text-primary">

                                            +12%

                                        </h3>

                                    </div>

                                    <i class="fa-solid fa-chart-column card-icon text-primary"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Market Price Table -->

                <div class="card shadow border-0 mb-5">

                    <div class="card-body">

                        <h5 class="mb-4">

                            Today's Crop Prices

                        </h5>

                        <div class="table-responsive">

                            <table class="table table-hover align-middle">

                                <thead class="table-success">

                                    <tr>

                                        <th>ID</th>
                                        <th>Crop Name</th>
                                        <th>Market</th>
                                        <th>Price / Quintal</th>
                                        <th>Status</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>1</td>
                                        <td>Rice</td>
                                        <td>Hyderabad Market</td>
                                        <td>₹2500</td>

                                        <td>

                                            <span class="badge bg-success">

                                                High

                                            </span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>2</td>
                                        <td>Wheat</td>
                                        <td>Warangal Market</td>
                                        <td>₹2200</td>

                                        <td>

                                            <span class="badge bg-warning">

                                                Medium

                                            </span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>3</td>
                                        <td>Cotton</td>
                                        <td>Nizamabad Market</td>
                                        <td>₹6500</td>

                                        <td>

                                            <span class="badge bg-success">

                                                High

                                            </span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>4</td>
                                        <td>Maize</td>
                                        <td>Karimnagar Market</td>
                                        <td>₹1800</td>

                                        <td>

                                            <span class="badge bg-danger">

                                                Low

                                            </span>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>5</td>
                                        <td>Sugarcane</td>
                                        <td>Khammam Market</td>
                                        <td>₹3200</td>

                                        <td>

                                            <span class="badge bg-primary">

                                                Stable

                                            </span>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

                <!-- Market Chart -->

                <div class="card shadow border-0 mb-5">

                    <div class="card-body">

                        <h5 class="mb-4">

                            Weekly Market Trends

                        </h5>

                        <canvas id="marketChart"></canvas>

                    </div>

                </div>

                <!-- Market Insights -->

                <div class="card shadow border-0">

                    <div class="card-body">

                        <div class="row align-items-center">

                            <div class="col-md-6">

                                <img
                                    src="assets/images/market.jpg"
                                    alt="Market"
                                    class="img-fluid rounded"
                                >

                            </div>

                            <div class="col-md-6">

                                <h3 class="fw-bold mb-4">

                                    Market Insights

                                </h3>

                                <p class="text-muted">

                                    Farmers can monitor crop prices
                                    in real-time and make smarter
                                    selling decisions based on
                                    market trends and demand.

                                </p>

                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item">

                                        ✔ Real-Time Crop Prices

                                    </li>

                                    <li class="list-group-item">

                                        ✔ Market Demand Tracking

                                    </li>

                                    <li class="list-group-item">

                                        ✔ Weekly Price Analytics

                                    </li>

                                    <li class="list-group-item">

                                        ✔ Better Profit Decisions

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Chart Script -->

    <script>

        const ctx =
            document.getElementById('marketChart');

        new Chart(ctx, {

            type: 'line',

            data: {

                labels: [
                    'Mon',
                    'Tue',
                    'Wed',
                    'Thu',
                    'Fri',
                    'Sat',
                    'Sun'
                ],

                datasets: [{

                    label: 'Rice Price',

                    data: [
                        2200,
                        2400,
                        2500,
                        2450,
                        2550,
                        2600,
                        2500
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