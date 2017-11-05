$(document).ready(function() {

	$("#btnAddKind").click(function(){
		var tfKindName = $("#tfTenTheLoai").val();
		var tfKindThuTu = $("#tfTenTheLoai").val();
		if(tfKindName=="" && tfKindThuTu==""){
			alert("Bạn chưa nhập thông tin");
			return false;	
		}else{
				return true;
			}
	})
	
	$("#showNotify").hide(3000);



	
}); 

  	
	var flag=true;

	
function Kind_Name(){
		var name = document.getElementById("tfTenTheLoai").value;
  	if(name==""){
		document.getElementById("errorKindName").innerHTML="Bạn Chưa Nhập Tên Thể Loại";
		flag=false;	
	}else{
		document.getElementById("errorKindName").innerHTML="";	
		
	}
	flag=true;
	
}

function Kind_ThuTu(){ 
	var value = document.getElementById("tfThuTu").value;
	var ex = /^[0-9]+$/;
  	if(!ex.test(value)){
		document.getElementById("errorKindThuTu").innerHTML="Giá trị phải là số";
		flag=false;		
	}else if(value==""){
			document.getElementById("errorKindThuTu").innerHTML="Bạn Chưa Nhập Thứ Tự";
				flag=false;	
		}
	else{
		document.getElementById("errorKindThuTu").innerHTML="";	
		return true;
	}
	flag=true;
}

function confirmKindAdd(){
		if(flag){
			return true;	
		}
		
		
			alert("Bạn vui lòng kiểm tra lại");
			
			return false;
	

}