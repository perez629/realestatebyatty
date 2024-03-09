<?php include 'includes/head.php';?>   
<?php include 'includes/header.php';?>   
<?php include 'includes/nav.php';?>   

<!--temporary banner sa non-home here-->
<div id="banner_non_home">
    <figure><img src="images/banner_sale.png" alt="building design"></figure>
    <h3>For Sale</h3>
</div>

<div id="main_area">
    <div class="wrapper">
        <div class="main_con">

            <div class="main_sale">
                <h2 class="heading sale_h2">Properties For Sale</h2>

                <div class="sale_section">
                    <!-- Tab links -->
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Lot')">Lot For Sale</button>
                        <button class="tablinks" onclick="openCity(event, 'Condo')">Condominium</button>
                        <button class="tablinks" onclick="openCity(event, 'House')">Town House</button>
                        <button class="tablinks" onclick="openCity(event, 'Commercial')">Commercial Space</button>
                    </div>

                    <!-- Tab content -->
                    <div id="Lot" class="tabcontent">
                        <div class="tabcontent_lot">
                            <section>
                                <figure><img src="images/fs1.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Sacsac, Dalaguete, Cebu<span> Dalaguete, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>

                            <section>
                                <figure><img src="images/fs2.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Lepanto<span> Alegria, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>

                            <section>
                                <figure><img src="images/fs3.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Daanlungsod<span> Medillin, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>

                            <section>
                                <figure><img src="images/fs4.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Flower Farm<span> Mantalongon, Dalaguete, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>
                        </div>  
                    </div>

                    <div id="Condo" class="tabcontent">
                        
                       <div class="tabcontent_condo">
                            <section>
                                <figure><img src="images/fs1.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Sacsac, Dalaguete, Cebu<span> Dalaguete, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>

                            <section>
                                <figure><img src="images/fs1.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Sacsac, Dalaguete, Cebu<span> Dalaguete, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>

                            <section>
                                <figure><img src="images/fs1.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Sacsac, Dalaguete, Cebu<span> Dalaguete, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>

                       </div>
                    </div>

                    <div id="House" class="tabcontent">
                        <div class="tabcontent_house">
                            <section>
                                <figure><img src="images/fs2.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Lepanto<span> Alegria, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>
                        </div>
                    </div>
                    
                    <div id="Commercial" class="tabcontent">
                       <div class="tabcontent_commercial">
                            <section>
                                <figure><img src="images/fs4.png" alt="dummy pic"></figure>
                                <div class="tab_infos">
                                    <h2>Lepanto<span> Alegria, Cebu</span></h2>
                                </div>
                                <small>PHP 30 MILLION</small>
                                <a href=""></a>
                            </section>
                       </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


 
<?php include 'includes/footer.php';?>   


<script src="js/plugins.js"></script>
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>

</body>
</html>