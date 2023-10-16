<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Jquery-3-7-1.js"></script> <!-- Importar dados jquery  -->
    <script src="./Semantic-UI/semantic.min.js"></script><!-- Importar dados js semantic  -->
    <link rel="stylesheet" type="text/css" href="./Semantic-UI/semantic.min.css">
    <title>Testando</title>
</head>
<body>
    <div class="ui container center aligned">
        <table class="ui celled table center aligned">
            <caption><h1 class="centerd">Cargos</h1></caption>
            <thead>
                <tr>
                    <th>Cargo</th>
                    <th>Orgão</th>
                    <th>Tempo Especial</th>
                    <th>Acumulavel</th>
                        <td>Cpf</td> 
                        <th>País</td> 
                        <th>Endereço</td> 
                        <th>Local de Nascimento (Cidade)</td> 
                        <th>Local de Nascimento (País)</td> 
                        <th>Nome</td> 
                        <th>Data de Nascimento</td> 
                        <th>Sexo</td> 
                        <th>Mãe</td> 
                        <th>Pai</td> 
                        <th>RG (Número)</td> 
                        <th>RG (Data de Emissão)</td> 
                        <th>RG (UF de Emissão)</td> 
                        <th>RG (Orgão de Emissão)</td> 
                        <th>Endereço (Rua)</td> 
                        <th>Endereço (Número)</td> 
                        <th>Endereço (CEP)</td> 
                        <th>Endereço (Bairro)</td> 
                        <th>Título de Eleitor (Número)</td> 
                        <th>Título de Eleitor (Zona)</td> 
                        <th>Título de Eleitor (Seção)</td> 
                        <th>PIS/PASEP</td> 
                        <th>Telefone Residencial</td> 
                        <th>Telefone Celular</td>
                        <th>Estado Civil</td> 
                        <th>Altura</td> 
                        <th>Peso</td> 
                        <th>Raça/Cor</td> 
                        <th>Cor dos Olhos</td> 
                        <th>Instrução Escolar</td>
                </tr>
            </thead>
            <tbody id="pessoas">
            </tbody>
        </table>

        <table class="ui celled table center aligned">
            <caption><h1 class="centerd">Pessoas</h1></caption>
            <thead>
            </thead>
            <tbody id="pessoas">
            </tbody>
        </table>

        <table class="ui celled table center aligned">
            <caption><h1 class="centerd">Segurados</h1></caption>
            <thead>
            </thead>
            <tbody id="segurados">
            </tbody>
        </table>

    </div>

    <script>
        $(document).ready(function (){
            $.post("database/cargos.json", function(data){
                for(let i = 0; i < data.length; i++) {
                    $("#cargos").append("<tr> <td data-label name='Cargo'>"+ data[i].cargo_nome+"</td>"
                    +"<td data-label name='Orgão'>" + data[i].cargo_orgao+ "</td>"
                    +"<td data-label name='Tempo Especial'>"+data[i].cargo_tempo_especial+"</td>"
                    +"<td data-label name='Acumulavel'>"+data[i].cargo_acumulavel+"</td> </tr>");
                }
            }, "json");

            
            $.post("database/segurados.json", function(data){
                for(let i = 0; i < data.length; i++) {
                    $("#cargos").append("<tr> <td data-label name=' '> Pessoa: "+ data[i].segurado_pessoa+"</td>"
                        +"<td data-label name=' '> Cpf: " + data[i].segurado_cpf+ "</td>"
                        +"<td data-label name=' '> Matricula: "+data[i].segurado_matricula+"</td>"
                        +"<td data-label name=' '> Data de admissão: "+data[i].segurado_data_admissao+"</td>"
                        +"<td data-label name=' '> Situacao funcional: "+data[i].segurado_situacao_funcional+"</td>"
                        +"<td data-label name=' '> Tipo de Servidor: "+data[i].segurado_tipo_servidor+"</td>"
                        +"<td data-label name=' '> Categoria: "+data[i].segurado_categoria+"</td>"
                        +"<td data-label name=' '> Concessao Tipo: "+data[i].segurado_concessao_tipo+"</td>"
                        +"<td data-label name=' '> Concessao numero: "+data[i].segurado_concessao_numero+"</td>"
                        +"<td data-label name=' '> Codição de aposentado: "+data[i].segurado_condicao_aposentado+"</td>"
                        +"<td data-label name=' '> Nome do Cargo: "+data[i].segurado_cargo_nome+"</td>"
                        +"<td data-label name=' '> Fonte da pagadora: "+data[i].segurado_fonte_pagadora+"</td> </tr>"
                    );
                }
            }, "json");

            $.post("database/pessoas.json", function(data){
                for(let i = 0; i < data.length; i++) {
                    $("#pessoas").append(
                        "<tr> <td data-label name=' '>Cpf: "+ data[i].pessoa_cpf+"</td>" +
                        "<td data-label name=' '> País: " + data[i].pessoa_pais+ "</td>" +
                        "<td data-label name=' '> Endereço: "+data[i].pessoa_end_cidade+"</td>" +
                        "<td data-label name=' '> Local de Nascimento (Cidade): "+data[i].pessoa_local_nascimento_cidade+"</td>" +
                        "<td data-label name=' '> Local de Nascimento (País): "+data[i].pessoa_local_nascimento_pais+"</td>" +
                        "<td data-label name=' '> Nome: "+data[i].pessoa_nome+"</td>" +
                        "<td data-label name=' '> Data de Nascimento: "+data[i].pessoa_data_nascimento+"</td>" +
                        "<td data-label name=' '> Sexo: "+data[i].pessoa_sexo+"</td>" +
                        "<td data-label name=' '> Mãe: "+data[i].pessoa_mae+"</td>" +
                        "<td data-label name=' '> Pai: "+data[i].pessoa_pai+"</td>" +
                        "<td data-label name=' '> RG (Número): "+data[i].pessoa_rg_numero+"</td>" +
                        "<td data-label name=' '> RG (Data de Emissão): "+data[i].pessoa_rg_data_emissao+"</td>" +
                        "<td data-label name=' '> RG (UF de Emissão): "+data[i].pessoa_rg_uf_emissao+"</td>" +
                        "<td data-label name=' '> RG (Orgão de Emissão): "+data[i].pessoa_rg_orgao_emissao+"</td>" +
                        "<td data-label name=' '> Endereço (Rua): "+data[i].pessoa_end_rua+"</td>" +
                        "<td data-label name=' '> Endereço (Número): "+data[i].pessoa_end_numero+"</td>" +
                        "<td data-label name=' '> Endereço (CEP): "+data[i].pessoa_end_cep+"</td>" +
                        "<td data-label name=' '> Endereço (Bairro): "+data[i].pessoa_end_bairro+"</td>" +
                        "<td data-label name=' '> Título de Eleitor (Número): "+data[i].pessoa_titulo_numero+"</td>" +
                        "<td data-label name=' '> Título de Eleitor (Zona): "+data[i].pessoa_titulo_zona+"</td>" +
                        "<td data-label name=' '> Título de Eleitor (Seção): "+data[i].pessoa_titulo_secao+"</td>" +
                        "<td data-label name=' '> PIS/PASEP: "+data[i].pessoa_pis_pasep+"</td>" +
                        "<td data-label name=' '> Telefone Residencial: "+data[i].pessoa_telefone_residencial+"</td>" +
                        "<td data-label name=' '> Telefone Celular: "+data[i].pessoa_telefone_celular+"</td>" +
                        "<td data-label name=' '> Estado Civil: "+data[i].pessoa_estado_civil+"</td>" +
                        "<td data-label name=' '> Altura: "+data[i].pessoa_altura+"</td>" +
                        "<td data-label name=' '> Peso: "+data[i].pessoa_peso+"</td>" +
                        "<td data-label name=' '> Raça/Cor: "+data[i].pessoa_raca_cor+"</td>" +
                        "<td data-label name=' '> Cor dos Olhos: "+data[i].pessoa_cor_olhos+"</td>" +
                        "<td data-label name=' '> Instrução Escolar: "+data[i].pessoa_instrucao_escolar+"</td> </tr>"
                    );
                }
            }, "json");
        });
    </script>
</body>
</html>