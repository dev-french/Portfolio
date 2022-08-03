<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Aïssa Ghedbane</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{url('css/main.css')}}" />
    <noscript>
        <link rel="stylesheet" href="{{url('css/noscript.css')}}" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Home Page-->
            <section class="panel banner right">
                <div class="content color0 span-3-75">
                    <h1 class="major">Aïssa<br />
                        Développeur full stack</h1>
                    <p><strong>Créateur de solutions numériques</strong>,<br /> je suis spécialisé dans le <strong>développement d'applications Web & mobile</strong><br />et la construction d'expériences utilisateur. Je fournis un service de développement d'applications <strong>Full-stack</strong> en utilisant différentes stacks selon les missions.<br />
                    <br />
                    Vous pouvez télécharger mon CV, ou bien me contacter en cliquant sur les boutons ci-dessous</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Télécharger mon CV</a></li>
                            <li><a href="#" class="button primary color2">Contactez-moi</a></li>
                        </ul>
                </div>
                <div class="image filtered span-1-75" data-position="25% 25%">
                    <img src="{{ asset('/images/pic01.png') }}" />
                </div>
            </section>


            <!-- Biography -->
            <section class="panel spotlight medium right" id="first">
                <div class="content span-7">
                    <h2 class="major">A propos de moi</h2>
                    <p>Hello ! Je m’appelle Aïssa Ghedbane.<br /> Développeur Web & Mobile étudiant chez O'clock en formation intensive ( socle PHP de 4 mois, spécialisation React 1 mois, projets en équipe 1 mois. ), mes hobbies sont le sport & les balades en pleine nature, je suis aussi passionée par l'informatique en général  et les jeux vidéos.
                    </p>
                </div>
                <div class="image filtered tinted" data-position="top left">
                    <img src="images/pic02.jpg" alt="" />
                </div>
            </section>


            <!-- Skills -->
            <section class="panel color2">
                <div class="intro joined">
                    <h2 class="major">My Skills</h2>
                    <p>Mes skills sont en constantes améliorations car ma veille techno ainsi que ma pratique du code et quotidienne. Mes expériences professionnelles me permettent d'être aujourd'hui <strong>Autonome, Polyvalent</strong> et de disposer des compétences techniques dont voici un aperçu.</p>
                </div>
                <div class="inner">
                    <ul class="grid-icons three connected">
                        <li><span class="icon fa-gem"><span class="label">Lorem</span></span></li>
                        <li><span class="icon solid fa-camera-retro"><span class="label">Ipsum</span></span></li>
                        <li><span class="icon solid fa-cog"><span class="label">Dolor</span></span></li>
                        <li><span class="icon solid fa-paper-plane"><span class="label">Sit</span></span></li>
                        <li><span class="icon solid fa-chart-bar"><span class="label">Amet</span></span></li>
                        <li><span class="icon solid fa-code"><span class="label">Nullam</span></span></li>
                    </ul>
                </div>
            </section>


            <!-- Projects -->
            <section class="panel">
                <div class="intro color1">
                    <h2 class="major">Projects</h2>
                    <p>Dans cette section je vous présente les différents projets que j'ai réaliser seul ou en équipe, crée avec plusieurs technologies diverses & variées</p>
                </div>
                <div class="gallery">
                    <div class="group span-4-5">
                        <a href="images/gallery/fulls/05.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/05.jpg" alt="" /></a>
                        <a href="images/gallery/fulls/06.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/06.jpg" alt="" /></a>
                        <a href="images/gallery/fulls/07.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/07.jpg" alt="" /></a>
                        <a href="images/gallery/fulls/08.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/08.jpg" alt="" /></a>
                    </div>
                    <a href="images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/04.jpg" alt="" /></a>
                </div>
            </section>


            <!-- Contact -->
            <section class="panel color4-alt">
                <div class="intro color4">
                    <h2 class="major">Contactez-moi</h2>
                    <h4>Détails</h4>
                        <ul class="alt">
                            <li>Localisation : Paris, France</li>
                            <li>Tel : 06.98.61.49.81</li>
                            <li>E-mail : aiss.ghed@gmail.com</li>
                        </ul>
                </div>
                <div class="inner columns divided">
                <div class="span-4-5">
                        <h3 class="major">Formulaire de contact</h3>
                        <form method="post" action="#">
                            <div class="fields">
                                <div class="field third">
                                    <label for="demo-name">Nom & Prénom</label>
                                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Votre Nom & Prénom" />
                                </div>
                                <div class="field third">
                                    <label for="demo-email">E-mail</label>
                                    <input type="email" name="demo-email" id="demo-email" value="" placeholder="Votre @dresse E-mail" />
                                </div>
                                <div class="field third">
                                    <label for="demo-category">Motif</label>
                                    <div class="select-wrapper">
                                        <select name="demo-category" id="demo-category">
                                            <option value="">-</option>
                                            <option value="1">Prise de rendez-vous</option>
                                            <option value="1">Offre d'emploi</option>
                                            <option value="1">Question ?</option>
                                            <option value="1">Autres ...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field quarter">
                                    <input type="radio" id="demo-priority-low" name="demo-priority" class="color2" />
                                    <label for="demo-priority-low">I'm not a robot</label>
                                </div>
                                <div class="field quarter">
                                    <input type="radio" id="demo-priority-high" name="demo-priority" class="color2" checked />
                                    <label for="demo-priority-high">I'm a robot :)</label>
                                </div>
                                <div class="field">
                                    <label for="demo-message">Message :</label>
                                    <textarea name="demo-message" id="demo-message" placeholder="Votre message ..." rows="2"></textarea>
                                </div>
                            </div>
                            <ul class="actions">
                                <li><input type="submit" value="Envoyer" class="primary color2" /></li>
                            </ul>
                        </form>
                    </div>
                    <div class="span-1-5">
                        <ul class="contact-icons color1">
                            <li class="icon brands fa-twitter"><a href="https://twitter.com/1Dev_french" target="blank">@1Dev_french</a></li>
                            <li class="icon brands fa-facebook-f"><a href="https://www.facebook.com" target="blank">facebook.com</a></li>
                            <li class="icon brands fa-instagram"><a href="https://www.instagram.com/?hl=fr" target="blank">@1Dev_french</a></li>

                        </ul>
                    </div>
                </div>
            </section>

        </div>

    </div>

    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/browser.min.js')}}"></script>
    <script src="{{url('js/breakpoints.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>

</body>

</html>
