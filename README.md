# wordpress
Template blank WordPress

<h1>Hierarquia de arquivos do WordPress</h1>
<p>Para criar um bom theme para WordPress, você precisa conhecer bem a estrutura de arquivos que são utilizados no construir estes themes. São usados vários arquivos que setorizam as várias funcionalidades do blog ou site. Veja abaixo arquivos que são normalmente utilizados:</p>
<ul>
<li>Página de Erro 404 – <strong>404.php</strong></li>
<li>Histórico e Arquivo – <strong>archive.php</strong></li>
<li>Index de Histórico e Arquivo – <strong>archives.php</strong></li>
<li>Página de uma Categoria – <strong>category.php</strong></li>
<li>Comentários – <strong>comments.php</strong></li>
<li>Rodapé – <strong>footer.php</strong></li>
<li>Cabeçalho – <strong>header.php</strong></li>
<li>Links – <strong>links.php</strong></li>
<li>Home e Principal – <strong>index.php</strong></li>
<li>Páginas – <strong>page.php</strong></li>
<li>Post – <strong>single.php</strong></li>
<li>Formulário de busca – <strong>searchform.php</strong></li>
<li>Resultados de busca – <strong>search.php</strong></li>
<li>Sidebar – <strong>sidebar.php</strong></li>
<li>Stylesheet – <strong>style.css </strong></li>
</ul>
<p>O WordPress usa as <a href="http://codex.wordpress.org/Glossary#Query_string">Query String</a> de cada link do seu site para saber qual arquivo ele deve mostrar na página. Ele decide qual tipo de página será requisitada – uma página de busca, categoria, a home etc.<br>
Ele procura esses arquivo dentro do diretório do seu template. Caso o WP não encontre o arquivo requisitado, ele escolhe o template padrão do index.php para ser usado. Há uma hierarquia de arquivos de template que o WordPress irá requisitar caso ele não encontre o correto.</p>
<p>Por exemplo: imagine que seu visitante clique em um link de seu site que o leve para dentro de uma categoria. O WordPress irá procurar o arquivo referente a categoria personalizada. Suponha que o ID da categoria seja 40, ele procuraria o arquivo <em>category-40.php</em>, que é o arquivo que personaliza a página desta categoria. Caso ele não o encontre, o WordPress procura pelo arquivo genérico que gera as páginas de categorias, no caso o <em>category.php</em>. Contudo, se ele não encontrá-lo também, ele procurará o <em>archive.php</em> que é o documento que gera as páginas de históricos e arquivos. Caso ele também não o encontre, ele irá utilizar o arquivo principal <em>index.php</em><br>
Assim, seu sistema/blog/site não fica com erros por não encontrar um determinado documento.</p>
<p>Abaixo segue a hierarquia de alguns arquivos. Você pode ver muito mais <a href="http://codex.wordpress.org/Template_Hierarchy" title="Hierarquia de arquivo do WordPress - Em inglês">detalhes aqui</a>.</p>
<h5>Home Page</h5>
<ol>
<li>home.php</li>
<li>index.php </li>
</ol>
<h5>Visualizando o post</h5>
<ol>
<li>single.php</li>
<li>index.php</li>
</ol>
<h5>Páginas </h5>
<ol>
<li>nomedapagina.php – Seria um arquivo para uma página especifica personalizada</li>
<li>page.php</li>
<li>index.php </li>
</ol>
<h5>Category display</h5>
<ol>
<li>category-id.php – Categoria específica, onde o ID é o número de identificação da categoria</li>
<li>category.php</li>
<li>archive.php</li>
<li>index.php </li>
</ol>
<h5>Histórico</h5>
<ol>
<li>date.php</li>
<li>archive.php</li>
<li>index.php </li>
</ol>
<h5>Tag</h5>
<ol>
<li>tagslug.php – Arquivo personalizado para uma tag específica</li>
<li>tag.php</li>
<li>archive.php</li>
<li>index.php </li>
</ol>
<h5>404</h5>
<ol>
<li>404.php</li>
<li>index.phpc</li>
</ol>
<p>Na documentação do WordPress há <a href="http://codex.wordpress.org/images/1/18/Template_Hierarchy.png">um diagrama muito esclarecedor</a>:<br>
<img src="http://tableless.com.br/wp-content/uploads/2009/04/template_hierarchy-300x238.png" alt="template_hierarchy" title="template_hierarchy" width="300" height="238" class="alignnone size-medium wp-image-1311"></p>
<p>Muitos desenvolvedores por aí, aconselham que você comece seu theme a partir de um já pronto. Eu já vou além e sugiro que você comece fazendo os arquivos à medida em que for precisando dos arquivos. Assim você <strong>evita grandes quantidade de documentos inúteis</strong> na pasta do seu template. Isso é muito importante caso você esteja fazendo um site, por exemplo. Quanto mais organizado e menor a quantidade de arquivos, melhor. Mesmo assim, não atole todas as funções no <em>index.php</em>. Divida cuidadosamente as seções do site para não haver confusão em apenas um arquivo.</p>
<p>É possível saber quais os arquivos você precisará utilizar em seu template logo quando recebemos os documentos em HTML. Você pode utilizá-los como base para a criação dos arquivos dos templates. É a melhor maneira de começar criando um theme do zero. </p>
<p>No site do WordPress há outras muitas <a href="http://codex.wordpress.org/Template_Hierarchy">informações importantes sobre a Hierearquia dos Arquivos</a>.</p>

