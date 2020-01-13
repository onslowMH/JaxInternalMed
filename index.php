<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Jacksonville Internal Medicine | Dr. Michael Josilevich, MD | (910) 346-5016</title>
    <link href="styles.css?<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body class="home homepage">
    <div id="wrapper">
        <div id="page">
            <div id="mainColumn">
                <div id="header">
                    <a href="index.php" title="Home  |  Jacksonville Internal Medicine"><img src="images/headerImage.jpg" alt="Header" border="0" usemap="#Map" /></a>
                </div>
                <!-- main nav php include -->
                 <?php include "./inc/main-nav.php"; ?>
                <!-- main nav end -->
                <div id="leftColumn">

                    <div id="patientportal">
                        <a href="https://mycw8.eclinicalweb.com/onmh/jsp/100mp/login_new.jsp" target="_blank"><img src="images/patient_portal.png" alt="Patient Portal" width="170" height="173" border="0" style="margin-bottom:10px; padding-left: 10px;" /></a>
                    </div>


                    <a href="physician-qa-series.php"><img src="images/physicianQAseries.png" width="191" height="130" /></a>

                    <div class="creds_div">
                        <h3>Our Accreditations</h3>
                        <a href="accreditations.php"><img style="padding-bottom:15px;" src="images/home-logos-pcmh.jpg" width="100" height="auto" /><img src="images/home-logos-bcbs.png" width="191" height="auto" /></a>
                    </div>
                </div>
                <!--end #leftColumn -->

                <div id="content">
                    <h1>We look after you...<br/>all of you.</h1>
                    <p>Our primary care practice provides complete and affordable, family-oriented care to children, adolescents, and adults throughout Eastern North Carolina. We treat a broad range of conditions and offer a wide array of primary care services, from routine well-child visits and annual physical exams, to complex medication management and treatment of more complex medical issues. All our physicians are board certified with individual specialization in areas such as:  children’s health, women’s health, geriatrics, hypertension and diabetes, cholesterol, thyroid, etc.</p><br>

                    <p>Our patients appreciate our family-oriented approach. We provide care for every member of the family.   This means that you and your loved ones are able to receive care in the same convenient location — and are treated by physicians who are committed to the community and improving your entire family’s health.</p>
<br>
                    
                    <p style="font-weight:bold; font-size:14px;">Meet our primary care providers:</p>
                    <ul>
                        <li>Michael Josilevich, MD</li>
                        <li>Narender Arcot, MD</li>
                        <li>Sequia Holland-Ellis, MD</li>
                    </ul>

                    <!-- PROMO SECTION -->

<!--
                    <div class="promo_box">
                        <h3 style="color:red;">NOTICE:</h3>
                        <div class="promo_box_inside">

                            <p>We are now open and accepting new patients at our new location,<br>31 Office Park Drive.<br>
                                <a href="https://onslow.org/PrimaryCare" target="_blank">Click here</a> for more info.</p>
                        </div>
                    </div>
-->

                    <!-- end PROMO SECTION -->


                </div>
                <!--end #content -->
            </div>
            <!--end #mainColumn -->
            <?php include 'sidebar.php' ?>
        </div>
        <!--end #rightSidebar -->


        <div class="clear">&nbsp;</div>
    </div>
    <!--end #page -->
    <!--end #wrapper -->
<?php include 'footer.php' ?>
    
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-11358640-10']);
        _gaq.push(['_setDomainName', 'auto']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
</body>
<map name="Map" id="Map">
          <area shape="rect" coords="464,5,632,28" href="http://www.onslow.org" target="_blank" alt="Visit Onslow.org" />
        </map>

</html>
