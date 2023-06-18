<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 55px;height: 55px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden;}.header_img img{width: 60px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Teacher</title>
</head>
<body id="body-pd">
   <?php
   include '../../php/connect.php';
   $id=$_GET['teacherID'];
   $sql="select * from teacher where teacherID ='$id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $image=$row['Timage'];
        $name=$row['name'];
    

      
       $img= "../.$image";
       //echo '<img src="'.$img.'" alt="image" width="100px" height="100px">';
     
    }


   echo '  <header class="header" id="header">
       
        <div class="header_toggle "> <i class=\'bx bx-menu\' id="header-toggle"></i> </div>
        <span style="margin-left: 1000px;"><i class="fa-solid fa-bell fa-shake"></i></span>
        <p style="margin-left: 5px;">'.$name.'
        </p>
      <div class="header_img"> <img src="'.$img.'" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="./index.php?Admin=0" class="nav_logo" onclick="pageLoad()" > <i class=\'bx bx-layer nav_logo-icon\'></i> <span
                        class="nav_logo-name">BBBootstrap</span> </a>

                <div class="nav_list"> 
                    <a href="./index.php?Admin=1" class="nav_link active" > <i class=\'bx bx-grid-alt nav_icon\'></i> <span
                            class="nav_name">Dashboard</span> </a> 

                            <a href="#" class="nav_link"> <i
                            class=\'bx bx-user nav_icon\'></i> <span class="nav_name">Users</span> </a>
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
    </div>
    
    <!--Container Main start-->
  <!-- <div id="chart_div" class="mt-5" style="width: 500px; height: 500px; margin-top: 0px; margin-left: 50px;"></div> -->
        <div class="container mt-5 ml-5">
            <div class="row">
                <div class="col">
                    <h1>hi</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, repudiandae expedita quia sequi velit voluptates est ex doloremque eveniet quae labore, sed nam. Rerum delectus veniam, id ad magni eos eveniet consequuntur libero repudiandae ipsa? Rem mollitia, quisquam rerum unde ab maiores corporis laboriosam iusto debitis numquam veniam sed optio provident exercitationem consequatur laudantium, quia incidunt? Magnam ratione eaque quidem ad unde tempore aut voluptate incidunt, totam vel, sunt fuga autem officia doloremque facere. Magnam, voluptas iure doloribus autem reiciendis eligendi, rem suscipit nulla officiis dolor repellendus velit illo neque blanditiis hic. Nobis harum quos necessitatibus? Quod repellendus quo tempore similique modi consequuntur id ducimus magni deleniti. Eveniet quia cumque totam nostrum odio, nihil error ratione exercitationem, natus iure voluptatum officia unde a aliquid sunt molestias? Voluptate, incidunt tenetur accusantium nam vitae aspernatur porro omnis ab esse recusandae temporibus odio exercitationem ipsa mollitia fugit? Aspernatur modi commodi molestiae quisquam repellendus, earum saepe ut possimus nemo nihil totam numquam ullam veniam est explicabo. Inventore veniam eligendi quod nihil ipsa delectus, incidunt amet sint sequi. Sit quaerat dolores recusandae, corporis necessitatibus accusamus quos voluptate assumenda molestias hic nam obcaecati praesentium repudiandae ab veritatis, maxime maiores quo, modi quisquam? Delectus labore maiores voluptatum sequi. Minus aspernatur blanditiis architecto, consequuntur voluptatem omnis rem praesentium enim, alias excepturi odio in maiores natus voluptas numquam voluptates repellendus sapiente fugiat! Et accusamus id rem, sequi perferendis cumque nulla magnam nesciunt pariatur soluta, nemo doloribus maiores iure quaerat magni ea eaque corrupti eligendi dicta deleniti repellat quasi! Quas, provident reprehenderit facilis illo aspernatur voluptatem assumenda fugiat velit iusto similique totam asperiores ea architecto at vel ratione modi est autem odio officia facere? Dolores provident expedita obcaecati, aliquam enim neque aperiam in, tempore nemo nam doloribus quis eaque corporis possimus nisi consequatur. Voluptatibus magni quasi adipisci voluptates vitae, officiis placeat ad quisquam veniam cum animi unde corporis hic distinctio necessitatibus? Qui, sit tenetur? Maiores illum pariatur voluptatum rem est optio debitis animi qui corrupti minima architecto, exercitationem placeat eaque nesciunt, eius nostrum mollitia dignissimos earum eveniet repellendus libero rerum? Similique quo asperiores eius temporibus odio, itaque sed facilis est fugiat labore exercitationem consequatur nulla debitis veritatis, error voluptate ratione amet! Velit est pariatur assumenda veniam nostrum odio quae, fugiat perspiciatis, at facere eaque saepe repudiandae rem dolore mollitia fuga libero sequi omnis et natus modi! Ullam explicabo iste sunt a obcaecati cupiditate! Voluptas tenetur pariatur odio necessitatibus, non possimus sequi quas sed vitae aspernatur corrupti natus corporis voluptate facilis molestias quae et autem sit officia praesentium culpa totam facere! Obcaecati facere, iste ea maxime, quas quis pariatur perspiciatis repellat velit assumenda reprehenderit labore provident debitis dicta aut doloremque sit? Aperiam, minima. Quo sequi temporibus dolore soluta officiis quisquam dolores ducimus in. Aut, nemo excepturi! Numquam ea similique, nam tempora asperiores neque veniam fugit quo adipisci pariatur nostrum provident quibusdam repellendus ducimus nulla, accusamus facere cum animi quidem ullam voluptatem. Ex et corporis excepturi nesciunt, a rem numquam ullam earum sunt aliquid voluptas mollitia non natus aliquam nulla repudiandae laboriosam!</p>
                </div>
            </div>

        </div>
       
        
  <!-- <div id="charts_div" style="width: 900px; height: 500px; margin-left: 100px;"></div> -->
    <!--Container Main end-->
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></>
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
                        toggle.addEventListener(\'click\', () => {
                            // show navbar
                            nav.classList.toggle(\'show\')
                            // change icon
                            toggle.classList.toggle(\'bx-x\')
                            // add padding to body
                            bodypd.classList.toggle(\'body-pd\')
                            // add padding to header
                            headerpd.classList.toggle(\'body-pd\')
                        })
                    }
                }

                showNavbar(\'header-toggle\', \'nav-bar\', \'body-pd\', \'header\')

                /*===== LINK ACTIVE =====*/
                const linkColor = document.querySelectorAll(\'.nav_link\')

                function colorLink() {
                    if (linkColor) {
                        linkColor.forEach(l => l.classList.remove(\'active\'))
                        this.classList.add(\'active\')
                    }
                }
                linkColor.forEach(l => l.addEventListener(\'click\', colorLink))

                // Your code to run since DOM is loaded and ready
            });
    </script>';
   ?>
  
</body>
</html>
