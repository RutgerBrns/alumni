function bootcamp_map(load_data_url) {

    this.country_data = {};

    this.map = null; // vectorMap object
    this.wrapper = null; // element in which the map resides

    this.selected_region = null; // currently selected region

    this.selector = null; // the select element

    this.modal_box = null;
    this.modal = null;
    this.load_data_url = load_data_url;
}

bootcamp_map.prototype = {
    init: function(data) {
        this.initSelector();
        this.initMap(data);
        this.initModal();

        if(window.location.hash) {
            var m = window.location.hash.match(new RegExp('^#(.+)$'));
            if(m && this.isCountryActive(m[1])) {
                this.selectRegion(m[1]);        //<--- something wrong
            }
        }
    },

    selectCountry: function(code) {
        this.selector.val(code);
        this.selectRegion(code);
        window.location.replace('#'+code);
    },

    isCountryActive: function(code) {
        return typeof(this.country_data[code]) != 'undefined';
    },

    initSelector: function() {
        var self = this;
        this.selector = $('#country_select');
        this.selector.change(function(ev) {
            self.selectRegion($(this).val());
        });
    },

    initMap: function(data) {
        this.country_data = data.country_data;
        var self = this;

        this.wrapper = $('#map');
        // initialize map
        this.wrapper.vectorMap({
            map: 'world_mill',

            panOnDrag: true,
            backgroundColor: "#505050",
            zoomOnScroll: false,
            regionsSelectable: true,
            regionsSelectableOne: true,

            //when a country is clicked sends the user to that country`s info page.
            onRegionClick: function (ev, code) {
                ev.preventDefault();
                if(!self.isCountryActive(code)) {
                    return false;
                }
                self.toggleRegion(code);
            },

            onRegionOver: function (ev, code) {
                if(!self.isCountryActive(code)) {
                    ev.preventDefault();
                    return false;
                }
            },

            onRegionTipShow: function(ev, el, code){
                if(!self.isCountryActive(code)) {
                    ev.preventDefault();
                    return false;
                }
            },

            //basic color for un-suported countries and color for the hover event.
            regionStyle: {
                initial: {
                    fill: '#d3d3d3',
                },
                hover: {
                    fill: '#e38582',
                    cursor: 'pointer'
                },
                selected: {
                    fill: '#D9534F'
                },
                selectedHover: {
                    fill: '#e38582'
                }
            },

            regionLabelStyle: {
                hover: {
                    'display': 'none'
                }
            },

            //color of the suported countries.
            series: {
                regions: [{
                    values: self.country_data,
                    attribute: 'fill',
                    scale: {
                        '0': '#ffffff',
                        '1': '#D9534F'
                    }
                }]
            }

        });
        this.map = this.wrapper.vectorMap('get', 'mapObject');
    },

    selectRegion: function(code) {
        if(this.selected_region != code) {
            this.clearRegions();
            if(this.isCountryActive(code)) {
                this.map.setSelectedRegions(code);
                this.selected_region = code;
                this.selector.val(code);
                window.location.replace('#'+code);
                this.openRegionData(code);
            }
        }
    },

    clearRegions: function() {
        this.map.clearSelectedRegions();
        this.selected_region = null;
        this.selector.val('');
        //history.pushState("", document.title, window.location.pathname + window.location.search);
        history.replaceState({}, document.title, ".");
    },

    toggleRegion: function(code) {
        if(this.selected_region == code) {
            this.clearRegions();
        } else {
            this.selectRegion(code);
        }
    },

    initModal: function() {
        var self = this;
        this.modal_box = $('#region_data');
        this.modal_box.find('.close').click(function(ev) {
            self.closeModal();
        });
        this.modal = this.modal_box.remodal();
        this.modal_box.css({'display': 'inline-block'});

        $(document).on('closing', '.remodal', function (e) {
            self.clearRegions();
        });
    },

    openRegionData: function(code) {
        if(this.loaded_region != code) {
            // load the modal contents
            this.loadRegionData(code);
        } 
        // just open the modal
        this.openModal();                                            //<--- something wrong
    },

    loadRegionData: function(code)
    {
        var self = this;
        this.modal_box.addClass('loading');
        $.get({
            url: this.load_data_url,
            data: {
                'code': code
            },
            success: function(data, status) {
                self.modal_box.removeClass('loading');
                self.modal_box.find('.content').html(data);
            },
            dataType: 'html'
        });
    },

    openModal: function() {
        console.log(this.modal);
        this.modal.open();                  //<--- something wrong
    },

    closeModal: function() {
        this.modal.close();
    }
};

