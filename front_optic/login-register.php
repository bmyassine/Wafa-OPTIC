
<?php
//init
session_start ();
include_once ("config.php");
//panier chaamelna feha ya bro
/*session_unset ();
session_destroy ();*/

include 'index_sub/header.php';
?>

        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Account</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Login-Register</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- My Account Page -->
        <div class="my-account-area section-ptb-xl">
            <div class="container">
                <div class="row">
                    <!-- Login Form -->
                    <div class="col-lg-6">
                        <div class="login-form-wrapper">
                            <form action="connexion.php" class="sn-form sn-form-boxed" method="POST">
                                <div class="sn-form-inner">
                                    <div class="single-input">
                                        <label for="login-form-email">Identifiant *</label>
                                        <input type="text" name="id">
                                    </div>
                                    <div class="single-input">
                                        <label for="login-form-password">Mot de passe *</label>
                                        <input type="password" name="motdepasse">
                                    </div>
                                    <div class="single-input">
                                        <button type="submit" class="mr-3">
                                            <span>Se connecter</span>
                                        </button>
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="login-form-remember" id="login-form-remember">
                                            <label for="login-form-remember">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <a href="#">Lost your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--// Login Form -->

                    <!-- Register Form -->
                    <div class="col-lg-6 md-mt--30 sm-mt--30">
                        <div class="login-form-wrapper">
                            <form action="inscription.php" class="sn-form sn-form-boxed" method="post"  enctype="multipart/form-data">
                                <div class="sn-form-inner">
                                    <div class="single-input">
                                        <label for="register-form-name">identifiant:</label>
                                        <input type="text" name="id">
                                    </div>
                                    <div class="single-input">
                                        <label for="register-form-email">Mot de passe : </label>
                                        <input type="password" name="motdepasse">
                                    </div>
                                    <div class="single-input">
                                        <label for="register-form">CIN</label>
                                        <input type="text" name="cin" >
                                    </div>
                                     <div class="single-input">
                                        <label for="register-form">Photo de profil</label>
                                        </div>
                                        <input type="file" name="fileToUpload" id="fileToUpload"/>

                                        <div class="single-input">
                                        <label for="register-form">Nom</label>
                                        <input type="text" name="nom">
                                    </div>
                                    <div class="single-input">
                                        <label for="register-form">Prénom</label>
                                        <input type="text" name="prenom">
                                    </div>
                                     <div class="single-input">
                                        <label for="register-form">Email</label>
                                        <input type="email" name="email">
                                    </div>
                                    <div class="single-input">
                                        <label for="register-form">Adresse</label>
                                        <input type="text" name="adresse">
                                    </div>
                                    <div class="single-input">
                                        <label for="register-form">Date de naissance</label>
                                        <input type="Date" name="date_de_naissance">
                                    </div>
                                    <div class="single-input">
                                        <label for="register-form">Type : </label>
                                        <select name="type">
                                            <option selected>Client physique </option>
                                            <option>Client morale </option>
                                        </select>
                                     </div>
                                    <div class="single-input">
                                        <button type="submit">
                                            <span>Register</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--// Register Form -->
                </div>
            </div>
        </div>
        <!--// My Account Page -->


     <?php include 'index_sub/footer.php' ?>