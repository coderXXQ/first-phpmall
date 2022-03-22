//定义鼠标移入时，二级菜单显示的函数
		        function displaySubMenu(li) {
		            //根据标签名获取二级菜单对象
		            var sumMenu=li.getElementsByTagName('ul')[0]
		//让二级菜单显示，即设置二级菜单的样式display="block"
		           sumMenu.style.display="block"
		        }
		//定义鼠标移开时，二级菜单隐藏的函数
		        function hideSubMenu(li) {
		              //根据标签名获取二级菜单对象
		            var sumMenu=li.getElementsByTagName('ul')[0]
		//让二级菜单隐藏
		           sumMenu.style.display="none"
		        }