
$(document).ready(
	function(){

		setInterval(
			function(){
				console.log('hola');
				console.log(Math.round(Math.random()*10)); //psaraimprimir un numero entre 1 al 10
			},200

		);
	});