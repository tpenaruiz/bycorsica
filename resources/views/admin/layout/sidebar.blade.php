<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            {{-- HTML::image($gravatar, 'avatar', array('class' => 'img-circle img-responsive', 'alt'=>'user avatar')) --}}
            {{-- HTML::image(Auth::user()->avatar, 'avatar', array('class' => 'img-circle img-responsive', 'alt'=>'user avatar')) --}}
        </div>
        <div class="pull-left info">
            <p>Nom - Prénom</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Retour sur le site web</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">{{\Config::get('constante.nom_code')}}</li>




        <li class="treeview">
            <a href="#">
                <i class="fa fa-envelope-o"></i> <span>Gestion Global</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">

                <!-- Gestion Users + Rôle -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Membres</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                        <li><a href="#"><i class="fa fa-plus-circle"></i>Ajouter</a></li>
                    </ul>
                </li>



                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-hacker-news"></i> <span>Gestions des Newsletters</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                    </ul>
                </li>




                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-exclamation"></i> <span>Notifications</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                    </ul>
                </li>




                <!-- Monde Gestion Pays + Villes -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i> <span>Gestion du monde</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                        <li><a href="#"><i class="fa fa-plus-circle"></i>Ajouter</a></li>
                    </ul>
                </li>



                <!-- Catégories - Sous Catégories -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i> <span>Catégories - Sous Catégories</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                        <li><a href="#"><i class="fa fa-plus-circle"></i>Ajouter</a></li>
                    </ul>
                </li>


            </ul>
        </li>








        <li class="treeview">
            <a href="#">
                <i class="fa fa-envelope-o"></i> <span>Gestion Contenue</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>CGU</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                        <li><a href="#"><i class="fa fa-plus-circle"></i>Ajouter</a></li>
                    </ul>
                </li>



                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>CGV</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                        <li><a href="#"><i class="fa fa-plus-circle"></i>Ajouter</a></li>
                    </ul>
                </li>




                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-hacker-news"></i> <span>Charte Qualités</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                    </ul>
                </li>




                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-exclamation"></i> <span>F.A.Q</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                    </ul>
                </li>

            </ul>
        </li>









        <li class="treeview">
            <a href="#">
                <i class="fa fa-language"></i> <span>Gestion de la langue</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#"><i class="fa fa-file-code-o"></i> Gestions des Fichiers <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                        <li><a href="#"><i class="fa fa-plus-circle"></i>Ajouter</a></li>
                    </ul>
                </li>




                <li>
                    <a href="#"><i class="fa fa-database"></i> Gestions languages <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="#"><i class="fa fa-list"></i>Liste</a></li>
                        <li><a href="#"><i class="fa fa-plus-circle"></i>Ajouter</a></li>
                    </ul>
                </li>
            </ul>
        </li>




        <li class="treeview">
            <a href="#">
                <i class="fa fa-cogs"></i> <span>Gestions E-Commerce</span> <i class="fa fa-angle-left pull-right"></i>

                <!-- Gestion des produits + Du stock -->
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs"></i> <span>Gestion des produits - stocks</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href=""><i class="fa fa-list"></i>Liste</a></li>
                            <li><a href=""><i class="fa fa-plus-circle"></i>Ajouter</a></li>
                        </ul>
                    </li>


                    <!-- Intérmédiaire Gestion des fournisseurs + du Fabriquants -->
                    <li>
                        <a href="#">
                            <i class="fa fa-connectdevelop"></i> <span>Gestion Fournisseurs - Fabriquants</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href=""><i class="fa fa-list"></i>Liste</a></li>
                        </ul>
                    </li>



                    <li>
                        <a href="#">
                            <i class="fa fa-connectdevelop"></i> <span>Gestion TVA</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href=""><i class="fa fa-list"></i>Liste</a></li>
                        </ul>
                    </li>




                    <li>
                        <a href="#">
                            <i class="fa fa-connectdevelop"></i> <span>Gestion Promotions</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href=""><i class="fa fa-list"></i>Liste</a></li>
                        </ul>
                    </li>



                    <!-- Gestion Commande + Panier -->
                    <li>
                        <a href="#">
                            <i class="fa fa-connectdevelop"></i> <span>Gestion Commandes + Panier</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href=""><i class="fa fa-list"></i>Liste</a></li>
                        </ul>
                    </li>



                    <!-- Gestion Médias -->
                    <li>
                        <a href="#">
                            <i class="fa fa-connectdevelop"></i> <span>Gestion Médias</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href=""><i class="fa fa-list"></i>Liste</a></li>
                        </ul>
                    </li>



                </ul>
            </a>

        </li>

    </ul>
</section>
<!-- /.sidebar -->