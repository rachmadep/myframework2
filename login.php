<?php
session_start();

include "templates/header-main.php";
include "lib/koneksi.php";
include "lib/config_web.php";
 ?>
        <main>
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <div class="boxed">
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">Create New Customer Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="head-text-type1 new-account-head">
                <H1>Welcome back. Please Login !</H1>
            </div>

            <div class="container-fluid">
                <div class="boxed">
                    <div class="new-account">
                        <form action="login-process.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <H4 class="label-text">Personal Information</H4>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <input type="email" name="email" placeholder="E-Mail">
                                    <input type="password" name="password" placeholder="Password">
                                </div>

                            </div>
                            <button type="submit" name="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>


<?php
include "templates/footer-main.php";
 ?>
