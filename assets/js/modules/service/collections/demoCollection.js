/*global Backbone, _ */
var app = app || {};

(function () {
	    app.demoCollection = Backbone.Collection.extend({
		model: app.demoModel,
		localStorage: new Backbone.LocalStorage('demoCollection'),

        initialize: function () {
            console.log('load Collection ok ! ');
        },
        /*
        |--------------------------------------------------------------------------
        | DEFINE METHOD :: FETCH
        |--------------------------------------------------------------------------
        | Lấy danh sách user rồi nạp vào collection hiện tại
        */
		fetch : function(params) {
		    var collection = this;
            // Gọi API
            AJAX.post(API.service.demoservice, params).done(function(res){
                if(res.success){
                    var data = Helper.getData(res);

                    // Chúng ta đã có dữ liệu được trích xuất => nạp data đó vào collection thông qua hàm reset
                    collection.reset(data);

                    // Ngoài hàm reset ra thì Backbone collection còn có nhiều hàm khác như add, destroy, sort..
                    // http://backbonejs.org/#Collection

                    // Bây giờ xem console => có bao nhiêu object là hiện bấy nhiêu log init model :D
                } else{
                    // Dựa theo res.error mà trả thông báo lỗi
                }
			});
		},

	
	});
})();
