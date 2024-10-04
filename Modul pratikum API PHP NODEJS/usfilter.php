<?php
$url = 'https://jsonplaceholder.typicode.com/users';

//ambil data dari api url
$response = file_get_contents($url);

//mengubah data json menjadi array asisoatif
$data =json_decode($response, true);

$filter = 2;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleku/gayaku.css">
    <title>DATA USERS (PHP)</title>
</head>
<body>
    <h1>Data USERS dari JSONPlaceholder API (PHP)</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Ussername</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
            
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $post):  ?>
                <?php if($post['id'] == $filter): ?>
                    <tr>
                        <td><?php echo $post['id']; ?></td>
                        <td><?php echo htmlspecialchars($post['name']); ?></td>
                        <td><?php echo htmlspecialchars($post['username']); ?></td>
                        <td><?php echo htmlspecialchars($post['email']); ?></td>
                        <td><?php echo htmlspecialchars($post['phone']); ?></td>
                        <td><?php echo htmlspecialchars($post['website']); ?></td>

                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>     
        </tbody>
    </table>

    
</body>
</html>