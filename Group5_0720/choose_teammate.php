<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Up2-StudentPreneur</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require('model/database.php');
    require('model/search_user_db.php');

    session_set_cookie_params(0);
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['select_user'])) {
        $selected_user = [
            'id' => $_POST['selected_user_id'],
            'name' => $_POST['selected_user_name'],
            'avatar' => $_POST['selected_user_avatar']
        ];
        $_SESSION['team'][] = $selected_user;

        header("Location: " . $_SERVER['PHP_SELF']);
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
            <div class="step completed">Set Up Your Team</div>
            <div class="step active">Choose Your Teammate</div>
            <div class="step">Succeed</div>
        </div>
        <div class="choose-teammate">
            <h1>Choose Your Teammate</h1>
            <div class="search-container">
                <form method="post" action="">
                    <div class="search-input-wrapper">
                        <input type="text" name="tag" placeholder="Tag..." required>
                        <button type="submit" name="search_user" class="search-button">🔍</button>
                    </div>
                </form>
                <div class="image-placeholder">
                    <img src="img/teamup.jpeg" alt="Team Up">
                </div>
            </div>
            <div class="user-results">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search_user'])) {
                    $tag = $_POST['tag'];
                    $users = search_users_by_tag($tag);

                    foreach ($users as $user) {
                        echo '<div class="user-card">';
                        echo '<img src="' . htmlspecialchars($user['avatar']) . '" alt="' . htmlspecialchars($user['firstName']) . '" class="user-avatar">';
                        echo '<p>' . htmlspecialchars($user['firstName'] . ' ' . $user['lastName']) . '</p>';
                        echo '<p>' . htmlspecialchars($user['description']) . '</p>';
                        echo '<form method="post" action="" target="hidden_iframe">';
                        echo '<input type="hidden" name="selected_user_id" value="' . $user['id'] . '">';
                        echo '<input type="hidden" name="selected_user_name" value="' . htmlspecialchars($user['firstName'] . ' ' . $user['lastName']) . '">';
                        echo '<input type="hidden" name="selected_user_avatar" value="' . htmlspecialchars($user['avatar']) . '">';
                        echo '<button type="submit" name="select_user" class="select-button">Select</button>';
                        echo '</form>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
            <div class="next-button-container">
                <button type="button" class="next-button" onclick="location.href='succeed.php'">Next</button>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const buttons = document.querySelectorAll('.select-button');
            buttons.forEach(button => {
                button.addEventListener('click', (e) => {
                    // e.preventDefault(); 
                    button.classList.add('selected');
                });
            });
        });
    </script>
    <iframe name="hidden_iframe" style="display:none;"></iframe>

    <footer>
        &copy; 2024 StudentPreneur. All rights reserved.
    </footer>

</body>

</html>