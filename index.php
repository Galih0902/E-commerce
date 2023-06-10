<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- Cover -->
<main>
  <div class="hero">
    <a href="shop.php" class="btn1">Lihat semua produk</a>
  </div>
  <!-- Main -->
  <div class="wrapper">
    <h1>Koleksi Unggulan</h1>
  </div>


  <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

      <?php

      getPro();

      ?>

    </div><!-- row Ends -->

  </div><!-- container Ends -->
  <!-- FOOTER -->
  <footer class="page-footer">

    <div class="footer-nav">
      <div class="container clearfix">

        <div class="footer-nav__col footer-nav__col--info">
          <div class="footer-nav__heading">Informasi</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Merek</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Toko lokal</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Layanan pelanggan</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Privasi &amp; cookies</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Peta situs</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--whybuy">
          <div class="footer-nav__heading">Alasan Membeli dari Kami</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Pengiriman &amp; pengembalian</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Pengiriman yang aman</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Testimonial</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Pemenang penghargaan</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Perdagangan etis</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--account">
          <div class="footer-nav__heading">Akun Anda</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Masuk</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Daftar</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Lihat keranjang</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Lihat lookbook Anda</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Lacak pesanan</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Perbarui informasi</a>
            </li>
          </ul>
        </div>


        <div class="footer-nav__col footer-nav__col--contacts">
          <div class="footer-nav__heading">Detail Kontak</div>
          <address class="address">
            Kantor Pusat: Avenue Fashion.<br>
            180-182 Regent Street, London.
          </address>
          <div class="phone">
            Telepon:
            <a class="phone__number" href="tel:0123456789">0123-456-789</a>
          </div>
          <div class="email">
            Email:
            <a href="mailto:support@yourwebsite.com" class="email__addr">support@yourwebsite.com</a>
          </div>
        </div>

      </div>
    </div>

    <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Pemenang penghargaan</span><br> Penghargaan fashion 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
              <i class="icon-facebook"></i>
            </a>
            <a href="#" class="banner-social__link">
              <i class="icon-twitter"></i>
            </a>
            <a href="#" class="banner-social__link">
              <i class="icon-instagram"></i>
            </a>
            <a href="#" class="banner-social__link">
              <i class="icon-pinterest-circled"></i>
            </a>
          </div>

        </div>
      </div> -->

    <div class="page-footer__subline">
      <div class="container clearfix">

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> Website Ecommerce-PHP&trade;
        </div>

        <div class="developer">
          Dikembangkan oleh Yasser Dalouzi
        </div>

        <div class="designby">
          Desain oleh Yasser Dalouzi
        </div>

      </div>
    </div>
  </footer>
  </body>

  </html>