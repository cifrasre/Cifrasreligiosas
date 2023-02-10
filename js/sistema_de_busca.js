pesquisa_input = document.querySelectorAll(".pesquisa");
	
		for(i in pesquisa_input){
			
				pesquisa_input[i].onkeyup=function(e){
	
					reg = new RegExp(this.value.toLowerCase(),"g")
					lis = this.parentElement.querySelector(".lista")
	
					console.log(lis)
	
					for(j of lis.children){
						if( !j.getAttribute("nome").match(reg) )
							j.style.display="none"
						else
							j.removeAttribute("style")
					}
				}
		}
	window.addEventListener("load" ,pesquisa_input);
	
	function abrirsugestao()
{
let modal = document.querySelector('.lista')
modal.style.display = 'block';
}
s
function fecharmodal(){
let modal = document.querySelector('.lista')
modal.style.display = 'none';
}