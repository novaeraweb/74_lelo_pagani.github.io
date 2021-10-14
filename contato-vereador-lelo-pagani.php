<section id="four">
    <h2>FALE COM O VEREADOR</h2>
    <p>Entre em contato e retornarei o mais breve possível</p>
    <div class="row">
        <div class="col-8 col-12-small">
            <form method="post" action="phpmailer/envia.php" onsubmit="return validaCaptcha()">
                <div class="row gtr-uniform gtr-50" style="margin-bottom:30px;">
                    <div class="col-6 col-12-xsmall"><input type="text" name="nome" id="name" placeholder="Nome" /></div>
                    <div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
                    <div class="col-12"><textarea name="mensagem" id="message" placeholder="Mensagem" rows="4"></textarea></div>
                </div>
                <div style="width:100%;text-align: right;">

                <div class="col-6 col-12" style="width:100%;">
                <div class="g-recaptcha" data-sitekey="6Lc-n1McAAAAAOFKk-iyko_g3eI25knVtAkGDH-k" style="float: right;"></div>
                </div>
                <div class="col-12" style="float:right; width: 100%;margin-top: 30px;">
                   <input type="submit" value="Enviar"/>
                </div>
                </div>
            </form>
        </div>

        <div class="col-4 col-12-small">
            <ul class="labeled-icons">
                <li>
                    <h3 class="icon solid fa-home"><span class="label">Endereço</span></h3>
                    Praça Comendador<br />
                    Emílio Peduti<br />
                    112, Centro<br />
                    Botucatu / SP
                </li>
                <li>
                    <h3 class="icon solid fa-mobile-alt"><span class="label">Telefone</span></h3>
                    <a href="tel:1438820636" target="_blank">(14) 3882-0636</a>
                </li>
                <li>
                    <h3 class="icon solid fa-envelope"><span class="label">Email</span></h3>
                    <a href="mailto:contato@lelopagani.com.br">contato@lelopagani.com.br</a>
                </li>
            </ul>
        </div>
    </div>
</section>