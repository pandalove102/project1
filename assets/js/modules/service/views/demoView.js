/*global Knockback */
var app = app || {};
var Helper = Helper || {};

(function () {
    'use strict';


    app.demoView = kb.ViewModel.extend({
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

       
    });
})();

