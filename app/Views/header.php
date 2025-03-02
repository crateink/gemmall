<header class="header">
    <!-- 导航栏 -->
    <nav class="navbar navbar-custom">
        <div class="container">
            <!-- 品牌名称 -->
            <a class="navbar-brand" href="<?= url_with_lang() ?>">Gemmall</a>

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
                <?php if (auth()->loggedIn()): ?>
                    <div class="dropdown">
                        <button class="btn btn-custom-3 dropdown-toggle me-3" data-bs-toggle="dropdown">
                            <i class="bi bi-person-fill"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= url_with_lang('my/profile') ?>"><i class="bi bi-person"></i> <?= lang('App.my_profile') ?></a></li>
                            <li><a class="dropdown-item" href="<?= url_with_lang('my/change-password') ?>"><i class="bi bi-lock"></i> <?= lang('App.change_password') ?></a></li>
                            <li><a class="dropdown-item" href="<?= url_with_lang('my/orders') ?>"><i class="bi bi-card-checklist"></i> <?= lang('App.my_orders') ?></a></li>
                            <li><a class="dropdown-item" href="<?= url_with_lang('my/coupon') ?>"><i class="bi bi-bookmark-star"></i> <?= lang('App.my_coupon') ?></a></li>
                            <li><a class="dropdown-item" href="<?= url_with_lang('my/check-in') ?>"><i class="bi bi-calendar-check"></i> <?= lang('App.check_in') ?></a></li>
                            <li><a class="dropdown-item" href="<?= url_with_lang('my/points') ?>"><i class="bi bi-gem"></i> <?= lang('App.my_points') ?></a></li>
                            <li><a class="dropdown-item" href="<?= url_with_lang('logout') ?>"><i class="bi bi-box-arrow-right"></i> <?= lang('App.sign_out') ?></a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="<?= url_with_lang('login') ?>" class="btn btn-custom-1"><?= lang('App.login') ?></a>
                <?php endif; ?>
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
                    <a class="nav-link" href="<?= url_with_lang() ?>"><?= lang('App.home') ?></a>
                </li>
                <!-- 推荐 -->
                <li class="nav-item d-lg-block d-none">
                    <a class="nav-link" href="<?= url_with_lang('my/affiliate') ?>"><?= lang('App.affiliate') ?></a>
                </li>
                <!-- 联系我们 -->
                <li class="nav-item d-lg-block d-none">
                    <a class="nav-link" href="<?= url_with_lang('contact-us') ?>"><?= lang('App.contact_us') ?></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
