
var controller = new Vue({
    el: '#account_settings',
    data: {
        message: 'ok'
    },
    methods: {
        init: function() {
            var strTab = $('div.message').data('tab');
            $('a[href="#' + strTab + '"]').trigger('click');
        }
    }

});

$(function() {
    controller.init();
});

