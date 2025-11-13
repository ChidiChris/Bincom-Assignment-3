<?php
// Define constant for career goal
define("CAREER_GOAL", "Full-Stack Developer & Cybersecurity Specialist");

// Declare variables
$first_name = "Chidiebube Christopher";
$age        = 26;
$bio        = "I am a passionate learner currently training at Bincom Dev Center in PHP/MySQL and web development. I enjoy building secure, functional applications and solving real-world problems through code. My goal is to become a Full-Stack Developer and a cybersecurity expert who can protect systems while creating innovative solutions.";

// Current hour (24-hour format)
$hour = date("H");

// Greeting based on time
if ($hour < 12) {
    $greeting = "Good morning";
} elseif ($hour < 18) {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | <?php echo $first_name; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #1a1a1a;
            color: #e0e0e0;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 700px;
            margin: 40px auto;
            background: #2d2d2d;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
            border: 1px solid #404040;
        }
        h1 {
            color: #3498db;
            border-bottom: 3px solid #2980b9;
            padding-bottom: 12px;
            margin-top: 0;
        }
        .greeting {
            font-size: 1.4em;
            color: #f1c40f;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            margin: 16px 0;
            color: #bdc3c7;
        }
        .label {
            font-weight: bold;
            color: #3498db;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 0.9em;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="greeting">
            Hi, <?php echo $greeting; ?>!
        </div>

        <h1>I'm <?php echo $first_name; ?>.</h1>

        <p><span class="label">Age:</span> <?php echo $age; ?> years old</p>

        <p><span class="label">About Me:</span> <?php echo $bio; ?></p>

        <p><span class="label">Career Goal:</span> <?php echo CAREER_GOAL; ?></p>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> <?php echo $first_name; ?>. All rights reserved.
    </footer>

    <!-- Debug: Show exact load time with timezone -->
    <script>
      const now = new Date();
      console.log(`Page loaded at: ${now.toLocaleTimeString()} on ${now.toLocaleDateString()} [${Intl.DateTimeFormat().resolvedOptions().timeZone}]`);
    </script>
</body>
</html>