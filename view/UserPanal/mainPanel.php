
<?php
require_once('C:\xampp\htdocs\hnd\controller\UserPanelControl.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/dash.css">


 <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 55px;height: 55px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden;}.header_img img{width: 60px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <link rel="stylesheet" href="../../assets/css/userPanel.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>New Samdhi</title>
</head>
<body id="body-pd">
   <?php
   include '../../php/connect.php';
   $id=$_GET['stdID'];
   $sql="select * from student where stdID='$id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $image=$row['image'];
        $fname=$row['Fist_Name'];
        $lname=$row['Last_Name'];
        $fullName=$fname." ".$lname;

      
       $img= "../.$image";
       //echo '<img src="'.$img.'" alt="image" width="100px" height="100px">';
     
    }


   echo '
   
   <div class="container-fluid">
   <header class="header" id="header" style="background-color: #157DEC;">
       
        <div class="header_toggle"> <i class=\'bx bx-menu\' id="header-toggle" style="color: white;"></i> </div>
        <p style="margin-left: 1000px; color: white;"><b>'.$fullName.'</b>
        </p>
      <div class="header_img"> <img src="'.$img.'" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo" onclick="pageLoad()" ><img src="../../assets/img/s.ico" alt="" style="width: 25px;"> <span
                        class="nav_logo-name">New Samadhi</span> </a>

                <div class="nav_list"> 
                    <a href="./mainPanel.php?stdID='.$id.'&option=Dashboard" class="nav_link active btn btn-primary ml-2 mb-4" > <i class=\'bx bx-grid-alt nav_icon\' style="margin-right: 15px; padding-left: 0px;"></i> <span
                            class="nav_name">Dashboard</span> </a> 

                            <a href="#" class="nav_link"> <i
                            class=\'bx bx-user nav_icon\'></i> <span class="nav_name">My Classes</span> </a>
                             <a href="#"
                        class="nav_link"> <i class=\'bx bx-message-square-detail nav_icon\'></i> <span
                            class="nav_name">Messages</span> </a> 
                            
                            <a href="#" class="nav_link"> <i
                            class=\'bx bx-bookmark nav_icon\'></i> <span class="nav_name">Bookmark</span> </a>
                             <a href="#"
                        class="nav_link"> <i class=\'bx bx-folder nav_icon\'></i> <span class="nav_name">Files</span> </a> 
                        <a
                        href="#" class="nav_link"> <i class=\'bx bx-bar-chart-alt-2 nav_icon\'></i> <span
                            class="nav_name">Stats</span> </a> 
                        </div>
            </div> <a href="#" class="nav_link"> <i class=\'bx bx-log-out nav_icon\'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div></div>';
    ?>
    <!--Container Main start-->
  <div id="chart_div" class="mt-0" style="width: 500px; height: 50px; margin-top: 200px; margin-left: 0px;"></div>
      <?php
      $dashboard = new userPanel();
      $dashboard->getDashboard();
      include 'C:\xampp\htdocs\hnd\view\repeat.php';
      footer();
      
      ?>
      
    
  <div id="charts_div" style="width: 900px; height: 500px; margin-left: 100px;"></div>
    <!--Container Main end-->
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function (event) {

                const showNavbar = (toggleId, navId, bodyId, headerId) => {
                    const toggle = document.getElementById(toggleId),
                        nav = document.getElementById(navId),
                        bodypd = document.getElementById(bodyId),
                        headerpd = document.getElementById(headerId)

                    // Validate that all variables exist
                    if (toggle && nav && bodypd && headerpd) {
                        toggle.addEventListener('click', () => {
                            // show navbar
                            nav.classList.toggle('show')
                            // change icon
                            toggle.classList.toggle('bx-x')
                            // add padding to body
                            bodypd.classList.toggle('body-pd')
                            // add padding to header
                            headerpd.classList.toggle('body-pd')
                        })
                    }
                }

                showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

                /*===== LINK ACTIVE =====*/
                const linkColor = document.querySelectorAll('.nav_link')

                function colorLink() {
                    if (linkColor) {
                        linkColor.forEach(l => l.classList.remove('active'))
                        this.classList.add('active')
                    }
                }
                linkColor.forEach(l => l.addEventListener('click', colorLink))

                // Your code to run since DOM is loaded and ready
            });
    </script>;
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
