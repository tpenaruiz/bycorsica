<script src="{{ asset('plugins/notificationJs/notie.js') }}" type="text/javascript"></script>

@if ($errors->any())
    @foreach($errors->all() as $error)
        <script>
            notie.alert(2, '<?= $error ?>', 5);
        </script>
    @endforeach
@endif