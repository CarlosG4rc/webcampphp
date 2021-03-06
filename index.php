<?php include_once 'includes/templates/header.php';?>
    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño.</p>
    </section><!--seccion-->
    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogv">
            </video>
        </div><!--contenedro video de fondo-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <?php 
                    try{
                        require_once('includes/funciones/bd_conexion.php');
                        $sql = "SELECT * FROM `categoria_evento`;";
                        $resultado = $conn->query($sql);
                    }catch(Exception $e){
                        $error = $e->getMessage();
                    }
                    ?>
                    <nav class="menu-programa">
                        <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <?php $categoria = $cat['cat_evento']; ?>
                            <a href="#<?php echo strtolower($categoria) ?>">
                                    <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                            </a>
                        <?php } ?>
                    </nav>
                    <?php
                            try {
                              require_once('includes/funciones/bd_conexion.php');
                              $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM `eventos` ";
                              $sql .= "INNER JOIN `categoria_evento` ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                              $sql .= "INNER JOIN `invitados` ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 1 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                              $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM `eventos` ";
                              $sql .= "INNER JOIN `categoria_evento` ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                              $sql .= "INNER JOIN `invitados` ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 2 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                              $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM `eventos` ";
                              $sql .= "INNER JOIN `categoria_evento` ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                              $sql .= "INNER JOIN `invitados` ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 3 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                            } catch (Exception $e) {
                              $error = $e->getMessage();
                            }
                    ?>
                    <?php $conn->multi_query($sql); ?>
                    <?php do{
                        $resultado = $conn->store_result();
                        $row = $resultado->fetch_all(MYSQLI_ASSOC);?>
                    <?php $i = 0; ?>
                    <?php foreach($row as $evento): ?>
                    <?php if($i % 2 == 0) {?>
                        <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
                    <?php } ?>
                            <div class="detalle-evento">
                                <h3><?php echo html_entity_decode($evento['nombre_evento']) ?></h3>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento']; ?></p>
                                <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " .  $evento['apellido_invitado']; ?></p>
                            </div>
                            
                            <?php if($i % 2 == 1): ?>
                            <a href="calendario.php" class="button float-right">Ver todos</a>
                                </div><!--id talleres-->
                            <?php endif;?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    <?php $resultado->free();?>
                 <?php   }while($conn->more_results() && $conn->next_result()); ?>
                </div><!--programa-evento-->
            </div><!--contenedor-->
        </div><!--contenido del programaa-->
    </section><!--programa-->
    <?php include_once 'includes/templates/invitados.php';?>
    <div class="contador paralax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li><p class="numero"></p>Invitados</li>
                <li><p class="numero"></p>Talleres</li>
                <li><p class="numero"></p>Días</li>
                <li><p class="numero"></p>Conferencias</li>
            </ul><!--resumen evento-->
        </div><!--contenedor-->
    </div><!--contador-->
    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por día</h3>
                        <p class="numero">$30</p>
                    
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                </div>
                </li>
                <li>
                    <div class="tabla-precio">
                            <h3>Todos los día</h3>
                            <p class="numero">$50</p>
                        
                        <ul>
                            <li>Boadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button ">Comprar</a>
                </div>
                </li>
                <li>
                    <div class="tabla-precio">
                            <h3>Pase por 2 días</h3>
                            <p class="numero">$45</p>
                        
                        <ul>
                            <li>Boadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div id="mapa" class="mapa"></div>
    <section class="seccion">
        <div class="testimoniales contenedor clearfix">
            <h2>Testimoniales</h2>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eleifend aliquam diam a dapibus. Duis sed convallis lectus. Suspendisse at porta purus.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Testimonial">
                        <cite>Osvaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eleifend aliquam diam a dapibus. Duis sed convallis lectus. Suspendisse at porta purus.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Testimonial">
                        <cite>Osvaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eleifend aliquam diam a dapibus. Duis sed convallis lectus. Suspendisse at porta purus.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Testimonial">
                        <cite>Osvaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div><!--fin testimonail-->
    </section>
    <div class="newsletter paralax">
        <div class="contenido contenedor">
            <p>registrate al newsletter</p>
            <h3>gdlwebcamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div><!--contenido-->
    </div><!--newsletter-->
    <section class="seccion">
        <h2>faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li><p id = "dias" class="numero"></p>días</li>
                <li><p id = "horas" class="numero"></p>horas</li>
                <li><p id = "minutos" class="numero"></p>Minutos</li>
                <li><p id = "segundos" class="numero"></p>segundos</li>
            </ul>
        </div>
    </section>
    <?php include_once 'includes/templates/footer.php';?>