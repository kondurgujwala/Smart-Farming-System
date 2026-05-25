<?php
session_start();
include "backend/db.php";

/* Fetch Crops */

$sql = "SELECT * FROM crops ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crops Management | Smart Farming</title>

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

                <i class="fa-solid fa-seedling"></i>
                Crop Management

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
                        <a href="crops.php" class="active">
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

                <!-- Heading -->

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div>

                        <h2 class="fw-bold">

                            Crop Management

                        </h2>

                        <p class="text-muted">

                            Add and manage your crops

                        </p>

                    </div>

                </div>

                <!-- Add Crop Form -->

                <div class="card shadow border-0 mb-5">

                    <div class="card-body">

                        <h5 class="mb-4">

                            Add New Crop

                        </h5>

                        <form
                            action="backend/add_crop.php"
                            method="POST"
                        >

                            <div class="row">

                                <!-- Crop Name -->

                                <div class="col-md-4 mb-3">

                                    <label class="form-label">

                                        Crop Name

                                    </label>

                                    <input
                                        type="text"
                                        name="crop_name"
                                        class="form-control"
                                        placeholder="Enter crop name"
                                        required
                                    >

                                </div>

                                <!-- Crop Status -->

                                <div class="col-md-4 mb-3">

                                    <label class="form-label">

                                        Status

                                    </label>

                                    <select
                                        name="status"
                                        class="form-select"
                                        required
                                    >

                                        <option value="">
                                            Select Status
                                        </option>

                                        <option value="Growing">
                                            Growing
                                        </option>

                                        <option value="Harvest Ready">
                                            Harvest Ready
                                        </option>

                                        <option value="Completed">
                                            Completed
                                        </option>

                                    </select>

                                </div>

                                <!-- Harvest Date -->

                                <div class="col-md-4 mb-3">

                                    <label class="form-label">

                                        Harvest Date

                                    </label>

                                    <input
                                        type="date"
                                        name="harvest_date"
                                        class="form-control"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Submit Button -->

                            <button
                                type="submit"
                                class="btn btn-success"
                            >

                                <i class="fa-solid fa-plus"></i>
                                Add Crop

                            </button>

                        </form>

                    </div>

                </div>

                <!-- Crop Table -->

                <div class="card shadow border-0">

                    <div class="card-body">

                        <h5 class="mb-4">

                            Crop Records

                        </h5>

                        <div class="table-responsive">

                            <table class="table table-hover align-middle">

                                <thead class="table-success">

                                    <tr>

                                        <th>ID</th>
                                        <th>Crop Name</th>
                                        <th>Status</th>
                                        <th>Harvest Date</th>
                                        <th>Actions</th>

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
                                            <?php echo $row['crop_name']; ?>
                                        </td>

                                        <td>

                                            <?php
                                            if($row['status'] == "Growing"){
                                                echo "<span class='badge bg-warning'>Growing</span>";
                                            }
                                            elseif($row['status'] == "Harvest Ready"){
                                                echo "<span class='badge bg-primary'>Harvest Ready</span>";
                                            }
                                            else{
                                                echo "<span class='badge bg-success'>Completed</span>";
                                            }
                                            ?>

                                        </td>

                                        <td>
                                            <?php echo $row['harvest_date']; ?>
                                        </td>

                                        <td>

                                            <!-- Edit Button -->

                                            <a href="backend/edit_crop.php?id=<?php echo $row['id']; ?>">

                                                <button
                                                type="button"
                                                class="btn btn-sm btn-primary">

                                                    <i class="fa-solid fa-pen"></i>

                                                </button>

                                            </a>

                                            <!-- Delete Button -->

                                            <a href="backend/delete_crop.php?id=<?php echo $row['id']; ?>">

                                                <button
                                                type="button"
                                                class="btn btn-sm btn-danger">

                                                    <i class="fa-solid fa-trash"></i>

                                                </button>

                                            </a>

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

    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>