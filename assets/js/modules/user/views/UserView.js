/*global Knockback */
var app = app || {};
var Helper = Helper || {};

(function () {
    'use strict';

    // const ENTER_KEY = 13;
    // const ESC_KEY = 27;

    app.UserView = kb.ViewModel.extend({
        /*
        |--------------------------------------------------------------------------
        | CONSTRUCTOR
        |--------------------------------------------------------------------------
        */

        constructor: function (model, options, view) {
            kb.ViewModel.prototype.constructor.call(this, arguments);
        },

        // DOM event or function
        onClickButton: function(){
            // Thêm sự kiện cho view,ui
        },

        // Computed
        fullname: ko.pureComputed(function(){
           return 'Firstname' + '_' + 'Lastname';
        }),

        // Search list data
        doSearchUsers: function (formElement) {
            // Submit
            this.model().search_user()
                .done(function (res) {
                    console.log(res);
                });
        },
    });
})();
