<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png" />

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Travel Tales</title>
  </head>
  <body>

    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">Travel Tales</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">Berita</a>
            </li>
            <li class="nav__item">
              <a href="#discover" class="nav__link">Pulau</a>
            </li>
            <li class="nav__item">
              <a href="#place" class="nav__link">Destinasi</a>
            </li>
            <li class="nav__item">
              <a href="../login/index2.php" class="nav__link">Logout</a>
            </li>
          </ul>

          <i class="ri-close-line nav__close" id="nav-close"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-function-line"></i>
        </div>
      </nav>
    </header>

    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home" id="home">
        <img src="assets/img/home.jpg" alt="" class="home__img" />

        <div class="home__container container grid">
          <div class="home__data">
            <span class="home__data-subtitle">Temukan Mimpi Wisata Impian Anda..</span>
            <h1 class="home__data-title">
              Indonesia.. <br />
              <b
                >Liburan Terbaik<br />
                Untuk Anda!</b
              >
            </h1>
          </div>

          <!-- Search -->
          <!-- <section class="cover">
            <div class="container">
              <div class="serach-form">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link text-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-plane"></i>&nbsp; Vols</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active text-bold" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><i class="fa fa-hotel"></i>&nbsp; hôtels</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-bold" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-car"></i>&nbsp; Voiturest</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-bold" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-globe"></i>&nbsp; croisière</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Destination:</label>
                          <input type="text" class="form-control" placeholder="Pays, Ville" />
                        </div>
                      </div>
                      <div class="col-md-4 pr-30">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Check in</label>
                              <input type="text" class="form-control datepicker" placeholder="jj/mm/aaaa" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Check out</label>
                              <input type="text" class="form-control datepicker" placeholder="jj/mm/aaaa" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 pl-30 border-left">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Adultes</label>
                              <input type="number" class="form-control" placeholder="00" />
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Enfants</label>
                              <input type="number" class="form-control" placeholder="00" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label style="color: #fff">.</label>
                              <button class="btn btn-success btn-success-light form-control">Chercher &nbsp; <i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
          <!-- End Search -->

          <div class="home__social">
            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
              <i class="ri-facebook-box-fill"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
              <i class="ri-instagram-fill"></i>
            </a>
            <a href="https://twitter.com/" target="_blank" class="home__social-link">
              <i class="ri-twitter-fill"></i>
            </a>
          </div>

          <!-- <div class="home__info">
            <div>
              <span class="home__info-title">5 best places to visit</span>
              <a href="" class="button button--flex button--link home__info-button"> More <i class="ri-arrow-right-line"></i> </a>
            </div>

            <div class="home__info-overlay">
              <img src="assets/img/home2.jpg" alt="" class="home__info-img" />
            </div>
          </div> -->
        </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <h2 class="section__title about__title">
              Lebih Mengenal <br />
              Wisata Di Indonesia
            </h2>
            <p class="about__description">Temukan Keindahan Alam Yang Menarik Di Indonesia Yang Selama Ini Anda Inginkan. Mulai Melihat Keragaman Alam Indonesia Dan Informasi Terbarunya!</p>
            <a href="#" class="button">Berita Terbaru</a>
          </div>

          <div class="about__img">
            <div class="about__img-overlay">
              <img src="assets/img/rajaampat3.jpg" alt="" class="about__img-one" />
            </div>

            <div class="about__img-overlay">
              <img src="assets/img/rajaampat.jpg" alt="" class="about__img-two" />
            </div>
          </div>
        </div>
      </section>

      <!--==================== DISCOVER ====================-->


      

      <section class="discover section" id="discover">
        <h2 class="section__title">
          Cari Destinasi berdasarkan <br />
          Pulau yang ada di Indonesia!
        </h2>

        
        <div class="discover__container container swiper-container">
          <div class="swiper-wrapper">
            <!--==================== DISCOVER 1 ====================-->
            <div class="discover__card swiper-slide">
              <img src="assets/img/discover1.jpg" alt="" class="discover__img" />
              <div class="discover__data">
                <h2 class="discover__title">Kalimantan</h2>
              </div>
            </div>

            <!--==================== DISCOVER 2 ====================-->
            <div class="discover__card swiper-slide">
              <img src="assets/img/discover2.jpg" alt="" class="discover__img" />
              <div class="discover__data">
                <h2 class="discover__title">Bali</h2>
              </div>
            </div>

            <!--==================== DISCOVER 3 ====================-->
            <div class="discover__card swiper-slide">
              <img src="assets/img/discover3.jpg" alt="" class="discover__img" />
              <div class="discover__data">
                <h2 class="discover__title">Sumatra</h2>
              </div>
            </div>

            <!--==================== DISCOVER 4 ====================-->
            <div class="discover__card swiper-slide">
              <img src="assets/img/discover4.jpg" alt="" class="discover__img" />
              <div class="discover__data">
                <h2 class="discover__title">Jawa</h2>
              </div>
            </div>

          </div>
        </div>
      </section>

      
      <!--==================== PLACES ====================-->
      <?php
        include('../functions/userfunctions.php');
      ?>
      <section class="place section" id="place">
        <h2 class="section__title">Destinasi Wisata Dari Kita</h2>

        <div class="place__container container grid">


          <!--==================== PLACES CARD 1 ====================-->
          <div class="place__card">
            <img src="assets/img/place1.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Bali</h3>
                <span class="place__subtitle">Kuta</span>
                <span class="place__price">$2499</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 2 ====================-->
          <div class="place__card">
            <img src="assets/img/place2.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">5,0</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Jawa</h3>
                <span class="place__subtitle">Kepulauan Karimun</span>
                <span class="place__price">$1599</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 3 ====================-->
          <div class="place__card">
            <img src="assets/img/place3.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,9</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Maluku</h3>
                <span class="place__subtitle">Banda Neira</span>
                <span class="place__price">$3499</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 4 ====================-->
          <div class="place__card">
            <img src="assets/img/place4.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Papua</h3>
                <span class="place__subtitle">Raja Ampat</span>
                <span class="place__price">$2499</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div class="place__card">
            <img src="assets/img/place5.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Jawa</h3>
                <span class="place__subtitle">Pangandaran</span>
                <span class="place__price">$1999</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <?php
            $categories = getAllActive("categories");

            if(mysqli_num_rows($categories) > 0)
            {
                foreach($categories as $item)
                {
                  ?>
                      <div class="place__card">
                        <img src="../uploads/<?= $item['image']; ?>" alt="Category Image" class="place__img" />

                        <div class="place__content">
                          <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                          </span>

                          <div class="place__data">
                            <h3 class="place__title"><?= $item['name']; ?></h3>
                            <span class="place__subtitle"><?= $item['description']; ?></span>
                          </div>
                        </div>
 
                        <button class="button button--flex place__button">
                          <i class="ri-arrow-right-line"></i>
                        </button>
                      </div>
                  <?php
                }
            }
          ?>

          
        </div>
      </section>

      <!--==================== SUBSCRIBE ====================-->
      <section class="subscribe section">
        <div class="subscribe__bg">
          <div class="subscribe__container container">
            <h2 class="section__title subscribe__title">
              Kritik Dan Saran <br />
              Dan Sangant Dihargai
            </h2>
            <form action="" class="subscribe__form">
              <input type="text" placeholder="Masukkan Kritik dan Saran" class="subscribe__input" />

              <button class="button">Kirim</button>
            </form>
          </div>
        </div>
      </section>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
      <div class="footer__container container grid">
        <div class="footer__content grid">
          <div class="footer__data">
            <h3 class="footer__title">Travel Tales</h3>
          </div>

          
        <div class="footer__rights">
          <p class="footer__copy">Created by BitBuster</p>
        </div>
      </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
