var BlogCreate = function () {
    var datepicker = $('.datepicker');
    var titleEn = $("#title-en");
    var slugEn = $("#slug-en");
    var titleVn = $("#title-vn");
    var slugVn = $("#slug-vn");

    function changeSlug() {
        titleEn.change(function(){
            var newSlug = stringToSlug(titleEn.val());
            slugEn.val(newSlug);
        });

        titleVn.change(function(){
            var newSlug = stringToSlug(titleVn.val());
            slugVn.val(newSlug);
        });
    }

    function stringToSlug(str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to   = "aaaaeeeeiiiioooouuuunc------";
        for (var i=0, l=from.length ; i<l ; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    }

    function setupDatepicker() {
        datepicker.datepicker({ autoclose: true });
    }

    /**
     * Set function
     */
    function init() {
        changeSlug();
        setupDatepicker();
    }

    return {
        init: init
    };
}();