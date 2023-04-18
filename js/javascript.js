const applyStyles = iframe => {
	let styles = {
		fontColor : "rgba(243, 190, 34, 1)",
		backgroundColor : "rgba(71, 80, 89, 0.8)",
		fontGoogleName : "Gemunu Libre",
		fontSize : "20px",
		hideIcons : false,
		height: "330px",
		inputBackgroundColor : "rgba(165, 75, 41, 0.3)",
		inputFontColor : "rgba(243, 190, 34, 1)",
		memberListFontColor : "rgba(165, 75, 41, 1)",
		memberListBackgroundColor : "white"
	}
	
	setTimeout(() => {
		iframe.contentWindow.postMessage(JSON.stringify(styles), "*");	
	}, 100);
}

const chooseGame = (type, callType) => {
	let formData = new FormData();

	formData.append("type", type);
	formData.append("callType", callType);

	fetch("ajax.php", {
		method: "post",
		body: formData
	})
	.then(response => response.json())
	.then(data => {
		switch(data) {
			case 
			"INVALID_KEY", 
			"INVALID_KEY", 
			"INVALID_GAME_TYPE",
			"MAX_DEATH_THRESHOLD_REACHED":
				let node = document.querySelector("#contenantError");
				let textNode = document.createTextNode(data);
				console.log(data);
				node.append(textNode);
			default:
				location.href = "game.php";
		}
	})
}

