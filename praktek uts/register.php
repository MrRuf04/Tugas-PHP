<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container w-50">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-3 ">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">MEDICAL FORM</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="index1.php">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="first" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="last" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="age" type="text" id="inputAge" placeholder="Enter your age" />
                                                        <label for="inputAge">What is your age?</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex flex-row">
                                                        <div class="form-check form-check-inline">
                                                            <input name="gender" id="gender_0" type="radio" class="from-control" value="Laki-laki"> 
                                                            <label for="gender_0" class="custom-control-label">Laki-laki</label>
                                                        </div>
                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input name="gender" id="gender_1" type="radio" class="from-control" value="Perempuan"> 
                                                            <label for="gender_1" class="custom-control-label">Perempuan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="agama" list="datalistOptions" id="agama" placeholder="Agama">
                                                        <label for="agama">Agama</label>
                                                        <datalist id="datalistOptions">
                                                            <option value="Islam">
                                                            <option value="Kristen Protestan">
                                                            <option value="Katolik">
                                                            <option value="Hindu">
                                                            <option value="Buddha">
                                                            <option value="Konghucu">
                                                        </datalist>
                                                        </div>
                                                </div>

                                                <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="pendidikan" list="pendidikanlistOptions" id="pendidikan" placeholder="Jenjang Pendidikan">
                                                        <label for="pendidikan">Jenjang Pendidikan</label>
                                                        <datalist id="pendidikanlistOptions">
                                                            <option value="SD">
                                                            <option value="SMP">
                                                            <option value="SMA/SMK">
                                                            <option value="D1">
                                                            <option value="D2">
                                                            <option value="D3">
                                                            <option value="S1">
                                                            <option value="S2">
                                                            <option value="S3">
                                                        </datalist>
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" list="kotalistOptions" id="daerahNamaKota" placeholder="Nama Kota" name="kota">
                                                        <label for="daerahNamaKota">Nama Kota</label>
                                                        <datalist id="kotalistOptions">
                                                            <option value="Banda Aceh">
                                                            <option value="Sabang">
                                                            <option value="Langsa">
                                                            <option value="Lhokseumawe">
                                                            <option value="Subulussalam">
                                                            <option value="Denpasar">
                                                            <option value="Pangkalpinang">
                                                            <option value="Cilegon">
                                                            <option value="Serang">
                                                            <option value="Tanggerang Selatan">
                                                            <option value="Tanggerang">
                                                            <option value="Bengkulu">
                                                            <option value="Yogyakarta">
                                                            <option value="Gorontalo">
                                                            <option value="Jakarta Barat">
                                                            <option value="Jakarta Pusat">
                                                            <option value="Jakarta Selatan">
                                                            <option value="Jakarta Timur">
                                                            <option value="Jakarta Utara">
                                                            <option value="Sungai Penuh">
                                                            <option value="Jambi">
                                                            <option value="Bandung">
                                                            <option value="Bekasi">
                                                            <option value="Bogor">
                                                            <option value="Cimahi">
                                                            <option value="Cirebon">
                                                            <option value="Depok">
                                                            <option value="Sukabumi">
                                                            <option value="Tasikmalaya">
                                                            <option value="Banjar">
                                                            <option value="Magelang">
                                                            <option value="Pekalongan">
                                                            <option value="Salatiga">
                                                            <option value="Semarang">
                                                            <option value="Surakarta">
                                                            <option value="Tegal">
                                                            <option value="Batu">
                                                            <option value="Blitar">
                                                            <option value="Kediri">
                                                            <option value="Madiun">
                                                            <option value="Malang">
                                                            <option value="Mojokerto">
                                                            <option value="Pasuruan">
                                                            <option value="Probolinggo">
                                                            <option value="Surabaya">
                                                            <option value="Pontianak">
                                                            <option value="Singkawang">
                                                            <option value="Banjarbaru">
                                                            <option value="Banjarmasin">
                                                            <option value="Palangkaraya">
                                                            <option value="Balikpapan">
                                                            <option value="Botang">
                                                            <option value="Samarinda">
                                                            <option value="Nusantara">
                                                            <option value="Tarakan">
                                                            <option value="Batam">
                                                            <option value="Tanjungpinang">
                                                            <option value="Bandar Lampung">
                                                            <option value="Metro">
                                                            <option value="Ternate">
                                                            <option value="Tidore Kepulauan">
                                                            <option value="Ambon">
                                                            <option value="Tual">
                                                            <option value="Bima">
                                                            <option value="Mataram">
                                                            <option value="Kupang">
                                                            <option value="Sorong">
                                                            <option value="Jayapura">
                                                            <option value="Dumai">
                                                            <option value="PekanBaru">
                                                            <option value="Makasar">
                                                            <option value="Palopo">
                                                            <option value="Parepare">
                                                            <option value="Palu">
                                                            <option value="Baubau">
                                                            <option value="Kendiri">
                                                            <option value="Bitung">
                                                            <option value="Kotamobagu">
                                                            <option value="Manado">
                                                            <option value="Tomohon">
                                                            <option value="BukitTinggi">
                                                            <option value="Padang">
                                                            <option value="Padang Panjang">
                                                            <option value="Pariaman">
                                                            <option value="Payakumbuah">
                                                            <option value="Sawahlunto">
                                                            <option value="Solok">
                                                            <option value="Lubuklinggau">
                                                            <option value="Pagar Alam">
                                                            <option value="Palembang">
                                                            <option value="Prabumulih">
                                                            <option value="Binjai">
                                                            <option value="Gunung Sitoli">
                                                            <option value="Medan">
                                                            <option value="Padangsidimpuan">
                                                            <option value="Pematangsiantar">
                                                            <option value="Sibolga">
                                                            <option value="Tanjungbalai">
                                                            <option value="Tebing Tinggi">
                                                        </datalist>
                                                        </div>
                                                </div>

                                                <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="provinsi" list="provinsilistOptions" id="dataNamaProvinsi" placeholder="Jenjang Pendidikan">
                                                        <label for="dataNamaProvinsi">Provinsi</label>
                                                        <datalist id="provinsilistOptions">
                                                            <option value="Aceh">
                                                            <option value="Bali">
                                                            <option value="Bangka Belitung">
                                                            <option value="Banten">
                                                            <option value="Bengkulu">
                                                            <option value="Daerah Istimewa Yogyakarta">
                                                            <option value="Gorontalo">
                                                            <option value="Jakarta">
                                                            <option value="Jambi">
                                                            <option value="Jawa Barat">
                                                            <option value="Jawa Tengah">
                                                            <option value="Jawa Timur">
                                                            <option value="Kalimantan Barat">
                                                            <option value="Kalimantan Selatan">
                                                            <option value="Kalimantan Tengah">
                                                            <option value="Kalimantan Timur">
                                                            <option value="Kalimantan Utara">
                                                            <option value="Kepulauan Riau">
                                                            <option value="Lampung">
                                                            <option value="Maluku Utara">
                                                            <option value="Maluku">
                                                            <option value="Nusa Tenggara Barat">
                                                            <option value="Nusa Tenggara Timur">
                                                            <option value="Papua Barat">
                                                            <option value="Papua">
                                                            <option value="Riau">
                                                            <option value="Sulawesi Selatan">
                                                            <option value="Sulawesi Tengah">
                                                            <option value="Sulawesi Tenggara">
                                                            <option value="Sulawesi Utara">
                                                            <option value="Sumatra Barat">
                                                            <option value="Sumatra Selatan">
                                                            <option value="Sumatra Utara">
                                                        </datalist>
                                                        </div>
                                                </div>
                                            </div>
                                                <div class="card-header"><h3 class="text-center font-weight-light my-4">MEDICAL CHECK FORM</h3></div>
                                                    <div class="card-body shadow">
                                                    <p>Periksa ketentuan yang berlaku untuk Anda atau anggota kerabat dekat Anda: </p>
                                                    <div class="form-check form-check-inline">
                                                        
                                                        <input class="form-check-input" name="inlineCheckbox1" type="checkbox" id="inlineCheckbox1" value="Asma">
                                                        <label class="form-check-label" for="inlineCheckbox1">Asma</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="inlineCheckbox1" type="checkbox" id="inlineCheckbox2" value="Penyakit jantung">
                                                        <label class="form-check-label" for="inlineCheckbox2">Penyakit Jantung</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="inlineCheckbox1" type="checkbox" id="inlineCheckbox3" value="Kanker">
                                                        <label class="form-check-label" for="inlineCheckbox3">Kanker</label>
                                                        </div>
                                                        <input class="form-check-input" name="inlineCheckbox1" type="checkbox" id="inlineCheckbox4" value="Diabetes">
                                                        <label class="form-check-label" for="inlineCheckbox4">Diabetes</label><br><br>

                                                        <p>Periksa gejala yang anda alami saat ini: </p>
                                                    <div class="form-check form-check-inline">
                                                        
                                                        <input class="form-check-input" name="inlineCheckbox5" type="checkbox" id="inlineCheckbox5" value="Sakit Dada">
                                                        <label class="form-check-label" for="inlineCheckbox5">Sakit Dada</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="inlineCheckbox5" type="checkbox" id="inlineCheckbox6" value="Kardiovaskular">
                                                        <label class="form-check-label" for="inlineCheckbox6">Kardiovaskular</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="inlineCheckbox5" type="checkbox" id="inlineCheckbox7" value="Pernafasan">
                                                        <label class="form-check-label" for="inlineCheckbox7">Pernafasan</label>
                                                        </div>
                                                        <input class="form-check-input" name="inlineCheckbox5" type="checkbox" id="inlineCheckbox8" value="Penambahan BB">
                                                        <label class="form-check-label" for="inlineCheckbox8">Penambahan BB</label>
                                                        <br><br>
                                                        <p>Apakah saat ini anda mengkonsumsi obat?</p>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Ya">
                                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Tidak">
                                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div><br><br>
                                                    <p>Silahkan list yang lain: </p>
                                                        <div class="form-group">
                                                            <div class="col-xs-8">
                                                            <textarea id="textarea" name="textarea" cols="20" rows="1" class="form-control"></textarea>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    
                                                        <div class="mt-4 mb-0">
                                                            <div class="d-grid"><button class="btn btn-primary btn-block" >Submit</button></div>
                                                        </div>
                                                    </div>
                                                        </form>
                                                        <div class="card-footer text-center py-3">
                                                            <div class="small"><h4>Take care of your health</h4></div>
                                                        </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
