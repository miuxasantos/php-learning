<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome:</th>
                    <th>Email:</th>
                    <th>Telefone:</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($resultData as $data): ?>
                        <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['name'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['phone'] ?></td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>