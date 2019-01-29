addComment={moveForm:function(d,f,i){
	var m=this,
	a,
	h=m.I(d),
	b=m.I(i),
	l=m.I("comment-reply"),
	j=m.I("comment_parent");
	if(!h||!b||!l||!j){return}
	m.respondId=i;
	
	if(!m.I("wp-temp-form-div")){
		a=document.createElement("div");
		a.id="wp-temp-form-div";
		a.style.display="none";
		b.parentNode.insertBefore(a,b)}
		h.parentNode.insertBefore(b,h.nextSibling);
		
		j.value=f;
		l.style.display="";
		l.onclick=function(){
			var n=addComment,
			e=n.I("wp-temp-form-div"),
			o=n.I(n.respondId);
			if(!e||!o){return}
			n.I("comment_parent").value="0";
			e.parentNode.insertBefore(o,e);
			e.parentNode.removeChild(e);
			this.style.display="none";
			this.onclick=null;return false};
			try{m.I("comment").focus()}catch(g){}return false},
			I:function(a){return document.getElementById(a)}};