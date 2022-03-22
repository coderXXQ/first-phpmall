window.onload = function(){
	// 按顺序为：list个数 加 数量 减 删 选择框 金额 单价 选中的个数
	// list个数 不包括thead
	var oListNumber = document.getElementsByClassName('add').length;
	var oAdds = document.getElementsByClassName('add');
	var oNums = document.getElementsByClassName('num');
	var oDecs = document.getElementsByClassName('dec');
	var oDels = document.getElementsByClassName('del');
	var oInputs = document.getElementsByTagName('input');
	var oMoneys = document.getElementsByClassName('money');
	var oPers = document.getElementsByClassName('per');
	var oAllChecked = false; //全选
	var othercheckbox =0; //除了全选以外的其他checkbox

	changeMoney();

	// checkbox点击事件
	for(var i =0;i<oInputs.length;i++){
		(function(i){
			oInputs[i].onclick = function(){
				// 判断除了全选以外的checkbox
				if(i!=0){
					if(oInputs[i].checked ==true){
						othercheckbox++
					}else{
						othercheckbox--
					}
				}
				// 判断是否全选
				if(othercheckbox == oListNumber){
					oInputs[0].checked = true;
				}else{
					oInputs[0].checked = false;
				}
				// 判断是否选择了全选checkbox
				if(i==0){
					oAllChecked = !oAllChecked;
					for(var j=0;j<oInputs.length;j++){
						oInputs[j].checked=oAllChecked;
					}
					if(oAllChecked){
						othercheckbox = oListNumber
					}else{
						othercheckbox = 0;
					}
				}
				changeTotal()
			}
		})(i)
	}

	// add事件
	for(var i =0;i<oAdds.length;i++){
		(function(i){
			oAdds[i].onclick = function(){
				oNums[i].innerText = parseInt(oNums[i].innerText) +1;
				changeMoney()
				changeTotal()
			}
		})(i)
	}

	// dec事件
	for(var i =0;i<oDecs.length;i++){
		(function(i){
			oDecs[i].onclick = function(){
				if(oNums[i].innerText != '0'){
					oNums[i].innerText = parseInt(oNums[i].innerText) -1;
				}
				changeMoney()
				changeTotal()
			}
		})(i)
	}

	// add事件和dec事件伴随的金额改变事件
	function changeMoney(){
		var oPerSpan =[];  //单价
		var oMoneySpan=[];  //金额
		for(var i=0;i<oListNumber;i++){
			oPerSpan[i] = oPers[i].getElementsByTagName('span')[0].innerText;
			oMoneySpan[i] = oMoneys[i].getElementsByTagName('span')[0];
			oMoneySpan[i].innerText = (parseInt(oNums[i].innerText)*parseInt(oPerSpan[i]))
		}
	}

	// del事件
	for(var i =0;i<oDels.length;i++){
		(function(i){
			oDels[i].onclick = function(){
				var thisdom = oDels[i].parentNode.parentNode;
				var tbody = thisdom.parentNode;
				tbody.removeChild(thisdom)
				changeTotal()
			}
		})(i)
	}

	// 总数量 总金额
	function changeTotal(){
		var oChoosen = document.getElementsByClassName('choosen')[0];
		var oTotal = document.getElementsByClassName('total')[0];
		var sumNUM = 0
		var sumTOTAL =0

		for(var i=1;i<oInputs.length;i++){
			if(oInputs[i].checked){
				sumNUM = parseInt(oNums[i-1].innerText) + parseInt(sumNUM);
				sumTOTAL = parseInt(oMoneys[i-1].getElementsByTagName('span')[0].innerText) +parseInt(sumTOTAL)
			}

		}

		oChoosen.innerText = sumNUM;
		oTotal.innerText = sumTOTAL;

	}

}