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
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>
                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="fa fa-clock"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i> Juan Pablo de la Torre Valdes</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive web Design</h3>
                            <p><i class="fa fa-clock"></i>20:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i> Juan Pablo de la Torre Valdes</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div><!--id talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Cómo ser freelancer</h3>
                            <p><i class="fa fa-clock"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i> Gregorio Sánchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologías del futuro</h3>
                            <p><i class="fa fa-clock"></i>17:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i> Susan Sánchez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para moviles</h3>
                            <p><i class="fa fa-clock"></i>17:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>11 de Dic</p>
                            <p><i class="fas fa-user"></i> Jarold García</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fa fa-clock"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>11 de Dic</p>
                            <p><i class="fas fa-user"></i> Susana Rivera</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
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