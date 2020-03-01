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
            <h1>
                Добавление или редактирование товара
            </h1>
        </div>
        <div class="col-md-6">
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Введите название товара">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Введите краткое описание товара">
                </div>
                <div class="form-group">
                    <textarea name="" id="" cols="30" rows="5"  class="form-control"placeholder="Введите полное описание товара"></textarea>
                </div>
                <div class="form-group">
                    Добавьте изображение товара:
                    <input class="form-control" type="file">
                </div>
                <div class="form-group">
                    Выбирете категорию товара:
                    <select name="" id="" class="form-control">
                        <option value="">Категория 1</option>
                        <option value="">Категория 2</option>
                        <option value="">Категория 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>