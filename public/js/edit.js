const file = document.getElementById('file');
const thumbnailText = document.getElementById('current-img-text');
const thumbnail = document.getElementById('current-img');

const interval = setInterval(checkFile, 500);

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
		thumbnailText.innerText = "New Image Uploaded";
		thumbnail.remove();
	}
}