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
			csrftoken = "f55c0d98-c5cc-48ba-aedc-efd5f77ede99";
			break;
		}
	}
}

getToken();