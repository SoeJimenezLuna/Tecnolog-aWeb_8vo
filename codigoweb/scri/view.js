$(document).ready(function(){
  var co = 1;
  $(".lo-m").click(function(){
   	if(co==1){
   		$("#password").get(0).type = 'text';
   		 $(".lo-m").css("color", "#666666");
   		co=0;
   	}else{
   		co=1;
   		 $(".lo-m").css("color", "#CCCCCC");
   		$("#password").get(0).type = 'password';
   	}
	});
  var co2 = 1;
  $(".agre-m").click(function(){
   	if(co2==1){
   		$("#contra").get(0).type = 'text';
   		 $(".agre-m").css("color", "#666666");
   		co2=0;
   	}else{
   		co2=1;
   		 $(".agre-m").css("color", "#CCCCCC");
   		$("#contra").get(0).type = 'password';
   	}
	});
  var co3 = 1;
  $(".agrere-m").click(function(){
   	if(co3==1){
   		$("#contrados").get(0).type = 'text';
   		 $(".agrere-m").css("color", "#666666");
   		co3=0;
   	}else{
   		co3=1;
   		 $(".agrere-m").css("color", "#CCCCCC");
   		$("#contrados").get(0).type = 'password';
   	}
	});
  var co4 = 1;
  $(".mod-m").click(function(){
   	if(co4==1){
   		$("#contraM").get(0).type = 'text';
   		 $(".mod-m").css("color", "#666666");
   		co4=0;
   	}else{
   		co4=1;
   		 $(".mod-m").css("color", "#CCCCCC");
   		$("#contraM").get(0).type = 'password';
   	}
	});
  var co5 = 1;
  $(".modrep-m").click(function(){
   	if(co5==1){
   		$("#contradosM").get(0).type = 'text';
   		 $(".modrep-m").css("color", "#666666");
   		co5=0;
   	}else{
   		co5=1;
   		 $(".modrep-m").css("color", "#CCCCCC");
   		$("#contradosM").get(0).type = 'password';
   	}
	});

});