var speed=120;
var fgDemo=document.getElementById('ke_scllo');
var fgDemo1=document.getElementById('ke_scllo1');
var fgDemo2=document.getElementById('ke_scllo2');
fgDemo2.innerHTML=fgDemo1.innerHTML;
function marquee1(){
  if(fgDemo.scrollTop>=fgDemo2.offsetHeight){
	   fgDemo.scrollTop-=fgDemo1.offsetHeight;
	}
  else{
	   fgDemo.scrollTop++;
	}
  }
var myMar1=setInterval(marquee1,speed);
fgDemo.onmouseover=function() {clearInterval(myMar1);}
fgDemo.onmouseout=function() {myMar1=setInterval(marquee1,speed);}


      /* var  area=document.getElementById("ke_scllo");
	  		 //获取滚动区域，也就是新闻内容的中间部分div的id。用变量area来表示	
	   var p1=document.getElementById("ke_scllo1");
	   var p2=document.getElementById("ke_scllo2");

	  if(area.offsetHeight<=p1.offsetHeight){          
                         //当p1的内容超过了滚动区域area的高的时候，
						p2.innerHTML=p1.innerHTML;  
                      	//就要让p2的内容跟p1一模一样（为循环滚动做好准备）。
					}
		
	   function  goUp(){
	             area.scrollTop++;
				 if(area.scrollTop>=p1.offsetHeight){ 
                          //当p1刚好超出滚动区域area的时候，
					   area.scrollTop=0;               
                          //就立马让p1又退回到滚动区域内
					   }
			      
	  }
      var myset=setInterval("goUp()",50);   
	 		 //每50毫秒就执行一下goUp函数,并通过一个变量myset来控制这个定时器。
			  area.onmouseover=function(){
			 						 clearInterval(myset);    
			 						 //鼠标放到滚动区域上，清除定时器－－停止滚动
			 					   }
			 area.onmouseout=function(){
			 					 myset=setInterval("goUp()",50);
			 						  //鼠标离开滚动区域，定时器又开始工作－－继续滚动
			 					   }
*/