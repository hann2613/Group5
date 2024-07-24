<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Up2-StudentPreneur</title>
    <link rel="stylesheet" href="style9.css">
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('model/database.php');
session_set_cookie_params(0);
session_start();

// 假设你的团队名称存储在会话中
$teamName = isset($_SESSION['team_name']) ? htmlspecialchars($_SESSION['team_name']) : 'Your Team';

// var_dump($_SESSION);

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
        <div class="step completed">Set Up Your Team</div>
        <div class="step completed">Choose Your Teammate</div>
        <div class="step active">Succeed</div>
    </div>
    <div class="setup-team">
        <h1>Congratulations, <?php echo $teamName; ?> has set up!</h1>
        <h2>Your Team Members:</h2>
        <div class="your-team">
            <table>
                <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['team'])) {
                        foreach ($_SESSION['team'] as $user) {
                            echo '<tr>';
                            echo '<td><img src="' . htmlspecialchars($user['avatar']) . '" alt="' . htmlspecialchars($user['name']) . '" class="user-avatar"></td>';
                            echo '<td>' . htmlspecialchars($user['name']) . '</td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="manage-team">
            <a href="#"><button>Manage Your Team</button></a>
        </div>
    </div>
</main>
<footer>
    &copy; 2024 StudentPreneur. All rights reserved.
</footer>
</body>
</html>
