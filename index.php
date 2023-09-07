<?php
include "show-data.php";
include "update-data.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profil Saya</title>
        <!-- 1 Masukkan meta name habis itu ke style.css-->
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <nav>
            <!-- buat menu mobile responsive balik ke css lagi-->
            <div class="menu-mobile">
                <a href="#">Menu</a>
            </div>
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">INVENTORY</a></li>
            </ul>
        </nav>

        <section id="box-profile">
            <div class="img-profile">
                <div class="photo" style="background-image: url(file:///Users/swijaya/Downloads/WFDB2/portfolio2/asset/image/download.jpeg)">
                </div>
            </div>
            <div class="description">
                <h1 id="pName"><?php echo $nama ?></h1>
                <p id="pRole"><?php echo $role ?></p>
                <a href="#input_form" class="button bg-blue" onclick="editForm()">Edit</a>
                <a href="#" class="button border-green">Resume</a>
            </div>
            <div class="information">
                <div class="data">
                    <p class="field">Availability</p>
                    <p id="pAvailable" class="text-gray"><?php echo $availability ?></p>
                </div>
                <div class="data">
                    <p class="field">Usia</p>
                    <p id="pAge" class="text-gray"><?php echo $usia ?></p>
                </div>
                <div class="data">
                    <p class="field">Lokasi</p>
                    <p id="pLocation" class="text-gray"><?php echo $lokasi ?></p>
                </div>
                <div class="data">
                    <p class="field">Pengalaman</p>
                    <p id="pExperience" class="text-gray"><?php echo $experience ?></p>
                </div>
                <div class="data">
                    <p class="field">Email</p>
                    <p id="pEmail" class="text-gray"><?php echo $email ?></p>
                </div>
            </div>
        </section>

        <section id="input-form">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="form">
                    <label>Id User</label>
                    <input id="inpIdUser" type="text" name="ID_Biodata" value="<?php echo $ID_Biodata; ?>">
                </div> 
                <div class="form">
                    <label>Nama</label>
                    <input id="inpName" type="text" name="nama" placeholder="masukkan nama anda">
                </div>   
                <div class="form">
                    <label>Role</label>
                    <input id="inpRole" type="text" name="role">
                </div>  
                <div class="form">
                    <label>Availability</label>
                    <input id="inpAvailability" type="text" name="Availability">
                </div>  
                <div class="form">
                    <label>Usia</label>
                    <input id="inpUsia" type="number" name="usia">
                </div>  
                <div class="form">
                    <label>Lokasi</label>
                    <input id="inpLokasi" type="text" name="lokasi">
                </div>  
                <div class="form">
                    <label>Years Experience</label>
                    <input id="inpYears" type="number" name="pengalaman">
                </div>  
                <div class="form">
                    <label>Email</label>
                    <input id="inpEmail" type="email" name="email">
                </div>            
                <div class="form">
                    <input onclick="saveform()" type="submit" name="submit" value="SUBMIT" class="bg-green">
                </div>

            </form>            
        </section>

        <script>
            var formMenu = document.getElementById("input-form");
            formMenu.style.display="none"

            function editForm(){
                if(formMenu.style.display === "none"){
                    formMenu.style.display = "block";
                } else {
                    formMenu.style.display = "none";
                }
            

            var name = document.getElementById("pName").innerHTML;
            var role = document.getElementById("pRole").innerHTML;
            var available = document.getElementById("pAvailable").innerHTML;
            var usia = document.getElementById("pAge").innerHTML;
            var lokasi = document.getElementById("pLocation").innerHTML;
            var experience = document.getElementById("pExperience").innerHTML;
            var email = document.getElementById("pEmail").innerHTML;

            document.getElementById("inpName").value=name;
            document.getElementById("inpRole").value=role;
            document.getElementById("inpAvailability").value=available;
            document.getElementById("inpUsia").value=usia;
            document.getElementById("inpLokasi").value=lokasi;
            document.getElementById("inpYears").value=experience;
            document.getElementById("inpEmail").value=email;

        }


            function saveform(){
                var name = document.getElementById("inpName").value;
                var role = document.getElementById("inpRole").value;
                var Available = document.getElementById("inpAvailability").value;
                var usia = document.getElementById("inpUsia").value;
                var lokasi = document.getElementById("inpLokasi").value;
                var Experience = document.getElementById("inpYears").value;
                var email = document.getElementById("inpEmail").value;

                document.getElementById("pName").innerHTML=name;
                document.getElementById("pRole").innerHTML=role;
                document.getElementById("pAvailable").innerHTML=Available;
                document.getElementById("pAge").innerHTML=usia;
                document.getElementById("pLocation").innerHTML=lokasi;
                document.getElementById("pExperience").innerHTML=Experience;
                document.getElementById("pEmail").innerHTML=email;

                var formMenu = document.getElementById("input-form");
                formMenu.style.display = "none";
            }

        </script>

    </body>
</html>