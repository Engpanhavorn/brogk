<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: animated-website.html');
    exit();
}
?>
<?php
session_start();
// Simple PHP login validation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($username === 'admin' && $password === '@2025panhavorn') {
        $_SESSION['logged_in'] = true;
        echo '<link rel="stylesheet" href="channel.html" />';
        echo '<div style="color:#00c3ff;text-align:center;margin-top:30px;font-size:1.2rem;">Login successful!</div>';
        echo '<script>setTimeout(function(){ window.location.href = "channel.html"; }, 1200);</script>';
        echo '<div style="text-align:center;margin-top:20px;">
                <h2 style="color:#ff0000;">Welcome to the New Channel!</h2>
                <p style="color:#2a5298;font-size:1.1rem;">BROGK-OFFICIAL - Professional Animation AI 2025</p>
                <a href="channel.html" style="display:inline-block;margin-top:18px;padding:10px 24px;background:#2a5298;color:#fff;border-radius:6px;text-decoration:none;">Go to Channel</a>
              </div>';
    } else {
        echo '<div style="color:#ff6f61;text-align:center;margin-top:30px;font-size:1.2rem;">Invalid username or password.</div>';
        echo '<link rel="stylesheet" href="channel.html" />';
    }
} else {
    header('Location: animated-website.html');
    exit();
}
