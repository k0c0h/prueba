<?php
require_once '../conexion/db.php';

$sql = "SELECT id, build_id, color, price FROM builds ORDER BY id DESC";
$stmt = $pdo->query($sql);
$materias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Read</title>
<link rel="stylesheet" href="../public/lib/bootstrap-5.3.5-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    body {
        background-color: #f8f9fa;
    }
    .table-container {
        margin-top: 40px;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 20px rgba(0,0,0,0.1);
    }
</style>
</head>
<body>

<div class="container table-container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">READ</h2>
    </div>

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>BUILD ID</th>
                <th>COLOR</th>
                <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($builds) > 0): ?>
                <?php foreach ($builds as $b): ?>
                    <tr>
                        <td><?= htmlspecialchars($b['id']) ?></td>
                        <td><?= htmlspecialchars($b['build_id']) ?></td>
                        <td><?= htmlspecialchars($b['color']) ?></td>
                        <td><?= htmlspecialchars($b['price']) ?></td>                    
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Not found builds</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>

</script>
</body>
</html>
