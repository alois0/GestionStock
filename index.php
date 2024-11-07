<?php


?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Gestion de stock</title>
    <link rel="stylesheet" href="./public/css/style.css" />
    <!-- Boxicons CDN Link -->
    <link
        href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
        <i class='bx bxs-dashboard'></i>
            <span class="logo_name">GestStock</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Tableau de bord</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Produit</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Commandes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links_name">Analyses</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-coin-stack"></i>
                    <span class="links_name">Stock</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-book-alt"></i>
                    <span class="links_name">Toutes les commmandes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Utilisateur</span>
                </a>
            </li>      
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Configuration</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Déconnexion</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
                <span class="dashboard">Tableau de bord</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Recherche..." />
                <i class="bx bx-search"></i>
            </div>
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name">Admin</span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Commandes</div>
                        <div class="number">40,876</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Depuis hier</span>
                        </div>
                    </div>
                    <i class="bx bx-cart-alt cart"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Ventes</div>
                        <div class="number">38,876</div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Depuis hier</span>
                        </div>
                    </div>
                    <i class="bx bxs-cart-add cart two"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Profit</div>
                        <div class="number">12,876 </div>
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Depuis hier</span>
                        </div>
                    </div>
                    <i class="bx bx-cart cart three"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Revenu</div>
                        <div class="number">11,086</div>
                        <div class="indicator">
                            <i class="bx bx-down-arrow-alt down"></i>
                            <span class="text">Aujourd'hui</span>
                        </div>
                    </div>
                    <i class="bx bxs-cart-download cart four"></i>
                </div>
            </div>

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Ventes recentes</div>
                    <div class="sales-details">
                        <ul class="details">
                            <li class="topic">Date</li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                            <li><a href="#">02 Jan 2021</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Client</li>
                            <li><a href="#">Léo Dubreuil</a></li>
                            <li><a href="#">Sophie Lemarchand</a></li>
                            <li><a href="#">Hugo Fournier</a></li>
                            <li><a href="#">Lucas Martinet</a></li>
                            <li><a href="#">Élodie Perrault</a></li>
                            <li><a href="#">Antoine Garnier</a></li>
                            <li><a href="#">Camille Roussel</a></li>
                            <li><a href="#">Jules Morel</a></li>
                            <li><a href="#">Emma Lefèvre</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Produit</li>
                            <li><a href="#">Ordinateur</a></li>
                            <li><a href="#">iPhone</a></li>
                            <li><a href="#">Returned</a></li>
                            <li><a href="#">Ordinateur</a></li>
                            <li><a href="#">iPhone</a></li>
                            <li><a href="#">Returned</a></li>
                            <li><a href="#">Ordinateur</a></li>
                            <li><a href="#">iPhone</a></li>
                            <li><a href="#">Ordinateur</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Prix</li>
                            <li><a href="#">204.98 €</a></li>
                            <li><a href="#">24.55 €</a></li>
                            <li><a href="#">25.88 €</a></li>
                            <li><a href="#">170.66 €</a></li>
                            <li><a href="#">56.56 €</a></li>
                            <li><a href="#">44.95 €</a></li>
                            <li><a href="#">67.33 €</a></li>
                            <li><a href="#">23.53 €</a></li>
                            <li><a href="#">46.52 €</a></li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="#">Voir Tout</a>
                    </div>
                </div>
                <div class="top-sales box">
                    <div class="title">Produits les plus vendus</div>
                    <ul class="top-sales-details">
                        <li>
                            <a href="#">
                                <!--<img src="images/sunglasses.jpg" alt="">-->
                                <span class="product">Ordinateur</span>
                            </a>
                            <span class="price">1107 €</span>
                        </li>
                        <li>
                            <a href="#">
                                <!--<img src="images/jeans.jpg" alt="">-->
                                <span class="product">PC</span>
                            </a>
                            <span class="price">1567 €</span>
                        </li>
                        <li>
                            <a href="#">
                                <!-- <img src="images/nike.jpg" alt="">-->
                                <span class="product">Chaussure</span>
                            </a>
                            <span class="price">234 €</span>
                        </li>
                        <li>
                            <a href="#">
                                <!--<img src="images/scarves.jpg" alt="">-->
                                <span class="product">Pantalon</span>
                            </a>
                            <span class="price">131 €</span>
                        </li>
                        <li>
                            <a href="#">
                                <!--<img src="images/blueBag.jpg" alt="">-->
                                <span class="product">Samsung</span>
                            </a>
                            <span class="price">1456 €</span>
                        </li>
                        <li>
                            <a href="#">
                                <!--<img src="images/bag.jpg" alt="">-->
                                <span class="product">iPhone</span>
                            </a>
                            <span class="price">1345 €</span>
                        </li>

                        <li>
                            <a href="#">
                                <!--<img src="images/addidas.jpg" alt="">-->
                                <span class="product">iPhone X</span>
                            </a>
                            <span class="price">1345 €</span>
                        </li>
                        <li>
                            <a href="#">
                                <!--<img src="images/shirt.jpg" alt="">-->
                                <span class="product">TShirt</span>
                            </a>
                            <span class="price">12 €</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>

</html>