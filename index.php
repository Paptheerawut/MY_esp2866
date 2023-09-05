<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="ttest.css">
</head>



<body>
   <!-- ==========Navigation========= -->
   <div class="container">
        <div class="navigation">
            <ul>
                <!-- ==========สร้างปุ้มกดที่เป็นชื่อ========= -->
                <li>
                   <a href="#">
                           <span class = "icon">
                              <ion-icon name="home-outline"></ion-icon>
                           </span>
                           <span class="title">TK IOT SYSTEM</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <span class="icon">
                              <ion-icon name="server-outline"></ion-icon>
                           </span>
                           <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>    
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
            </ul>
        </div>  
        <!-- =========== main =========  -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
        </div>

    </div>


   <!-- =========== Scripts =========  -->
   <script src="assets/js/main.js"></script>

   <!-- ======= Charts JS ====== -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
   <script src="assets/js/chartsJS.js"></script>

   <!-- ====== ionicons ======= -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>