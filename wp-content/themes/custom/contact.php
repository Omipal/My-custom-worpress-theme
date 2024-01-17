<?php /* Template Name: Contact Page */ 

get_header();
?>
<main>

<div class="main-scroll">

    <div class="row">
        <div class="col-md-2 "></div>
        <div class="col-md-4 no-padding-left">
            <h2>Contact our<br>team</h2>
        </div>
        <div class="col-md-4 no-padding-left">
            <p>
                Don't hesitate to get in touch with us! We love the challenge of turning your ideas into reality
                and are always ready to talk through any message.
            </p>
        </div>
        <div class="col-md-2 "></div>
    </div>

    <div class="google-map-wrapper" id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" alt="" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>

    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-2 no-padding-left col-sm-4">
            <div class="atail-place ">
                <span class="atail-place-title">San francisco</span>
                <span class="atail-place-text">Address<span>41 Madison Ave, Flr 25 New York, NY 10010 1-877-932-7111</span></span>
                <span class="atail-place-text">email<span><a href="mailto:sample@gmail.com"><span>sample@gmail.com</span></a></span></span>
                <span class="atail-place-text">Phone<span>+1 256 258 25 45</span></span>
            </div>
        </div>
        <div class="col-md-2 no-padding-left col-sm-4">
            <div class="atail-place ">
                <span class="atail-place-title">Bejing</span>
                <span class="atail-place-text">Address<span>41 Madison Ave, Flr 25 New York, NY 10010 1-877-932-7111</span></span>
                <span class="atail-place-text">email<span><a href="mailto:sample@gmail.com"><span>sample@gmail.com</span></a></span></span>
                <span class="atail-place-text">Phone<span>+1 256 258 25 45</span></span>
            </div>
        </div>
        <div class="col-md-2 no-padding-left col-sm-4">
            <div class="atail-place ">
                <span class="atail-place-title">New York</span>
                <span class="atail-place-text">Address<span>41 Madison Ave, Flr 25 New York, NY 10010 1-877-932-7111</span></span>
                <span class="atail-place-text">email<span><a href="mailto:sample@gmail.com"><span>sample@gmail.com</span></a></span></span>
                <span class="atail-place-text">Phone<span>+1 256 258 25 45</span></span>
            </div>

            <form action="#" method="POST" class="contact-form">
                <input type="text" placeholder="Name" name="name" required="">
                <input type="email" placeholder="Email" name="email" required="">
                <textarea placeholder="Message" name="text" cols="30" rows="10" required=""></textarea>
                <button type="submit">Send</button>
            </form>
            
        </div>
        <div class="col-md-4 ">
        </div>
    </div>

</div> <!-- main-scroll -->

<div class="grid-bg row">
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
</div>

</main>
<?php get_footer() ?>