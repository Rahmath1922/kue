<?php
include 'function.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ball | Singkong</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,700&display=swap" rel="stylesheet">

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My style -->
    <link rel="stylesheet" href="style.css">

    <!-- AlpinesJs -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- App -->
    <script src="src/app.js"></script>
</head>

<body>

    <!-- Navbar star -->
    <nav class="navbar" x-data>
        <a href="#" class="navbar-logo">Ball<span>Singkong</span></a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
            <a href="#menu">Menu</a>
            <a href="#products">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"></a>
            <a id="shopping-cart-button">
                <i data-feather="shopping-cart"></i>
                <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span>
            </a>
            <a id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

        <!-- Search form start -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <!-- Search form end -->

        <!--shopping cart start  -->
        <div class="shopping-cart">
            <template x-for="(item, index) in $store.cart.items" x-keys="index">
                <div class="cart-item">
                    <img :src="`img/products/${item.img}`" :alt="Product 1">
                    <div class="item-detail">
                        <h3 x-text="item.name"></h3>
                        <div class="item-price">
                            <span x-text="rupiah(item.price)"></span> &times;
                            <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
                            <span x-text="item.quantity"></span>
                            <button id="add" @click="$store.cart.add(item)">&plus;</button> &equals;
                            <span x-text="rupiah(item.total)"></span>
                        </div>
                    </div>
                </div>
            </template>
            <h4 x-show="!$store.cart.items.length" style="margin-top: 1rem;">Cart is empty</h4>
            <h4 x-show="$store.cart.items.length">Total :<span x-text="rupiah($store.cart.total)"></span></h4>
        </div>
        <!--shopping cart end  -->


    </nav>
    <!-- Navbar end -->

    <!-- Hero section start -->
    <section class="hero" id="home">
        <main class="content">

            </p>
        </main>
    </section>
    <!-- Hero section end -->

    <!-- About section start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/trobal.jpg" alt="Tentang kami">
            </div>
            <div class="content">
                <h3>kenapa harus memilih kami?</h3>
                <p>Merupakan olahan singkong/ubi yang berbentuk
                    adonan dibentuk bulat dan diisi dengan berbagai
                    macam rasa dan varian toping</p>
                <p>Ballsingkong adalah hasil inovasi olahan pangan kategori
                    cemilan dengan bahan dasar singkong, yang berisi berbagai macam
                    rasa kekinian. enak dan nikmat saat dikonsumsi dengan harga terjangkau
                    namun bahan yang digunakan berkualitas.
    </section>
    <!-- About section end -->

    <!-- Menu section stars -->
    <section id="menu" class="menu">
        <h2><span>Menu</span> kami</h2>
        <p>Disini kami menyediakan beberapa menu
            varian dan rasa dilengkapi dengan toping yang berkualitas
        </p>

        <div class="row">
            <div class="menu-card">
                <img src="img/products/1.jpg" alt="Coklat" class="menu-card-img">
                <h3 class="menu-card-title">- Coklat -</h3>
                <p class="menu-card-price">IDR 2K</p>
                <a class="item-detail-button"><i data-feather="info"></i></a>
            </div>
            <div class="menu-card">
                <img src="img/products/2.jpg" alt="Strawbery" class="menu-card-img">
                <h3 class="menu-card-title">- Strawbery -</h3>
                <p class="menu-card-price">IDR 2K</p>
                <a class="item-detail-button"><i data-feather="info"></i></a>
            </div>
            <div class="menu-card">
                <img src="img/products/3.jpg" alt="Coklat" class="menu-card-img">
                <h3 class="menu-card-title">- Tiramisu -</h3>
                <p class="menu-card-price">IDR 2K</p>
                <a class="item-detail-button"><i data-feather="info"></i></a>
            </div>
            <div class="menu-card">
                <img src="img/products/4.jpg" alt="Coklat" class="menu-card-img">
                <h3 class="menu-card-title">- Milo -</h3>
                <p class="menu-card-price">IDR 2K</p>
                <a class="item-detail-button"><i data-feather="info"></i></a>
            </div>
            <div class="menu-card">
                <img src="img/products/5.jpg" alt="Coklat" class="menu-card-img">
                <h3 class="menu-card-title">- Keju -</h3>
                <p class="menu-card-price">IDR 2K</p>
                <a class="item-detail-button"><i data-feather="info"></i></a>
            </div>
            <div class="menu-card">
                <img src="img/products/6.jpg" alt="Coklat" class="menu-card-img">
                <h3 class="menu-card-title">- Taro -</h3>
                <p class="menu-card-price">IDR 2K</p>
                <a class="item-detail-button"><i data-feather="info"></i></a>
            </div>
        </div>
    </section>
    <!-- Menu section end -->

    <!-- Products section start -->
    <section class="products" id="products" x-data="products">
        <h2><span>Produk unggulan</span> kami</h2>
        <p>Kami sangat merekomendasikan produk best seller
            kami yang tertera di bawah terimah kasih</p>
        </p>


        <div class="row">
            <template x-for="(item, index) in items" x-key="index">
                <div class="product-card">
                    <div class="product-icons">
                        <a href="#" @click.prevent="$store.cart.add(item)">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h8.64a2 2 0 0 0 2-1.61L23 6H6" />
                            </svg>
                        </a>


                    </div>
                    <div class="product-image">
                        <img :src="`img/products/${item.img}`" :alt="item.name">
                    </div>
                    <div class="product-content">
                        <h3 x-text="item.name"></h3>
                        <div class="product-stars">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                            </svg>

                        </div>
                        <div class="product-price"><span x-text="rupiah(item.price)"></span></div>
                    </div>
                </div>
            </template>
        </div>
    </section>
    <!-- Products section end -->


    <!-- Contack section start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> kami</h2>
        <p>Kalau temen temen penasaran dengan rasa dan
            kualitas cemilan kami, boleh kontak kami yaa
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31736.60676188789!2d106.90623450000002!3d-6.120493550000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1ff0d497530b%3A0xe8c38931491aa5c5!2sKec.%20Koja%2C%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1706085147818!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="clipboard"></i>
                    <input type="text" placeholder="Masukan & Kritik saran">
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>

        </div>
    </section>
    <!-- Contack section end -->

    <!-- Footer start -->
    <footer>
        <div class="social">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
            <a href="#menu">Menu</a>
            <a href="#contac">Home</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">rahmathermawan</a>. |
                &copy;2024.</p>

        </div>
    </footer>

    <!-- Footer End -->

    <!-- Modal box item detail start -->
    <div class="modal" id="item-detail-modal">
        <div class="modal-container">
            <a class="close-icon"><i data-feather="x"></i></a>

            <div class="modal-content">
                <img src="img/products/1.jpg" alt="Product 1">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Ballsingkong coklat memiliki rasa coklat dan
                        tekstur yang lumer dilengkapi dengan aroma rasa
                        singkong yang nikmat
                    </p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                    </div>
                    <div class="product-price">IDR 10K <span> IDR 13K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i>add to card</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal" id="item-detail-modal1">
        <div class="modal-container">
            <a class="close-icon"><i data-feather="x"></i></a>

            <div class="modal-content">
                <img src="img/products/2.jpg" alt="Product 2">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Ballsingkong coklat memiliki rasa coklat dan
                        tekstur yang lumer dilengkapi dengan aroma rasa
                        singkong yang nikmat
                    </p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                    </div>
                    <div class="product-price">IDR 10K <span> IDR 13K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i>add to card</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal" id="item-detail-modal2">
        <div class="modal-container">
            <a class="close-icon"><i data-feather="x"></i></a>

            <div class="modal-content">
                <img src="img/products/3.jpg" alt="Product 3">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Ballsingkong coklat memiliki rasa coklat dan
                        tekstur yang lumer dilengkapi dengan aroma rasa
                        singkong yang nikmat
                    </p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                    </div>

                    <div class="product-price">IDR 10K <span> IDR 13K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i>add to card</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal" id="item-detail-modal3">
        <div class="modal-container">
            <a class="close-icon"><i data-feather="x"></i></a>

            <div class="modal-content">
                <img src="img/products/4.jpg" alt="Product 4">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Ballsingkong coklat memiliki rasa coklat dan
                        tekstur yang lumer dilengkapi dengan aroma rasa
                        singkong yang nikmat
                    </p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                    </div>
                    <div class="product-price">IDR 10K <span> IDR 13K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i>add to card</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal" id="item-detail-modal4">
        <div class="modal-container">
            <a class="close-icon"><i data-feather="x"></i></a>

            <div class="modal-content">
                <img src="img/products/5.jpg" alt="Product 5">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Ballsingkong coklat memiliki rasa coklat dan
                        tekstur yang lumer dilengkapi dengan aroma rasa
                        singkong yang nikmat
                    </p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                    </div>
                    <div class="product-price">IDR 10K <span> IDR 13K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i>add to card</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal" id="item-detail-modal5">
        <div class="modal-container">
            <a class="close-icon"><i data-feather="x"></i></a>

            <div class="modal-content">
                <img src="img/products/6.jpg" alt="Product 6">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Ballsingkong coklat memiliki rasa coklat dan
                        tekstur yang lumer dilengkapi dengan aroma rasa
                        singkong yang nikmat
                    </p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                    </div>
                    <div class="product-price">IDR 10K <span> IDR 20K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i>add to card</a>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- My javascript -->
    <script src="js/script.js"></script>
</body>

</html>