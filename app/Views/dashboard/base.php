<?php
$user_data = session()->get('user_data');
?>
<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <title> <?= $title ?? altData() ?> </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="<?= altData() ?>"/>
    <meta name="keywords" content="">
    <meta name="author" content="Afrinewsoft"/>
    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?= site_url() ?>public/assets/images/favicons/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?= site_url() ?>public/assets/images/favicons/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?= site_url() ?>public/assets/images/favicons/favicon-16x16.png"/>

    <!-- tag input css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/es_admin/css/plugins/bootstrap-tagsinput.css">
    <!-- data tables css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/es_admin/css/plugins/dataTables.bootstrap4.min.css">
    <!-- select2 css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/es_admin/css/plugins/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/es_admin/css/formulaire.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/es_admin/css/style.css">
    <!-- fileupload-custom css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/es_admin/css/plugins/dropzone.min.css">
    <style>
        body {
            font-family: "Century Gothic";
            background: linear-gradient(blue, white, orangered, black);
        }

        }
    </style>
</head>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius img-fluid wid-100"
                         src="<?= base_url() ?>/public/assets/es_admin/images/user/<?= $user_data['u_picture'] ?? "no-image.jpg" ?>"
                         alt="User image">
                    <div class="user-details">
                        <div id="more-details"><?= ucfirst($user_data['u_role']) ?? "Rôle" ?> <i
                                    class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?= base_url() ?>/profile" data-toggle="tooltip"
                                                        title="View Profile"><i class="feather icon-user"></i></a></li>
                        <li class="list-inline-item"><a href="<?= base_url() ?>/add-picture" data-toggle="tooltip"
                                                        title="Photo de Profile"><i
                                        class="feather icon-image"></i><small
                                        class="badge badge-pill badge-primary"></small></a></li>
                        <li class="list-inline-item"><a href="<?= base_url() ?>/logout"
                                                        onclick="return confirm('Voulez-vous quitter ?');"
                                                        data-toggle="tooltip" title="Logout" class="text-danger"><i
                                        class="feather icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="<?= base_url() ?>/dashboard" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home text-dark"></i></span><span
                                class="pcoded-mtext">Dashboard</span></a>
                </li>
                <?php if ($user_data['u_role'] === 'admin'): ?>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-map text-info"></i></span><span class="pcoded-mtext">Activités</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?= base_url() ?>/add-post">Ajouter</a></li>
                            <li><a href="<?= base_url() ?>/list-posts">Toutes les activités</a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                        class="feather icon-users text-info"></i></span><span
                                    class="pcoded-mtext">Utilisateurs</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?= base_url() ?>/add-user">Ajouter Utilisateur</a></li>
                            <li><a href="<?= base_url() ?>/list-users"">Liste Utilisateurs</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <li class="nav-item pcoded-hasmenu">
                    <a href="<?= base_url() ?>/profile" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Profile</span></a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="<?= site_url() ?>" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img
                    src="<?= site_url() ?>public/assets/images/resources/logo-footer.png"
                    alt="logo"
                    class="logo"
                    style="height: 45px; width: 100%;"
            >
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
            </li>
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="<?= base_url() ?>/public/assets/es_admin/images/user/<?= $user_data['u_picture'] /*?? "user-default-avatar.png"*/ ?>"
                                 class="img-radius" alt="pix">
                            <span><?= ucfirst($user_data['u_firstname']) ?? "" ?></span>
                            <a href="<?= base_url() ?>/logout" class="dud-logout" title="Déconnexion">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="<?= site_url() ?>profile" class="dropdown-item"><i
                                            class="feather icon-user"></i>Profile</a></li>
                            <li><a href="<?= site_url() ?>logout" class="dropdown-item"><i
                                            class="feather icon-lock"></i>Déconnexion</a></li>
                            <li><a href="<?= site_url() ?>change-pwd" class="dropdown-item"><i
                                            class="feather icon-settings"></i>Changer Mot de Passe</a></li>
                            <li><a href="<?= site_url() ?>" class="dropdown-item"><i class="feather icon-home"></i>Voir
                                    le Site</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->

<!--Content Render-->
<?= $this->renderSection('content') ?>

<!-- [ Main Content ] end -->
<!-- Warning Section start -->
<!-- Older IE warning message -->
<!--[if lt IE 11]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (11 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

<!-- Required Js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/vendor-all.min.js"></script>
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/public/assets/es_admin/js/ripple.js"></script>
<script src="<?= base_url() ?>/public/assets/es_admin/js/pcoded.min.js"></script>
<script src="<?= base_url() ?>/public/assets/es_admin/js/menu-setting.min.js"></script>

<!-- Apex Chart -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/apexcharts.min.js"></script>
<!-- custom-chart js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/pages/dashboard-main.js"></script>
<!-- tag-input js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/bootstrap-tagsinput.min.js"></script>

<!-- datatable Js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/public/assets/es_admin/js/pages/data-advance-custom.js"></script>

<!-- notification Js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/bootstrap-notify.min.js"></script>
<script src="<?= base_url() ?>/public/assets/es_admin/js/pages/ac-notification.js"></script>
<!-- file-upload Js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/dropzone-amd-module.min.js"></script>
<script src="<?= base_url() ?>/public/assets/es_admin/js/menu-setting.min.js"></script>
<!-- select2 Js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/select2.full.min.js"></script>
<!-- form-select-custom Js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/pages/form-select-custom.js"></script>

<script>
    $('#user-list-table').DataTable();
</script>
<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>
<script>
    $(document).ready(function () {
        checkCookie();
    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var ticks = getCookie("modelopen");
        if (ticks != "") {
            ticks++;
            setCookie("modelopen", ticks, 1);
            if (ticks == "2" || ticks == "1" || ticks == "0") {
                $('#exampleModalCenter').modal();
            }
        } else {
            // user = prompt("Please enter your name:", "");
            $('#exampleModalCenter').modal();
            ticks = 1;
            setCookie("modelopen", ticks, 1);
        }
    }
</script>
<!-- Ckeditor js -->
<script src="<?= base_url() ?>/public/assets/es_admin/js/plugins/ckeditor.js"></script>
<script type="text/javascript">
    $(window).on('load', function () {
        ClassicEditor.create(document.querySelector('#classic-editor'))
            .catch(error => {
                console.error(error);
            });
    });
</script>
<!--Include Js Php file-->
<?= $this->include('dashboard/js_script') ?>
<!-- Js Php file-->
</body>
</html>