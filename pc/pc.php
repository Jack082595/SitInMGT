<?php

?>
<html>
<head>
	<link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<style>
		td{background:#6699FF; width: auto; height: auto;}
	</style>
	<script>
	$(document).ready(function() {
			$('#checkAll').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$(".color").css("background-color","blue");
				$('.checkbox1').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"               
				});
			}else{
				$(".color").css("background-color","#6699FF");
				$('.checkbox1').each(function() { //loop through each checkbox
					this.checked = false; //deselect all checkboxes with class "checkbox1"                       
				});         
			}
		});
	});
	$(document).ready(function() {
			$('#checkAll2').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$(".color2").css("background-color","blue");
				$('.checkbox2').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"               
				});
			}else{
				$(".color2").css("background-color","#6699FF");
				$('.checkbox2').each(function() { //loop through each checkbox
					this.checked = false; //deselect all checkboxes with class "checkbox1"                       
				});         
			}
		});
	});
	$(document).ready(function() {
			$('#checkAll3').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$(".color3").css("background-color","blue");
				$('.checkbox3').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"               
				});
			}else{
				$(".color3").css("background-color","#6699FF");
				$('.checkbox3').each(function() { //loop through each checkbox
					this.checked = false; //deselect all checkboxes with class "checkbox1"                       
				});         
			}
		});
	});
	$(document).ready(function() {
			$('#checkAll4').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$(".color4").css("background-color","blue");
				$('.checkbox4').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"               
				});
			}else{
				$(".color4").css("background-color","#6699FF");
				$('.checkbox4').each(function() { //loop through each checkbox
					this.checked = false; //deselect all checkboxes with class "checkbox1"                       
				});         
			}
		});
	});
	$(document).ready(function() {
			$('#checkAll5').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$(".color5").css("background-color","blue");
				$('.checkbox5').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"               
				});
			}else{
				$(".color5").css("background-color","#6699FF");
				$('.checkbox5').each(function() { //loop through each checkbox
					this.checked = false; //deselect all checkboxes with class "checkbox1"                       
				});         
			}
		});
	});
	$(document).ready(function() {
			$('#checkAll6').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$(".color6").css("background-color","blue");
				$('.checkbox6').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"               
				});
			}else{
				$(".color6").css("background-color","#6699FF");
				$('.checkbox6').each(function() { //loop through each checkbox
					this.checked = false; //deselect all checkboxes with class "checkbox1"                       
				});         
			}
		});
	});
	$(document).ready(function() {
			$('#checkAll7').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$(".color7").css("background-color","blue");
				$('.checkbox7').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"               
				});
			}else{
				$(".color7").css("background-color","#6699FF");
				$('.checkbox7').each(function() { //loop through each checkbox
					this.checked = false; //deselect all checkboxes with class "checkbox1"                       
				});         
			}
		});
	}); 
	/*for each checkbox*/
		$(document).ready(function() {
			$('#check7').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color7").css("background-color","blue");              
			}else{
				$('.uncheck').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color7").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check6').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color6").css("background-color","blue");              
			}else{
				$('.uncheck').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color6").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check5').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color5").css("background-color","blue");              
			}else{
				$('.uncheck').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color5").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check4').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color4").css("background-color","blue");              
			}else{
				$('.uncheck').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color4").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check3').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color3").css("background-color","blue");              
			}else{
				$('.uncheck').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color3").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check2').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color2").css("background-color","blue");              
			}else{
				$('.uncheck').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color2").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check1').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color1").css("background-color","blue");              
			}else{
				$('.uncheck').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color1").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check14').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color14").css("background-color","blue");              
			}else{
				$('.uncheck2').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color14").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check13').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color13").css("background-color","blue");              
			}else{
				$('.uncheck2').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color13").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check12').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color12").css("background-color","blue");              
			}else{
				$('.uncheck2').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color12").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check11').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color11").css("background-color","blue");              
			}else{
				$('.uncheck2').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color11").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check10').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color10").css("background-color","blue");              
			}else{
				$('.uncheck2').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color10").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check9').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color9").css("background-color","blue");              
			}else{
				$('.uncheck2').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color9").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check8').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color8").css("background-color","blue");              
			}else{
				$('.uncheck2').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color8").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check21').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color21").css("background-color","blue");              
			}else{
				$('.uncheck3').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color21").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check20').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color20").css("background-color","blue");              
			}else{
				$('.uncheck3').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color20").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check19').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color19").css("background-color","blue");              
			}else{
				$('.uncheck3').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color19").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check18').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color18").css("background-color","blue");              
			}else{
				$('.uncheck3').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color18").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check17').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color17").css("background-color","blue");              
			}else{
				$('.uncheck3').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color17").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check16').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color16").css("background-color","blue");              
			}else{
				$('.uncheck3').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color16").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check15').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color15").css("background-color","blue");              
			}else{
				$('.uncheck3').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color15").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check28').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color28").css("background-color","blue");              
			}else{
				$('.uncheck4').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color28").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check27').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color27").css("background-color","blue");              
			}else{
				$('.uncheck4').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color27").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check26').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color26").css("background-color","blue");              
			}else{
				$('.uncheck4').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color26").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check25').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color25").css("background-color","blue");              
			}else{
				$('.uncheck4').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color25").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check24').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color24").css("background-color","blue");              
			}else{
				$('.uncheck4').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color24").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check23').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color23").css("background-color","blue");              
			}else{
				$('.uncheck4').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color23").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check22').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color22").css("background-color","blue");              
			}else{
				$('.uncheck4').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color22").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check35').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color35").css("background-color","blue");              
			}else{
				$('.uncheck5').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color35").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check34').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color34").css("background-color","blue");              
			}else{
				$('.uncheck5').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color34").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check33').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color33").css("background-color","blue");              
			}else{
				$('.uncheck5').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color33").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check32').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color32").css("background-color","blue");              
			}else{
				$('.uncheck5').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color32").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check31').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color31").css("background-color","blue");              
			}else{
				$('.uncheck5').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color31").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check30').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color30").css("background-color","blue");              
			}else{
				$('.uncheck5').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color30").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check29').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color29").css("background-color","blue");              
			}else{
				$('.uncheck5').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color29").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check42').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color42").css("background-color","blue");              
			}else{
				$('.uncheck6').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color42").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check41').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color41").css("background-color","blue");              
			}else{
				$('.uncheck6').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color41").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check40').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color40").css("background-color","blue");              
			}else{
				$('.uncheck6').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color40").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check39').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color39").css("background-color","blue");              
			}else{
				$('.uncheck6').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color39").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check38').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color38").css("background-color","blue");              
			}else{
				$('.uncheck6').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color38").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check37').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color37").css("background-color","blue");              
			}else{
				$('.uncheck6').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color37").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check36').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color36").css("background-color","blue");              
			}else{
				$('.uncheck6').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color36").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check49').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color49").css("background-color","blue");              
			}else{
				$('.uncheck7').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color49").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check48').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color48").css("background-color","blue");              
			}else{
				$('.uncheck7').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color48").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check47').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color47").css("background-color","blue");              
			}else{
				$('.uncheck7').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color47").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check46').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color46").css("background-color","blue");              
			}else{
			$('.uncheck7').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color46").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check45').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color45").css("background-color","blue");              
			}else{
				$('.uncheck7').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color45").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check44').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color44").css("background-color","blue");              
			}else{
				$('.uncheck7').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color44").css("background-color","#6699FF");
			}
			});
		});
		$(document).ready(function() {
			$('#check43').click(function(event) {  //on click 
			if(this.checked) { // check select status
				$("#color43").css("background-color","blue");              
			}else{
				$('.uncheck7').each(function() { //loop through each checkbox
					this.checked = false;});
				$("#color43").css("background-color","#6699FF");
			}
			});
		});
		
	/*$(document).ready(function(){
		
		$('#check_all').click(function() {
		    $('input:checkbox[name=add_ons]').attr('checked',true);
		});

		$('#ucheck_all').click(function() {
		    $('input:checkbox[name=add_ons]').attr('checked',false);
		});
	});*/	
	</script>
</head>	
<body>
<div style="margin:9em">
	<table class="table" style="">
		<tr class="checkall">
			<td class="color" id="color7">PC7<input type="checkbox"	name="add_ons[]" class="checkbox1" id="check7"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color" id="color6">PC6<input type="checkbox"	name="add_ons[]" class="checkbox1" id="check6"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color" id="color5">PC5<input type="checkbox"	name="add_ons[]" class="checkbox1" id="check5"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color" id="color4">PC4<input type="checkbox"	name="add_ons[]" class="checkbox1" id="check4"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color" id="color3">PC3<input type="checkbox"	name="add_ons[]" class="checkbox1" id="check3"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color" id="color2">PC2<input type="checkbox"	name="add_ons[]" class="checkbox1" id="check2"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color" id="color1">PC1<input type="checkbox"	name="add_ons[]" class="checkbox1" id="check1"><img src="PC.png" width="30px" height="30px"></td>
			<td style="font-size:12px; text-align:center;"><input type="checkbox" class="uncheck" id="checkAll">SelectAll/UnselectAll<br> row 1 </td>
		</tr
		<tr>
			<td class="color2" id="color14">PC14<input type="checkbox"	name="add_ons[]" class="checkbox2" id="check14"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color2" id="color13">PC13<input type="checkbox"	name="add_ons[]" class="checkbox2" id="check13"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color2" id="color12">PC12<input type="checkbox"	name="add_ons[]" class="checkbox2" id="check12"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color2" id="color11">PC11<input type="checkbox"	name="add_ons[]" class="checkbox2" id="check11"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color2" id="color10">PC10<input type="checkbox"	name="add_ons[]" class="checkbox2" id="check10"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color2" id="color9" >PC9<input type="checkbox"	name="add_ons[]" class="checkbox2" id="check9" ><img src="PC.png" width="30px" height="30px"></td>
			<td class="color2" id="color8" >PC8<input type="checkbox" name="add_ons[]"   class="checkbox2" id="check8" ><img src="PC.png" width="30px" height="30px"></td>
			<td style="font-size:12px; text-align:center;"><input type="checkbox" class="uncheck2" id="checkAll2">SelectAll/UnselectAll <br> row 2 </td>
		</tr>
		<tr>
			<td class="color3" id="color21">PC21<input type="checkbox"	name="add_ons[]" class="checkbox3" id="check21"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color3" id="color20">PC20<input type="checkbox"	name="add_ons[]" class="checkbox3" id="check20"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color3" id="color19">PC19<input type="checkbox"	name="add_ons[]" class="checkbox3" id="check19"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color3" id="color18">PC18<input type="checkbox"	name="add_ons[]" class="checkbox3" id="check18"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color3" id="color17">PC17<input type="checkbox"	name="add_ons[]" class="checkbox3" id="check17"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color3" id="color16" >PC16<input type="checkbox"	name="add_ons[]" class="checkbox3" id="check16"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color3" id="color15" >PC15<input type="checkbox"	name="add_ons[]" class="checkbox3" id="check15"><img src="PC.png" width="30px" height="30px"></td>
			<td style="font-size:12px; text-align:center;" ><input type="checkbox" class="uncheck3" id="checkAll3">SelectAll/UnselectAll <br> row 3 </td>
		</tr>
		<tr>
			<td class="color4" id="color28">PC28<input type="checkbox"	name="add_ons[]" class="checkbox4" id="check28"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color4" id="color27">PC27<input type="checkbox"	name="add_ons[]" class="checkbox4" id="check27"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color4" id="color26">PC26<input type="checkbox"	name="add_ons[]" class="checkbox4" id="check26"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color4" id="color25">PC25<input type="checkbox"	name="add_ons[]" class="checkbox4" id="check25"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color4" id="color24">PC24<input type="checkbox"	name="add_ons[]" class="checkbox4" id="check24"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color4" id="color23">PC23<input type="checkbox"	name="add_ons[]" class="checkbox4" id="check23"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color4" id="color22">PC22<input type="checkbox"	name="add_ons[]" class="checkbox4" id="check22"><img src="PC.png" width="30px" height="30px"></td>
			<td style="font-size:12px; text-align:center;"><input type="checkbox" class="uncheck4" id="checkAll4">SelectAll/UnselectAll <br> row 4 </td>
		</tr>
		<tr>
			<td class="color5" id="color35">PC35<input type="checkbox"	name="add_ons[]" class="checkbox5" id="check35"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color5" id="color34">PC34<input type="checkbox"	name="add_ons[]" class="checkbox5" id="check34"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color5" id="color33">PC33<input type="checkbox"	name="add_ons[]" class="checkbox5" id="check33"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color5" id="color32">PC32<input type="checkbox"	name="add_ons[]" class="checkbox5" id="check32"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color5" id="color31">PC31<input type="checkbox"	name="add_ons[]" class="checkbox5" id="check31"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color5" id="color30">PC30<input type="checkbox"	name="add_ons[]" class="checkbox5" id="check30"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color5" id="color29">PC29<input type="checkbox"	name="add_ons[]" class="checkbox5" id="check29"><img src="PC.png" width="30px" height="30px"></td>
			<td style="font-size:12px; text-align:center;"><input type="checkbox" class="uncheck5" id="checkAll5">SelectAll/UnselectAll <br> row 5 </td>
		</tr>
		<tr>
			<td class="color6" id="color42">PC42<input type="checkbox"	name="add_ons[]" class="checkbox6" id="check42"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color6" id="color41">PC41<input type="checkbox"	name="add_ons[]" class="checkbox6" id="check41"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color6" id="color40">PC40<input type="checkbox"	name="add_ons[]" class="checkbox6" id="check40"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color6" id="color39">PC39<input type="checkbox"	name="add_ons[]" class="checkbox6" id="check39"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color6" id="color38">PC38<input type="checkbox"	name="add_ons[]" class="checkbox6" id="check38"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color6" id="color37">PC37<input type="checkbox"	name="add_ons[]" class="checkbox6" id="check37"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color6" id="color36">PC36<input type="checkbox"	name="add_ons[]" class="checkbox6" id="check36"><img src="PC.png" width="30px" height="30px"></td>
			<td style="font-size:12px; text-align:center;"><input type="checkbox" class="uncheck6" id="checkAll6">SelectAll/UnselectAll <br> row 6 </td>
		</tr>
		<tr>
			<td class="color7" id="color49">PC49<input type="checkbox"	name="add_ons[]" class="checkbox7" id="check49"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color7" id="color48">PC48<input type="checkbox"	name="add_ons[]" class="checkbox7" id="check48"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color7" id="color47">PC47<input type="checkbox"	name="add_ons[]" class="checkbox7" id="check47"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color7" id="color46">PC46<input type="checkbox"	name="add_ons[]" class="checkbox7" id="check46"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color7" id="color45">PC45<input type="checkbox"	name="add_ons[]" class="checkbox7" id="check45"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color7" id="color44">PC44<input type="checkbox"	name="add_ons[]" class="checkbox7" id="check44"><img src="PC.png" width="30px" height="30px"></td>
			<td class="color7" id="color43">PC43<input type="checkbox"	name="add_ons[]" class="checkbox7" id="check43"><img src="PC.png" width="30px" height="30px"></td>
			<td style="font-size:12px; text-align:center;"><input type="checkbox" class="uncheck7" id="checkAll7">SelectAll/UnselectAll <br> row 7 </td>
		</tr>			
	</table>	
</div>
</body>	
</html>