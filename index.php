<?php 

// PHP
/**
 * $string = 'php';
 * $string++;
 * echo $string;
 */

// Resposta seria 

phq


// Banco de Dados SQL

/**
 * Essa tabela possui os seguintes campos (id, nome, sobrenome, data_cadastro, status);
 * "select nome, sobrenome, CASE status = 1 then 'ATIVO' end status From usuario Where 1 = 1 AND status = 1;"
 */

// correção seria 

SELECT nome, sobrenome, 
    CASE 
        WHEN status = 1 THEN 'ATIVO'
        ELSE 'ATIVO' 
    END status 
FROM usuario 
WHERE 1 = 1 AND status = 1;

/**
 * Essa tabela possui os seguintes campos (id, nome, id_uf, data_cadastro, status);
 * "select top(50) * From cidades Where 1 = 1 AND status = 1;"
 */

// correção seria

SELECT TOP 50 * FROM cidades WHERE 1 = 1 AND status = 1;

/**
 * Essa tabela possui os seguintes campos (id, uf, data_cadastro, status);
 * "select top 50 * From estados Where 1 = 1 AND status = 1;"
 */

// correção seria

SELECT TOP 27 * FROM estados WHERE 1 = 1 AND status = 1;

/**
 * Diga qual o retorno das query's abaixo;
 * 
 * 1 - "select convert(datetime, '2020-03-01 00:00:00', 103);"
 * 2 - "select convert(datetime, '01/03/2020 00:00:00', 103);"
 * 3 - "select convert(datetime, '2020-03-01 00:00:00', 121);"
 * 4 - "select convert(datetime, '01/03/2020 00:00:00', 121);"
 * 5 - "select convert(datetime, '01/03/2020 00:00:00', 22);"
 * 6 - "select convert(datetime, '2020-03-01 00:00:00', 22);"
 * 7 - "select convert(datetime, '01/03/2020 00:00:00', 101);"
 */

// respostas na seguinte ordem

1 - The conversion of a varchar data type to a datetime data type resulted in an out-of-range value.
2 - 2015-12-14T00:00:00Z
3 - 2015-12-14T00:00:00Z
4 - The conversion of a varchar data type to a datetime data type resulted in an out-of-range value.
5 - Conversion failed when converting date and/or time from character string.
6 - Conversion failed when converting date and/or time from character string.
7 - The conversion of a varchar data type to a datetime data type resulted in an out-of-range value.

/**
 * Descreva as diferenças dos JOINS;
 */

// INNER JOIN 
// Interseção entre as tabelas.

SELECT <colunas> FROM TableA A INNER JOIN TableB B ON A.Key = B.Key;

// RIGHT JOIN e LEFT JOIN
// Além da interseção, busca também resultados que não possuem interseção. 
// Para LEFT JOIN são pegos os resultados da tabela a esquerda, além do resultado da interseção entre as duas tabelas, 
// e para RIGHT JOIN são pegos os valores da tabela a direita, além do resultado da interseção entre as duas tabelas.

SELECT <colunas> FROM TableA A LEFT JOIN TableB B ON A.Key = B.Key;

SELECT <colunas> FROM TableA A RIGHT JOIN TableB B ON A.Key = B.Key;

// FULL OUTER JOIN
// Além da interseção faz também LEFT JOIN e RIGHT JOIN, ou seja, busca na tabela A resultados que não possuem interseção, 
// busca na tabela B resultados que não possuem interseção, e por fim busca os resultados da interseção.

SELECT <colunas> FROM TableA A FULL OUTER JOIN TableB B ON A.Key = B.Key;