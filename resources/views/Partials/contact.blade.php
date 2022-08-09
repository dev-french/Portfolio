<!-- Contact -->
<section id="contact" style="background: linear-gradient(180deg, #eeeae8,#817f7e);" class="panel">
    <div style="background: linear-gradient(180deg, #eeeae8,#817f7e);" class="intro">
        <h2 class="major">Contactez-moi</h2>
        <h4>Détails</h4>
        <ul class="alt">
            <li><strong>Localisation</strong> : Paris, France</li>
            <li><strong>Tel</strong> : 06.98.61.49.81</li>
            <li><strong>E-mail</strong> : aiss.ghed@gmail.com</li>
        </ul>
    </div>
    <div class="inner columns divided">
        <div class="span-4-5">
            <h3 class="major">Formulaire de contact</h3>

            <form method="POST" action="">
                @csrf
                <div class="fields">
                    <div class="field third">
                        <input type="text" name="name" id="demo-name" value="" placeholder="Votre Nom & Prénom" required>
                    </div>
                    <div class="field third">
                        <input type="email" name="email" id="demo-email" value="" placeholder="Votre @dresse E-mail" required>
                    </div>
                    <div class="field third">
                        <label for="demo-category">Motif</label>
                        <div class="select-wrapper">
                            <select name="subject" id="demo-category" required>
                                <option value="">-</option>
                                <option value="1">Prise de rendez-vous</option>
                                <option value="2">Offre d'emploi</option>
                                <option value="3">Question ?</option>
                                <option value="4">Autres ...</option>
                            </select>
                        </div>
                    </div>
                    <div class="field quarter">
                        <input type="radio" id="demo-priority-low" name="demo-priority" class="color2" required>
                        <label for="demo-priority-low">I'm not a robot</label>
                    </div>
                    <div class="field quarter">
                        <input type="radio" id="demo-priority-high" name="demo-priority" class="color2" checked>
                        <label for="demo-priority-high">I'm a robot :)</label>
                    </div>
                    <div class="field">
                        <textarea name="contenu" id="demo-message" placeholder="Votre message ..." rows="2"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Envoyer" class="primary color4" /></li>
                </ul>
            </form>
        </div>
        <!-- ?php
        if (isset($_POST["message"])) {
            $message = "Ce message vous a été envoyé via la page de contact de votre portfolio
                        Name : " . $_POST["name"] . "
                        Email : " . $_POST["email"] . "
                        Message : " . $_POST["message"];

            $retour = mail("aiss.ghed@gmail.com", $_POST["subject"], $message, "From:aissa.ghedbane@gmail.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if ($retour) {
                echo "<p>L'email a bien été envoyé.</p>";
            }
        }
        ?> -->


        <div class="span-1-5">
            <ul class="contact-icons color1">
                <li class="icon fa-brands fa-twitter"><a href="https://twitter.com/1Dev_french" target="blank">Mon Twitter</a></li>
                <li class="icon fa-brands fa-linkedin"><a href="https://www.linkedin.com/in/aïssa-ghedbane-2b740a238/" target="blank">Mon LinkeDIn</a></li>
                <li class="icon fa-brands fa-github"><a href="https://github.com/Aissa-Ghedbane" target="blank">Mon GitHub</a></li>
            </ul>
            <ul class="actions">
                <li><a href="#acceuil" class="button primary color2" style="margin-top:40px;">Retour Page d'Acceuil</a></li>
            </ul>
        </div>
    </div>
