<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("HouseSeller");
?>
    <main>
        <section class="head" id="head">
            <div class="head__background">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/headerBackground.png" alt="headerBackground" class="head__background-img">
            </div>
            <div class="head__content">
                <div class="head__text">
                    <h1 class="head__text-header">Quality home services, on <br> demand</h1>
                    <p class="head__text-additional">Experienced, hand-picked Professionals to serve you at your <br>doorstep</p>
                </div>
                <div class="head__menu">
                    <div class="head__menu-grid">
                        <div class="head__menu-grid__item"></div>
                        <div class="head__menu-grid__item"></div>
                        <div class="head__menu-grid__item"></div>
                        <div class="head__menu-grid__item"></div>
                        <div class="head__menu-grid__item"></div>
                        <div class="head__menu-grid__item"></div>
                        <button class="head__menu-grid__item__button"><p>Search</p></button>
                    </div>
                </div>
            </div>
        </section>
        <section class="choise">
            <div class="choise__card">
                <div class="choise__card__background">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/cardOne.png" alt="cardOne" class="choise__card__background-img">
                    <div class="choise__card__footer">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow.svg" alt="arrow" class="choise__card__footer-arrow">
                        <p class="choise__card__footer-text">Same great quality. New lower prices.</p>
                    </div>
                </div>
            </div>
            <div class="choise__card">
                <div class="choise__card__background">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/cardTwo.png" alt="cardTwo" class="choise__card__background-img">
                </div>
                <div class="choise__card__footer">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow.svg" alt="arrow">
                    <p class="choise__card__footer-text">Everyday Essentials, High quality affordable</p>
                </div>
            </div>
            <div class="choise__card">
                <div class="choise__card__background">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/cardThree.png" alt="cardThree" class="choise__card__background-img">
                </div>
                <div class="choise__card__footer">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow.svg" alt="arrow">
                    <p class="choise__card__footer-text">Join the makeover journey</p>
                </div>
            </div>
        </section>
        <section class="company">
            <div class="company__left-side">
                <h1 class="company__header">Why housesale company?</h1>
                <div class="company__content">
                    <div class="company__item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/gramophone.svg" alt="gramophone" class="company__svg">
                        <div class="company__item-text">
                            <h1 class="company__item-text__header">Transparent pricing</h1>
                            <p class="company__item-text__additional">See fixed prices before you book. No hidden charges.</p>
                        </div>
                    </div>
                    <div class="company__item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/people.svg" alt="people" class="company__svg">
                        <div class="company__item-text">
                            <h1 class="company__item-text__header">Experts only</h1>
                            <p class="company__item-text__additional">Our professionals are well trained and have on-job expertise.</p>
                        </div>
                    </div>
                    <div class="company__item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/chat.svg" alt="chat" class="company__svg">
                        <div class="company__item-text">
                            <h1 class="company__item-text__header">Fully equipped</h1>
                            <p class="company__item-text__additional">We bring everything needed to get the job done well.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company__right-side">
                <div class="company__img-container">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/companyImg.png" alt="companyImg" class="company__img">
                </div>
            </div>
        </section>
        <section class="book">
            <div class="book__content">
                <h1 class="book__header">Book professionals from your phone</h1>
                <p class="book__additional">Enter your mobile number to get the professionals help</p>
                <div class="book__input">
                    <div class="book__input-flag">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/flag.svg" alt="flag">
                        <p>+13</p>
                    </div>
                    <input type="tel" class="book__input-field">
                    <div class="book__input-button">Send</div>
                </div>
            </div>
        </section>
        <section class="inspiration">
            <h1 class="inspiration__header">More ideas and inspiration</h1>
            <div class="inspiration__content">
                <div class="inspiration__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/inspirationOne.png" alt="inspirationItem" class="inspiration__item-img"></div>
                <div class="inspiration__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/inspirationTwo.png" alt="inspirationItem" class="inspiration__item-img"></div>
                <div class="inspiration__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/inspirationThree.png" alt="inspirationItem" class="inspiration__item-img"></div>
                <div class="inspiration__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/inspirationFour.png" alt="inspirationItem" class="inspiration__item-img"></div>
                <div class="inspiration__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/inspirationFive.png" alt="inspirationItem" class="inspiration__item-img"></div>
                <div class="inspiration__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/inspirationSix.png" alt="inspirationItem" class="inspiration__item-img"></div>
                <div class="inspiration__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/inspirationSeven.png" alt="inspirationItem" class="inspiration__item-img"></div>
                <div class="inspiration__item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/inspirationEight.png" alt="inspirationItem" class="inspiration__item-img"></div>
            </div>
        </section>
        <section class="ideas">
            <h1 class="ideas__header">More ideas and inspiration</h1>
            <div class="ideas__content">
                <div class="ideas__left-side">
                    <p class="ideas__left-side__text-one">Housesale chose to work together with the Lebanese designer Nada Debs. We are thrilled to present this collaboration and the LJUV collection, and we hope that you can see, feel, use the connection between a designer from the Middle East  democratic design.</p>
                    <p class="ideas__left-side__text-two">Nada Debs is a Levantine designer living and working in Beirut. Her work spans scale and discipline: from product to furniture design to one-off commission across craft, art, fashion, and interiors. Nada grew up in Japan, studied design in Rhode Island School of Design in the US, and has spent significant periods living and traveling the world, finding connections of each of her experiences in all her work. She calls her approach handmade, and heart-made!</p>
                    <button class="ideas__left-side__button">More Collection</button>
                </div>
                <div class="ideas__right-side">
                    <div class="ideas__right-side__img-wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/ideasOne.png" alt="ideasOne" class="ideas__right-side__img">
                    </div>
                    <div class="ideas__right-side__img-wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/ideasTwo.png" alt="ideasTwo" class="ideas__right-side__img">
                    </div>
                    <div class="ideas__right-side__img-wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/ideasThree.png" alt="ideasThree" class="ideas__right-side__img">
                    </div>
                </div>
            </div>
            <div class="ideas__line"></div>
        </section>
        <section class="explore">
            <div class="explore__content">
                <div class="explore__left-side">
                    <p class="explore__left-side__text">Sofas | Beds | Dining | Tv units | Mattresses | Seating | Coffee tables | Wardrobes | Storage | Bookshelves | Shoe racks | Decor| Bathroom | Textiles | Pots & plants | Home electronics | Home improvement | Lighting</p>
                </div>
                <div class="explore__right-side">
                    <h1 class="explore__header">Explore our furniture & home <br>furnishing range</h1>
                    <h1 class="explore__right-side__header">IKEA is a global leader in life at home.</h1>
                    <p class="explore__right-side__additional">Whether you just moved into a new home or looking to revamp your current one, we at IKEA are here to inspire you with affordable home furniture solutions, there is a piece of furniture to every corner of your home. Create a home that is perfect for you.</p>
                    <p class="explore__right-side__additional">Shopping at IKEA is a bit different and exciting compared to your shopping at an everyday retail. It is about experiencing solutions first hand and getting to know ideas and inspirations that can fit perfectly into your home. That's why, we offer more than 7500 products, solutions at our store along with home furnishing ideas and services for you to explore.</p>
                    <p class="explore__right-side__additional">When you visit IKEA store, make yourself at home in our many room settings in the store. Squeeze the upholsteries, feel the oriental rugs, try the sofa beds and open the cabinets to feel the quality. On the price tag, you'll find all you need to know about a product, including where in the store you can pick it up.</p>
                    <p class="explore__right-side__additional">Since most IKEA furniture is flat-packed, they are quite easy to bring home when you buy from the store.</p>
                </div>
            </div>
        </section>
    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>