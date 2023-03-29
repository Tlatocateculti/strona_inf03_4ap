function readFromFile(strona){
	const xml = new XMLHttpRequest()
	xml.onloadend = () => {
		if (xml.status == 200) {
			document.querySelector("#out").innerHTML = xml.responseText
		}
	}
	xml.open("POST", "./php/${strona}")
	xml.send()
}


function init() {		
	//window.alert("I znowu ja, Twoja JS!")
	//console.log(document.querySelector('#menu'))
	tmp = document.createElement('div')
	menu = document.querySelector('#menu')	
	let przycisk = document.createElement('button')
	przycisk.innerText = 'Strona główna'
	przycisk.id = 'mainbtn'
	przycisk.className += ' przyciski glowne'
	przycisk.onclick = () => {alert('Kliknieto')}
		
	tmp.appendChild(przycisk)

	przycisk = document.createElement('button')
	przycisk.innerText = 'Kontakt'
	//przycisk.innerHTML = 'Kontakt'
	przycisk.id = 'contactbtn'
	przycisk.className = 'przyciski'
	tmp.appendChild(przycisk)
	
	menu.innerHTML = tmp.innerHTML
}

function addEvents() {
	document.querySelector('#login input[type=submit]').onclick = () => {
		readFromFile('login.php')
	}
}