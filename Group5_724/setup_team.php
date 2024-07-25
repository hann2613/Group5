<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Up</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <?php
    include 'header.php';
    require('model/database.php');
    require('model/user_db.php');
    
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['team_name'])) {
        $_SESSION['team_name'] = $_POST['team_name'];
        header('Location: choose_teammate.php');
        exit();
    }
    ?>

    <main>
        <div class="progress-bar">
            <div class="step completed">Welcome</div>
            <div class="step active">Set Up Your Team</div>
            <div class="step">Choose Your Teammate</div>
            <div class="step">Succeed</div>
        </div>
        <div class="setup-team">
            <h1>Set Up Your Team Now!</h1>
            <div class="form-container">
                <form method="post" action="">
                    <input type="text" name="team_name" placeholder="Team Name" required>
                    <button type="submit" class="next-button">Next</button>
                </form>
                <div class="image-placeholder">
                    <img src="img/teamup.jpeg" alt="Team Up">
                </div>
            </div>
        </div>
    </main>
    <footer>
        &copy; 2024 StudentPreneur. All rights reserved.
    </footer>
</body>
</html>