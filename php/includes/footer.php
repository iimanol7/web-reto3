<footer>
        <section class="top-footer">

            <div class="contacto">
                <h3>CONTACTO</h3>
                <ul>
                    <li><img src="img/icon-telefono.png" width="25px">+34 915 48 35 58</li>
                    <li><img src="img/icon-fax.png" width="25px">+34 915 42 70 49</li>
                    <li><img src="img/icon-mail.png" width="25px"><a href="mailto:rfebm@rfebm.com">rfebm@rfebm.com</a>
                    </li>
                    <li><img src="img/icon-ubi.png" width="25px">Ornilla Doctor Kalea, 2, 48004 Bilbo, Bizkaia</li>
                </ul>
            </div>
            <div class="redes">
                <h3>REDES</h3>
                <ul>
                    <li><a href="https://www.instagram.com/rfebalonmano/?hl=es"><img src="img/icon-ig.png" width="50px">
                            <p>@rfebalonmano</p>
                        </a></li>
                    <li><a
                            href="https://twitter.com/RFEBalonmano?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img
                                src="img/icon-twt.png" width="50px">
                            <p>@RFEBalonmano</p>
                        </a></li>
                    <li><a href="https://www.youtube.com/@RFEBM"><img src="img/icon-yt.png" width="50px">
                            <p>@RFEBM</p>
                        </a></li>
                </ul>
            </div>

        </section>

        <section class="bottom-footer">
            <div class="copy-footer">

                <img src="img/logo-liga.png" alt="RFEVB" width="50px">
                <p>Copyright RFEBM.</p>
            </div>
            <div class="info-footer">
                | <a href="footer/condiciones-legles.html">Condiciones Legales</a> |
                <a href="index.php">Inicio</a> 
                <?php
                session_start();
                $sesion = $_SESSION['sesion'];
                if($sesion['nombre'] == 'admin'){
                    echo "| ";
                    echo "<a href='php/abrir_xml.php'>usuarios</a>";
                }
                ?>
            </div>
        </section>

    </footer>