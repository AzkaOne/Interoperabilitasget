<?php
$url = 'https://jsonplaceholder.typicode.com/comments';

//ambil data dari api url
$response = file_get_contents($url);

//mengubah data json menjadi array asisoatif
$data =json_decode($response, true);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleku/gayaku.css">
    <title>DATA POST (PHP)</title>
</head>
<body>
    <h1>Data COMMENT dari JSONPlaceholder API (PHP)</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $post):  ?>
                <tr>
                    <td><?php echo $post['id']; ?></td>
                    <td><?php echo htmlspecialchars($post['name']); ?></td>
                    <td><?php echo htmlspecialchars($post['email']); ?></td>
                    <td><?php echo htmlspecialchars($post['body']); ?></td>
                </tr>
            <?php endforeach; ?>     
        </tbody>
    </table>

    
</body>
</html>