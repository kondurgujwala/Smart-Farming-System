<?php
session_start();
include "backend/db.php";

/* Default User Data */

$userName = "Ujwala";
$userEmail = "ujwala@example.com";
$userPhone = "+91 9876543210";
$userLocation = "Hyderabad, India";
$userRole = "Farmer";

/* Update Profile */

if(isset($_POST['save_profile'])){

    $userName = $_POST['name'];

    $userEmail = $_POST['email'];

    $userPhone = $_POST['phone'];

    $userLocation = $_POST['location'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Profile | Smart Farming</title>

    <!-- Bootstrap -->

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <!-- Font Awesome -->

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background:#edf2ee;">

<!-- TOPBAR -->

<div class="profile-topbar">

    <div class="logo-section">

        <i class="fa-solid fa-leaf"></i>

        Smart Farming

    </div>

    <a href="dashboard.php" class="dashboard-btn">

        <i class="fa-solid fa-arrow-left"></i>

        Back to Dashboard

    </a>

</div>

<!-- PROFILE SECTION -->

<div class="container py-5">

    <!-- Heading -->

    <div class="mb-4">

        <h1 class="fw-bold">

            User Profile

        </h1>

        <p class="text-muted">

            Manage your farming account information

        </p>

    </div>

    <div class="row g-4">

        <!-- LEFT PROFILE CARD -->

        <div class="col-lg-4">

            <div class="card shadow border-0 rounded-4">

                <div class="card-body p-5 text-center">

                    <!-- Profile Image -->

                    <img
                    src="assets/images/profile.png"
                    alt="Profile"
                    class="profile-image mb-4">

                    <!-- Name -->

                    <h2 class="fw-bold">

                        <?php echo $userName; ?>

                    </h2>

                    <!-- Role -->

                    <p class="text-muted fs-5">

                        <?php echo $userRole; ?>

                    </p>

                    <!-- Badge -->

                    <span class="badge bg-success p-2 px-3">

                        Active User

                    </span>

                    <hr class="my-4">

                    <!-- Details -->

                    <div class="text-start profile-details">

                        <p>

                            <i class="fa-solid fa-envelope text-success"></i>

                            <?php echo $userEmail; ?>

                        </p>

                        <p>

                            <i class="fa-solid fa-phone text-success"></i>

                            <?php echo $userPhone; ?>

                        </p>

                        <p>

                            <i class="fa-solid fa-location-dot text-success"></i>

                            <?php echo $userLocation; ?>

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- RIGHT EDIT FORM -->

        <div class="col-lg-8">

            <div class="card shadow border-0 rounded-4">

                <div class="card-body p-5">

                    <h3 class="fw-bold mb-4">

                        Edit Profile

                    </h3>

                    <!-- FORM -->

                    <form method="POST">

                        <div class="row">

                            <!-- Name -->

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Full Name

                                </label>

                                <input
                                type="text"
                                name="name"
                                class="form-control profile-input"
                                value="<?php echo $userName; ?>"
                                >

                            </div>

                            <!-- Email -->

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Email Address

                                </label>

                                <input
                                type="email"
                                name="email"
                                class="form-control profile-input"
                                value="<?php echo $userEmail; ?>"
                                >

                            </div>

                        </div>

                        <div class="row">

                            <!-- Phone -->

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Phone Number

                                </label>

                                <input
                                type="text"
                                name="phone"
                                class="form-control profile-input"
                                value="<?php echo $userPhone; ?>"
                                >

                            </div>

                            <!-- Location -->

                            <div class="col-md-6 mb-3">

                                <label class="form-label">

                                    Location

                                </label>

                                <input
                                type="text"
                                name="location"
                                class="form-control profile-input"
                                value="<?php echo $userLocation; ?>"
                                >

                            </div>

                        </div>

                        <!-- Password -->

                        <div class="mb-3">

                            <label class="form-label">

                                Change Password

                            </label>

                            <input
                            type="password"
                            class="form-control profile-input"
                            placeholder="Enter new password">

                        </div>

                        <!-- About -->

                        <div class="mb-4">

                            <label class="form-label">

                                About Farmer

                            </label>

                            <textarea
                            class="form-control profile-input"
                            rows="4"
                            >Experienced farmer using smart farming technologies for better productivity.</textarea>

                        </div>

                        <!-- Buttons -->

                        <div class="d-flex gap-3">

                            <!-- SAVE -->

                            <button
                            type="submit"
                            name="save_profile"
                            class="btn btn-success px-4 py-2">

                                <i class="fa-solid fa-floppy-disk"></i>

                                Save Changes

                            </button>

                            <!-- RESET -->

                            <button
                            type="reset"
                            class="btn btn-outline-secondary px-4 py-2">

                                Reset

                            </button>

                        </div>

                    </form>

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