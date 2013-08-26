/**
 * SMS Recruit site JS
 * Author: Asika
 * Date: 2013
 * SMS Taiwan CO. LTD.
 */

var debug = true ;

less = {
    env: "development", // or "production"
    async: false,       // load imports async
    fileAsync: false,   // load imports async when in a page under
                        // a file protocol
    poll: 1000,         // when in watch mode, time in ms between polls
    functions: {},      // user functions, keyed by name
    dumpLineNumbers: "comments", // or "mediaQuery" or "all"
    relativeUrls: false,// whether to adjust url's to be relative
                        // if false, url's are already relative to the
                        // entry less file
    rootpath: ":/a.com/"// a path to add on to the start of every url
                        //resource
};

// Scroll Spy
window.onload = function() {
    $('[sr-scrollspy]').each(function(i, e){
        var id = $(e).attr('id');
        
        $(e).scrollspy({
            min: $(e).offset().top,
            max: $(e).offset().top + 100,
            onEnter: function(element, position) {
                var navs    = $('#sr-nav li');
                var target  = navs.find('a[href=#'+id+']');
                
                navs.removeClass('uk-active');
                target.parent().addClass('uk-active');
                
                if (debug) console.log('in: '+id);
            },
            onLeave: function(element, position) {
                if (debug) console.log('out: '+id);
            }
        }); 
    });
    
    $('a').smoothScroll();
    
};

//$(document).ready(function() {
//    $('[data-uk-scrollspy]').on({
//        
//        'uk.scrollspy.inview': function(event){
//            var navs    = $('#sr-nav li');
//            var id      = $(this).attr('id');
//            var target  = navs.find('a[href=#'+id+']');
//            
//            navs.removeClass('uk-active');
//            target.parent().addClass('uk-active');
//            
//            if (debug) console.log('in: '+id);
//        },
//    
//        'uk.scrollspy.outview': function(event){
//            var id      = $(this).attr('id');
//            if (debug) console.log('out: '+id);
//        }
//    });
//    
//    $('#sr-nav li a').click(function(event){
//        var li = $(this).parent();
//        var lis = li.parent().find('li');
//        
//        lis.removeClass('uk-active');
//        li.addClass('uk-active');
//    });
//});


// Google Map
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
                {address:"臺北市松山區南京東路五段356號15樓之1", data:"臺北市松山區南京東路五段356號15樓之1"}
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