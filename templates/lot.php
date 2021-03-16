
    <main>
        <nav class="nav">
            <ul class="nav__list container">
                <?php foreach($data_list as $item):?>
                <li class="nav__item">
                    <a href="all-lots.html"><?=$item['category'];?></a>
                </li>
                <?php endforeach;?>
            </ul>
        </nav>
        <section class="lot-item container">
            <h2><?=$lot['name'];?>></h2>
            <div class="lot-item__content">
                <div class="lot-item__left">
                    <div class="lot-item__image">
                        <img src="<?=$lot['gif'];?>" width="730" height="548" alt="Сноуборд">
                    </div>
                    <p class="lot-item__category">Категория: <span><?=$category[$lotID]['name'];?></span></p>
                    <p class="lot-item__description"><?=$lot['description']?></p>
                </div>

                <div class="lot-item__right">
                    <div class="lot-item__state">
                        <div class="lot-item__timer timer">
                            <?=time_left($times_left);?>
                        </div>
                        <div class="lot-item__cost-state">
                            <div class="lot-item__rate">
                                <span class="lot-item__amount">Текущая цена</span>
                                <span class="lot-item__cost"><?=format_sum($lot['price']);?></span>
                            </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

