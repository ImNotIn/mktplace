<?php include 'menu_layout.php';  ?>

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Tem um copum? <a href="#">Click Aqui</a> Digite seu Código
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Detalhes da Compra</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Primeiro Nome<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Útimo Nome<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Pais<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Endereço<span>*</span></p>
                                <input type="text" placeholder="Rua" class="checkout__input__add">
                                <input type="text" placeholder="Número">
                            </div>
                            <div class="checkout__input">
                                <p>Cidade<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Estado<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>CEP<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Telefone<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Criar uma conta ?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Crie uma conta completando os campos abaixo. Caso já tenha uma conta faça login no topo da página</p>
                            <div class="checkout__input">
                                <p>Senha<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Enviar em um endereço diferente?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Observação<span>*</span></p>
                                <input type="text"
                                    placeholder="Informe dados para ajudar na sua entrega.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Seu Pedido</h4>
                                <div class="checkout__order__products">Produtos <span>Total</span></div>
                                <ul>
                                    <li>Pacote 1 <span>$75.99</span></li>
                                    <li>Produto Promoção <span>$151.99</span></li>
                                    <li>Item 3 <span>$53.99</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>
                                <div class="checkout__order__total">Total <span>$750.99</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Criar uma conta?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Frase detalhes da compra ou outras informacoes.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Verifique seu Pagamento
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">Fazer Pedido</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

<?php include 'footer_layout.php';  ?>