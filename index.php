<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Can Toni Platera</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>
        body {
            background-color: #ebecee;
            padding: 1px 10%;
            max-width: 600px;
            margin: auto; 
        }

        .link-button { 
            font-family: courier;
            font-weight: bold;
            font-size: 16px;
            color: black;
            text-align: center;
            background: none;
            border: none;
            text-decoration: none;
            cursor: pointer; 
        }
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            .link-button {
                font-size: 25px;
            }
        }

        #mc_embed_signup div.mce_inline_error {
            color: #6B0505 !important;
            font-weight: bold !important;
            background-color: rgba(0,0,0,0) !important;
        }
        
        h1 {
            font-family: courier;
            font-size: 1vw;
            color: black;
            text-align: left;
            margin: 0px; 
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            h1 {
                font-size: 8px;
            }
        }

        h2 {
            font-family: courier;
            font-size: 12px;
            color: black;
            text-align: center;
            margin: 0px; 
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            h2 {
                font-size: 8px;
            }
        }

        h3 {
            font-family: courier;
            font-size: 12px;
            color: black;
            text-align: center;
            margin: 5px; 
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            h3 {
                font-size: 6px;
            }
        }

        p {
            font-family: courier;
            font-size: 12px;
            color: black;
            text-align: justify;
            margin: 0px; 
            
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            p {
                font-size: 8px;
            }
        }

        p .clear {
            clear: both;
            font-family: courier;
            font-size: 12px;
            color: black;
            margin: 0px; 
        }

        /* p .clear img {
            clear: both;
            font-family: courier;
            font-size: 12px;
            color: black;
            margin: 0px; 
        } */


        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            p.clear {
                clear: both;
                font-size: 8px;
            }
        }

        a img {
            border: 0 none;
            font-family: courier;
            font-size: 12px;
            color: black;
            margin: 0px; 

        }

        .image-link  a{
            text-decoration: none;
            font-family: courier;
            font-size: 15px;
            color: black;
            padding-right: 7px;
            padding-left: 7px;
            margin: 0px; 
        }

        .main {

            height: auto;
            width: 100%;
            display: flex;
        }

        .main div {
            -ms-flex: 1;
            /* IE 10 */
            flex: 1;
        }

        .main img {
            height: auto;
            width:33.33%;
            float:left;
        }

        #rentals,
        #events,
        #history,
        #sale,
        #contact {}
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-7833172-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-7833172-13');
    </script>
</head>

<body>

    <h2 class="image-link">
        <a href="http://cantoniplatera.com"> Français</a>
        <a href="http://cantoniplatera.com"> Alemán</a>
        <a href="http://cantoniplatera.com"> Italiano</a>
        <a href="http://cantoniplatera.com"> Russian</a>
        <a href="http://cantoniplatera.com/ES/index.php"> Castellano</a>
        <a href="http://cantoniplatera.com"> Catala</a>

        <img src="cantoniplatera.jpg" alt="Can Toni Platera" width="100%" height="100%">
    </h2>
    
    <h3>
        Can Toni Platera is literally the most beautiful Finca on Formentera itself the most beautiful Island of the Mediterranean, with its fine sand beaches, aquamarine waters, its bohemian feel, hedonistic lifestyle and its history dating back to the Phoenicians.
    </h3>
    
    <p class="clear">
        <a href="#rentals"><img src="bar1.jpg" style="float: left; alt=" Rentals" width="24.15%" height="100%"></a>
        <a href="#events"><img src="bar2.jpg" style="float: left; alt=" Events" width="15.66%" height="100%"></a>
        <a href="#history"><img src="bar3.jpg" style="float: left; alt=" History" width="20.75%" height="100%"></a>
        <a href="#sale"><img src="bar4.jpg" style="float: left; alt=" Sales" width="15.53%" height="100%"></a>
        <a href="#contact"><img src="bar5.jpg" style="float: left; alt=" Contact" width="23.91%" height="100%"></a>
        <br>
    </p>
    
    <!-- Insta Image Gallery -->
    <?php
    
    $imagesDir = 'images/';
    $images = glob($imagesDir . '*.jpg', GLOB_BRACE);
    $imageList = range(0, count($images));
    shuffle($imageList);
    $image_idx = 0;
    
        echo '
        <div class="main">
        
        <img src="' . $images[$imageList[$image_idx++]] . '">
        <img src="' . $images[$imageList[$image_idx++]] . '">
        <img src="' . $images[$imageList[$image_idx++]] . '">
        </div>';

        echo '
        <div class="main">
        
        <img src="' . $images[$imageList[$image_idx++]] . '">
        <img src="' . $images[$imageList[$image_idx++]] . '">
        <img src="' . $images[$imageList[$image_idx++]] . '">
        </div>';

        echo '
        <div class="main">
        
        <img src="' . $images[$imageList[$image_idx++]] . '">
        <img src="' . $images[$imageList[$image_idx++]] . '">
        <img src="' . $images[$imageList[$image_idx++]] . '">
        </div>';

        echo '
        <div class="main">
        
        <img src="' . $images[$imageList[$image_idx++]] . '">
        <img src="' . $images[$imageList[$image_idx++]] . '">
        <img src="' . $images[$imageList[$image_idx++]] . '">
        </div>';

        
    ?>
    <!-- Insta Image Gallery End-->


    <div id="rentals"><a href="rentals"></a></div>

    <p class="clear">
        <img src="rentals.jpg" alt="Can Toni Platera" width="100%" height="100%">
    </p>

    <h1>
        <p class="clear">
            <!-- CanToni -->
            <img src="images/File 44.jpg" style="float:left; width:20%; border:0; padding-right:10px; overflow: hidden;max-width:140px;">
            The Finca Can Toni Platera is composed of Three independant places; Can Toni the main house which sleeps 6 and has a pool, Can Joseph which sleeps 2 wich has an outside shower and our little baby the Pool place which sleeps 2 and as its name discribes also has a pool. You can also rent out all three places if you have a big family in which case you would have 5 bedrooms, three kitchens, 4 Bathrooms, two pools sleeping a total of 10 guests.
        </p>
<br>
        <p class="clear">
            <!-- CanToniPool -->
            <img src="images/File 105.jpg" style="float:right; width:20%; border:0; padding-left:10px; overflow: hidden;max-width:140px;">
            Can Toni is The Heart of the Finca: The house is one of the oldest of the island, it's pristine location in Can Parra with panoramic open view on the Bay of Mitjorn and sea is quite unique, it is built of stone and the walls are nearly a meter thick this makes it radio proof since the radio waves are deflected by the asymmetric stones and do not pass through the walls of the house, some say that this is one of the reasons the people of Formentera live for so long and also means that your mobile phones will not work very well within the house, it also helps to keep it cool in the hot summer months. Perfectly suited for a maximum of 6 people it provides an oasis experience of peace and tranquility. The guest have at their disponilility the garden, the “alberga" natural pool, 2 outdoor showers, a chill-out, a roof terrace with spectacular views, 3 bedrooms, a large bathroom, a large dresser, large safety box that fits laptops, video surveillance infrared cameras, separate toilet, a wood oven to bake fresh bread or cook lamb, fully equipped kitchen, powered by 100% renewable energy and solar backup, internet, SAT TV, Chimney. All in all Can Toni offers for an original and authentic experience. You can book directly and save 15% or book via <a href="https://goo.gl/aPifMY" target=" _blank">Airbnb</a> or <a href="https://www.homeaway.com/vacation-rental/p1735855?noDates=true&utm_source=direct&utm_medium=social&utm_campaign=earned:homeaway:sharecopylink:USA&utm_content=1735855&oc=uf1gAaDJ6HZS45zTgumzf" target=" _blank">Homeaway</a>
        </p>
<br>
        <p class="clear">
            <!-- Can Joesph -->
            <img src="images/File 53.jpg" style="float:left; width:20%; border:0; padding-right:10px; overflow: hidden;max-width:140px;">
            Can Joseph: A Small rural place, typical of the island with its own bread oven outside, completely equipped, with a modern, comfort, clean and simple decoration, WiFi, a Dishwasher, a Washing Machine,Sat TV, Air conditioning ( inverter ), a Wood Stove, a Private garden, outside a hot & cold shower set within bamboo bushes, a Safe, a Toaster, a Kettle, a bed ( 150 x 200 cm ). In general the area is calm with view on the sea and countryside, this secret hideout is perfect for couples that are looking for a hidden love nest for a romantic get away. You can book directly and save 15% or book via <a href="https://goo.gl/kqWpJZ" target=" _blank">Airbnb</a> or <a href="https://www.homeaway.com/vacation-rental/p6880203?noDates=true&utm_source=direct&utm_medium=social&utm_campaign=earned:homeaway:sharecopylink:USA&utm_content=6880203&oc=D-170pNLxqrnp_2bNauHw" target=" _blank">Homeaway</a>
        </p>
<br>
        <p class="clear">
            <!-- Pool Place -->
            <img src="images/File 55.jpg" style="float:right; width:20%; border:0; padding-left:10px; overflow: hidden;max-width:140px;">
            The Pool Place: Is a little love nest for couples that want total privacy. Water is life, this basic element is central to the property which has elaborate water systems including three Alberca’s to originally store water which have been adapted into micro pools to cool off in the hot summer months as its name discribes the pool place has a pool as well as a small kitchen and walled patio,washing machine, Air conditioning and WiFi.
            You can book directly and save 15% or book via <a href="https://goo.gl/4yBpHj" target=" _blank">Airbnb </a>
        </p>
<br>
        <div id="events"><a href="events"></a></div>

        <p class="clear">
            <img src="events.jpg" alt="Can Toni Platera" width="100%" height="100%">
        </p>

        <p class="clear">
            <!-- Events -->
            <img src="images/File 33.jpg" style="float:left; width:20%; border:0; padding-right:10px; overflow: hidden;max-width:140px;">
            The Finca Can Toni Platera is a perfect location for bohemian marriages, birthdays, culinary events, anniversary's, small private events of no more than 20 people as well as photo shoots since it is one of the only authentic Fincas in Formentera nested in beautiful gardens, water features and with a view on the sea and countryside.
        </p>

        <div id="history"><a href="history"></a></div>

        <p class="clear">
            <img src="history.jpg" alt="Can Toni Platera" width="100%" height="100%">
        </p>

        <p class="clear">
            Toni Plate came back from the Americas, more specifically from Cuba a rich man and it is said he hid his silver treasure in the grounds of the property, some say even in the walls of the main house. The treasure was never found but a roman coin was unearthed in the house he built for his sister Rufina adjacent to his. The coin dates back to the Roman emperor Antoninus Pius the successor of Hadrian. This dates the inhabitation of the area to around the year 140 thus 1888 years ago. 
<br>
<br>
            <!-- History -->
            <img src="images/File 64.jpg" style="float:right; width:20%; border:0; padding-left:10px; overflow: hidden;max-width:140px;">
            The discovery of the coin is of no surprise since Can Parra the area where the Finca is located has fertile land and is a protected high ground with a non obstructed view on La Mola and the Bay of Mitjorn. The Finca is itself built on a vantage point giving it a dominant view on the bay and on the close bye picturesque fishing port of es torrent des s'alga, a perfect location for a Roman outpost with line of sight to the Roman fort on Mitjorn. 
<br>
<br>
            There are very few old two-story Fincas in Formentera a land where nearly all were just about surviving it was obviously a status symbol and Toni evidently wanted to showoff the wealth he had acquired. 
<br>
<br>
            The name Can Parra means domain of the vineyards and the property has its own biological production of rare and nearly extinct pre phylloxera wine direct descendant of Egyptian and Roman wines. 
<br>
<br>
            The Finca has been owned and cared for by the same family since the 1960’s when Formentera was a lost paradise, it was also home to the artist Ermine Valty where in her studio she produced fantastic art inspired by Frida Kahlo but otherwise hard to categorize.
        </p>

        <div id="sale"><a href="sale"></a></div>

        <p class="clear">
            <img src="sale.jpg" alt="Can Toni Platera" width="100%" height="100%">
        </p>

        <p class="clear">
            The Finca of Can Toni Platera is a unique 300+ year old property with sea view, Located in Can Parra Formentera it can accomodate 17 people including staff and is composed of five plots (property deeds) totalling 9700 m2, 3 Touristic Licenses, 3 independent Houses totalling about 350 m2 (25% terraces included), Main house, Guest house, Pool Studio, Detached Employee Quarters, 3 Pools, the main pool (2.8 x 3.4) Secondary pools (1.5 x 4, 2 x 2.5),4 Kitchens, 5 Bathrooms, 9 bedrooms,Pool Studio, Detached Employee Quarters. The dependencies include: Laundry Room, Garage and Storage rooms and a Yoga platform.
<br>
<br>
            Can Toni also has its Traditional Bread Ovens, 1000 m2 of pre Phylloxéra Vineyard, Botanic Mediterranean Gardens, Centernian Olive trees, Carob trees, Bougainville, Fruit Trees Orange & Lemon, 40 year old Palm trees, Exotic cactuses, In excess of 12000 m of dry stone walls.
<br>
<br>
            From a technical point of view Can Toni boasts: Property Wide Wifi, Grid Connected Electricity (Soms energia renovable) as well as a Backup Generator. Ecology and sustainability has always been an interest and necessity before the arrival of modern civilization thus apart from the water collecting and storing systems (3 Water cisterns, 200m2 of rainwater collection surfaces not including roofs) the property also has a solar array which even though not directly connected to the grid can be used as backup and as a way to reduce electrical consumption thus reducing the carbon footprint of the property. Privacy and security is intrinsically tied to ones quality of life as such the property is well isolated from the outside with high walls and multiple security cameras. 
        </p>
        <br>
    </h1>

    <h2>
        <?php
        $url = "http://www.bitstamp.net/api/ticker/";
        $json = json_decode(file_get_contents($url), true);
        $price = $json["last"];
        echo floor(7445820 / $price)  . " BTC (Bitcoins) OR 6000000 EUROS";
        ?>
<br>
        <a href="https://docs.google.com/document/d/1mm1w0gxUwcauPF5Q-I-ZgLzl2GDqneO-J4jxT10Rkno" " target=" _blank">Can Toni Platera Sales Documentation</a>

        <div id="contact"><a href="contact"></a></div>
    </h2>
<br>
    <p class="clear">
        <a target="_blank" href="tel:+34-648-426-015"><img src="con1.jpg" style="float: left; alt=" Can ToniPlatera" width="31.8%" height="100%"></a>
        <a target="_blank" href="https://www.airbnb.com/rooms/8492758"><img src="con2.jpg" style="float: left; alt=" Airbnb" width="6.31%" height="100%"></a>
        <a target="_blank" href="https://www.facebook.com/cantoniplateraformentera/"><img src="con3.jpg" style="float: left; alt=" Facebook" width="5.95%" height="100%"></a>
        <a target="_blank" href="https://www.instagram.com/cantoniplateraformentera/"><img src="con4.jpg" style="float: left; alt=" Instagram" width="5.95%" height="100%"></a>
        <a target="_blank" href="https://twitter.com/cantoniplatera"><img src="con5.jpg" style="float: left; alt=" Twitter" width="6.8%" height="100%"></a>
        <a target="_blank" href="https://goo.gl/maps/TJGsv99gjiu"><img src="con6.jpg" style="float: left; alt=" Map" width="6.31%" height="100%"></a>
        <a target="_blank" href="mailto:info@cantoniplatera.com?subject=RESERVATION REQUEST"><img src="con7.jpg" style="float: left; alt=" Email" width="36.8%" height="100%"></a>
    </p>

    <p class="clear">
        <h2>
<br>
            Can Toni Platera&nbsp;<br>
            <a href="https://goo.gl/maps/TJGsv99gjiu" target=" _blank">Google maps</a>
            <br>
            Cami de Can Parra 2242
            <br>
            07860, Formentera, Spain
            <br>
            Telephone&nbsp;+34 648 426 015
            <br>
            <br>
            For all your questions and love letters 
            <br>
            home@cantoniplatera.com 
            <br>
            <br>
            If you like to celebrate a special moment
            <br>
            events@cantoniplatera.com
            <br>
            <br>

            <div>
                <!-- Begin MailChimp -->
                <div id="mc_embed_signup">
                    <form action="https://cantoniplatera.us12.list-manage.com/subscribe/post?u=661db9ac21af24133453e94fa&amp;id=f04e299c95" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <h2>For News &amp; Special Offers</h2>
                            <div class="mc-field-group">
                                <label for="mce-EMAIL">
                                    <h2>enter your Email below! </h2>
                                </label>
                                <br>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <br>
                            <h2>
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_661db9ac21af24133453e94fa_f04e299c95" tabindex="-1" value="">
                            </div>
                            <div class="clear">
                                    <input type="submit" value="Subscribe" name="subscribe"  id="mc-embedded-subscribe"  alt="Submit" class="link-button">
                                </div>
                            <br>
                            <br>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                <script type='text/javascript'>
                    (function($) {
                        window.fnames = new Array();
                        window.ftypes = new Array();
                        fnames[0] = 'EMAIL';
                        ftypes[0] = 'email';
                        fnames[1] = 'FNAME';
                        ftypes[1] = 'text';
                        fnames[2] = 'LNAME';
                        ftypes[2] = 'text';
                        fnames[3] = 'ADDRESS';
                        ftypes[3] = 'address';
                        fnames[4] = 'PHONE';
                        ftypes[4] = 'phone';
                        fnames[5] = 'BIRTHDAY';
                        ftypes[5] = 'birthday';
                    }(jQuery));
                    var $mcj = jQuery.noConflict(true);
                </script>
                <!-- Begin MailChimp End -->
            </div>
        </h2>
    </p>
    <img src="safi.png">
</body>
</html>
