<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .weather-app {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .weather-app h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .weather-app p {
            margin: 5px 0;
        }
        .weather-app .icon {
            margin-top: 20px;
            text-align: center;
        }
        .weather-app form {
            margin-top: 20px;
        }
        .weather-app input {
            width: calc(100% - 50px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .weather-app button {
            padding: 8px 12px;
            border: none;
            background: #007bff;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="weather-app">
        <h1>Weather App</h1>
        <?php if(isset($weatherData)): ?>
            <p><strong>City:</strong> <?php echo e($weatherData['location']['name']); ?></p>
            <p><strong>Time:</strong> <?php echo e($weatherData['location']['localtime']); ?></p>
            <p><strong>Temperature:</strong> <?php echo e($weatherData['current']['temp_c']); ?> °C</p>
            <p><strong>Condition:</strong> <?php echo e($weatherData['current']['condition']['text']); ?></p>
            <p><strong>UV Index:</strong> <?php echo e($weatherData['current']['uv']); ?></p>
            <div class="icon">
                <img src="<?php echo e('https:' . $weatherData['current']['condition']['icon']); ?>" alt="weather icon">
            </div>
        <?php elseif(isset($error)): ?>
            <p><?php echo e($error); ?></p>
        <?php endif; ?>
        <form action="<?php echo e(route('weather.index')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="city" placeholder="Enter city" required>
            <button type="submit">Get Weather</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Asus\weather-app\resources\views/weather.blade.php ENDPATH**/ ?>