<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Up2-StudentPreneur</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
<?php include 'header.php'; ?>
    <main>
        <div class="progress-bar">
            <div class="step completed">Welcome</div>
            <div class="step completed">Set Up Your Team</div>
            <div class="step active">Choose Your Teammate</div>
            <div class="step">Succeed</div>
        </div>
        <div class="setup-team">
            <h1>Choose Your Teammate</h1>
            <div class="form-container">
                <form>
                    <input type="text" placeholder="Tag..." required>
                    <div class="tags">
                        <span class="tag">😃</span>
                        <span class="tag">😄</span>
                        <span class="tag">😆</span>
                        <span class="tag">🥹</span>
                        <span class="tag">🙂</span>
                        <span class="tag">...</span>
                    </div>
                    <button type="submit">Next</button>
                </form>
                <div class="image-placeholder">
                    
                    <img src="path_to_your_image.jpg" alt="Placeholder Image">
                </div>
            </div>
        </div>
    </main>
    <footer>
        &copy; 2024 StudentPreneur. All rights reserved.
    </footer>
</body>
</html>
