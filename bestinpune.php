
<html >
	<head>
        	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Best Restaurants In India</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/animate.min.css">

		<link rel="stylesheet" href="css/main2.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="css/responsive2.css">
		<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
        <style>
  
    .outsidebox{
        position: relative;
        
        min-height: 110px;
        
        font-family: ;
        margin-top: 260px;
        
        
    }
            .bg{
                border-radius: 5px;
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: black;
                opacity: 0.5;
                 
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
            }
    .innerwrapper{
                font-family: myfont;

       
        padding-bottom: 10px;
     
    }
    select {
        
        padding:3px;
        height: 60px;
        float: left;
        background: url(http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png) no-repeat right ;
        
        -webkit-appearance: none;
        border-radius: 5px 0px 0px 5px;
        
        font-size: 16px;
        border: 0;
        background-color: white;
      /* background: url(http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png) no-repeat right #ddd; */
        background-color: white;
        -webkit-appearance: none;
  
}
    .locality{
        float: left;
        padding-left: 10px;
       
        margin: 0;
        
        height: 60px;
        font-size: 16px;
        border: 0;
        background-color: lightgrey; 
    }
    .btn{
        float: left;
       border: 0;
    padding: 10px;
        height: 60px;
    font-size: 16px;
  
    border-radius: 0px 5px 5px 0px;
   
   
        background-color: darkcyan; 
        color: black;
    }
            
   
           
        </style>
    </head>
    <body>

        <section id="hero-area">
             
        <div class="outsidebox col-xs-10 col-xs-offset-1">
            <div class="bg"></div>
    <div class="innerwrapper col-xs-12">
        <h4 style="color:white; text-align:center; font-family:Arial, Helvetica, sans-serif ;padding-top:10px; padding-bottom:10px; font-size:25px">Best Restaurants in Town</h4>
    
       <div class="row">
           <form  method="POST" action="api.php" >
   <select  class="col-xs-12 col-sm-3 conatiner-fluid" id="city" name="city">
                     <option value="">Choose City</option><span class="caret"></span> 
                     <option  value="Bangalore">Bangalore</option>
                     <option value="New Delhi">New delhi</option>
                     <option   value="Mumbai">Mumbai</option>
                     <option selected="selected" value="Pune">Pune</option>
                     <option value="Chennai">Chennai</option>
                     <option value="Hyderabad">Hyderabad</option>
                     <option value="Kolkata">Kolkata</option>
                     <option value="Visakhapatnam">Visakhapatnam</option>
                 </select>

              <input class="col-xs-12 col-sm-6  locality" type="search" placeholder="Type Your location (landmark,road,area)" autocomplete="off" name="locality">
                  
               
                  <input type="submit" name="submit" value="Search" class="col-sm-3 col-xs-12 btn">
              
     <select class=" col-xs-3" style="background-color:maroon; color:white; border-radius:20px padding:10px; margin-top:5px;" id="category" name="category">
                     <option >Category</option><span class="caret"></span>
                     <option value="3">Nightlife</option>
                     <option value="4">Catching-up</option>
                     <option value="5">Takeaway</option>
                     <option value="6">Cafes</option>
                     <option value="8">Breakfast</option>
                     <option value="9">Lunch</option>
                     <option value="10">Dinner</option>
         <option value="11">Pubs & Bars</option>
                       <option value="1">Home Delivery</option>   
         <option value="2">Dine-out</option> 
                 </select>
 
              
     <select class="col-xs-3" style="background-color:maroon; color:white; border-radius:0px 0px 0px 0px; padding:10px; margin-top:5px;" id="sort" name="sort">
                     <option  >Sort</option><span class="caret"></span>
                     <option value="cost">Cost</option>
                     <option value="rating" >Rating</option>
    </select>
 

     <select class="col-xs-3" style="background-color:maroon; color:white; border-radius:0px 0px 0px 0px; padding:10px; margin-top:5px;" id="order" name="order">
    <option>Order</option> <span class="caret"></span>
    <option value="desc">Descending</option>
    <option value="asc">Ascending</option>
        </select>


    <select class="col-xs-3" style="background-color:maroon; color:white; border-radius:0px 5px 5px 0px;; padding:10px; margin-top:5px;" id="cuisine" name="cuisine">
    <option>Cuisine</option><span class="caret"></span>
    <option value="6">Afghani</option>
        <option value="152">African</option>
        <option value="1">American</option>
        <option value="2">Andhra</option>
        <option value="3">Asian</option>
        <option value="165">Assamese</option>
        <option value="5">Bakery</option>
        <option value="270">Beverages</option>
        <option value="10">Bengali</option>
        <option value="7">Biryani</option>
        <option value="168">Burger</option>
        <option value="25">Chinese</option>
        <option value="35">Continental</option>
        <option value="100">Deserts</option>
        <option value="100">Multiple cuisines</option>
        <option value="268">Drinks only</option>
        <option value="38">European</option>
        <option value="40">Fast Food</option>
        <option value="45">French</option>
        <option value="48">Gujrati</option>
        <option value="49">Hyderabadi</option>
        <option value="233">Ice Cream parlour</option>
        <option value="148">Indian</option>
        <option value="55">Italian</option>
        <option value="60">Japnese</option>
        <option value="164">Juices</option>
        <option value="65">Kashmiri</option>
        <option value="66">Lebanese</option>
        <option value="157">Lucknowi</option>
        <option value="102">Maharashtrian</option>
        <option value="70">Mediterranean</option>
        <option value="73">Mexican</option>
        <option value="137">Middle Eastern</option>
        <option value="50">North Indian</option>
        <option value="139">Pakistani</option>
        <option value="290">Parsi</option>
        <option value="81">Persian</option>
        <option value="88">Rajasthani</option>
        <option value="83">Seafood</option>
        <option value="972">South American</option>
        <option value="85">South Indian</option>
        <option value="89">Spanish</option>
        <option value="90">Street Food</option>
        <option value="177">Sushi</option>
        <option value="95">Thai</option>
        <option value="93">Tibetan</option>
        <option value="308">Vegetarian</option>
        <option value="99">Vietnamese</option>
        </select> 
               </form>
           
                </div>
    
        </div>
    </div>
      
       
   </section>
        <?php     

        function lookup($string){
 
   $string = str_replace (" ", "+", urlencode($string));
   $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$string."&sensor=false";
 
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $details_url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $response = json_decode(curl_exec($ch), true);
 
   // If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
   if ($response['status'] != 'OK') {
    return null;
   }
 
   
            
   $geometry = $response['results'][0]['geometry'];
 
    $longitude = $geometry['location']['lng'];
    $latitude = $geometry['location']['lat'];
 
    $array = array(
        'latitude' => $geometry['location']['lat'],
        'longitude' => $geometry['location']['lng'],
        'location_type' => $geometry['location_type'],
    );
 
    return $array;
 
}
 
$city = empty($_POST['locality']) ? "Pune" :  $_POST['locality'].','.$_POST['city'];
 
$array = lookup($city);
// print $array['latitude']."<br>".$array['longitude']."<br>";
 
// echo $city."<br>";
// Get cURL resource
       
$category = !empty($_POST['category']) ? $_POST['category'] : 2;
        $sort = !empty($_POST['sort']) ? $_POST['sort'] : 'rating';
        $order = !empty($_POST['order']) ? $_POST['order'] : 'desc';
        $cuisine = !empty($_POST['cuisine']) ? $_POST['cuisine'] : '' ;
         $curl = curl_init();
// echo $category."<br>".$order."<br>".$cuisine."<br>".$sort;
// Curl options
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => ['Accept: application/json', 'user-key: 3b659dd898c0058acd1d609a02a02d3c'],
    CURLOPT_URL => 'https://developers.zomato.com/api/v2.1/search?entity_type=subzone&cuisines='.$cuisine.'&count=50&lat='.$array['latitude'].'&lon='.$array['longitude'].'&radius=4000&category='.$category.'&sort='.$sort.'&order='.$order,
));

// Send the request & save response to $resp
$resp = curl_exec($curl);

// Check for errors if curl_exec fails
if(!curl_exec($curl)){
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}

// Close request to clear up some resources
curl_close($curl);

// dumping $resp
// echo 'var_dump: <br>';
// var_dump($resp);


// Decode json
$jsonZomato = json_decode($resp, true);

// print readable results
/* print "<pre>";
    print_r($jsonZomato);
 for($t=0; $t<10; $t++)
        { print $jsonZomato['restaurants'][$t]['restaurant']['name']."<br>";
        }
print "</pre>";
*/
            ?>
  
        <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                         <h1 class="heading">Best <span>Dine-OUT</span> in your <span>locality</span>
                        </h1>
                        <ul>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="blog-img">
                                  <img src="images/blog/blog-img-1.jpg">
                                   
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][0]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][0]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][0]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][0]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][0]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][0]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-2.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][1]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][1]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][1]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][1]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][1]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][1]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="content-left">
                                    
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][2]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][2]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][2]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][2]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][2]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][2]['restaurant']['average_cost_for_two'] ?></span><br></p>
                              
                                </div>
                                <div class="blog-img-2">
                                    <img src="images/blog/blog-img-3.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="content-left">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][3]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][3]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][3]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][3]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][3]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][3]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                                <div class="blog-img-2">
                                    <img src="images/blog/blog-img-4.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-5.jpg" alt="blog-img">
                                </div>
                               <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][4]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][4]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][4]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][4]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][4]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][4]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-6.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][5]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][5]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][5]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][5]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][5]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][5]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                        </ul>
                                             <ul id="secondshift" class="collapse">
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="blog-img">
                                  <img src="images/blog/blog-img-1.jpg">
                                   
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][6]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][6]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][6]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][6]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][6]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][6]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-2.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][7]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][7]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][7]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][7]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][7]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][7]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="content-left">
                                    
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][8]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][8]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][8]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][8]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][8]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][8]['restaurant']['average_cost_for_two'] ?></span><br></p>
                              
                                </div>
                                <div class="blog-img-2">
                                    <img src="images/blog/blog-img-3.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="content-left">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][9]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][9]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][9]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][9]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][9]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][9]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                                <div class="blog-img-2">
                                    <img src="images/blog/blog-img-4.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-5.jpg" alt="blog-img">
                                </div>
                               <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][10]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][10]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][10]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][10]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][10]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][10]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-6.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][11]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][11]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][11]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][11]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][11]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][11]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                             
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="blog-img">
                                  <img src="images/blog/blog-img-1.jpg">
                                   
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][12]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][12]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][12]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][12]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][12]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][12]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-2.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][13]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][13]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][13]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][13]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][13]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][13]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="content-left">
                                    
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][14]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][14]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][14]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][14]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][14]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][14]['restaurant']['average_cost_for_two'] ?></span><br></p>
                              
                                </div>
                                <div class="blog-img-2">
                                    <img src="images/blog/blog-img-3.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="content-left">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][15]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][15]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][15]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][15]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][15]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][15]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                                <div class="blog-img-2">
                                    <img src="images/blog/blog-img-4.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-5.jpg" alt="blog-img">
                                </div>
                               <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][16]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][16]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][16]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][16]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][16]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][16]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="blog-img">
                                    <img src="images/blog/blog-img-6.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <span class="badge" style="background-color:darkcyan;"><?php echo $jsonZomato['restaurants'][11]['restaurant']['user_rating']['aggregate_rating'] ?></span>
                                    <h3> <?php echo $jsonZomato['restaurants'][17]['restaurant']['name'] ?></h3>
                                    <p><span style="color:green;">Add: </span> <?php echo $jsonZomato['restaurants'][17]['restaurant']['location']['address']?><br>
                                        <span style="color:lightblue;"> City: </span><?php echo $jsonZomato['restaurants'][17]['restaurant']['location']['city']  ?>
                                        <br>Cuisine: <span style="color:orange;"> <?php echo $jsonZomato['restaurants'][17]['restaurant']['cuisines']  ?></span><br>Price for two: <span class="label label-info"> <?php echo $jsonZomato['restaurants'][17]['restaurant']['average_cost_for_two'] ?></span><br></p>
                                </div>
                            </li>
                                                                   
                        </ul>
                        <a data-toggle="collapse" data-target="#secondshift" class="btn btn-default btn-more-info wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms"  role="button">More </a>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->
    </body>
</html>
