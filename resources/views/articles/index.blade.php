<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
</head>
<body>
    <h1>Articles</h1>
    <form id="articleForm">
        <input type="text" id="title" placeholder="Title" required>
        <textarea id="content" placeholder="Content" required></textarea>
        <button type="submit">Add Article</button>
    </form>
    
    <script>
        document.getElementById('articleForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let title = document.getElementById('title').value;
            let content = document.getElementById('content').value;
            
            axios.post('/articles', {
                title: title,
                content: content
            }).then(response => {
                alert(response.data.message);
            });
        });
    </script>
</body>
</html>