const express=require('express');
const axios = require('axios');
const app = express();
const port = 300;

//mengambill data dari 'API JSONPlaceholder'
app.get('/',async(req,res)=>{
    try{
        const response = await axios.get('https://jsonplaceholder.typicode.com/posts');

        const data = response.data;

        let tableHTML =`
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mys.css">
    <title>Data Posts (Nodejs) </title>
</head>
<body>
<h1>Data Post dari JSONPlaceholder API (Node.js)</h1>

<table >
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody>`;
        data.forEach(post =>{
            tableHTML += `<tr>
                <td>${post.id}</td>
                <td>${post.title}</td>
                <td>${post.body}</td>
            </tr>`;
        });
    tableHTML += `</tbody>
</table>
    
</body>
</html>`;

res.send(tableHTML);
        

    }
    catch (error){
        res.status(500).send('Error fetching data');
    }
});


//mnjalankan servver
app.listen(3000, () => { // Callback function yang benar
    console.log(`Server berjalan di http://localhost:${port}`);
});

