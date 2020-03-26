```

      ___           ___           ___                         ___     
     /  /\         /  /\         /  /\          ___          /  /\    
    /  /::|       /  /::\       /  /:/         /__/\        /  /::\   
   /  /:|:|      /  /:/\:\     /  /:/          \  \:\      /__/:/\:\  
  /  /:/|:|__   /  /:/  \:\   /  /:/            \__\:\    _\_ \:\ \:\ 
 /__/:/_|::::\ /__/:/ \__\:\ /__/:/     /\      /  /::\  /__/\ \:\ \:\
 \__\/  /~~/:/ \  \:\ /  /:/ \  \:\    /:/     /  /:/\:\ \  \:\ \:\_\/
       /  /:/   \  \:\  /:/   \  \:\  /:/     /  /:/__\/  \  \:\_\:\  
      /  /:/     \  \:\/:/     \  \:\/:/     /__/:/        \  \:\/:/  
     /__/:/       \  \::/       \  \::/      \__\/          \  \::/   
     \__\/         \__\/         \__\/                       \__\/    

```

OBSERVAÇÃO: o diretório vendor e writeable foram adicionados ao ignore.

# Listagem de Livros
- Faça um fork deste repositorio, assim que finalizar o desafio realize o pull request.

Requisitos:

- PHP = 5.3
- CodeIgniter
- Bootstrap >= 4
- Jquery


#### Descrição

 - Crie um CRUD single page: 
	contendo uma listagem;
	Uma tela de cadastro contendo no minimo 4 campos distintos. 
	Faça a navegação entre as mesmas pelo Jquery.

 - Faça a modelagem de dados Orientada a Objeto para o form anterior.

### PHP

 - Qual o retrono deste código?

$string = 'php';

$string++;

echo $string;
Resposta: phq

### Banco de Dados SQL

 - Identifique os erros e/ou melhore as query's SQL abaixo:
	
 - Essa tabela possui os seguintes campos (id, nome, sobrenome, data_cadastro, status);

	"select 
	nome, sobrenome, CASE status = 1 then 'ATIVO' end status
	From usuario  
	Where 
	1 = 1  AND status = 1;"

    "select 
	nome, sobrenome, IIF(status = 1, 'ATIVO', '')
	From usuario  
	Where status = 1;"

 - Essa tabela possui os seguintes campos (id, nome, id_uf, data_cadastro, status);

	"select	top(50) *
	From cidades  
	Where 
	1 = 1  AND status = 1;" 

    "select	top(50) *
	From cidades  
	Where status = 1 ORDER BY nome;" sem o order by podem vir resultados iconsistentes 

 - Essa tabela possui os seguintes campos (id, uf, data_cadastro, status);

	"select	top 50 *
	From estados  
	Where 
	1 = 1  AND status = 1;"

    "select	top 50 *
	From estados  
	Where status = 1 ORDER BY uf;"

 - Diga qual o retorno das query's abaixo;

	"select convert(datetime, '2020-03-01 00:00:00', 103);"
    03/01/2020

	"select convert(datetime, '01/03/2020 00:00:00', 103);"
    01/03/2020

	"select convert(datetime, '2020-03-01 00:00:00', 121);"
    2020/03/01

	"select convert(datetime, '01/03/2020 00:00:00', 121);"
    2020/01/03

	"select convert(datetime, '01/03/2020 00:00:00', 22);"
    erro

	"select convert(datetime, '2020-03-01 00:00:00', 22);"
    erro

	"select convert(datetime, '01/03/2020 00:00:00', 101);"
    2020-01-03T00:00:00Z

 - Descreva as diferenças dos JOINS;
 Cross Join: vai combinar cada registro da primeira tabela com cada um da segunda.
 Inner Join: requer que cada linha tenha valores correspondentes.
 Left Join: dado duas tabelas A e B, retém as linhas da A mesmo que não exista dado na B.
 Right Join: dado duas tabelas A e B, retém as linhas da B mesmo que não exista dado na A.
 Outer Join: dado duas tabelas A e B, retém tanto de A como de B se o inverso não existir.

