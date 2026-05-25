<?php
session_start();
include "backend/db.php";

/* Fetch Expenses */

$sql = "SELECT * FROM expenses ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

/* Total Expense */

$totalExpenseQuery = "SELECT SUM(amount) AS total FROM expenses";
$totalExpenseResult = mysqli_query($conn, $totalExpenseQuery);
$totalExpenseData = mysqli_fetch_assoc($totalExpenseResult);

$totalExpense = $totalExpenseData['total'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Expenses Management | Smart Farming</title>

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

                <i class="fa-solid fa-wallet"></i>
                Expense Management

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
                        <a href="expenses.php" class="active">
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

                <!-- Heading -->

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div>

                        <h2 class="fw-bold">

                            Expense Management

                        </h2>

                        <p class="text-muted">

                            Track your farming expenses

                        </p>

                    </div>

                </div>

                <!-- Summary Cards -->

                <div class="row g-4 mb-5">

                    <!-- Total Expenses -->

                    <div class="col-md-4">

                        <div class="card shadow border-0 dashboard-card">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <div>

                                        <h6 class="text-muted">

                                            Total Expenses

                                        </h6>

                                        <h3 class="fw-bold">

                                            ₹<?php echo $totalExpense; ?>

                                        </h3>

                                    </div>

                                    <i class="fa-solid fa-money-bill-wave card-icon text-danger"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Monthly Budget -->

                    <div class="col-md-4">

                        <div class="card shadow border-0 dashboard-card">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <div>

                                        <h6 class="text-muted">

                                            Monthly Budget

                                        </h6>

                                        <h3 class="fw-bold">

                                            ₹50,000

                                        </h3>

                                    </div>

                                    <i class="fa-solid fa-chart-pie card-icon text-primary"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Remaining -->

                    <div class="col-md-4">

                        <div class="card shadow border-0 dashboard-card">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <div>

                                        <h6 class="text-muted">

                                            Remaining

                                        </h6>

                                        <h3 class="fw-bold text-success">

                                            ₹<?php echo 50000 - $totalExpense; ?>

                                        </h3>

                                    </div>

                                    <i class="fa-solid fa-wallet card-icon text-success"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Add Expense Form -->

                <div class="card shadow border-0 mb-5">

                    <div class="card-body">

                        <h5 class="mb-4">

                            Add New Expense

                        </h5>

                        <form
                            action="backend/add_expense.php"
                            method="POST"
                        >

                            <div class="row">

                                <!-- Expense Title -->

                                <div class="col-md-4 mb-3">

                                    <label class="form-label">

                                        Expense Title

                                    </label>

                                    <input
                                        type="text"
                                        name="title"
                                        class="form-control"
                                        placeholder="Enter expense title"
                                        required
                                    >

                                </div>

                                <!-- Amount -->

                                <div class="col-md-4 mb-3">

                                    <label class="form-label">

                                        Amount

                                    </label>

                                    <input
                                        type="number"
                                        name="amount"
                                        class="form-control"
                                        placeholder="Enter amount"
                                        required
                                    >

                                </div>

                                <!-- Date -->

                                <div class="col-md-4 mb-3">

                                    <label class="form-label">

                                        Expense Date

                                    </label>

                                    <input
                                        type="date"
                                        name="expense_date"
                                        class="form-control"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Button -->

                            <button
                                type="submit"
                                class="btn btn-success"
                            >

                                <i class="fa-solid fa-plus"></i>
                                Add Expense

                            </button>

                        </form>

                    </div>

                </div>

                <!-- Expense Chart -->

                <div class="card shadow border-0 mb-5">

                    <div class="card-body">

                        <h5 class="mb-4">

                            Monthly Expense Overview

                        </h5>

                        <canvas id="expenseChart"></canvas>

                    </div>

                </div>

                <!-- Expense Table -->

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h5 class="mb-4">

                            Expense Records

                        </h5>

                        <div class="table-responsive">

                            <table class="table table-hover align-middle">

                                <thead class="table-success">

                                    <tr>

                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php
                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>

                                    <tr>

                                        <td>
                                            <?php echo $row['id']; ?>
                                        </td>

                                        <td>
                                            <?php echo $row['title']; ?>
                                        </td>

                                        <td>

                                            ₹<?php echo $row['amount']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['expense_date']; ?>

                                        </td>

                                        <td>

                                            <span class="badge bg-success">

                                                Recorded

                                            </span>

                                        </td>

                                    </tr>

                                    <?php
                                    }
                                    ?>

                                </tbody>

                            </table>

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

            type: 'bar',

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
                        18000,
                        14000,
                        22000,
                        19000,
                        25000
                    ],

                    borderWidth: 1

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