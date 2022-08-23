<!-- Home Page-->
<section id="acceuil" class="panel banner right">
    <div class="content span-3-75">
        <h1 id="title1" class="major">Aïssa 🦊<br>
            Développeur full stack</h1>
        <p>Créateur de solutions numériques,<br /> je suis spécialisé dans le développement d'applications Web & Mobile<br />et la construction d'expériences utilisateur. Je fournis un service de développement d'applications Full-stack en utilisant différentes stacks selon les missions.<br />
            <br />
            Vous pouvez télécharger mon CV, ou bien me contacter en cliquant sur les boutons ci-dessous.
        </p>
        <ul class="actions">
            <li><a href="{{url('https://drive.google.com/file/d/1ZawufShZIhWZDg9lzoh9dxT1gMwngiMV/view?usp=sharing')}}" target="blank" class="button primary color3" id="dl"><p>Télécharger mon CV</p></a></li>
            <li><a href="#contact" class="button primary color3" id="cont"><p>Contactez-moi</p></a></li>
            <li><a id="arrows" href="#biography" class="button primary color3"><p>➜</p></a></li>

        </ul>
    </div>
    <div class="image filtered span-1-75" data-position="25% 25%">
        <img id="profil" src="{{ asset('/images/pic01.png') }}" />
        <a href="#">
            <h5 class="btn-toggle">🌙</h5>
        </a>

                     <!-- A PLACER AU BON ENDROIT / VOIR OU INJECTER LE JS ? -->
        <script>

            const btnToggle = document.querySelector('.btn-toggle');

            btnToggle.addEventListener('click', () => {

            const page = document.querySelector('#page-wrapper');

            // console.log(page);

                if (page.classList.contains('light')) {
                    page.classList.add('dark');
                    page.classList.remove('light');
                    btnToggle.innerHTML = "🌞"


                } else if (page.classList.contains('dark')) {

                    page.classList.add('light');
                    page.classList.remove('dark');
                    btnToggle.innerHTML = "🌙"
                }
            })

        </script>

    </div>
</section>
