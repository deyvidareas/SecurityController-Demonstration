
var select = document.getElementById("setores");
var setores = [
    "Administração",
    "Almoxarifado",
    "Apoio",
    "CAP",
    "Coordenação de Educação Física",
    "Coordenação de Geografia e História",
    "Coordenação do Ensino Médio",
    "Coordenação do Fundamental",
    "Coordenação Geral do Ensino Médio",
    "Coordenação Informatica",
    "Coordenação Superior",
    "Direção Geral",
    "Direção Superior",
    "EJA",
    "Estágio",
    "Eventos",
    "Inclusão",
    "Inglês",
    "Laboratorio de Linguas",
    "Multimidia",
    "Museu",
    "Núcleo",
    "Oficina de Teatro",
    "Promemo",
    "Sala de Professores Fundamental",
    "Sala de Professores Superior",
    "Sala dos Professores Ensino Médio",
    "Secretaria E.B",
    "SESUTI",
    "SOE",
    "SOP",
];

for(var i = 0; i < setores.length; i++) {
    var opt = setores[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
}

var ex = document.createElement("option");
ex.textContent = "Outro";
ex.value = "Outro";
select.appendChild(ex);