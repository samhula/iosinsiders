const file = document.getElementById('file');
const thumbnail = document.getElementById('current-img');

const interval = setInterval(checkFile, 1000);

function stopCheck(){
	clearInterval(interval);
}

function checkFile(){
	if (file.files.length == 0){
		console.log("no new file upload");
	}
	else {
		console.log("new file selected");
		stopCheck();
		thumbnail.remove();
	}
}