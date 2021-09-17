<!DOCTYPE html>
<html lang="ru">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WVC4ZJZ');</script>
<!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="./js/jquery-3.4.0.min.js"></script> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="shortcut icon" href="./img/Group17.svg" type="image/png">
    <title>ATHENA</title>


</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVC4ZJZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?
/*
$url = 'https://d2dppe.pipedrive.com/v1/deals?api_token=a1e8421eb275dcb7169f62f7616d62830a71bad3';
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($ch);
curl_close($ch);
$result = json_decode($output, true);
print_r($result);
if (!empty($result['data']['id'])) {
  'Deal was added successfully!' . PHP_EOL;
}
*/



if (!empty($_POST['free1']))
{
	

	$api_token = 'a1e8421eb275dcb7169f62f7616d62830a71bad3';
	$deal = array(
'title' => 'Leave your contacts  for a free consultation -  canadaiswaiting.ca',
'org_id' => '1',
'2b6bf5be78d0021a3c6aad3289c660027118a37d'=>$_POST['phone1'],
'674cc4f3c6a6b220423082d8dce8cec4ab5bbb36'=>$_POST['ema1'],
'd01dcff66210280cda03de81b6a72da322472745'=>$_POST['name1'],

);
 
$url = 'https://d2dppe.pipedrive.com/v1/deals?api_token='.$api_token;
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $deal);
$output = curl_exec($ch);
curl_close($ch);
$result = json_decode($output, true);
//print_r($result);
if (!empty($result['data']['id'])) {
  'Deal was added successfully!' . PHP_EOL;
}

	
	
	
	
}

if (!empty($_POST['free2']))
{
	
	$api_token = 'a1e8421eb275dcb7169f62f7616d62830a71bad3';
		$deal = array(
'title' => 'Leave your contacts  for a free consultation -  canadaiswaiting.ca',
'org_id' => '1',
'2b6bf5be78d0021a3c6aad3289c660027118a37d'=>$_POST['pho2'],
'674cc4f3c6a6b220423082d8dce8cec4ab5bbb36'=>$_POST['ema2'],
'd01dcff66210280cda03de81b6a72da322472745'=>$_POST['nam2'],

);
 
$url = 'https://d2dppe.pipedrive.com/v1/deals?api_token='.$api_token;
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $deal);
$output = curl_exec($ch);
curl_close($ch);
$result = json_decode($output, true);
if (!empty($result['data']['id'])) {
  'Deal was added successfully!' . PHP_EOL;
}

	
	
}

if (!empty($_POST['vop']))
{
	
	
	$api_token = 'a1e8421eb275dcb7169f62f7616d62830a71bad3';
 
// Deal title and Organization ID
$deal = array(
'title' => 'Do you have questions -  canadaiswaiting.ca',
'org_id' => '1',
'2b6bf5be78d0021a3c6aad3289c660027118a37d'=>$_POST['pho3'],
'674cc4f3c6a6b220423082d8dce8cec4ab5bbb36'=>$_POST['ema3'],
'c7b53f4b0900f1c9f5864917ee276f084503a7b6' =>$_POST['mes3'],
'd01dcff66210280cda03de81b6a72da322472745'=>$_POST['nam3'],

);
 
$url = 'https://d2dppe.pipedrive.com/v1/deals?api_token='.$api_token;
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $deal);
$output = curl_exec($ch);
curl_close($ch);
$result = json_decode($output, true);
if (!empty($result['data']['id'])) {
  'Deal was added successfully!' . PHP_EOL;
}

	
	
	
}

?>
    <div class="bg-wrapp">
        <header class="header">
            <div class="container">
                <div class="header__wrapp">
                    <ul class="header__menu">

                        <li>
                            <a href="#Our">Our Services</a>
                        </li>


                        <li>
                            <a href="#About">About Us</a>
                        </li>


                        <li>
                            <a href="#Testimonials">Testimonials</a>
                        </li>

                    </ul>
                    <!-- /.header__menu -->
                    <div class="header__logo">
                        <img src="./img/logo.png" alt="LOGO">
                    </div>
                    <!-- /.header__logo -->
                    <div class="header__contact">
                        <a href="#footer">Contact Us</a>
                    </div>
                    <!-- /.header__contact -->
                    <div class="header__button">
                        <button id="call">Request a call</button>
                    </div>
                    <!-- /.header__button -->
                    <div class="header__call" id='HeaderCall'>
                        <a href="tel:+#">
                        </a>
                    </div>

                </div>
                <!-- /.header__wrapp -->

            </div>
            <!-- /.container -->

        </header>

        <section class="main">
            <div class="container">
                <div class="main__wrapp">
                    <div class="main__col">
                        <h1 class="main__title">ATHENA</h1>
                        <!-- /.main__title -->
                        <p class="main__subtitle">LEGAL GROUP</p>
                        <!-- /.main__subtitle -->
                        <p class="main__discription">We offer assistance throughout the entire process of obtaining a visa and daily address multiple immigration matters that include but are not limited to:</p>
                        <!-- /.main__discription -->
                        <ul class="main__ul">
                            <li>Refugee claims and appeals</li>
                            <li>Loss of status and deportation</li>
                            <li>Issues related to obtaining citizenship</li>
                            <li>Sponsorship application and breakdown</li>
                        </ul>
                        <!-- /.main__ul -->
                        <div class="main__button">
                            <button class="Get">Get a free consultation</button>
                        </div>
                        <!-- /.main__button -->
                    </div>
                    <!-- /.main__col -->

                </div>
                <!-- /.main__wrapp -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.main -->
    </div>
    <!-- /.bg-wrapp -->
    <div class="body__wrapp">
        <section class="map">
            <div class="container">
                <div class="map__wrapp">
                    <div class="map__col1">
                        <div class="map__text">
                            <p>When dealing with piles of immigration documents and multiple requirements, confusion is quite common. This is why Athena has gathered immigration specialists in every city in Canada to help you get through the immigration
                                process quickly and flawlessly.
                            </p>
                        </div>
                        <!-- map__text -->
                        <div class="map__text">
                            <p>
                                It’s not necessary and also not possible to follow all the complex requirements of immigration to Canada. This is what Athena is here for. Contact our cross-border specialists who can consult you in the United States, EU, Russian Federation, Mexico, India,
                                Israel, and other countries.
                            </p>
                        </div>
                        <!-- map__text -->

                    </div>
                    <!-- /.map__col -->
                    <div class="map__col2">
                        <div class="col2__form form">
                        <form class="form" method="post" id="mapForm">
                                <div class="form__title">Get a free consultation</div>
                                <!-- /.form__title -->
                                <div class="form__subtitile">
                                    <p>Leave your contacts and our specialists will call you back</p>
                                </div>
                                <!-- /.form__subtitile -->
                                <input type="text" class="form__name" name="nam2" id="formName" placeholder="Your name*">
                                <input type="text" class="form__email" name="ema2" id="formEmail" placeholder="Your email*">
                                <input type="text" class="form__phone" name="pho2" id="formPhone" placeholder="Your phone*">
                                <div class="form__button">
								<input type="hidden" name="free2" value="sub">
                                    <button value="sub" name="free2" id="mapButton" type='submit' class="Submit">Submit</button>
                                </div>
                                <!-- form__button -->
                                <div class="form__checkbox">
                                    <label for="mapCheckbox">
                                    <input type="checkbox" class="checkbox" id="mapCheckbox">
                                     By clicking the button you agree to the terms of processing your data</label>
                                </div>
                                <!-- /.form__checkbox -->
                            </form>
                            <!-- /.form -->
                        </div>
                        <!-- /.col2__form -->
                    </div>
                    <!-- /.map__col -->
                </div>
                <!-- /.map__wrapp -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.map -->
        <section class="our" name="Our">
            <a href="#" name="Our"></a>
            <div class="container">
                <div class="our__wrapp">
                    <div class="our__title section__title">
                        <span>WHAT WE DO</span>
                        <p>
                            Our Services
                        </p>
                    </div>
                    <!-- /.our__title section__title -->
                    <div class="our__column">
                        <div class="our__col">
                            <div class="our__block">
                                <div class="our__img">
                                    <img src="./img/canada.svg" alt="canada">
                                </div>
                                <!-- /.our__img -->
                                <div class="our__content">
                                    <div class="our__content--title">
                                        <p>Permanent residence or citizenship</p>
                                    </div>
                                    <!-- /.our__content--title -->
                                    <div class="our__content--text">
                                        <p>Athena Group offers legal help through the process of applying for citizenship and passing the interview. We ensure that all documents are in order so that you get your citizenship as quickly as possible.</p>
                                    </div>
                                    <!-- /.our__content--text -->
                                    <div class="our__content--link">
                                        <button class="Get">Get a free consultation</button>
                                    </div>
                                    <!-- /.our__content--link -->
                                </div>
                                <!-- /.our__content -->


                            </div>
                            <!-- /.our__block -->
                            <div class="our__block">
                                <div class="our__img">
                                    <img src="./img/manEnter.svg" alt="man">
                                </div>
                                <!-- /.our__img -->
                                <div class="our__content">
                                    <div class="our__content--title">
                                        <p>Loss of status and deportation</p>
                                    </div>
                                    <!-- /.our__content--title -->
                                    <div class="our__content--text">
                                        <p>Facing deportation or detention is an issue that requires contacting an immigration lawyer near you. An immigration lawyer will help you prepare a deportation appeal and guide you through the whole process.</p>
                                    </div>
                                    <!-- /.our__content--text -->
                                    <div class="our__content--link">
                                        <button class="Get">Get a free consultation</button>
                                    </div>
                                    <!-- /.our__content--link -->
                                </div>
                                <!-- /.our__content -->


                            </div>
                            <!-- /.our__block -->
                        </div>
                        <!-- /.our__col -->
                        <div class="our__col">
                            <div class="our__block">
                                <div class="our__img">
                                    <img src="./img/callUl.svg" alt="callUl">
                                </div>
                                <!-- /.our__img -->
                                <div class="our__content">
                                    <div class="our__content--title">
                                        <p>Refugee claims and appeals</p>
                                    </div>
                                    <!-- /.our__content--title -->
                                    <div class="our__content--text">
                                        <p>Along with legal consultations, we offer legal assistance with all needed documents and resources for refugees. If your claim is denied, it's essential to consult a specialist on the grounds of the appeal.</p>
                                    </div>
                                    <!-- /.our__content--text -->
                                    <div class="our__content--link">
                                        <button class="Get">Get a free consultation</button>
                                    </div>
                                    <!-- /.our__content--link -->
                                </div>
                                <!-- /.our__content -->


                            </div>
                            <!-- /.our__block -->
                            <div class="our__block">
                                <div class="our__img">
                                    <img src="./img/visa.svg" alt="visa">
                                </div>
                                <!-- /.our__img -->
                                <div class="our__content">
                                    <div class="our__content--title">
                                        <p>Work or Business visa</p>
                                    </div>
                                    <!-- /.our__content--title -->
                                    <div class="our__content--text">
                                        <p>Obtaining a long-term visa in Canada may be tricky. The process requires multiple documents to prepare and fill in. To make sure your application gets approved, address legal immigration professionals in Canada.
                                        </p>
                                    </div>
                                    <!-- /.our__content--text -->
                                    <div class="our__content--link">
                                        <button class="Get">Get a free consultation</button>
                                    </div>
                                    <!-- /.our__content--link -->
                                </div>
                                <!-- /.our__content -->


                            </div>
                            <!-- /.our__block -->
                        </div>
                        <!-- /.our__col -->
                    </div>
                    <!-- /.our__column -->



                </div>
                <!-- /.our__wrapp -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.our -->
        <section class="experience">
            <div class="container">
                <div class="experience__wrapp">
                    <div class="experience__block">
                        <div class="experience__number">
                            <p>12</p>
                        </div>
                        <!-- /.experience__number -->
                        <div class="experience__text">
                            <p>Years of practice <br> in the legal services field</p>
                        </div>
                        <!-- /.experience__text -->
                    </div>
                    <!-- /.experience__block -->
                    <div class="experience__block">
                        <div class="experience__number">
                            <p>20+</p>
                        </div>
                        <!-- /.experience__number -->
                        <div class="experience__text">
                            <p>Professional lawyers <br> in different judicial areas</p>
                        </div>
                        <!-- /.experience__text -->
                    </div>
                    <!-- /.experience__block -->
                    <div class="experience__block">
                        <div class="experience__number">
                            <p>5000+</p>
                        </div>
                        <!-- /.experience__number -->
                        <div class="experience__text">
                            <p>Legal cases <br> successfully completed</p>
                        </div>
                        <!-- /.experience__text -->
                    </div>
                    <!-- /.experience__block -->
                </div>
                <!-- /.experience__wrapp -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.experience -->
        <section class="about_us">
            <a href="#" name="About"></a>
            <div class="container">
                <div class="about_us__wrapp">
                    <div class="about_us__title section__title">
                        <p>About Us</p>
                    </div>
                    <!-- /.about_us__title section__title -->
                    <div class="about_us__text">
                        <p>Lawyers at Athena have vast expertise in guiding clients through the rough process of immigration to Canada. People are often confused and overwhelmed by the complex requirements of Immigration Canada, from the variety of documents
                            required to submit to having to choose between numerous constantly changing Provincial and Federal Programs allowing for immigration and work in Canada.</p>
                    </div>
                    <div class="about_us__text">
                        <p>With the Athena immigration law firm assistance, you will be able to easily:</p>
                    </div>
                    <div class="about_us__ul">
                        <li>file for a Work or Business visa, obtain LMIA</li>
                        <li>apply for a Student Visa</li>
                        <li>sightsee through Canada with a Travel Visa</li>
                        <li>obtain a 10-year visitor's visa</li>
                        <li>sponsor a family member</li>
                        <li>plea for asylum and refugee status</li>
                        <li>apply for Express Entry or choose wisely between various Federal and Provincial programs</li>
                    </div>
                    <!-- /.about_us__ul -->
                    <div class="about_us__text">
                        <p>Athena Group combines legal teams, partners, and associates in every province in Canada. Our highly-experienced and well-trained Canadian lawyers protect our client’s interests and fight for their rights. We also have cross-border
                            specialists who can help you with questions and needs in the United States, EU, Russian Federation, Mexico, India, Israel, and other countries. If you seek effective legal advice, consultation, or a lawyer to represent your
                            interests in all levels of court and tribunals, you’ve come to the right place. Athena Group is here for you.</p>
                    </div>
                    <!-- /.about_us__text -->
                    <div class="about_us__text">
                        <p>According to Canadian immigration law, we as a legal firm provide legal advice and assistance, however, the final decision for granting a visa is made in Citizenship and Immigration Canada.</p>
                    </div>
                    <!-- /.about_us__text -->
                    <div class="about_us__button">
                        <button class="Get">Get a free consultation</button>
                    </div>
                    <!-- /.about_us__button -->
                </div>
                <!-- /.about_us__wrapp -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.about_us -->
        <a href="#" name="Testimonials"></a>
        <div class="testimonials">
            <div class="testimonials__slider swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="testimonials__text">
                            <p>Since my divorce was an international case and had quite complex circumstances, many Canadian law firms turned me away. However, Athena provided me with no less than the friendliest legal services I’ve ever received. The lawyer
                                that assisted me was dedicated and provided wonderful service every step of the way. Thank you, Olga, for helping me through one of the most challenging and complicated times of my life! I would have been completely taken
                                advantage of if I hadn’t addressed you! I highly recommended Athena.</p>
                        </div>
                        <!-- /.testimonials__text -->
                        <div class="testimonials__user">
                            <span class="testimonials__name">Richard D.</span>
                            <span class="testimonials__day">05/2020</span>
                            <!-- /.testimonials__day -->
                        </div>
                        <!-- /.testimonials__user -->

                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials__text">
                            <p>Since my divorce was an international case and had quite complex circumstances, many Canadian law firms turned me away. However, Athena provided me with no less than the friendliest legal services I’ve ever received. The lawyer
                                that assisted me was dedicated and provided wonderful service every step of the way. Thank you, Olga, for helping me through one of the most challenging and complicated times of my life! I would have been completely taken
                                advantage of if I hadn’t addressed you! I highly recommended Athena.</p>
                        </div>
                        <!-- /.testimonials__text -->
                        <div class="testimonials__user">
                            <span class="testimonials__name">Richard D.</span>
                            <span class="testimonials__day">05/2020</span>
                            <!-- /.testimonials__day -->
                        </div>
                        <!-- /.testimonials__usere -->

                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials__text">
                            <p>Since my divorce was an international case and had quite complex circumstances, many Canadian law firms turned me away. However, Athena provided me with no less than the friendliest legal services I’ve ever received. The lawyer
                                that assisted me was dedicated and provided wonderful service every step of the way. Thank you, Olga, for helping me through one of the most challenging and complicated times of my life! I would have been completely taken
                                advantage of if I hadn’t addressed you! I highly recommended Athena.</p>
                        </div>
                        <!-- /.testimonials__text -->
                        <div class="testimonials__user">
                            <span class="testimonials__name">Richard D.</span>
                            <span class="testimonials__day">05/2020</span>
                            <!-- /.testimonials__day -->
                        </div>
                        <!-- /.testimonials__user -->

                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials__text">
                            <p>Since my divorce was an international case and had quite complex circumstances, many Canadian law firms turned me away. However, Athena provided me with no less than the friendliest legal services I’ve ever received. The lawyer
                                that assisted me was dedicated and provided wonderful service every step of the way. Thank you, Olga, for helping me through one of the most challenging and complicated times of my life! I would have been completely taken
                                advantage of if I hadn’t addressed you! I highly recommended Athena.</p>
                        </div>
                        <!-- /.testimonials__text -->
                        <div class="testimonials__user">
                            <span class="testimonials__name">Richard D.</span>
                            <span class="testimonials__day">05/2020</span>
                            <!-- /.testimonials__day -->
                        </div>
                        <!-- /.testimonials__user -->

                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials__text">
                            <p>Since my divorce was an international case and had quite complex circumstances, many Canadian law firms turned me away. However, Athena provided me with no less than the friendliest legal services I’ve ever received. The lawyer
                                that assisted me was dedicated and provided wonderful service every step of the way. Thank you, Olga, for helping me through one of the most challenging and complicated times of my life! I would have been completely taken
                                advantage of if I hadn’t addressed you! I highly recommended Athena.</p>
                        </div>
                        <!-- /.testimonials__text -->
                        <div class="testimonials__user">
                            <span class="testimonials__name">Richard D.</span>
                            <span class="testimonials__day">05/2020</span>
                            <!-- /.testimonials__day -->
                        </div>
                        <!-- /.testimonials__user -->

                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- дотсы  -->
                <div class="swiper-pagination"></div>
                <!-- /.swiper-pagination -->

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
            <!-- /.testimonials__slider -->


        </div>
        <!-- /.testimonials -->
        <section class="questions">
            <div class="container">
                <div class="wrapp">
                    <div class="questions__wrapp">
                        <div class="questions__title section__title">
                            <h2>Ask us a question</h2>
                        </div>
                        <!-- /.questions__title -->
                        .
                        <div class="questions__subtitle">
                            <p>Fill out the form and we will contact you promtly</p>
                        </div>
                        <!-- /.questions__subtitle -->
                        <form method="post" class="subtitle__form" id="questions">
                            <div class="subtitle__form--wrapp">
                                <input type="text" id="questionsName" placeholder="Your name*">
                                <input type="text" id="questionsPhone" placeholder="Your phone*">
                                <input type="text" id="questionsEmail" placeholder="Your email*">
                                <input type="text" id="questionsMessage" placeholder="Message* " >
								<input type="hidden" value="vop" name="vop">
                                <button value="sub" name="vop" type='submit' id="questionsButton" class="Submit">Submit</button>
                            </div>
                            <!-- subtitle__form--wrapp -->
                            <div class="subtitle__form--checkbox">
                                <input type="checkbox" id="questionsCheckbox">
                                <label for="questionsCheckbox">
                                    By clicking the button you agree to the terms of processing your data
                                </label>

                            </div>
                            <!-- /.subtitle__form--chckbox -->


                        </form>
                        <!-- /.subtitle__form -->
                    </div>
                    <!-- /.questions__wrapp -->
                </div>
                <!-- /.wrapp -->

            </div>
            <!-- /.container -->

        </section>
        <!-- /.questions -->

    </div>
    <!-- body__wrapp -->


    <footer class="footer " id="footer">
        <a href="#" name="footer"></a>
        <div class="container">
            <div class="wrapp">
                <div class="footer__wrapp">
                    <div class="footer__logo">
                        <img src="./img/logo.png" alt="Athena-logo">
                    </div>
                    <!-- /.footer__logo -->
                    <div class="footer__address">
                        <div class="footer__head">
                            <img src="./img/Map.svg" alt="adress">
                            <div class="footer__title">
                                <p>Address</p>
                            </div>
                            <!-- /.footer__title -->
                            <!-- /.footer__head -->

                        </div>
                        <div class="footer__location">
                            <p>4580 Dufferin St. #309 North York, Ontario M3H 5Y2</p>
                        </div>
                        <!-- /.footer__location -->
                    </div>
                    <!-- /.footer__adress -->
                    <div class="footer__phone" id="Contact">
                        <div class="footer__head">
                            <img src="./img/phone.svg" alt="phone">
                            <div class="footer__title">
                                <p>Phone</p>
                            </div>
                            <!-- footer__title -->
                        </div>
                        <!-- /.footer__head -->

                        <div class="footer__phones">
                            <a href="tel:#">+ 1 (437) 253-8546</a>
                        </div>
                        <!-- /.footer__phones -->
                    </div>
                    <!-- /.footer__phone -->
                    <div class="footer__email">
                        <div class="footer__head">
                            <img src="./img/Email.svg" alt="email">
                            <div class="footer__title">
                                <p>Email</p>
                            </div>
                            <!-- footer__title -->
                        </div>
                        <!-- /.footer__head -->
                        <a href="mailto:help@athena.legal">help@athena.legal</a>
                    </div>
                    <!-- /.footer__email -->
                </div>
                <!-- /.footer__wrapp -->

                <div class="footer__policy">
                    <span>© Athena 2021. All rights reserved.</span>
                    <a href="#">Privacy policy</a>
                </div>
                <!-- footer__policy -->
            </div>
            <!-- /.wrapp -->
        </div>
        <!-- /.container -->

    </footer>
    <!-- /.footer -->

    <div class="call" id="my_call">
        <div class="call__content">
            <div class="call__head">
                <!-- <div class="header__logo">
                    <a href="#">
                        <img src="./img//logo.png" alt="Лого">
                    </a>
                </div> -->

                <!-- <div class="menu-burger__call" id="burger"> -->
                <!-- <img src="./img/menu.png" alt="menu-burger"> -->
                <!-- </div> -->
            </div>
            <div class="close_call_window">
                <img src="./img/close 1.svg" alt="close">
            </div>

            <div class="call__content--wrapp">
                <div class="call__title">
                    <p>Get a free consultation</p>
                </div>
                <!-- /.modal__title -->
                <div class="call__subtitle">
                    <p>Leave your contacts and our specialists will call you back</p>
                </div>
                <!-- /.modal__subtitle -->
                <form method="post" class="call__form" id="callForm">
                    <input required type="text" id="call__name" name="name3" placeholder="Your name*">
                    <input required type="text" id="call__phone" name="phone3" placeholder="Your phone*">
					<input type="hidden" name="free1" value="sub">
                    <button value="sub"   name="free1" type='submit' id="callButton" class="Submit">Submit</button>
                    <div class="call__checkbox">
                        <input required class="checkbox" type="checkbox" id="callCheckbox">
                        <label for="callCheckbox">By clicking the button you agree to the terms
                            of processing your data</label></div>
                    <!-- /.modal__checkbox -->
                </form>
                <!-- /.modal__form -->
            </div>
            <!-- /.modal__content--wrapp -->
        </div>
        <!-- /.modal__content -->
    </div>


    <div class="modal " id="my_modal">
        <div class="modal__content">
            <div class="modal__head">
                <div class="header__logo">
                    <a href="#">
                        <img src="./img/Group17.svg" alt="Лого">
                    </a>
                </div>

                <div class="modal__call" id="modalCall">
                    <a href="tel:+#">
                    </a>
                </div>
            </div>
            <div class="modal__content--wrapp">
                <div class="modal__title">
                    <p>Get a free consultation</p>
                </div>
                <!-- /.modal__title -->
                <div class="modal__subtitle">
                    <p>Leave your contacts and our specialists will call you back</p>
                </div>
                <!-- /.modal__subtitle -->
                <form method="post" class="modal__form" id="modalForm">
                    <input type="text" id="modal__name" name="name1" placeholder="Your name*">

                    <input type="text" id="modal__phone" name="phone1" placeholder="Your phone*">

                    <input type="text" id="modal__email" name="ema1" placeholder="Email*">
<input type="hidden" name="free1" value="sub">
                    <button value="sub" name="free1" type='submit' id="modalButton" class="Submit">Submit</button>
                    <div class="modal__checkbox">
                        <input type="checkbox" id="modalCheckbox">
                        <label for="modal__checkbox">By clicking the button you agree to the terms
                            of processing your data</label></div>
                    <!-- /.modal__checkbox -->
                </form>
                <!-- /.modal__form -->
            </div>
            <!-- /.modal__content--wrapp -->
            <div class="close_modal_window">
                <img src="./img/close 1.svg" alt="close">
            </div>
        </div>
        <!-- /.modal__content -->
    </div>
    <!-- /.modal -->
    <div class="quote" id="my_quote">
        <div class="quote__content">
            <div class="quote__head">
                <div class="header__logo">
                    <a href="#">
                        <img src="./img/Group17.svg" alt="Лого">
                    </a>
                </div>

                <div class="quote__call"  id="quoteCall">
                    <a href="tel:+#">
                    </a>
                </div>
            </div>
            <div class="quote__content--wrapp">
                <div class="quote__title">
                    <img src="./img/paperPlane.svg" alt="Бумажный самолет">
                </div>
                <!-- /.modal__title -->
                <div class="quote__subtitle">
                    <h2>FOR YOUR QUOTE REQUEST</h2>
                </div>
                <!-- /.modal__subtitle -->
                <div class="quote__discriotion">
                    <p>To provide you with the most accurate quote possible, we just need a little more information. One of our consultants will contact you to agree on your proposal within the next</p>

                </div>
                <!-- /.quote__discriotion -->
                <span class="quote__time">00:30</span>
                <!-- /.quote__time -->
                <span class="quote__second">seconds</span>
                <!-- /.quote__second -->

            </div>
            <!-- /.modal__content--wrapp -->
            <div class="close_quote_window">
                <img src="./img/close 1.svg" alt="close">
            </div>
        </div>
        <!-- /.modal__content -->
    </div>
    <script src="./js/jquery-3.4.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/index.js"></script>





</body>







</html>