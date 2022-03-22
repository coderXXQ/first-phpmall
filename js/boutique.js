// 获取元素对象
			      var mask = document.querySelector('.mask');
			      var preview = document.querySelector('.preview_img');
			      var big = document.querySelector('.big');
			      var bigIMg = document.querySelector('.bigIMg');
			      // 当鼠标移动的时候
			      preview.onmousemove = function (event) {
			        mask.style.display = 'block';
			        // 获得遮挡层移动的距离
			        var maskX = event.clientX - preview.offsetLeft - mask.offsetWidth / 2;
			        var maskY = event.clientY - preview.offsetTop - mask.offsetHeight / 2;
			        // 遮挡层最大的移动距离
			        var maskMaxX = preview.offsetWidth - mask.offsetWidth;
			        var maskMaxY = preview.offsetHeight - mask.offsetHeight;
			        // 限制遮挡层的移动范围
			        if (maskX < 0) {
			          maskX = 0;
			        } else if (maskX > maskMaxX) {
			          maskX = maskMaxX;
			        }
			        if (maskY < 0) {
			          maskY = 0;
			        } else if (maskY >= maskMaxY) {
			          maskY = maskMaxY;
			        }
			        // 让放大镜跟随鼠标进行移动
			        mask.style.left = maskX + 'px';
			        mask.style.top = maskY + 'px';
			        big.style.display = 'block';
			        // 大图片最大移动距离
			        var bigIMgMax = bigIMg.offsetWidth - big.offsetWidth;
			        // 大图片的移动距离 = 遮挡层移动距离 * 大图片的最大移动距离 / 遮挡层最大移动距离
			        var bigIMgX = maskX * bigIMgMax / maskMaxX;
			        var bigIMgY = maskY * bigIMgMax / maskMaxY;
			        // 大图片移动的距离
			        bigIMg.style.left = -bigIMgX + 'px';
			        bigIMg.style.top = -bigIMgY + 'px';
			      };
			      // 鼠标移出图片关闭放大镜效果
			      preview.onmouseout = function () {
			        big.style.display = 'none';
			        mask.style.display = 'none';
			      };