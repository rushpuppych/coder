
var controller = new Vue({
    el: '#websocket_demo',
    data: {
        websockets: null,
        chat_message: ''
    },
    methods: {
        init: function() {
            this.websockets = new WebSocketComponent({});
        },
        
        sendMessage: function() {
            this.renderMessage(this.chat_message, (this.home + this.profile_img), this.nickname, '15 minutes ago');
            this.websockets.send(this.chat_message);
        },
        
        renderMessage: function(strMessage, strImage, strNickname, strTime) {
            var strLastNickname = $('#chat_container').find('div.chat_message:last').find('div.lbl_nickname').html();
            
            var strHtmlImg = '';
            strHtmlImg += '<div class="col-sm-2" style="text-align: center;">';
            strHtmlImg += '   <img width="75%" class="img-circle" src="' + strImage + '">';
            strHtmlImg += '   <div class="lbl_nickname" style="font-size: 16px; margin: 0px;">' + strNickname + '</div>';
            strHtmlImg += '</div>';
            
            var strHtmlMsg = '';
            if(strNickname != strLastNickname) {
                strHtmlMsg += '<div class="col-sm-10 message-container">';
            }
            strHtmlMsg += '   <div style="font-size: 12px;">' + strTime + '</div>';
            strHtmlMsg += '   <div class="alert palette-clouds" role="alert" style="padding: 15px; min-height: 75px;">';
            strHtmlMsg += '      <p style="font-size: 12px; color: black;">' + strMessage + '</p>';
            strHtmlMsg += '   </div>';
            if(strNickname != strLastNickname) {
                strHtmlMsg += '</div>';
            }
            
            var strHtml = '';
            if(strNickname != strLastNickname) {
                if(strNickname === this.nickname) {
                    strHtml = '<div class="row chat_message">' + strHtmlImg + strHtmlMsg + '</div>';
                } else {
                    strHtml = '<div class="row chat_message">' + strHtmlMsg + strHtmlImg +'</div>';
                } 
            } else {
                $('#chat_container').find('div.chat_message:last').find('div.message-container').append(strHtmlMsg);
            }
            $('#chat_container').append(strHtml);
        }
    }

});

$(function() {
    controller.init();
});
