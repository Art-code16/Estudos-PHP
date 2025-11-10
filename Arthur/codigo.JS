// FUNÇÃO PARA VALIDAÇÃO DE CAMPOS

function testa_form_aluno(){

    var alunos = document.forms["formalunos"]["aluno"].value;
    var cpf = document.forms["formalunos"]["cpf"].value;

    if (alunos == ""){

        alert ("Nome do aluno precisa ser informado!");
        document.forms["formalunos"]["aluno"].focus();
        return false;

    
    }
    
    if (cpf == ""){
        alert ("O CPF precisa ser informado!!");
        document.forms["formalunos"]["cpf"].focus();
        return false;
    }



    return true;

}

function testa_form_professor(){

    var professor = document.forms["formprofessor"]["professor"].value;
    var cpfprofessor = document.forms["formprofessor"]["cpf"].value;
    
    if (professor == ""){

        alert ("Nome do professor precisa ser informado!");
        document.forms["formprofessor"]["professor"].focus();
        return false;
        }

    if (cpfprofessor == ""){

        alert ("O cpf precisa ser informado!");
        document.forms["formprofessor"]["cpf"].focus();
        return false;
        
    }

    return true;

}




        // FUNÇÕES PARAS MASCARAS
    


function mascara(input) {
    var v = input.value;

    if (isNaN(v[v.length - 1]) && ![".", "-", "(", ")"].includes(v[v.length - 1])){
        input.value = v.substring(0,v.length-1);


        return;
    }


    var tipo = input.getAttribute("data-mask");

    if (tipo === "cpf"){


        input.setAttribute("maxlength", "14");
    
        if(v.length === 3 || v.length === 7) input.value += ".";
        if(v.length === 11) input.value += "-";
    }

    
    if (tipo === "telefone"){


        input.setAttribute("maxlength", "14");
        if(v.length === 1) input.value ="(" + v;
        if(v.length === 3) input.value += ")";
        if(v.length === 9) input.value += "-";

    }
}


function mascara_professor(input) {
    var v = input.value;

    if (isNaN(v[v.length - 1]) && ![".", "-", "(", ")"].includes(v[v.length - 1])){
        input.value = v.substring(0,v.length-1);


        return;
    }


    var tipo = input.getAttribute("data-mask");

    if (tipo === "cpf-professor"){


        input.setAttribute("maxlength", "14");
    
        if(v.length === 3 || v.length === 7) input.value += ".";
        if(v.length === 11) input.value += "-";
    }

    if (tipo === "cep-professor"){
        input.setAttribute("maxlength", "9");

        if(v.length === 5) input.value +="-";
    }

    if (tipo === "telefone-professor"){
        input.setAttribute("maxlength", "14");
        
        if(v.length === 1) input.value = "(" + v;
        if(v.length === 3) input.value += ")";
        if(v.length === 9 ) input.value += "-";
    }


}






function testa_form_matricula(){
    var aluno_matricula = document.forms["formmatricula"]["aluno"].value;
    var cpf = document.forms["formmatricula"]["cpf"].value;

    if (aluno_matricula == ""){

        alert ("Nome do aluno precisa ser informado!");
        document.forms["form-matricula"]["aluno"].focus();
        return false;

    
    }
    
    if (cpf == ""){
        alert ("O CPF precisa ser informado!!");
        document.forms["form-matricula"]["cpf"].focus();
        return false;
    }



    return true;
}


function mascara_matricula(input) {
    var v = input.value;

    if (isNaN(v[v.length - 1]) && ![".", "-", "(", ")"].includes(v[v.length - 1])){
        input.value = v.substring(0,v.length-1);


        return;
    }


    var tipo = input.getAttribute("data-mask");

    if (tipo === "numero-matricula"){

        input.setAttribute("maxlength", "14");
        
        if(v.length === 1) input.value = "(" + v;
        if(v.length === 3) input.value += ")";
        if(v.length === 9 ) input.value += "-";

    }

    if (tipo === "responsavel-matricula"){

        input.setAttribute("maxlength", "14");
        
        if(v.length === 1) input.value = "(" + v;
        if(v.length === 3) input.value += ")";
        if(v.length === 9 ) input.value += "-";
    }

    if (tipo === "cpf-matricula"){
        input.setAttribute("maxlength", "14");
    
        if(v.length === 3 || v.length === 7) input.value += ".";
        if(v.length === 11) input.value += "-";
    }


    if (tipo === "cep-matricula"){
        input.setAttribute("maxlength", "9");

        if(v.length === 5) input.value +="-";

    }
    
}



function testa_form_curso(){
    var curso = document.forms["formcurso"]["curso"].value;
    var Instituição = document.forms["formcurso"]["Instituição"].value;
    
    if ( curso == " "){

        alert ("Nome do curso precisa ser informado!");
        document.forms["formcurso"]["curso"].focus();
        return false;
        }


    return true;
}



