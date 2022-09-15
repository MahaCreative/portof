<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- fontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylemc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin-color1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-switcher.css') }}">

    {{-- Style Switcher --}}

    <link rel="stylesheet" href="{{ asset('css/skin-color1.css') }}" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="{{ asset('css/skin-color2.css') }}" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="{{ asset('css/skin-color3.css') }}" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="{{ asset('css/skin-color4.css') }}" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="{{ asset('css/skin-color5.css') }}" class="alternate-style" title="color-5" disabled>
    <script src="{{ asset('js/scroll.js') }}"></script>

    <title>Document</title>

</head>

<body>
    {{-- Main Container Start --}}
    <div class="main-container">
        {{-- Asside Start --}}
        <div class="asside">
            <div class="logo">
                <a href=""><span>mc</span>Dev</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home" data_link='home' class="nav-item active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about" data_link='about' class="nav-item "><i class="fa fa-user"></i>About</a></li>
                <li><a href="#services" data_link='services' class="nav-item "><i class="fa fa-list"></i>Services</a>
                </li>
                {{-- <li><a  class=""><i class="fa fa-briefcase"></i>Portofolio</a></li> --}}
                <li><a href="#contact" data_link='contact' class="nav-item "><i class="fa fa-comment"></i>Contact</a>
                </li>
            </ul>
        </div>
        {{-- Asside End --}}

        {{-- Main Content Start --}}
        <div class="main-content">
            {{-- Home Section Start --}}
            <section id="home" class="home active section">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello🖐, I'm <span class="name">Guntur Madjid</span></h3>
                            <h3 class="my-profession">I'm a <span class="typing">Web Designer</span></h3>
                            <p>I am a student as well as a freelancer who has expertise in
                                the
                                field of backend engineers, graphic designers and many other things. scroll down to see
                                other skills I have.</p>
                            {{-- <a href="#contact" class="btn hire-me">Hire Me</a> --}}
                        </div>
                        <div class="home-img padd-15">
                            <img src="{{ asset('images/image.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            {{-- Home Section end --}}
            {{-- About Section Start --}}
            <section id="about" class="about section ">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>I'm <span>Guntur Madjid</span></h3>
                                    <p>I am an informatics engineering student at Tomakaka
                                        university. I am currently 24 years old and focused on programming since 4 years
                                        ago, I want to contribute in the field of technology according to my abilities
                                        and of course I will continue to learn according to the needs of the present.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday : <span>17 January 1998</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age : <span>24 Tahun</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Website : <span>www.mcdeveloper.click</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span>mcdevelop@gmail.com</span></p>
                                        </div>

                                        <div class="info-item padd-15">
                                            <p>Phone : <span>+62 821-9425-5717</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City : <span>Indonesia</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelance : <span>Available</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="" class="btn">Download CV</a>
                                            {{-- <a href="" class="btn hire-me">Hire me</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 58%;"></div>
                                                <div class="skill-percent">58%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>JavaScript</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 60%;"></div>
                                                <div class="skill-percent">60%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 70%;"></div>
                                                <div class="skill-percent">70%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Python</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 50%;"></div>
                                                <div class="skill-percent">50%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Laravel</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 70%;"></div>
                                                <div class="skill-percent">70%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>React Js</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 42%;"></div>
                                                <div class="skill-percent">42%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                {{-- TimeLine Item --}}
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2013-2015
                                                    </h3>
                                                    <h4 class="timeline-title">SD Inpress Kassi-Kassi</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing elit. Alias, fugiat consequatur. Iusto iste ad totam
                                                        adipisci magnam temporibus rem nihil commodi? Adipisci dicta ex
                                                        fugit cumque explicabo aspernatur rem nulla.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                {{-- TimeLine Item --}}
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i>2013-2015
                                                    </h3>
                                                    <h4 class="timeline-title">SD Inpress Kassi-Kassi</h4>
                                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur,
                                                        adipisicing elit. Alias, fugiat consequatur. Iusto iste ad totam
                                                        adipisci magnam temporibus rem nihil commodi? Adipisci dicta ex
                                                        fugit cumque explicabo aspernatur rem nulla.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            !-->
                        </div>
                    </div>
            </section>
            {{-- About Section end --}}
            {{-- Services Section Start --}}
            <section id="services" class="service section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Jasa pembuatan website atau blog dari web developer berpengalaman. </p>
                            </div>
                        </div>
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-play"></i>
                                </div>
                                <h4>Video Grapher</h4>
                                <p>Jasa pembuatan video profil, dokumentasi dan lainnya hanya di Kodegrid.</p>
                            </div>
                        </div>
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-paint-brush"></i>
                                </div>
                                <h4>Graphic Desainer</h4>
                                <p>Tingkatkan branding usaha anda dengan jasa desain grafis yang tepat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Services Section End --}}
                {{-- Portofolio section Start --}}
                {{-- <section class="portofolio section">
                    <div class="container">
                        <div class="row">
                            <div class="section-title padd-15">
                                <h2>Portofolio</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="portofolio-heading padd-15">
                                <h2>My Last Project</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="portofolio-item padd-15">
                                <div class="portofolio-item-inner shadow-dark">
                                    <div class="portofolio-img">
                                        <img src="{{ asset('images/1.jpg') }}" alt="">
                                    </div>
                                    <div class="portofolio-img-info">
                                        <h3>Judul 1</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat eos optio
                                            odio voluptatem, quae dolorum nam consequatur sapiente cumque voluptatibus
                                            odit tenetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portofolio-item padd-15">
                                <div class="portofolio-item-inner shadow-dark">
                                    <div class="portofolio-img">
                                        <img src="{{ asset('images/1.jpg') }}" alt="">
                                    </div>
                                    <div class="portofolio-img-info">
                                        <h3>Judul 1</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat eos optio
                                            odio voluptatem, quae dolorum nam consequatur sapiente cumque voluptatibus
                                            odit tenetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portofolio-item padd-15">
                                <div class="portofolio-item-inner shadow-dark">
                                    <div class="portofolio-img">
                                        <img src="{{ asset('images/1.jpg') }}" alt="">
                                    </div>
                                    <div class="portofolio-img-info">
                                        <h3>Judul 1</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat eos optio
                                            odio voluptatem, quae dolorum nam consequatur sapiente cumque voluptatibus
                                            odit tenetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portofolio-item padd-15">
                                <div class="portofolio-item-inner shadow-dark">
                                    <div class="portofolio-img">
                                        <img src="{{ asset('images/1.jpg') }}" alt="">
                                    </div>
                                    <div class="portofolio-img-info">
                                        <h3>Judul 1</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat eos optio
                                            odio voluptatem, quae dolorum nam consequatur sapiente cumque voluptatibus
                                            odit tenetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portofolio-item padd-15">
                                <div class="portofolio-item-inner shadow-dark">
                                    <div class="portofolio-img">
                                        <img src="{{ asset('images/1.jpg') }}" alt="">
                                    </div>
                                    <div class="portofolio-img-info">
                                        <h3>Judul 1</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat eos optio
                                            odio voluptatem, quae dolorum nam consequatur sapiente cumque voluptatibus
                                            odit tenetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portofolio-item padd-15">
                                <div class="portofolio-item-inner shadow-dark">
                                    <div class="portofolio-img">
                                        <img src="{{ asset('images/1.jpg') }}" alt="">
                                    </div>
                                    <div class="portofolio-img-info">
                                        <h3>Judul 1</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat eos optio
                                            odio voluptatem, quae dolorum nam consequatur sapiente cumque voluptatibus
                                            odit tenetur</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> --}}
                {{-- Portofolio section End --}}
            </section>
            {{-- Services Section End --}}

            {{-- Contact Section Start --}}
            <section id="contact" class="contact section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15">Have You Any Questions ?</h3>
                    <h4 class="contact-sub-title padd-15">I'M At Your Servoces</h4>
                    <div class="row">
                        {{-- contact Info item --}}
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="fa fa-phone"> </i>
                                <h4>Call us On</h4>
                                <p>+62 8194255717</p>
                            </div>
                        </div>
                        {{-- contact Info item end --}}
                        {{-- contact Info item --}}
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="fa fa-map-marker-alt"> </i>
                                <h4>Address</h4>
                                <p>Jl Diponegoro Provinsi Sulawesi Barat</p>
                            </div>
                        </div>
                        {{-- contact Info item end --}}
                        {{-- contact Info item --}}
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="fa fa-envelope"> </i>
                                <h4>Email</h4>
                                <p>mcdeveloper@gmail.com</p>
                            </div>
                        </div>
                        {{-- contact Info item end --}}
                        {{-- contact Info item --}}
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="fa fa-globe-europe"> </i>
                                <h4>Website</h4>
                                <p>mcdeveloper.click</p>
                            </div>
                        </div>
                        {{-- contact Info item end --}}
                    </div>
                    <h3 class="contact-title padd-15">Send Me An Email</h3>
                    <h4 class="contact-sub-title padd-15">I'm Very Responsive To Message</h4>
                    {{-- Contact Form --}}
                    <div class="row">
                        <div class="contact-form padd-15">
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <textarea name="" class="form-control" id="" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <button class="btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        {{-- Contact Section End --}}
        {{-- Main Content end --}}
        {{-- Style Switcher Start --}}
        <div class="style-switcher">
            <div class="style-switcher-toggler s-icon">
                <i class="fas fa-cog fa-spin"></i>
            </div>
            <div class="day-night s-icon">
                <i class="fas"></i>
            </div>
            <h4>Theme Colors</h4>
            <div class="colors">
                <span class="color-1" onclick="setActiveStyle('color-1')"></span>
                <span class="color-2" onclick="setActiveStyle('color-2')"></span>
                <span class="color-3" onclick="setActiveStyle('color-3')"></span>
                <span class="color-4" onclick="setActiveStyle('color-4')"></span>
                <span class="color-5" onclick="setActiveStyle('color-5')"></span>
            </div>
        </div>
        {{-- Style Switcher End --}}

    </div>
    {{-- Main Container End --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/style-switcher.js') }}"></script>
</body>

</html>
