/*!
 * SMS Recruit site JS
 * Author: Asika
 * Date: 2013
 * SMS Taiwan CO. LTD.
 */

var debug = false ;

// Option
var option = {
    address : '臺北市松山區南京東路五段356號15樓之1' 
};

// SMS Object
var SMS = ({
    
    init: function(option)
    {
        if(!this.isMobile()) {
            
            this.scrollspy();
            
            this.parallaxScroll();
        }
        
        this.smoothScroll();
        
        this.loadGoogleMap(option.address);
        
        return this;
    },
    
    isMobile : function(){
        var system ={
            win : false,
            mac : false,
            xll : false
        };
        // Detect Platform
        var p = navigator.platform;
        system.win = p.indexOf("Win") == 0;
        system.mac = p.indexOf("Mac") == 0;
        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
        
        // is Mobile, disable parallax
        if(system.win||system.mac||system.xll){
            return false ;
        }
        
        return true;
    },
    
    activeNav : function(id)
    {
        var navs    = $('#sr-nav li');
        var target  = navs.find('a[href=#'+id+']');
        
        navs.removeClass('uk-active');
        target.parent().addClass('uk-active');
    },
    
    scrollspy: function()
    {
        window.onload = function()
        {
            $('[sr-scrollspy]').each(function(i, e){
                var id = $(e).attr('id');
                
                $(e).scrollspy({
                    min: $(e).offset().top,
                    max: $(e).offset().top + 100,
                    onEnter: function(element, position) {
                        SMS.activeNav(id);
                        
                        if (debug) console.log('in: '+id);
                    },
                    onLeave: function(element, position) {
                        if (debug) console.log('out: '+id);
                    }
                }); 
            });
        };
    },
    
    smoothScroll: function()
    {
        jQuery(document).ready(function(){
            
            $('a').each(function(i, e){
                var id = $(this).attr('href').replace('#', '');
                
                $(this).smoothScroll({
                    preventDefault: true,
                    speed: 2500,
                    afterScroll: function(a, b)
                    {
                        SMS.activeNav(id);
                        window.location.hash = '#'+id;
                    },
                }); 
            });
            
        });
        
    },
    
    parallaxScroll: function()
    {
        // Skrollr
        jQuery(document).ready(function(){
            setTimeout(function(){
                var s = skrollr.init();
            }, 1000);
        });
        
    },
    
    loadGoogleMap : function(address)
    {
        jQuery(document).ready(function($){

            // Gmap3
            $("#contact-map").gmap3({
                map:{
                    options: {
                        center: [25.05037541867259, 121.57889975616779],//'臺北市松山區南京東路五段356號15樓之1',
                        zoom: 16,
                        mapTypeId: 'style2',
                        mapTypeControlOptions: {
                           mapTypeIds: [google.maps.MapTypeId.ROADMAP, "style2"]
                        },
                        scrollwheel: false,
                        control: false,
                        mapTypeControl: false,
                        navigationControl: false,
                        scaleControl: false,
                        zoomControl: false,
                        disableDefaultUI: true
                    }
                },
                marker: {
                    values:[
                        {address:address, data: address}
                    ],
                    events:{
                        mouseover: function(marker, event, context){
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({get:{name:"infowindow"}});
                            if (infowindow){
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                    infowindow:{
                                        anchor:marker, 
                                        options:{content: context.data}
                                    }
                                });
                            }
                        },
                        mouseout: function(){
                            var infowindow = $(this).gmap3({get:{name:"infowindow"}});
                            if (infowindow){
                                infowindow.close();
                            }
                        }
                      }
                    }
                },
                { styledmaptype:{
                    id: "style2",
                    options:{
                        name: "Style 2"
                    },
                    styles: [
                        {
                            stylers: [
                                { saturation: -30 }
                            ] 
                        },{
                            featureType: "road",
                            elementType: "geometry",
                            stylers: [
                                { lightness: 100 },
                                { visibility: "simplified" }
                            ]
                        },{
                          featureType: "road",
                          elementType: "labels",
                          stylers: [
                            { visibility: "simplified" }
                          ]
                        }
                    ]
                }
            });
        }); 
    }
}).init(option);


jQuery(window).ready(function(){
    var ppt = '<script async class="speakerdeck-embed" data-id="ddca31a0f5e20130b56b6acaa776c3d3" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>';
    
    $('#sr-about-ppt img').click(function(event){
        var self = $(this);
        var pptinstance = $(ppt);
        
        self.parent().append(pptinstance);
        
        self.remove();
    });
});

jQuery(window).ready(function(){
    setTimeout(function(){
        $('body').css('height', 'auto');
    }, 2000);
});

