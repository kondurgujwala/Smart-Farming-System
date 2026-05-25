<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Weather Forecast | Smart Farming</title>

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

                <i class="fa-solid fa-cloud-sun"></i>
                Weather Forecast

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
                        <a href="weather.php" class="active">
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

                <!-- Heading -->

                <div class="mb-4">

                    <h2 class="fw-bold">
                        Live Weather Forecast
                    </h2>

                    <p class="text-muted">
                        Monitor live weather conditions
                        for better farming decisions.
                    </p>

                </div>

                <!-- Search -->

                <div class="card shadow border-0 mb-4">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-10">

                                <input
                                    type="text"
                                    id="cityInput"
                                    class="form-control"
                                    placeholder="Enter city name"
                                >

                            </div>

                            <div class="col-md-2">

                                <button
                                    class="btn btn-success w-100"
                                    onclick="getWeather()"
                                >

                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    Search

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Weather Cards -->

                <div class="row g-4 mb-5">

                    <!-- Temperature -->

                    <div class="col-md-3">

                        <div class="card dashboard-card shadow border-0">

                            <div class="card-body text-center">

                                <i class="fa-solid fa-temperature-high weather-icon text-danger"></i>

                                <h5 class="mt-3">
                                    Temperature
                                </h5>

                                <h3 id="temperature">
                                    -- °C
                                </h3>

                            </div>

                        </div>

                    </div>

                    <!-- Humidity -->

                    <div class="col-md-3">

                        <div class="card dashboard-card shadow border-0">

                            <div class="card-body text-center">

                                <i class="fa-solid fa-droplet weather-icon text-primary"></i>

                                <h5 class="mt-3">
                                    Humidity
                                </h5>

                                <h3 id="humidity">
                                    -- %
                                </h3>

                            </div>

                        </div>

                    </div>

                    <!-- Wind -->

                    <div class="col-md-3">

                        <div class="card dashboard-card shadow border-0">

                            <div class="card-body text-center">

                                <i class="fa-solid fa-wind weather-icon text-info"></i>

                                <h5 class="mt-3">
                                    Wind Speed
                                </h5>

                                <h3 id="wind">
                                    -- km/h
                                </h3>

                            </div>

                        </div>

                    </div>

                    <!-- Condition -->

                    <div class="col-md-3">

                        <div class="card dashboard-card shadow border-0">

                            <div class="card-body text-center">

                                <i class="fa-solid fa-cloud-sun-rain weather-icon text-warning"></i>

                                <h5 class="mt-3">
                                    Condition
                                </h5>

                                <h3 id="condition">
                                    ---
                                </h3>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Weather Info -->

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h4 class="mb-4">
                            Weather Information
                        </h4>

                        <div class="row">

                            <div class="col-md-6">

                                <img
                                    src="assets/images/weather.jpg"
                                    class="img-fluid rounded"
                                    alt="Weather"
                                >

                            </div>

                            <div class="col-md-6 d-flex align-items-center">

                                <div>

                                    <h3 id="cityName">
                                        Search City Weather
                                    </h3>

                                    <p class="text-muted mt-3">

                                        This module provides live
                                        weather information including
                                        temperature, humidity,
                                        wind speed, and weather
                                        conditions using API integration.

                                    </p>

                                    <div class="mt-4">

                                        <span class="badge bg-success p-2">
                                            Real-Time Updates
                                        </span>

                                        <span class="badge bg-primary p-2">
                                            Weather Alerts
                                        </span>

                                        <span class="badge bg-warning p-2">
                                            Rain Prediction
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Weather Script -->

    <script>

        const apiKey =
        "3b0c0c607180f6d56afbf6ae1460efb7";

        async function getWeather() {

            const city =
            document.getElementById("cityInput").value;

            if(city === ""){

                alert("Please enter city name");
                return;

            }

            const url =
            `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

            try {

                const response =
                await fetch(url);

                const data =
                await response.json();

                console.log(data);

                if(data.cod != 200){

                    alert(data.message);
                    return;

                }

                document.getElementById(
                    "temperature"
                ).innerHTML =
                `${data.main.temp} °C`;

                document.getElementById(
                    "humidity"
                ).innerHTML =
                `${data.main.humidity} %`;

                document.getElementById(
                    "wind"
                ).innerHTML =
                `${data.wind.speed} km/h`;

                document.getElementById(
                    "condition"
                ).innerHTML =
                data.weather[0].main;

                document.getElementById(
                    "cityName"
                ).innerHTML =
                data.name;

            }

            catch(error){

                console.log(error);

                alert("Weather API Error");

            }

        }

    </script>

    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>