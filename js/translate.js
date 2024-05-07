
var arrLang = {
    'en': {
        id: 'ID ',
        name: 'Name',
        case_num: 'Case number',
        jaw: 'Jaw',
        printer_type: 'Printer Type',
        resin_type: 'Resin Type',
        nesting: 'Nesting',
        printing: 'Printing',
        finishing: 'Finishing',
        light_cure: 'Light Cure',
        ready: 'Ready',
        date: 'Date',
        login: 'Login' ,

    },

    'ar': {
        id: 'المعرف',
        name: 'الاسم',
        case_num: 'رقم الحالة',
        jaw: 'الفـك',
        printer_type: 'نوع الطـابعة',
        resin_type: 'نوع الريزين',
        nesting: 'الترتيـب',
        printing: 'طبـاعة',
        finishing: 'الـتـشطيـب',
        light_cure: 'الـتـقسية',
        ready: 'جاهز',
        date: 'التاريخ',
        login: 'دخول' ,
    }
};

window.onload = function () {

    if (getCookie("lang") == "ar") {
        console.log(getCookie("lang"));
        $(function () {
            var lang = getCookie("lang");
            $('*').each(function (index) {
                $(this).text(arrLang[lang][$(this).attr('key')]);
                document.getElementById("dir").style.direction = "rtl";
            });
        });
    }

    if (getCookie("lang") == "en") {
        console.log(getCookie("lang"));
        $(function () {
            var lang = getCookie("lang");
            $('*').each(function (index) {
                $(this).text(arrLang[lang][$(this).attr('key')]);
                // console.log("شن صاير فيك");
                document.getElementById("dir").style.direction = "ltr";
            });
        });
    }
};

$(function () {

    $('.translatear').click(function () {
        document.cookie = 'lang=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        if (getCookie('lang') == null) {
            setCookie("lang", "ar", 30);
        }
        var lang = $(this).attr('id');
        ($(this).attr("id") == "ar")
        $('*').each(function (index) {
            $(this).text(arrLang[lang][$(this).attr('key')]);
            document.getElementById("dir").style.direction = "rtl";
        });
    });

    $('.translateen').click(function () {
        document.cookie = 'lang=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        if (getCookie('lang') == null) {
            setCookie("lang", "en", 30);
        }
        var lang = $(this).attr('id');
        ($(this).attr("id") == "en")
        $('*').each(function (index) {
            $(this).text(arrLang[lang][$(this).attr('key')]);
            document.getElementById("dir").style.direction = "ltr";
            // console.log("شن صاير فيك");
        });
    });
});

function setCookie(name, value, days) {
    var expires = '';
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + (value || '') + expires + '; path=/';
}

function getCookie(name) {
    var nameEQ = name + '=';
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
