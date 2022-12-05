<?php 
    $first = $_POST['first'];
    $last = $_POST['last']
?>

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
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            .button{
                flex-direction:row;
                margin:10px;
            }

                

        </style>
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
                                        <form method="POST" action="success.php">
                                            <div class="row mb-1">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["first"] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["last"] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["age"] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["gender"] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["email"] ?></p>
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["agama"] ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["pendidikan"] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["kota"] ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["provinsi"] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="card-header"><h3 class="text-center font-weight-light my-4">MEDICAL CHECK FORM</h3></div>
                                                    <div class="card-body shadow">
                                                    <p>Periksa ketentuan yang berlaku untuk Anda atau anggota kerabat dekat Anda: </p>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["inlineCheckbox1"] ?></p>
                                                        </div>
                                                    </div>
                                                    <br><br>

                                                        <p>Periksa gejala yang anda alami saat ini: </p>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["inlineCheckbox5"] ?></p>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <p>Apakah saat ini anda mengkonsumsi obat?</p>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["inlineRadioOptions"] ?></p>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <p>Silahkan list yang lain: </p>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <div class="d-flex align-items-center form-control">
                                                            <p><?php echo $_POST["textarea"] ?></p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                        </form>
                                                        <div class="card-footer text-center py-3">
                                                            <div class="small"><h4>Take care of your health</h4></div>
                                                            <div class="d-flex flex-row justify-content-center form-inline">
                                                                <p class="button"><a href="register.php"><i class='bx bx-arrow-back bx-burst' style='color:black'  ></i></a></p>
                                                                <p class="button"><a href="success.php"><i class='bx bx-right-arrow-alt bx-burst' style='color:black'  ></i></a></p>
                                                            </div>
                                                                
                                                        </div>
                                                        
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
