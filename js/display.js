function $(id) { return document.getElementById(id);  }
		  //手动切换
		  var playnum=1;
		  function showproductdiv(id){
		  if(id==0){ id=playnum; }
		  for(i=1;i<=4;i++){
			 if(i==id){
				$("showproduct"+id).style.display="block";
				$("imgproduct"+id).style.display="none";
				$("_i"+id).style.display="block";
			  }
			 else{
				$("showproduct"+i).style.display="none";
				$("imgproduct"+i).style.display="block";
				$("_i"+i).style.display="none";
			  }
		  }
		  if( playnum==4 ){ playnum=1 ; 	}
		  else{  playnum++ ; }
		  }
		  //自动切换
		  var myplay;
		  function productDivPlay(id){
			if(id==""){ id=0 ; }
			else{ playnum=id ; }   
			myplay=setInterval("showproductdiv(0)",2000);
		  }
		  
		  function productDivStop(){  
			clearInterval(myplay);
		  }  
		  
		  productDivPlay(0);