
  // JS function for uncrypting spam-protected emails:
function UnCryptMailto(s) {	//
	var n=0;
	var r="";
	for(var i=0; i < s.length; i++) {
		n=s.charCodeAt(i);
		if (n>=8364) {n = 128;}
		r += String.fromCharCode(n-(2));
	}
	return r;
}
  // JS function for uncrypting spam-protected emails:
function linkTo_UnCryptMailto(s)	{	//
	location.href="mailto:" + UnCryptMailto(s);
}


//    abcdefghijklmnopqrstuvwxyz
//  abcdefghijklmnopqrstuvwxyz


//     atelier-im-rosengarten.ch
//     cvgnkgt/ko/tqugpictvgp0ej

// lqjcppguBcvgnkgt/ko/tqugpictvgp0ej

	 