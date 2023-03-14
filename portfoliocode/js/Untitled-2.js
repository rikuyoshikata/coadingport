// JavaScript Document
$(function(){
    $.cookie.json = false;
    var darkMode = $.cookie("DarkMode");
 
    // ページ再読み込み時のスイッチ状態判定
    if (darkMode){
        if (darkMode == "Active") {
            $('input[name=dark_switch]:eq(0)').prop('checked', true);
        } else if (darkMode == "notActive") {
            $('input[name=dark_switch]:eq(0)').prop('checked', false);
        }
    }
 
    // スイッチ切り替え時の動作
    $("[name='dark_switch']").change(function() {
        $.cookie.json = false;
        var darkMode = $.cookie("DarkMode");
 
        if (darkMode){
            if (darkMode == "Active") {
                $('body').toggleClass('darkmode');
                $.cookie("DarkMode", "notActive", {expires:365, path:'/'});
                this.checked = false;
            } else if (darkMode == "notActive") {
                $('body').toggleClass('darkmode');
                $.cookie("DarkMode", "Active", {expires:365, path:'/'});
                this.checked = true;
            }
        } else {
            $('body').toggleClass('darkmode');
            $.cookie("DarkMode", "Active", {expires:365, path:'/'});
            this.checked = true;
        }
    });
});