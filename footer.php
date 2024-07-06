<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href=".s/css/styles.css">
</head>
<body>

<div class="foot">
    <p>&copy; 2024 - footer epico</p>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Toggle Sidebar
    document.getElementById('btn').onclick = function () {
        document.querySelector('.slidebar').classList.toggle('active');
        document.querySelector('.container').classList.toggle('active');
        document.querySelector('.foot').classList.toggle('active');
    }
</script>
</body>
</html>
