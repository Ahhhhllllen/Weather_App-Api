<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background: <?php echo e($gradient); ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        /* Weather app container */
        .weather-app {
            background: rgba(255, 255, 255, 0.80); /* 80% opacity white */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        /* Hover effect on weather app */
        .weather-app:hover {
            transform: scale(1.05);
        }
        /* Heading and paragraph styles */
        .weather-app h1,
        .weather-app p {
            transition: color 0.3s ease;
        }
        /* Heading styles */
        .weather-app h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        /* Paragraph styles */
        .weather-app p {
            margin: 5px 0;
        }
        /* Icon styles */
        .weather-app .icon {
            margin-top: 20px;
        }
        /* Button styles */
        .weather-app button {
            padding: 10px 20px;
            border: none;
            background: <?php echo e($buttonColor); ?>;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 20px;
        }
        /* Button hover styles */
        .weather-app button:hover {
            background: <?php echo e($buttonHoverColor); ?>;
        }
        /* Results container styles */
        .results-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Weather app container -->
    <div class="weather-app">
        <!-- Heading -->
        <h1>Weather Report</h1>
        <!-- Results container -->
        <div class="results-container">
            <!-- Display weather data if available -->
            <?php if($weatherData): ?>
                <p><strong>Location:</strong> <?php echo e($weatherData['location']['name']); ?>, <?php echo e($weatherData['location']['country']); ?></p>
                <p><strong>Time:</strong> <?php echo e($weatherData['location']['localtime']); ?></p>
                <p><strong>Temperature:</strong> <?php echo e($weatherData['current']['temp_c']); ?> °C</p>
                <p><strong>UV Index:</strong> <?php echo e($weatherData['current']['uv']); ?></p>
                <p><strong>Wind Speed:</strong> <?php echo e($weatherData['current']['wind_kph']); ?> kph</p>
                <p><strong>Condition:</strong> <?php echo e($weatherData['current']['condition']['text']); ?></p>
                <!-- Display weather icon -->
                <div class="icon">
                    <img src="<?php echo e('https:' . $weatherData['current']['condition']['icon']); ?>" alt="weather icon">
                </div>
            <!-- Display error message if there's an error -->
            <?php elseif($error): ?>
                <p><?php echo e($error); ?></p>
            <?php endif; ?>
        </div>
        <!-- Link to weather form -->
        <a href="<?php echo e(route('weather.form')); ?>">
            <!-- Back button -->
            <button>Back</button>
        </a>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\weather-app-final\resources\views/weather_result.blade.php ENDPATH**/ ?>