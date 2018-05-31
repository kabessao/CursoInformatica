Exercício
====

Comandos 
---

> convert()

Converte um tipo de dado em outro

Ex:
```sql
convert("2018-05-16", date);
```


>ascii(string);

Retorna o codigo numerico da primeira letra da string 

Ex:
```sql
ascii("Testando");
```
retorno 84.

>char(integer);

Retorna o caractere equivalente ao numero inteiro

Ex: 
```sql
char(84);
```
Retorno -> T.

>len(string);

Retorna a quantidade de caracteres a string tem.

Ex:
```sql
len("Teste");
```
Retorno -> 5.

>lower(string);

Converte a string em caixa baixa (letra minúsculas).

Ex: 
```sql
lower("TESTE");
```
Retorno -> teste.

>upper(string);

Converte a string em caixa alta (letra maiusculas).
```sql 
upper("teste");
```
Retorno -> TESTE.

>replicate(string, integer);

ou
>repeat(string, integer);

Repete a string o tanto de vezes indicado pela integer.

Ex:
```sql
repeat("Teste", 3);
```
Resultado -> Teste Teste Teste. 

>space(integer);

Retorna uma string com a quantidade de espaços indicado na integer.

Ex:
```sql
space(10);
```
Resultado ->          .

>right(string, integer);

Retorna uma string com a quantidade de caracteres indicado pela integer, começando pela direita.

Ex:
```sql
right("Testando 123", 3);
```
Retorno -> 123.

>left(string, integer);

Retorna uma string com a quantidade de caracteres indicado pela integer, começando pela esquerda.

Ex:
```sql
left("Testando 123", 8);
```
Retorno -> Testando.

>ltrim(string);

Remove espaços à esquerda da string.

Ex:
```sql
ltrim("       Teste");
```
Resultado -> Teste.

>rtrim(string);

Remove espaços à direita da string.

Ex:
```sql
rtrim("Teste       ");
```
Resultado -> Teste.

>substring(string, integer, integer);

Retorna uma string, com a posição inicial indicada pela primeira integer, e com o tamanho indicado pela seguna integer.

Ex:
```sql
substring("Este teste aqui", 5,5);
```
Resultado -> teste.

>reverse(string);

Retorna a string com o texto invertido.

Ex:
```sql
reverse("arara");
```
Resultado -> arara.

>dateadd(date, INTERVAL integer DAY/MONTH/YEAR);

Adiciona à data a quantidade de dias, mêses ou anos indicado pela integer.

Ex:
```sql
dateadd("2018-05-28", INTERVAL 5 DAY);
```
Resultado -> 2018-06-05.

>round(double, integer);

Arredonda um numero para a quantidade de casas decimais idicada pela integer.

Ex: