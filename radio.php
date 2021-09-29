
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <title>Document</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</head>
<body>

    <div class="main-color">
        <h3>Color</h3>
        <div>
            <input type="radio" name="color[]" class="color" value="10">
            <label>red</label>
        </div>

        <div>
            <input type="radio" name="color[]" class="color" value="20">
            <label>green</label>
        </div>

        <div>
            <input type="radio" name="color[]" class="color" value="30">
            <label>yellow</label>
        </div>

        
        <div>
            <input type="radio" name="color[]" class="color" value="40">
            <label>blue</label>
        </div>

        
        <div>
            <input type="radio" name="color[]" class="color" value="50">
            <label>black</label>
        </div>

    </div>


    <hr>

    <div class="main-size">
        <h3>Size</h3>
        <div>
            <input type="radio" name="size[]" class="size" value="60">
            <label>small</label>
        </div>
        <div>
            <input type="radio" name="size[]" class="size" value="70">
            <label>medium</label>
        </div>
        <div>
            <input type="radio" name="size[]" class="size" value="80">
            <label>large</label>
        </div>
    </div>


    <h1>TOTAL COST: <span id="total"></span></h1>

    <script>
            $(document).ready(function(){

                function calculateVal(){
                    

                    //elements
                    var color =  $('.color:checked').val();
                    var size =  $('.size:checked').val();


                    //int parsing
                    color = (color) ? parseInt(color) : null;
                    size = (size) ? parseInt(size) : null;
                        

                    //total
                     var total = color + size;
                    
                     $('#total').html(total);
            
                }   

                
                $(document).on('change','.color',function(){

                    calculateVal();
                   
                });

                $(document).on('change','.size',function(){
                
                
                    calculateVal();
                });


            });


      
    
    </script>  


</body>
</html>