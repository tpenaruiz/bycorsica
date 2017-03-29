<a href="{{route('admin.dashboard')}}" class="logo"><img src="{{ asset('admin/img/logo.jpg') }}" class="img-responsive" alt="Logo"></a>
<span class="menu-btn"><i class="fa fa-bars"></i></span>
<ul class="ts-profile-nav">
    <li class="ts-account">
        <a href="#"><img src="{{ asset('admin/img/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt="Avatar"> Account <i class="fa fa-angle-down hidden-side"></i></a>
        <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Edit Account</a></li>
            <li><a href="{{route('home')}}">Retour sur le site</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </li>
</ul>