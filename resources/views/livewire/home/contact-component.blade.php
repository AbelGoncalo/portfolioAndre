<div>
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Contacte-nos</h2>
                            <p>In the history of modern astronomy, there is probably no one greater leap forward than
                                the
                                building and launch of the space telescope known as the Hubble.</p>
                            <div class="page_link">
                                <a href="index.html">Início</a>
                                <a href="contact.html">Contacto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
          
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>California, United States</h6>
                            <p>Santa monica bullevard</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">00 (440) 9865 562</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">eletrofisi@meridional.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" wire:submit='sendMessage'  id="contactForm"
                        novalidate="novalidate">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" wire:model="name" placeholder="nome completo">
                                @error('name')
                                <span class="text-danger text-sm fw-bold ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" type="email" wire:model="email" placeholder=" email ">
                                @error('email')
                                <span class="text-danger text-sm  fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder=" assunto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="mensagem" type="text" wire:model="mensagem" rows="1" placeholder="mensagem"></textarea>
                                @error('mensagem')
                                <span class="text-danger text-sm fw-bold ">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn primary-btn rounded">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
</div>
