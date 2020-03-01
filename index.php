<?php require_once 'header.php'; ?>

        <header class="container">
            <h1>Список товаров</h1>
        </header>
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Категория 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Категория 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Категория 3
                            </a>
                        </li>
                    </ul>
                </div>

                <?php
                
                $all_products = select_all_products();
                //beautiful_var_dump($all_products);

                foreach ($all_products as $product) {                    
                    ?>

                    <div class="col-md-4">
                        <div class="products-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/product-item.php">
                                        <img src="img/<?php echo $product['prod_img']; ?>" alt="Картинка товара" width="150">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <div><?php echo $product['prod_category']; ?></div>
                                    <a href="/product-item.php">
                                        <h4><?php echo $product['prod_name']; ?></h4>
                                    </a>
                                    <div><?php echo $product['prod_full_text']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>

                
                
            </div>
        </section>
        <footer>

        </footer>
    </body>
</html>