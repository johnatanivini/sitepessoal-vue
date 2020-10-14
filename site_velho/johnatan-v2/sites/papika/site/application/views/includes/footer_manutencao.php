                            <section id="marcas" class="container">
                                <article class="sixteen columns">
                                    <p class="titulo">
                                        Marcas:
                                    </p>
                                    <figure>
                                        <img src="assets/img/marcas.jpg" alt="marcas" />
                                    </figure>
                                </article>
                            </section>

                            <footer id="copy" class="container">
                                <article class="sixteen columns">
                                  <ul class="redes">
                                        <li>
                                            <a href="" class="facebook" title="Facebook"></a>
                                        </li>
                                        <li>
                                            <a href="" class="twitter" title="Twitter"></a>
                                        </li>
                                        <li>
                                            <a href="" class="google" title="Youtube"></a>
                                        </li>
                                    </ul>
                                    <p>
                                        &copy Todos os direitos reservados
                                    </p>

                                </article>

                            </footer>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')
        </script>
        <script src="<?=base_url();?>assets/js/plugins.js"></script>
        <script src="<?=base_url();?>assets/js/jvalidation/js/languages/jquery.validationEngine-pt_BR.js"></script>
        <script src="<?=base_url();?>assets/js/jvalidation/js/jquery.validationEngine.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?=base_url();?>assets/js/main.js"></script>

        <script>
            ( function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=355292604579698";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>