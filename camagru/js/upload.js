window.onload = function() {
	if (document.getElementById('startbutton')) {
		document.getElementById('startbutton').disabled = true;
	}
}
function changePreview() {
	if (document.getElementsByClassName('sticker_lists_clickable').disabled == false) {
		document.getElementById("filter_tmp").src = document.querySelector('input[name="source"]:checked').value;
		document.getElementById('startbutton').disabled = false;
		if (document.getElementById('output')) {
			var img = document.getElementById('output');
			var destWidth = img.naturalWidth;
			var destHeight = img.naturalHeight;
			document.getElementById('filter_tmp').style.top = `calc(50% - ((150/${destHeight})*100%)/2)`;
			document.getElementById('filter_tmp').style.left = `calc(50% - ((150/${destWidth})*100%)/2)`;
			document.getElementById('filter_tmp').style.width = `calc((150/${destWidth})*100%)`;
		}
	}
}

function preventSticker() {
	document.getElementsByClassName('sticker_lists_clickable').disabled = true;
}

function activateSticker() {
	document.getElementsByClassName('sticker_lists_clickable').disabled = false;
}

function deletePost() {
	if (confirm('Do you really want to delete this post?')) {
		document.getElementById('form_delete_post').submit();
	}
}
