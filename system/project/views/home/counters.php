<div class="wrapper">
    <div class="counter col_fourth">
      <i class="fa fa-address-card-o  fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="36" data-speed="1500"></h2>
       <p class="count-text ">bootcamp alumni</p>
    </div>

    <div class="counter col_fourth">
      <i class="fa fa-globe fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="25" data-speed="1500"></h2>
      <p class="count-text ">different countries</p>
    </div>

    <div class="counter col_fourth">
      <i class="fa fa-check-square-o fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="3" data-speed="1500"></h2>
      <p class="count-text ">batches finished</p>
    </div>

    <div class="counter col_fourth end">
      <i class="fa fa-map-marker fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="42" data-speed="1500"></h2>
      <p class="count-text ">% still in Prague</p>
    </div>
</div>

<style type="text/css">
  .col_half { width: 49%; }
.col_third { width: 32%; }
.col_fourth { width: 23.5%; }
.col_fifth { width: 18.4%; }
.col_sixth { width: 15%; }
.col_three_fourth { width: 74.5%;}
.col_twothird{ width: 66%;}
.col_half,
.col_third,
.col_twothird,
.col_fourth,
.col_three_fourth,
.col_fifth{
  position: relative;
  display:inline;
  display: inline-block;
  float: left;
  margin-right: 2%;
  margin-bottom: 20px;
}
.end { margin-right: 0 !important; }
/* Column Grids End */

.wrapper { width: 980px; margin: 20px auto; position: relative;}
.counter { background-color: #505050; padding: 20px 0; border-radius: 5px;}
.count-title { font-size: 40px; font-family: 'Raleway', sans-serif; font-weight: normal;  margin-top: 10px; margin-bottom: 10; text-align: center; color: white;}
.count-text { font-size: 13px; font-family: 'Raleway', sans-serif; font-weight: normal;  margin-top: 10px; margin-bottom: 10; text-align: center; color: white;}
.fa-2x { margin: 0 auto; float: none; display: table; color: white; padding-bottom: 1rem;}

</style>

<script type="text/javascript">
(function ($) {
  $.fn.countTo = function (options) {
    options = options || {};
    
    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);
      
      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;
      
      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};
      
      $self.data('countTo', data);
      
      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);
      
      // initialize the element with the starting value
      render(value);
      
      function updateTimer() {
        value += increment;
        loopCount++;
        
        render(value);
        
        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }
        
        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;
          
          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }
      
      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };
  
  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };
  
  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  formatter: function (value, options) {
    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
  var $this = $(this);
  options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options);
  }
});

</script>