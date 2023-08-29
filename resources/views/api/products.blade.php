<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>All Products</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Rating</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Thumbnail</th>
            </tr>

        </table>
    </div>
    <script>
        fetch('https://dummyjson.com/products')
            .then(res => res.json())
            .then(res =>{
                res.products.forEach(el => {
                    let tr = `
                    <tr>
                        <td>${el.id}</td>
                        <td>${el.title}</td>
                        <td>${el.price}</td>
                        <td>${el.rating}</td>
                        <td>${el.brand}</td>
                        <td>${el.category}</td>
                        <td><img width="80" src="${el.thumbnail}" alt=""></td>
                    </tr>
                    `
                    document.querySelector('table').innerHTML +=tr
                });
            }

            );
    </script>
</body>

</html>
