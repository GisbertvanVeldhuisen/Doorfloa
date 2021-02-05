@extends ('layouts/app')

@section('meta')
    <meta name="title" content="{{$values->title}}">
    <meta name="description"
          content="{{$values->intro}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"
          content="{{'landschap'}}">
    <meta property="og:title"
          content="{{$values->title}}">
    <meta property="og:description"
          content="{{$values->intro}}">
    <meta property="og:image" content="{{asset('storage/general/header_img.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
          content="{{'mensen'}}">
    <meta property="twitter:title"
          content="{{$values->title}}">
    <meta property="twitter:description"
          content="{{$values->intro}}">
    <meta property="twitter:image" content="{{asset('storage/general/header_img.png')}}">

    <meta name="title" content="{{$values->title_intro}}">
    <meta name="description"
          content="{{$values->intro}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"
          content="{{'landschap'}}">
    <meta property="og:title"
          content="{{$values->title}}">
    <meta property="og:description"
          content="{{$values->intro}}">
    <meta property="og:image" content="{{asset('storage/general/header_img.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
          content="{{'landschap'}}">
    <meta property="twitter:title"
          content="{{$values->title}}">
    <meta property="twitter:description"
          content="{{$values->intro}}">
    <meta property="twitter:image" content="{{asset('storage/general/header_img.png')}}">
@endsection

@section ("content")
    <div class="section header" style="background-image: url({{asset('storage/general/header_img.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-sm"><h1>door<strong style="color:{{$values->page_color}}">flora</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section text full intro" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <div class="row">
                <div class="col-14">
                    <h2>{{$values->title}}</h2>
                    <p>
                        {{$values->intro}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section slider" style="background-color: {{$values->accent_color}}">
        <div class="shadow left" style="background-color: {{$values->page_color}}"></div>
        <div class="shadow right" style="background-color: {{$values->page_color}}"></div>
        <div class="container">
            <div class="wrapper">
                <div class="carousel">
                    <div class="inner">
                        @php($files = glob('storage/landscapesImages/*.{png}', GLOB_BRACE))
                        @foreach($files as $file)
                            <div class="slide active" style="background-image: url('{{$file}}')"></div>
                        @endforeach
                    </div>
                    <div class="arrow arrow-left"></div>
                    <div class="arrow arrow-right"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(function ($) {


            (function (factory) {

                if (typeof define === 'function' && define.amd) {
                    define(['jquery'], factory);
                } else if (typeof exports !== 'undefined') {
                    module.exports = factory(require('jquery'));
                } else {
                    factory(jQuery);
                }

            })(function ($) {
                var Zippy = (function (element, settings) {

                    var instanceUid = 0;


                    function _Zippy(element, settings) {
                        this.defaults = {
                            slideDuration: '3000',
                            speed: 500,
                            arrowRight: '.arrow-right',
                            arrowLeft: '.arrow-left'
                        };


                        this.settings = $.extend({}, this, this.defaults, settings);

                        this.initials = {
                            currSlide: 0,
                            $currSlide: null,
                            totalSlides: false,
                            csstransitions: false
                        };

                        $.extend(this, this.initials);

                        this.$el = $(element);

                        this.changeSlide = $.proxy(this.changeSlide, this);

                        this.init();

                        this.instanceUid = instanceUid++;
                    }

                    return _Zippy;

                })();
                Zippy.prototype.init = function () {
                    this.csstransitionsTest();
                    this.$el.addClass('zippy-carousel');

                    this.build();
                    this.events();
                    this.activate();
                    this.initTimer();
                };

                Zippy.prototype.csstransitionsTest = function () {
                    var elem = document.createElement('modernizr');
                    var props = ["transition", "WebkitTransition", "MozTransition", "OTransition", "msTransition"];
                    for (var i in props) {
                        var prop = props[i];
                        var result = elem.style[prop] !== undefined ? prop : false;
                        if (result) {
                            this.csstransitions = result;
                            break;
                        }
                    }
                };

                Zippy.prototype.addCSSDuration = function () {
                    var _ = this;
                    this.$el.find('.slide').each(function () {
                        this.style[_.csstransitions + 'Duration'] = _.settings.speed + 'ms';
                    });
                };


                Zippy.prototype.removeCSSDuration = function () {
                    var _ = this;
                    this.$el.find('.slide').each(function () {
                        this.style[_.csstransitions + 'Duration'] = '';
                    });
                };

                Zippy.prototype.build = function () {
                    var $indicators = this.$el.append('<ul class="indicators" >').find('.indicators');
                    this.totalSlides = this.$el.find('.slide').length;
                    for (var i = 0; i < this.totalSlides; i++) $indicators.append('<li data-index=' + i + '>');
                };

                Zippy.prototype.activate = function () {
                    this.$currSlide = this.$el.find('.slide').eq(0);
                    this.$el.find('.indicators li').eq(0).addClass('active');
                };

                Zippy.prototype.events = function () {
                    $('body')
                        .on('click', this.settings.arrowRight, {direction: 'right'}, this.changeSlide)
                        .on('click', this.settings.arrowLeft, {direction: 'left'}, this.changeSlide)
                        .on('click', '.indicators li', this.changeSlide);
                };

                Zippy.prototype.clearTimer = function () {
                    if (this.timer) clearInterval(this.timer);
                };

                Zippy.prototype.initTimer = function () {
                    this.timer = setInterval(this.changeSlide, this.settings.slideDuration);
                };

                Zippy.prototype.startTimer = function () {
                    this.initTimer();
                    this.throttle = false;
                };
                Zippy.prototype.changeSlide = function (e) {
                    if (this.throttle) return;
                    this.throttle = true;

                    this.clearTimer();

                    // Returns the animation direction (left or right)
                    var direction = this._direction(e);

                    // Selects the next slide
                    var animate = this._next(e, direction);
                    if (!animate) return;

                    //Active the next slide to scroll into view
                    var $nextSlide = this.$el.find('.slide').eq(this.currSlide).addClass(direction + ' active');

                    if (!this.csstransitions) {
                        this._jsAnimation($nextSlide, direction);
                    } else {
                        this._cssAnimation($nextSlide, direction);
                    }
                };
                Zippy.prototype._direction = function (e) {
                    var direction;

                    // Default to forward movement
                    if (typeof e !== 'undefined') {
                        direction = (typeof e.data === 'undefined' ? 'right' : e.data.direction);
                    } else {
                        direction = 'right';
                    }
                    return direction;
                };
                Zippy.prototype._next = function (e, direction) {

                    // If the event was triggered by a slide indicator, we store the data-index value of that indicator
                    var index = (typeof e !== 'undefined' ? $(e.currentTarget).data('index') : undefined);

                    //Logic for determining the next slide
                    switch (true) {
                        //If the event was triggered by an indicator, we set the next slide based on index
                        case(typeof index !== 'undefined'):
                            if (this.currSlide == index) {
                                this.startTimer();
                                return false;
                            }
                            this.currSlide = index;
                            break;
                        case(direction == 'right' && this.currSlide < (this.totalSlides - 1)):
                            this.currSlide++;
                            break;
                        case(direction == 'right'):
                            this.currSlide = 0;
                            break;
                        case(direction == 'left' && this.currSlide === 0):
                            this.currSlide = (this.totalSlides - 1);
                            break;
                        case(direction == 'left'):
                            this.currSlide--;
                            break;
                    }
                    return true;
                };
                Zippy.prototype._cssAnimation = function ($nextSlide, direction) {
                    setTimeout(function () {
                        this.$el.addClass('transition');
                        this.addCSSDuration();
                        this.$currSlide.addClass('shift-' + direction);
                    }.bind(this), 100);

                    setTimeout(function () {
                        this.$el.removeClass('transition');
                        this.removeCSSDuration();
                        this.$currSlide.removeClass('active shift-left shift-right');
                        this.$currSlide = $nextSlide.removeClass(direction);
                        this._updateIndicators();
                        this.startTimer();
                    }.bind(this), 100 + this.settings.speed);
                };

                Zippy.prototype._jsAnimation = function ($nextSlide, direction) {
                    //Cache this reference for use inside animate functions
                    var _ = this;

                    // See CSS for explanation of .js-reset-left
                    if (direction == 'right') _.$currSlide.addClass('js-reset-left');

                    var animation = {};
                    animation[direction] = '0%';

                    var animationPrev = {};
                    animationPrev[direction] = '100%';

                    //Animation: Current slide
                    this.$currSlide.animate(animationPrev, this.settings.speed);

                    //Animation: Next slide
                    $nextSlide.animate(animation, this.settings.speed, 'swing', function () {
                        //Get rid of any JS animation residue
                        _.$currSlide.removeClass('active js-reset-left').attr('style', '');
                        //Cache the next slide after classes and inline styles have been removed
                        _.$currSlide = $nextSlide.removeClass(direction).attr('style', '');
                        _._updateIndicators();
                        _.startTimer();
                    });
                };

                Zippy.prototype._updateIndicators = function () {
                    this.$el.find('.indicators li').removeClass('active').eq(this.currSlide).addClass('active');
                };

                $.fn.Zippy = function (options) {

                    return this.each(function (index, el) {
                        el.Zippy = new Zippy(el, options);
                    });

                };
            });
// Custom options for the carousel
            var args = {
                arrowRight: '.arrow-right', //A jQuery reference to the right arrow
                arrowLeft: '.arrow-left', //A jQuery reference to the left arrow
                speed: 1000, //The speed of the animation (milliseconds)
                slideDuration: 4000 //The amount of time between animations (milliseconds)
            };

            $('.carousel').Zippy(args);
        });
    </script>
    <div class="footer">
        <div class="container">
            <div class="column three-fifth menu" style="background-color:{{$values->accent_color}}">
                <div class="heading">
                    <h3>menu</h3>
                </div>
                <div class="main-menu-container">
                    <a class="menu-item" href="{{'fotografie'}}">Fotografie</a>
                    <a class="menu-item" href="{{'recepten'}}">Recepten</a>
                    <a class="menu-item" href="{{'over'}}">Over</a>
                    <a class="menu-item" href="{{'contact'}}">Contact</a>
                </div>
            </div>
            <div class="column two-fifth contact" style="background-color: {{$values->page_color}}">
                <div class="heading">
                    <h3>contact</h3>
                </div>
                <div class="main-menu-container">
                     <span class="menu-item">
                        <span class="icon about"></span>
                        <span class="item">Doorflora</span>
                    </span>
                    <span class="menu-item">
                        <span class="icon location"></span>
                        <span class="item">Lelystad</span>
                    </span>
                    <a class="menu-item" target="_blank" href="{{url('http://www.facebook.com/doorflora')}}">
                        <span class="icon facebook"></span>
                        <span class="item">Doorflora</span>
                    </a>
                    <a class="menu-item" target="_blank"  href="{{url('http://www.instagram.com/doorflora')}}">
                        <span class="icon instagram"></span>
                        <span class="item">Doorflora</span>
                    </a>
                    <a class="menu-item" target="_blank" href="{{url('http://www.pinterest.com/doorflora')}}">
                        <span class="icon pintrest"></span>
                        <span class="item">Doorflora</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="socket" style="background-color:{{$values->accent_color}}">
        <div class="container">
            <p>Copyright © 2020 Doorflora Netherlands, All rights reserved. Website built by Gisbert van Veldhuisen & Jurre van Esveld designed by Babette Westeneng.</p>
        </div>
    </div>
@endsection