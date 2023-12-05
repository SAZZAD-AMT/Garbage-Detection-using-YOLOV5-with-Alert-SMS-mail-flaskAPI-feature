<!DOCTYPE html>
<html>
<head>
    <title>Video Directory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .video-list {
            list-style-type: none;
            padding: 0;
        }

        .video-list-item {
            margin-bottom: 10px;
        }

        .video-list-item a {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Video Directory</h1>
        <ul class="video-list">
            <?php
            $directory = 'C:/Users/Administrator/Desktop/CAPSTONE C Project/yolov4/runs/detect';

            // Scan the directory for video files
            $videos = glob($directory . '/*.mp4');

            // Iterate over the video files and display them as list items
            foreach ($videos as $video) {
                $videoName = basename($video);
                echo '<li class="video-list-item"><a href="play.php?video=' . urlencode($videoName) . '">' . $videoName . '</a></li>';
            }
            ?>
        </ul>
    </div>
</body>
</html>
