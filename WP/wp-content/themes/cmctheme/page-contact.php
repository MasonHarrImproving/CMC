<?php
/*
    Template Name: Contact Page Template
*/
    get_header();
?>
<section class="contactContainer mainElement">
    <div class="mainContactInfoBox">
        <div class="nameBoxContainer">
            <p class="mainInfoText">Name</p>
            <input class="nameBox">
        </div>
        <div class="emailBoxContainer">
            <p class="mainInfoText">E-Mail Address</p>
            <input class="emailBox">
        </div>
        <div class="phoneBoxContainer">
            <p class="mainInfoText">Phone Number</p>
            <input class="phoneBox">
        </div>
    </div>
    <div class="commentBoxContainer">
        <p class="mainInfoText">Comment</p>
        <textarea class="commentBox"></textarea>
        <div class="submitBtn">Submit</div>
    </div>
    <div class="mapOfLocation" style="background-image:url(<?php bloginfo('template_url') ?>/images/maps.png)">
        <div class="innerInfoBox">
            <h1>Contact Us</h1>
            <div class="innerNumber"><p><i class="fa fa-mobile-phone"></i>614-464-3220</p></div>
            <div class="innerEmail"><p><i class="fa fa-at"></i>staff@columbusmetroclub.org</p></div>
            <div class="innerLocation"><p><i class="fa fa-map-pin"></i>Columbus Metropolitan Club Office</p></div>
            <div class="innerStreet"><p>100 East Broad Street<br>Suite 100<br>Columbus, Ohio 43215<br></p></div>
            <div class="inner2ndLocation"><p><i class="fa fa-map-pin"></i>Weekly Forum Location</p></div>
            <div class="inner2ndStreet"><p>The Boat House at Confluence Park<br>679 West Spring Street<br>Columbus, Ohio 43215<br></p></div>

        </div>
    </div>
</section>
<?php
    get_footer();
?>