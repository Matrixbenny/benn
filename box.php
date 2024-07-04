<?php
$mainBoxBorder = '#14ef14';
$contentBoxBgColor = 'blue';
$contentBoxTextColor = 'blanchedalmond';
$contentBoxFontSize = '20px';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box</title>
    <style>
       .main_box {
            border: 1px solid <?php echo $mainBoxBorder;?>;
        }

       .content_box {
            margin: 5px 10px 14px 2px;
            background-color: <?php echo $contentBoxBgColor;?>;
            text-align: center;
            width: 50%;
            color: <?php echo $contentBoxTextColor;?>;
            font-size: <?php echo $contentBoxFontSize;?>;
            padding: 5% 10% 14% 2%
        }
    </style>
</head>
<body>
    <div class="main_box">
        <div class="content_box">
            <!-- content goes here -->
        </div>
    </div>
</body>
</html>