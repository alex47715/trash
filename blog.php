<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
require ("shopping/connection.php");
if (isset($_GET['page'])){
$pages=array("products", "cart");
      if (in_array($_GET['page'],$pages)){
$_page=$_GET['page'];
      }
      else{
$_page="products";
    }
} 
else{
  $_page="products";
}
?>
<!DOCTYPE html>
<html lang="ru">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Новости - ФХ “Applefield”, Applefield</title>
      <meta name="description" content="Фермерское хозяйство “Applefield” в широком ассортименте предлагает купить яблоки оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">
      <meta name="keywords" content="">
      <link rel="preload" href="gretskiy/static/fonts/ElegantIcons.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="gretskiy/static/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
      <link rel="preload" href="gretskiy/static/fonts/Cera%20Pro%20Regular.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="gretskiy/static/fonts/Cera%20Pro%20Medium.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="gretskiy/static/fonts/Cera%20Pro%20Bold.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="gretskiy/static/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
      <link rel="stylesheet" href="gretskiy/static/css/packedmin_all_css.css">
      <link rel="shortcut icon" href="gretskiy/static/images/fav.png">
      <meta property="og:site_name" content="ФХ “Applefield” - Фермерское хозяйство “Applefield”, Applefield">
      <meta property="og:locale" content="ru_RU">
      <meta property="og:title" content="Фермерское хозяйство “Applefield” в широком ассортименте предлагает купить яблоки оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">
      <meta property="og:type" content="website">
      <meta property="og:image" content="gretskiy/static/images/logoV2.png width='150px'">
      <meta property="og:url" content="index.php">
      <meta property="og:description" content="ФХ “Applefield” - Фермерское хозяйство “Applefield”, Applefield. В широком ассортименте предлагает купить яблоки оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-NQ6247F');
      </script>
      <!-- End Google Tag Manager -->
   </head>
   <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ6247F"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <div id="preload">
         <div class="preload-box">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
         </div>
      </div>
      <div id="main">
         <header>
            <div class="header-block d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-12 col-md-8">
                        <div class="header-left d-flex flex-column flex-md-row align-items-center">
                           <p class="d-flex align-items-center"><a href="mail:" class="contact-line-field"><i class="fas fa-envelope"></i>export@apple.by</a></p>
                           <p class="d-flex align-items-center"><a href="tel:" class="contact-line-field url-phone"><i class="fas fa-phone"></i>+375 00 000 00 00</a></p>
                           <div class="phone-link d-flex">
                              <a href="https://telegram.me/?"><i class="fab fa-telegram"> </i></a>
                              <a href="https://wa.me/375292682290"><i class="fab fa-whatsapp"></i></a>
                              <a href="https://viber://chat?number=%2B375292682290"><i class="fab fa-viber"> </i></a>
                              <a href="https://www.instagram.com/andreigritskevich/" target="_blank"><i class="fab fa-instagram"> </i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-4">
                        <div class="header-right d-flex flex-column flex-md-row justify-content-md-end justify-content-center align-items-center">
                           <div class="social-link d-flex">
                              <p>Фермерское хозяйство “Applefield”</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <nav class="navigation d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-2">
                        <a class="logo" href="index.php"><img src="gretskiy/static/images/logoV2.png" width='150px' alt=""></a>
                     </div>
                     <div class="col-8">
                        <div class="navgition-menu d-flex align-items-center justify-content-center">
                           <ul class="mb-0">
                              <li class="toggleable">
                                 <a class="menu-item" href="index.php">Главная</a>
                              </li>
                              <li class="toggleable">
                                 <a class="menu-item" href="catalog/all.php">Продукция</a>
                              </li>
                              <li class="toggleable">
                                 <a class="menu-item" href="about_company.php">О компании</a>
                              </li>
                              <li class="toggleable">
                                 <a class="menu-item" href="blog.php">Новости</a>
                              </li>
                              <li class="toggleable">
                                 <a class="menu-item" href="contact.php">Контакты</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-2">
                        <div class="product-function d-flex align-items-center justify-content-end">
                           <div id="cart"><?php if ( $_SESSION['totalq'] > 0){ echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';}?><a class="function-icon icon_bag_alt" href="shopping/index.php"><span>КОРЗИНА</span></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>
            <div id="mobile-menu">
               <div class="container">
                  <div class="row">
                     <div class="col-3">
                        <div class="mobile-menu_block d-flex align-items-center">
                           <a class="mobile-menu--control" href="#"><i class="fas fa-bars"></i></a>
                           <div id="ogami-mobile-menu">
                              <button class="no-round-btn" id="mobile-menu--closebtn">МЕНЮ</button>
                              <div class="mobile-menu_items">
                                 <ul class="mb-0 d-flex flex-column">
                                    <li class="toggleable">
                                       <a class="menu-item" href="index.php">Главная</a>
                                    </li>
                                    <li class="toggleable">
                                       <a class="menu-item" href="catalog/all.php">Продукция</a>
                                    </li>
                                    <li class="toggleable">
                                       <a class="menu-item" href="about_company.php">О компании</a>
                                    </li>
                                    <li class="toggleable">
                                       <a class="menu-item" href="blog.php">Новости</a>
                                    </li>
                                    <li class="toggleable">
                                       <a class="menu-item" href="contact.php">Контакты</a>
                                    </li>
                                    <!--<li class="toggleable"> </li>
                                       <li class="toggleable"><a class="menu-item" href="#">Пример вложенности</a><span class="sub-menu--expander"><i class="icon_plus"></i></span>
                                         <ul class="sub-menu" style="display: none;">
                                           <li><a href="404.html">404</a></li>
                                           <li><a href="blog_detail.html">страница новости</a></li>
                                           <li><a href="shop.html">страница каталога</a></li>
                                           <li><a href="produkt.html">страница товара</a></li>
                                         </ul>
                                       </li>-->
                                 </ul>
                              </div>
                              <div class="mobile-login">
                                 <a href="tel:" class="url-phone"><i class="fas fa-phone"></i> +375 00 000 00 00</a>
                                 <a href="mail:"><i class="fas fa-envelope"></i> export@gretsky.by</a>
                               </div>
                               <div class="mobile-social justify-content-center">
                                 <a href="https://telegram.me/?"><i class="fab fa-telegram"> </i></a>
                                 <a href="https://wa.me/375292682290"><i class="fab fa-whatsapp"></i></a>
                                 <a href="https://viber://chat?number=%2B375292682290"><i class="fab fa-viber"> </i></a>
                                 <a href="https://www.instagram.com/andreigritskevich/" target="_blank"><i class="fab fa-instagram"> </i></a>
                               </div>
                           </div>
                           <div class="ogamin-mobile-menu_bg"></div>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="mobile-menu_logo text-center d-flex justify-content-center align-items-center"><a href="index.php"><img src="gretskiy/static/images/logo.png" alt=""></a></div>
                     </div>
                     <div class="col-3">
                        <div class="mobile-product_function d-flex align-items-center justify-content-end">
                        <?php if ( $_SESSION['totalq'] > 0){ echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';}?>
                           <a class="function-icon icon_bag_alt" href="shopping/index.php"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="navigation-filter">
               <div class="container">
                  <div class="row">
                     <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
                        <div class="department-menu_block">
                           <div class="department-menu d-flex justify-content-between align-items-center"><i class="fas fa-bars"></i>Каталог<span><i class="arrow_carrot-down"></i></span></div>
                           <div class="department-dropdown-menu" style="display: none;">
                              <ul>
                                 <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;"><b>СВЕЖИЕ ЯБЛОКИ</b></li>
                      <li><a href="catalog/fistashki.php" class=""> - <img class="ico-menu" src="gretskiy/static/images/ico/Fistashki.svg" alt="">Джоногоред</a></li>
                      <li><a href="catalog/funduk.php"> - <img class="ico-menu" src="gretskiy/static/images/ico/Funduk.svg" alt="">Муцу</a></li>
                      <li><a href="catalog/gretskiy_oreh.php"> - <img class="ico-menu" src="gretskiy/static/images/ico/Gretskiy_orekh.svg" alt="">Applefield Орех</a></li>
                      <li><a href="catalog/mindal.php"> - <img class="ico-menu" src="gretskiy/static/images/ico/Mindal.svg" alt="">Чемпион</a></li>
                      <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;"><b>СУШЕНЫЕ ЯБЛОКИ</b></li>
                      <li><a href="catalog/obzh_lesnoy.php" class=""> - <img class="ico-menu" src="gretskiy/static/images/ico/Lesnoy_orekh.svg" alt="">Муцу</a></li>
                      <li><a href="catalog/obzh_fistashki.php"> - <img class="ico-menu" src="gretskiy/static/images/ico/Fistashki.svg" alt="">Джоногоред</a></li>
</ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
                        <div class="website-search">
                           <div class="row no-gutters">
                              <form style="display: flex; width:100%;" name="search" action="search/search.php" method="post">
                                 <div class="col-8 col-md-8 col-lg-9 col-xl-10" style="padding-left: 0; padding-right:0;">
                                    <div class="search-input">
                                       <input class="no-round-input no-border" name="query" type="search" placeholder="Что хотите искать?">
                                    </div>
                                 </div>
                                 <div class="col-4 col-md-4 col-lg-3 col-xl-2" style="padding-left: 0; padding-right:0;">
                                    <button class="no-round-btn">Поиск</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!--  -->
         <!-- End header-->
         <div class="ogami-breadcrumb">
            <div class="container">
               <ul>
                  <li> <a class="breadcrumb-link" href="index.php"> <i class="fas fa-home"></i>Главная</a></li>
                  <li> <a class="breadcrumb-link active">Новости</a></li>
               </ul>
            </div>
         </div>
         <!-- End breadcrumb-->
         <div class="blog-layout">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3">
                     <div class="blog-sidebar">
                        <button class="no-round-btn" id="filter-sidebar--closebtn">Закрыть навигацию</button>
                        <div class="blog-sidebar_recent-post">
                           <div class="recent-post_top mini-tab-title underline">
                              <h2 class="title">Последние новости</h2>
                           </div>
                           <div class="recent-post_bottom">
                              <div class="mini-post_block">
                                 <div class="mini-post_img">
                                    <a href="post/1.php">
                                    <img src="gretskiy/uploads/uploads/image/news/wew_QMiwgy3.png" alt="blog image">
                                    </a>
                                 </div>
                                 <div class="mini-post_text">
                                    <a href="post/1.php">Встречайте, новый дизайн!!</a>
                                    <h5>23 Февраль 2021</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="filter-sidebar--background" style="display: none"></div>
                  </div>
                  <div class="col-12 col-xl-9">
                     <div class="blog-list">
                        <div id="show-filter-sidebar">
                           <h5> <i class="fas fa-bars"></i>Открыть панель</h5>
                        </div>
                        <div class="blog-block">
                           <div class="row">
                              <div class="col-5">
                                 <div class="blog-img"><a href="post/1.php"><img src="gretskiy/uploads/uploads/image/news/wew_QMiwgy3.png" alt="blog image"></a></div>
                              </div>
                              <div class="col-7">
                                 <div class="blog-text">
                                    <h5 class="blog-tag">Новости компании</h5>
                                    <a class="blog-title" href="post/1.php">Встречайте, новый дизайн!!</a>
                                    <div class="blog-credit">
                                       <p class="credit date">23 Февраль 2021</p>
                                    </div>
                                    <p class="blog-describe">Встречайте, новый дизайн!!</p>
                                    <a class="blog-readmore" href="post/1.php">Подробнее<span> <i class="arrow_carrot-2right"></i></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="blog-pagination">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- -->
         <div class="partner">
            <div class="container">
               <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 10}">
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/diksi.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/karusel.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/lenta.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/logo-billa.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/Magnit.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/market_da.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/okey.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/Perekryostok.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/pyaterochka.png" alt="partner logo"></a></div>
                  <div class="partner--logo"> <a href="#"><img src="gretskiy/static/images/partner/verniy.png" alt="partner logo"></a></div>
               </div>
            </div>
         </div>
         <!-- -->
         <footer>
            <div class="container">
               <div class="row">
                  <div class="col-12 col-sm-12 col-md-4 text-sm-center text-md-left">
                     <div class="footer-logo"><img src="gretskiy/static/images/logo.png" alt=""></div>
                     <div class="footer-contact">
                        <p>332412, г.Минск, ул. Яблочная, Минская область, Республика Беларусь.</p>
                        <p><a href="tel:+37530301" class="contact-line-field url-phone">+375 00 000 00 00</a></p>
                        <p><a href="mail:exporiy.by" class="contact-line-field">export@apple.by</a></p>
                     </div>
                     <div class="footer-social">
                        <a class="round-icon-btn" href="https://wa.me/375292682290">
                          <i class="fab fa-whatsapp"> </i>
                        </a>
                        <a class="round-icon-btn" href="https://viber://chat?number=%2B375292682290">
                          <i class="fab fa-viber"> </i>
                        </a>
                        <a class="round-icon-btn" href="https://telegram.me/?">
                          <i class="fab fa-telegram"></i>
                        </a>
                        <a class="round-icon-btn" href="https://www.instagram.com/andreigritskevich/" target="_blank">
                          <i class="fab fa-instagram"></i>
                        </a><br/>
                        <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://vk.com/id90535597" target="_blank">
                          <i class="fab fa-vk"></i>
                        </a>
                        <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://www.facebook.com/?" target="_blank">
                          <i class="fab fa-facebook"></i>
                        </a>
                        <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://twitter.com/?" target="_blank">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://www.youtube.com/channel/?" target="_blank">
                          <i class="fab fa-youtube"></i>
                        </a>
                        </div>
                  </div>
                  <div class="col-md-8">
                     <div class="row">
                        <div class="col-12 col-sm-4 text-sm-center text-md-left">
                           <div class="footer-quicklink">
                              <h5>Карта сайта</h5>
                              <a href="index.php">Главная</a>
                              <a href="catalog/all.php">Продукция</a>
                              <a href="about_company.php">О компании</a>
                              <a href="blog.php">Новости</a>
                              <a href="contact.php">Контакты</a>
                           </div>
                        </div>
                        <div class="col-12 col-sm-4 text-sm-center text-md-left">
                           <div class="footer-quicklink">
                              <h5>Свежие яблоки</h5>
                              <a href="catalog/fistashki.php">Джоногоред</a>
                              <a href="catalog/funduk.php">Муцу</a>
                              <a href="catalog/gretskiy_oreh.php">Голден</a>
                              <a href="catalog/mindal.php">Чемпион</a>
                           </div>
                        </div>
                        <div class="col-12 col-sm-4 text-sm-center text-md-left">
                           <div class="footer-quicklink">
                              <h5>Сушеные яблоки</h5>
                              <a href="catalog/obzh_lesnoy.php">Муцу</a>
                              <a href="catalog/obzh_fistashki.php">Джоногоред</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="newletter">
               <div class="container">
                  <div class="row justify-content-between align-items-center">
                     <div class="col-12 col-md-7">
                        <div class="newletter_text text-center text-md-left">
                           <h5>Остались вопросы?</h5>
                           <p>Оставьте свой номер, мы перезвоним и ответим на все ваши вопросы!</p>
                        </div>
                     </div>
                     <div class="col-12 col-md-5">
                        <div class="newletter_input">
                           <form id="recoll_me" action="#" method="post">
                              <input class="round-input" type="phone" name="phone" required placeholder="Ваш номер">
                              <input type="hidden" name="csrfmiddlewaretoken" value="2etGPBxg9DzPxbd9Yh0Wqh4SDAxUsyVPhRLA0CGD7BBgDsGSRQWZ0ZPQFveUQu5x">
                              <button>Перезвоните</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-credit">
               <div class="container">
                  <div class="footer-creadit_block d-flex flex-column flex-md-row justify-content-start justify-content-md-between align-items-baseline align-items-md-center">
                     <p class="author">© 2021 Applefield | Фермерское хозяйство "Applefield" | Все права защищены</p>
                  </div>
               </div>
            </div>
            <div class="form-feedback" id="feedback-form">
               <form id="f_contact" name="contact" action="#" method="post">
                  <h2>Оставить заявку</h2>
                  <input class="no-round-input mt-20" name="name" type="text" placeholder="Имя"><br>
                  <input class="no-round-input mt-20" name="phone" type="phone" required placeholder="Телефон"><br>
                  <input class="no-round-input mt-20" name="email" type="email" required placeholder="Email"><br>
                  <textarea class="textarea-form mt-20" name="msg" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
                  <br>
                  <input type="hidden" name="csrfmiddlewaretoken" value="2etGPBxg9DzPxbd9Yh0Wqh4SDAxUsyVPhRLA0CGD7BBgDsGSRQWZ0ZPQFveUQu5x">
                  <button id="f_send" class="normal-btn mt-20">Отправить сообщение</button>
               </form>
            </div>
         </footer>
         <!-- -->
      </div>
      <script src="gretskiy/static/js/packedmin.js"></script>
      <script>
         let inputs = document.getElementsByClassName('parallax-img');
         
         for (let input of inputs) {
           let paralaximg = new Parallax(input, {
         	  hoverOnly: true,
           });
         }
         
      </script>
      <script type = "application/ld+json" >
         {
         "@context": "http://schema.org",
         "@type": "Organization",
         "name": "ФХ “Applefield” - Фермерское хозяйство “Applefield”, Applefield,  Vitae",
         "legalName" : "ФХ “Applefield",
         "url": "https://gretskiy.by/",
         "logo": "https://gretskiy.by/gretskiy/static/images/logoV2.png width='150px'",
         "foundingDate": "2001",
         "address": {
          "@type": "PostalAddress",
          "streetAddress": "ул. Яблочная",
          "addressLocality": "Минская область, г.Лунинец",
          "addressRegion": "BY",
          "postalCode": "221234",
          "addressCountry": "Belarus"
         },
         "contactPoint": {
          "@type": "ContactPoint",
         "contactType": "sales",
         "telephone": "[+375 (33) 323 03 00]",
         "email": "export@apple.by"
         },
         "sameAs": [
          "https://vk.com/gretskiy365",
          "https://www.facebook.com/gretskiy365carrot",
          "https://twitter.com/gretskiy365",
         "https://www.instagram.com/gretskiy365",
         "https://twitter.com/Gretskiy365",
          "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
         ]}
      </script >
   </body>
</html>