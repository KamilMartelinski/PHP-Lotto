<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="process.php" method="post">
    <label>Wybierz 6 liczb (1-49):</label><br>
    <?php for ($i = 1; $i <= 6; $i++): ?>
        <input type="number" name="userNumbers[]" min="1" max="49" required><br>
    <?php endfor; ?>
    <input type="submit" value="Zagraj">
</form>


</body>
</html>