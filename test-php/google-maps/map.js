/*

	проделавал на bus.uplab.digital
	https://developers.google.com/maps/documentation/javascript/overview?hl=ru - документация
	https://www.youtube.com/watch?v=AgwhiHLu2H4  - урок
	https://www.youtube.com/watch?v=nx6107kLZao

		можно многое, прокладывать маршруты, точки на карте менять цвет карты.

		1) переходим в консоль (по кнопке в документации) получаем ключ   !!!!! Он платный и требует привязки карты !!!!!
		2) подключаем скрпипт с полученным ключом

		<style>
			#map {
				height: 400px;
			}
		</style>
		<div id="map"></div>

		new google.maps.Map(нода, опции) 	- создаем карту
		new google.maps.Marker(опции) 		-  добавляем маркер
		google.maps.InfoWindow()		 	- информационный popup (балун в яндекс картах), открывается info.open()


	кластеризация - группировка маркеров
	https://techsvit.eu/ru/cloud-blog/kak-sgruppyrovat-otmetky-na-kartah/




,
*/
var opt = {
	center: {lat: 56.102039, lng: 47.263221},
	zoom: 15
};

myMap = new google.maps.Map(document.getElementById('map'), opt);

var marker = new google.maps.Marker({
	position: {lat: 56.102039, lng: 47.263221},
	map: myMap,
	title: "Ты навел на меня",
	// icon: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVNc8W8RPTknjgxFcK9CZoFjmgbiWJ1qfafA&usqp=CAU"
});


var info = new google.maps.InfoWindow({
	content: '<h3>место</h3><p>простое место</p>'
});

//info.open(myMap, marker); - ставим на слушатель

info.open(myMap, marker);

marker.addListener('click', function () {
	info.open(myMap, marker);
});


//Кластеризация
var pos1 = {lat: 56.112039, lng: 47.273221};
var marker1 = new google.maps.Marker({position: pos1, map: myMap});
var pos2 = {lat: 56.122039, lng: 47.283221};
var marker2 = new google.maps.Marker({position: pos2, map: myMap});

var markers = [marker, marker1, marker2];
var imagePath = 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m';
var markerClusterer = new MarkerClusterer(myMap, markers, {imagePath: imagePath});