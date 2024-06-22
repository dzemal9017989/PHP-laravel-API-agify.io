<!-- resources/views/age/result.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Result</title>
</head>
<body>
    <h1>Leeftijd Voorspelling</h1>
    <p>Naam: <?php echo e($ageData['name']); ?></p>
    <p>Leeftijd: <?php echo e($ageData['age']); ?></p>
    <p>Aantal: <?php echo e($ageData['count']); ?></p>
</body>
</html>
<?php /**PATH C:\xampp4\htdocs\PHP-laravel-API-agify.io\resources\views/age/result.blade.php ENDPATH**/ ?>