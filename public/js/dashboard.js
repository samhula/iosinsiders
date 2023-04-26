// function moreUsers(){
// 	$(function(){
// 		$.ajax({
// 			type: 'GET',
// 			dataType: 'json',
// 			url: 'index.php';
// 			success: function (){
// 				console.log("button pressed");
// 			}
// 		});
// 	});
// }

function hoverRow(num){
	const user = "row-";
	document.getElementById(user.concat(num)).classList.add('active-user');
}

function notHoverRow(num){
	const user = "row-";
	document.getElementById(user.concat(num)).classList.remove('active-user');
}