function getQueryStringParameters() {
    var BuyNowLink = "";
    var isp = "";
    try {
        const queryString = window.location.search;
        const params = new URLSearchParams(queryString);

        if (params.get("isp") == 1) { // is single product
            isp = "?isp=1";
            BuyNowLink = "https://1.envato.market/baeyGk";
        }
        else {
            BuyNowLink = "javascript:void(0)";
        }
    }
    catch (err) {
        BuyNowLink = "javascript:void(0)";
    }
    document.addEventListener('DOMContentLoaded', function () {
        var elem = document.querySelectorAll('.btn-buy');
        for (var j = 0; j < elem.length; j++) {
            elem[j].setAttribute('href', BuyNowLink)
        }
    })
    document.addEventListener('DOMContentLoaded', function () {
        var elem = document.querySelectorAll('.technology-block a');
        for (var j = 0; j < elem.length; j++) {
            var dattr = elem[j].getAttribute('href');
            elem[j].setAttribute('href', dattr + isp);
        }
    })
}

getQueryStringParameters();