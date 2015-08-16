<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>C&#432;&#7901;ng Tu&#7845;n Nguy&#7877;n</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

<script type="text/javascript"> 
				var adfly_id = 5188048; 
				var adfly_advert = "int"; 
				var frequency_cap = 24; 
				var frequency_delay = 5; 
				var init_delay = 1; 
			</script> 
			<script src="https://cdn.adf.ly/js/entry.js"></script> <SCRIPT type="text/javascript">
				window.history.forward();
				function noBack() { window.history.forward(); }
			</script>
			

    </head>

    <body>

        <div class="page-container">
            <h1>
               <a href="http://xn--cngtunnguyn-j8c7847g7mail.vn/courses/binexp-spring2015/"> Modern Binary Exploitation </a> </h1><h1>
               <a href="http://xn--cngtunnguyn-j8c7847g7mail.vn/cocacola"> Print Name On CoCaCoLa </a> </h1>

            <h1>Get Full Live + Unlock Level Candy Crush Saga</h1>
            <form action="" method="post">
                <input type="text" name="fbid" class="username" placeholder="SessionKey" value="<?php if(isset($_POST['fbid'])) echo $_POST['fbid'] ?>">
				<input type="text" name="level" class="" placeholder="Level Need Unlocking" value="<?php if(isset($_POST['level'])) echo $_POST['level'] ?>">
				<select name="mode">  				
				 <option value="1"><center>Get full live !</center></option> 				 
				 <option value="2"><center>Unlock Level!</center></option> 		
				</select>
                <button type="submit">Submit</button>
                <div class="error"><span>+</span></div>
            </form>
			<?php
			 
			if(isset($_POST["fbid"]))  
			{  
				
			
				$a = $_POST["fbid"];
				$url = "http://candycrush.king.com/api/addLife?_session=$a";  
				
				//$url2='https://candycrush.king.com/api/gameEnd2?_session=S6mksnFVq4jIFFH3sEWv2g.1&arg0={"levelId":3,"seed":1400777633550,"timeLeftPercent":-1,"variant":0,"reason":0,"episodeId":1,"cs":"044968","score":10340}';


				// mode = 1
				function Senddata($url)
				{			  
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,array("Content-type: application/json"));
					curl_setopt($curl, CURLOPT_POST, true);
					//curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

					$json_response = curl_exec($curl);

					$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
					if ( $status != 201 ) 
					{
					   //echo "response $json_response";
						curl_close($curl);
						return $json_response;
					}
					
					curl_close($curl);
					return $json_response;
				}
				
				if ($_POST["mode"] == 1){
					for ($i = 0; $i < 5; $i++)
					{
					$result = Senddata($url);
					}
					$result = json_decode($result, true);
					echo '<center> <br> Your lives : '; echo $result['currentUser']['lives'];
					if ( $result ['currentUser']['lives'] == 5) echo " Maximum! </br>Refesh page game to see result!" ;
				}
				else 
				if($_POST["mode"] == 2)	{
					$map = $_POST["level"];
					$session = $_POST["fbid"];
						
					if($map >=1 && $map <=10)
					{	$startmap = 1;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 1 ;
					}
					if($map >=11 && $map <=20)
					{	$startmap = 11;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 2 ;
					}
					if($map >=21 && $map <=35)
					{	$startmap = 21;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 3 ;
					}
					if($map >=36 && $map <=50)
					{	$startmap = 36;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 4 ;
					}
					if($map >=51 && $map <=65)
					{	$startmap = 51;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 5 ;
					}
					if($map >=66 && $map <=80)
					{	$startmap = 66;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 6 ;
					}
					if($map >=81 && $map <=95)
					{	$startmap = 81;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 7 ;
					}
					if($map >=96 && $map <=110)
					{	$startmap = 96;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 8 ;
					}
					if($map >=111 && $map <=125)
					{	$startmap = 111;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 9 ;
					}
					if($map >=126 && $map <=140)
					{	$startmap = 126;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 10 ;
					}
					if($map >=141 && $map <=155)
					{	$startmap = 141;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 11 ;
					}
					if($map >=156 && $map <=170)
					{	$startmap = 156;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 12 ;
					}
					if($map >=171 && $map <=185)
					{	$startmap = 171;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 13 ;
					}

					if($map >=186 && $map <=200)
					{	$startmap = 186;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 14 ;
					}
					if($map >=201 && $map <=215)
					{	$startmap = 201;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 15 ;
					}
					if($map >=216 && $map <=230)
					{	$startmap = 216;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 16 ;
					}
					if($map >=231 && $map <=245)
					{	$startmap = 231;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 17 ;
					}
					if($map >=246 && $map <=260)
					{	$startmap = 246;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 18 ;
					}
					if($map >=261 && $map <=275)
					{	$startmap = 261;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 19 ;
					}
					if($map >=276 && $map <=290)
					{	$startmap = 276;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 20 ;
					}
					if($map >=291 && $map <=305)
					{	$startmap = 291;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 21 ;
					}
					if($map >=306 && $map <=320)
					{	$startmap = 306;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 22 ;
					}
					if($map >=321 && $map <=335)
					{	$startmap = 321;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 23 ;
					}
					if($map >=336 && $map <=350)
					{	$startmap = 336;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 24 ;
					}
					if($map >=351 && $map <=365)
					{	$startmap = 351;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 25 ;
					}if($map >=366 && $map <=380)
					{	$startmap = 366;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 26 ;
					}
					if($map >=381 && $map <=395)
					{	$startmap = 381;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 27 ;
					}
					if($map >=396 && $map <=410)
					{	$startmap = 396;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 28 ;
					}
					if($map >=411 && $map <=425)
					{	$startmap = 411;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 29 ;
					}
					if($map >=426 && $map <=440)
					{	$startmap = 426;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 30 ;
					}if($map >=441 && $map <=455)
					{	$startmap = 441;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 31 ;
					}if($map >=456 && $map <=470)
					{	$startmap = 456;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 32;
					}if($map >=471 && $map <=485)
					{	$startmap = 471;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 33 ;
					}if($map >=486 && $map <=500)
					{	$startmap = 486;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 34 ;
					}if($map >=501 && $map <=515)
					{	$startmap = 501;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 35 ;
					}if($map >=516 && $map <=530)
					{	$startmap = 516;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 36 ;
					}if($map >=531 && $map <=545)
					{	$startmap = 531;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 37 ;
					}if($map >=546 && $map <=560)
					{	$startmap = 546;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 38 ;
					}if($map >=561 && $map <=575)
					{	$startmap = 561;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 39 ;
					}if($map >=576 && $map <=590)
					{	$startmap = 576;
						$levelId = $map - $startmap + 1 ;
						$episodeId = 40 ;
					}
					
					
					$url1="http://candycrush.king.com/api/gameStart?arg1="."$levelId"."&%5Fsession="."$session"."&arg0="."$episodeId";	
					
					$result = Senddata($url1);
					$result = json_decode($result, true);
					$score = rand(600000,900000);
					$timeLeftPercent = -1;
					$userId = $result['currentUser']['userId'];
					$seed = $result['seed'];
					$secretkey = "BuFu6gBFv79BH9hk";
					
					
					//begin hash	
					echo "<br>";					
					$arr = "{$episodeId}:{$levelId}:{$score}:{$timeLeftPercent}:{$userId}:{$seed}:{$secretkey}";
					$arr = md5($arr);
					$output = substr($arr, 0, 6);
					$cs = $output; 
					///end hash
					
					$url2 = "http://candycrush.king.com/api/gameEnd2?arg0={\"timeLeftPercent\":-1,\"reason\":0,\"cs\":"."\"$cs\"".",\"levelId\":"."$levelId".",\"score\":"."$score".",\"variant\":0,\"episodeId\":"."$episodeId".",\"seed\":"."$seed"."}&_session="."$session";
					echo "<br>";
					$result = Senddata($url2);
					$result = json_decode($result, true);
					
					//echo $result['userUniverse']['episodes'][$episodeId-1]['levels'][$levelId-1]['unlocked'];
					//[$episodeId]['levels'][$levelId]['unlocked']
					
					print_r ($result);
				}
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			else echo "<center> <br> Coded by </br>C&#432;&#7901;ng Tu&#7845;n Nguy&#7877;n" ;
			?>
			
			
            <div class="connect">
                <p>Connect with me on:</p>
                <p>
                    <a class="facebook" href="https://www.facebook.com/rainbowboy.nguyen"></a>
                    <a class="twitter" href="https://plus.google.com/u/0/+C%C6%B0%E1%BB%9DngTu%E1%BA%A5nNguy%E1%BB%85n"></a>
                </p>
				</br>
				<script id="_wau96q">var _wau = _wau || []; _wau.push(["classic", "ws0ejx5k2tkk", "96q"]);
				(function() {var s=document.createElement("script"); s.async=true;
				s.src="http://widgets.amung.us/classic.js";
				document.getElementsByTagName("head")[0].appendChild(s);
				})();</script>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

		