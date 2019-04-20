<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GACHA</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  

<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-reboot.min.css">

  <!-- <script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min"></script> -->
<style>

body{
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
 li {
     margin-right: 10px;
     padding-top: 5px;
 }
</style>

</head>
<body>

    <nav class = "navbar navbar-expand-md navbar-light bg-light sticky-top">

        <button class ="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse" id = "collapse_target">

        <a class = "navbar-brand"><img src = "<?php echo base_url('application/views/assets/placeholder.jpg'); ?>" style = "width: 40px;height: 20%;"></a>
        <span class = "navbar-text" style = "padding-bottom:10px;margin-right: 580px;color: black;font-size: 25x;font-weight: bold;">GACHA</span>

            <ul class = "navbar-nav">
                <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo base_url('Home'); ?>">Home</a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo base_url('Lowongan'); ?>">Lowongan</a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo base_url('Mitra'); ?>">Mitra</a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo base_url('About'); ?>">About</a>
                </li>
                <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Cari">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 10px;">Cari</button>
                    </form>
                <li class = "nav-item dropdown">
                    <a class = "nav-link dropdown-toggle" data-toggle = "dropdown" data-target="dropdown_target" href = "#" style = "padding-top:8px;">
                        Nama Akun
                        <span class = "caret"></span>
                    </a>
                    <div class = "dropdown-menu" aria-labelled by="dropdown_target">
                            <ul class = "navbar-nav">
                                <a class = "dropdown-item"><img src = "assets/img_avatar2.png" style = "width: 40px;"></a>
                                <li class = "nav-item">
                                        <a class = "dropdown-item">Nama</a>
                                        <a class = "dropdown-item">Email</a>
                                        <button class = "dropdown-item" style = "background-color:bg-danger">Setting</button>
                                </li>       
                        </ul>
                        
                    </div>
                </li>
                <li class = "nav-item dropdown" >
                    <button class="nav-link  login" data-toggle = "dropdown" data-target="dropdown_target1" style = "background:red;color:white;border:none;cursor:pointer;width: 75px;height:50px;border-radius:20px;padding-bottom:10px;">
                        Login
                    </button>
                    <div class = "dropdown-menu" arialabelledby = "dropdown_target1">
                        <button class = "dropdown-item">User</button>
                        <button class = "dropdown-item">Mitra</button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <img src ="assets/placeholder_bg.png"> 
    <img src ="assets/placeholder_bg.png"> -->
</body>
</html>