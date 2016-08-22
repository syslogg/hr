

<!DOCTYPE html>
<!--
CÃ³digo documentado

Classes OOCSS 

- block
- btn
-->
<html>
<head>
    <title>Dashboard - Painel administrativo SuaLogo2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<!-- Import fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/grid.css" />
	<link rel="stylesheet" href="css/style.css" />
    
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <div class="root">


        <div class="content-line-full">
            <header class="main-header clearfix">
                

                <div class="content-line">
                    <h1 class="float-left fontzero logo">
                        <a title="Home" href="#" class="fontzero">
                            Dashboard - Painel administrativo SuaLogo2
        					<img src="img/logo.png" />
                        </a>
                    </h1>
                    
                    <div class="float-right option-bar">
                        <a title="Notificações" href="#" class="float-left option-bar-icon"><img src="img/bells.png" /></a>
                        <a title="Opções de usuário" href="#" class="float-left option-bar-icon"><img src="img/circle.png"/></a>
        				<a title="Menu" href="#" class="btn-collapse float-left option-bar-icon"><img src="img/menu.png"/></a>
                    </div>
                    
                </div>
            </header>
        </div>

        <div class="content-line-full">

            <!-- NAVBAR -->
            <div class="main-nav">
                <ul class = "nav">
                    <li class="nav-item"><a title="Acessar Dashboard" href="#">Dashboard</a></li>
                    <li class="nav-item"><a href="#" class="nav-click"><?php echo "<b>Gerencia</b>"; ?></a>
                        <ul class = "nav-sub">
                            <li class="nav-item"><a href="#">Opção 1.1</a></li>
                            <li class="nav-item"><a href="#">Opção 1.2</a></li>
                            <li class="nav-item"><a href="#">Opção 1.3</a></li>
                            <li class="nav-item"><a href="#">Opção 1.4</a></li>
                            <li class="nav-item"><a href="#">Opção 1.5</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-click">Softwares</a>
                        <ul class = "nav-sub">
                            <li class="nav-item"><a href="#">Opção 2.1</a></li>
                            <li class="nav-item"><a href="#">Opção 2.2</a></li>
                            <li class="nav-item"><a href="#">Opção 2.3</a></li>
                            <li class="nav-item"><a href="#">Opção 2.4</a></li>
                            <li class="nav-item"><a href="#">Opção 2.5</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#">Configurações</a></li>
                    <li class="nav-item"><a href="#">Analise</a></li>
                    <li class="nav-item"><a href="#">Funcionários</a></li>
                    <li class="nav-item"><a href="#">Sair</a></li>
                </ul>
            </div>
            
            <!-- END NAVBAR-->
        </div>

        <section class="main-title main">
            <img src="asd" width="30" height="30"/>
            <div class="content-line">
                <img src="img/home.png">
    			<hgroup>
    				<h1 class="title">Dashboard</h1>
    				<h2 class="subtitle">Principais informações</h2>
    			</hgroup>
            </div>
        </section>
        


		<div class="breadcrumb content-line" itemprop="breadcrumb">
			<a title="Ir para Dashboard" href="#">Dashboard</a> »
			<a title="Ir para Home" href="#">Home</a>
		</div>
		
        <div class="content-line content-line-padding">

            <!-- Tiles blocks -->
            <!--
            Class OOCSS:
                - tile
                <block class="tile">
                    <title></title>
                    <subtitle></subtitle>
                </block> main block tiles tiles-round
            
            -->
            <section class="col-dk-12 block tiles-round">
                <h1 class="fontzero">Estatisticas</h1>
                
                <article class="tile tile-color-blue tile-info-user">
                    <h1>
                        <strong class="tile-title">784</strong>
                        <span class="tile-subtitle">Artigos publicados</span>
                    </h1>
    				<!-- <div class="tile-box"></div> -->
                </article>
                
                <article class="tile tile-color-yellow tile-info-post">
                    <h1>
                        <strong class="tile-title">784</strong>
                        <span class="tile-subtitle">Artigos publicados</span>
                    </h1>
                </article>
                
                <article class="tile tile-color-pink tile-info-grap">
                    <h1>
                        <strong class="tile-title">784</strong>
                        <span class="tile-subtitle">Artigos publicados</span>
                    </h1>
                </article>
                
                <article class="tile tile-color-red tile-info-cm">
                    <h1>
                        <strong class="tile-title">784</strong>
                        <span class="tile-subtitle">Artigos publicados</span>
                    </h1>
                </article>
                
            </section>
            <!-- END Tiles block -->
        
        </div>

        <div class="content-line">
            <div class="col-tb-3">
                <!-- post block -->
                <!-- Class OOCSS: THREAD -->
                <section class="block post">
                    <header class="block-header">
                        <h1 class="block-title">Todos os posts</h1>
                        <a title="Ver todos os posts" href="#" class="block-btn">VER TODOS</a>
                    </header>
                    
                    <ul class="thread ">
                        <?php for($i = 0; $i < 8; $i++): ?>
                        <li class="thread-block">
                            
                            <a class="" title="Como melhorar seu desempenho em sites com Google Analytics" href="#">
                                <img src="http://uploads.guiadopc.com.br/2014/11/homer-simpson-6000x6000.jpg" class="thread-img" height="100" width="100" />
                                <article class="thread-separate">
                                    <h2 class="thread-title text-color">Como melhorar seu desempenho em sites com Google Analytics</h2>
                                    <p class="thread-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum urna
                                        scelerisque augue egestas vulputate. Integer ac interdum massa, eget consectetur
                                        est. 
                                    </p>
                                </article>
                            </a>
                            
                        </li>


                        <?php endfor; ?>

                        <?php 
                            $hello = "Hello world";

                            echo $hello;
                        ?>
                        
                    </ul>
                </section>  
                <!-- END post block -->

                <!-- comentario block -->
                <section class="block comentario">
                    <header class="block-header">
                        <h1 class="block-title">Comentários</h1>
                        <a title="Ver todos os comentários" href="#" class="block-btn">VER TODOS</a>
                    </header>
                    
                    <ul class = "list list-none">
                        <?php for($i = 0; $i < 5; $i++): ?>
                        <li>
                                <img height="300" width="300" src="http://uploads.guiadopc.com.br/2014/11/homer-simpson-6000x6000.jpg" class="list-img-large img-round img-border" />
                                <article class="list-separate2">
                                    <h1 class="block-title">Hendy Rodrigues F. da Silva</h1><br/>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum urna
                                        scelerisque augue egestas vulputate. Integer ac interdum massa, eget consectetur
                                        est. Aliquam vel nulla gravida, pulvinar eros a, porttitor ipsum. Praesent 
                                        , massa eget cursus pharetra, odio magna condimentum risus, a interdum ex urna sit amet 
                                        mi. Donec vel tristique lorem, maximus volutpat
                                    </p>
                                    
                                    <span class="text-mini">em <strong><a title="Como ficar bom em programa~ção PHP" class="text-color">Como ficar bom em programação php</a></strong><br/></span>
                                    <time class="text-mini">07 out 2015 às 16:30 </time>
                                    
                                </article>
                            
                        </li>
                        <?php endfor; ?>
                        
                    </ul>
                </section>
                <!-- END comentario block -->

            </div>

            <div class="col-tb-3 col-tb-last">
                
                <!-- feed block -->
                <section class="block feed">
                    <header class="block-header">
                        <h1 class="block-title">Feed</h1>
                    </header>
                    
                    <ul class="list list-none">
                        <?php for($i = 0; $i < 5; $i++): ?>
                        <li>
                                <img title="" class="list-img-large img-round img-border" src="http://uploads.guiadopc.com.br/2014/11/homer-simpson-6000x6000.jpg" height="300" width="300" />
                                <div class="list-separate2">
                                    
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum urna
                                        scelerisque augue egestas vulputate. Integer ac interdum massa, eget consectetur
                                        est. Aliquam vel nulla gravida, pulvinar eros a, porttitor ipsum. Praesent 
                                        , massa eget cursus pharetra, odio magna condimentum risus, a interdum ex urna sit amet 
                                        mi. Donec vel tristique lorem, maximus volutpat
                                    </p>
                                    
                                    <strong class="text-color">Hendy Rodrigues F. da Silva</strong> disse<br/>
                                    <time class="text-mini">07 out 2015 às 16:30 </time>
                                    
                                </div>
                            
                        </li>
                        <?php endfor; ?>
                        
                    </ul>
                </section>  
                
                <!-- END feed block -->
                
                <!-- atividades block -->
                <section class="block atividade">
                    <header class="block-header">
                        <h1 class="block-title">Atividades recentes</h1>
                    </header>
                    <ul class="list list-none list-hover">
                        <?php for($i = 0; $i < 5; $i++): ?>
                        <li>
                            <img class="" src="http://uploads.guiadopc.com.br/2014/11/homer-simpson-6000x6000.jpg" />
                            <div class="list-separate">
                                <span>Hendy Rodrigues F. da Silva</span> postou um novo artigo
                                <time class="list-mini">30 min</time>
                            </div>
                        </li>
                        <?php endfor;?>
                    </ul>
                </section>
                <!-- END atividades block -->

                <!-- Tarefa block -->
                <section class="block task">
                    <header class="block-header">
                        <h1 class="block-title">Tarefa</h1>
                        <a title="Ver todos as tarefas" href="#" class="block-btn">VER TODOS</a>
                    </header>
                    <form action="">
                        <ul class="list list-none list-hover">
                            <?php for($i = 0; $i < 5; $i++): ?>
                            <li>
                                <label>
                                    <input title="Marcar como &quot;feito&quot;" type="checkbox"  />
                                    <div class="list-separate">
                                        <a href="#" class="no-hover">Reunião para desenvolvimento de projeto <strong class="list-tag list-tag-accept">URGENTE</strong></a>
                                    </div>
                                </label>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </form>
                </section>
                <!-- END Tarefa block -->
            </div>
        </div>

        
        
        
        
        
        
        
        <!-- 
        
        Class OOCSS:
            - list
        
            <ul class="list">
                <li>Content <inline>TAG</inline></li>
            </ul>
            Color tag:
            - list-tag-warm
            - list-tag-info
            - list-tag-error
            - list-tag-accept
            
        -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        <footer class="main-footer content-line-full ">
            
            <h1 class="fontzero">SuaLogo - Slogan</h1>
			<p>Sua Logo © <?=@date('Y')?> - All rights reserved<br/>
			Design and development by <a title="Contato profissional" href="contato@hendyrodrigues.com.br">Hendy R. Ferreira da Silva</a>
			</p>
            
        </footer>
    </div>
    <script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="js/site.js" type="text/javascript"></script>
</body>
</html>
