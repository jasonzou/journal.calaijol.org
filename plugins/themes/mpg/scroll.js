$(window).scroll(function() {
			if ($(this).scrollTop() > 81){  
				$('#header').addClass("sticky");
				}
			else{
				$('#header').removeClass("sticky");
			}
		});


.back-to-top::before {
    color: #292929 !important;
    content: "";
    font-family: FontAwesome;
    font-size: 36px;
    font-weight: bold;
    position: absolute;
}
$('#back-to-top"').bind('click', function(e) {
				   e.preventDefault();
				   $('html, body').animate({ scrollTop: $(this.hash).offset().top }, "3000", "easeIn");

\





#header {
    background: #1a1a1a none repeat scroll 0 0;
    display: inline-block;
    height: 80px;
    margin-top: 0;
    padding: 0 10px;
    transition: all 0s ease 0s;
    width: 100%;
}
#header.sticky {
    background: #1a1a1a none repeat scroll 0 0;
    padding-left: 20px;
    position: fixed;
    right: 0;
    text-align: left;
    top: 0;
    transition: all 1.1s ease 0s;
    width: 90px;
    z-index: 9999;
}
#header.sticky:hover {
    max-width: 100%;
    padding: 0 10px;
    transition: all 1.1s ease 0s;
    width: 100%;
}
@media screen and (max-width: 600px) {
}

@media screen and (min-width: 768px) {
}

@media only screen and (min-width: 801px) and (max-width: 939px) {
}

@media only screen and (min-width: 50px) and (max-width: 600px) {
}

@media only screen and (min-width: 601px) and (max-width: 800px) {

@media (min-width: 992px) {

@media (min-width: 1200px) {@media (min-width: 1200px) {
