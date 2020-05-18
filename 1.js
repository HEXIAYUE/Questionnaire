function Submit() {
  var checkOne = false;                    //判断是否被选择条件
  var chboxVal = [];                       //存入被选中项的值
  var checkBox = document.querySelectorAll('input[name = "btn[7][]"]'); //获得得到所的复选框
  var checkArr = Array.from(checkBox);     //将类数组转为数组

  checkArr.forEach(item => {
    //如果有1个被选中时 选择条件 为true 并将值添加到数组中
    if (item.checked) {
      checkOne = true;
      chboxVal.push(item.value)//将被选择的值追加到
    };
  });

  if (checkOne) {
    
  } else {
    /* window.location.hash = "#influences1";  */
    alter("sd");
    document.getElementById("show1").style.display ="inline-block"; 
    return false;
  };
  
  var checkOne2 = false;                    //判断是否被选择条件
  var chboxVal2 = [];                       //存入被选中项的值
  var checkBox2 = document.querySelectorAll('input[name = "btn[10][]"]'); //获得得到所的复选框
  var checkArr2 = Array.from(checkBox2);     //将类数组转为数组

  checkArr2.forEach(item2 => {
    //如果有1个被选中时 选择条件 为true 并将值添加到数组中
    if (item2.checked) {
      checkOne2 = true;
      chboxVal2.push(item2.value)//将被选择的值追加到
    };
  });

  if (checkOne2) {
  } else {
    window.location.hash = "#four1";
    document.getElementById("show2").style.display = "inline-block"; 
    return false;
  };


  var checkOne3 = false;                    //判断是否被选择条件
  var chboxVal3 = [];                       //存入被选中项的值
  var checkBox3 = document.querySelectorAll('input[name = "btn[12][]"]'); //获得得到所的复选框
  var checkArr3 = Array.from(checkBox3);     //将类数组转为数组

  checkArr3.forEach(item3 => {
    //如果有1个被选中时 选择条件 为true 并将值添加到数组中
    if (item3.checked) {
      checkOne3 = true;
      chboxVal3.push(item3.value)//将被选择的值追加到
    };
  });

  if (checkOne3) {
  } else {
    window.location.hash = "#contribution1";
    document.getElementById("show3").style.display = "inline-block"; 
    return false;
  };



  var checkOne4 = false;                    //判断是否被选择条件
  var chboxVal4 = [];                       //存入被选中项的值
  var checkBox4 = document.querySelectorAll('input[name = "btn[22][]"]'); //获得得到所的复选框
  var checkArr4 = Array.from(checkBox4);     //将类数组转为数组

  checkArr4.forEach(item4 => {
    //如果有1个被选中时 选择条件 为true 并将值添加到数组中
    if (item4.checked) {
      checkOne4 = true;
      chboxVal4.push(item4.value)//将被选择的值追加到
    };
  });

  if (checkOne4) {
  } else {
    window.location.hash = "#humanities1";
    document.getElementById("show4").style.display = "inline-block"; 
    return false;
  };

};

  
