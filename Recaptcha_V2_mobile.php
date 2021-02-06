<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Damian Nass - Full-Stack Developer</title>
    <meta name="author" content="Damian Nass">
    <meta property="og:title" content="Damian Nass - Full-Stack Developer">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style> 
#recaptcha {
    padding: 20px;
}
.contact-margin {
    margin-bottom: 30px;
}
.back-color-text {
    background-color: rgb(107 117 186 / 80%);
    margin: auto;
    max-width: fit-content;
    padding: 2px 5px;
    border-radius: 5px;
}
.section-heading {
    text-align: center;
    padding: 80px 45px;
}
.section-heading span {
    margin-top: 5px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 0.5px;
}

.text-shadow-text {
    text-shadow: -1px 2px 8px rgb(0 0 0 / 70%), 1px 1px 3px rgb(0 0 0 / 80%), -1px 1px 1px #ffffff;
}
    </style>
</head>
<body>
    
    <script>
      window.addEventListener('DOMContentLoaded', (event) => {
        var valuePixel = 476;
            if($(window).width() < valuePixel)
{
    document.getElementById("recaptcha-div").setAttribute('data-size','compact');
}else{
    document.getElementById("recaptcha-div").setAttribute('data-size','normal');
};
       });
    </script>
       

            <div class="section-heading back-color-text contact-margin">
            <span class=" text-shadow-text">Please resize display, and refresh page</span>
    <div id="recaptcha-div" class="g-recaptcha" data-theme="dark" data-callback="recaptchaCallback" data-sitekey="sitekey XXXXXXXXXXXXXXXXX"></div> 
    </div>
     
    <span class="text-shadow-text">OR another load DOM method:</span>

    <script>
      window.addEventListener('DOMContentLoaded', (event) => {
          var value2pixel = 476;
            if($(window).width() < value2pixel)
{
  document.getElementById("recaptcha-div2").innerHTML = "<div class='g-recaptcha' data-size='compact' data-theme='dark' data-callback='recaptchaCallback' data-sitekey='sitekey XXXXXXXXXXXXXXXXX'></div>";
}else{
    document.getElementById("recaptcha-div2").innerHTML = "<div class='g-recaptcha' data-size='normal' data-theme='dark' data-callback='recaptchaCallback' data-sitekey='sitekey XXXXXXXXXXXXXXXXX'></div>";
};
       });
    </script>
            <div id="recaptcha" class="section-heading back-color-text contact-margin">
            <span class=" text-shadow-text">Please resize display, and refresh page</span>
            <div id="recaptcha-div2">
                <!-- div come hier on page load --> 
    </div>
</body>

</html>