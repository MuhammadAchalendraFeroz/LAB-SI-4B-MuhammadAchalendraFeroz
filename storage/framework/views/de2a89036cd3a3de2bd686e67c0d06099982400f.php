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
    <script src="script.js" defer></script>
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
                <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="#services" class="nav__link">My Services</a></li>
                <li class="nav__item"><a href="#about" class="nav__link">About Me</a></li>
                <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
                <li class="nav__item"><a href="#kontak" class="nav__link">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Introduction -->
    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">Hi, I am <strong>Muhammad Feroz</strong></h1>
        <p class="section__subtitle section__subtitle--intro">Full-Stack & Data Engineer</p>
        <img src="/img/person/frz hoodie hijau.jpg" alt="feroz" class="intro__img">
    </section>

    <!-- My Service -->
    <section class="my-services" id="services">
        <h2 class="section__title section__title--services">What I Do</h2>
        <div class="services">
            <div class="service">
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor corrupti, eaque iusto eos vero cumque. Velit omnis voluptatem, at deserunt iste voluptate labore enim perspiciatis aut atque recusandae, facilis ullam.</p>
            </div>
            <div class="service">
                <h3>Mobile Development</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores aliquam officia, nesciunt inventore quasi quia laboriosam laborum? Commodi quibusdam maiores ipsam ducimus ipsum quidem eos deserunt impedit, laboriosam nam aut?</p>
            </div>
            <div class="service">
                <h3>Data Science</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat, eveniet, animi laboriosam quia adipisci odit error ipsum at repellat tempora repellendus? Explicabo impedit, quae molestias laboriosam quis consequuntur aliquam.</p>
            </div>
        </div>
        <a href="#work" class="btn">My Work</a>
    </section>

    <!-- About me -->
    <section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">Learner & Developer Based out of LAYO</p>
        <div class="about-me__body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis quasi fuga impedit. Dignissimos dolorum dicta dolor. Explicabo dolores ullam nihil eos recusandae facere in nemo totam minus ipsa, modi amet.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit provident facere sequi iste laboriosam, soluta tenetur hic fugit veniam consectetur asperiores, consequatur similique. Exercitationem odio quam quisquam, magnam dolorum labore.</p>
        </div>
        <img src="./img/person/frz metal formal.jpg" alt="feroz-standing" class="about-me__img">
    </section>

    <!-- My Work -->
    <section class="my-work" id="work">
        <h2 class="section__title section__title--work">My Work</h2>
        <p class="section__subtitle section__subtitle--work">A collection of what i do</p>
        <div class="portfolio">
            <a href="/portfolio1" class="portfolio__item">
                <img src="./img/features/bazar.jpg" alt="" class="portfolio__img">
            </a>
            <a href="/portfolio2" class="portfolio__item">
                <img src="./img/features/debate.jpg" alt="" class="portfolio__img">
            </a>
            <a href="/portfolio3" class="portfolio__item">
                <img src="./img/features/design.jpg" alt="" class="portfolio__img">
            </a>
            <a href="/portfolio4" class="portfolio__item">
                <img src="./img/home/about.jpg" alt="" class="portfolio__img">
            </a>
            <a href="/portfolio5" class="portfolio__item">
                <img src="./img/features/poster.jpg" alt="" class="portfolio__img">
            </a>
            <a href="/portfolio6" class="portfolio__item">
                <img src="./img/features/ui-ux.jpg" alt="" class="portfolio__img">
            </a>
        </div>
    </section>

    <!-- interactive -->
    <section id="interactive">
        <div class="wrapper">
            <img src="/files/clock.svg" alt="jam alarm">
            <h4>00:00:00 PM</h4>
            <div class="content">
                <div class="column">
                    <select>
                        <option value="Hour" selected hidden>Hour</option>
                    </select>
                </div>
                <div class="column">
                    <select>
                        <option value="Minute" selected hidden>Minute</option>
                    </select>
                </div>
                <div class="column">
                    <select>
                        <option value="AM/PM" selected hidden>AM/PM</option>
                    </select>
                </div>
            </div>
            <button id="Alarm">Set Alarm</button>
        </div>
    </section>
    

    <!-- contact -->
    <section class="contact" id="kontak">
        <div class="contact-container">
            <!-- form -->
            <div class="form-container">
                <h3>Kontak Kami</h3>
                <form action="" class="contact-form">
                    <input type="text" placeholder="Masukkan nama anda" required>
                    <input type="email" placeholder=" Masukkan email anda" required>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Masukkan Pesan"></textarea>
                    <input type="submit" value="Send" class="send-button">
                </form>
            </div>
            <!-- map -->
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.521206817701!2d104.64858647462104!3d-3.219503996755637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bbdf1ba5ade17%3A0xec8169998ecd82bc!2sFakultas%20Ilmu%20Komputer%20Unsri%20-%20Kampus%20Indralaya!5e0!3m2!1sid!2sid!4v1682604787942!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- footer -->
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
    <script src="/js/script.js"></script>

</body>
</html><?php /**PATH /home/runner/LAB-SI-4B-MuhammadAchalen/resources/views/welcome.blade.php ENDPATH**/ ?>