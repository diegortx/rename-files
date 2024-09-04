# 📁 Script de Renomeação de Arquivos

Este script renomeia arquivos em um diretório especificado, substituindo uma substring específica nos nomes dos arquivos.

## 🚀 Como Funciona

1. **Especificar o Diretório**: O script começa especificando o diretório que contém os arquivos a serem renomeados.
2. **Converter o Caminho do Diretório**: Ele converte o caminho do diretório para usar barras invertidas para compatibilidade com o Windows.
3. **Definir Strings de Busca e Substituição**: O script define a substring a ser buscada nos nomes dos arquivos e a string para substituí-la.
4. **Verificar Existência do Diretório**: Ele verifica se o diretório especificado existe.
5. **Obter Lista de Arquivos**: O script recupera a lista de arquivos no diretório.
6. **Renomear Arquivos**: Para cada arquivo, ele verifica se o arquivo é um arquivo regular e contém a substring de busca. Se sim, ele renomeia o arquivo substituindo a substring pela string de substituição.

## 🔧 Funções

- `is_dir($directory)`: Verifica se o diretório especificado existe.
- `scandir($directory)`: Recupera a lista de arquivos no diretório.
- `is_file($oldPath)`: Verifica se o caminho especificado é um arquivo regular.
- `strpos($file, $searchString)`: Verifica se o nome do arquivo contém a substring de busca.
- `str_replace($searchString, $replaceString, $file)`: Substitui a substring de busca pela string de substituição no nome do arquivo.
- `rename($oldPath, $newPath)`: Renomeia o arquivo do caminho antigo para o novo caminho.

## 📋 Exemplo de Uso

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

## 📦 Requisitos

- **Versão do PHP**: Este script requer PHP 7.4 ou superior.

## 📥 Como Baixar e Usar

1. **Clone o Repositório**: Clone este repositório para o seu ambiente local.

   ```sh
   git clone https://github.com/diegortx/rename-files.git
   ```

2. **Navegue até o Diretório do Projeto**: Vá para o diretório do projeto clonado.

   ```sh
   cd rename-files
   ```

3. **Modifique o Script**: Edite o arquivo [`index.php`](command:_github.copilot.openRelativePath?%5B%7B%22scheme%22%3A%22file%22%2C%22authority%22%3A%22%22%2C%22path%22%3A%22%2Fc%3A%2Fxampp%2Fhtdocs%2Frename-file%2Findex.php%22%2C%22query%22%3A%22%22%2C%22fragment%22%3A%22%22%7D%5D "c:\\xampp\htdocs\rename-file\index.php") para definir o diretório e as strings de busca e substituição conforme necessário.

4. **Execute o Script**: Execute o script no seu ambiente PHP.

   ```sh
   php index.php
   ```

## 📝 Notas

- Certifique-se de que o caminho do diretório especificado está correto e acessível.
- O script apenas renomeia arquivos regulares e ignora diretórios.
- Faça backup dos seus arquivos antes de executar o script para evitar perda acidental de dados.

## 👤 Autor

- **Nome**: Diego H Nogueira
- **Email**: [dhnogueira1@hotmail.com](mailto:dhnogueira1@hotmail.com)
- **GitHub**: [diegortx](https://github.com/diegortx)

## 📄 Licença

Este projeto está licenciado sob a Licença MIT.
