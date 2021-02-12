<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<h1>oi</h1>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    Echo.channel('laravel_database_test')
        .listen('Test', e => {
            console.log(e)
        })
    Echo.channel('test')
        .listen('Test', e => {
            console.log(e)
        })

</script>

</body>
</html>
