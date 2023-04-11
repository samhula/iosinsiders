function setTemplate(){

	if (confirmTemplate()){
		var templateType = document.getElementById('template');
		var templateTypeValue = templateType.options[templateType.selectedIndex].value;
		var templateTypeText = templateType.options[templateType.selectedIndex].text;

		var articleContent = document.getElementById('write-article-content');

		if (templateTypeValue == "Blog"){
			articleContent.value = "Template for the blog";
		}
		else {
			articleContent.value = "No template yet"
		}

		console.log("changed");
	}
}

function confirmTemplate(){
	if(window.confirm("Are you sure you want to change templates? Any previous work will not be saved.")){
		return true;
	}
	return false;
}

window.onbeforeunload = function(e) {
  return "Do you want to exit this page?";
};