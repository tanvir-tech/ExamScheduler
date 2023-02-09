<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExamScheduler</title>
    {{ View::make('includes/styles') }}
</head>


{{-- <body style="background-image: url('{{ asset("images/bg-lms.jpg") }}'); background-size: contain;"> --}}
<body>

    <div >

        {{ View::make('includes/header') }}



        <div class="mt-5 pt-5">
            @yield('content')
        </div>



        {{View::make('includes/footer')}}






        {{ View::make('includes/scripts') }}
</body>

</html>