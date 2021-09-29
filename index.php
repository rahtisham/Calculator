<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap.css.map" >
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <!-- <script src="js/bootstrap.min.js" ></script> -->
    <!-- <script src="js/bootstrap.js" ></script> -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script> -->
<!------ Include the above in your HEAD tag ---------->
</head>
<style>
    button.tablink.btn_c.bold_hidden.btn.btn-danger {
    width: 49% !important;
}

</style>
<script>
    function myFunctionshow()
    {
        var shows = document.getElementById('myDiv');
           shows.style.display = "block";
          
    }
    
    function myFunction()
    {
       var hides = document.getElementById('myDiv');
       if(hides)
       {
           hides.style.display = "none";
          // Check
          $("#unCheckbox").attr("checked", true);
           
       }
    }

    $(document).ready(function(){
         
        $(document).on('click' , '#addToCart' , function(){
            
            var quantity = $('.quantity-field').val();
            var cost = $('.totalCost').val();

            var sumVal = quantity * cost;
            alert(sumVal);
            
        });
       
        function calculatorValue()
        {
            
            // #element
            var group = $('.group:checked').val();
            var background = $('.background:checked').val();
            var head = $('.head:checked').val();
            var turn = $('.turn:checked').val();
            var product = $('.product:checked').val();
            var standard = $('.standard:checked').val();
            var advance = $('.advance:checked').val();
            var ghost = $('.ghost:checked').val();
            var pick = $('.pick:checked').val();
            var arount = $('.arount:checked').val();
            var files = $('.files:checked').val();
            var fileType = $('.fileType:checked').val();

            console.log(background);

            // Parse element
             group = (group) ? parseInt(group) : null;
             background = (background) ? parseInt(background) : null;
             head = (head) ? parseInt(head) : null;
             turn = (turn) ? parseInt(turn) : null;
             product = (product) ? parseInt(product) : null;
             standard = (standard) ? parseInt(standard) : null;
             advance = (advance) ? parseInt(advance) : null;
             ghost = (ghost) ? parseInt(ghost) : null;
             pick = (pick) ? parseInt(pick) : null;
             arount = (arount) ? parseInt(arount) : null;
             files = (files) ? parseInt(files) : null;
             fileType = (fileType) ? parseInt(fileType) : null;
             

            // sum element value
            var total = group + background + head + turn + product + standard + advance + ghost + pick + arount + files + fileType;

            
            // send total value to html using this code 
            $('#total').html(total);
            document.getElementById("quantity").value = total;
            
        }
        // End function


        $(document).on('change','.group',function(){

            calculatorValue();

        });
        // this is first event Group

        $(document).on('change','.background',function(){

            calculatorValue();

        });
        // this is Second event backgound

        $(document).on('change','.head',function(){

            calculatorValue();

        });
        // this is Second event backgound
        
        $(document).on('change','.turn',function(){

        calculatorValue();

        });
        // this is Second event backgound

        
        $(document).on('change','.product',function(){

        calculatorValue();

        });
        // this is Second event backgound


        $(document).on('change','.standard',function(){

        calculatorValue();

        });
        // this is Second event backgound


        $(document).on('change','.advance',function(){

        calculatorValue();

        });
        // this is Second event backgound
        
        $(document).on('change','.ghost',function(){

        calculatorValue();

        });
        // this is Second event backgound


        $(document).on('change','.pick',function(){

        calculatorValue();

        });
        // this is Second event backgound


        $(document).on('change','.arount',function(){

        calculatorValue();

        });
        // this is Second event backgound


        $(document).on('change','.files',function(){

        calculatorValue();

        });
        // this is Second event backgound


        $(document).on('change','.fileType',function(){

        calculatorValue();

        });
        // this is Second event backgound

    });
    // complete function to add value
</script>
<body><br><br>

    <div class="container">
      <div class="row">
          <div class="col-sm-3"><h1 id="result"></h1></div><!--end col-3-->
          
            <div class="col-sm-6">
                <button class="tablink btn_c bold_hidden btn btn-danger" onclick="openPage('Home', this)" >Standard Product</button>
                <button class="tablink btn_c bold_hidden btn btn-danger" onclick="openPage('News', this)">Clothing +$10</button>
                

                <div id="Home" class="tabcontent">
                            
                        <div class="HeddingStyle Spacings">
                            <h4 class="HeadFont">What's Your Product?</h4>
                        </div>
                        <div><!--Start of selcet DIV-->
                            <select name="properties[What's Your Product?]" class="selectSpacing">
                                <option value="">What's Your Product?</option>
                                <option value="Misc" data-option_value_key="0">Misc</option>
                                <option value="Watches +$20" data-option_value_key="1">Watches +$20 </option>
                                <option value="Jewelry +$10" data-option_value_key="2">Jewelry +$10 </option>
                                <option value="Appliances" data-option_value_key="3">Appliances</option>
                                <option value="Arts Crafts &amp; Sewing" data-option_value_key="4">Arts Crafts &amp; Sewing</option>
                                <option value="Automotive" data-option_value_key="5">Automotive</option>
                                <option value="Baby Products" data-option_value_key="6">Baby Products</option>
                                <option value="Beauty" data-option_value_key="7">Beauty</option>
                                <option value="Books" data-option_value_key="8">Books</option>
                                <option value="Camera &amp; Photo" data-option_value_key="9">Camera &amp; Photo</option>
                                <option value="Cell Phone &amp; Accessories" data-option_value_key="10">Cell Phone &amp; Accessories</option>
                                <option value="Computer &amp; Video Games" data-option_value_key="11">Computer &amp; Video Games</option>
                                <option value="Electronics" data-option_value_key="12">Electronics</option>
                                <option value="Health &amp; Personal Care" data-option_value_key="13">Health &amp; Personal Care</option>
                                <option value="Industrial &amp; Scientific" data-option_value_key="14">Industrial &amp; Scientific</option>
                                <option value="Musical Instruments" data-option_value_key="15">Musical Instruments</option>
                                <option value="Office Products" data-option_value_key="16">Office Products</option>
                                <option value="Patio" data-option_value_key="17">Patio</option>
                                <option value="Lawn &amp; Garden" data-option_value_key="18">Lawn &amp; Garden</option>
                                <option value="Pet Supplies" data-option_value_key="19">Pet Supplies</option>
                                <option value="Shoes" data-option_value_key="20">Shoes</option>
                                <option value="Sporting Goods" data-option_value_key="21">Sporting Goods</option>
                                <option value="Toys &amp; Games" data-option_value_key="22">Toys &amp; Games</option>
                                <option value="Kitchen" data-option_value_key="23">Kitchen</option>
                                <option value="Food" data-option_value_key="24">Food</option>
                                <option value="Bags" data-option_value_key="25">Bags</option>
                                <option value="Home &amp; Decor" data-option_value_key="26">Home &amp; Decor</option>
                                <option value="Seasonal" data-option_value_key="27">Seasonal</option>
                                <option value="Educational" data-option_value_key="28">Educational</option>
                                <option value="Fitness" data-option_value_key="29">Fitness</option>
                            </select>
                        </div><!--end of select DIV-->
                        <hr>
                        <p class="FontParagraph">This is optional to help us learn more about your order.</p>

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Group Photos: # Of Items In The Photo*</h4>
                        </div>
                        <!-- <h1>Total Cost : <span id="total"></span></h1> -->
                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">
                
                                <span class="bold_option_element" style="margin-top: 20px; line-height: 12px; font-weight: 400;">
                                        <span class="bold_option_value ">
                                            <label class="Spacing">
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108292_237595 group" name="group[]" value="1"></span>
                                                    <span class="bold_option_value_title">1 individual item in the photo</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108292_237595 group" name="group[]" value="2"></span>
                                                    <span class="bold_option_value_title">2 items in a group photo</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108292_237595 group" name="group[]" value="3"></span>
                                                    <span class="bold_option_value_title">3 - 5 items in a group photo</span>
                                                    <span class="ProductPricing">$10.00</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108292_237595 group" name="group[]" value="4"></span>
                                                    <span class="bold_option_value_title">6 - 10 items in a group photo</span>
                                                    <span class="ProductPricing">$20.00</span>
                                            </label>
                                        </span>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108292_237595 group" name="group[]" value="5"></span>
                                                    <span class="bold_option_value_title">11+ items in a group photo (Call First)</span>
                                                    <span class="ProductPricing">$30.00</span>
                                            </label>
                                        </span>
                                </span>
                            </div>
                            <hr>
                            <p class="FontParagraph spcDest">Count the number of items in your photo.  If some photos are groups &amp; some are not, add different versions to the cart separately. <a id="groups-popup" href="#" onclick="return false;">Learn More</a></p>
                        </div><!--end of radio lable button--> 

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Background*</h4>
                        </div>
                        
                        <div><!--start radio label button-->
                        <div class="bold_option bold_option_radio">
                        
                                <span class="bold_option_element" style="margin-top: 20px; line-height: 12px; font-weight: 400;"> 
                                        <span class="bold_option_value ">
                                            <label class="Spacing">
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108289_237595 background" name="background[]" value="6" data-option_value_key="0"></span>	
                                                    <span class="bold_option_value_title">Flat White Background</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108289_237595 background" name="background[]" value="7" data-option_value_key="1"></span>
                                                    <span class="bold_option_value_title">Glossy White Background</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108289_237595 background" name="background[]" value="8" data-option_value_key="2"></span>
                                                    <span class="bold_option_value_title">Hard Light Shadow - New</span>
                                            </label>
                                        </span>
                                </span>
                    
                            </div>
                            <hr>
                            <p class="FontParagraph spcDest">Which background would you like your product shot on? <a id="groups-popup" href="#" onclick="return false;">What's the difference?</a></p>
                        </div><!--end of radio lable button--> 

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Hand Phone*</h4>
                        </div>

                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">
                    
                                <span class="bold_option_element" style="margin-top: 20px; line-height: 12px; font-weight: 400;">
                                    <span class="bold_option_value ">
                                        <label class="Spacing">
                                                <span class="bold_option_value_element"><input type="radio" class="rb_335719_237595 head" name="head[]" value="9" data-option_value_key="0"></span>					
                                                <span class="bold_option_value_title">None</span>
                                        </label>
                                    </span><br>
                                    <span class="bold_option_value ">
                                        <label>
                                                <span class="bold_option_value_element"><input type="radio" class="rb_335719_237595 head" name="head[]" value="10" data-option_value_key="1"></span>	
                                                <span class="bold_option_value_title">Yes.  I need a hand in the photo.</span>
                                                <span class="bold_option_value_price">$10.00</span>
                                        </label>
                                    </span>
                                </span>
                                
                            </div>
                            <hr>
                            <p class="FontParagraph spcDest">Would you like a hand holding something in the photo? Please note that these our 'normal people photographer' hands, not professional model hands. <a id="groups-popup" href="#" onclick="return false;">Learn More</a></p>
                        </div><!--end of radio lable button--> 

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Turn-Around Time*</h4>
                        </div>

                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">

                                <span class="bold_option_element" style="margin-top: 20px; line-height: 12px; font-weight: 400;">
                                        <span class="bold_option_value ">
                                            <label class="Spacing">
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108291_237595 turn" name="turn[]" value="11" data-option_value_key="0"></span>
                                                
                                                    <span class="bold_option_value_title">Standard - 7 Business Days</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108291_237595 turn" name="turn[]" value="12" data-option_value_key="1"></span>
                                                
                                                    <span class="bold_option_value_title">+$20 Rush ( 3 Business Days Or Less )</span>

                                                    <span class="bold_option_value_price">$20.00</span>
                                            </label>
                                        </span>
                                </span>

                            </div>
                            <hr>
                            <p class="FontParagraph spcDest">Turn around times are guaranteed & begin when the product is checked in at the studio as arrived. <a id="groups-popup" href="#" onclick="return false;">Learn More</a></p>
                        </div><!--end of radio lable button--> 

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Product Size*</h4>
                        </div>

                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">
                                
                                <span class="bold_option_element">
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_329502_237595 product" name="product[]" value="13" data-option_value_key="0"></span>
                                                
                                                    <span class="bold_option_value_title">Standard | Smaller than 2 feet on it's longest side</span>

                                            </label>
                                            
                                            
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_329502_237595 product" name="product[]" value="14" data-option_value_key="1"></span>
                                                
                                                    <span class="bold_option_value_title">+$20 Oversized | 2-4 feet on it's longest side</span>

                                                    <span class="bold_option_value_price">$20.00</span>
                                            </label>
                                            
                                            
                                        </span>
                                </span>
                                
                            </div>
                            <hr>
                            <p class="FontParagraph spcDest">If your product is larger than 2 feet on any side, it may require a special set. Request approval before proceeding. <a id="groups-popup" href="#" onclick="return false;">Learn More & Request Approval</a></p>
                        </div><!--end of radio lable button--> 

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Standard File Type*</h4>
                        </div>

                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">
            
                                <span class="bold_option_element" style="margin-top: 20px; line-height: 12px; font-weight: 400;">
                                        <span class="bold_option_value ">
                                            <label class="Spacing">
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108300_237595 standard" name="standard[]" value="15" data-option_value_key="0"></span>
                                                
                                                    <span class="bold_option_value_title">High Resolution Tif File </span>
                                            </label>
                                            
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108300_237595 standard" name="standard[]" value="16" data-option_value_key="1"></span>
                                                
                                                    <span class="bold_option_value_title">Amazon Ready Jpeg</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108300_237595 standard" name="standard[]" value="17" data-option_value_key="2"></span>
                                                
                                                    <span class="bold_option_value_title">Both Tif &amp; Jpeg</span>

                                                    <span class="bold_option_value_price">$5.00</span>
                                            </label>
                                        </span>
                                </span>
                            </div>      
                            <hr>
                            <p class="FontParagraph spcDest">We can deliver your photos as High Resolution Tifs or Amazon Ready Jpegs.<a id="groups-popup" href="#" onclick="return false;">Learn More</a></p>
                        </div><!--end of radio lable button--> 

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Advanced File-Types*</h4>
                        </div>

                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">
                                    <span class="bold_option_element">
                                            <span class="bold_option_value ">
                                                <label>
                                                        <span class="bold_option_value_element"><input type="radio" class="rb_108301_237595 advance" name="advance[]" value="19" data-option_value_key="0"></span>
                                                    
                                                        <span class="bold_option_value_title">None</span>

                                                </label>
                                                
                                                
                                            </span><br>
                                            <span class="bold_option_value ">
                                                <label>
                                                        <span class="bold_option_value_element"><input type="radio" class="rb_108301_237595 advance" name="advance[]" value="20" data-option_value_key="1"></span>
                                                    
                                                        <span class="bold_option_value_title">Layered High Res Tif + Clipping Paths</span>

                                                        <span class="bold_option_value_price">$5.00</span>
                                                </label>
                                                
                                                
                                            </span><br>
                                            <span class="bold_option_value ">
                                                <label>
                                                        <span class="bold_option_value_element"><input type="radio" class="rb_108301_237595 advance" name="advance[]" value="21" data-option_value_key="2"></span>
                                                    
                                                        <span class="bold_option_value_title">Transparent PNG (Flat White Only)</span>

                                                        <span class="bold_option_value_price">$5.00</span>
                                                </label>
                                                
                                                
                                            </span><br>
                                            <span class="bold_option_value ">
                                                <label>
                                                        <span class="bold_option_value_element"><input type="radio" class="rb_108301_237595 advance" name="advance[]" value="22" data-option_value_key="3"></span>
                                                    
                                                        <span class="bold_option_value_title">Both Layered Tif &amp; Web-Ready PNG</span>

                                                        <span class="bold_option_value_price">$10.00</span>
                                                </label>
                                                
                                                
                                            </span>
                                    </span>
                                    
                                  </div>
                        
                            <hr>
                            <p class="FontParagraph spcDest">We can remove the background for you and deliver it as a design ready tif with layers and clipping path or a web-ready png. <a id="groups-popup" href="#" onclick="return false;">Learn More</a></p>
                        </div><!--end of radio lable button--> 

                      
                </div><!--end of first TABS--->








                <div id="News" class="tabcontent">

                    <div class="HeddingStyle Spacings">
                        <h4 class="HeadFont">Ghost Mannequin Or Layflat*</h4>
                    </div>
                    
                    <div class="bold_option bold_option_swatch" style="margin-top: 22px;">
                        <span class="bold_option_element">
                                <span class="bold_option_value ">
                                    <label>
                                        <span class="bold_option_value_element bold_swatch_selected"> <span class="bold_option_value_swatch"><img style="width: 50%;" src="images/firstImage.jpeg"> <span style="background-image: url(&quot;images/firstImage.jpeg&quot;); "></span></span><input type="radio" onclick="myFunctionshow()" hidden="" class="sw_496717_237595 ghost" name="ghost[]" value="23" data-option_value_key="0"></span>
                                        <span class="bold_option_swatch_title">
                                            <span class="bold_option_value_title"><b>Invisible/Ghost Mannequin</b></span>
                                        </span>
                                    </label>
                                </span>
                                <span class="bold_option_value ">
                                    <label>
                                        <span class="bold_option_value_element"><span class="bold_option_value_swatch"> <img style="width: 50%;" src="images/secondImage.jpeg">  <span style="background-image: url('./images/secondImage.jpeg');"></span></span><input type="radio" hidden="" onclick="myFunction()" class="sw_496717_237595 ghost" name="ghost[]" value="24" data-option_value_key="1"><input type="hidden" class="sw_496717_237595_helper" name="properties[Ghost Mannequin Or Layflat]" value="Invisible/Ghost Mannequin"></span>
                                        <span class="bold_option_swatch_title">
                                            <span class="bold_option_value_title"><b>Layflat Overhead</b></span>
                                        </span>
                                    </label>
                                </span>
                        </span>
                    </div>

                    <!-- End of radio button -->

                    <div class="HeddingStyle Spacings">
                        <h4 class="HeadFont">Pick Your Clothing Photography Angle*</h4>
                    </div>

                    <div class="bold_option bold_option_radio">
                            <span class="bold_option_element" style="margin-top: 40px; line-height: 12px; font-weight: 400;">

                                    <span class="bold_option_value ">
                                        <label>
                                                <span class="bold_option_value_element"><input type="radio" class="rb_503805_237595 pick" id="unCheckbox" name="pick[]" value="25" data-option_value_key="0"></span>                           
                                                <span class="bold_option_value_title">Garment Front</span>
                                        </label>
                                    </span><br>
                                    <span class="bold_option_value ">
                                        <label>
                                                <span class="bold_option_value_element"><input type="radio" class="rb_503805_237595 pick" name="pick[]" value="26" data-option_value_key="1"></span>
                                                <span class="bold_option_value_title">Garment Back</span>
                                        </label>    
                                    </span><br>
                                    <span class="bold_option_value" id="myDiv">
                                        <label>
                                                <span class="bold_option_value_element"><input type="radio" class="rb_503805_237595 pick" name="pick[]" value="27" data-option_value_key="2"></span>  
                                                <span class="bold_option_value_title">Garment Side</span>
                                        </label>
                                    </span>
                            </span>
                    </div>
                    <hr>
                    <p class="FontParagraph spcDest">Pick what angles you'd like and add it to cart one at a time.</p>

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Turn-Around Time*</h4>
                        </div>

                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">

                                <span class="bold_option_element" style="margin-top: 20px; line-height: 12px; font-weight: 400;">
                                        <span class="bold_option_value ">
                                            <label class="Spacing">
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108291_237595 arount" name="arount[]" value="28" data-option_value_key="0"></span>
                                                
                                                    <span class="bold_option_value_title">Standard - 7 Business Days</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108291_237595 arount" name="arount[]" value="29" data-option_value_key="1"></span>
                                                
                                                    <span class="bold_option_value_title">+$20 Rush ( 3 Business Days Or Less )</span>

                                                    <span class="bold_option_value_price">$20.00</span>
                                            </label>
                                        </span>
                                </span>

                            </div>
                            <hr>
                            <p class="FontParagraph spcDest">Turn around times are guaranteed & begin when the product is checked in at the studio as arrived. <a id="groups-popup" href="#" onclick="return false;">Learn More</a></p>
                        </div><!--end of radio lable button--> 

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Standard File Type*</h4>
                        </div>

                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">
            
                                <span class="bold_option_element" style="margin-top: 20px; line-height: 12px; font-weight: 400;">
                                        <span class="bold_option_value ">
                                            <label class="Spacing">
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108300_237595 files" name="files[]" value="30" data-option_value_key="0"></span>
                                                
                                                    <span class="bold_option_value_title">High Resolution Tif File </span>
                                            </label>
                                            
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108300_237595 files" name="files[]" value="31" data-option_value_key="1"></span>
                                                
                                                    <span class="bold_option_value_title">Amazon Ready Jpeg</span>
                                            </label>
                                        </span><br>
                                        <span class="bold_option_value ">
                                            <label>
                                                    <span class="bold_option_value_element"><input type="radio" class="rb_108300_237595 files" name="files[]" value="32" data-option_value_key="2"></span>
                                                
                                                    <span class="bold_option_value_title">Both Tif &amp; Jpeg</span>

                                                    <span class="bold_option_value_price">$5.00</span>
                                            </label>
                                        </span>
                                </span>
                            </div>      
                            <hr>
                            <p class="FontParagraph spcDest">We can deliver your photos as High Resolution Tifs or Amazon Ready Jpegs.<a id="groups-popup" href="#" onclick="return false;">Learn More</a></p>
                        </div><!--end of radio lable button--> 

                        <div class="HeddingStyle">
                            <h4 class="HeadFont">Advanced File-Types*</h4>
                        </div>

                        <div><!--start radio label button-->
                            <div class="bold_option bold_option_radio">
                                <span class="bold_option_element" style="margin-top: 12px; line-height: 12px; font-weight: 400;">
                                    <div class="Spacing bold_option_value" style="margin-top: 5px; line-height: 12px; font-weight: 400;">
                                        <label class="Spacing">
                                            <span class="bold_option_value_element">
                                                <input type="radio" class="rb_108292_237595 fileType" name="fileType[]" value="33" data-option_value_key="0">
                                            </span>
                                            <span>None</span>
                                        </label><br>
                                    </div>

                                    <div class="bold_option_value">
                                        <label>
                                            <span class="bold_option_value_element">
                                                <input type="radio" class="rb_108292_237595 fileType" name="fileType[]" value="34" data-option_value_key="1">
                                            </span>                       
                                            <span>Layered High Res Tif + Clipping Paths</span>
                                            <span class="ProductPricing">$5.00</span>
                                        </label><br>
                                    </div>

                                    <div class="bold_option_value">
                                        <label>
                                            <span class="bold_option_value_element">
                                                <input type="radio" class="rb_108292_237595 fileType" name="fileType[]" value="35" data-option_value_key="1">
                                            </span>                       
                                            <span>Transparent PNG (Flat White Only)</span>
                                            <span class="ProductPricing">$5.00</span>
                                        </label><br>
                                    </div>

                                    <div class="bold_option_value">
                                        <label>
                                            <span class="bold_option_value_element">
                                                <input type="radio" class="rb_108292_237595 fileType" name="fileType[]" value="36" data-option_value_key="1">
                                            </span>                       
                                            <span>Both Layered Tif & Web-Ready PNG</span>
                                            <span class="ProductPricing">$10.00</span>
                                        </label>
                                    </div>
                                </span>
                            </div>
                            <hr>
                            <p class="FontParagraph spcDest">We can remove the background for you and deliver it as a design ready tif with layers and clipping path or a web-ready png. <a id="groups-popup" href="#" onclick="return false;">Learn More</a></p>
                        </div><!--end of radio lable button--> 


                </div><!--end of Second TABS--->



                <!--start Plus and minus bottom-->
                <div class="counterSpc">
                    <div class="input-group ">
                        <div class="TxtCenter CountCounter">
                            <input type="button" value="-" class="button-minus" data-field="quantity">
                            <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                            <input type="button" value="+" class="button-plus" data-field="quantity">
                            <input type="hidden" id="quantity" class="totalCost">
                            <h3>$<span id="total"></span></h3>
                        </div>
                        <input type="submit" name="add" class="btn_c bold_hidden btn btn-danger" id="addToCart" value="Add to Cart" data-event-queue-button="0" >
                        
                    </div><!--end of input-group -->
                </div><!--end of counterSpc-->    
                <!--End Plus and minus bottom-->
            </div><!--end col-6-->
            
          <div class="col-sm-3"></div><!--end col-3-->
      </div><!--end of row-->
    </div><!--end of container-->

</body>
</html>


<script>

  function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('.input-group').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
  decrementValue(e);
});
</script>
<!-- // end of deduction calculator -->

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();
</script>
<!-- End of tabs -->