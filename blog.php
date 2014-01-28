
<h1>Blog</h1>
<h2><span></span>Leia mais sobre as últimas novidades da Editorar e do Mercado<span></span></h2>

<div class="blog">

    <article>
        <figure>
            <a href="#"><img src="images/blog3/foto_1.jpg"  alt="arma"/></a>
            <div class="overlay">
                <a id="mapa" href="javascript:;">Continue lendo</a>
            </div>
            <span class="heart"></span>
        </figure>
        <div>
            <h5>Editorar conquista conta do MAPA.<br></h5><br>
            <p class="blog-meta">Postado em 17 Janeiro de 2014  por Editorar</p>
            <p>Empresa fornecerá serviços de editoração eletrônica, mídia digital e outros materiais</p>
        </div>
    </article>

    <article>
        <figure>
            <a href="#"><img src="images/blog2/foto_1.jpg" alt="imagem princinpal"/></a>
            <div class="overlay">
                <h5><a id="marcadigital" href="javascript:;">Continue lendo</a></h5>
            </div>
            <span></span>
        </figure>
        <div>
            <h5>Clássicos ganham vida com a magia digital</h5><br>
            <p class="blog-meta">Postado em 17 Janeiro de 2014  por Editorar</p>
            <p> Confira como ficou este grande projeto digital de Rino Stefano Tagliafierro.</p>
        </div>
    </article>

    <article>
        <figure>
            <a href="#"><img src="images/blog1/foto_1.jpg" alt="imagem Principal do blog"/></a>
            <div class="overlay">
            <h5><a id="grandesobras" href="javascript:;">Continue lendo</a></h5>
            </div>
            <span class="bag"></span>
        </figure>
        <div>
            <h5>Grandes obras para download gratuito.</h5><br>
            <p class="blog-meta">Postado em 17 Janeiro de 2014  por Editorar</p>
            <p>O Metropolitan Museum of Art, de Nova York, disponibiliza parte do seu acervo.</p>
        </div>
    </article>


    <script>
        $(document).ready(function() {


            $("#grandesobras").click(function() {
                $.fancybox.open({
                    href : 'paginas/grandesobras.html',
                    type : 'iframe',
                    padding : 5,
                    'autoDimensions': false,
                    'width' : '100%',
                    'height': 496,
                });
            });



        });
        $(document).ready(function() {


            $("#marcadigital").click(function() {
                $.fancybox.open({
                    href : 'paginas/marcadigital.html',
                    type : 'iframe',
                    padding : 5,
                    'autoDimensions': false,
                    'width' : '100%',
                    'height': 496,
                });
            });



        });
        $(document).ready(function() {


            $("#mapa").click(function() {
                $.fancybox.open({
                    href : 'paginas/mapa.html',
                    type : 'iframe',
                    padding : 5,
                    'autoDimensions': false,
                    'width' : '100%',
                    'height': 496,
                });
            });



        });
    </script>
</div>