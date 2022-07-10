(function($) {
    'use strict';

    $(window).load(function() {
        var inputs = $("#ami-share-settings").children(".ami-input-parames");
        var url = $("#ami-share-settings").find('.ami-url');
        console.log(url.val());
        var socials = [];
        for (let index = 0; index < inputs.length; index++) {
            const element = inputs[index];
            socials[index] = element.value;
        }
        $("body").floatingSocialShare({
            buttons: socials,
            url: url.val()
        });
    });

})(jQuery);

