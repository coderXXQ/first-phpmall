var img=document.getElementsByTagName("img")
			for(var i=0;i<img.length;i++){
				img[i].onmouseover=function(){
					this.className="transparent_class";
				}
				img[i].onmouseout=function(){
					this.className="";
				}
			}