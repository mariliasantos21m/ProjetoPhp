const formularioCadastro= document.getElementById('form')
let camposFormPreenchidos = true

formularioCadastro.addEventListener("submit", (e)=>{
    e.preventDefault()
    const formData = new FormData(e.currentTarget) 
    const entries= formData.entries() 
    if (verificacaoCamposFormulario(entries)) e.target.submit()
})


function verificacaoCamposFormulario(values){
    for (let entries of values){
        let valorInput=entries[1]
        let nomeInput= entries[0]
        let elemento= document.getElementsByName(nomeInput)[0]

        if (valorInput == ''){
            mudarMensagem(elemento, 'Campo obrigatório!')
            mudarClasse(elemento, 'form_input--erro')
            camposFormPreenchidos= false
        }
        else{
            mudarMensagem(elemento, '')
            mudarClasse(elemento, 'form_input')
            camposFormPreenchidos= true
        }
    }

    if(camposFormPreenchidos == true) return true
    
}

function mudarMensagem(input, mensagem){
    const controleCampo = input.parentElement
    const small= controleCampo.querySelector('small')
    small.innerText= mensagem
}

function mudarClasse(elemento, classe){
    elemento.className= classe
}
