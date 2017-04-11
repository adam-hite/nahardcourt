<?php 

/**
 * Add Pages to VC Template system
 */
if(!( function_exists('ebor_classic_template') )){
function ebor_classic_1_template($data){
    $template               = array();
    $template['name']       = '01. Pillar - Classic Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column el_class="text-center"][pillar_hero layout="intro-social" image="788"][vc_row_inner content_placement="bottom" el_class="text-left"][vc_column_inner width="2/12"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="575" img_size="full"][/vc_column_inner][vc_column_inner width="4/12"][vc_column_text]
		<p class="lead">A beautiful collection of
		hand-crafted web components</p>
		[/vc_column_text][/vc_column_inner][vc_column_inner width="2/12"][/vc_column_inner][/vc_row_inner][vc_empty_space][pillar_video_modal layout="embed-lozenge" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][/vc_column][/vc_row][vc_row css=".vc_custom_1465473898191{padding-bottom: 0px !important;}"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
		<h3 style="text-align: center;">Digital, Delivered.</h3>
		<p class="lead" style="text-align: center;">Pillar is a team of passionate designers, developers and artists working in print and digital.</p>
		[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_portfolio pppage="6" layout="grid-wide"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
		<h3 style="text-align: center;">Your Creative Collective</h3>
		<p class="lead" style="text-align: center;">Our diverse team comprises talent from a range of design disciplines working together to deliver effective solutions</p>
		[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_team layout="masonry"][/vc_column][/vc_row][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="775" css=".vc_custom_1465474323705{padding-top: 160px !important;padding-bottom: 60px !important;}"][vc_column width="1/4"][pillar_icon_box icon="icon-Bodybuilding" layout="large" alignment="text-center" title="16,000+"]<em>Customers strong</em>[/pillar_icon_box][/vc_column][vc_column width="1/4"][pillar_icon_box icon="icon-Fingerprint" layout="large" alignment="text-center" title="16"]<em>Passionate team members</em>[/pillar_icon_box][/vc_column][vc_column width="1/4"][pillar_icon_box icon="icon-Astronaut" layout="large" alignment="text-center" title="82"]<em>Launched startups</em>[/pillar_icon_box][/vc_column][vc_column width="1/4"][pillar_icon_box icon="icon-Cardigan" layout="large" alignment="text-center" title="Zero"]<em>Plaid cardigans</em>[/pillar_icon_box][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
		<h3 style="text-align: center;">Our Expertise</h3>
		<p class="lead" style="text-align: center;">We work across digital and print media to deliver bold, effective identities for businesses in all industries.</p>
		[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1465474814302{padding-bottom: 220px !important;}"][vc_column width="1/2"][pillar_icon_box icon="icon-Sidebar-Window" layout="side-small-color" title="INTERFACE DESIGN"]Pillar comes packed with flexible content blocks and Visual Composer Page Builder - this makes building your perfect layout easier than ever before.[/pillar_icon_box][pillar_icon_box icon="icon-Brain" layout="side-small-color" title="INTERNET OF THINGS"]Clever social integrations such as Mail Chimp, Compaign Monitor and styled Twitter feeds give your site a dynamic edge.[/pillar_icon_box][/vc_column][vc_column width="1/2"][pillar_icon_box icon="icon-RGB " layout="side-small-color" title="USER INTERACTION"]Combine multiple purpose-built elements to craft your perfect, conversion focussed landing page - and do it all in the comfort of your browser.[/pillar_icon_box][pillar_icon_box icon="icon-Astronaut" layout="side-small-color" title="PRODUCT DESIGN"]Flexible data attribute modifiers make customising elements fast and easy. Add overlays, scrims and adjust plugin parameters all from the HTML.[/pillar_icon_box][/vc_column][/vc_row][vc_row el_class="bg--secondary" css=".vc_custom_1465474835076{padding-bottom: 0px !important;}"][vc_column css=".vc_custom_1465474808912{margin-top: -160px !important;}"][pillar_testimonial pppage="5" layout="large" filter="9"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
		<h3 style="text-align: center;">News &amp; Views</h3>
		<p class="lead" style="text-align: center;">We share our thoughts on design, business and life in general. Check out the blog for our latest musings.</p>
		[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row css=".vc_custom_1465475051120{padding-bottom: 70px !important;}"][vc_column][pillar_blog pppage="3" type="cards-small"][vc_column_text]
		<p style="text-align: center;"><a class="btn" href="#"><span class="btn__text">View the blog</span></a></p>
		[/vc_column_text][/vc_column][/vc_row][vc_row el_class="bg--secondary" css=".vc_custom_1465474934818{padding-top: 70px !important;padding-bottom: 70px !important;}"][vc_column][pillar_client pppage="10"][/vc_column][/vc_row][vc_row el_class="bg--primary" css=".vc_custom_1465475092393{padding-top: 70px !important;padding-bottom: 10px !important;}"][vc_column][vc_column_text]
		<h4 style="text-align: center;">Interested in working with Pillar?</h4>
		<p style="text-align: center;"><a class="btn btn--sm" href="#"><span class="btn__text">LET'S TALK TURKEY</span></a></p>
		[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_classic_1_template' );
}

if(!( function_exists('ebor_corporate_1_template') )){
function ebor_corporate_1_template($data){
    $template               = array();
    $template['name']       = '02. Pillar - Corporate Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row" el_class="bg--dark"][vc_column][pillar_text_image image="760"][vc_column_text]
<h2>Build smart, effective websites in no time.</h2>
Pillar features a bevy of content blocks and layouts to create websites of almost any kind — easier than ever before.[/vc_column_text][pillar_video_modal layout="embed-small" colour="video-play-icon--light" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_text_image][/vc_column][/vc_row][vc_row el_class="bg--primary"][vc_column width="1/3"][pillar_icon_box icon="icon-Ship" layout="small" title="NEW STARTUPS"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" layout="small" title="PERSONAL PORTFOLIOS"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Shop-2" layout="small" title="ONLINE STOREFRONTS"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="bg--secondary"][vc_column][pillar_text_image layout="right" image="765"][vc_column_text]
<h3>Assemble pages with over 150 unique content blocks</h3>
Pillar combines smart, modern styling with all the features you’ll need to launch websites of almost any kind. Achieve results faster than ever with the included Visual Composer Page Builder.

<a class="btn btn--square" href="#"><span class="btn__text">LAUNCH BUILDER</span></a>[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row css=".vc_custom_1465473481559{padding-top: 70px !important;padding-bottom: 70px !important;}"][vc_column][pillar_client pppage="10"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_corporate_1_template' );
}

if(!( function_exists('ebor_startup_1_template') )){
function ebor_startup_1_template($data){
    $template               = array();
    $template['name']       = '03. Pillar - Startup Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column el_class="text-center"][pillar_hero layout="video-popup" image="745"][vc_column_text]
<h1 style="text-align: center;">Digital, Delivered.</h1>
<p class="lead" style="text-align: center;">Beautiful front-end components
built for modern startups.</p>

<div style="text-align: center;"><a class="btn" href="#"><span class="btn__text">PURCHASE NOW</span></a></div>
[/vc_column_text][pillar_video_modal layout="embed-small" colour="video-play-icon--light" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Working to build a better web.</h3>
<p class="lead" style="text-align: center;">Pillar combines smart, modern styling with all the features you’ll need to launch websites of almost any kind. Achieve results faster than ever with the included Visual Composer Builder.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="bg--secondary"][vc_column][pillar_text_image image="243"][vc_column_text]
<h3>Diverse, Beautiful Components</h3>
<p class="lead">Pillar features a bevy of content blocks and layouts to create your website.</p>
[/vc_column_text][vc_column_text]

<hr />

[/vc_column_text][pillar_icon_box icon="icon-Fingerprint" title="Over 2,000 Icons"]Pillar includes the Icons Mind kit with each purchase.[/pillar_icon_box][pillar_icon_box icon="icon-Support" title="Support Included"]Each Pillar purchase comes with 6 months support included.[/pillar_icon_box][/pillar_text_image][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Why do people love Pillar?</h3>
<p class="lead" style="text-align: center;">Built for designers and developers alike, Pillar combines an engaging look with squeaky-clean code.</p>
[/vc_column_text][pillar_tabs layout="tabs-4 text-center"][pillar_tabs_content icon="" title="Designers"]
<p style="text-align: center;"><img class="aligncenter size-medium wp-image-555" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/avatar-large-1-300x256.png" alt="avatar-large-1" width="300" height="256" /></p>

<h5 style="text-align: center;">— Lucas Greenberg, Designer</h5>
<blockquote>”Rock-solid flexibility and support. I’d expect no less from this team - Pillar has become my new standard ‘go-to’ template for great looking websites.“</blockquote>
[/pillar_tabs_content][pillar_tabs_content icon="" title="Developers"]
<p style="text-align: center;"><img class="aligncenter wp-image-750 size-medium" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/avatar-large-3-300x256.png" width="300" height="256" /></p>

<h5 style="text-align: center;">— Danni Gibson, Front-end Developer</h5>
<blockquote>“I've been using Medium Rare templates for a couple of years now - they're always highly polished and backed up by amazing support.”</blockquote>
[/pillar_tabs_content][/pillar_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="88" css=".vc_custom_1465472871493{padding-bottom: 220px !important;}"][vc_column][vc_column_text]
<h2 style="text-align: center;">Bold, Simple, <em>Robust.</em></h2>
<p class="lead" style="text-align: center;">Smart styling, unique demo layouts and Visual Composer Page Builder included.</p>


<hr />

[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][vc_column_text]
<h6>BEAUTIFULLY RESPONSIVE</h6>
Every one of Pillar’s stylish blocks are fully responsive, meaning that your site shines - regardless of the device your users.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<h6>CONTENT FOCUSSED</h6>
Featuring a multitude of ways to showcase your information, Pillar excels in unique and engaging content arrangements.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/3"][vc_column_text]
<h6>UNIQUE BUT ADAPTABLE</h6>
Offering a range of unique themed font pairings means that achieving the perfect visual tone for your project.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column width="1/3"][pillar_pricing_table icon="icon-Mustache-2" layout="minimal" title="Starter" price="FREE" button_text="Subscribe Now" button_url="#" image="101"]Up to four projects
using our basic licence[/pillar_pricing_table][/vc_column][vc_column width="1/3"][pillar_pricing_table icon="icon-Mustache-3" layout="minimal" title="Freelancer" price="19" button_text="Subscribe Now" button_url="#" currency="$" image="100"]Up to 20 projects
using our open licence[/pillar_pricing_table][/vc_column][vc_column width="1/3"][pillar_pricing_table icon="icon-Mustache-4" layout="minimal" title="Agency" price="69" button_text="Subscribe Now" button_url="#" currency="$" image="102"]Unlimited projects
using our commercial licence[/pillar_pricing_table][/vc_column][/vc_row][vc_row css=".vc_custom_1465473070435{padding-bottom: 0px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Start building with Pillar</h3>
<p class="lead" style="text-align: center;">We'd love to hear from you to discuss web design, product development or to hear your new startup idea.</p>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">LET'S TALK TURKEY</span></a></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1465473046404{padding-top: 70px !important;padding-bottom: 70px !important;}"][vc_column][pillar_client pppage="10"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_startup_1_template' );
}

if(!( function_exists('ebor_startup_2_template') )){
function ebor_startup_2_template($data){
    $template               = array();
    $template['name']       = '04. Pillar - Startup 2 Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row" el_class="text-center"][vc_column el_class="text-center"][pillar_hero layout="intro-social" image="1193"][vc_column_text]
<h1 class="h2" style="text-align: center;">Pillar makes the perfect base
for your startup's site.</h1>
<p style="text-align: center;">Forge an engaging online presence in a matter of minutes with
Pillar &amp; Visual Composer Page Builder</p>
[/vc_column_text][pillar_video_modal layout="embed-lozenge" text="Watch Overview" embed="https://www.youtube.com/watch?v=scxQy4aQPTY&amp;index=5&amp;list=PL6VzCcNewv9iwjzU_HMhDg51XP2i_mh6Q"][/pillar_hero][/vc_column][/vc_row][vc_row][vc_column width="1/2"][pillar_video_inline image="1195" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video.mp4"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="5/12"][vc_column_text]
<h3>Pillar's modular design makes site building easy</h3>
Pillar is a remarkably flexible and feature-complete HTML template built for modern startups, creatives, bloggers and more. Including tons of uniquely styled pages, Pillar combines aesthetic beauty with high-quality, semantic markup.[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1470146259777{padding-bottom: 220px !important;}"][vc_column width="1/3"][pillar_icon_box icon="icon-Ship" title="New Startups"]With a multitude of blocks, font combinations and colour schemes, Pillar makes it simple for bootstrapped startups to build engaging sites.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" title="Personal Portfolios"]Including a suite of filterable portfolio showcases and detailed case study pages, it's easy to forge your online presence in style and speed.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Shop-2" title="Online Storefronts"]Full e-commerce styling means that Pillar is ready for you to integrate with your favourite shopping cart system &amp;emdahs; we've kept bulky markup to a minimum[/pillar_icon_box][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="bg--secondary"][vc_column][pillar_text_image image="1196"][vc_column_text]
<h4>What makes Pillar different?</h4>
<p class="lead">Pillar comes packed with flexible content blocks and Variant Page Builder - this makes building your perfect layout easier than ever before.</p>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]
<h5>Demo Pages</h5>
With well over 100 total included pages, over 150 content blocks and a ton of pre-design homepage layouts, Pillar comes ready for your project.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h5>Premium Support</h5>
Our much-loved, timely support comes included with each purchase of Pillar. Access personal support and articles via our dedicated support forum.[/vc_column_text][/vc_column_inner][/vc_row_inner][/pillar_text_image][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h3 style="text-align: center;">What do customers think of Pillar?</h3>
<p class="lead" style="text-align: center;">In a short-time, Pillar has already become one of Themeforest's most popular templates.</p>
[/vc_column_text][pillar_testimonial pppage="3" layout="grid" filter="8"][/vc_column][/vc_row][vc_row el_class="bg--white"][vc_column][vc_column_text]
<h3 style="text-align: center;">Sign-up today and recieve our founders bonus</h3>
[/vc_column_text][contact-form-7 id="344"][vc_column_text]
<p style="text-align: center;">By signing up you agree to the <a href="#">Terms &amp; Conditions</a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_startup_2_template' );
}

if(!( function_exists('ebor_agency_1_template') )){
function ebor_agency_1_template($data){
    $template               = array();
    $template['name']       = '05. Pillar - Agency Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_slider][pillar_slider_content image="89"]
<h1 style="text-align: center;">Combine, Edit, Deploy.</h1>
<p class="lead" style="text-align: center;">Building a beautiful website is simple with Pillar</p>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">I LOVE PILLAR</span></a></p>
[/pillar_slider_content][pillar_slider_content image="272"]
<h1 style="text-align: center;">Your Site, Your Way.</h1>
<p class="lead" style="text-align: center;">Carefully styled, reusable elements and multiple colour and font options</p>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">I LOVE PILLAR</span></a></p>
[/pillar_slider_content][/pillar_slider][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h3 style="text-align: center;">It's Your Site, <em>Your Way.</em></h3>
<p class="lead" style="text-align: center;">Pillar is a team of passionate designers, developers and
artists working in print and digital.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/2"][vc_column_text]
<h5>A Modular Approach</h5>
Minimum viable product sticky note affordances prototype parallax unicorn quantitative vs. qualitative affordances grok responsive integrate. Waterfall is so 2000 and late user story prototype personas piverate viral intuitive disrupt responsive earned media user centered design. Paradigm thought leader bootstrapping ideate workflow disrupt human-centered design venture capital viral viral food-truck pair programming entrepreneur.[/vc_column_text][/vc_column][vc_column width="1/2"][pillar_skill_bar_block layout="horizontal-thin" icon="" title="Startups" amount="85"][pillar_skill_bar_block layout="horizontal-thin" icon="" title="Startups" amount="85"][pillar_skill_bar_block layout="horizontal-thin" icon="" title="Startups" amount="85"][pillar_skill_bar_block layout="horizontal-thin" icon="" title="Startups" amount="85"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_team layout="masonry"][/vc_column][/vc_row][vc_row el_class="bg--dark"][vc_column width="1/3"][vc_column_text]
<h6>YOUR SITE, YOUR WAY</h6>
Responsive intuitive user story engaging quantitative vs. qualitative SpaceTeam pitch deck co-working engaging pair programming fund integrate. Physical computing innovate pivot integrate fund disrupt latte driven.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h6>DEVELOPER FRIENDLY</h6>
Responsive intuitive user story engaging quantitative vs. qualitative SpaceTeam pitch deck co-working engaging pair programming fund integrate. Physical computing innovate pivot integrate fund disrupt latte driven.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h6>MODULAR &amp; REUSABLE</h6>
Responsive intuitive user story engaging quantitative vs. qualitative SpaceTeam pitch deck co-working engaging pair programming fund integrate. Physical computing innovate pivot integrate fund disrupt latte driven.[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Recent Work Showcase</h3>
<p class="lead" style="text-align: center;">We work across digital and print mediums to deliver bold, effective identities for business in all industries.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1465406668075{padding-bottom: 220px !important;}"][vc_column][pillar_portfolio pppage="6" layout="carousel-boxed"][/vc_column][/vc_row][vc_row el_class="bg--secondary" css=".vc_custom_1465405636386{padding-bottom: 0px !important;}"][vc_column css=".vc_custom_1465406674974{margin-top: -180px !important;}"][pillar_testimonial pppage="1" layout="large" filter="9"][/vc_column][/vc_row][vc_row el_class="bg--white" css=".vc_custom_1465405568262{padding-top: 70px !important;padding-bottom: 70px !important;}"][vc_column][pillar_client pppage="10"][/vc_column][/vc_row][vc_row el_class="bg--primary" css=".vc_custom_1465405591932{padding-top: 70px !important;padding-bottom: 20px !important;}"][vc_column][vc_column_text]
<h4 style="text-align: center;">Interested in working with Pillar?</h4>
<p style="text-align: center;"><a class="btn btn--sm" href="#"><span class="btn__text">LET'S TALK TURKEY</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_agency_1_template' );
}

if(!( function_exists('ebor_creative_1_template') )){
function ebor_creative_1_template($data){
    $template               = array();
    $template['name']       = '06. Pillar - Creative Homepage';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1465404274174{background-image: url(http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/large11.jpg?id=709) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text]<img class="size-medium wp-image-642 aligncenter" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/logo-large-dark-300x117.png" alt="logo-large-dark" width="300" height="117" />
<p style="text-align: center;">A stunning collection of
front-end web components.</p>
[/vc_column_text][vc_empty_space][pillar_video_inline layout="embed" image="90" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][vc_empty_space height="120px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Astronaut" layout="side-small" title="NEW STARTUPS"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" layout="side-small" title="PERSONAL PORTFOLIOS"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Bag-Coins" layout="side-small" title="DIGITAL STOREFRONTS"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_portfolio pppage="6" layout="carousel"][/vc_column][/vc_row][vc_row el_class="bg--white"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][pillar_testimonial filter="10"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row el_class="bg--primary" css=".vc_custom_1465405058760{padding-top: 70px !important;padding-bottom: 20px !important;}"][vc_column][vc_column_text]
<h4 style="text-align: center;">Interested in working with Pillar?</h4>
<p style="text-align: center;"><a class="btn btn--sm" href="#"><span class="btn__text">LET'S TALK TURKEY</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_creative_1_template' );
}

if(!( function_exists('ebor_splitcover_1_template') )){
function ebor_splitcover_1_template($data){
    $template               = array();
    $template['name']       = '07. Pillar - Split Cover Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero layout="split" image="521"][vc_column_text]<img class="logo" src="http://pillar.mediumra.re/img/logo-large-dark.png" alt="Pillar" />
<p class="lead">A beautiful collection of
hand-crafted web components</p>
<a class="btn btn--primary btn--lg" href="#"><span class="btn__text">Purchase Pillar</span></a>[/vc_column_text][/pillar_hero][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_splitcover_1_template' );
}

if(!( function_exists('ebor_elegant_1_template') )){
function ebor_elegant_1_template($data){
    $template               = array();
    $template['name']       = '08. Pillar - Elegant Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_video_background layout="embed" image="679" embed="JyNIJ8U03I0"][vc_column_text]
<p class="lead" style="text-align: center;">Pillar is a Chicago-based collective of passionate designers, developers and brand
strategists offering insight to some of the world's most admired brands.</p>
[/vc_column_text][/pillar_video_background][/vc_column][/vc_row][vc_row el_class="bg--dark"][vc_column width="3/4"][vc_column_text]
<h6>DIGITAL, DELIVERED.</h6>
<p class="lead">We are a global design agency specialising in the art of brand storytelling. We craft digital, graphic and 3 dimensional thinking, to create category leading brand experiences that have meaning, relevance and deliver extraordinary value.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h6>Recent Work</h6>
[/vc_column_text][pillar_portfolio][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="679"][vc_column][vc_column_text]
<h6>WORK WITH PILLAR</h6>
<p class="lead">A global design agency specialising in the
art of brand storytelling</p>
<a class="btn btn--sm" href="#"><span class="btn__text">ARRANGE A CONSULTATION</span></a>[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elegant_1_template' );
}

if(!( function_exists('ebor_listing_1_template') )){
function ebor_listing_1_template($data){
    $template               = array();
    $template['name']       = '09. Pillar - Listing Homepage';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1469105439767{padding-top: 220px !important;padding-bottom: 220px !important;}"][vc_column width="3/4"][vc_column_text]
<h3>Curated travel experiences <br class="hidden-xs" />from seasoned travellers and local experts</h3>
[/vc_column_text][vc_wp_search][vc_column_text]<em>or</em> <a href="#">browse all tours</a>[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_portfolio pppage="8" layout="masonry-wide"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_listing_1_template' );
}

if(!( function_exists('ebor_product_1_template') )){
function ebor_product_1_template($data){
    $template               = array();
    $template['name']       = '10. Pillar - Product 1 Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column el_class="text-center"][pillar_hero layout="video-popup" image="526"][vc_column_text]
<h1 style="text-align: center;">Build <em>beautiful</em> landing pages.</h1>
<p class="lead" style="text-align: center;">Combine multiple purpose-built elements to craft your perfect, conversion focussed landing page - and do it all in the comfort of your browser.</p>
[/vc_column_text][vc_empty_space height="52px"][pillar_video_modal layout="embed-small" colour="video-play-icon--light" color="video-play-icon--light" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Build landing pages with ease</h3>
<p class="lead" style="text-align: center;">Select from a diverse range of components and sections to build a highly effective landing page</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][pillar_icon_box icon="icon-Finger-Print" layout="boxed-icon" title="Collect Leads"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Fluorescent" layout="boxed-icon" title="Incite Customer Action"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Bar-Chart" layout="boxed-icon" title="Increase Conversions"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column width="7/12"][vc_single_image image="373" img_size="full"][/vc_column][vc_column width="5/12"][vc_column_text]
<h3>Your Site, <em>Your Way.</em></h3>
<p class="lead">A multitude of colour and font options make Pillar's look dynamic and adaptable.</p>
[/vc_column_text][pillar_icon_box icon="icon-Finger-Print" layout="combined" title="OVER 2,000 ICONS"]Pillar includes the premium Icons Mind icon kit: A stunning collection of icons to suit multiple purposes.[/pillar_icon_box][pillar_icon_box icon="icon-Photo-2" layout="combined" title="BEAUTIFUL TYPOGRAPHY"]Pillar includes attractive and flexible font pairs to suit a range of purposes - we've done the hunting for you you![/pillar_icon_box][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="376"][vc_column][vc_column_text]
<h3 style="text-align: center;">Customers love Pillar</h3>
[/vc_column_text][vc_empty_space][pillar_testimonial pppage="3"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Build landing pages with ease</h3>
<p class="lead" style="text-align: center;">With integrated Mail Chimp and Campaign Monitor support, collecting leads is a snap</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][pillar_icon_box icon="icon-Astronaut" layout="small" title="LAUNCH YOUR STARTUP"]Entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][pillar_icon_box icon="icon-Bag-Coins" layout="small" title="OPEN A SHOP"]Entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Ruler-2" layout="small" title="SHOWCASE YOUR WORK"]Entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][pillar_icon_box icon="icon-Fountain-Pen" layout="small" title="SHARE YOUR IDEAS"]Entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_pricing_table icon="" layout="emphasise" title="Buy Now" currency="$" price="59" button_text="Purchase Now" button_url="#"]
<p style="text-align: center;"> Buy as many one-use licenses as you need and start building beautiful sites today.</p>
[/pillar_pricing_table][/vc_column][/vc_row][vc_row css=".vc_custom_1465212866156{padding-bottom: 0px !important;}" el_class="bg--white"][vc_column width="1/2"][vc_column_text]
<h4>Keep In The Loop</h4>
<p class="lead">Subscribe for our monthly roundup of great free resources and updates.</p>
[/vc_column_text][contact-form-7 id="347"][/vc_column][vc_column width="1/2"][vc_single_image image="342" img_size="full"][/vc_column][/vc_row][vc_row el_class="bg--secondary" css=".vc_custom_1465212926312{padding-top: 60px !important;padding-bottom: 60px !important;}"][vc_column][pillar_client pppage="10"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_product_1_template' );
}

if(!( function_exists('ebor_product_2_template') )){
function ebor_product_2_template($data){
    $template               = array();
    $template['name']       = '11. Pillar - Product 2 Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero layout="half-form" shortcode="1400" image="560"][vc_column_text]
<h2>Build smart, effective websites in no time with Pillar</h2>
[/vc_column_text][pillar_video_modal layout="embed-small" colour="video-play-icon--light" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][/vc_column][/vc_row][vc_row css=".vc_custom_1465299266230{padding-bottom: 0px !important;}"][vc_column width="5/12"][vc_column_text]
<h3>It's Your Site, <em>Your Way.</em></h3>
<p class="lead">Pillar features a plethora of content blocks and layouts to create your website.</p>

<h5>Simple Demo Data Import</h5>
You can be setup and ready on no time using our simple demo data importer.
<h5>Beautiful Font Combinations</h5>
Achieve the right visual tone for your business with our helpfully themed font pairings.[/vc_column_text][/vc_column][vc_column width="7/12"][vc_single_image image="555" img_size="full"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column width="1/3" el_class="bg--white" css=".vc_custom_1465558611896{padding-top: 80px !important;padding-right: 80px !important;padding-bottom: 60px !important;padding-left: 80px !important;}"][pillar_icon_box icon="icon-Contrast" layout="large" alignment="text-center" title="Your Site, Your Way."]Offering a range of unique themed font pairings means that achieving the perfect visual tone for your project.[/pillar_icon_box][/vc_column][vc_column width="1/3" el_class="bg--primary" css=".vc_custom_1465558619074{padding-top: 80px !important;padding-right: 80px !important;padding-bottom: 60px !important;padding-left: 80px !important;}"][pillar_icon_box icon="icon-Code-Window" layout="large" alignment="text-center" title="Developer Friendly"]We've worked hard to make Pillar a flexible base of code from which developers can construct feature-rich sites.[/pillar_icon_box][/vc_column][vc_column width="1/3" el_class="bg--secondary" css=".vc_custom_1465558627000{padding-top: 80px !important;padding-right: 80px !important;padding-bottom: 60px !important;padding-left: 80px !important;}"][pillar_icon_box icon="icon-Split-Horizontal2Window" layout="large" alignment="text-center" title="Modular and Reusable"]Combine Pillar's hand-crafted components to create elegant, cohesive pages that work equally well as one or multi-page sites.[/pillar_icon_box][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="561"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h2 style="text-align: center;">Bold, Simple, <em>Robust.</em></h2>
<p class="lead" style="text-align: center;">Pillar features a bevvy of content blocks and layouts to create your website.</p>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Windows-2" layout="boxed-large" alignment="text-center" title="Lovingly Crafted Components"]Tailored for modern startups, portfolios shops and more.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Medal" layout="boxed-large" alignment="text-center" title="Highly Decorated Author"]Awarded by Envato for providing high quality products.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h3 style="text-align: center;">Customers Love Pillar</h3>
<p class="lead" style="text-align: center;">High quality deisgn and ease-of-use combine to form a product that
designers and developers are crazy about.</p>
[/vc_column_text][pillar_testimonial pppage="3" layout="grid" filter="8"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][pillar_pricing_table icon="" layout="image" title="Starter" price="FREE" button_text="Subscribe Now" button_url="#" image="101"]Up to four projects
using our basic licence[/pillar_pricing_table][/vc_column][vc_column width="1/3"][pillar_pricing_table icon="" layout="image" title="Freelancer" price="19" button_text="Subscribe Now" button_url="#" currency="$" image="100"]Comes with 6 months
of awesome support![/pillar_pricing_table][/vc_column][vc_column width="1/3"][pillar_pricing_table icon="" layout="image" title="Agency" price="69" button_text="Subscribe Now" button_url="#" currency="$" image="102"]You'll love Pillar
as much as we do![/pillar_pricing_table][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">Subscribe for updates and free resources</h4>
[/vc_column_text][contact-form-7 id="231"][vc_empty_space][vc_column_text]
<p style="text-align: center;">Don’t worry, we’ll only send you the best stuff - no spam.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row el_class="bg--white" css=".vc_custom_1465559832571{padding-top: 70px !important;padding-bottom: 70px !important;}"][vc_column][pillar_client pppage="10"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_product_2_template' );
}

if(!( function_exists('ebor_service_1_template') )){
function ebor_service_1_template($data){
    $template               = array();
    $template['name']       = '12. Pillar - Service 1 Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column el_class="text-center"][pillar_hero layout="video-form" shortcode="344" image="184"][pillar_video_modal layout="embed-large" colour="video-play-icon--light" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][vc_column_text]
<p class="lead" style="text-align: center;"><img class="aligncenter size-medium wp-image-575" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/logo-large-light-300x117.png" alt="logo-large-light" width="300" height="117" /></p>
<p class="lead" style="text-align: center;">A beautiful collection of
hand-crafted web components</p>
[/vc_column_text][/pillar_hero][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Build attractive sites in a snap.</h3>
<p class="lead" style="text-align: center;">Pillar combines smart, modern styling with all the features you’ll need to launch websites of almost any kind. Achieve results faster than ever with the included Variant Page Builder.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][pillar_icon_box icon="icon-Astronaut" layout="large-colored" alignment="text-center" title="Launch A Startup"]Piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Bag-Coins" layout="large-colored" alignment="text-center" title="Open A Shop"]Piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Pencil-Ruler" layout="large-colored" alignment="text-center" title="Showcase Your Work"]Piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="582"][vc_column width="1/2"][vc_column_text]
<h2>Beautiful Web Components</h2>
<p class="lead">Pillar comes packed with flexible content blocks and Variant Page Builder - this makes building your perfect layout easier than ever before.</p>
[/vc_column_text][vc_empty_space height="80px"][vc_column_text]
<h6>BEAUTIFULLY RESPONSIVE</h6>
Every one of Pillar’s stylish blocks are fully responsive,meaning that your site shines - regardless of the device your users are viewing from.[/vc_column_text][vc_empty_space height="40px"][vc_column_text]
<h6>SIX MONTHS FREE SUPPORT</h6>
Each purchase of Pillar comes with six months of our much-lauded customer support. We have our own dedicated support forum setup to help you.[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][vc_row css=".vc_custom_1465317096727{padding-bottom: 220px !important;}"][vc_column width="1/12"][/vc_column][vc_column width="4/12"][vc_column_text]
<h6 style="text-align: center;">FOR DESIGNERS</h6>
<h4 style="text-align: center;">Pillar forms the perfect base <br class="hidden-sm hidden-xs" />for design tinkering</h4>
<p style="text-align: center;">Built on a solid tyopgraphical scale, Pillar employs the conventional underpinnings that makes great designs just ‘work’.</p>
<p style="text-align: center;"><a class="btn" href="#"><span class="btn__text">MORE INFORMATION</span></a></p>
[/vc_column_text][/vc_column][vc_column width="2/12"][/vc_column][vc_column width="4/12"][vc_column_text]
<h6 style="text-align: center;">FOR DEVELOPERS</h6>
<h4 style="text-align: center;">Robust and semantic <br class="hidden-sm hidden-xs" />markup for easy editing</h4>
<p style="text-align: center;">We’ve kept developers front-of-mind when developing Pillar, so expect clean code, extensible data attribute modifiers and more.</p>
<p style="text-align: center;"><a class="btn" href="#"><span class="btn__text">SEE THE DOCS</span></a></p>
[/vc_column_text][/vc_column][vc_column width="1/12"][/vc_column][/vc_row][vc_row el_class="bg--secondary" css=".vc_custom_1465316561166{padding-bottom: 0px !important;}"][vc_column css=".vc_custom_1465316607522{margin-top: -180px !important;}"][pillar_testimonial pppage="1" layout="large" filter="9"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_service_1_template' );
}

if(!( function_exists('ebor_service_2_template') )){
function ebor_service_2_template($data){
    $template               = array();
    $template['name']       = '13. Pillar - Service 2 Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column el_class="text-center"][pillar_hero layout="video-popup" image="549"][vc_column_text]
<h2 style="text-align: center;">Pillar is a lovingly crafted set of
components for the web</h2>
<p class="lead" style="text-align: center;">Free 30 day trial - No credit card required.</p>
[/vc_column_text][vc_empty_space height="52px"][pillar_video_modal layout="embed-small" colour="video-play-icon--light" color="video-play-icon--light" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][/vc_column][/vc_row][vc_row css=".vc_custom_1465299173533{padding-top: 60px !important;padding-bottom: 50px !important;}" el_class="bg--white"][vc_column][contact-form-7 id="344"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_service_2_template' );
}

if(!( function_exists('ebor_service_3_template') )){
function ebor_service_3_template($data){
    $template               = array();
    $template['name']       = '14. Pillar - Service 3 Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero layout="video-half" image="582" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video.mp4" ogv="http://tommustester.wpengine.com/wp-content/uploads/2016/06/video.ogv"][vc_column_text]
<h2 style="text-align: center;">Start a conversation.</h2>
<p class="lead" style="text-align: center;">Browse and connect with employers from all over the world.</p>
[/vc_column_text][contact-form-7 id="344"][/pillar_hero][/vc_column][/vc_row][vc_row el_class="text-center bg--secondary" css=".vc_custom_1465319618927{padding-top: 0px !important;}"][vc_column width="1/3" css=".vc_custom_1465319579558{margin-top: -100px !important;}"][pillar_skill_bar_block layout="icon-radial" icon="icon-Notepad" amount="33"][vc_empty_space][vc_column_text]
<h5 style="text-align: center;">1. Add Your Details</h5>
<p style="text-align: center;">Our smart profile software <br class="hidden-sm hidden-xs" />makes it fast and fun</p>
[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1465319599488{margin-top: -100px !important;}"][pillar_skill_bar_block layout="icon-radial" icon="icon-Speach-BubbleDialog" amount="66"][vc_empty_space][vc_column_text]
<h5 style="text-align: center;">2. Connect With Employers</h5>
<p style="text-align: center;">We facilitate casual first-round <br class="hidden-sm hidden-xs" />Q&amp;A sessions</p>
[/vc_column_text][/vc_column][vc_column width="1/3" css=".vc_custom_1465319605193{margin-top: -100px !important;}"][pillar_skill_bar_block layout="icon-radial" icon="icon-Trophy" amount="100"][vc_empty_space][vc_column_text]
<h5 style="text-align: center;">3. Get Hired!</h5>
<p style="text-align: center;">Receive offers and take your pick <br class="hidden-sm hidden-xs" />of the best jobs</p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_service_3_template' );
}

if(!( function_exists('ebor_service_4_template') )){
function ebor_service_4_template($data){
    $template               = array();
    $template['name']       = '15. Pillar - Service 4 Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column el_class="text-center"][pillar_hero layout="overlay" image="636"][vc_column_text]
<h1 style="text-align: center;">Combine, Edit, Deploy.</h1>
<p class="lead" style="text-align: center;">Building a beautiful website is simple with Pillar and Visual Composer</p>
[/vc_column_text][pillar_video_modal layout="embed-small" colour="video-play-icon--light" text="Watch the Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column width="1/2"][pillar_text_image layout="boxed" image="201"][vc_column_text]
<h4 style="text-align: center;">Build Sites Live</h4>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">TRY THE BUILDER</span></a></p>
[/vc_column_text][/pillar_text_image][/vc_column][vc_column width="1/2"][pillar_text_image layout="boxed" image="202"][vc_column_text]
<h4 style="text-align: center;">Incredible Value Package</h4>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">PURCHASE NOW</span></a></p>
[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Working to build a better web.</h3>
<p class="lead" style="text-align: center;">Pillar combines smart, modern styling with all the features you’ll need to launch websites of almost any kind. Achieve results faster than ever with the included Visual Composer Plugin.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][pillar_icon_box icon="icon-Astronaut" layout="boxed-large" alignment="text-center" title="New Startups"]Pillar features a bevy of content blocks and layouts to create your website.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" layout="boxed-large" alignment="text-center" title="Personal Portfolios"]Pillar features a bevy of content blocks and layouts to create your website.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Bag" layout="boxed-large" alignment="text-center" title="Online Storefronts"]Pillar features a bevy of content blocks and layouts to create your website.[/pillar_icon_box][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">More Information</span></a></p>
[/vc_column_text][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="202"][vc_column][vc_column_text]
<h3 style="text-align: center;">Customers love Pillar</h3>
[/vc_column_text][pillar_testimonial filter="10"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][pillar_pricing_table icon="" layout="blank" title="Starter" price="FREE" button_text="Subscribe Now" button_url="#"]Up to four projects
using our basic licence[/pillar_pricing_table][/vc_column][vc_column width="1/3"][pillar_pricing_table icon="" layout="emphasise" title="Freelancer" price="19" button_text="Subscribe Now" button_url="#" currency="$"]Up to 20 projects
using our open licence[/pillar_pricing_table][/vc_column][vc_column width="1/3"][pillar_pricing_table icon="" layout="blank" title="Agency" price="69" button_text="Subscribe Now" button_url="#" currency="$"]Unlimited projects
using our commercial licence[/pillar_pricing_table][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column][vc_column_text]
<h4 style="text-align: center;">Subscribe for updates and resources</h4>
<p class="lead" style="text-align: center;">Stay in the loop with our monthly round-up of important news updates.</p>
[/vc_column_text][contact-form-7 id="344"][/vc_column][/vc_row][vc_row el_class="bg--secondary" css=".vc_custom_1465392734690{padding-top: 60px !important;padding-bottom: 60px !important;}"][vc_column][pillar_client pppage="10"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_service_4_template' );
}

if(!( function_exists('ebor_application_1_template') )){
function ebor_application_1_template($data){
    $template               = array();
    $template['name']       = '16. Pillar - Application Homepage';
    $template['content']    = <<<CONTENT
		[vc_row el_class="bg--secondary"][vc_column][vc_column_text]
<p class="lead"><img class="size-medium wp-image-642 aligncenter" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/logo-large-dark-300x117.png" alt="logo-large-dark" width="300" height="117" /></p>
<p class="lead" style="text-align: center;">A stunning collection of
front-end web components.</p>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">TAKE A TOUR</span></a> <a class="btn" href="#"><span class="btn__text"><i class="socicon-apple"></i> GET IT ON THE APP STORE</span></a></p>
[/vc_column_text][vc_empty_space][vc_single_image image="644" img_size="full" alignment="center" css=".vc_custom_1465393589434{margin-bottom: -330px !important;}"][/vc_column][/vc_row][vc_row css=".vc_custom_1465393594510{padding-top: 220px !important;}"][vc_column width="1/3"][pillar_icon_box icon="icon-Speach-BubbleDialog" layout="boxed-large" title="Chat With Friends"]Pillar features a bevy of content blocks and layouts to create your website.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Photos" layout="boxed-large" title="Share Moments"]A multitude of colour and font options make Pillar's look dynamic and adaptable.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Pizza-Slice" layout="boxed-large" title="Organize Events"]Buy as many one-use licenses as you need and start building beautiful sites today.[/pillar_icon_box][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="648"][vc_column el_class="text-center"][pillar_video_modal layout="embed-large" colour="video-play-icon--light" text="How does Pillar work?" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h3 style="text-align: center;">Showcase Features &amp; Benefits</h3>
<p class="lead" style="text-align: center;">Pillar features a bevvy of content blocks and layouts to create your website.</p>
[/vc_column_text][vc_empty_space height="52px"][vc_row_inner content_placement="middle"][vc_column_inner width="3/12"][vc_empty_space height="120px"][pillar_icon_box icon="icon-Fingerprint-2" alignment="text-right" title="Over 2,000 Icons"]Pillar includes the Icons Mind kit with each purchase.[/pillar_icon_box][pillar_icon_box icon="icon-Approved-Window" alignment="text-right" title="Intuitive Markup"]Focussed on readability and performance: Tinker on![/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="650" img_size="full" alignment="center"][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="3/12"][vc_empty_space height="120px"][pillar_icon_box icon="icon-Support" title="Top Notch Support"]Each purchase of Pillar includes 6 months of support.[/pillar_icon_box][pillar_icon_box icon="icon-Box-Open" title="Builder Included"]Assemble pages with the included Visual Composer Page Builder.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row el_class="bg--dark"][vc_column][vc_column_text]
<h4 style="text-align: center;">Screenshot Showcase</h4>
[/vc_column_text][pillar_carousel image="666,667,668,669,670,671"][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column][vc_column_text]
<h3 style="text-align: center;">Bold, Simple, Robust.</h3>
<p class="lead" style="text-align: center;">Pillar features a bevvy of content blocks and layouts to create your website.</p>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="4/12"][pillar_icon_box icon="icon-Orientation-2" layout="combined" title="BEAUTIFULLY RESPONSIVE"]Every one of Pillar’s stylish blocks are fully responsive,meaning that your site shines - regardless of the device your users are viewing from.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="4/12"][pillar_icon_box icon="icon-People-onCloud" layout="combined" title="SIX MONTHS FREE SUPPORT"]Each purchase of Pillar comes with six months of our much-lauded customer support. We have our own dedicated support forum setup to help you.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][vc_single_image image="644" img_size="full" alignment="center" css=".vc_custom_1465394118136{margin-bottom: -330px !important;}"][/vc_column][/vc_row][vc_row css=".vc_custom_1465394396201{padding-top: 200px !important;}"][vc_column width="1/12"][/vc_column][vc_column width="5/12" el_class="bg--white" css=".vc_custom_1465394307005{padding: 60px !important;}"][vc_column_text]
<h4 style="text-align: center;">Keep Informed</h4>
<p class="lead" style="text-align: center;">Subscribe for free resources and news updates.</p>
[/vc_column_text][contact-form-7 id="347"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="3/12"][vc_empty_space][vc_column_text]
<h6>FREE RESOURCES</h6>
Our team of designers give back with mockups, logos and tons more.
<h6>EXPERT INTERVIEWS</h6>
We speak with some of the web’s foremost designers and developers on a range of topics.
<h6>MONTHLY PRIZES</h6>
As if the free resources weren’t enough - we give away a sweet design stash each month.[/vc_column_text][/vc_column][vc_column width="2/12"][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="272" css=".vc_custom_1465401921000{padding-bottom: 70px !important;}"][vc_column][vc_column_text]
<p style="text-align: center;"><a class="btn" href="#"><span class="btn__text"><i class="socicon-apple"></i>  Download for iOS</span></a> <a class="btn" href="#"><span class="btn__text"><i class="socicon-play"></i>  Download for Android</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_application_1_template' );
}

if(!( function_exists('ebor_landingpage_1_template') )){
function ebor_landingpage_1_template($data){
    $template               = array();
    $template['name']       = '17. Pillar - Landing Page Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero layout="video-popup" image="907"][vc_column_text]<img class="size-medium wp-image-575 aligncenter" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/logo-large-light-300x117.png" alt="logo-large-light" width="300" height="117" />
<p class="lead" style="text-align: center;">A collection of carefully crafted
pages and components for modern startups.</p>
<p style="text-align: center;"><a class="btn btn--primary inner-link" href="#demos"><span class="btn__text">EXPLORE HOMEPAGE DEMOS</span></a></p>
[/vc_column_text][vc_empty_space height="52px"][vc_column_text]
<p style="text-align: center;"><a class="btn btn--primary btn--merge" href="https://www.youtube.com/playlist?list=PL6VzCcNewv9iwjzU_HMhDg51XP2i_mh6Q" target="_blank"><span class="btn__text">2+ Hours of Video Docs</span></a><a class="btn btn--primary" href="https://tommusrhodus.ticksy.com/articles/100004468/?print" target="_blank"><span class="btn__text">Comprehensive Written Docs</span></a></p>
[/vc_column_text][/pillar_hero][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image layout="left-big" image="908"][vc_column_text]
<h3>Bold, Flexible, <em>Robust.</em></h3>
<p class="lead">Pillar features a block-based design that enables near unlimited page combinations</p>
[/vc_column_text][vc_empty_space][pillar_icon_box icon="icon-Love-Window" layout="side-small-color" title="Visual Composer Page Builder"]Building beautiful websites has never been this easy, or fun! Visual Composer allows you to assemble, edit content and adjust style options: all in the comfort of your browser.[/pillar_icon_box][pillar_icon_box icon="icon-File-Edit" layout="side-small-color" title="100+ Demo Pages"]Kickstart your project with our vast selection of carefully crafted demo pages, or build your own with uniquely styled content blocks.[/pillar_icon_box][/pillar_text_image][/vc_column][/vc_row][vc_row el_class="bg--secondary" css=".vc_custom_1465576563404{padding-bottom: 30px !important;}" el_id="demos"][vc_column][vc_column_text]
<h3 style="text-align: center;">Multipurpose Homepage Demos</h3>
[/vc_column_text][/vc_column][/vc_row][vc_row el_class="bg--secondary" css=".vc_custom_1465576430177{padding-top: 10px !important;}"][vc_column width="1/2"][pillar_card type="vertical-link" image="919" title="Pillar Classic" subtitle="Multipurpose Business" link="/homepages/classic/"][/pillar_card][pillar_card type="vertical-link" image="1200" title="Startup 2" subtitle="Multipurpose Business" link="/homepages/startup-2/"][/pillar_card][pillar_card type="vertical-link" image="1089" title="Corporate" subtitle="Multipurpose Business" link="/homepages/corporate/"][/pillar_card][pillar_card type="vertical-link" image="923" title="Split Cover" subtitle="Multipurpose Business" link="/homepages/split-cover/"][/pillar_card][pillar_card type="vertical-link" image="1199" title="Politician" subtitle="Multipurpose Landing" link="/homepages/politician/"][/pillar_card][pillar_card type="vertical-link" image="1090" title="Listing" subtitle="Multipurpose Landing" link="/homepages/listing/"][/pillar_card][pillar_card type="vertical-link" image="927" title="Service 1" subtitle="Multipurpose Landing" link="http://pillar.tommusdemos.wpengine.com/homepages/service-1/"][/pillar_card][pillar_card type="vertical-link" image="929" title="Service 3" subtitle="Multipurpose Landing" link="/homepages/service-3/"][/pillar_card][pillar_card type="vertical-link" image="932" title="Application" subtitle="Multipurpose Landing" link="/homepages/application/"][/pillar_card][pillar_card type="vertical-link" image="934" title="Shop Slider" subtitle="Multipurpose Store" link="/homepages/shop-slider/"][/pillar_card][pillar_card type="vertical-link" image="936" title="Two Columns" subtitle="Multipurpose Portfolio" link="/homepages/column/"][/pillar_card][pillar_card type="vertical-link" image="938" title="Personal" subtitle="Multipurpose Portfolio" link="/homepages/personal/"][/pillar_card][/vc_column][vc_column width="1/2"][pillar_card type="vertical-link" image="920" title="Startup" subtitle="Multipurpose Business" link="/homepages/startup/"][/pillar_card][pillar_card type="vertical-link" image="921" title="Agency" subtitle="Multipurpose Business" link="/homepages/agency/"][/pillar_card][pillar_card type="vertical-link" image="922" title="Creative" subtitle="Multipurpose Business" link="/homepages/creative/"][/pillar_card][pillar_card type="vertical-link" image="924" title="Elegant" subtitle="Multipurpose Business" link="/homepages/elegant/"][/pillar_card][pillar_card type="vertical-link" image="925" title="Product" subtitle="Multipurpose Landing" link="/homepages/product-1/"][/pillar_card][pillar_card type="vertical-link" image="926" title="Product 2" subtitle="Multipurpose Landing" link="/homepages/product-2/"][/pillar_card][pillar_card type="vertical-link" image="928" title="Service 2" subtitle="Multipurpose Landing" link="/homepages/service-2/"][/pillar_card][pillar_card type="vertical-link" image="931" title="Service 4" subtitle="Multipurpose Landing" link="/homepages/service-4/"][/pillar_card][pillar_card type="vertical-link" image="933" title="Shop Media" subtitle="Multipurpose Store" link="/homepages/shop-media/"][/pillar_card][pillar_card type="vertical-link" image="935" title="Case Studies" subtitle="Multipurpose Portfolio" link="/homepages/case-studies/"][/pillar_card][pillar_card type="vertical-link" image="937" title="Fullwidth" subtitle="Multipurpose Portfolio" link="/homepages/fullwidth/"][/pillar_card][pillar_card type="vertical-link" image="1383" title="Niche" subtitle="Wedding" link="/homepages/wedding/"][/pillar_card][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h3 style="text-align: center;">Your Site, <em>Your Way.</em></h3>
<p class="lead" style="text-align: center;">With a plethora of pre-designed components and customization
options — it's never been easier to build a beautiful website.</p>
[/vc_column_text][vc_empty_space height="52px"][vc_row_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Duplicate-Layer" layout="side-small-color" title="OVER 150 CONTENT BLOCKS"]The possibilities are endless with Pillar's extensive array of pre-made content blocks. Combine and edit them in Visual Composer for fast, easy page building.[/pillar_icon_box][pillar_icon_box icon="icon-Finger-Print" layout="side-small-color" title="PREMIUM ICON KIT"]Pillar includes the premium Icons Mind icon kit ($59 value). Choose from over 2,000 beautiful, vector line icons — suitable for all purposes.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Font-Window" layout="side-small-color" title="BEAUTIFUL TYPOGRAPHY"]Pillar includes carefully curated font pairs complementing a wide range of design styles allowing you to completely change the look and feel to suit your needs.[/pillar_icon_box][pillar_icon_box icon="icon-Support" layout="side-small-color" title="6 MONTHS SUPPORT"]Our much-loved, timely support comes included with each purchase of Pillar. Access personal support and articles via our dedicated support forum.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][vc_single_image image="915" img_size="full"][/vc_column][/vc_row][vc_row el_class="bg--white"][vc_column][vc_column_text]
<h3 style="text-align: center;">Start building a beautiful website</h3>
<p style="text-align: center;"><a class="btn btn--primary" href="#purchase-template"><span class="btn__text">Purchase Pillar</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_landingpage_1_template' );
}

if(!( function_exists('ebor_politician_1_template') )){
function ebor_politician_1_template($data){
    $template               = array();
    $template['name']       = '18. Pillar - Politician Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero parallax="parallax-off" image="1172"][vc_column_text]
<h1>I'm fighting for a fair go for all Australians</h1>
[/vc_column_text][/pillar_hero][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column width="5/12" el_class="boxed bg--white box-shadow"][contact-form-7 id="347"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="6/12" css=".vc_custom_1470146937754{padding-top: 200px !important;}"][vc_column_text]
<h3>I stand for Education, Business &amp; Affordable Health Care.</h3>
As a young man, I worked in Chicago communities where many found dignity and peace in their Muslim faith. That is in Israel's interest, Palestine's interest, America's interest, and the world's interest. So let me be clear: no system of government can or should be imposed upon one nation by any other.[/vc_column_text][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column][pillar_blog pppage="3" type="cards-small"][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column width="5/12"][vc_column_text]
<h3>"Your Child, Our Future". Innovation through education.</h3>
Pillar is a remarkably flexible and feature-complete HTML template built for modern startups, creatives, bloggers and more. Including tons of uniquely styled pages, Pillar combines aesthetic beauty with high-quality, semantic markup.[/vc_column_text][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="6/12"][pillar_video_inline image="1197" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video.mp4"][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column][vc_column_text]
<h4 style="text-align: center;">Subscribe for updates and events</h4>
<p class="lead" style="text-align: center;">Stay in the loop with our monthly round-up of important news updates.</p>

[/vc_column_text][contact-form-7 id="344"][/vc_column][/vc_row][vc_row el_class="bg--primary" css=".vc_custom_1470147553763{padding-top: 80px !important;padding-bottom: 60px !important;}"][vc_column][vc_column_text]
<h4 style="text-align: center;">Interested in contributing to the cause?</h4>
<p style="text-align: center;"><a class="btn btn--sm" href="#"><span class="btn__text">DONATE TODAY</span></a></p>

[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_politician_1_template' );
}

if(!( function_exists('ebor_wedding_1_template') )){
function ebor_wedding_1_template($data){
    $template               = array();
    $template['name']       = '19. Pillar - Wedding Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero layout="intro-social" image="1317"][vc_column_text]
<h1 class="" style="text-align: center;">Sam Gibbs <i class="icon-Heart"></i> Aisha Roberts</h1>
<p style="text-align: center;">August 6th 2017, Flinders Ranges, Victoria</p>
[/vc_column_text][/pillar_hero][/vc_column][/vc_row][vc_row el_class="bg--white"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Not your standard love story…</h3>
<p style="text-align: center;">You have been my best friend, mentor, playmate, confidant, and my greatest challenge. But most importantly, you are the love of my life and you make me happier than I could ever imagine and more loved than I ever thought possible.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image image="1318"][vc_column_text]
<h4>Words from the husband to be…</h4>
You have been my best friend, mentor, playmate, confidant, and my greatest challenge. But most importantly, you are the love of my life and you make me happier than I could ever imagine and more loved than I ever thought possible.

I love you for your beauty, your intelligence, your kindnessâ€¦ and for the way you always know how to make me feel so special. So on top of all the other vows that I will make to you on our wedding day, I also vow to always appreciate how lucky I am.

<span class="type--italic">— Sam</span>[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="bg--white"][vc_column][pillar_text_image layout="right" image="1319"][vc_column_text]
<h4>Words from the wife to be…</h4>
You have been my best friend, mentor, playmate, confidant, and my greatest challenge. But most importantly, you are the love of my life and you make me happier than I could ever imagine and more loved than I ever thought possible.

I love you for your beauty, your intelligence, your kindnessâ€¦ and for the way you always know how to make me feel so special. So on top of all the other vows that I will make to you on our wedding day, I also vow to always appreciate how lucky I am.
<h4><span class="type--italic">— Aisha XX</span></h4>
[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="1316"][vc_column width="2/12"][/vc_column][vc_column width="4/12"][vc_column_text]
<h4 style="text-align: center;">Ceremony</h4>
<p style="text-align: center;"><strong>Montrose Vineyard</strong>
2:30pm — 3:30pm
65 Chilvers Road
Flinders Ranges, VIC</p>
[/vc_column_text][/vc_column][vc_column width="4/12"][vc_column_text]
<h4 style="text-align: center;">Reception</h4>
<p style="text-align: center;"><strong>Flinders Country Club</strong>
4:30pm — Late
1021 Greenvale Road
Flinders Ranges, VIC</p>
[/vc_column_text][/vc_column][vc_column width="2/12"][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h3 style="text-align: center;">Say you'll be there…</h3>
<p style="text-align: center;">Please let us know if you can make it by July 10th at the latest, preesh!</p>
[/vc_column_text][contact-form-7 id="1401"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Gift Registry</h3>
<p style="text-align: center;">If you'd like to bring a gift, we have registries at the following stores. Alternatively please feel free to make a donation to <a href="http://pillar.tommusdemos.wpengine.com/homepages/wedding/#">World Vision</a> in lieu of a gift.</p>
[/vc_column_text][vc_empty_space height="80px"][pillar_client][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_wedding_1_template' );
}

if(!( function_exists('ebor_wedding_1_template') )){
function ebor_wedding_1_template($data){
    $template               = array();
    $template['name']       = '19. Pillar - Wedding Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero layout="intro-social" image="1317"][vc_column_text]
<h1 class="" style="text-align: center;">Sam Gibbs <i class="icon-Heart"></i> Aisha Roberts</h1>
<p style="text-align: center;">August 6th 2017, Flinders Ranges, Victoria</p>
[/vc_column_text][/pillar_hero][/vc_column][/vc_row][vc_row el_class="bg--white"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Not your standard love story…</h3>
<p style="text-align: center;">You have been my best friend, mentor, playmate, confidant, and my greatest challenge. But most importantly, you are the love of my life and you make me happier than I could ever imagine and more loved than I ever thought possible.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image image="1318"][vc_column_text]
<h4>Words from the husband to be…</h4>
You have been my best friend, mentor, playmate, confidant, and my greatest challenge. But most importantly, you are the love of my life and you make me happier than I could ever imagine and more loved than I ever thought possible.

I love you for your beauty, your intelligence, your kindnessâ€¦ and for the way you always know how to make me feel so special. So on top of all the other vows that I will make to you on our wedding day, I also vow to always appreciate how lucky I am.

<span class="type--italic">— Sam</span>[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="bg--white"][vc_column][pillar_text_image layout="right" image="1319"][vc_column_text]
<h4>Words from the wife to be…</h4>
You have been my best friend, mentor, playmate, confidant, and my greatest challenge. But most importantly, you are the love of my life and you make me happier than I could ever imagine and more loved than I ever thought possible.

I love you for your beauty, your intelligence, your kindnessâ€¦ and for the way you always know how to make me feel so special. So on top of all the other vows that I will make to you on our wedding day, I also vow to always appreciate how lucky I am.
<h4><span class="type--italic">— Aisha XX</span></h4>
[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="1316"][vc_column width="2/12"][/vc_column][vc_column width="4/12"][vc_column_text]
<h4 style="text-align: center;">Ceremony</h4>
<p style="text-align: center;"><strong>Montrose Vineyard</strong>
2:30pm — 3:30pm
65 Chilvers Road
Flinders Ranges, VIC</p>
[/vc_column_text][/vc_column][vc_column width="4/12"][vc_column_text]
<h4 style="text-align: center;">Reception</h4>
<p style="text-align: center;"><strong>Flinders Country Club</strong>
4:30pm — Late
1021 Greenvale Road
Flinders Ranges, VIC</p>
[/vc_column_text][/vc_column][vc_column width="2/12"][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h3 style="text-align: center;">Say you'll be there…</h3>
<p style="text-align: center;">Please let us know if you can make it by July 10th at the latest, preesh!</p>
[/vc_column_text][contact-form-7 id="1401"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Gift Registry</h3>
<p style="text-align: center;">If you'd like to bring a gift, we have registries at the following stores. Alternatively please feel free to make a donation to <a href="http://pillar.tommusdemos.wpengine.com/homepages/wedding/#">World Vision</a> in lieu of a gift.</p>
[/vc_column_text][vc_empty_space height="80px"][pillar_client][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_wedding_1_template' );
}

if(!( function_exists('ebor_shopmedia_1_template') )){
function ebor_shopmedia_1_template($data){
    $template               = array();
    $template['name']       = '20. Pillar - Shop Media Homepage';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1465573162137{background-image: url(http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/large11.jpg?id=709) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="10/12"][vc_column_text]<img class="size-medium wp-image-642 aligncenter" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/logo-large-dark-300x117.png" alt="logo-large-dark" width="300" height="117" />
<p class="lead" style="text-align: center;">A stunning collection of
front-end web components.</p>
[/vc_column_text][vc_empty_space][pillar_video_inline layout="embed" image="848" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1465573246917{padding-top: 160px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h6 style="text-align: center;">FALL COLLECTION 2016</h6>
<p class="lead" style="text-align: center;">Robust design, sustainable production and honest pricing are the cornerstones of the Pillar vision — Ours values of craftsmanship and authenticity pervade every piece.</p>
<img class="signature aligncenter" src="http://pillar.mediumra.re/img/signature.png" alt="signature" width="722" height="414" />[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_product layout="masonry-wide"][vc_empty_space height="52px"][vc_column_text]
<p style="text-align: center;"><a class="btn" href="#"><span class="btn__text">View Full Collection</span></a></p>
[/vc_column_text][vc_empty_space][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="89" css=".vc_custom_1465573854725{padding-top: 90px !important;padding-bottom: 70px !important;}"][vc_column width="1/2"][vc_column_text css=".vc_custom_1465573881436{margin-top: 10px !important;}"]
<h4>Subscribe for exclusive deals and updates</h4>
[/vc_column_text][/vc_column][vc_column width="1/2"][contact-form-7 id="231"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_shopmedia_1_template' );
}

if(!( function_exists('ebor_shopmedia_1_template') )){
function ebor_shopmedia_1_template($data){
    $template               = array();
    $template['name']       = '20. Pillar - Shop Media Homepage';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1465573162137{background-image: url(http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/large11.jpg?id=709) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="10/12"][vc_column_text]<img class="size-medium wp-image-642 aligncenter" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/logo-large-dark-300x117.png" alt="logo-large-dark" width="300" height="117" />
<p class="lead" style="text-align: center;">A stunning collection of
front-end web components.</p>
[/vc_column_text][vc_empty_space][pillar_video_inline layout="embed" image="848" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1465573246917{padding-top: 160px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h6 style="text-align: center;">FALL COLLECTION 2016</h6>
<p class="lead" style="text-align: center;">Robust design, sustainable production and honest pricing are the cornerstones of the Pillar vision — Ours values of craftsmanship and authenticity pervade every piece.</p>
<img class="signature aligncenter" src="http://pillar.mediumra.re/img/signature.png" alt="signature" width="722" height="414" />[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_product layout="masonry-wide"][vc_empty_space height="52px"][vc_column_text]
<p style="text-align: center;"><a class="btn" href="#"><span class="btn__text">View Full Collection</span></a></p>
[/vc_column_text][vc_empty_space][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="89" css=".vc_custom_1465573854725{padding-top: 90px !important;padding-bottom: 70px !important;}"][vc_column width="1/2"][vc_column_text css=".vc_custom_1465573881436{margin-top: 10px !important;}"]
<h4>Subscribe for exclusive deals and updates</h4>
[/vc_column_text][/vc_column][vc_column width="1/2"][contact-form-7 id="231"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_shopmedia_1_template' );
}

if(!( function_exists('ebor_shopslider_1_template') )){
function ebor_shopslider_1_template($data){
    $template               = array();
    $template['name']       = '21. Pillar - Shop Slider Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_slider][pillar_slider_content image="848"]
<h1 style="text-align: center;">MADE FOR EVERYDAY.</h1>
<p class="lead" style="text-align: center;"><em>Finely crafted, timeless fashion pieces selected by the Pillar team</em></p>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">VIEW COLLECTION</span></a></p>

[/pillar_slider_content][pillar_slider_content image="760"]
<h1 style="text-align: center;">MADE FOR EVERYDAY.</h1>
<p class="lead" style="text-align: center;"><em>Finely crafted, timeless fashion pieces selected by the Pillar team</em></p>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">VIEW COLLECTION</span></a></p>

[/pillar_slider_content][/pillar_slider][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h6 style="text-align: center;">FALL COLLECTION 2016</h6>
<p class="lead" style="text-align: center;">Robust design, sustainable production and honest pricing are the cornerstones of the Pillar vision — Ours values of craftsmanship and authenticity pervade every piece.</p>

<img class="signature aligncenter" src="http://pillar.mediumra.re/img/signature.png" alt="signature" />[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_product pppage="8" layout="masonry-wide"][vc_empty_space height="52px"][vc_column_text]
<p style="text-align: center;"><a class="btn" href="#"><span class="btn__text">View Full Collection</span></a></p>

[/vc_column_text][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column width="1/12"][/vc_column][vc_column width="10/12"][pillar_tabs][pillar_tabs_content icon="" title="Craftsmanship"]<img class="size-medium wp-image-896 alignright" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/shop-aux-1-203x300.jpg" alt="shop-aux-1" width="203" height="300" />
<h6>A COMMITMENT TO QUALITY</h6>
<p class="lead">Robust design, sustainable production and honest pricing are the cornerstones of the Pillar vision — Ours values of craftsmanship and authenticity pervade every piece.</p>

[/pillar_tabs_content][pillar_tabs_content icon="" title="Sustainability"]<img class="alignright size-medium wp-image-900" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/shop-aux-2-203x300.jpg" alt="shop-aux-2" width="203" height="300" />
<h6>RESPONSIBLE PRODUCTION</h6>
<p class="lead">Pillar combines smart, modern styling with all the features you’ll need to launch websites of almost any kind. Couple it with Visual Composer page builder and you’re golden.</p>

[/pillar_tabs_content][pillar_tabs_content icon="" title="Service Guarantee"]<img class="alignright size-medium wp-image-901" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/shop-aux-3-203x300.jpg" alt="shop-aux-3" width="203" height="300" />
<h6>A COMMITMENT TO QUALITY</h6>
<p class="lead">Pillar combines smart, modern styling with all the features you’ll need to launch websites of almost any kind. Couple it with Visual Composer page builder and you’re golden.</p>

[/pillar_tabs_content][/pillar_tabs][/vc_column][vc_column width="1/12"][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="89" css=".vc_custom_1465573854725{padding-top: 90px !important;padding-bottom: 70px !important;}"][vc_column width="1/2"][vc_column_text css=".vc_custom_1465573881436{margin-top: 10px !important;}"]
<h4>Subscribe for exclusive deals and updates</h4>
[/vc_column_text][/vc_column][vc_column width="1/2"][contact-form-7 id="231"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_shopslider_1_template' );
}

if(!( function_exists('ebor_casestudies_1_template') )){
function ebor_casestudies_1_template($data){
    $template               = array();
    $template['name']       = '22. Pillar - Case Studies Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_portfolio layout="hero-header"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_casestudies_1_template' );
}

if(!( function_exists('ebor_column_1_template') )){
function ebor_column_1_template($data){
    $template               = array();
    $template['name']       = '23. Pillar - Column Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row" content_placement="middle" parallax="content-moving" parallax_image="63" el_class="height-70" css=".vc_custom_1470738579075{padding-top: 300px !important;}"][vc_column][vc_column_text]
<h1 style="text-align: center;">Digital Delivered.</h1>
[/vc_column_text][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column][pillar_portfolio pppage="6" layout="grid-2col"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h3 style="text-align: center;">Start building with Pillar</h3>
<p class="lead" style="text-align: center;">We'd love to hear from you to discuss web design, product development or to hear your new startup idea.</p>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">LET'S TALK TURKEY</span></a></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_column_1_template' );
}

if(!( function_exists('ebor_fullwidth_1_template') )){
function ebor_fullwidth_1_template($data){
    $template               = array();
    $template['name']       = '24. Pillar - Fullwidth Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero layout="bottom-left" image="219"][vc_column_text]<img class="size-medium wp-image-575 alignnone" src="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/logo-large-light-300x117.png" alt="logo-large-light" width="300" height="117" />
<p class="lead">A beautiful collection of
hand-crafted web components</p>
[/vc_column_text][pillar_video_modal layout="embed-large" colour="video-play-icon--light" text="Watch The Trailer" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_portfolio pppage="6" layout="grid-2col"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_fullwidth_1_template' );
}

if(!( function_exists('ebor_personal_1_template') )){
function ebor_personal_1_template($data){
    $template               = array();
    $template['name']       = '25. Pillar - Personal Homepage';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row" parallax="content-moving" parallax_image="848" css=".vc_custom_1470738788249{padding-top: 400px !important;}" el_class="height-90"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<p class="lead" style="text-align: center;">Hi, I’m David, I’m a serial entrepreneur turned interactive strategist specializing in digital product development, creative direction, and marketing. My most recent project is Mylo, a men’s style advice app and staples shop.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column][pillar_portfolio pppage="6" layout="grid-2col"][/vc_column][/vc_row][vc_row el_class="bg--dark" css=".vc_custom_1465561534826{margin-top: -200px !important;padding-top: 220px !important;}"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<p class="lead" style="text-align: center;">Interested in working with me on an upcoming project?</p>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">LET'S TALK TURKEY</span></a></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_personal_1_template' );
}


if(!( function_exists('ebor_about_company_template') )){
function ebor_about_company_template($data){
    $template               = array();
    $template['name']       = '26. Pillar - About Company Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="88" css=".vc_custom_1464801912565{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h1 style="text-align: center;">Digital Delivered.</h1>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image image="241"][vc_column_text]
<h4>Expertise is just the beginning…</h4>
Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface.

Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement.[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image layout="right" image="244"][vc_column_text]
<h4>Full service — No compromise.</h4>
Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface.

Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement.[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column][vc_column_text]
<h4 style="text-align: center;">Get to know us better…</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Tree-2" layout="boxed-color-icon" title="2010"]<em>Year of foundation</em>[/pillar_icon_box][pillar_icon_box icon="icon-Alarm-Clock" layout="boxed-color-icon" title="0"]<em>Missed meetings</em>[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Bodybuilding" layout="boxed-color-icon" title="16"]<em>Passionate team members</em>[/pillar_icon_box][pillar_icon_box icon="icon-Marker" layout="boxed-color-icon" title="Countless"]<em>Sharpies exhausted</em>[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Thumbs-UpSmiley" layout="boxed-color-icon" title="Over 500"]<em>Satisfied clients</em>[/pillar_icon_box][pillar_icon_box icon="icon-Rock-andRoll" layout="boxed-color-icon" title="1"]<em>Resident DJ</em>[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="202"][vc_column][vc_column_text css=".vc_custom_1470235355823{margin-bottom: 0px !important;}"]
<h4 style="text-align: center;">What can Pillar do for your business?</h4>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">ARRANGE A CONSULTATION</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_about_company_template' );
}

if(!( function_exists('ebor_about_process_template') )){
function ebor_about_process_template($data){
    $template               = array();
    $template['name']       = '27. Pillar - About Process Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="63" css=".vc_custom_1464802575277{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h3 style="text-align: center;">Development Process</h3>
<p class="lead" style="text-align: center;">Our rigorous process ensures your project is managed strategically and efficiently from
initial conception through to final delivery and after-sales support.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row el_class="section--overlap process-1"][vc_column][pillar_skill_bar_block layout="process-radial" title="Research" amount="33"][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="5/12"][pillar_icon_box icon="icon-Fingerprint-2" alignment="text-right" title="Market Analysis"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="2/12"][/vc_column_inner][vc_column_inner width="5/12"][pillar_icon_box icon="icon-Check-2" title="Niche Appraisal"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row el_class="bg--secondary process-1"][vc_column][pillar_skill_bar_block layout="process-radial" title="Development" amount="66"][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="5/12"][pillar_icon_box icon="icon-Code-Window" alignment="text-right" title="Prototype Development"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="2/12"][/vc_column_inner][vc_column_inner width="5/12"][pillar_icon_box icon="icon-Loop" title="Iteratate for Improvement"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row el_class="process-1 process-end"][vc_column][pillar_skill_bar_block layout="process-radial" title="Delivery" amount="100"][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Box-Open" alignment="text-center" title="Deployment &amp; Support"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="202"][vc_column][vc_column_text css=".vc_custom_1470235616092{margin-bottom: 0px !important;}"]
<h4 style="text-align: center;">What can Pillar do for your business?</h4>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">ARRANGE A CONSULTATION</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_about_process_template' );
}

if(!( function_exists('ebor_about_team_template') )){
function ebor_about_team_template($data){
    $template               = array();
    $template['name']       = '28. Pillar - About Team Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="272" css=".vc_custom_1464949547391{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h3 style="text-align: center;">Your Creative Collective</h3>
<p class="lead" style="text-align: center;">Our rigorous process ensures your project is managed strategically and efficiently from
initial conception through to final delivery and after-sales support.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][pillar_team pppage="6"][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="202"][vc_column][vc_column_text css=".vc_custom_1470235623326{margin-bottom: 0px !important;}"]
<h4 style="text-align: center;">What can Pillar do for your business?</h4>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">ARRANGE A CONSULTATION</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_about_team_template' );
}

if(!( function_exists('ebor_about_team_masonry_template') )){
function ebor_about_team_masonry_template($data){
    $template               = array();
    $template['name']       = '29. Pillar - About Team Masonry Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="272" css=".vc_custom_1464949547391{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h3 style="text-align: center;">Your Creative Collective</h3>
<p class="lead" style="text-align: center;">Our rigorous process ensures your project is managed strategically and efficiently from
initial conception through to final delivery and after-sales support.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_team pppage="8" layout="masonry"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_about_team_masonry_template' );
}

if(!( function_exists('ebor_services_boxes_template') )){
function ebor_services_boxes_template($data){
    $template               = array();
    $template['name']       = '30. Pillar - Services Boxes Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="201" css=".vc_custom_1464799374705{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h3 style="text-align: center;">Full Service, No Compromise.</h3>
<p class="lead" style="text-align: center;">Pillar is a team of passionate designers, developers and artists working in print and
digital. We collaborate with clients to establish bold, effective identities.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image image="63"][pillar_icon_box icon="icon-Sidebar-Window" layout="large" alignment="text-center" title="Interface Design"]
<p style="text-align: center;">Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.</p>


<hr />

<h6 style="text-align: center;">KEY FOCUS AREAS INCLUDE</h6>
<ul class="bullets">
 	<li style="text-align: center;"><em>Motion Interaction</em></li>
 	<li style="text-align: center;"><em>Rapid Prototyping</em></li>
 	<li style="text-align: center;"><em>Continual Improvement</em></li>
</ul>
[/pillar_icon_box][/pillar_text_image][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image layout="right" image="21"][pillar_icon_box icon="icon-Compass-4" layout="large" alignment="text-center" title="Strategy &amp; Innovation"]
<p style="text-align: center;">Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.</p>


<hr />

<h6 style="text-align: center;">KEY FOCUS AREAS INCLUDE</h6>
<ul class="bullets">
 	<li style="text-align: center;"><em>Motion Interaction</em></li>
 	<li style="text-align: center;"><em>Rapid Prototyping</em></li>
 	<li style="text-align: center;"><em>Continual Improvement</em></li>
</ul>
[/pillar_icon_box][/pillar_text_image][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image image="62"][pillar_icon_box icon="icon-RGB" layout="large" alignment="text-center" title="User Interaction"]
<p style="text-align: center;">Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.</p>


<hr />

<h6 style="text-align: center;">KEY FOCUS AREAS INCLUDE</h6>
<ul class="bullets">
 	<li style="text-align: center;"><em>Motion Interaction</em></li>
 	<li style="text-align: center;"><em>Rapid Prototyping</em></li>
 	<li style="text-align: center;"><em>Continual Improvement</em></li>
</ul>
[/pillar_icon_box][/pillar_text_image][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_services_boxes_template' );
}

if(!( function_exists('ebor_services_cards_template') )){
function ebor_services_cards_template($data){
    $template               = array();
    $template['name']       = '31. Pillar - Services Cards Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="201" css=".vc_custom_1464799374705{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h3 style="text-align: center;">Let's make something great</h3>
<p class="lead" style="text-align: center;">Pillar is a team of passionate designers, developers and artists working in print and
digital. We collaborate with clients to establish bold, effective identities.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column width="1/3"][pillar_icon_box icon="icon-Sidebar-Window" layout="boxed-icon" title="Interface Design"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][pillar_icon_box icon="icon-Brain" layout="boxed-icon" title="Internet of Things"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-RGB" layout="boxed-icon" title="User Experience"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][pillar_icon_box icon="icon-Code-Window" layout="boxed-icon" title="Full Service Development"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Compass-4" layout="boxed-icon" title="Strategy &amp; Information"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][pillar_icon_box icon="icon-Laptop-Phone" layout="boxed-icon" title="Digital Presence"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="202"][vc_column][vc_column_text css=".vc_custom_1470409546987{margin-bottom: 0px !important;}"]
<h4 style="text-align: center;">What can Pillar do for your business?</h4>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">ARRANGE A CONSULTATION</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_services_cards_template' );
}

if(!( function_exists('ebor_services_cards_template') )){
function ebor_services_cards_template($data){
    $template               = array();
    $template['name']       = '31. Pillar - Services Cards Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="201" css=".vc_custom_1464799374705{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h3 style="text-align: center;">Let's make something great</h3>
<p class="lead" style="text-align: center;">Pillar is a team of passionate designers, developers and artists working in print and
digital. We collaborate with clients to establish bold, effective identities.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column width="1/3"][pillar_icon_box icon="icon-Sidebar-Window" layout="boxed-icon" title="Interface Design"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][pillar_icon_box icon="icon-Brain" layout="boxed-icon" title="Internet of Things"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-RGB" layout="boxed-icon" title="User Experience"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][pillar_icon_box icon="icon-Code-Window" layout="boxed-icon" title="Full Service Development"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Compass-4" layout="boxed-icon" title="Strategy &amp; Information"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][pillar_icon_box icon="icon-Laptop-Phone" layout="boxed-icon" title="Digital Presence"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="202"][vc_column][vc_column_text css=".vc_custom_1470409546987{margin-bottom: 0px !important;}"]
<h4 style="text-align: center;">What can Pillar do for your business?</h4>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">ARRANGE A CONSULTATION</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_services_cards_template' );
}

if(!( function_exists('ebor_contact_simple_template') )){
function ebor_contact_simple_template($data){
    $template               = array();
    $template['name']       = '32. Pillar - Contact Simple Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="184" css=".vc_custom_1464792252951{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h3 style="text-align: center;">Let's make something great</h3>
<p class="lead" style="text-align: center;">Pillar is a team of passionate designers, developers and artists working in print and
digital. We collaborate with clients to establish bold, effective identities.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" content_placement="middle" el_class="no-gaps"][vc_column width="1/3" el_class="bg--white" css=".vc_custom_1470239984482{padding-top: 90px !important;padding-bottom: 70px !important;}"][pillar_icon_box icon="icon-Map-Marker2" layout="large" alignment="text-center" title="Drop on in"]
<p style="text-align: center;">Suite 203, Level 4
124 Koornang Road
Carnegie, Victoria 3183</p>
[/pillar_icon_box][/vc_column][vc_column width="1/3" el_class="bg--secondary" css=".vc_custom_1470239993395{padding-top: 90px !important;padding-bottom: 70px !important;}"][pillar_icon_box icon="icon-Phone-2" layout="large" alignment="text-center" title="Give us a call"]
<p style="text-align: center;">Office: (03) 9283 2617
Fax: +61 3827 3590</p>
[/pillar_icon_box][/vc_column][vc_column width="1/3" el_class="bg--dark" css=".vc_custom_1470240000082{padding-top: 90px !important;padding-bottom: 70px !important;}"][pillar_icon_box icon="icon-Computer" layout="large" alignment="text-center" title="Connect Online"]
<p style="text-align: center;">Email: <a href="#">hello@pillarstudio.net</a>
Twitter: <a href="#">@pillarstudio</a></p>
[/pillar_icon_box][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 class="text-center" style="text-align: center;">Or reach us right here…</h4>
[/vc_column_text][contact-form-7 id="1003"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_contact_simple_template' );
}

if(!( function_exists('ebor_contact_simple_template') )){
function ebor_contact_simple_template($data){
    $template               = array();
    $template['name']       = '32. Pillar - Contact Simple Page';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="184" css=".vc_custom_1464792252951{padding-top: 250px !important;padding-bottom: 220px !important;}"][vc_column][vc_column_text css_animation="bottom-to-top"]
<h3 style="text-align: center;">Let's make something great</h3>
<p class="lead" style="text-align: center;">Pillar is a team of passionate designers, developers and artists working in print and
digital. We collaborate with clients to establish bold, effective identities.</p>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" content_placement="middle" el_class="no-gaps"][vc_column width="1/3" el_class="bg--white" css=".vc_custom_1470239984482{padding-top: 90px !important;padding-bottom: 70px !important;}"][pillar_icon_box icon="icon-Map-Marker2" layout="large" alignment="text-center" title="Drop on in"]
<p style="text-align: center;">Suite 203, Level 4
124 Koornang Road
Carnegie, Victoria 3183</p>
[/pillar_icon_box][/vc_column][vc_column width="1/3" el_class="bg--secondary" css=".vc_custom_1470239993395{padding-top: 90px !important;padding-bottom: 70px !important;}"][pillar_icon_box icon="icon-Phone-2" layout="large" alignment="text-center" title="Give us a call"]
<p style="text-align: center;">Office: (03) 9283 2617
Fax: +61 3827 3590</p>
[/pillar_icon_box][/vc_column][vc_column width="1/3" el_class="bg--dark" css=".vc_custom_1470240000082{padding-top: 90px !important;padding-bottom: 70px !important;}"][pillar_icon_box icon="icon-Computer" layout="large" alignment="text-center" title="Connect Online"]
<p style="text-align: center;">Email: <a href="#">hello@pillarstudio.net</a>
Twitter: <a href="#">@pillarstudio</a></p>
[/pillar_icon_box][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 class="text-center" style="text-align: center;">Or reach us right here…</h4>
[/vc_column_text][contact-form-7 id="1003"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_contact_simple_template' );
}

if(!( function_exists('ebor_contact_map_iframe_template') )){
function ebor_contact_map_iframe_template($data){
    $template               = array();
    $template['name']       = '33. Pillar - Contact Map Iframe Page';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBmcmFtZWJvcmRlciUzRCUyMjAlMjIlMjBzdHlsZSUzRCUyMmJvcmRlciUzQTAlMjIlMjBhbGxvd2Z1bGxzY3JlZW4lM0UlM0MlMkZpZnJhbWUlM0U="][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column width="1/3"][pillar_icon_box icon="icon-Map-Marker2" layout="boxed-large" title="Drop on in"]
<p style="text-align: center;">Suite 203, Level 4
124 Koornang Road
Carnegie, Victoria 3183</p>
[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Phone-2" layout="boxed-large" title="Give us a call"]
<p style="text-align: center;">Office: (03) 9283 2617
Fax: +61 3827 3590</p>
[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Computer" layout="boxed-large" title="Connect Online"]
<p style="text-align: center;">Email: <a href="#">hello@pillarstudio.net</a>
Twitter: <a href="#">@pillarstudio</a></p>
[/pillar_icon_box][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 class="text-center" style="text-align: center;">Or reach us right here…</h4>
[/vc_column_text][contact-form-7 id="1003"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_contact_map_iframe_template' );
}

if(!( function_exists('ebor_contact_map_styled_template') )){
function ebor_contact_map_styled_template($data){
    $template               = array();
    $template['name']       = '34. Pillar - Contact Map Styled Page';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBmcmFtZWJvcmRlciUzRCUyMjAlMjIlMjBzdHlsZSUzRCUyMmJvcmRlciUzQTAlMjIlMjBhbGxvd2Z1bGxzY3JlZW4lM0UlM0MlMkZpZnJhbWUlM0U=" el_class="styled"][/vc_column][/vc_row][vc_row el_class="section--overlap"][vc_column width="1/3"][pillar_icon_box icon="icon-Map-Marker2" layout="boxed-large" title="Drop on in"]
<p style="text-align: center;">Suite 203, Level 4
124 Koornang Road
Carnegie, Victoria 3183</p>
[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Phone-2" layout="boxed-large" title="Give us a call"]
<p style="text-align: center;">Office: (03) 9283 2617
Fax: +61 3827 3590</p>
[/pillar_icon_box][/vc_column][vc_column width="1/3"][pillar_icon_box icon="icon-Computer" layout="boxed-large" title="Connect Online"]
<p style="text-align: center;">Email: <a href="#">hello@pillarstudio.net</a>
Twitter: <a href="#">@pillarstudio</a></p>
[/pillar_icon_box][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 class="text-center" style="text-align: center;">Or reach us right here…</h4>
[/vc_column_text][contact-form-7 id="1003"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_contact_map_styled_template' );
}

if(!( function_exists('ebor_coming_soon_template') )){
function ebor_coming_soon_template($data){
    $template               = array();
    $template['name']       = '35. Pillar - Coming Soon Page';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero layout="video-social" shortcode="231" image="229" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.mp4" ogv="http://tommustester.wpengine.com/wp-content/uploads/2016/06/video-2.ogv"]
<h1 style="text-align: center;">We're preparing for launch.</h1>
<p class="lead" style="text-align: center;">Thanks for your patience while we finalise preparations for our launch. Hit the form below to get notified when we're up and away.</p>
[/pillar_hero][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_coming_soon_template' );
}

if(!( function_exists('ebor_maintenance_template') )){
function ebor_maintenance_template($data){
    $template               = array();
    $template['name']       = '36. Pillar - Maintenance Page';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column][pillar_hero parallax="parallax-off" image="219"]
<h1>We're just working a few things out</h1>
Our site will be momentarily unavailable while we're working on a few back-end changes. Thanks for your patience and we apologise for any inconvenience.

<a class="btn btn--primary" href="#"><span class="btn__text">GET IN TOUCH</span></a>[/pillar_hero][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_maintenance_template' );
}

if(!( function_exists('ebor_portfolio_cards_large_template') )){
function ebor_portfolio_cards_large_template($data){
    $template               = array();
    $template['name']       = '37. Pillar - Portfolio Cards Large';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1469199002202{padding-top: 160px !important;padding-bottom: 160px !important;background-image: url(http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/07/Unknown.jpeg?id=947) !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Cards Large</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase selected projects in a sylish grid arrangement.</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column css=".vc_custom_1470310439449{padding-top: 15px !important;}"][pillar_portfolio pppage="6" layout="cards-large"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_portfolio_cards_large_template' );
}

if(!( function_exists('ebor_portfolio_cards_small_template') )){
function ebor_portfolio_cards_small_template($data){
    $template               = array();
    $template['name']       = '38. Pillar - Portfolio Cards Small';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1469198293132{padding-top: 160px !important;padding-bottom: 160px !important;background-image: url(http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/07/Unknown.jpeg?id=947) !important;}" el_class="background--bottom"][vc_column width="2/12"][/vc_column][vc_column width="8/12"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Cards Small</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase selected projects in a sylish grid arrangement.</span></p>
[/vc_column_text][/vc_column][vc_column width="2/12"][/vc_column][/vc_row][vc_row][vc_column css=".vc_custom_1470310456953{padding-top: 15px !important;}"][pillar_portfolio pppage="8"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_portfolio_cards_small_template' );
}

if(!( function_exists('ebor_portfolio_masonry_wide_template') )){
function ebor_portfolio_masonry_wide_template($data){
    $template               = array();
    $template['name']       = '39. Pillar - Portfolio Masonry Wide';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1469200441242{padding-top: 160px !important;padding-bottom: 160px !important;background-image: url(http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/07/Unknown.jpeg?id=947) !important;}" el_class="background--bottom"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Masonry Wide</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase selected projects in a sylish grid arrangement.</span></p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_portfolio pppage="8" layout="masonry-wide"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_portfolio_masonry_wide_template' );
}

if(!( function_exists('ebor_portfolio_vanilla_wide_template') )){
function ebor_portfolio_vanilla_wide_template($data){
    $template               = array();
    $template['name']       = '40. Pillar - Portfolio Vanilla Wide';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1469201289861{padding-top: 160px !important;padding-bottom: 160px !important;background-image: url(http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/07/Unknown.jpeg?id=947) !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Portfolio</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase selected projects in a sylish grid arrangement.</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_portfolio pppage="9" layout="vanilla-wide"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_portfolio_vanilla_wide_template' );
}

if(!( function_exists('ebor_portfolio_vanilla_contained_template') )){
function ebor_portfolio_vanilla_contained_template($data){
    $template               = array();
    $template['name']       = '41. Pillar - Portfolio Vanilla Contained';
    $template['content']    = <<<CONTENT
		[vc_row css=".vc_custom_1469200639174{padding-top: 160px !important;padding-bottom: 160px !important;background-image: url(http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/07/Unknown.jpeg?id=947) !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Portfolio</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase selected projects in a sylish grid arrangement.</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][pillar_portfolio pppage="9" layout="vanilla-contained"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_portfolio_vanilla_contained_template' );
}

if(!( function_exists('ebor_single_portfolio_simple_slider_template') )){
function ebor_single_portfolio_simple_slider_template($data){
    $template               = array();
    $template['name']       = '42. Pillar - Single Portfolio Simple Slider';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column][vc_column_text]
<h6 style="text-align: center;">CASE STUDY</h6>
<h3 style="text-align: center;">Reimagining the Chat Experience</h3>
<p class="lead" style="text-align: center;">Pillar provided conceptualization through design, deployment
and marketing for this burgeoning startup</p>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]

[gallery layout="slider" ids="868,870"]

[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/3"][pillar_card type="square" title="Client Brief:" subtitle="1."]Grok big data hacker. Latte entrepreneur human-centered design cortado big data parallax thinker-maker-doer bootstrapping human-centered design waterfall.[/pillar_card][/vc_column][vc_column width="1/3"][pillar_card type="square" title="Our Solution:" subtitle="2."]Grok big data hacker. Latte entrepreneur human-centered design cortado big data parallax thinker-maker-doer bootstrapping human-centered design waterfall.[/pillar_card][/vc_column][vc_column width="1/3"][pillar_card type="square" title="Result:" subtitle="3."]Grok big data hacker. Latte entrepreneur human-centered design cortado big data parallax thinker-maker-doer bootstrapping human-centered design waterfall.[/pillar_card][/vc_column][/vc_row][vc_row][vc_column][pillar_testimonial pppage="2" layout="grid-large" filter="10"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_simple_slider_template' );
}

if(!( function_exists('ebor_single_portfolio_image_boxes_template') )){
function ebor_single_portfolio_image_boxes_template($data){
    $template               = array();
    $template['name']       = '43. Pillar - Single Portfolio Image Boxes';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="869" css=".vc_custom_1465565227991{padding-top: 300px !important;padding-bottom: 300px !important;}"][vc_column][vc_column_text]
<h2 style="text-align: center;">Reimagining the chat experience</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image image="868"][vc_column_text]
<h4>A Modular Approach</h4>
<p class="lead">We achieved complete immersion in a human-centered design process.</p>
Pivot innovate actionable insight workflow sticky note sticky note unicorn quantitative vs. qualitative food-truck. Workflow big data food-truck personas experiential moleskine latte food-truck disrupt human-centered design hacker parallax. Workflow parallax pivot hacker driven disrupt affordances personas. Integrate SpaceTeam driven driven thinker-maker-doer ideate thought leader quantitative vs. qualitative. Pair programming SpaceTeam.[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image layout="right" image="870"][vc_column_text]
<h4>Content Driven Design</h4>
<p class="lead">We achieved complete immersion in a human-centered design process.</p>
Pivot innovate actionable insight workflow sticky note sticky note unicorn quantitative vs. qualitative food-truck. Workflow big data food-truck personas experiential moleskine latte food-truck disrupt human-centered design hacker parallax. Workflow parallax pivot hacker driven disrupt affordances personas. Integrate SpaceTeam driven driven thinker-maker-doer ideate thought leader quantitative vs. qualitative. Pair programming SpaceTeam.[/vc_column_text][/pillar_text_image][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="648" css=".vc_custom_1465565385712{padding-top: 160px !important;}"][vc_column][vc_column_text]
<h4 style="text-align: center;">Interested in working with Pillar?</h4>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">ARRANGE A CONSULTATION</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_image_boxes_template' );
}

if(!( function_exists('ebor_single_portfolio_stacked_image_template') )){
function ebor_single_portfolio_stacked_image_template($data){
    $template               = array();
    $template['name']       = '44. Pillar - Single Portfolio Stacked Image';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="869" css=".vc_custom_1465565227991{padding-top: 300px !important;padding-bottom: 300px !important;}"][vc_column][vc_column_text]
<h2 style="text-align: center;">Reimagining the chat experience</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<p class="lead">Pivot innovate actionable insight workflow sticky note sticky note unicorn quantitative vs. qualitative food-truck. Workflow big data food-truck.</p>
[/vc_column_text][vc_empty_space height="42px"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]
<h5>The Proposal</h5>
User story human-centered design engaging actionable insight paradigm grok big data hacker. Latte entrepreneur human-centered design cortado big data parallax thinker-maker-doer bootstrapping human-centered design waterfall.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h5>The Outcome</h5>
Workflow parallax pivot hacker driven disrupt affordances personas. Integrate SpaceTeam driven driven thinker-maker-doer ideate thought leader quantitative vs. qualitative. Pair programming SpaceTeam integrate fund long shadow venture.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_single_image image="868" img_size="full"][vc_empty_space][vc_single_image image="870" img_size="full"][vc_empty_space][vc_single_image image="869" img_size="full"][/vc_column][/vc_row][vc_row][vc_column][pillar_testimonial pppage="2" layout="grid-large" filter="10"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_stacked_image_template' );
}

if(!( function_exists('ebor_single_portfolio_stacked_video_template') )){
function ebor_single_portfolio_stacked_video_template($data){
    $template               = array();
    $template['name']       = '45. Pillar - Single Portfolio Stacked Video';
    $template['content']    = <<<CONTENT
		[vc_row full_width="stretch_row"][vc_column el_class="text-center"][pillar_video_background layout="embed" image="679" embed="I2YHAw6JGjQ"][pillar_video_modal layout="embed-large" colour="video-play-icon--light" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][vc_empty_space][vc_column_text]
<h2 style="text-align: center;">Reimagining the chat experience</h2>
[/vc_column_text][/pillar_video_background][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<p class="lead">Pivot innovate actionable insight workflow sticky note sticky note unicorn quantitative vs. qualitative food-truck. Workflow big data food-truck.</p>
[/vc_column_text][vc_empty_space height="42px"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]
<h5>The Proposal</h5>
User story human-centered design engaging actionable insight paradigm grok big data hacker. Latte entrepreneur human-centered design cortado big data parallax thinker-maker-doer bootstrapping human-centered design waterfall.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h5>The Outcome</h5>
Workflow parallax pivot hacker driven disrupt affordances personas. Integrate SpaceTeam driven driven thinker-maker-doer ideate thought leader quantitative vs. qualitative. Pair programming SpaceTeam integrate fund long shadow venture.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_single_image image="868" img_size="full"][vc_empty_space][vc_single_image image="870" img_size="full"][vc_empty_space][vc_single_image image="869" img_size="full"][/vc_column][/vc_row][vc_row][vc_column][pillar_testimonial pppage="2" layout="grid-large" filter="10"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_stacked_video_template' );
}

if(!( function_exists('ebor_single_portfolio_images_contained_template') )){
function ebor_single_portfolio_images_contained_template($data){
    $template               = array();
    $template['name']       = '46. Pillar - Portfolio Images Contained';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="1267" css=".vc_custom_1470839804085{padding-top: 160px !important;padding-bottom: 160px !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Image Showcase</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase a gallery of images with lightbox capability</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column css=".vc_custom_1470310439449{padding-top: 15px !important;}"][pillar_image_gallery][pillar_image_gallery_content class="People" image="1129"][pillar_image_gallery_content class="Objects" image="1134"][pillar_image_gallery_content class="People" image="1133"][pillar_image_gallery_content class="People" image="1137"][pillar_image_gallery_content class="Architecture" image="1268"][pillar_image_gallery_content class="Objects" image="1136"][pillar_image_gallery_content class="Architecture" image="1132"][pillar_image_gallery_content class="Objects" image="1130"][/pillar_image_gallery][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_images_contained_template' );
}

if(!( function_exists('ebor_single_portfolio_images_wide_template') )){
function ebor_single_portfolio_images_wide_template($data){
    $template               = array();
    $template['name']       = '47. Pillar - Portfolio Images Wide';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="1267" css=".vc_custom_1470743170329{padding-top: 160px !important;padding-bottom: 160px !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Image Showcase</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase a gallery of images with lightbox capability</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_image_gallery_wide][pillar_image_gallery_wide_content class="People" image="1129"][pillar_image_gallery_wide_content class="People" image="1133"][pillar_image_gallery_wide_content class="People" image="1138"][pillar_image_gallery_wide_content class="Objects" image="1130"][pillar_image_gallery_wide_content class="Objects" image="1134"][pillar_image_gallery_wide_content class="Objects" image="1135"][pillar_image_gallery_wide_content class="Objects" image="1136"][pillar_image_gallery_wide_content class="Architecture" image="1132"][pillar_image_gallery_wide_content class="Architecture" image="1268"][/pillar_image_gallery_wide][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_images_wide_template' );
}

if(!( function_exists('ebor_single_portfolio_modals_contained_template') )){
function ebor_single_portfolio_modals_contained_template($data){
    $template               = array();
    $template['name']       = '48. Pillar - Portfolio Modals Contained';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="1267" css=".vc_custom_1470743013915{padding-top: 160px !important;padding-bottom: 160px !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Modal Showcase</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase a gallery of rich, modal-powered content</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1470745240634{padding-top: 0px !important;}"][vc_column css=".vc_custom_1470310439449{padding-top: 15px !important;}"][pillar_modal_gallery][pillar_modal_gallery_content class="Objects" image="1130" images="1134,1133,1130" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_content][pillar_modal_gallery_content class="Places" image="1132" images="1132,1133,1130" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_content][pillar_modal_gallery_content class="People" image="1237" images="1133,1134,1130" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_content][pillar_modal_gallery_content class="Objects" image="1136" images="1136,1133,1130" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_content][pillar_modal_gallery_content class="People" image="1137" images="1137,1134,1130" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_content][pillar_modal_gallery_content class="Places" image="1268" images="1268,1133,1130" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_content][/pillar_modal_gallery][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_modals_contained_template' );
}

if(!( function_exists('ebor_single_portfolio_modals_wide_template') )){
function ebor_single_portfolio_modals_wide_template($data){
    $template               = array();
    $template['name']       = '49. Pillar - Portfolio Modals Wide';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="1267" css=".vc_custom_1470743013915{padding-top: 160px !important;padding-bottom: 160px !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Modal Showcase</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase a gallery of rich, modal-powered content</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1470746188976{padding-top: 0px !important;}"][vc_column css=".vc_custom_1470310439449{padding-top: 15px !important;}"][pillar_modal_gallery_wide][pillar_modal_gallery_wide_content class="Objects" image="100" images="100,1132,1134" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=4QUVRm4UZA4"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_wide_content][pillar_modal_gallery_wide_content class="Places" image="1132" images="1132,100,1134" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=4QUVRm4UZA4"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_wide_content][pillar_modal_gallery_wide_content class="People" image="1133" images="1133,100,1134" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=4QUVRm4UZA4"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_wide_content][pillar_modal_gallery_wide_content class="Objects" image="1136" images="1136,1132,1134" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=4QUVRm4UZA4"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_wide_content][pillar_modal_gallery_wide_content class="People" image="1137" images="1137,100,1134" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=4QUVRm4UZA4"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_wide_content][pillar_modal_gallery_wide_content class="Places" image="1268" images="1268,100,1134" title="Perfect for new Startups" embed="https://www.youtube.com/watch?v=4QUVRm4UZA4"]<em>A brief description of the card.</em>

Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_modal_gallery_wide_content][/pillar_modal_gallery_wide][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_modals_wide_template' );
}

if(!( function_exists('ebor_single_portfolio_video_contained_template') )){
function ebor_single_portfolio_video_contained_template($data){
    $template               = array();
    $template['name']       = '50. Pillar - Portfolio Video Contained';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="1267" css=".vc_custom_1470743013915{padding-top: 160px !important;padding-bottom: 160px !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Video Showcase</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase a gallery of videos in a filterable grid</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1470750814867{padding-top: 0px !important;}"][vc_column css=".vc_custom_1470310439449{padding-top: 15px !important;}"][pillar_video_gallery][pillar_video_gallery_content class="Documentary" image="1132" title="New York Beat" embed="https://vimeo.com/165428278"][pillar_video_gallery_content class="Music" image="1133" title="Luxury Problems" embed="https://vimeo.com/165428278"][pillar_video_gallery_content class="Advertisment" image="1134" title="Exposed" embed="https://vimeo.com/165428278"][pillar_video_gallery_content class="Advertisment" image="1136" title="Hive Coworking" embed="https://vimeo.com/165428278"][pillar_video_gallery_content class="Music" image="1129" title="Yonderman" embed="https://vimeo.com/165428278"][pillar_video_gallery_content class="A Life Downsized" image="1137" title="A Life Downsized" embed="https://vimeo.com/165428278"][/pillar_video_gallery][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_video_contained_template' );
}

if(!( function_exists('ebor_single_portfolio_video_wide_template') )){
function ebor_single_portfolio_video_wide_template($data){
    $template               = array();
    $template['name']       = '51. Pillar - Portfolio Video Wide';
    $template['content']    = <<<CONTENT
		[vc_row parallax="content-moving" parallax_image="1267" css=".vc_custom_1470743013915{padding-top: 160px !important;padding-bottom: 160px !important;}" el_class="background--bottom"][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;"><span style="color: #ffffff;">Video Showcase</span></h1>
<p class="lead" style="text-align: center;"><span style="color: #ffffff;">Showcase a gallery of videos in a filterable grid</span></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1470751367222{padding-top: 0px !important;}"][vc_column][pillar_video_gallery_wide][pillar_video_gallery_wide_content class="Documentary" image="1132" title="New York Beat" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"][pillar_video_gallery_wide_content class="Music" image="1133" title="Luxury Problems" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"][pillar_video_gallery_wide_content class="Advertisment" image="1134" title="Exposed" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"][pillar_video_gallery_wide_content class="Advertisment" image="1136" title="Hive Coworking" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"][pillar_video_gallery_wide_content class="Music" image="1129" title="Yonderman" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"][pillar_video_gallery_wide_content class="Documentary" image="1137" title="A Life Downsized" embed="https://www.youtube.com/watch?v=7xXAMxXp5yE"][/pillar_video_gallery_wide][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_single_portfolio_video_wide_template' );
}

if(!( function_exists('ebor_blog_cards_large_template') )){
function ebor_blog_cards_large_template($data){
    $template               = array();
    $template['name']       = '52. Pillar - Blog Cards Large';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Cards</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a sylish grid arrangement.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="4" type="cards-large"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_cards_large_template' );
}

if(!( function_exists('ebor_blog_cards_large_sidebar_template') )){
function ebor_blog_cards_large_sidebar_template($data){
    $template               = array();
    $template['name']       = '53. Pillar - Blog Cards Large Sidebar';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Cards</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a sylish grid arrangement.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="4" type="cards-large-sidebar"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_cards_large_sidebar_template' );
}

if(!( function_exists('ebor_blog_cards_small_template') )){
function ebor_blog_cards_small_template($data){
    $template               = array();
    $template['name']       = '54. Pillar - Blog Cards Small';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Cards</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a sylish grid arrangement.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="9" type="cards-small"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_cards_small_template' );
}

if(!( function_exists('ebor_blog_cards_horizontal_template') )){
function ebor_blog_cards_horizontal_template($data){
    $template               = array();
    $template['name']       = '55. Pillar - Blog Cards Horizontal';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Cards</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a sylish grid arrangement.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="4" type="cards-horizontal"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_cards_horizontal_template' );
}

if(!( function_exists('ebor_blog_cards_horizontal_sidebar_template') )){
function ebor_blog_cards_horizontal_sidebar_template($data){
    $template               = array();
    $template['name']       = '56. Pillar - Blog Cards Horizontal Sidebar';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Cards</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a sylish grid arrangement.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="4" type="cards-horizontal-sidebar"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_cards_horizontal_sidebar_template' );
}

if(!( function_exists('ebor_blog_preview_cards_template') )){
function ebor_blog_preview_cards_template($data){
    $template               = array();
    $template['name']       = '57. Pillar - Blog Preview Cards';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Cards</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a sylish grid arrangement.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="9" type="cards-basic"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_preview_cards_template' );
}

if(!( function_exists('ebor_blog_preview_cards_sidebar_template') )){
function ebor_blog_preview_cards_sidebar_template($data){
    $template               = array();
    $template['name']       = '58. Pillar - Blog Preview Cards Sidebar';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Cards</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a sylish grid arrangement.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="9" type="cards-basic-sidebar"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_preview_cards_sidebar_template' );
}

if(!( function_exists('ebor_blog_classic_column_template') )){
function ebor_blog_classic_column_template($data){
    $template               = array();
    $template['name']       = '59. Pillar - Blog Classic Column';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Column</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a classic column arrangement</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="4" type="classic"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_classic_column_template' );
}

if(!( function_exists('ebor_blog_classic_sidebar_template') )){
function ebor_blog_classic_sidebar_template($data){
    $template               = array();
    $template['name']       = '60. Pillar - Blog Classic Sidebar';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Blog Column</h1>
<p class="lead" style="text-align: center;">Showcase blog posts in a classic column arrangement</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][pillar_blog pppage="4" type="classic-sidebar"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_blog_classic_sidebar_template' );
}

if(!( function_exists('ebor_elements_accordions_template') )){
function ebor_elements_accordions_template($data){
    $template               = array();
    $template['name']       = '61. Pillar - Elements Accordions';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Accordions</h1>
<p class="lead" style="text-align: center;">Pillar features simplified button markup so you can easily adjust the
size and color of buttons with simple class changes.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Multiple Open</h4>
[/vc_column_text][pillar_accordion][pillar_accordion_content title="Getting Started"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/pillar_accordion_content][pillar_accordion_content title="Working With WordPress"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/pillar_accordion_content][pillar_accordion_content title="Simple Theme Options"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/pillar_accordion_content][/pillar_accordion][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">One Open</h4>
[/vc_column_text][pillar_accordion type="accordion accordion--oneopen"][pillar_accordion_content title="Getting Started"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/pillar_accordion_content][pillar_accordion_content title="Working With WordPress"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/pillar_accordion_content][pillar_accordion_content title="Simple Theme Options"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/pillar_accordion_content][/pillar_accordion][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Accordion Example One</h4>
[/vc_column_text][vc_tta_accordion color="blue" active_section="1" no_fill="true"][vc_tta_section title="Section One" tab_id="1470313576438-d1cc4989-6a1d"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/vc_column_text][/vc_tta_section][vc_tta_section title="Section Teo" tab_id="1470313689229-e15d054f-0ac4"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Accordion Example Two</h4>
[/vc_column_text][vc_tta_accordion style="flat" shape="square" c_icon="" active_section="1"][vc_tta_section title="Section One" tab_id="1470313821265-29f47133-5d2d"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/vc_column_text][/vc_tta_section][vc_tta_section title="Section Teo" tab_id="1470313821348-26d83501-503f"][vc_column_text]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_accordions_template' );
}

if(!( function_exists('ebor_elements_buttons_template') )){
function ebor_elements_buttons_template($data){
    $template               = array();
    $template['name']       = '62. Pillar - Elements Buttons';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Buttons</h1>
<p class="lead" style="text-align: center;">Pillar features simplified button markup so you can easily adjust the size and color of buttons with simple class changes.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][vc_column_text]
<h4 style="text-align: center;">Standard Buttons</h4>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><a class="btn btn--lg mb--1" href="#"><span class="btn__text">Large Standard Button</span></a>
<a class="btn mb--1" href="#"><span class="btn__text">Medium Standard Button</span></a>
<a class="btn btn--sm" href="#"><span class="btn__text">Small Standard Button</span></a></p>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h4 style="text-align: center;">Colored Buttons</h4>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><a class="btn btn--lg btn--primary mb--1" href="#"><span class="btn__text">Large Primary Button</span></a>
<a class="btn btn--primary mb--1" href="#"><span class="btn__text">Medium Primary Button</span></a>
<a class="btn btn--sm btn--primary" href="#"><span class="btn__text">Small Primary Button</span></a></p>
[/vc_column_text][/vc_column][vc_column width="1/3"][vc_column_text]
<h4 style="text-align: center;">Social Buttons</h4>
[/vc_column_text][vc_column_text]
<p style="text-align: center;"><a class="btn btn--sm bg--facebook" href="#"><span class="btn__text"><i class="socicon-facebook"></i> Share on Facebook</span></a>
<a class="btn btn--sm bg--twitter" href="#"><span class="btn__text"><i class="socicon-twitter"></i> Share on Twitter</span></a>
<a class="btn btn--sm bg--instagram" href="#"><span class="btn__text"><i class="socicon-instagram"></i> Share on Instagram</span></a>
<a class="btn btn--sm bg--googleplus" href="#"><span class="btn__text"><i class="socicon-googleplus"></i> Share on GooglePlus</span></a></p>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/4"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Button Example One</h4>
[/vc_column_text][vc_btn title="Button Text" color="blue" size="xs" link="url:%23|||"][vc_btn title="Button Text" color="blue" size="sm" link="url:%23|||"][vc_btn title="Button Text" color="blue" link="url:%23|||"][vc_btn title="Button Text" color="blue" size="lg" link="url:%23|||"][/vc_column][vc_column width="1/4"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Button Example Two</h4>
[/vc_column_text][vc_btn title="Button Text" style="3d" color="blue" size="xs" link="url:%23|||"][vc_btn title="Button Text" style="3d" color="blue" size="sm" link="url:%23|||"][vc_btn title="Button Text" style="3d" color="blue" link="url:%23|||"][vc_btn title="Button Text" style="3d" color="blue" size="lg" link="url:%23|||"][/vc_column][vc_column width="1/4"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Button Example Three</h4>
[/vc_column_text][vc_btn title="Button Text" style="outline" color="blue" size="xs" link="url:%23|||"][vc_btn title="Button Text" style="outline" color="blue" size="sm" link="url:%23|||"][vc_btn title="Button Text" style="outline" color="blue" link="url:%23|||"][vc_btn title="Button Text" style="outline" color="blue" size="lg" link="url:%23|||"][/vc_column][vc_column width="1/4"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Button Example Four</h4>
[/vc_column_text][vc_btn title="Button Text" style="flat" shape="square" color="blue" size="xs" link="url:%23|||"][vc_btn title="Button Text" style="flat" shape="square" color="blue" size="sm" link="url:%23|||"][vc_btn title="Button Text" style="flat" shape="square" color="blue" link="url:%23|||"][vc_btn title="Button Text" style="flat" shape="square" color="blue" size="lg" link="url:%23|||"][/vc_column][/vc_row][vc_row][vc_column width="1/4" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Facebook Buttons</h4>
[/vc_column_text][vc_facebook][vc_facebook type="button_count"][vc_facebook type="box_count"][/vc_column][vc_column width="1/4"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Twitter Buttons</h4>
[/vc_column_text][vc_tweetmeme share_via="tommusrhodus"][vc_tweetmeme share_via="tommusrhodus" large_button="true"][/vc_column][vc_column width="1/4"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Google+ Buttons</h4>
[/vc_column_text][vc_googleplus][vc_googleplus type="small"][vc_googleplus type="medium"][vc_googleplus type="tall"][/vc_column][vc_column width="1/4"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Pinterest Buttons</h4>
[/vc_column_text][vc_pinterest][vc_pinterest type="vertical"][vc_pinterest type="none"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_buttons_template' );
}

if(!( function_exists('ebor_elements_cards_template') )){
function ebor_elements_cards_template($data){
    $template               = array();
    $template['name']       = '63. Pillar - Elements Cards';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Cards</h1>
<p class="lead" style="text-align: center;">Pillar features a diverse array of styled cards to suit many purposes including portfolios, blogs, shops and more</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Vertical Text Cards</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][pillar_card image="100" title="Perfect for new Startups" subtitle="A brief description of the card."]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_card][/vc_column_inner][vc_column_inner width="1/3"][pillar_card image="101" title="Complete Portfolio layouts" subtitle="A brief description of the card."]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_card][/vc_column_inner][vc_column_inner width="1/3"][pillar_card image="102" title="Stunning, minimal e-commerce" subtitle="A brief description of the card."]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_card][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Horizontal Text Cards</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][pillar_card type="horizontal" image="100" title="New Startup" subtitle="A brief description of the card."]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_card][/vc_column_inner][vc_column_inner width="1/2"][pillar_card type="horizontal" image="101" title="Portfolio" subtitle="A brief description of the card."]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_card][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Vertical Link Cards</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][pillar_card type="vertical-link" image="107" title="New Startup" subtitle="A brief description of the card." link="#"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_card][/vc_column_inner][vc_column_inner width="1/2"][pillar_card type="vertical-link" image="108" title="Portfolio" subtitle="A brief description of the card." link="#"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_card][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Horizontal Link Cards</h4>
[/vc_column_text][vc_row_inner][vc_column_inner][pillar_card type="horizontal-link" image="108" title="New Startup" subtitle="A brief description of the card." link="#"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_card][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Vertical Blog Cards</h4>
[/vc_column_text][vc_row_inner][vc_column_inner][pillar_blog pppage="3" type="cards-small"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Horizontal Blog Cards</h4>
[/vc_column_text][vc_row_inner][vc_column_inner][pillar_blog pppage="1" type="cards-horizontal"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Shop Cards Small</h4>
[/vc_column_text][vc_row_inner][vc_column_inner][pillar_product pppage="6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Shop Cards Large</h4>
[/vc_column_text][vc_row_inner][vc_column_inner][pillar_product pppage="2" layout="cards-large"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_cards_template' );
}

if(!( function_exists('ebor_elements_cover_sections_template') )){
function ebor_elements_cover_sections_template($data){
    $template               = array();
    $template['name']       = '64. Pillar - Elements Cover Sections';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h1 style="text-align: center;">Cover Sections</h1>
<p class="lead" style="text-align: center;">Pillar features an array of cover sections to suit multiple purposes. Combine sliders, backgrounds, media embeds and images to create an engaging first impression for your website.</p>
[/vc_column_text][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column el_class="text-center"][pillar_hero layout="video-popup" image="526"][vc_column_text]
<h1 style="text-align: center;">Build <em>beautiful</em> landing pages.</h1>
<p class="lead" style="text-align: center;">Combine multiple purpose-built elements to craft your perfect, conversion focussed landing page - and do it all in the comfort of your browser.</p>
[/vc_column_text][vc_empty_space height="52px"][pillar_video_modal layout="embed-small" colour="video-play-icon--light" color="video-play-icon--light" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][pillar_hero layout="video-popup" image="745"][vc_column_text]
<h1 style="text-align: center;">Digital, Delivered.</h1>
<p class="lead" style="text-align: center;">Beautiful front-end components
built for modern startups.</p>

<div style="text-align: center;"><a class="btn" href="#"><span class="btn__text">PURCHASE NOW</span></a></div>
[/vc_column_text][pillar_video_modal layout="embed-small" colour="video-play-icon--light" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_hero][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_text_image layout="right" image="908"][vc_column_text]
<h3>Bold, Flexible, <em>Robust.</em></h3>
<p class="lead">Pillar features a block-based design that enables near unlimited page combinations</p>
[/vc_column_text][pillar_icon_box icon="icon-Love-Window" layout="side-small-color" title="Visual Composer Page Builder"]Building beautiful websites has never been this easy, or fun! Visual Composer allows you to assemble, edit content and adjust style options: all in the comfort of your browser.[/pillar_icon_box][pillar_icon_box icon="icon-File-Edit" layout="side-small-color" title="100+ Demo Pages"]Kickstart your project with our vast selection of carefully crafted demo pages, or build your own with uniquely styled content blocks.[/pillar_icon_box][/pillar_text_image][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="bg--secondary"][vc_column][pillar_text_image image="243"][vc_column_text]
<h3>Diverse, Beautiful Components</h3>
<p class="lead">Pillar features a bevy of content blocks and layouts to create your website.</p>
[/vc_column_text][vc_column_text]

<hr />

[/vc_column_text][pillar_icon_box icon="icon-Fingerprint" title="Over 2,000 Icons"]Pillar includes the Icons Mind kit with each purchase.[/pillar_icon_box][pillar_icon_box icon="icon-Support" title="Support Included"]Each Pillar purchase comes with 6 months support included.[/pillar_icon_box][/pillar_text_image][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="679"][vc_column][vc_column_text]
<h6>WORK WITH PILLAR</h6>
<p class="lead">A global design agency specialising in the
art of brand storytelling</p>
<a class="btn btn--sm" href="#"><span class="btn__text">ARRANGE A CONSULTATION</span></a>[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_cover_sections_template' );
}

if(!( function_exists('ebor_elements_revslider_template') )){
function ebor_elements_revslider_template($data){
    $template               = array();
    $template['name']       = '65. Pillar - Elements Revolution Slider';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Revolution Slider</h1>
<p class="lead" style="text-align: center;">Pillar includes the amazing Revolution Slider so you can build the most complex hero sections with zero effort.</p>
<p style="text-align: center;">Totally optional, the rest of our demo was built without this, so don't feel you have to use the plugin if you don't want, we've included it so that those who love big, badass sliders can create the layouts of their dreams!</p>
<p style="text-align: center;"><a class="btn btn--square" href="https://revolution.themepunch.com/examples/">View all examples</a></p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][rev_slider alias="classic-carousel2"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][rev_slider alias="classicslider1"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][rev_slider alias="content-tabs"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_revslider_template' );
}

if(!( function_exists('ebor_elements_form_elements_template') )){
function ebor_elements_form_elements_template($data){
    $template               = array();
    $template['name']       = '66. Pillar - Elements Form Elements';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Form Elements</h1>
<p class="lead" style="text-align: center;">Pillar features a number of radial bar styles suited to a range of purposes. Bar percentage is controled easily via one data attribute.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Text Inputs</h4>
[/vc_column_text][contact-form-7 id="321"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Text Inputs with Icons</h4>
[/vc_column_text][contact-form-7 id="347"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">File Inputs</h4>
[/vc_column_text][contact-form-7 id="327"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">Radio Inputs</h4>
[/vc_column_text][contact-form-7 id="330"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">Checkbox Inputs</h4>
[/vc_column_text][contact-form-7 id="333"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">Merged Form</h4>
[/vc_column_text][contact-form-7 id="231"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_form_elements_template' );
}

if(!( function_exists('ebor_elements_subscribe_form_elements_template') )){
function ebor_elements_subscribe_form_elements_template($data){
    $template               = array();
    $template['name']       = '67. Pillar - Elements Subcribe Form Elements';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Form Elements</h1>
<p class="lead" style="text-align: center;">Pillar features a number of radial bar styles suited to a range of purposes. Bar percentage is controled easily via one data attribute.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Text Inputs</h4>
[/vc_column_text][contact-form-7 id="321"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Text Inputs with Icons</h4>
[/vc_column_text][contact-form-7 id="347"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">File Inputs</h4>
[/vc_column_text][contact-form-7 id="327"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">Radio Inputs</h4>
[/vc_column_text][contact-form-7 id="330"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">Checkbox Inputs</h4>
[/vc_column_text][contact-form-7 id="333"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2" el_class="text-center"][vc_column_text]
<h4 style="text-align: center;">Merged Form</h4>
[/vc_column_text][contact-form-7 id="231"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_subscribe_form_elements_template' );
}

if(!( function_exists('ebor_elements_hover_tiles_template') )){
function ebor_elements_hover_tiles_template($data){
    $template               = array();
    $template['name']       = '68. Pillar - Elements Hover Tiles';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Hover Tiles</h1>
<p class="lead" style="text-align: center;">Ideal for showcasing content from a collection in a visually appealing fashion, hover elements offer flexibility and robustness.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row css=".vc_custom_1464788373210{padding-bottom: 0px !important;}"][vc_column][vc_column_text]
<h4>Flexible Title Areas</h4>
Easily control the alignment of titles on hover tiles by adjusting the settings
attribute (eg: center,left).[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1464788664006{padding-bottom: 0px !important;}"][vc_column width="1/2"][pillar_hover_tile image="108" title="Top Left" subtitle="Project Description" link="#"][pillar_hover_tile type="center,left" image="131" title="Center Left" subtitle="Project Description" link="#"][pillar_hover_tile type="bottom,left" image="133" title="Bottom Left" subtitle="Project Description" link="#"][/vc_column][vc_column width="1/2"][pillar_hover_tile type="top,right" image="132" title="Top Right" subtitle="Project Description" link="#"][pillar_hover_tile type="center,right" image="130" title="Center Right" subtitle="Project Description" link="#"][pillar_hover_tile type="bottom,right" image="134" title="Bottom Right" subtitle="Project Description" link="#"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][pillar_hover_tile type="top,center" image="102" title="Centered" subtitle="Project Description" link="#"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_hover_tiles_template' );
}

if(!( function_exists('ebor_elements_images_template') )){
function ebor_elements_images_template($data){
    $template               = array();
    $template['name']       = '69. Pillar - Elements Images';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Visual Composer Images</h1>
<p class="lead" style="text-align: center;">Pillar comes complete with Visual Composer, providing an array of stylish options for displaying images.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Pillar Carousel Two Columns</h4>
[/vc_column_text][pillar_carousel count="2" image="1120,1121,1119,1118,1123"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Pillar Carousel Three Columns</h4>
[/vc_column_text][pillar_carousel count="3" image="1120,1121,1119,1118,1123"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Pillar Carousel Four Columns</h4>
[/vc_column_text][pillar_carousel image="1120,1121,1119,1118,1123"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Single Image</h4>
[/vc_column_text][vc_single_image image="1193" img_size="large"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Image Flex Gallery</h4>
[/vc_column_text][vc_gallery interval="3" images="1193,1196,1197,1237,1134" img_size="large" onclick=""][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Image Carousel Gallery</h4>
[/vc_column_text][vc_images_carousel images="1197,1196,1195,1131,1134,1237" img_size="full" onclick="link_no" slides_per_view="3" wrap="yes"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_images_template' );
}

if(!( function_exists('ebor_elements_charts_template') )){
function ebor_elements_charts_template($data){
    $template               = array();
    $template['name']       = '70. Pillar - Elements Charts';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Charts</h1>
<p class="lead" style="text-align: center;">Pillars uses the power of Visual Composer to deliver clean and easy to customise charts.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][vc_column_text]
<h4 style="text-align: center;">Line Chart</h4>
[/vc_column_text][vc_line_chart style="modern" values="%5B%7B%22title%22%3A%22One%22%2C%22y_values%22%3A%2210%3B%2015%3B%2020%3B%2025%3B%2027%3B%2025%3B%2023%3B%2025%22%2C%22color%22%3A%22blue%22%7D%2C%7B%22title%22%3A%22Two%22%2C%22y_values%22%3A%2225%3B%2018%3B%2016%3B%2017%3B%2020%3B%2025%3B%2030%3B%2035%22%2C%22color%22%3A%22pink%22%7D%5D"][/vc_column][vc_column width="1/3"][vc_column_text]
<h4 style="text-align: center;">Round Chart</h4>
[/vc_column_text][vc_round_chart stroke_width="2" stroke_color="blue"][/vc_column][vc_column width="1/3"][vc_column_text]
<h4 style="text-align: center;">Pie Chart</h4>
[/vc_column_text][vc_pie color="blue" units="%"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_charts_template' );
}

if(!( function_exists('ebor_elements_icon_combinations_template') )){
function ebor_elements_icon_combinations_template($data){
    $template               = array();
    $template['name']       = '71. Pillar - Elements Icon Combinations';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Icon Combinations</h1>
<p class="lead" style="text-align: center;">Showcase features and services in style with the exclusive <a href="https://www.iconsmind.com/" target="_blank">Icons Mind</a>with over 2,000 hand-drawn icons included in every Pillar purchase.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Standard Grid-Based Icons</h4>
[/vc_column_text][vc_empty_space][vc_row_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Ship" title="New Startups"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" title="Personal Portfolios"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Shop-2" title="Online Storefronts"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Small Grid-Based Icons</h4>
[/vc_column_text][vc_empty_space][vc_row_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Ship" layout="small" title="New Startups"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" layout="small" title="Personal Portfolios"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Shop-2" layout="small" title="Online Storefronts"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Large Grid-Based Icons</h4>
[/vc_column_text][vc_empty_space][vc_row_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Ship" layout="large" title="New Startups"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" layout="large" title="Personal Portfolios"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Shop-2" layout="large" title="Online Storefronts"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Boxed Icons</h4>
[/vc_column_text][vc_empty_space][vc_row_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Ship" layout="boxed" title="New Startups"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" layout="boxed" title="Personal Portfolios"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Shop-2" layout="boxed" title="Online Storefronts"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Combined Icon + Title</h4>
[/vc_column_text][vc_empty_space][vc_row_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Ship" layout="combined" title="New Startups"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Fingerprint-2" layout="combined" title="Personal Portfolios"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/3"][pillar_icon_box icon="icon-Shop-2" layout="combined" title="Online Storefronts"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Side Icon Small</h4>
[/vc_column_text][vc_empty_space][vc_row_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Ship" layout="side-small" title="New Startups"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Fingerprint-2" layout="side-small" title="Personal Portfolios"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Side Icon Large</h4>
[/vc_column_text][vc_empty_space][vc_row_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Ship" layout="side-large" title="New Startups"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][vc_column_inner width="1/2"][pillar_icon_box icon="icon-Fingerprint-2" layout="side-large" title="Personal Portfolios"]Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/pillar_icon_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_icon_combinations_template' );
}

if(!( function_exists('ebor_elements_maps_template') )){
function ebor_elements_maps_template($data){
    $template               = array();
    $template['name']       = '72. Pillar - Elements Maps';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Map Embeds</h1>
<p class="lead" style="text-align: center;">Embed maps easily with a traditional iframe and choose from standard or black and white styling.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Iframe Embed</h4>
[/vc_column_text][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBmcmFtZWJvcmRlciUzRCUyMjAlMjIlMjBzdHlsZSUzRCUyMmJvcmRlciUzQTAlMjIlMjBhbGxvd2Z1bGxzY3JlZW4lM0UlM0MlMkZpZnJhbWUlM0U="][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Iframe Embed Inline</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="7/12"][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBmcmFtZWJvcmRlciUzRCUyMjAlMjIlMjBzdHlsZSUzRCUyMmJvcmRlciUzQTAlMjIlMjBhbGxvd2Z1bGxzY3JlZW4lM0UlM0MlMkZpZnJhbWUlM0U="][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="4/12"][vc_column_text]
<h4>Our Headquarters</h4>

<hr />

991 Madison Avenue
Manhattan, New York City
New York 10075

+91 37264 28266
<a class="block" href="#">hello@pillarstudio.net</a>

<a class="btn btn--sm btn--primary" href="#"><span class="btn__text">GET DIRECTIONS</span></a>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Styled Map Embed</h4>
[/vc_column_text][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBmcmFtZWJvcmRlciUzRCUyMjAlMjIlMjBzdHlsZSUzRCUyMmJvcmRlciUzQTAlMjIlMjBhbGxvd2Z1bGxzY3JlZW4lM0UlM0MlMkZpZnJhbWUlM0U=" el_class="styled"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDYzMDQuODI5OTg2MTMxMjcxJTIxMmQtMTIyLjQ3NDY5NjgwMzMwOTIlMjEzZDM3LjgwMzc0NzUyMTYwNDQzJTIxMm0zJTIxMWYwJTIxMmYwJTIxM2YwJTIxM20yJTIxMWkxMDI0JTIxMmk3NjglMjE0ZjEzLjElMjEzbTMlMjExbTIlMjExczB4ODA4NTg2ZTYzMDI2MTVhMSUyNTNBMHg4NmJkMTMwMjUxNzU3YzAwJTIxMnNTdG9yZXklMkJBdmUlMjUyQyUyQlNhbiUyQkZyYW5jaXNjbyUyNTJDJTJCQ0ElMkI5NDEyOSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDM1ODI2NDMyMDUxJTIyJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBmcmFtZWJvcmRlciUzRCUyMjAlMjIlMjBzdHlsZSUzRCUyMmJvcmRlciUzQTAlMjIlMjBhbGxvd2Z1bGxzY3JlZW4lM0UlM0MlMkZpZnJhbWUlM0U=" el_class="styled"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_maps_template' );
}

if(!( function_exists('ebor_elements_modals_template') )){
function ebor_elements_modals_template($data){
    $template               = array();
    $template['name']       = '73. Pillar - Elements Maps';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Modals</h1>
<p class="lead" style="text-align: center;">Pillar includes simple and intuitive markup making it easier than ever to create autoshow, trigger and cookies enabled modals.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][pillar_modal button_text="Shop Sale" image="745"][vc_column_text]
<h2>Shop Selected Summer Savings</h2>
Up to 60% off our remaining summer collection. Limited stock only - get in quick.

<a class="btn" href="#"><span class="btn__text">ENTER SALE</span></a>[/vc_column_text][/pillar_modal][/vc_column][vc_column width="1/4"][pillar_modal button_text="Subscribe"][vc_column_text]
<h4 style="text-align: center;">Keep Informed</h4>
<p class="lead" style="text-align: center;">Subscribe for free resources and news updates.</p>
[/vc_column_text][contact-form-7 id="347"][/pillar_modal][/vc_column][vc_column width="1/4"][pillar_modal button_text="Play Film" video="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/pillar_modal][/vc_column][vc_column width="1/4"][pillar_modal align="" button_text="More Info" delay="" cookie="" manual_id=""][vc_single_image image="648" img_size="large" alignment="right"][vc_empty_space][vc_column_text]
<div class="card__title">
<h5>User Interface Design</h5>
</div>
<h2><em>An essential focus for digital products</em></h2>
Grok integrate thinker-maker-doer piverate entrepreneur sticky note iterate waterfall is so 2000 and late 360 campaign cortado quantitative vs. qualitative.[/vc_column_text][/pillar_modal][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_modals_template' );
}

if(!( function_exists('ebor_elements_parallax_template') )){
function ebor_elements_parallax_template($data){
    $template               = array();
    $template['name']       = '74. Pillar - Elements Parallax';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Parallax</h1>
<p class="lead" style="text-align: center;">Pillar features high-perfomance parallax scrolling optimised for all browsers and mouse inputs, all controllable via simple controls</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_height="yes" parallax="content-moving" parallax_image="89"][vc_column][vc_column_text]
<h2 style="text-align: center;">Parallax is easy…</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row full_height="yes" parallax="content-moving" parallax_image="88"][vc_column][vc_column_text]
<h2 style="text-align: center;">when you're working with Pillar</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row full_height="yes" parallax="content-moving" parallax_image="90"][vc_column][vc_column_text]
<h2 style="text-align: center;">So purchase Pillar now.</h2>
<p style="text-align: center;"><a class="btn btn--primary" href="#"><span class="btn__text">PURCHASE ON THEMEFOREST</span></a></p>
[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_parallax_template' );
}

if(!( function_exists('ebor_elements_pricing_options_template') )){
function ebor_elements_pricing_options_template($data){
    $template               = array();
    $template['name']       = '75. Pillar - Elements Pricing Options';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Pricing Options</h1>
<p class="lead" style="text-align: center;">Pillar includes a robust selection of pricing plans suited to multiple products and services whether it be a single product, subscription service or plan-based offering.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Simple Pricing Options</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" title="Starter" price="FREE" button_text="Subscribe Now" button_url="#"]Powered by
Visual Composer[/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" title="Freelancer" price="19" button_text="Subscribe Now" button_url="#" currency="$"]Comes with 6 months
of awesome support![/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" title="Agency" price="69" button_text="Subscribe Now" button_url="#" currency="$"]You’ll love Pillar
as much as we do![/pillar_pricing_table][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Empahsise Pricing Options</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" layout="blank" title="Starter" price="FREE" button_text="Subscribe Now" button_url="#"]Powered by
Visual Composer[/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" layout="emphasise" title="Freelancer" price="19" button_text="Subscribe Now" button_url="#" currency="$"]Comes with 6 months
of awesome support![/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" layout="blank" title="Agency" price="69" button_text="Subscribe Now" button_url="#" currency="$"]You’ll love Pillar
as much as we do![/pillar_pricing_table][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Image Pricing Options</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" layout="image" title="Starter" price="FREE" button_text="Subscribe Now" button_url="#" image="101"]Powered by
Visual Composer[/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" layout="image" title="Freelancer" price="19" button_text="Subscribe Now" button_url="#" currency="$" image="100"]Comes with 6 months
of awesome support![/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="" layout="image" title="Agency" price="69" button_text="Subscribe Now" button_url="#" currency="$" image="102"]You’ll love Pillar
as much as we do![/pillar_pricing_table][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Icon Pricing Options</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="icon-Mustache-2" layout="icon" title="Starter" price="FREE" button_text="Subscribe Now" button_url="#" image="101"]Powered by
Visual Composer[/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="icon-Mustache-3" layout="icon" title="Freelancer" price="19" button_text="Subscribe Now" button_url="#" currency="$" image="100"]Comes with 6 months
of awesome support![/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="icon-Mustache-4" layout="icon" title="Agency" price="69" button_text="Subscribe Now" button_url="#" currency="$" image="102"]You’ll love Pillar
as much as we do![/pillar_pricing_table][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Minimal Pricing Options</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="icon-Mustache-2" layout="minimal" title="Starter" price="FREE" button_text="Subscribe Now" button_url="#" image="101"]Powered by
Visual Composer[/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="icon-Mustache-3" layout="minimal" title="Freelancer" price="19" button_text="Subscribe Now" button_url="#" currency="$" image="100"]Comes with 6 months
of awesome support![/pillar_pricing_table][/vc_column_inner][vc_column_inner width="1/3"][pillar_pricing_table icon="icon-Mustache-4" layout="minimal" title="Agency" price="69" button_text="Subscribe Now" button_url="#" currency="$" image="102"]You’ll love Pillar
as much as we do![/pillar_pricing_table][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_pricing_options_template' );
}

if(!( function_exists('ebor_elements_progress_bars_template') )){
function ebor_elements_progress_bars_template($data){
    $template               = array();
    $template['name']       = '76. Pillar - Elements Progress Bars';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Linear Bars</h1>
<p class="lead" style="text-align: center;">Create attractive progress bars with ease, control the bar percentage by editing a single data attribute.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Horizontal Thick</h4>
[/vc_column_text][pillar_skill_bar_block title="Amenity" amount="45"][pillar_skill_bar_block title="Transport" amount="75"][pillar_skill_bar_block title="Nightlife" amount="65"][pillar_skill_bar_block title="Safety" amount="95"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Horizontal Thin</h4>
[/vc_column_text][pillar_skill_bar_block layout="horizontal-thin" title="Amenity" amount="45"][pillar_skill_bar_block layout="horizontal-thin" title="Transport" amount="75"][pillar_skill_bar_block layout="horizontal-thin" title="Nightlife" amount="65"][pillar_skill_bar_block layout="horizontal-thin" title="Safety" amount="95"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row el_class="text-center"][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Vertical Thick</h4>
[/vc_column_text][pillar_skill_bar_block layout="vertical-thick" title="Amenity" amount="45"][pillar_skill_bar_block layout="vertical-thick" title="Transport" amount="75"][pillar_skill_bar_block layout="vertical-thick" title="Nightlife" amount="65"][pillar_skill_bar_block layout="vertical-thick" title="Safety" amount="95"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Vertical Thin</h4>
[/vc_column_text][pillar_skill_bar_block layout="vertical-thin" title="Amenity" amount="45"][pillar_skill_bar_block layout="vertical-thin" title="Transport" amount="75"][pillar_skill_bar_block layout="vertical-thin" title="Nightlife" amount="65"][pillar_skill_bar_block layout="vertical-thin" title="Safety" amount="95"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Progress Bars</h4>
[/vc_column_text][vc_progress_bar bgcolor="blue" units="%"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Striped Progress Bars</h4>
[/vc_column_text][vc_progress_bar bgcolor="blue" options="striped" units="%"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_progress_bars_template' );
}


if(!( function_exists('ebor_elements_masonry_post_grids_template') )){
function ebor_elements_masonry_post_grids_template($data){
    $template               = array();
    $template['name']       = '77. Pillar - Elements Masonry Post Grids';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Masonry Post Grids</h1>
<p class="lead" style="text-align: center;">Pillar comes complete with Visual Composers flexible Post Grids, giving you powerful options for displaying your content.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Masonry Regular Grid</h4>
[/vc_column_text][vc_basic_grid post_type="post" max_items="6" item="masonryGrid_Default" grid_id="vc_gid:1470408261622-333e7dd9-0a70-9"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Masonry Load More Grid</h4>
[/vc_column_text][vc_basic_grid post_type="post" max_items="-1" style="load-more" items_per_page="3" item="masonryGrid_Default" grid_id="vc_gid:1470408261625-9848bee3-2a95-3" btn_add_icon="true" btn_custom_onclick="true"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Masonry Pagination Grid</h4>
[/vc_column_text][vc_basic_grid post_type="post" max_items="6" style="pagination" items_per_page="3" paging_color="blue" loop="yes" item="masonryGrid_Default" grid_id="vc_gid:1470408261627-fe87b0ec-fe3b-1"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_masonry_post_grids_template' );
}

if(!( function_exists('ebor_elements_masonry_media_grids_template') )){
function ebor_elements_masonry_media_grids_template($data){
    $template               = array();
    $template['name']       = '78. Pillar - Elements Masonry Media Grids';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Masonry Media Grids</h1>
<p class="lead" style="text-align: center;">Pillar comes complete with Visual Composer which offers stunning and flexible Media Grids to show your content off in style.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_masonry_media_grid grid_id="vc_gid:1470676353784-dc9452d0-ed4d-10" include="1226,1193,1200,1119,1132,1120,1124,1130"][/vc_column][/vc_row][vc_row][vc_column][vc_masonry_media_grid element_width="3" gap="0" grid_id="vc_gid:1470676364418-b9e62b47-37e2-4" include="1226,1193,1200,1119,1132,1120,1124,1130"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_masonry_media_grids_template' );
}

if(!( function_exists('ebor_elements_call_to_action_template') )){
function ebor_elements_call_to_action_template($data){
    $template               = array();
    $template['name']       = '79. Pillar - Elements Call To Action';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Call To Actions</h1>
<p class="lead" style="text-align: center;">Pillar features simple yet easy to use Call to Action blocks, ready to captivate your audience.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row el_class="bg--white"][vc_column][vc_column_text]
<h3 style="text-align: center;">Sign-up today and recieve our founders bonus</h3>
[/vc_column_text][contact-form-7 id="344"][vc_column_text]
<p style="text-align: center;">By signing up you agree to the <a href="#">Terms &amp; Conditions</a></p>
[/vc_column_text][/vc_column][/vc_row][vc_row el_class="bg--primary"][vc_column][vc_column_text css=".vc_custom_1470675299103{margin-bottom: 0px !important;}"]
<h4 style="text-align: center;">Interested in working with Pillar?</h4>
<p style="text-align: center;"><a class="btn btn--sm" href="#"><span class="btn__text">LET'S TALK TURKEY</span></a></p>
[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_cta h2="Interested in working with Pillar?" add_button="right" btn_title="LETS TALK TURKEY" btn_style="flat" btn_shape="round" btn_color="blue" btn_custom_onclick="true"]We’d love to hear from you to discuss web design, product development or to hear your new startup idea.[/vc_cta][/vc_column][/vc_row][vc_row el_class="bg--primary"][vc_column][vc_cta h2="Interested in working with Pillar?" style="custom" add_button="left" btn_title="LETS TALK TURKEY" btn_style="flat" btn_shape="round" btn_color="white" btn_align="left" btn_custom_onclick="true" custom_background="#425cbb" custom_text="#ffffff" css=".vc_custom_1470675843826{border-top-width: 0px !important;border-right-width: 0px !important;border-bottom-width: 0px !important;border-left-width: 0px !important;}" btn_button_block="true"]We’d love to hear from you to discuss web design, product development or to hear your new startup idea.[/vc_cta][/vc_column][/vc_row][vc_row][vc_column][vc_cta h2="Interested in working with Pillar?" txt_align="center" add_button="bottom" btn_title="LETS TALK TURKEY" btn_style="flat" btn_shape="round" btn_color="blue" btn_align="center" btn_custom_onclick="true"]We’d love to hear from you to discuss web design, product development or to hear your new startup idea.[/vc_cta][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_call_to_action_template' );
}

if(!( function_exists('ebor_elements_progress_radials_template') )){
function ebor_elements_progress_radials_template($data){
    $template               = array();
    $template['name']       = '80. Pillar - Elements Progress Radials';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Radial Bars</h1>
<p class="lead" style="text-align: center;">Pillar features a number of radial bar styles suited to a range of purposes. Bar percentage is controlled easily via one data attribute.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Percentage Radials</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="percentage-radial" title="Amenity" amount="90"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="percentage-radial" title="Transport" amount="60"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="percentage-radial" title="Nightlife" amount="30"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="percentage-radial" title="Safety" amount="75"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Titled Radials</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="titled-radial" title="Amenity" amount="90"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="titled-radial" title="Transport" amount="60"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="titled-radial" title="Nightlife" amount="30"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="titled-radial" title="Safety" amount="75"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Process Radials</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="process-radial" title="Amenity" amount="90"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="process-radial" title="Transport" amount="60"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="process-radial" title="Nightlife" amount="30"][/vc_column_inner][vc_column_inner width="1/4"][pillar_skill_bar_block layout="process-radial" title="Safety" amount="75"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_progress_radials_template' );
}

if(!( function_exists('ebor_elements_sliders_template') )){
function ebor_elements_sliders_template($data){
    $template               = array();
    $template['name']       = '81. Pillar - Elements Sliders';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Sliders</h1>
<p class="lead" style="text-align: center;">Pillar leverages the power of Owl Carousel to deliver flexible and performant image and content sliders with data attribute customizers</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Image Slider</h4>
[/vc_column_text][vc_column_text]

[gallery layout="slider" ids="21,62,63"]

[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Testimonial Slider</h4>
[/vc_column_text][pillar_testimonial filter="10"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Client Carousel</h4>
[/vc_column_text][pillar_client][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Visual Composer Image Slider</h4>
[/vc_column_text][vc_images_carousel images="376,526,549,521" img_size="1140x400"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Flex Post Slider</h4>
[/vc_column_text][vc_posts_slider count="3" interval="3" link="link_no" thumb_size="1000x400" posttypes="post"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Nivo Post Slider</h4>
[/vc_column_text][vc_posts_slider type="nivo" count="3" interval="3" link="link_no" thumb_size="1000x400" posttypes="post"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_sliders_template' );
}

if(!( function_exists('ebor_elements_tabbed_content_template') )){
function ebor_elements_tabbed_content_template($data){
    $template               = array();
    $template['name']       = '82. Pillar - Elements Tabbed Content';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Tabbed Content</h1>
<p class="lead" style="text-align: center;">Conceal large chunks of content in a multitude of ways with Pillar's attractive tabs. Markup for tabs is concise and simple to edit.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Hollow Button Tabs</h4>
[/vc_column_text][pillar_tabs][pillar_tabs_content icon="" title="First Facet"]
<p style="text-align: center;">Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.</p>
[/pillar_tabs_content][pillar_tabs_content icon="" title="Additional Point"]
<p style="text-align: center;">Gamification investor focus facebook sales angel investor churn rate conversion beta accelerator infographic www.discoverartisans.com rockstar. Partner network partnership founders user experience assets www.discoverartisans.com angel investor. Return on investment beta market www.discoverartisans.com validation freemium conversion.</p>
[/pillar_tabs_content][pillar_tabs_content icon="" title="Final Feature"]
<p style="text-align: center;">Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.</p>
[/pillar_tabs_content][/pillar_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Text Tabs</h4>
[/vc_column_text][pillar_tabs layout="tabs-2 text-center"][pillar_tabs_content icon="" title="First Facet"]
<p style="text-align: center;">Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.</p>
[/pillar_tabs_content][pillar_tabs_content icon="" title="Additional Point"]
<p style="text-align: center;">Gamification investor focus facebook sales angel investor churn rate conversion beta accelerator infographic www.discoverartisans.com rockstar. Partner network partnership founders user experience assets www.discoverartisans.com angel investor. Return on investment beta market www.discoverartisans.com validation freemium conversion.</p>
[/pillar_tabs_content][pillar_tabs_content icon="" title="Final Feature"]
<p style="text-align: center;">Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.</p>
[/pillar_tabs_content][/pillar_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Icon Tabs</h4>
[/vc_column_text][pillar_tabs layout="tabs-2 text-center pillar-icon-tabs"][pillar_tabs_content icon="icon-Astronaut" title="First Facet"]
<p style="text-align: center;">Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.</p>
[/pillar_tabs_content][pillar_tabs_content icon="icon-Rocket" title="Additional Point"]
<p style="text-align: center;">Gamification investor focus facebook sales angel investor churn rate conversion beta accelerator infographic www.discoverartisans.com rockstar. Partner network partnership founders user experience assets www.discoverartisans.com angel investor. Return on investment beta market www.discoverartisans.com validation freemium conversion.</p>
[/pillar_tabs_content][pillar_tabs_content icon="icon-Fingerprint" title="Final Feature"]
<p style="text-align: center;">Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.</p>
[/pillar_tabs_content][/pillar_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Toggle Tabs</h4>
[/vc_column_text][pillar_tabs layout="tabs-4 text-center"][pillar_tabs_content icon="icon-Astronaut" title="First Facet"]
<p style="text-align: center;">Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.</p>
[/pillar_tabs_content][pillar_tabs_content icon="icon-Rocket" title="Additional Point"]
<p style="text-align: center;">Gamification investor focus facebook sales angel investor churn rate conversion beta accelerator infographic www.discoverartisans.com rockstar. Partner network partnership founders user experience assets www.discoverartisans.com angel investor. Return on investment beta market www.discoverartisans.com validation freemium conversion.</p>
[/pillar_tabs_content][/pillar_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Tabs</h4>
[/vc_column_text][vc_tta_tabs][vc_tta_section title="First Facet" tab_id="1470325219161-6da367bc-a402"][vc_column_text]Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.[/vc_column_text][/vc_tta_section][vc_tta_section title="Additional Point" tab_id="1470325219211-ede5a786-f0f9"][vc_column_text]Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.[/vc_column_text][/vc_tta_section][/vc_tta_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Tabs Example Two</h4>
[/vc_column_text][vc_tta_tabs alignment="center" active_section="1" pagination_style="outline-square"][vc_tta_section title="First Facet" tab_id="1470325340429-ca29124d-90af"][vc_column_text]Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.[/vc_column_text][/vc_tta_section][vc_tta_section title="Additional Point" tab_id="1470325340575-2770fef4-6eaa"][vc_column_text]Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.[/vc_column_text][/vc_tta_section][/vc_tta_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h4 style="text-align: center;">Visual Composer Tabs Example Three</h4>
[/vc_column_text][vc_tta_tabs style="flat" tab_position="bottom" alignment="right" active_section="1" pagination_style="outline-square"][vc_tta_section title="First Facet" tab_id="1470325503236-fa58a8bf-c7e7"][vc_column_text]Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.[/vc_column_text][/vc_tta_section][vc_tta_section title="Additional Point" tab_id="1470325503394-0d9e5125-f05e"][vc_column_text]Strategy gamification alpha startup angel investor channels customer direct mailing burn rate churn rate bandwidth innovator seed round. Ramen disruptive graphical user interface. Infrastructure bootstrapping branding leverage twitter channels MVP iPad launch party non-disclosure agreement. Infrastructure validation android release success.[/vc_column_text][/vc_tta_section][/vc_tta_tabs][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_tabbed_content_template' );
}

if(!( function_exists('ebor_elements_twitter_feeds_template') )){
function ebor_elements_twitter_feeds_template($data){
    $template               = array();
    $template['name']       = '83. Pillar - Elements Twitter Feeds';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Twitter Feeds</h1>
<p class="lead" style="text-align: center;">Easily embed feeds using the Twitter Widget function, control the amount of Tweets and display as a slider or list.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Tweet Slider</h4>
[/vc_column_text][pillar_twitter title="492085717044981760"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Tweet Slider Box</h4>
[/vc_column_text][pillar_twitter layout="carousel-box" title="492085717044981760"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Tweets List</h4>
[/vc_column_text][pillar_twitter layout="list" title="492085717044981760"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_twitter_feeds_template' );
}

if(!( function_exists('ebor_elements_testimonials_template') )){
function ebor_elements_testimonials_template($data){
    $template               = array();
    $template['name']       = '84. Pillar - Elements Testimonials';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Testimonials</h1>
<p class="lead" style="text-align: center;">Pillar includes a number of testimonial styles that cater to products and services of all kinds</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Avatar Style One</h4>
[/vc_column_text][pillar_testimonial pppage="3" layout="grid" filter="8"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4>Avatar Style Two</h4>
[/vc_column_text][pillar_testimonial pppage="2" layout="grid-large" filter="10"][/vc_column][/vc_row][vc_row css=".vc_custom_1465559489321{padding-bottom: 220px !important;}"][vc_column][vc_column_text]
<h4>Avatar Slider</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][pillar_testimonial pppage="2" layout="avatar-slider" filter="6"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1465559517659{padding-bottom: 0px !important;}" el_class="bg--secondary"][vc_column css=".vc_custom_1465559498764{margin-top: -160px !important;}"][pillar_testimonial pppage="1" layout="large" filter="9"][/vc_column][/vc_row][vc_row el_class="bg--white"][vc_column][pillar_testimonial filter="7"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_testimonials_template' );
}

if(!( function_exists('ebor_elements_video_players_template') )){
function ebor_elements_video_players_template($data){
    $template               = array();
    $template['name']       = '85. Pillar - Elements Video Players';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Video Players</h1>
<p class="lead" style="text-align: center;">Pillar allows you to easily embed videos both on the page or via a modal with stylish image covers to ensure your site's aesthetic is never compromised</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Inline Iframe Embeds (Youtube, Vimeo etc.)</h4>
[/vc_column_text][vc_row_inner][vc_column_inner width="1/2"][pillar_video_inline layout="embed" image="100" embed="https://vimeo.com/ondemand/viewfromabluemoon4k/147860358"][/vc_column_inner][vc_column_inner width="1/2"][pillar_video_inline layout="embed" image="101" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column width="1/4"][/vc_column][vc_column width="1/2"][vc_column_text]
<h4 style="text-align: center;">Inline Self-Hosted HTML5 Video</h4>
[/vc_column_text][pillar_video_inline image="88" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.mp4" ogv="http://tommustester.wpengine.com/wp-content/uploads/2016/06/video-2.ogv"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Modal Iframe Embeds (Youtube, Vimeo etc)</h4>
[/vc_column_text][vc_row_inner][vc_column_inner el_class="text-center" width="1/3"][pillar_video_modal layout="embed-large" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/vc_column_inner][vc_column_inner el_class="text-center" width="1/3"][pillar_video_modal layout="embed-small" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/vc_column_inner][vc_column_inner el_class="text-center" width="1/3"][pillar_video_modal layout="embed-lozenge" text="Watch The Overview" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Modal Self-Hosted Embeds</h4>
[/vc_column_text][vc_row_inner][vc_column_inner el_class="text-center" width="1/3"][pillar_video_modal text="Watch The Overview" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.mp4" ogv="http://tommustester.wpengine.com/wp-content/uploads/2016/06/video-2.ogv"][/vc_column_inner][vc_column_inner el_class="text-center" width="1/3"][pillar_video_modal layout="local-small" text="Watch The Overview" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.mp4" ogv="http://tommustester.wpengine.com/wp-content/uploads/2016/06/video-2.ogv"][/vc_column_inner][vc_column_inner el_class="text-center" width="1/3"][pillar_video_modal layout="local-lozenge" text="Watch The Overview" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.mp4" ogv="http://tommustester.wpengine.com/wp-content/uploads/2016/06/video-2.ogv"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row el_class="bg--secondary"][vc_column width="6/12"][pillar_video_inline layout="embed" image="62" embed="https://www.youtube.com/watch?v=aiTIrxGT4Dk"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="5/12"][vc_column_text]
<h6>YOUTUBE VIDEO</h6>
<h4>A Modular Approach</h4>
Pillar is a remarkably flexible and feature-complete HTML template built for modern startups, creatives, bloggers and more. Including tons of uniquely styled pages, Pillar combines aesthetic beauty with high-quality, semantic markup.[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="6/12"][pillar_video_inline image="89" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video-2.mp4" ogv="http://tommustester.wpengine.com/wp-content/uploads/2016/06/video-2.ogv"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="5/12"][vc_column_text]
<h6>LOCAL VIDEO</h6>
<h4>A Modular Approach</h4>
Pillar is a remarkably flexible and feature-complete HTML template built for modern startups, creatives, bloggers and more. Including tons of uniquely styled pages, Pillar combines aesthetic beauty with high-quality, semantic markup.[/vc_column_text][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_video_players_template' );
}

if(!( function_exists('ebor_elements_video_backgrounds_template') )){
function ebor_elements_video_backgrounds_template($data){
    $template               = array();
    $template['name']       = '86. Pillar - Elements Video Backgrounds';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Video Backgrounds</h1>
<p class="lead" style="text-align: center;">Use either your own video files or any Youtube video as the background to any element with Pillar's simple video background markup</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_video_background image="679" webm="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video.webm" mpfour="http://pillar.tommusdemos.wpengine.com/wp-content/uploads/sites/43/2016/06/video.mp4" ogv="http://tommustester.wpengine.com/wp-content/uploads/2016/06/video.ogv"][vc_column_text]
<h1 style="text-align: center;">Local Video
Background</h1>
[/vc_column_text][/pillar_video_background][/vc_column][/vc_row][vc_row full_width="stretch_row"][vc_column][pillar_video_background layout="embed" image="679" embed="9d8wWcJLnFI"][vc_column_text]
<h1 style="text-align: center;">YouTube Video
Background</h1>
[/vc_column_text][/pillar_video_background][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_video_backgrounds_template' );
}

if(!( function_exists('ebor_elements_post_grids_template') )){
function ebor_elements_post_grids_template($data){
    $template               = array();
    $template['name']       = '87. Pillar - Elements Post Grids';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Post Grids</h1>
<p class="lead" style="text-align: center;">Pillar comes complete with Visual Composers flexible Post Grids, giving you powerful options for displaying your content.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Regular Grid</h4>
[/vc_column_text][vc_basic_grid post_type="post" max_items="6" grid_id="vc_gid:1470408185020-0c21f64f-8f54-0"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Load More Grid</h4>
[/vc_column_text][vc_basic_grid post_type="post" max_items="-1" style="load-more" items_per_page="3" grid_id="vc_gid:1470408185024-805cd6bc-59cd-6" btn_add_icon="true" btn_custom_onclick="true"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]
<h4 style="text-align: center;">Pagination Grid</h4>
[/vc_column_text][vc_basic_grid post_type="post" max_items="6" style="pagination" items_per_page="3" paging_color="blue" loop="yes" grid_id="vc_gid:1470408185028-8e233f04-41d4-7"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_post_grids_template' );
}

if(!( function_exists('ebor_elements_media_grids_template') )){
function ebor_elements_media_grids_template($data){
    $template               = array();
    $template['name']       = '88. Pillar - Elements Media Grids';
    $template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/6"][/vc_column][vc_column width="2/3"][vc_column_text]
<h1 style="text-align: center;">Media Grids</h1>
<p class="lead" style="text-align: center;">Pillar comes complete with Visual Composer which offers stunning and flexible Media Grids to show your content off in style.</p>
[/vc_column_text][/vc_column][vc_column width="1/6"][/vc_column][/vc_row][vc_row][vc_column][vc_media_grid grid_id="vc_gid:1470676480054-387309de-031b-2" include="1119,1120,1121,1118,1132,1134,1123,1122,1133"][/vc_column][/vc_row][vc_row][vc_column][vc_media_grid element_width="3" gap="0" grid_id="vc_gid:1470676480057-c5a91ec4-ab6b-7" include="1119,1120,1121,1118,1132,1134,1123,1122"][/vc_column][/vc_row]
CONTENT;
    array_unshift($data, $template);
    return $data;
}
add_filter( 'vc_load_default_templates', 'ebor_elements_media_grids_template' );
}