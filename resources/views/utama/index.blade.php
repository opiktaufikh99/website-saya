<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    {{-- star navbar --}}
    <nav class="navbar">
        <a href="#" class="navbar-logo">My<span>Website</span>.</a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">about me</a>
            <a href="#target">target</a>
            <a href="#kontak">Kontak</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search" ><i  data-feather="search"> </i></a>
            <a href="#" id="send" ><i  data-feather="send"> </i></a>
            <a href="#" id="hamburger-menu" ><i  data-feather="menu"> </i></a>
        </div>
    </nav>
    {{-- end navbar--}}
 {{-- star hero --}}

 <section class="hero" id="home" >
    <main class="content">
        <h1>Selamat Datang Di Website <span>Saya</span></h1>
        <p>Saya adalah seorang web developer yang siap berkalir dan berkaya</p>
        <a href="#" class="cta">contact me</a>
    </main>
 </section>
 {{-- end hero --}}

 {{-- star about --}}
    <section id="about" class="about">
        <h2>Tentang <span>Saya</span></h2>
        <div class="row">
        <div class="about-img">
            <img src="../img/me.jpg" alt="tentang kami">
        </div>
        <div class="content">
            <h3>Opik Taufik Hidayatullah</h3>
            <p>Saya adalah seorang web developer yang selalu siap bekerja keras dan berkerja cerdas</p>
            <p>Saya sangat senang dengan hal yang baru apalagi tentang berbau teknologi terutama <br> pemerograman 
                karena menurut saya pemrograman itu adalah sebuah seni yang dapat <br>menggambarkan imajenasi dan
                keratifitas seseorang terhadap segala hal 
            </p>
            <p>Lorem ipsum door sit amet consectetur, adi
                pisicing elit. Similique officiis laborum, quis enim totam, accusantium tenetur maiores itaque, magni error labore impedit repudiandae. Numquam fuga soluta porro rem et sit quasi in vitae voluptates velit provident, necessitatibus omnis inventore nemo doloremque quisquam! In non beatae, minus esse sapiente iure quae dolorem deleniti! Molestiae quam enim nihil velit dicta facilis hic impedit maxime distinctio!
                 Labore excepturi, nobis obcaecati magnam n
                 atus fugit, error voluptatum enim rerum dicta ea unde. Nihil, porro maiores expedita maxime rem delectus, amet excepturi odit velit enim ad sapiente impedit! Tempora et, vel iusto molestiae magni quia vero!</p>
        </div>
        </div>
       

    </section>
 {{-- end about --}}

{{-- star menu --}}
    <section id="target" class="target">
        <h2>Target <span>Saya</span></h2>
        <p>Target saya di tahun ini adalah menjadi seorang web programing dengan spesialis fullstak developer<br>
        </p>
        <div class="target-card">
            <img src="../img/prog.jpg" alt="program">
        </div>
        <div class="target-img">
            <div class="target-img1">
                <h3>frond end</h3>
                <p>frond end adalah web developer yang membuat tampilan bagian depan halaman website kita</p>
            </div>
            <div class="target-img2">
                {{-- <img src="../img/backend.png"> --}}
                <h3>back end</h3>
            </div>
            <div class="target-img3">
             {{-- //<img src="../img/fullstack.jpg"> --}}
                <h3>Fullstak Develoer</h3>
            </div>
        </div>
    </section>
{{-- end menu --}}

{{-- star konta --}}

    <section id="kontak" class="kontak">
        <h2>kontak <span>saya</span></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi blanditiis deserunt optio, accusanti
            um unde cum, excepturi vero tempore placeat earum ratione!</p>

            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8777157175587!2d106.84823991629744!3d-6.905223455853363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6837b7929c09bf%3A0xa11cee4d00c2af45!2steras%20desa%20%22coffee%20from%20heart%22!5e0!3m2!1sid!2sid!4v1679476083682!5m2!1sid!2sid"
                 allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            </div>
            <form action="#">
                <div class="input-grup">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-grup">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-grup">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no hp">
                </div>
                <button class="btn" type="submit">kirim pesan</button>
            </form>
    </section>
{{-- end  konta --}}
     <script>
      feather.replace()
    </script>

    {{-- my javascript --}}
    <script src="js/script.js"></script>
</body>
</html>