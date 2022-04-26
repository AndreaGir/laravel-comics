

    <div>
      
        <div class="primomain">
          
             <div class="dentromain">
               
                 <div class="scritta ">
                   
                    @foreach($slides as $value)
                    <div class="carta">
                        
                        <div class="tuttaimg">
                            
                            <img class="immagine2" src="{{ $value ['thumb'] }}" alt="">
                        </div>

                        <h3 class="accatre">{{ $value ['series'] }}</h3>
                        
                        
                        
                        
                    
                       
                    </div>
                    @endforeach
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
    
