// Открыть модальное окно контактов
let btnOpenContact = document.querySelector("#open_contact");
btnOpenContact.onclick = function () {
	let contactsModal = document.querySelector("#contacts-modal");
	contactsModal.style.display = "block";
}
//Закрыть модальное окно контактов
let contactsModalCloseBtn = document.querySelector("#contacts-modal .close");
contactsModalCloseBtn.onclick = function () {
	let contactsModal = document.querySelector("#contacts-modal");
	contactsModal.style.display = "none";
}

//Модальное окно входа 

// let btnOpenSingUp = document.querySelector("#open_sing_up");
// 	btnOpenSingUp.onclick = function() {
// 		let singModal = document.querySelector("#sing-modal");
// 			singModal.style.display ="block";
// 	}

//Закрыть модальное окно
// let singModalCloseBtn = document.querySelector("#sing-modal .close-sing");
// 	singModalCloseBtn.onclick = function() {
// 		let singModal = document.querySelector("#sing-modal");
// 			singModal.style.display = "none";
// 	}
function add(element) {
	var friend_list = document.querySelector("#friend_list");
	var ssylka = element.dataset.ssylka;
	var ajax = new XMLHttpRequest(); //создать обьект для отправки http запроса
	ajax.open("GET", ssylka, false); //открываем ссылку, передавая метод запроса и саму ссылку
	ajax.send(); //отправляем запрос

	friend_list.innerHTML = ajax.response; //меняем контент в блоке friend_list
}