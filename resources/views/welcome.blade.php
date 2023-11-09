<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c2321497c1.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

    <title>Jason Ho PWEB C</title>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <h2 class="logo">Jason</h2>
                <ul id="sidebar">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#portfolio">Portofolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><i class="fa-solid fa-x" onclick="closebar()"></i></li>
                </ul>
                <i class="fa-solid fa-bars" onclick="openbar()"></i>
            </nav>
            <div class="header-text">
                <img src="background-parallex/main-atas-01.png" id="atas">
                <img src="background-parallex/matahari-back-01.png" id="matahari-back">
                <img src="background-parallex/matahari-01.png" id="matahari">
                <img src="background-parallex/gunung1-01-01.png" id="gunung1">
                <img src="background-parallex/main-bawah-01.png" id="bg-bawah">
                <img src="background-parallex/gunung2-01.png" id="gunung2">
                <img src="background-parallex/hias-01.png" id="hias">
                <img src="background-parallex/pulau-kiri.png" id="pkiri">
                <img src="background-parallex/kanan-01.png" id="pulau-kanan">
                <img src="background-parallex/semak-kiri-01.png" id="semak-kiri">
                <img src="background-parallex/orang-01.png" id="orang">
                <img src="background-parallex/semak-kanan-01.png" id="semak-kanan">
                <img src="background-parallex/bawah-01.png" id="bawah">
                <p id="teks1">Hi, there!</p>
                    <h1 id="teks1">I'm <span>Jason</span></h1>
            </div>

        </div>
    </div>
    <!-- ---------about------------ -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="background-parallex/foto.jpg" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>I am a second-year student majoring in Information Systems at the Sepuluh Nopember Institute of Technology. I have an interest in information technology and possess basic knowledge of programming languages. I also have a positive attitude and a strong sense of responsibility. I am ready to face challenges and learn to enhance my skills.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('education')">Education</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    </div>
                    <div class="tab-contents active-tab" id="education">
                        <ul>
                            <li><span>Institut Teknologi Sepuluh Nopember</span><br> Currently pursuing Bachelor in Information System Degree</li>
                            <li><span>SMK Maitreyawira Batam</span><br> Multimedia Major</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>Jul 2020 - Dec 2020</span><br> Junior Animator at SMK Maitreyawira Batam</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ----------skills---------------- -->
    <div id="skills">
        <div class="container">
            <h1 class="sub-title">Skills</h1>
            <div class="skills-list">
                <div>
                    <i class="fa-solid fa-person-military-to-person"></i>
                    <h2>Animation</h2>
                    <p>Work on some short and simple Infographic Animation using Adobe Illustrator and Adobe After Effects</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                    <i class="fa-brands fa-html5"></i>
                    <h2>HTML</h2>
                    <p>Still in the learning phase</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                    <i class="fa-brands fa-css3"></i>
                    <h2>CSS</h2>
                    <p>Still in the learning phase</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- -----------portfolio-------------- -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">Portfolio</h1>
            <div class="work-list">
                <div class="work">
                    <img src="background-parallex/5g.PNG">
                    <div class="layer">
                        <h3>Infographic Animation #1</h3>
                        <p>Talking about 5G connection back in 2019</p>
                        <a href="https://drive.google.com/file/d/1TP572AXxDfRP6aro6nkBNR56-LKEA6Up/view?usp=share_link" target="_blank"><i class="fa-solid fa-eye" ></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="background-parallex/bg2.PNG">
                    <div class="layer">
                        <h3>Infographic Animation #2</h3>
                        <p>School project about Math</p>
                        <a href="https://drive.google.com/file/d/1MdyIqsRTOFWJJWX-ZbqpoFMZGZ740gNi/view?usp=share_link" target="_blank"><i class="fa-solid fa-eye" ></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="background-parallex/3web.PNG">
                    <div class="layer">
                        <h3>Landing Page</h3>
                        <p>Current page you are looking at</p>
                        <a href="#"><i class="fa-solid fa-eye" ></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>
    <!-- ---------contact--------- -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-envelope"></i>jasonnho.27@gmail.com</p>
                    <div class="social-icons">
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Enter your name here" required>
                        <input type="email" name="Email" placeholder="Enter your email here" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- ----------------tugas laravel------------------------ -->
<div id="skills">
    <div class="container">
        <h1 class="sub-title">File Pertemuan</h1>
        <div class="tugas-list">
            <div>
                <i class="fa-solid fa-person-military-to-person"></i>
                <h2>UTS</h2>
                <p>Halaman Sekarang</p>
                <a href="#">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-html5"></i>
                <h2>Pertemuan 1</h2>
                <a href="pertemuan1" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-css3"></i>
                <h2>Pertemuan 2</h2>
                <a href="pertemuan2" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-solid fa-person-military-to-person"></i>
                <h2>Pertemuan 2-2</h2>
                <a href="pertemuan22" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-html5"></i>
                <h2>Bootstrap1</h2>
                <a href="bootstrap1" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-css3"></i>
                <h2>Bootstrap2</h2>
                <a href="bootstrap2" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-css3"></i>
                <h2>Javascript 1</h2>
                <a href="javascript1" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-css3"></i>
                <h2>Javascript 2</h2>
                <a href="javascript2" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-css3"></i>
                <h2>Tugas 1</h2>
                <a href="tugas1" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-css3"></i>
                <h2>Tugas 2</h2>
                <a href="tugas2" target="_blank">Klik Disini</a>
            </div>
            <div>
                <i class="fa-brands fa-css3"></i>
                <h2>Tugas 3</h2>
                <a href="tugas3" target="_blank">Klik Disini</a>
            </div>

        </div>
    </div>
</div>
    <script src="script.js"></script>
</body>

</html>
