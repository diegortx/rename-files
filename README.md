# Script de Renomeação de Arquivos

Este script renomeia arquivos em um diretório especificado, substituindo uma substring específica nos nomes dos arquivos.

## Como Funciona

1. **Especificar o Diretório**: O script começa especificando o diretório que contém os arquivos a serem renomeados.
2. **Converter o Caminho do Diretório**: Ele converte o caminho do diretório para usar barras invertidas para compatibilidade com o Windows.
3. **Definir Strings de Busca e Substituição**: O script define a substring a ser buscada nos nomes dos arquivos e a string para substituí-la.
4. **Verificar Existência do Diretório**: Ele verifica se o diretório especificado existe.
5. **Obter Lista de Arquivos**: O script recupera a lista de arquivos no diretório.
6. **Renomear Arquivos**: Para cada arquivo, ele verifica se o arquivo é um arquivo regular e contém a substring de busca. Se sim, ele renomeia o arquivo substituindo a substring pela string de substituição.

## Funções

- `is_dir($directory)`: Verifica se o diretório especificado existe.
- `scandir($directory)`: Recupera a lista de arquivos no diretório.
- `is_file($oldPath)`: Verifica se o caminho especificado é um arquivo regular.
- `strpos($file, $searchString)`: Verifica se o nome do arquivo contém a substring de busca.
- `str_replace($searchString, $replaceString, $file)`: Substitui a substring de busca pela string de substituição no nome do arquivo.
- `rename($oldPath, $newPath)`: Renomeia o arquivo do caminho antigo para o novo caminho.

## Exemplo de Uso

1. **Definir o Diretório e as Strings**: Modifique as variáveis `$directory`, `$searchString` e `$replaceString` no script para corresponder às suas necessidades.

   ```php
   <?php
   // Especificar o diretório contendo os arquivos
   $directory = "C:/Users/Seu_Usuario/Downloads/Sua_Pasta_de_Musicas";
   // Converter o caminho do diretório para usar barras invertidas no Windows
   $directory = str_replace('/', DIRECTORY_SEPARATOR, $directory);
   $searchString = '[Seu Nome] Nome do Álbum Antigo';
   $replaceString = '[Seu Nome] ';
   ```

2. **Executar o Script**: Execute o script no seu ambiente PHP.

   ```sh
   php index.php
   ```

3. **Saída**: O script exibirá os arquivos renomeados ou quaisquer erros encontrados durante o processo de renomeação.

   ```
   Renamed: [Seu Nome] Nome do Álbum Antigo - Musica1.mp3 -> [Seu Nome] - Musica1.mp3
   Renamed: [Seu Nome] Nome do Álbum Antigo - Musica2.mp3 -> [Seu Nome] - Musica2.mp3
   ```

## Notas

- Certifique-se de que o caminho do diretório especificado está correto e acessível.
- O script apenas renomeia arquivos regulares e ignora diretórios.
- Faça backup dos seus arquivos antes de executar o script para evitar perda acidental de dados.

## Licença

Este projeto está licenciado sob a Licença MIT.
