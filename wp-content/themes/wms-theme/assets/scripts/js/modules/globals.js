// jquery.matchHeight-min.js v0.5.2 http://brm.io/jquery-match-height/ License: MIT
(function(d){var g=-1,e=-1,n=function(a){var b=null,c=[];d(a).each(function(){var a=d(this),k=a.offset().top-h(a.css("margin-top")),l=0<c.length?c[c.length-1]:null;null===l?c.push(a):1>=Math.floor(Math.abs(b-k))?c[c.length-1]=l.add(a):c.push(a);b=k});return c},h=function(a){return parseFloat(a)||0},b=d.fn.matchHeight=function(a){if("remove"===a){var f=this;this.css("height","");d.each(b._groups,function(a,b){b.elements=b.elements.not(f)});return this}if(1>=this.length)return this;a="undefined"!==
typeof a?a:!0;b._groups.push({elements:this,byRow:a});b._apply(this,a);return this};b._groups=[];b._throttle=80;b._maintainScroll=!1;b._beforeUpdate=null;b._afterUpdate=null;b._apply=function(a,f){var c=d(a),e=[c],k=d(window).scrollTop(),l=d("html").outerHeight(!0),g=c.parents().filter(":hidden");g.css("display","block");f&&(c.each(function(){var a=d(this),b="inline-block"===a.css("display")?"inline-block":"block";a.data("style-cache",a.attr("style"));a.css({display:b,"padding-top":"0","padding-bottom":"0",
"margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px"})}),e=n(c),c.each(function(){var a=d(this);a.attr("style",a.data("style-cache")||"").css("height","")}));d.each(e,function(a,b){var c=d(b),e=0;f&&1>=c.length||(c.each(function(){var a=d(this),b="inline-block"===a.css("display")?"inline-block":"block";a.css({display:b,height:""});a.outerHeight(!1)>e&&(e=a.outerHeight(!1));a.css("display","")}),c.each(function(){var a=d(this),b=0;"border-box"!==a.css("box-sizing")&&
(b+=h(a.css("border-top-width"))+h(a.css("border-bottom-width")),b+=h(a.css("padding-top"))+h(a.css("padding-bottom")));a.css("height",e-b)}))});g.css("display","");b._maintainScroll&&d(window).scrollTop(k/l*d("html").outerHeight(!0));return this};b._applyDataApi=function(){var a={};d("[data-match-height], [data-mh]").each(function(){var b=d(this),c=b.attr("data-match-height")||b.attr("data-mh");a[c]=c in a?a[c].add(b):b});d.each(a,function(){this.matchHeight(!0)})};var m=function(a){b._beforeUpdate&&
b._beforeUpdate(a,b._groups);d.each(b._groups,function(){b._apply(this.elements,this.byRow)});b._afterUpdate&&b._afterUpdate(a,b._groups)};b._update=function(a,f){if(f&&"resize"===f.type){var c=d(window).width();if(c===g)return;g=c}a?-1===e&&(e=setTimeout(function(){m(f);e=-1},b._throttle)):m(f)};d(b._applyDataApi);d(window).bind("load",function(a){b._update(!1,a)});d(window).bind("resize orientationchange",function(a){b._update(!0,a)})})(jQuery);

jQuery(function($) {
    $(document).ready(() => {
        // Mobile Viewport
        $(function(){
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            var ww = ( $(window).width() < window.screen.width ) ? $(window).width() : window.screen.width;
            var mw = 600;
            var ratio =  ww / mw; 
            if( ww < mw){ 
            $('#viewport').attr('content', 'initial-scale=' + ratio + ', maximum-scale=' + ratio + ', minimum-scale=' + ratio + ', user-scalable=yes, width=' + ww);
            } else { 
            $('#viewport').attr('content', 'initial-scale=1.0, maximum-scale=2, minimum-scale=1.0, user-scalable=yes, width=' + ww);
            }
            }
        });
        // Kill Swiper
		if($(".swiper-slide").length === 1){
			swiper.destroy();
		  $(".swiper-prev",".swiper-next").css("display", "none");
		}
        // Match Height
        if ($(window).width() > 750) {
            $('.feature-slider .swiper-slide').matchHeight();
            // $('.product_info .cell').matchHeight(); 
        }
        // Add break to Classic and Reserve
        $('.swiper-slide h4').html(function(){
            return $(this).html().replace('Classic','Classic<br/>');
        });
        $('.swiper-slide h4').html(function(){
            return $(this).html().replace('Reserve','Reserve<br/>');
        });
        // Make Boxes Clickable
        $(".content-wines .cell").click(function() {
            window.location = $(this).find("a").attr("href");
            return false;
        });
        // $(".basic").click(function() {
        //     window.location = $(this).find("a").attr("href");
        //     return false;
        // });
        // Mobile Hamburger
        $('#navicon').click(function(){
            $(this).toggleClass('open');
            $('#menu-mobile-navigation').toggleClass('open');
        });
        // Contact form validation
        if ($('.wpcf7-form').length) {
            var canada;
            var unitedStates;
            (function () {
                var getStates = function getStates() {
                    // Check initial country Value
                    if ($('#country').val() == 'US') {
                        Object.values(unitedStates).forEach(function (state) {
                            $('#state').append('<option value="' + state.abbreviation + '">' + state.name + '</option>');
                        });
                    }
                    if ($('#country').val() == 'Canada') {
                        Object.values(canada).forEach(function (state) {
                            $('#state').append('<option value="' + state.abbreviation + '">' + state.name + '</option>');
                        });
                    }
                    if ($('#country').val() == 'Other') {
                    }
                };
                var refreshStates = function refreshStates() {
                    $('#state option').each(function (index, obj) {
                        $(obj).remove();
                    });
                };
                canada = {
                    alberta: {
                        name: 'Alberta',
                        abbreviation: 'AB'
                    },
                    britishColumbia: {
                        name: 'British Columbia',
                        abbreviation: 'BC'
                    },
                    manitoba: {
                        name: 'Manitoba',
                        abbreviation: 'MB'
                    },
                    newBrunswick: {
                        name: 'New Brunswick',
                        abbreviation: 'NB'
                    },
                    newfoundlandAndLabrador: {
                        name: 'Newfoundland and Labrator',
                        abbreviation: 'NL'
                    },
                    northwestTerritories: {
                        name: 'Northwest Territories',
                        abbreviation: 'NT'
                    },
                    novaScotia: {
                        name: 'Nova Scotia',
                        abbreviation: 'NS'
                    },
                    nunavut: {
                        name: 'Nunavut',
                        abbreviation: 'NU'
                    },
                    ontario: {
                        name: 'Ontario',
                        abbreviation: 'ON'
                    },
                    princeEdwardIsland: {
                        name: 'Prince Edward Island',
                        abbreviation: 'PE'
                    },
                    quebec: {
                        name: 'Quebec',
                        abbreviation: 'QC'
                    },
                    saskatchewan: {
                        name: 'Saskatchewan',
                        abbreviation: 'SK'
                    },
                    yukon: {
                        name: 'Yukon',
                        abbreviation: 'YT'
                    }
                };
                            unitedStates = {
                    alabama: {
                        name: 'Alabama',
                        abbreviation: 'AL'
                    },
                    alaska: {
                        name: 'Alaska',
                        abbreviation: 'AK'
                    },
                    arizona: {
                        name: 'Arizona',
                        abbreviation: 'AZ'
                    },
                    arkansas: {
                        name: 'Arkansas',
                        abbreviation: 'AR'
                    },
                    california: {
                        name: 'California',
                        abbreviation: 'CA'
                    },
                    colorado: {
                        name: 'Colorado',
                        abbreviation: 'CO'
                    },
                    connecticut: {
                        name: 'Connecticut',
                        abbreviation: 'CT'
                    },
                    deleware: {
                        name: 'Delaware',
                        abbreviation: 'DE'
                    },
                    districtOfColumbia: {
                        name: 'District of Columbia',
                        abbreviation: 'DC'
                    },
                    florida: {
                        name: 'Florida',
                        abbreviation: 'FL'
                    },
                    georgia: {
                        name: 'Georgia',
                        abbreviation: 'GA'
                    },
                    hawaii: {
                        name: 'Hawaii',
                        abbreviation: 'HI'
                    },
                    idaho: {
                        name: 'Idaho',
                        abbreviation: 'ID'
                    },
                    illinios: {
                        name: 'Illinois',
                        abbreviation: 'IL'
                    },
                    indiana: {
                        name: 'Indiana',
                        abbreviation: 'IN'
                    },
                    iowa: {
                        name: 'Iowa',
                        abbreviation: 'IA'
                    },
                    kansas: {
                        name: 'Kansas',
                        abbreviation: 'KS'
                    },
                    kentucky: {
                        name: 'Kentucky',
                        abbreviation: 'KY'
                    },
                    louisiana: {
                        name: 'Louisiana',
                        abbreviation: 'LA'
                    },
                    maine: {
                        name: 'Maine',
                        abbreviation: 'ME'
                    },
                    maryland: {
                        name: 'Maryland',
                        abbreviation: 'MD'
                    },
                    massachusetts: {
                        name: 'Massachusetts',
                        abbreviation: 'MA'
                    },
                    michigan: {
                        name: 'Michigan',
                        abbreviation: 'MI'
                    },
                    minnesota: {
                        name: 'Minnesota',
                        abbreviation: 'MN'
                    },
                    mississippi: {
                        name: 'Mississippi',
                        abbreviation: 'MS'
                    },
                    missouri: {
                        name: 'Missouri',
                        abbreviation: 'MO'
                    },
                    montana: {
                        name: 'Montana',
                        abbreviation: 'MT'
                    },
                    nebraska: {
                        name: 'Nebraska',
                        abbreviation: 'NE'
                    },
                    nevada: {
                        name: 'Nevada',
                        abbreviation: 'NV'
                    },
                    newHampshire: {
                        name: 'New Hampshire',
                        abbreviation: 'NH'
                    },
                    newJersey: {
                        name: 'New Jersey',
                        abbreviation: 'NJ'
                    },
                    newMexico: {
                        name: 'New Mexico',
                        abbreviation: 'NM'
                    },
                    newYork: {
                        name: 'New York',
                        abbreviation: 'NY'
                    },
                    northCarolina: {
                        name: 'North Carolina',
                        abbreviation: 'NC'
                    },
                    northDakota: {
                        name: 'North Dakota',
                        abbreviation: 'ND'
                    },
                    ohio: {
                        name: 'Ohio',
                        abbreviation: 'OH'
                    },
                    oklahoma: {
                        name: 'Oklahoma',
                        abbreviation: 'OK'
                    },
                    oregon: {
                        name: 'Oregon',
                        abbreviation: 'OR'
                    },
                    pennsylvania: {
                        name: 'Pennsylvania',
                        abbreviation: 'PA'
                    },
                    rhodeIsland: {
                        name: 'Rhode Island',
                        abbreviation: 'RI'
                    },
                    southCarolina: {
                        name: 'South Carolina',
                        abbreviation: 'SC'
                    },
                    southDakota: {
                        name: 'South Dakota',
                        abbreviation: 'SD'
                    },
                    tennessee: {
                        name: 'Tennessee',
                        abbreviation: 'TN'
                    },
                    texas: {
                        name: 'Texas',
                        abbreviation: 'TX'
                    },
                    utah: {
                        name: 'Utah',
                        abbreviation: 'UT'
                    },
                    vermont: {
                        name: 'Vermont',
                        abbreviation: 'VT'
                    },
                    virginia: {
                        name: 'Virginia',
                        abbreviation: 'VA'
                    },
                    washington: {
                        name: 'Washington',
                        abbreviation: 'WA'
                    },
                    westVirginia: {
                        name: 'West Virginia',
                        abbreviation: 'WV'
                    },
                    wisconsin: {
                        name: 'Wisconsin',
                        abbreviation: 'WI'
                    },
                    wyoming: {
                        name: 'Wyoming',
                        abbreviation: 'WY'
                    }
                };
                getStates();$('#country').on('change', function (e) {
                    e.preventDefault();
                    refreshStates();
                    getStates();
                });
            })();
        }
        
    });  
});