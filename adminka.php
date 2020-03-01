<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="container">
        Админка
    </header>
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="admin-prod-links">
                    <a href="/add-prod.php">Добавить товар</a>
                    |
                    <a href="/add-cat.php">Добавить категорию</a>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Название товара</th>
                        <th>Категория товара</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Товар 1</td>
                            <td>Категория товара 1</td>
                            <td>
                                <a href="edit-prod.php">Редактировать</a>
                                |
                                <a href="">Удалить</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Товар 2</td>
                            <td>Категория товара 2</td>
                            <td>
                                <a href="edit-prod.php">Редактировать</a>
                                |
                                <a href="">Удалить</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>