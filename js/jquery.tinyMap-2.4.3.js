/**
 * MIT License
 * Copyright(c) 2013 essoduke.org
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED 『AS IS』, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * jQuery tinyMap 輕鬆建立 Google Maps 的 jQuery 擴充套件
 * 短小精幹！拯救你免於 Google Maps API 的摧殘，輕鬆建立 Google Maps 的 jQuery 擴充套件。
 * http://app.essoduke.org/tinyMap/
 *
 * @author: Essoduke Chang
 * @version: 2.4.3
 *
 * [Changelog]
 * 修正使用 IE8（或以下版本）不支援 hasOwnProperty 導致出現 javascript 錯誤的問題。
 * 現在 infoWindow 將寫入 marker 陣列內以方便外部存取。
 *
 * Last Modify: Mon, 26 August 2013 07:51:29 GMT
 */
;(function ($) {

    'use strict';

    // Loop counter for geocoder
    var loop = 0,
    // Plugin default settings
        defaults = {
            'center': {x: '24', y: '121'},
            'control': true,
            'draggable': true,
            'keyboardShortcuts': true,
            'mapTypeControl': true,
            'mapTypeControlOptions': {
                'position': 'TOP_RIGHT',
                'style': 'DEFAULT'
            },
            'mapTypeId': 'ROADMAP',
            'marker': [],
            'markerFitBounds': false,
            'polyline': [],
            'navigationControl': true,
            'navigationControlOptions': {
                'position': 'TOP_LEFT',
                'style': 'DEFAULT'
            },
            'scaleControl': true,
            'scaleControlOptions': {
                'position': 'BOTTOM_LEFT',
                'style': 'DEFAULT'
            },
            'scrollwheel': true,
            'zoom': 4,
            'notfound': '找不到查詢的地點',
            'loading': '讀取中…',
            'kml': {
                'url': '',
                'viewport': true,
                'infowindow': false
            }
        };

    /**
     * _hasOwnProperty for compatibility IE
     * @param {Object} obj Object
     * @param {string} property Property name
     * @return {bool}
     * @version 2.4.3
     */
    function _hasOwnProperty(obj, property) {
        try {
            return (!window.hasOwnProperty) ? Object.prototype.hasOwnProperty.call(obj, property.toString()) : obj.hasOwnProperty(property.toString());
        } catch (ignore) {
        }
    }

    //#!#CLASS_LABEL
    /**
     * Label in Maps
     * @param {Object} options Label options
     * @constructor
     */
    function Label (options) {
        var css = (options.css || '');
        this.setValues(options);
        this.span = $('<span/>').css({'position': 'relative', 'left': '-50%', 'top': '0', 'white-space': 'nowrap'}).addClass(css);
        this.div = $('<div/>').css({'position': 'absolute', 'display': 'none'});
        this.span.appendTo(this.div);
    }
    /**
     * Inherit from Google Maps OverlayView
     * @this {Label}
     */
    Label.prototype = new google.maps.OverlayView();
    /**
     * binding the customize events to map
     * @this {Label}
     */
    Label.prototype.onAdd = function () {
        var pane = this.getPanes().overlayLayer, me = this;
        this.div.appendTo($(pane));
        this.listeners = [
            google.maps.event.addListener(this, 'position_changed', function () { me.draw(); }),
            google.maps.event.addListener(this, 'text_changed', function() { me.draw(); })
        ];
    };
    /**
     * Label draw to map
     * @this {Label}
     */
    Label.prototype.draw = function () {
        var projection = this.getProjection(),
            position = projection.fromLatLngToDivPixel(this.get('position'));
        this.div.css({'left': position.x + 'px', 'top': position.y + 'px', 'display': 'block'});
        if (this.text) {
            this.span.html(this.text.toString());
        }
    };
    //#!#END
    /**
     * tinyMap Constructor
     * @param {Object} container HTML element
     * @param {(Object|string)} options User settings
     * @constructor
     */
    function tinyMap (container, options) {
        // Make sure the API has loaded.
        if (!_hasOwnProperty(window, 'google')) {
            return;
        }
        /**
         * Map instance
         * @type {Object}
         */
        this.map = null;
        /**
         * DOM of selector
         * @type {Object}
         */
        this.container = container;
        /**
         * Merge the options
         * @type {Object}
         */
        this.options = $.extend({}, defaults, options);
        /**
         * Google Maps options
         * @type {Object}
         */
        this.GoogleMapOptions = {
            'center': new google.maps.LatLng(this.options.center.x, this.options.center.y),
            'control': this.options.control,
            'draggable': this.options.draggable,
            'keyboardShortcuts': this.options.keyboardShortcuts,
            'mapTypeId': google.maps.MapTypeId[this.options.mapTypeId.toUpperCase()],
            'mapTypeControl': this.options.mapTypeControl,
            'mapTypeControlOptions': {
                'position': google.maps.ControlPosition[this.options.mapTypeControlOptions.position],
                'style': google.maps.MapTypeControlStyle[this.options.mapTypeControlOptions.style.toUpperCase()]
            },
            'navigationControl': this.options.navigationControl,
            'navigationControlOptions': {
                'position': google.maps.ControlPosition[this.options.navigationControlOptions.position],
                'style': google.maps.NavigationControlStyle[this.options.navigationControlOptions.style.toUpperCase()]
            },
            'scaleControl': this.options.scaleControl,
            'scaleControlOptions': {
                'position': google.maps.ControlPosition[this.options.scaleControlOptions.position],
                'style': google.maps.ScaleControlStyle[this.options.scaleControlOptions.style.toUpperCase()]
            },
            'scrollwheel': this.options.scrollwheel,
            'zoom': this.options.zoom
        };
        this.init();
    }
    /**
     * tinyMap prototype
     */
    tinyMap.prototype = {

        VERSION: '2.4.2',

        // Layers container
        _markers: [],
        _labels: [],
        _polylines: [],
        _polygons: [],
        _circles: [],
        _kmls: [],
        _directions: [],

        // Google Maps LatLngClass
        bounds: new google.maps.LatLngBounds(),
        //#!#FUNC_KML
        /**
         * KML overlay
         * @param {Object} map Map instance
         * @param {Object} opt KML options
         */
        kml: function (map, opt) {
            var opt = !opt ? this.options : opt;
            if (undefined !== opt.kml) {
                var kml_opt = {
                        preserveViewport: true,
                        suppressInfoWindows: false
                    },
                    kml_url = ('string' === typeof opt.kml && 0 !== opt.kml.length) ? opt.kml : (undefined !== opt.kml.url ? opt.kml.url : ''),
                    kml = new google.maps.KmlLayer(kml_url, $.extend(kml_opt, opt.kml));
                this._kmls.push(kml);
                kml.setMap(map);
            }
        },
        //#!#END
        //#!#FUNC_DIRECTION
        /**
         * Direction overlay
         * @param {Object} map Map instance
         * @param {Object} opt Direction options
         */
        direction: function (map, opt) {
            var d, opt = !opt ? this.options : opt;
            if (undefined !== opt.direction) {
                if (0 < opt.direction.length) {
                    for (d in opt.direction) {
                        if (_hasOwnProperty(opt.direction, d)) {
                            if (undefined !== opt.direction[d]) {
                                this.DirectionService(opt.direction[d]);
                            }
                        }
                    }
                }
            }
        },
        //#!#END
        //#!#FUNC_MARKERS
        /**
         * Markers overlay
         * @param {Object} map Map instance
         * @param {Object} opt Markers options
         */
        markers: function (map, opt) {
            var m, opt = !opt ? this.options : opt;
            if (undefined !== opt.marker) {
                if (0 < opt.marker.length) {
                    for (m in opt.marker) {
                        if (_hasOwnProperty(opt.marker, m)) {
                            if (_hasOwnProperty(opt.marker[m], 'addr')) {
                                if ('object' === typeof opt.marker[m].addr) {
                                    if (2 === opt.marker[m].addr.length) {
                                        this.MarkerDirect(opt.marker[m]);
                                    }
                                } else {
                                    this.MarkerByGeocoder(opt.marker[m]);
                                }
                            }
                        }
                    }
                }
            }
        },
        //#!#END
        //#!#FUNC_POLYLINE
        /**
         * Polyline overlay
         * @param {Object} map Map instance
         * @param {Object} opt Polyline options
         */
        DrawPolyline: function (map, opt) {
            var polyline, p, c, coords = [], opt = !opt ? this.options : opt;
            if (undefined !== opt.polyline) {
                if (undefined !== opt.polyline.coords) {
                    for (p in opt.polyline.coords) {
                        if (_hasOwnProperty(opt.polyline.coords, p)) {
                            c = opt.polyline.coords;
                            if (undefined !== c[p]) {
                                coords.push(new google.maps.LatLng(c[p][0], c[p][1]));
                            }
                        }
                    }
                    polyline = new google.maps.Polyline({
                        'path': coords,
                        'strokeColor': opt.polyline.color || '#FF0000',
                        'strokeOpacity': 1.0,
                        'strokeWeight': opt.polyline.width || 2
                    });
                    this._polylines.push(polyline);
                    polyline.setMap(map);
                }
            }
        },
        //#!#END
        //#!#FUNC_POLYGON
        /**
         * Polygon overlay
         * @param {Object} map Map instance
         * @param {Object} opt Polygon options
         */
        DrawPolygon: function (map, opt) {
            var polygon, p, c, coords = [], opt = !opt ? this.options : opt;
            if (undefined !== opt.polygon) {
                if (undefined !== opt.polygon.coords) {
                    for (p in opt.polygon.coords) {
                        if (_hasOwnProperty(opt.polygon.coords, p)) {
                            c = opt.polygon.coords;
                            if (undefined !== c[p]) {
                                coords.push(new google.maps.LatLng(c[p][0], c[p][1]));
                            }
                        }
                    }
                    polygon = new google.maps.Polygon({
                        'path': coords,
                        'strokeColor': opt.polygon.color || '#FF0000',
                        'strokeOpacity': 1.0,
                        'strokeWeight': opt.polygon.width || 2,
                        'fillColor': opt.polygon.fillcolor || '#CC0000',
                        'fillOpacity': 0.35
                    });
                    this._polygons.push(polygon);
                    polygon.setMap(this.map);
                    if ($.isFunction(opt.polygon.click)) {
                        google.maps.event.addListener(polygon, 'click', opt.polygon.click);
                    }
                }
            }
        },
        //#!#END
        //#!#FUNC_CIRCLE
        /**
         * Circle overlay
         * @param {Object} map Map instance
         * @param {Object} opt Circle options
         */
        DrawCircle: function (map, opt) {
            var c, circle, circles, opt = !opt ? this.options : opt;
            if (undefined !== opt.circle && 0 < opt.circle.length) {
                for (c = opt.circle.length - 1; c >= 0; c -= 1) {
                    circle = opt.circle[c];
                    if (undefined !== circle.center.x && undefined !== circle.center.y) {
                        circles = new google.maps.Circle({
                            'strokeColor': circle.color || '#FF0000',
                            'strokeOpacity': circle.opacity || 0.8,
                            'strokeWeight': circle.width || 2,
                            'fillColor': circle.fillcolor || '#FF0000',
                            'fillOpacity': circle.fillopacity || 0.35,
                            'map': this.map,
                            'center': new google.maps.LatLng(circle.center.x, circle.center.y),
                            'radius': circle.radius || 10,
                            'zIndex': 100
                        });
                        this._circles.push(circles);
                        if ($.isFunction(opt.circle[c].click)) {
                            google.maps.event.addListener(circles, 'click', opt.circle[c].click);
                        }
                    }
                }
            }
        },
        //#!#END
        /**
         * Overlay process
         * @this {tinyMap}
         */
        overlay: function () {
            //#!#CALL_KML
            // kml overlay
            this.kml(this.map);
            //#!#END
            //#!#CALL_DIRECTION
            // direction overlay
            this.direction(this.map);
            //#!#END
            //#!#CALL_MARKERS
            // markers overlay
            this.markers(this.map);
            //#!#END
            //#!#CALL_POLYLINE
            // polyline overlay
            this.DrawPolyline(this.map);
            //#!#END
            //#!#CALL_POLYGON
            // polygon overlay
            this.DrawPolygon(this.map);
            //#!#END
            //#!#CALL_CIRCLE
            // circle overlay
            this.DrawCircle(this.map);
            //#!#END
        },
        //#!#PROTOTYPE_MARKERS
        /**
         * Set a marker directly by latitude and longitude
         * @param {Object} opt Options
         * @this {tinyMap}
         */
        MarkerDirect: function (opt) {
            var self = this,
                marker, label_opt, label,
                markerOptions = {
                    'map': this.map,
                    'position': new google.maps.LatLng(opt.addr[0], opt.addr[1]),
                    'title': opt.text.replace(/<([^>]+)>/g, ''),
                    'infoWindow': new google.maps.InfoWindow({content: opt.text})
                };
            if ('string' === typeof opt.icon) {
                markerOptions.icon = opt.icon;
            }

            marker = new google.maps.Marker(markerOptions);
            this._markers.push(marker);

            // autozoom
            if (_hasOwnProperty(marker, 'position')) {
                if (marker.getPosition().lat() && marker.getPosition().lng()) {
                    self.bounds.extend(markerOptions.position);
                }
            }

            label_opt = {
                map: this.map,
                css: undefined !== opt.css ? opt.css : ''
            };
            if ('string' === typeof opt.label && 0 !== opt.label.length) {
                label_opt.text = opt.label;
            }
            label = new Label(label_opt);
            label.bindTo('position', marker, 'position');
            label.bindTo('text', marker, 'position');
            this._labels.push(label);
            google.maps.event.addListener(marker, 'click', function () {
                marker.infoWindow.open(this.map, marker);
            });
        },
        /**
        * Set a marker by Geocoder service
        * @param {Object} opt Options
        * @this {tinyMap}
        */
        MarkerByGeocoder: function (opt) {
            var geocoder = new google.maps.Geocoder(),
                self = this;
            geocoder.geocode({'address': opt.addr}, function (results, status) {
                // if exceeded limit, then call again;
                if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                    window.setTimeout(function () {
                        this.geocoder(self.map, opt, bounds, false);
                    }, 200);
                } else if (status === google.maps.GeocoderStatus.OK) {
                    var marker, label_opt, label,
                        markerOptions = {
                            'map': self.map,
                            'position': results[0].geometry.location,
                            'title': opt.text.replace(/<([^>]+)>/g, ''),
                            'infoWindow': new google.maps.InfoWindow({content: opt.text})
                        };
                    if ('string' === typeof opt.icon) {
                        markerOptions.icon = opt.icon;
                    }
                    marker = new google.maps.Marker(markerOptions);
                    self._markers.push(marker);
                    // autozoom
                    if (_hasOwnProperty(marker, 'position')) {
                        if (marker.getPosition().lat() && marker.getPosition().lng()) {
                            self.bounds.extend(markerOptions.position);
                        }
                    }
                    label_opt = {
                        map: self.map,
                        css: opt.css || ''
                    };
                    if ('string' === typeof opt.label && 0 !== opt.label.length) {
                        label_opt.text = opt.label;
                    }
                    label = new Label(label_opt);
                    label.bindTo('position', marker, 'position');
                    label.bindTo('text', marker, 'position');
                    google.maps.event.addListener(marker, 'click', function () {
                        marker.infoWindow.open(self.map, marker);
                    });
                }
            });
        },
        //#!#END
        //#!#PROTOTYPE_DIRECTION
        /**
         * Direction service
         * @param {Object} opt Options
         * @this {tinyMap}
         */
        DirectionService: function (opt) {
            var waypoints = [],
                directionsService = new google.maps.DirectionsService(),
                directionsDisplay = new google.maps.DirectionsRenderer(),
                request = {
                    'travelMode': google.maps.DirectionsTravelMode.DRIVING,
                    'optimizeWaypoints': opt.optimize || false
                },
                i = 0,
                c = 0;
            if ('string' === typeof opt.from) {
                request.origin = opt.from;
            }
            if ('string' === typeof opt.to) {
                request.destination = opt.to;
            }
            if ('string' === typeof opt.travel) {
                if (0 < opt.travel.length) {
                    request.travelMode = google.maps.DirectionsTravelMode[opt.travel.toUpperCase()];
                }
            }
            if (undefined !== opt.waypoint && 0 !== opt.waypoint) {
                for (i = 0, c = opt.waypoint.length; i < c; i += 1) {
                    waypoints.push({
                        'location': opt.waypoint[i].toString(),
                        'stopover': true
                    });
                }
                request.waypoints = waypoints;
            }
            if (undefined !== request.origin && undefined !== request.destination) {
                directionsService.route(request, function (response, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                    }
                });
                directionsDisplay.setMap(this.map);
                this._directions.push(directionsDisplay);
            }
        },
        //#!#END
        /**
         * tinyMap Initialize
         * @this {tinyMap}
         */
        init: function () {
            var self = this;
            loop += 1;
            if ('string' === typeof this.options.center) {
                window.setTimeout(function () {
                    var geocoder = new google.maps.Geocoder(), error = $(self.container), msg = '';
                    geocoder.geocode({'address': self.options.center}, function (results, status) {
                        try {
                            if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                                self.init();
                            } else if (status === google.maps.GeocoderStatus.OK && 0 !== results.length) {
                                self.GoogleMapOptions.center = (status === google.maps.GeocoderStatus.OK && 0 !== results.length) ? results[0].geometry.location : '';
                                self.map = new google.maps.Map(self.container, self.GoogleMapOptions);
                                self.overlay();
                                if (self.options.marker.length && true === self.options.markerFitBounds) {
                                    self.map.fitBounds(self.bounds);
                                }
                            } else {
                                msg = self.options.notfound.text || status;
                                error.html(msg.replace(/</g, '&lt;').replace(/>/g, '&gt;'));
                            }
                        } catch (ignore) {
                            error.html((undefined !== ignore.message ? ignore.message : ignore.description).toString());
                        }
                    });
                }, 200 * loop);
            } else {
                self.map = new google.maps.Map(self.container, self.GoogleMapOptions);
                self.overlay();
                if (self.options.marker.length && true === self.options.markerFitBounds) {
                    self.map.fitBounds(self.bounds);
                }
            }
        }
    };
    /**
     * jQuery tinyMap instance
     * @param {Object} options Plugin settings
     * @public
     */
    $.fn.tinyMap = function (options) {
        return this.each(function () {
            if (!$.data(this, 'tinyMap')) {
                $.data(this, 'tinyMap', new tinyMap(this, options));
            }
        });
    };
    //#!#METHOD_PANTO
    /**
     * Google Maps PanTo method
     * @param {string} addr Text address or "latitude, longitude" format
     * @public
     */
    $.fn.tinyMapPanTo = function (addr) {
        return this.each(function () {
            var obj = $(this),
                data = obj.data('tinyMap'),
                map = (_hasOwnProperty(data, 'map') ? data.map : null),
                geocoder = new google.maps.Geocoder();
            if (null !== map && undefined !== map) {
                if (-1 !== addr.indexOf(',')) {
                    addr = 'loc: ' + addr;
                }
                geocoder.geocode({'address': addr}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        if ($.isFunction(map.panTo)) {
                            map.panTo(results[0].geometry.location);
                        }
                    }
                });
            }
        });
    };
    //#!#END
    //#!#METHOD_CLEAR
    /**
     * Google Maps clear the specificed layer
     * @param {string} type Layer type (markers, polylines, polygons, circles, kmls, directions)
     * @public
     */
    $.fn.tinyMapClear = function (type) {
        return this.each(function () {
            var data = $(this).data('tinyMap'),
                map = (_hasOwnProperty(data, 'map') ? data.map : null),
                label = '',
                types = type.split(','),
                i,
                j;
            if (map) {
                if (types.length) {
                    for (i = 0; i < types.length; i += 1) {
                        label = '_' + $.trim(types[i].toString().toLowerCase()) + 's';
                        if (undefined !== data[label] && data[label].length) {
                            for (j = 0; j < data[label].length; j += 1) {
                                data[label][j].setMap(null);
                            }
                            data[label] = [];
                        }
                    }
                }
            }
        });
    };
    //#!#END
    //#!#METHOD_MODIFY
    /**
     * Google Maps dynamic add layers
     * @param {Object} options Refernce by tinyMap options
     * @public
     */
    $.fn.tinyMapModify = function (options) {
        var func = [];
        if (undefined !== options) {
            if (_hasOwnProperty(options, 'kml')) {
                func.push('kml');
            }
            if (_hasOwnProperty(options, 'marker')) {
                func.push('markers');
            }
            if (_hasOwnProperty(options, 'direction')) {
                func.push('direction');
            }
            if (_hasOwnProperty(options, 'polyline')) {
                func.push('DrawPolyline');
            }
            if (_hasOwnProperty(options, 'polygon')) {
                func.push('DrawPolygon');
            }
            if (_hasOwnProperty(options, 'circle')) {
                func.push('DrawCircle');
            }
            return this.each(function () {
                var data = $(this).data('tinyMap'),
                    map = (_hasOwnProperty(data, 'map') ? data.map : null),
                    i = 0;
                if (null !== map && undefined !== map && func) {
                    for (i = 0; i < func.length; i += 1) {
                        if ('function' === typeof data[func[i]]) {
                            data[func[i]](map, options);
                        }
                    }
                }
            });
        }
    };
    //#!#END
})(jQuery);
