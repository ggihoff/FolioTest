var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
    triggerElement : '.title1'
})
.setClassToggle('.title1', 'show')
.addTo(controller);

var scene2 = new ScrollMagic.Scene({
    triggerElement : '.cards'
})
.setClassToggle('.cards', 'show')
.addTo(controller);

var scene3 = new ScrollMagic.Scene({
    triggerElement : '.title2'
})
.setClassToggle('.title2', 'show')
.addTo(controller);

var scene4 = new ScrollMagic.Scene({
    triggerElement : '.form'
})
.setClassToggle('.form', 'show')
.addTo(controller);

