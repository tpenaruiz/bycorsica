<!-- Notification Jaredreich Notie.js -->
<script src="{{ asset('plugins/notificationJs/notie.js') }}"></script>
<script type="text/javascript">
    if("{{ session('status') }}" != 0){ notie.alert(1, '{{ session('status') }}');}
    if("{{ session('warning') }}" != 0){ notie.alert(2, '{{ session('warning') }}');}
    /* Bloc d'authentification disparait à la validation du formulaire à cause du traitement en PHP
    Si erreur d'authentification redirection sur la page d'accueil avec message d'erreurs non visible
    Utilisation du plugin de notification pour signaler erreur de connexion */
    if(("{{ $errors->has('email') }}" != 0) && ("{{ $errors->has('password') }}" == 0)){ notie.alert(3, '{{ $errors->first('email') }}');}
    if(("{{ $errors->has('email') }}" == 0) && ("{{ $errors->has('password') }}" != 0)){ notie.alert(3, '{{ $errors->first('password') }}');}
    if(("{{ $errors->has('email') }}" != 0) && ("{{ $errors->has('password') }}" != 0)){ notie.alert(3, '{{ $errors->first('email') }} {{ $errors->first('password') }}');}
</script>