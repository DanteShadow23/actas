const icono_flecha = document.querySelector('.bxs-down-arrow');
const des_parrafo = document.querySelector('.des_parrafo');

icono_flecha.addEventListener('click', ()=>{
	des_parrafo.classList.toggle("mostrar")
});
/*--------------------------------------------------------------*/
const icono_flecha2 = document.querySelector('.bxs-down-arrow2');
const des_parrafo2 = document.querySelector('.des_parrafo2');

icono_flecha2.addEventListener('click', ()=>{
	des_parrafo2.classList.toggle("mostrar")
});
/*--------------------------------------------------------------*/
const icono_flecha3 = document.querySelector('.bxs-down-arrow3');
const des_parrafo3 = document.querySelector('.des_parrafo3');

icono_flecha3.addEventListener('click', ()=>{
	des_parrafo3.classList.toggle("mostrar")
});
/*---------------------------------------------------------------*/

const menu = document.querySelector('.bx-menu');
const lista_elementos = document.querySelector('.lista_elementos');

menu.addEventListener('click', ()=>{
	lista_elementos.classList.toggle("lista_elementos-show")
});

window.addEventListener('click', e=>{
	if (lista_elementos.classList.contains('lista_elementos-show') && e.target!=lista_elementos && e.target!=menu)
		{
			lista_elementos.classList.toggle("lista_elementos-show")
		}
});