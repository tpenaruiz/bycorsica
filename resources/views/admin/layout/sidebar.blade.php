<ul class="ts-sidebar-menu">
    <li class="ts-label">Search</li>
    <li>
        <input type="text" class="ts-sidebar-search" placeholder="Search here...">
    </li>
    <li class="ts-label">Main</li>

    <li class="dashboard">
        <a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
    </li>

    <li class="user">
        <a href="{{route('user.index')}}"><i class="fa fa-user"></i>User</a>
    </li>







    <!-- TODO Les models 1 étage et 2 étages -->
    <li><a href="#"><i class="fa fa-desktop"></i>Categorie 2 étages</a>
        <ul>
            <li><a href="#">Sous categorie 1</a></li>
            <li><a href="#">Sous categorie 2</a></li>
            <li><a href="#">Sous categorie 3</a></li>
        </ul>
    </li>

    <li><a href="#"><i class="fa fa-sitemap"></i> Categorie 3 étages</a>
        <ul>
            <li><a href="#">Sous categorie 1</a></li>
            <li><a href="#">Sous categorie 2</a></li>
            <li><a href="#">Sous categorie 3</a>
                <ul>
                    <li><a href="#">sous sous catégorie 1</a></li>
                    <li><a href="#">sous sous catégorie 2</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>