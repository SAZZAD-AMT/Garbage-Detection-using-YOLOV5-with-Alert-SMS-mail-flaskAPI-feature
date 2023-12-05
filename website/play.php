<!DOCTYPE html>
<html>
<head>
    <title>Video Player</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Video Player</h1>
        <div class="embed-responsive embed-responsive-16by9">
            <?php
            // Retrieve the selected video from the query string
            $selectedVideo = $_GET['video'] ?? null;

            // Define the base directory where the videos are stored
            $baseDirectory = 'C:/Users/Administrator/Desktop/CAPSTONE C Project/yolov4/runs/detect/exp/';

            // Check if the selected video is provided and exists
            if ($selectedVideo && file_exists($baseDirectory . $selectedVideo) && pathinfo($selectedVideo, PATHINFO_EXTENSION) === 'mp4') {
                echo '<video class="embed-responsive-item" controls>';
                echo '<source src="' . $baseDirectory . $selectedVideo . '" type="video/mp4">';
                echo '</video>';
            } else {
                echo '<p>Invalid video selection.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
