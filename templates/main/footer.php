<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
</div>

<!-- /wrap -->
<hr>
<footer>
	<div class="footer">
		<div class="questions"><h1><?=GetMessage("ASKED_QUESTIONS")?></h1></div>
		<div class="list-container">
			<div class="list">
				<p class="list-text"><a href="" class="text"><?=GetMessage("BOOKIN_CONDITION")?></a></p>
				<a href="" class="click">+</a>
			</div>
			<div class="list">
				<p class="list-text"><a href="" class="text"><?=GetMessage("RECOMENFATION_FOR_ALCOHOL")?></a></p>
				<a href="" class="click">+</a>
			</div>
		</div>
		<hr>
		<div class="footer-block">
			
			<nav class="menu-footer">
			 <div class="item">
                    <ul>
                        <li><a href="">Банкетные залы</a>
                        </li>
                        <li><a href="">Готовые предложения</a>
                        </li>
                        <li><a href="">Свадьбы </a>
                        </li>
                        <li><a href="">О нас</a>
                        </li>
                        <li><a href="">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
              <div class="contacts-block">
               
                <div class="loc-block">
                    <div class="address"><?=GetMessage("ADRESSES_PLACE")?></div>
                    <div class="phone"><a href="tel:89377999724"><?=GetMessage("PHONE_NUMBER")?></a>
                    </div>
                    <div class="email"><a href=""><?=GetMessage("EMAIL_CONTACTS")?></a></div>
                    <div class="work"><?=GetMessage("WORK_TIME")?></div>
                </div>
                <div class="main-soc-block">
         
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img" alt="">
                    </a>
                </div>
                <div class="copy-block"></div>
            </div>
		</div>
	</div>

</footer>
</div>
</body>
</html>