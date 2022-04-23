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
      
        <div class="primomain">
          
             <div class="dentromain">
               
                 <div class="scritta ">
                   
                    
                    <div class="carta">
                        @foreach($slides as $value)
                        <div class="tuttaimg">
                            
                            <img class="immagine2" src="{{ $value ['thumb'] }}" alt="">
                        </div>

                        <h3>{{ $value ['series'] }}</h3>
                        @endforeach
                        
                        
                        
                        
                       
                    </div>

                 </div>
                 <div class="lead">
                   <h3>LEAD MORE</h3>
                 </div>

                 <div class="current">
                   <h3>CURRENT SERIES</h3>
                 </div>
                  
                  
                 
             </div>
            
          </div>

          

    </div>
    
</body>
</html>