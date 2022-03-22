var cloud=document.getElementById("cloud");
var nav_0=document.getElementById("nav_0");
var lis=nav_0.children[1].children;
var current=0;//用于存放点击时候的offsetLeft
//alert(lis.length);
for(var i=0;i<lis.length;i++){
	lis[i].onmouseover=function(){
		//alert(this.offsetLeft);
		target=this.offsetLeft;
	};
	lis[i].onmouseout=function(){
		target=current;//鼠标离开target时刚才我们点击的位置
	};
	lis[i].onclick=function(){
		current=this.offsetLeft;//点击的时候把当前位置存储一下
	}
}
//缓动公式
var leader=0,target=0;
setInterval(function(){
	leader=leader+(target-leader)/10;
	cloud.style.left=leader+"px";
},10);