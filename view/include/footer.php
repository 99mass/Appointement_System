 <div class="footer-clean" style="margin-top: 20%;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Entreprise</h3>
                        <ul>
                            <li><a href="../view/a_propos_de_nous.php">À propos de nous</a></li>
                            <li><a href="../view/politique_de_confidentialite.php">Politique de confidentialité</a></li>
                            <li><a href="../view/conditions_d_utilisation.php">Conditions d'utilisation</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Centre de Support</a></li>
                            <!-- <li><a href="#">Tutorial</a></li>
                            <li><a href="#">guide</a></li> -->
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Nous contacter</h3>
                        <ul>
                            <li><a href="mailto:sambadiop161@gmail.com" >E-mail: <span class="fs-6"> sambadiop161@gmail.com</span></a></li>
                            <li><a >Tél : 771169551/704914548</a></li>
                            <li><a >Fax : 336751289</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <a class="facebook" href="#"><i class="icon ion-social-facebook" ></i></a>
                        <a class="whatsap" href="https://api.whatsapp.com/send?phone=704914548"><i class="icon ion-social-whatsapp"></i></a>
                        <a class="twitter" href="#"><i class="icon ion-social-twitter"></i></a>
                        <a class="instagram" href="#"><i class="icon ion-social-instagram"></i></a>
                        
                        <p class="copyright">Global Adventure Code © 2023</p>
                    </div>
            </div>
        </footer>
   </div>

<!-- style footet -->
<style>
    /* footer */
        .footer-clean {
        background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
        background-color: white;
        padding:50px 0;
        /* background-color:#fff; */
        color:#4b4c4d;
        border-top: 1px solid blue;
        box-shadow: 2px 2px 2px 5px ;
        margin-top: 10%;
        }

        .footer-clean h3 {
        margin-top:0;
        margin-bottom:12px;
        font-weight:bold;
        font-size:2rem;
        }

        .footer-clean ul {
        padding:0;
        list-style:none;
        line-height:1.6;
        font-size:1.2rem;
        margin-bottom:0;
        }

        .footer-clean ul a {
        color:inherit;
        text-decoration:none;
        opacity:0.8;
        }

        .footer-clean ul a:hover {
        opacity:1;
        }

        .footer-clean .item.social {
        text-align:right;
        }

        .footer-clean footer .container .social .facebook{
        background-color: blue;
        color: white;
        }
        .footer-clean footer .container .social .whatsap{
        background-color: green;
        color: white;
        }
        .footer-clean footer .container .social .twitter{
        background-color: deepskyblue;
        color: white;
        }
        .footer-clean footer .container .social .instagram{
        background-color: white;
        color: red;
        border: 1px solid red;
        }
        .footer-clean footer .container .social .copyright{
        font-size: 1rem;
        }

        @media (max-width:767px) {
        .footer-clean .item {
            text-align:center;
            padding-bottom:20px;
        }
        }

        @media (max-width: 768px) {
        .footer-clean .item.social {
            text-align:center;
        }
        }

        .footer-clean .item.social > a {
        font-size:24px;
        width:40px;
        height:40px;
        line-height:40px;
        display:inline-block;
        text-align:center;
        border-radius:50%;
        border:1px solid #ccc;
        margin-left:10px;
        margin-top:22px;
        color:inherit;
        opacity:0.75;
        }

        .footer-clean .item.social > a:hover {
        opacity:0.9;
        }

        @media (max-width:991px) {
        .footer-clean .item.social > a {
            margin-top:40px;
        }
        }

        @media (max-width:767px) {
        .footer-clean .item.social > a {
            margin-top:10px;
        }
        }

        .footer-clean .copyright {
        margin-top:14px;
        margin-bottom:0;
        font-size:13px;
        opacity:0.6;
        }
</style>