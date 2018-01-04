$(document).ready(function(){
	var blogDoc = new XMLHttpRequest();
	blogDoc.onreadystatechange = function(){
		if(blogDoc.readyState == 4 && blogDoc.status == 200){
			loadBlogXML(blogDoc);
		}
	};
	blogDoc.open("GET", "posts.xml", true);
	blogDoc.send();
		
	function loadBlogXML(doc){
		var xmlPosts = doc.responseXML;
		var xmlPost = xmlPosts.getElementsByTagName('post');
		for(var i=xmlPost.length-1; i>=0; i--){
			var title = '<h1>' + xmlPost[i].getElementsByTagName('title')[0].childNodes[0].nodeValue + '</h1><br>';
			var imageFile = '';
			if(xmlPost[i].getElementsByTagName('image').length!=0) {
				var imageFile = '<img src="images/posts/' + xmlPost[i].getElementsByTagName('image')[0].childNodes[0].nodeValue + '" style="width:50%;"><br>';
			}
			var textPost = '<p>' + xmlPost[i].getElementsByTagName('text')[0].childNodes[0].nodeValue + '</p><hr>';
			var post = title + imageFile + textPost
			document.getElementById("content").innerHTML += post;
		}
	}
});