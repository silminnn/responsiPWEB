<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scele=1.0">
        <title>silminn</title>
        <link rel="stylesheet" type="text/css" href="style_about.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <head>
        <header>
            <a href="toko_online.html" class="logo">Dulux.</a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="toko_online.html" class="">Home</a></li>
                    <li><a href="http://localhost/silminn/About_online.php" class="active">About</a></li>
                    <li><a href="product.html" class="">Product</a></li>
                    <li><a href="http://localhost/silminn/data_pesanan.php" class="">Pesan disini</a></li>

                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".menu-toggle").click(function(){
                    $(".menu-toggle").toggleClass("active")
                    $("nav").toggleClass("active")
                })
            })
        </script>
        <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.713260587716!2d110.3891618!3d-7.820144700000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a570de7039c8b%3A0x13674bb62cb7e8!2sGg.%20Bhineka%2C%20Pandeyan%2C%20Kec.%20Umbulharjo%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta%2055161!5e0!3m2!1sid!2sid!4v1658317086975!5m2!1sid!2sid" width="100%" height="500px auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </head>
    <body>
    
            <div class="main-conten">
                <div class="left box">
                    <h2>Tentang Kami</h2>
                    <div class="content">
                        <p>ini toko bagusssss</p>                        
                        <div class="medsos">
                            <ul>
                                <li><a href="https://www.facebook.com/silmin"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/_salmanfsl?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                            </ul>                            
                        </div>
                    </div>
                </div>
                <div class="centerbox">
                    <h2>Lokasi</h2>
                    <div class="content">
                        <div class="place">
                           <span class="fas fa-map-marker-alt"></span> 
                            <span class="text">Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span> 
                             <span class="text">(+62)858-640-25856</span>
                         </div>
                         <div class="email">
                            <span class="fas fa-envelope"></span> 
                             <span class="text">salman380@gmail.com</span>
                         </div>                                                 
                    </div>
                </div>
                <div class="right box">
                    <h2>Hubungi Kami.</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email *</div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                              <div class="text">Pesan</div>  
                                <textarea rows="2" cols="25" required></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit">Kirim</button>
                            </div>
                        </form>
                        <div class="copyright">
                            <br>silminn 2022 </br>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>