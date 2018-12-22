var csrftoken = "";

function getToken() {
	if (typeof String.prototype.endsWith != 'function') {
        String.prototype.endsWith = function(suffix) {
            return this.indexOf(suffix, this.length - suffix.length) !== -1;
        };
    }
	
	var url = document.domain;
	var wDomain = ".vmall.com;.hicloud.com";
	var wds = wDomain.split(";");
	
	for(var i = 0;i<wds.length; i++) {
		var wd = wds[i];
		var isDomain = url.endsWith(wd);
		
		if (isDomain) {
			csrftoken = "c7c19715-e842-4eef-b1d6-ac1a03ded083";
			break;
		}
	}
}

getToken();