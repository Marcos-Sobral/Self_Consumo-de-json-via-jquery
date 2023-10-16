<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Testando</title>
</head>
<body>
    <div id="cargos">

    </div>
    
    <div id="segurados">

    </div>
    <script>
        $(document).ready(function (){

            $.post("database/cargos.json", function(data){
                for(let i = 0; i < data.length; i++) {
                    $("#cargos").append("<p>Cargo: "+ data[i].cargo_nome+"</p>"
                    +"<p> Orgão: " + data[i].cargo_orgao+ "</p>"
                    +"<p> Tempo Especial: "+data[i].cargo_tempo_especial+"</p>"
                    +"<p> Acumulavel: "+data[i].cargo_acumulavel+"</p>");
                }
            }, "json");

            $.post("database/segurados.json", function(data){
                for(let i = 0; i < data.length; i++) {
                    $("#cargos").append("<p>Pessoa: "+ data[i].segurado_pessoa+"</p>"
                        +"<p> Cpf: " + data[i].segurado_cpf+ "</p>"
                        +"<p> Matricula: "+data[i].segurado_matricula+"</p>"
                        +"<p> Data de admissão: "+data[i].segurado_data_admissao+"</p>"
                        +"<p> Situacao funcional: "+data[i].segurado_situacao_funcional+"</p>"
                        +"<p> Tipo de Servidor: "+data[i].segurado_tipo_servidor+"</p>"
                        +"<p> Categoria: "+data[i].segurado_categoria+"</p>"
                        +"<p> Concessao Tipo: "+data[i].segurado_concessao_tipo+"</p>"
                        +"<p> Concessao numero: "+data[i].segurado_concessao_numero+"</p>"
                        +"<p> Codição de aposentado: "+data[i].segurado_condicao_aposentado+"</p>"
                        +"<p> Nome do Cargo: "+data[i].segurado_cargo_nome+"</p>"
                        +"<p> Fonte da pagadora: "+data[i].segurado_fonte_pagadora+"</p>"
                    );
                }
            }, "json");

            $.post("database/pessoas.json", function(data){
                for(let i = 0; i < data.length; i++) {
                    $("#pessoas").append(
                        "<p>Cpf: "+ data[i].pessoa_cpf+"</p>" +
                        "<p> País: " + data[i].pessoa_pais+ "</p>" +
                        "<p> Endereço: "+data[i].pessoa_end_cidade+"</p>" +
                        "<p> Local de Nascimento (Cidade): "+data[i].pessoa_local_nascimento_cidade+"</p>" +
                        "<p> Local de Nascimento (País): "+data[i].pessoa_local_nascimento_pais+"</p>" +
                        "<p> Nome: "+data[i].pessoa_nome+"</p>" +
                        "<p> Data de Nascimento: "+data[i].pessoa_data_nascimento+"</p>" +
                        "<p> Sexo: "+data[i].pessoa_sexo+"</p>" +
                        "<p> Mãe: "+data[i].pessoa_mae+"</p>" +
                        "<p> Pai: "+data[i].pessoa_pai+"</p>" +
                        "<p> RG (Número): "+data[i].pessoa_rg_numero+"</p>" +
                        "<p> RG (Data de Emissão): "+data[i].pessoa_rg_data_emissao+"</p>" +
                        "<p> RG (UF de Emissão): "+data[i].pessoa_rg_uf_emissao+"</p>" +
                        "<p> RG (Orgão de Emissão): "+data[i].pessoa_rg_orgao_emissao+"</p>" +
                        "<p> Endereço (Rua): "+data[i].pessoa_end_rua+"</p>" +
                        "<p> Endereço (Número): "+data[i].pessoa_end_numero+"</p>" +
                        "<p> Endereço (CEP): "+data[i].pessoa_end_cep+"</p>" +
                        "<p> Endereço (Bairro): "+data[i].pessoa_end_bairro+"</p>" +
                        "<p> Título de Eleitor (Número): "+data[i].pessoa_titulo_numero+"</p>" +
                        "<p> Título de Eleitor (Zona): "+data[i].pessoa_titulo_zona+"</p>" +
                        "<p> Título de Eleitor (Seção): "+data[i].pessoa_titulo_secao+"</p>" +
                        "<p> PIS/PASEP: "+data[i].pessoa_pis_pasep+"</p>" +
                        "<p> Telefone Residencial: "+data[i].pessoa_telefone_residencial+"</p>" +
                        "<p> Telefone Celular: "+data[i].pessoa_telefone_celular+"</p>" +
                        "<p> Estado Civil: "+data[i].pessoa_estado_civil+"</p>" +
                        "<p> Altura: "+data[i].pessoa_altura+"</p>" +
                        "<p> Peso: "+data[i].pessoa_peso+"</p>" +
                        "<p> Raça/Cor: "+data[i].pessoa_raca_cor+"</p>" +
                        "<p> Cor dos Olhos: "+data[i].pessoa_cor_olhos+"</p>" +
                        "<p> Instrução Escolar: "+data[i].pessoa_instrucao_escolar+"</p>"
                    );
                }
            }, "json");
        });
    </script>
</body>
</html>