<!-- Contact -->
<section id="contact" class="panel">
    <div class="intro" id="panel-contact">
        <h2 class="major">Contactez-moi</h2>
        <ul class="alt">
            <li>
                <p>Localisation: Paris, France</p>
            </li>
            <li>
                <p>Tel : 06.98.61.49.81</p>
            </li>
            <li>
                <p>E-mail : aiss.ghed@gmail.com</p>
            </li>
        </ul>
        <a id="arrows" href="#projects" class="button primary color3">
            <p>⮌</p>
        </a>
    </div>
    <div class="inner columns divided">
        <div class="span-4-5">
            <h3 class="major">Renseigner les champs ci-dessous :</h3>

            <form method="POST" action="">
                @csrf
                <!--PROTECTION: permet d'attribué un token à chaque personne qui remplis le formulaire -->
                <div class="fields">
                    <div class="field third">
                        <input type="text" name="name" id="demo-name" value="" placeholder="Votre Nom & Prénom" required>
                    </div>
                    <div class="field third">
                        <input type="email" name="email" id="demo-email" value="" placeholder="Votre @dresse E-mail" required>
                    </div>
                    <div class="field third">

                        <div class="select-wrapper">
                            <select name="subject" id="demo-category" required>
                                <option value="0">🠗🠗🠗</option>
                                <option value="1">Prise de rendez-vous</option>
                                <option value="2">Offre d'emploi</option>
                                <option value="3">Question ?</option>
                                <option value="4">Autres ...</option>
                            </select>
                        </div>
                    </div>
                    <div class="field quarter">
                        <input type="radio" id="demo-priority-low" name="demo-priority" class="color1">
                        <label for="demo-priority-low">
                            <p>Humain 😎</p>
                        </label>
                    </div>
                    <div class="field quarter">
                        <input type="radio" id="demo-priority-high" name="demo-priority" class="color1" checked>
                        <label for="demo-priority-high">
                            <p>Robot 🤖
                            <p>
                        </label>
                    </div>
                    <div class="field">
                        <textarea name="contenu" id="demo-message" placeholder="Votre message ..." rows="2" required></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Envoyer" class="button primary color3" id="envoyer" /></li>
                    <li><input type="reset" value="⌦" class="button primary color3" id="btn-reset" /></li>
                </ul>
            </form>
        </div>

