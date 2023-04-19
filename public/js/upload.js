function setTemplate(){

	if (confirmTemplate()){
		var templateType = document.getElementById('template');
		var templateTypeValue = templateType.options[templateType.selectedIndex].value;
		var templateTypeText = templateType.options[templateType.selectedIndex].text;

		var articleContent = document.getElementById('write-article-content');
		const templateData = getTemplateData();

		var i = 0;
		for(var text in templateData){
			if (templateTypeValue == templateData[i].ContentType){
				articleContent.value = templateData[i].Content;
			}
			else {
				i++;
			}
		}
		i = 0;
	}
}

function confirmTemplate(){
	if(window.confirm("Are you sure you want to change templates? Any previous work will not be saved.")){
		return true;
	}
	return false;
}

// window.onbeforeunload = function(e) {
//   return "Do you want to exit this page?";
// };

function getTemplateData(){
	const templateData = 
		[
			{
			ContentType: "News Article",
			Content: "This is a template for news"
			}, 
			{
			ContentType: "Review",
			Content: "This is a template for reviews"
			},
			{
			ContentType: "Guide",
			Content: "This is a template for guides"
			},
			{
			ContentType: "Promotional",
			Content: "This is a template for promotions and sponsorships"
			},
			{
			ContentType: "Income Report",
			Content: "This is a template for income reports"
			},
			{
			ContentType: "Blog",
			Content: "This is a template for the blog"
			}
		];
		return templateData;
}