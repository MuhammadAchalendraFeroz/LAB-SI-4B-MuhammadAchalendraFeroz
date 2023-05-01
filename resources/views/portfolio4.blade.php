<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <title>Portfolio Simple</title>
    </head>
    <body>
        <header>
            <div class="logo">
            <img src="./img/home/logos.jpg" alt="">
            </div>
            <button class="nav-toggle" aria-label="toggle navigation">
                <span class="hamburger"></span>
            </button>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="/#services" class="nav__link">My Services</a></li>
                    <li class="nav__item"><a href="/#about" class="nav__link">About Me</a></li>
                    <li class="nav__item"><a href="/#work" class="nav__link">My Work</a></li>
                  <li class="nav__item"><a href="/#kontak" class="nav__link">Contact</a></li>
                </ul>
            </nav>
        </header>

    <!-- Introduction -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">The Title<strong>Of My Project</strong></h1>
            <p class="section__subtitle section__subtitle--intro">Full-Stack & Data Engineer</p>
            <img src="/img/home/about.jpg" alt="feroz" class="intro__img">
        </section>

        <div class="portfolio-item-individual">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, aliquid sunt recusandae nesciunt placeat impedit quidem quas animi cumque rem voluptatibus, ea eaque inventore quae.</p>
            <img src="./img/home/about.jpg" alt="my-project">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam quod consectetur atque ratione magnam asperiores quasi et soluta quidem autem commodi aspernatur voluptate deserunt optio officiis in ducimus eaque, ad deleniti, earum accusantium unde cum beatae. Quis vel nam modi nostrum tempore consequatur, voluptatem ad sit, rerum, ipsum quasi beatae!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci rem harum debitis fugit totam recusandae neque aperiam exercitationem corrupti ipsam, cumque quibusdam pariatur ut aliquid nesciunt molestias veniam dignissimos consequatur.</p>
        </div>

        <footer>
            <a href="mailto:iyosganteng369@gmail.com" class="footer__link">iyosganteng369@gmail.com</a>
            <ul class="social-list">
                <li class="social-list__item">
                    <a href="https://facebook.com" class="social-list__link">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="https://instagram.com" class="social-list__link">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="https://twitter.com" class="social-list__link">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="https://tiktok.com" class="social-list__link">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a href="https://github.com" class="social-list__link">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
            </ul>
        </footer>


        <script src="./js/index.js"></script>

    </body>
</html>