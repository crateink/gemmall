<!-- 导航栏 -->
<nav class="navbar navbar-custom">
    <div class="container">
        <!-- 品牌名称 -->
        <a class="navbar-brand" href="#">Gemmall</a>

        <!-- 导航菜单 -->
        <div class="d-flex">
            <div class="dropdown">
                <button class="btn btn-custom-3 dropdown-toggle me-3" type="button" data-bs-toggle="dropdown">
                    <?= get_current_language() === 'en' ? lang('App.english') : (get_current_language() === 'zh-CN' ? lang('App.chinese') : '') ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?lang=en"><?= lang('App.english') ?></a></li>
                    <li><a class="dropdown-item" href="?lang=zh-CN"><?= lang('App.chinese') ?></a></li>
                </ul>
            </div>
            <a href="#" class="btn btn-custom-2 me-3"><?= lang('App.cart') ?></a>
            <a href="<?= url_to_with_lang('login') ?>" class="btn btn-custom-1"><?= lang('App.login') ?></a>
        </div>
    </div>
</nav>
<!-- 导航栏 -->
<nav class="navbar navbar-expand navbar-custom-1 p-0">
    <div class="container">
        <!-- 导航菜单 -->
        <ul class="navbar-nav d-flex">
            <!-- 分类 -->
            <li class="nav-item categorie">
                <a class="nav-link active" aria-current="page" href="#"><?= lang('App.categories') ?></a>
                <div class="sub-area">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2">
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                        <div class="col">
                            <div class="item">WoW WoTLK Classic</div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 首页 -->
            <li class="nav-item">
                <a class="nav-link" href="#"><?= lang('App.home') ?></a>
            </li>
            <!-- 推荐 -->
            <li class="nav-item d-lg-block d-none">
                <a class="nav-link" href="#"><?= lang('App.affiliate') ?></a>
            </li>
            <!-- 联系我们 -->
            <li class="nav-item d-lg-block d-none">
                <a class="nav-link" href="#"><?= lang('App.contact_us') ?></a>
            </li>
        </ul>
    </div>
</nav>
