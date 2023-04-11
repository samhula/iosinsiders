function setTemplate(){
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