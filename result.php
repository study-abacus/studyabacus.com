<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <title>Study Abacus | Learn Vedic Maths | Teacher Training | Start-Up</title>
	<?php 
        include_once('include_upper.html');
    ?>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            // Set the date we're counting down to
            var countDownDate = new Date("Feb 12, 2019 18:30:00").getTime();
            // Update the count down every 1 second
            var x = setInterval(function() {
                // Get todays date and time
                var now = new Date().getTime();   
                // Find the distance between now and the count down date
                var distance = countDownDate - now; 
                // Time calculations for days, hours, minutes and seconds
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                // Output the result in an element with id="demo"
                var timer_string = "<h3>" + hours + "h "
                + minutes + "m " + seconds + "s </h3>";
                var timer = $("#timer")
                var form = $("#result-form")

                timer.html(timer_string)
                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    timer.html(`
                    <form action="" class="result-form" method="POST">
                        <input type="number" name="roll_number" placeholder="Roll Number" style="background: white" />
                        <button type="submit">Submit</button>
                    </form>
                    `)
                }
            }, 500);
        })
    </script>
</head>


<body class="page page-id-857 page-template-default themerex_body body_style_boxed body_filled theme_skin_education article_style_stretch layout_single-standard template_single-standard top_panel_style_light top_panel_opacity_solid top_panel_show top_panel_above menu_right user_menu_show sidebar_hide bg_image_2 wpb-js-composer js-comp-ver-4.6.1 vc_responsive">
	
	
	
	<div class="body_wrap">

		
		<div class="page_wrap">

						
			<div class="top_panel_fixed_wrap"></div>

			<?php
                include_once("header.html");
                ?>
                 <style>
				.page_top_wrap{
					background-color:#018763 !important;
						
				}
				
				</style>
            	<div class="page_top_wrap page_top_title page_top_breadcrumbs">
               
					<div class="content_wrap">
						<div class="breadcrumbs">
								<a class="breadcrumbs_item home" href="index.php">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Result</span>							
                        </div>
<h1 class="page_title" style="color:#fff">Result</h1>
											</div>
				</div>
			
			<div class="page_content_wrap">

				
<div class="content">
<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-756 page type-page status-publish hentry">
<section class="post_content" itemprop="articleBody"><div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div>
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="wpb_wrapper">
<div class="sc_section accent_top bg_tint_light" data-animation="animated fadeInUp normal" style="background-color:#f4f7f9;"><div class="sc_section_overlay" style="">
<div class="sc_section_content">
<div class="sc_content content_wrap" style="margin-top:2.5em !important;margin-bottom:2.5em !important;">

<h2 class="sc_title sc_title_regular sc_align_center" style="margin-top:0px;margin-bottom:0.85em;text-align:center;">
    Olympiad Result
</h2>
<div class="columns_wrap sc_columns columns_nofluid"><div class="sc_column_item sc_column_item_1"><div class="sc_section" style="font-size:1.25em; line-height: 1.3em; margin-right:5%">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
            <center>
                <!-- <form action="">
                    <input type="text" style="background: white;" placeholder="Your Roll Number">
                    <button>Submit</button>
                </form> -->
                <?php if ($_SERVER["REQUEST_METHOD"] == "GET"){ ?>
                    <div id="timer"></div>
                <?php 
                    } else {
                        $url = "http://championship.studyabacus.in/api/result.php";
                        $curl = curl_init();
                        curl_setopt($curl, CURLOPT_POST, 1);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, array(
                            'key' => 'averyveryverysecurekey',
                            'roll_number' => $_POST['roll_number']
                        ));
                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                        $result = curl_exec($curl);
                        echo $result;
                        curl_close($curl);
                    }
                ?>
            </center>
		</div> 
	</div> </div></div></div></div></div></div></div></div></div></div>
    
  						
                            <?php include_once("footer.html"); ?>	<!-- /.contacts_wrap -->
						
		</div>	<!-- /.page_wrap -->

	</div>		<!-- /.body_wrap -->

<a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>

<div class="custom_html_section">
</div>

<?php include_once('include_bottom.html');  ?>


</body>

</html>
