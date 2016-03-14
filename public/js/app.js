$(document).ready(function(){

    var auth = {
        options: [".div-signup", ".div-forget", ".div-login"],
        panelDict: {'login': '.div-login', 'signup': '.div-signup', 'lost-password': '.div-forget', 'login-back': '.div-login', 'back-login': '.div-login'},
        modal: $("#myModal"),
        buttonIds: ["#login", "#signup", "#lost-password", "#login-back", "#back-login"],
        revealPanel: function (panelCls) {
            this.modal.modal({backdrop: true});
            $(panelCls).show();
        },
        init: function () {
            var _this = this;
            $(_this.buttonIds.join(',')).click( function(e){
                e.preventDefault();
                $(_this.options.join(',')).hide(); // Hide all forms.
                _this.revealPanel(_this.panelDict[this.id]); // Show clicked form.
                return false;
            });
        }
    };

    auth.init();
});
