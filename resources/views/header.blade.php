<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div>
        <div class="header">
                <div class="dentro-header">
                    <div class="immagine">
                        <img src="{{asset ('img/dc-logo.png') }}" alt="">
                    </div>
                    <div class="indice">

                        @foreach ($nameHeader as $value)

                            <ul>
                                <li>
                                    {{ $value ['name'] }}
                                </li>
                            </ul>
                            
                        @endforeach
                        {{-- <ul>
                            <li>CHARACTER</li>
                            <li>COMICS</li>
                            <li>MOVIES</li>
                            <li>TV</li>
                            <li>GAMES</li>
                            <li>COLLECTIBES</li>
                            <li>VIDEOS</li>
                            <li>FANS</li>
                            <li>NEWS</li>
                            <li>SHOP</li>
                        </ul> --}}
                    </div>
                </div>
           </div>
           <div class="bg-img">
               <img src="{{ asset('img/jumbotron.jpg')}}" alt="">

               

           </div>
    </div>



    
</body>
</html>