//Option 2 0 jQuery Smooth Scroll

$('.navbar a').on('click', function(e){
    if(this.hash !== ''){
        e.preventDefault();

        const hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800)
    }
});

//When use hits "Learn More" scroll to About 

$('.btext a').on('click', function(e){
    if(this.hash !== ''){
        e.preventDefault();

        const hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800)
    }
});

