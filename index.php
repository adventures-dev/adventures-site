<!DOCTYPE html>
<html>
  <head>
    <title>adventur.es</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"> -->
    <link href="css/style.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    
    <!-- Asynchronous Google Analytics: mathiasbynens.be/notes/async-analytics-snippet -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-2337332-55', 'adventur.es');
		ga('send', 'pageview');
	
	</script>
    

  </head>
<body>

<div id="navbar">
    <div class="navbar-inner mynav">
    <div class="container">
    	<div class="row-fluid ">
    		<div class="logo pull-left">
    		<a href="" >
    			adventur.es
    		</a>
    	</div>
    		<nav>
    		    			<!--<a href="/news">News</a>-->
    		    		<a  class="aboutbutton">About</a>

    		        			<a  class="portfoliobutton">Portfolio</a>
    			<a class="fortbutton">The Fort</a>
    			<a class="reachoutbutton">Reach Out</a>
    		</nav>
    	</div>
    </div>
    </div>
</div>
<div class="wrap">
<div class="main">

	<div class="top-bg" id="top">
		<div class="container">
			<div class="row-fluid">
				<div class="span12" id="slogan">
					<h2>Solve Problems.  Transform the World.</h2>
				</div>
			</div>
		</div>
	</div>

<div class="off-white-bg">
	<div class="container">
		<div class="row-fluid">
				<div class="span7">
					<h2  id="about">about</h2>
					<hr>
				</div>
			</div>
		<div class="row-fluid">

		<p>Adventur.es identifies problems to tackle and looks for those who share our passion to create change. Together we walk the path, giving individuals the autonomy to focus, experiment, and fail, ultimately leading to learning and long-term success.</p>

		</div>

	</div>
	
</div>


<script>

var animateBackground = function()
{


    $('#myfort').animate
    (
        {
	        'background-position-x': '100%',
	    }, 20000, 'linear', function() {
	    animateBackground2();
    	}
       
    )
};
var animateBackground2 = function()
{


    $('#myfort').animate
    (
        {
	        'background-position-x': '0%',
	    }, 20000, 'linear', function() {
	    animateBackground();
    	}
       
    )
};

$( // short-hand for "$(document).ready"
    function()
    {
        animateBackground(); // initial call that starts everything off
    }
);




</script>

<div class="white-bg">
	<div class="container">
		
		<div class="row-fluid">
		<div class="span7">
			<h2 id="portfolio">portfolio</h2>
			<hr>
		</div>
		</div>		<br>
		
		<div class="row-fluid logowrap">
			<div class="span1"></div>
			<div class="span2 logoswrapper"  style="margin-top:10px;">
				<div class="logos" id="logo6">
					<a href="http://www.agencypost.com" target="_blank"><img src="img/agencypost.png"></a>
				</div>

			</div>
		
		
			<div class="span2 logoswrapper"  style="margin-top:5px;">
				<div class="logos" id="logo1">
					<a href="http://www.theremarkabl.es" target="_blank"><img src="img/remarkables.png"></a>
				</div>

			</div>
				<div class="span2 logoswrapper" style="margin-top:7px;">
				<div class="logos" id="logo2">
					<a href="http://www.influenceandco.com" target="_blank"><img src="img/inc.png"></a>
				</div>

			</div>
				<div class="span2 logoswrapper" style="margin-top:10px;">
				<div class="logos" id="logo3">
				<a href="http://www.mediacross.com" target="_blank"><img src="img/mediacross.png"></a>
				</div>

			</div>
				<div class="span2 logoswrapper" >
				<div class="logos" id="logo4">
				<a href="http://www.chimaeric.com/" target="_blank"><img src="img/chimaeric.png"></a>
				</div>

			</div>
				
			<div class="span1"></div>

		</div>
			<div class="row-fluid logowrap">
				<div class="span4"></div>
				<div class="span2 logoswrapper"  style="margin-top:10px;">
					<div class="logos" id="logo5">
						<a href="http://www.stockcast.it" target="_blank"><img src="img/stockcastit.png"></a>
					</div>

					</div>

					<div class="span2 logoswrapper"  style="margin-top:10px;">
					<div class="logos" id="logo7">
						<a href="http://www.brookdaily.com" target="_blank"><img src="img/brook-logo.png"></a>
					</div>
					</div>
					<div class="span4"></div>
			</div>
			<br>
		<div class="row-fluid">
			<div class="span2"></div>
				<div class="span8">
					
					<div id="description">
					<h2>Agency Post</h2>
					<p>The Agency Post is an interactive publication for ad, PR and marketing professionals. All content is written by subject matter experts, consumable in under five minutes and customized to be applicable to your daily life in the marketing world.</p>
					</div>
				</div>
			<div class="span2"></div>
			
		</div>
				<div class="row-fluid center">
				</div>

		<script>
		

		
			$(".logos").mouseover(function(){
				switch($(this).attr('id')){
					case "logo1":
						$('#description').html("<h2>The Remarkables</h2><p>Enables communities to have life-changing moments by connecting them with remarkable people.</p>");
					break;
					
					case "logo2":
					$('#description').html("<h2>Influence and Co.</h2><p>Curates expert content for the nation's largest online publishers.</p>");
					break;
					case "logo3":
					$('#description').html("<h2>MediaCross</h2><p>Uses propriety methods to help the U.S. military, state governments, businesses and organizations advertise, market, and recruit.</p>");
					break;
					case "logo4":
					$('#description').html("<h2>Chimaeric</h2><p>Makes stories come to life by cultivating visually stunning and emotionally engaging works using the latest digital cinema technology.</p>");
					break;
					case "logo5":
					$('#description').html("<h2>Stockcast.it</h2><p>Uses machine learning and natural language processing technology to analyze Internet data, giving clear, concise, and actionable insights into what people feel about financial markets.</p>");
					break;
					
					case "logo6":
					$('#description').html("<h2>Agency Post</h2><p>The Agency Post is an interactive publication for ad, PR and marketing professionals. All content is written by subject matter experts, consumable in under five minutes and customized to be applicable to your daily life in the marketing world.</p>");
					break;
					
					case "logo7":
					$('#description').html("<h2>Brook</h2><p>Love Twitter? Hate the noise? Get a daily email digest of the five best tweets from the people you select.</p>");
					break;
				}
			});
		
		</script>

						
				
				</div>
		</div>

	</div>
</div>



<div id="myfort">
	<div class="container">
		<div id="thefort">
		<div class="row-fluid">
		<div class="span8 offset2 center">
			<h2 id="fort">the fort</h2>
			<hr class="myhr">
			<p>Most companies have offices.  We have <a href="http://museao.com">Museao</a>. It's 16,000 square feet of co-working space, complete with an indoor urban park, putting green, "beds and sheds," game room, and library. It frequently hosts scavenger hunts, dodgeball tournaments, and world-renowned speakers.</p>
			<a href="http://www.museao.com/"><img src="img/museaologo.png" alt="Museao logo" class="faded" /></a>
		</div>
		<div class="span2"></div>

		</div>
				<div class="row-fluid">
				</div>
		</div>
		</div>
	</div>
</div>

<div class="off-white-bg">
	<div class="container">
		
		<div class="row-fluid">
		<div class="span7">
			<h2 id="contact">reach out</h2>
			<hr>
		</div>
		</div><br>
						<div class="row-fluid">
							<div class="span6">
							
							<p>Read our <a class="aboutbutton">about</a> section. Does it seem like we're talking about you? If so, ping us, and let's talk. Or if you have questions, comments, or opportunities, let us know.</p>

								
							</div>
							<div class="span5">
				  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
				  <form action="" method="post" id="contact-form" novalidate="novalidate" >
                    <div id="form-content">
                        <fieldset>
                            <div class="fieldgroup" id="error"></div>
                      
                              <div class="fieldgroup">
                                <input id="name" type="text" name="name" class="input-block-level" placeholder="name">
                            </div>
                              
                                  <div class="fieldgroup">
                                <input id="email" type="text" name="email" class="input-block-level" placeholder="email">
                            </div>
                            <div class="fieldgroup">
                                <input id="phone" type="text" name="phone" class="input-block-level" placeholder="phone">
                            </div>
                            
                       
                                <div class="fieldgroup">
                                <textarea class="input-block-level" id="message" name="message" placeholder="message"></textarea>
                            </div>
                            
                            <div class="fieldgroup">
                                <!--<label>By clicking register you agree to our <a target="_blank" href="/policy">policy</a>.</label>-->
                                <input type="submit" value="send" class="submit btn">
                            </div>
                        </fieldset>
                    </div>
                    
				  </form>
							</div>


						</div>
				  	<div class="span1"></div>
	</div> 
	</div>
</div>


 




	</div>
</div>

 <footer style="display:none;">
  <div class="container ">
    	<div class="row-fluid ">
    		<!--
    		<a href="" class="logo pull-left" style="color:grey;opacity:0.5;">
    			adventur.es
    		</a>-->
    		
    		<nav class="pull-right">
      			<a href="/news" style="border-style:none;">News</a>


    			<a  class="portfoliobutton" style="border-style:none;">Portfolio</a>
    			<a class="fortbutton" style="border-style:none;">The Fort</a>
    			<a  class="reachoutbutton" style="border-style:none;">Reach Out</a>
    		</nav>
    	</div>
    </div>

 
 </footer>
 <script type="text/javascript">
                /**
                 * Basic jQuery Validation Form Demo Code
                 * Copyright Sam Deering 2012
                 * Licence: http://www.jquery4u.com/license/
                 */
                 (function ($, W, D) {
                    var JQUERY4U = {};

                    JQUERY4U.UTIL = {
                        setupFormValidation: function () {
                            //form validation rules
                            $("#contact-form").validate({
                                rules: {
                                    name:  "required",
                                    phone: {
                                        required: true,
                                    },
                                    email: {
                                        required: true,
                                        email: true
                                    },
                                    message:  "required"

         
                                },
                                messages: {
                                   /* username: "<font style='color:red;'>Please enter a username</font>",*/
                                   name: "<font style='color:red;'>Please enter your name</font>",

                                    phone: "<font style='color:red;'>Please enter your phone number</font>",
   
                                    email: "<font style='color:red;'>Please enter a valid email address</font>",
                                    message: "<font style='color:red;'>Please enter a message</font>",

                                },
                                submitHandler: function (form) {

                                    ///ajax here::::

                                    var email = document.getElementById('email').value;
                                    var name = document.getElementById('name').value;
                                    var phone = document.getElementById('phone').value;
                                     var message = document.getElementById('message').value;

                                    var data = {
                                        email: email,
                                        name: name,
                                        phone: phone,
                                        message: message

                                    };
                                    
                                    $.ajax({
                                        type: "POST",
                                        url: "contact.php",
                                        data: data,
                                        success: function (res) {

                                            if (res == true) {
                                            
                                            	$("#form-content").html("<p>Thanks!  We will get back to you shortly!</p>");

                                            } else {
                                                console.log(res);
                                                $("#error").append('<font style="color:red;">' + res + '</font>');
                                            }

                                        }
                                    });
                                   
                                }
                            });
                        }
                    }

                    //when the dom has loaded setup form validation rules
                    $(D).ready(function ($) {
                        JQUERY4U.UTIL.setupFormValidation();
                    });

                })(jQuery, window, document);

                $('#register-form').submit(function (event) {
                    event.preventDefault();

                    return false;
                })
                
                
                    $(".aboutbutton").click(function () {

                        $('html, body').animate({
                            scrollTop: $("#about").offset().top-100
                        }, 1500);
                    });
                    $(".teambutton").click(function () {

                        $('html, body').animate({
                            scrollTop: $("#team").offset().top-100
                        }, 1500);
                    });
                   $(".portfoliobutton").click(function () {

                        $('html, body').animate({
                            scrollTop: $("#portfolio").offset().top-100
                        }, 1500);
                    });
                    $(".fortbutton").click(function () {

                        $('html, body').animate({
                            scrollTop: $("#fort").offset().top-100
                        }, 1500);
                    });
                       $(".reachoutbutton").click(function () {

                        $('html, body').animate({
                            scrollTop: $("#contact").offset().top-100
                        }, 1500);
                    });
                
            </script>

</body>
</html>