<?php

include '../components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


include '../components/wishlist_cart.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <link rel="stylesheet" href="style.css">


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->

</head>

<body>

    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="Untitled-1.png" alt="">
                    <h2>Buy<span class="danger">Sell</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>


            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Admin</h3>
                </a>

                <a href="about.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>About</h3>
                </a>
                <!-- <a href="useroder.php">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Order</h3><br>
                </a> -->

                <a href="#">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Analysis</h3>
                </a>

                <a href="message.php">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Message</h3>
                    <span class="message-count">15</span>
                </a>

                <a href="adminmessage.php">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Ad.Messages</h3>
                    <span class="message-count">2</span>
                </a>


                <a href="userhome.php">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Product</h3>
                </a>


                <a href="useroder.php">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Order</h3><br>
                </a>
                <a href="adminuserproduct.php">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add product</h3>
                </a>

                <a href="userlogin.php">
                    <span class="material-icons-sharp">login</span>
                    <h3>Login</h3>
                </a>
                <a href="userlogout.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>

                <a href="register_admin.php">
                    <span class="material-icons-sharp">settings</span>
                    <h3>AD.Register</h3>
                </a>

                <a href="admin_login.php">
                    <span class="material-icons-sharp">login</span>
                    <h3>Admin Login</h3>
                </a>
                <a href="userlogout.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Admin Logout</h3>
                </a>
                   <br>
            </div>
        </aside>


        <main>
            <h1>DashBoard</h1>

            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="Sales">
                    <span class="material-icons-sharp">
                        analytics
                        </span>
                    <div class="middle">
                        <div class="lef">
                            <h3>Total Slaes</h3>
                            <h1>$35,034</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                    <circle cx='38' cy='38' r='30'></circle>
                                </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>


                <div class="Expense">
                    <span class="material-icons-sharp">
                        bar_chart
                        </span>
                    <div class="middle">
                        <div class="lef">
                            <h3>Total Expence</h3>
                            <h1>$17,034</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                    <circle cx='38' cy='38' r='30'></circle>
                                </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>


                <div class="income">
                    <span class="material-icons-sharp">
                        analytics
                        </span>
                    <div class="middle">
                        <div class="lef">
                            <h3>Total Income</h3>
                            <h1>$13,034</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                    <circle cx='38' cy='38' r='30'></circle>
                                </svg>
                            <div class="number">
                                <p>31%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>





            <div class="recent-orders">
                <h2>Recent Order</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Fordable Mini Drine</td>
                            <td>64566</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Peimary">Details</td>
                        </tr>

                        <tr>
                            <td>Fordable Mini Drine</td>
                            <td>64566</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Peimary">Details</td>
                        </tr>

                        <tr>
                            <td>Fordable Mini Drine</td>
                            <td>64566</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Peimary">Details</td>
                        </tr>

                        <tr>
                            <td>Fordable Mini Drine</td>
                            <td>64566</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Peimary">Details</td>
                        </tr>

                        <tr>
                            <td>Fordable Mini Drine</td>
                            <td>64566</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Peimary">Details</td>
                        </tr>
                        <tr>
                            <td>Fordable Mini Drine</td>
                            <td>64566</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Peimary">Details</td>
                        </tr>
                        <tr>
                            <td>Fordable Mini Drine</td>
                            <td>64566</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Peimary">Details</td>
                        </tr>
                        <tr>
                            <td>Fordable Mini Drine</td>
                            <td>64566</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Peimary">Details</td>
                        </tr>
                    </tbody>
                </table>

                <a href="#">Show All</a>
            </div>
        </main>

        <div class="right">

            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>




                <div class="theme_toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>

                <div class="profile">
                <a href="admin_login.php">
                <div class="info">

                       <p>hey,<b>IKRAMUL</b></p>
                       <small class="text-muted">Admin</small>
                   </div>
                </a>

                     <div class="profile">
                        <div id="user_btn" class="fa fas user">
                        <div class="profile-photo">
                        <div id="login-btn" class="img">
                            <img src="profile.jpg">

                        </div>

                    </div>
                        </div>
                        <a href="userlogin.php" style="size:15px ; box-sizing:content-box;border:8px solid dark;margin:auto;font-weight:bold;">
                          User Login
                        </a>
                     </div>


                </div>
            </div>






            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">

                    <div class="update">
                        <div class="profile-photo">
                            <img src="amit_sir.gif" alt="">
                        </div>
                        <div class="message">
                            <p><b>Amit Chokroborthy </b>reciable this order in this product using to daily working</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="jahangir_sir.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>jahangir Alom </b>reciable this order in this product using to daily working</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="profile.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>IKRAMUL HOSSAIN </b>reciable this order in this product using to daily working</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sales_analysis">
                <h2>Sales Analysis</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDER</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>

                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-sharp">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>OFLINE ORDER</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="danger">+17%</h5>
                        <h3>1167</h3>
                    </div>
                </div>

                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW CUSTOMER</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>895</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <a href="adminuserproduct.php">
                            <h3>Add Product</h3>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./index.js"></script>
    <script src="order.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>