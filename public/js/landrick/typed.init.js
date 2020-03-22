
// Typed Text
$(".element").each(function(){
    var $this = $(this);
    $this.typed({
    strings: $this.attr('data-elements').split(','),
    typeSpeed: parseInt($this.attr('data-typeSpeed')), // typing speed
    backDelay: 3000 // pause before backspacing
    });
});
