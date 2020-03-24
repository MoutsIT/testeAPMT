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

**`OBS`** Necessário configurar a 'base_url' em '/config/config.php' e os devidos campos em '/config/database.php'; estrutura da tabela utilizada no BD está no arquivo 'mouts.sql'


# Listagem de Livros

*`OBS`* Apesar dessa indicação de 'listagem de livros' aparecer aqui, criei um CRUD genérico, sem campos específicos

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

**Resposta**: `phq`

### Banco de Dados SQL

 - Identifique os erros e/ou melhore as query's SQL abaixo:
	
 - Essa tabela possui os seguintes campos (id, nome, sobrenome, data_cadastro, status);

	"select 
	nome, sobrenome, CASE status = 1 then 'ATIVO' end status
	From usuario  
	Where 
	1 = 1  AND status = 1;"

**Resposta**: `SELECT nome, sobrenome, CASE WHEN status = 1 THEN 'ATIVO' END AS status FROM usuario WHERE  status = 1;`

 - Essa tabela possui os seguintes campos (id, nome, id_uf, data_cadastro, status);

	"select	top(50) *
	From cidades  
	Where 
	1 = 1  AND status = 1;" 

**Resposta**: `SELECT TOP 50 * FROM cidades WHERE status = 1;`

 - Essa tabela possui os seguintes campos (id, uf, data_cadastro, status);

	"select	top 50 *
	From estados  
	Where 
	1 = 1  AND status = 1;"

**Resposta**: `SELECT TOP 50 * FROM estados WHERE status = 1;` (apenas removi o '1 = 1', mas manti o limite de 50, apesar de não existirem 50 UF)

 - Diga qual o retorno das query's abaixo;

	"select convert(datetime, '2020-03-01 00:00:00', 103);"

	"select convert(datetime, '01/03/2020 00:00:00', 103);"
	
	"select convert(datetime, '2020-03-01 00:00:00', 121);"

	"select convert(datetime, '01/03/2020 00:00:00', 121);"
	
	"select convert(datetime, '01/03/2020 00:00:00', 22);"

	"select convert(datetime, '2020-03-01 00:00:00', 22);"

	"select convert(datetime, '01/03/2020 00:00:00', 101);"
	

**Resposta**: `Conferi os códigos e 13 formata em *dd/mm/yyyy*; 121 em *yyyy-mm-dd H:i:s*; 22 em *mm/dd/yy H:i:s A*; e 101 em *mm/dd/yyyy*; porém não tenho experiência o suficiente com SQLServer para apontar, sem testar, qual é o formato de data que ele reconhece`

 - Descreva as diferenças dos JOINS;
 
**Resposta**: INNER JOIN retorna apenas os resultados da intersecção estipulada no *ON*; LEFT JOIN retorna os resultados da intersecção e mais os registros da tabela à esquerda na querie (campos da tabela à direita ficam em NULL); RIGHT JOIN retorna os resultados da intersecção e os demais registros da tabela à direita da querie (campos da tabela à esquerda ficam em NULL); OUTER JOIN retorna os resultados da intersecção e mais os registros restantes das duas tabelas, com os devidos campos em NULL
