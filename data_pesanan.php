<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scele=1.0">
        <title>silminn</title>
        <link rel="stylesheet" type="text/css" href="datapesanan.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <head>
        <header>
            <a href="toko_online.html" class="logo">Dulux</a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="toko_online.html" class="">Home</a></li>
                    <li><a href="http://localhost/silminn/About_online.php" class="">About</a></li>
                    <li><a href="product.html" class="">Product</a></li>
                    <li><a href="http://localhost/silminn/data_pesanan.php" class="active">Pesan disini</a></li>

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
    </head>
    <body>
        <div class="wrap" style="color: #fc0664">
            <div class="container">
                <h1>Data Pesanan</h1>
                <form name="form1" method="post" action="proses.php" onSubmit="validasi()">
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><input type="text" name="nama_lengkap"></td>
                        </tr>    
                        <tr>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td>
                                <select name="Provinsi">
                                    <option>--Pilih Provinsi--</option>
                                    <option>Aceh</option>
                                    <option>Sumatra Utara</option>
                                    <option>Sumatra Barat</option>
                                    <option>Riau</option>
                                    <option>Kepulauan Riau</option>
                                    <option>Jambi</option>
                                    <option>Bengkulu</option>
                                    <option>Sumatra Selatan</option>
                                    <option>Kepulauan Bangka Belitung</option>
                                    <option>Lampung</option>
                                    <option>Banten</option>
                                    <option>Jawa Barat</option>
                                    <option>Jakarta</option>
                                    <option>Jawa Tengah</option>
                                    <option>Yogyakarta</option>
                                    <option>Jawa Timur</option>
                                    <option>Bali</option>
                                    <option>Nusa Tenggara Barat</option>                                        
                                    <option>Nusa Tenggara Timur</option>
                                    <option>Kalimantan Barat</option>
                                    <option>Kalimantan Selatan</option>
                                    <option>Kalimantan Tengah</option>
                                    <option>Kalimantan Timur</option>
                                    <option>Kalimantan Utara</option>
                                    <option>Gorontalo</option>
                                    <option>Sulawsi Barat</option>
                                    <option>Sulawsi Selatan</option>
                                    <option>Sulawsi Tengah</option>
                                    <option>Sulawsi Tenggara</option>
                                    <option>Sulawsi Utara</option>
                                    <option>Maluku</option>
                                    <option>Maluku Utara</option>
                                    <option>Papua Barat</option>
                                    <option>Papua</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="Alamat"></textarea></td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <td><input type="number" name="telp"></td>
                        </tr>         
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jkelamin" value="Laki-Laki">Laki-Laki
                                <input type="radio" name="jkelamin" value="Perempuan">Perempuan
                            </td>
                        </tr>    
                <tr>
                    <td>Pilihan Barang </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Alat</td>
                    <td>
                        <select name="Pesanan" id="Pesanan">
                            <option>Pipa PVC</option>
                            <option>Selang Air 10M</option>
                            <option>Kran Air</option>
                            <option>Palu Besi</option>
                            <option>Sekop Pasir</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bahan</td>
                    <td>
                        <select name="beli" id="beli">
                            <option>Semen</option>
                            <option>Cat Tembok</option>
                            <option>Cat Kayu</option>
                            <option>Triplek</option>
                            <option>Paku 1kg</option>
                            <option>Besi Beton Perbatang</option>
                            <option>Keramik</option>
                            <option>Pasir/pick Up</option>
                            <option>Batu Bata perbiji</option>
                            <option>Asbes 180x105mm</option>
                            <option>Pintu Kamar Mandi</option>
                            <option>Lem Fox 350gr</option>
                            <option>Batako perbiji</option>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="kirim">kirim</button>
                        <button><a link href="toko_online.html">kembali</a></button>
                    </td>
                </tr>
                </table>
                </form>
            </div>
        </div>
        <div class="footertop">
                <div class="medsos">
                    <ul>
                        <li><a href="https://www.facebook.com/salman"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://instagram.com/_salmanfsl?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                    </ul>  
                </div>                         
            </div>
            <div class="footerbottom">
                <div class="copyright">
                    <h4 style="margin-top: 0px;"><br>silminn 2022 </br></h4>
                </div>
            </div>
        </div>  
    </body>


</html>