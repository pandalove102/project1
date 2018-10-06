$(document).ready(function () {

    /*
    |--------------------------------------------------------------------------
    | Dropdown adjustments
    |--------------------------------------------------------------------------
    */

    var slideConfig = {
        duration: 270,
        easing: 'easeOutSine'
    };

    // Add dropdown animations when toggled.
    $(':not(.main-sidebar--icons-only) .dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(slideConfig);
    });

    $(':not(.main-sidebar--icons-only) .dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(slideConfig);
    });

    /*
    |--------------------------------------------------------------------------
    | Sidebar toggle functionality.
    |--------------------------------------------------------------------------
    */

    $('.toggle-sidebar').click(function (e) {
        $('.main-sidebar').toggleClass('open');
    });

    /*
    |--------------------------------------------------------------------------
    | CUSTOM SLIDER
    |--------------------------------------------------------------------------
    */
    jQuery.fn.customSlider = function( config ) {
        var errExtraMsg = ' Please consult the documentation for more information';

        if ( typeof config === 'undefined' ) {
            throw new Error('Custom slider component requires a configuration object.' + errExtraMsg);
        }

        var requiredConfigProps = [
            {
                prop: 'start',
                example: 'start: [25, 70]'
            },
            {
                prop: 'range',
                example: 'range: { \'min\': 0, \'max\': 100 }'
            }
        ];

        requiredConfigProps.map(function(requiredProp) {
            if ( typeof config[requiredProp.prop] === 'undefined' ) {
                throw new Error('Custom slider component requires a `' + requiredProp.prop + '` property passed in the configuration object. For example: `' + requiredProp.example + '`' + errExtraMsg);
            }
        });


        if ( this.length && this[0] !== undefined ) {
            for ( var i = 0; i < this.length; i++ ) {

                noUiSlider.create(this[i], config);
                var inputs = jQuery(this[i]).find('.custom-slider-input');

                if ( ! inputs.length || inputs.length < config.start.length ) {
                    throw new Error('You need to provide a .custom-slider-input for each start value.');
                    return;
                }

                var self = this;

                jQuery.each(inputs, function(index, value) {
                    // Do not update the extra inputs (if any).
                    if ( index === config.start.length ) {
                        return;
                    }

                    // Hook on the update event.
                    self[i].noUiSlider.on('update', function( values, handle ) {
                        inputs[index].value = values[index];
                    });
                });
            }
        }

        return this;
    }
});