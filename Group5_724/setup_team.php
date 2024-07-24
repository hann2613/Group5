<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Up1-StudentPreneur</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['team_name'])) {
        $_SESSION['team_name'] = $_POST['team_name'];
        header('Location: choose_teammate.php'); // 跳转到选择队友页面
        exit();
    }
    ?>

    <header>
        <nav>
            <div class="logo">StudentPreneur</div>
            <ul>
                <li href="#">Home</li>
                <li href="#">Learning</li>
                <li href="#">Events</li>
                <li href="#">Global Connections</li>
            </ul>
            <div class="icons">
                <span href="#">🧑‍🧒</span>
                <span href="#">💬</span>
                <span href="#">👤</span>
                <button href="#">Team Up</button>
            </div>
        </nav>
    </header>
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