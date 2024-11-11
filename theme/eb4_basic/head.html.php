<?php
/**
 * theme file : /theme/THEME_NAME/head.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/style.css?ver=' . G5_CSS_VER . '">', 0);
add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/custom.css?ver=' . G5_CSS_VER . '">', 0);

/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 메뉴바 전체 메뉴 출력 : 'yes' || 'no'
 */
$is_megamenu = 'yes';
?>

<?php if (!$wmode) { ?>
    <?php /*----- wrapper 시작 -----*/ ?>
    <div class="wrapper">
    <h1 id="hd-h1"><?php echo $g5['title'] ?></h1>
    <div class="to-content"><a href="#container">본문 바로가기</a></div>
    <?php
    // 팝업창
    if (defined('_INDEX_') && $newwin_contents) { // index에서만 실행
        echo $newwin_contents;
    }
    ?>

    <?php /*----- header 시작 -----*/ ?>
    <header class="header-wrap <?php if (!defined('_INDEX_')) { ?>page-header-wrap<?php } ?>">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="top-header-nav list-unstyled thn-start">
                            <?php if ($eyoom['is_shop_theme'] == 'y') { ?>
                                <?php if (defined('_SHOP_') && $eyoom['use_layout_community'] == 'y') { ?>
                                    <li class="cs-nav c-nav"><a href="<?php echo G5_URL; ?>"><span class="deactivate">커뮤니티</span></a>
                                    </li>
                                    <li class="cs-nav s-nav"><a href="<?php echo G5_SHOP_URL; ?>" class="disabled"><span
                                                    class="activate">쇼핑몰</span></a></li>
                                <?php } else if (defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
                                    <li class="cs-nav c-nav"><a href="<?php echo G5_URL; ?>" class="disabled"><span
                                                    class="activate">커뮤니티</span></a></li>
                                    <li class="cs-nav s-nav"><a href="<?php echo G5_SHOP_URL; ?>"><span
                                                    class="deactivate">쇼핑몰</span></a></li>
                                <?php } ?>
                            <?php } ?>
                            <li>
                                <?php echo eb_connect('basic_top'); ?>
                            </li>
                            <?php if ($is_admin) { // 관리자일 경우 ?>
                                <li>
                                    <div class="eyoom-form">
                                        <input type="hidden" name="edit_mode" id="edit_mode"
                                               value="<?php echo $eyoom_default['edit_mode']; ?>">
                                        <label class="toggle">
                                            <input type="checkbox"
                                                   id="btn_edit_mode" <?php echo $eyoom_default['edit_mode'] == 'on' ? 'checked' : ''; ?>><i></i><span
                                                    class="text-black"><span class="fas fa-sliders-h m-r-5"></span>편집모드</span>
                                        </label>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-title">
            <div class="container">
                <?php /* ===== 사이트 로고 시작 ===== */ ?>
                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                    <div class="adm-edit-btn btn-edit-mode" style="top:0;left:12px;text-align:left">
                        <div class="btn-group">
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>&amp;wmode=1"
                               onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i
                                        class="far fa-edit"></i> 로고 설정</a>
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>"
                               target="_blank" class="ae-btn-r" title="새창 열기">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <a href="<?php echo G5_URL; ?>" class="title-logo">
                    <?php if ($logo == 'text') { ?>
                        <h1><?php echo $config['cf_title']; ?></h1>
                    <?php } else if ($logo == 'image') { ?>
                        <?php if (!G5_IS_MOBILE) { ?>
                            <?php if (file_exists($top_logo) && !is_dir($top_logo)) { ?>
                                <img src="<?php echo $logo_src['top']; ?>" class="site-logo"
                                     alt="<?php echo $config['cf_title']; ?>">
                            <?php } else { ?>
                                <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg" class="site-logo"
                                     alt="<?php echo $config['cf_title']; ?>">
                            <?php } ?>
                        <?php } else { ?>
                            <?php if (file_exists($top_mobile_logo) && !is_dir($top_mobile_logo)) { ?>
                                <img src="<?php echo $logo_src['mobile_top']; ?>" class="site-logo"
                                     alt="<?php echo $config['cf_title']; ?>">
                            <?php } else { ?>
                                <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg" class="site-logo"
                                     alt="<?php echo $config['cf_title']; ?>">
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </a>
                <?php /* ===== 사이트 로고 끝 ===== */ ?>

                <div class="header-brand">P2U내역</div>

                <div class="header-nav">
                    <ul class="top-header-nav list-unstyled thn-end">
                        <?php if ($is_member) { ?>
                            <?php if ($is_admin) { ?>
                                <li><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                            <?php } ?>
                            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                        <?php } ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                추가메뉴
                                <span class="caret-down">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
      d="M3.08754 4.83753C3.31535 4.60972 3.68469 4.60972 3.9125 4.83753L7.00002 7.92505L10.0875 4.83753C10.3153 4.60972 10.6847 4.60972 10.9125 4.83753C11.1403 5.06533 11.1403 5.43468 10.9125 5.66248L7.4125 9.16248C7.18469 9.39029 6.81535 9.39029 6.58754 9.16248L3.08754 5.66248C2.85974 5.43468 2.85974 5.06533 3.08754 4.83753Z"
      fill="currentColor"/>
</svg>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="<?php echo G5_BBS_URL ?>/new.php">새글</a>
                                <a href="<?php echo G5_BBS_URL ?>/best.php">인기게시물</a>
                                <a href="<?php echo G5_BBS_URL ?>/faq.php">자주묻는 질문</a>
                                <a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a>
                                <?php if ($is_member) { // 회원일 경우 ?>
                                    <a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">회원정보수정</a>
                                <?php } ?>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="header-search">
                    <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL; ?>/search.php"
                          onsubmit="return fsearchbox_submit(this);" class="eyoom-form">
                        <input type="hidden" name="sfl" value="wr_subject||wr_content">
                        <input type="hidden" name="sop" value="and">
                        <label for="modal_sch_stx" class="sound_only"><strong>상품명 검색</strong></label>
                        <input type="text" name="stx" id="modal_sch_stx" class="sch_stx" maxlength="20"
                               placeholder="상품명 검색">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="nav-wrap">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="sidebar-left offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft"
                         aria-controls="offcanvasLeftLabel">
                        <div class="sidebar-left-content">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title f-s-16r" id="offcanvasLeftLabel"><i
                                            class="fas fa-bars m-r-10 text-gray"></i>NAVIGATION</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                            </div>
                            <?php /* ---------- 모바일용 컨텐츠 시작 // 991픽셀 이하에서만 출력 ---------- */ ?>
                            <?php if ($eyoom['is_shop_theme'] == 'y' || $is_member) { ?>
                                <div class="sidebar-member-menu">
                                    <?php if (defined('G5_USE_SHOP') && G5_USE_SHOP && $eyoom['is_shop_theme'] == 'y') { ?>
                                        <a href="<?php echo G5_SHOP_URL; ?>"
                                           class="btn-e btn-e-md btn-e-navy btn-e-block m-t-10 m-b-10">
                                            쇼핑몰<i class="far fa-caret-square-right m-l-5"></i>
                                        </a>
                                    <?php } ?>
                                    <?php if ($is_member) { // 회원일 경우 ?>
                                        <div class="m-t-10">
                                            <a href="<?php echo G5_URL; ?>/?<?php echo $member['mb_id']; ?>"
                                               class="sidebar-member-btn-box">
                                                <div class="sidebar-member-btn">
                                                    마이홈
                                                </div>
                                            </a>
                                            <a href="<?php echo G5_URL; ?>/mypage/" class="sidebar-member-btn-box">
                                                <div class="sidebar-member-btn float-end">
                                                    마이페이지
                                                </div>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="m-t-10 m-b-10">
                                            <a <?php if (!G5_IS_MOBILE) { ?>href="javascript:void(0);"
                                               onclick="memo_modal();"
                                               <?php } else { ?>href="<?php echo G5_BBS_URL; ?>/memo.php"
                                               target="_blank"<?php } ?> class="sidebar-member-btn-box">
                                                <div class="sidebar-member-btn">
                                                    쪽지<?php if ($memo_not_read) { ?><span
                                                            class="badge badge-e badge-crimson m-l-5"><?php echo $memo_not_read; ?></span><?php } ?>
                                                </div>
                                            </a>
                                            <a href="<?php echo G5_URL; ?>/mypage/respond.php"
                                               class="sidebar-member-btn-box">
                                                <div class="sidebar-member-btn float-end">
                                                    내글반응<?php if ($respond_not_read >= 1) { ?><span
                                                            class="badge badge-e badge-crimson m-l-5"><?php echo $respond_not_read; ?></span><?php } ?>
                                                </div>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="m-t-10 m-b-10">
                                            <a href="<?php echo G5_BBS_URL ?>/login.php" class="sidebar-member-btn-box">
                                                <div class="sidebar-member-btn">
                                                    로그인
                                                </div>
                                            </a>
                                            <a href="<?php echo G5_BBS_URL ?>/register.php"
                                               class="sidebar-member-btn-box">
                                                <div class="sidebar-member-btn float-end">
                                                    회원가입
                                                </div>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <?php /* ---------- 모바일용 컨텐츠 끝 ---------- */ ?>
                            <ul class="navbar-nav">
                                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                                    <div class="adm-edit-btn btn-edit-mode" style="top:0;text-align:left">
                                        <div class="btn-group">
                                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=menu_list&amp;thema=<?php echo $theme; ?>&amp;wmode=1"
                                               onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i
                                                        class="far fa-edit"></i> 메뉴 설정</a>
                                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=menu_list&amp;thema=<?php echo $theme; ?>"
                                               target="_blank" class="ae-btn-r" title="새창 열기">
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                                <li class="navbar-nav-home">
                                    <a href="<?php echo G5_URL ?>" class="nav-link">
                                        <!--                                        <span class="fas fa-bars m-r-10"></span>-->
                                        <svg class="icon" width="16" height="17" viewBox="0 0 16 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M1.33334 4.50001C1.33334 4.13182 1.63181 3.83334 2 3.83334H14C14.3682 3.83334 14.6667 4.13182 14.6667 4.50001C14.6667 4.8682 14.3682 5.16668 14 5.16668H2C1.63181 5.16668 1.33334 4.8682 1.33334 4.50001ZM1.33334 8.50001C1.33334 8.13182 1.63181 7.83334 2 7.83334H14C14.3682 7.83334 14.6667 8.13182 14.6667 8.50001C14.6667 8.8682 14.3682 9.16668 14 9.16668H2C1.63181 9.16668 1.33334 8.8682 1.33334 8.50001ZM1.33334 12.5C1.33334 12.1318 1.63181 11.8333 2 11.8333H14C14.3682 11.8333 14.6667 12.1318 14.6667 12.5C14.6667 12.8682 14.3682 13.1667 14 13.1667H2C1.63181 13.1667 1.33334 12.8682 1.33334 12.5Z"
                                                  fill="currentColor"/>
                                        </svg>

                                        HOME
                                    </a>
                                </li>

                                <?php if (isset($menu) && is_array($menu)) { ?>
                                    <?php foreach ($menu as $key => $menu_1) { ?>
                                        <li class="dropdown">
                                            <a href="<?php echo $menu_1['me_link']; ?>"
                                               target="_<?php echo $menu_1['me_target']; ?>"
                                               class="dropdown-toggle nav-link">
                                                <?php if (isset($menu_1['me_icon']) && $menu_1['me_icon']) { ?><i
                                                    class="<?php echo $menu_1['me_icon']; ?> nav-cate-icon margin-right-5"></i><?php } ?>
                                                <?php echo $menu_1['me_name'] ?>
                                            </a>
                                            <?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) { ?>
                                                <a href="#"
                                                   class="cate-dropdown-open <?php if (isset($menu_1['active']) && $menu_1['active']) echo 'show'; ?>"
                                                   data-bs-toggle="dropdown"></a>
                                            <?php } ?>
                                            <?php $index2 = $size2 = 0; ?>
                                            <?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) {
                                                $size2 = count($menu_1['submenu']); ?>
                                                <?php foreach ($menu_1['submenu'] as $subkey => $menu_2) { ?>
                                                    <?php if ($index2 == 0) { ?>
                                                        <div class="dropdown-menu <?php if (isset($menu_1['active']) && $menu_1['active']) echo 'show'; ?>">
                                                        <ul>
                                                    <?php } ?>
                                                    <li class="dropdown-submenu root-level">
                                                        <a href="<?php echo $menu_2['me_link']; ?>"
                                                           target="_<?php echo $menu_2['me_target']; ?>"
                                                           class="dropdown-item nav-link <?php if (isset($menu_2['active']) && $menu_2['active']) echo 'active'; ?>">
                                                            <span class="submenu-marker"></span>
                                                            <?php if (isset($menu_2['me_icon']) && $menu_2['me_icon']) { ?>
                                                                <i class="<?php echo $menu_2['me_icon']; ?> m-r-5"></i>
                                                            <?php } ?>
                                                            <?php echo $menu_2['me_name']; ?>
                                                            <?php if ($menu_2['new']) { ?>
                                                                <i class="far fa-check-circle text-indigo"></i>
                                                            <?php } ?>
                                                            <?php if (isset($menu_2['sub']) && $menu_2['sub'] == 'on') { ?>
                                                                <span class="caret-right">
                                                                    <svg width="16" height="17" viewBox="0 0 16 17"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
      d="M5.52859 4.02861C5.78894 3.76826 6.21105 3.76826 6.4714 4.02861L10.4714 8.02861C10.7317 8.28896 10.7317 8.71107 10.4714 8.97141L6.4714 12.9714C6.21105 13.2318 5.78894 13.2318 5.52859 12.9714C5.26824 12.7111 5.26824 12.289 5.52859 12.0286L9.05719 8.50001L5.52859 4.97141C5.26824 4.71107 5.26824 4.28896 5.52859 4.02861Z"
      fill="currentColor"/>
</svg>

                                                                </span>
                                                            <?php } ?>
                                                        </a>
                                                        <?php $index3 = $size3 = 0; ?>
                                                        <?php if (isset($menu_2['subsub']) && is_array($menu_2['subsub'])) {
                                                            $size3 = count($menu_2['subsub']); ?>
                                                            <?php foreach ($menu_2['subsub'] as $ssubkey => $menu_3) { ?>
                                                                <?php if ($index3 == 0) { ?>
                                                                    <ul class="dropdown-menu">
                                                                <?php } ?>
                                                                <li class="dropdown-submenu">
                                                                    <a href="<?php echo $menu_3['me_link']; ?>"
                                                                       target="_<?php echo $menu_3['me_target']; ?>"
                                                                       class="dropdown-item nav-link <?php if (isset($menu_3['active']) && $menu_3['active']) echo 'active'; ?>">
                                                                        <span class="submenu-marker"></span>
                                                                        <?php if (isset($menu_3['me_icon']) && $menu_3['me_icon']) { ?>
                                                                            <i class="<?php echo $menu_3['me_icon']; ?> m-r-5"></i>
                                                                        <?php } ?>
                                                                        <?php echo $menu_3['me_name']; ?>
                                                                        <?php if ($menu_3['new']) { ?>
                                                                            <i class="far fa-check-circle text-indigo"></i>
                                                                        <?php } ?>
                                                                        <?php if (isset($menu_3['sub']) && $menu_3['sub'] == 'on') { ?>
                                                                            <i class="fas fa-angle-right sub-caret hidden-sm hidden-xs"></i>
                                                                            <i class="fas fa-angle-down sub-caret hidden-md hidden-lg"></i>
                                                                        <?php } ?>
                                                                    </a>
                                                                </li>
                                                                <?php if ($index3 == $size3 - 1) { ?>
                                                                    </ul>
                                                                <?php } ?>
                                                                <?php $index3++;
                                                            } ?>
                                                        <?php } ?>
                                                    </li>
                                                    <?php if ($index2 == $size2 - 1) { ?>
                                                        </ul>
                                                        </div>
                                                    <?php } ?>
                                                    <?php $index2++;
                                                } ?>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                <?php } ?>

                                <?php if ($is_megamenu == 'yes') { ?>
                                    <li class="dropdown dropdown-mega-menu d-none d-lg-block">
                                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle" href="#"><i
                                                    class="fas fa-bars"></i></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <?php if (is_array($menu)) { ?>
                                                    <?php foreach ($menu as $key => $menu_1) { ?>
                                                        <li class="mega-menu-col">
                                                            <h5><a href="<?php echo $menu_1['me_link']; ?>"
                                                                   target="_<?php echo $menu_1['me_target']; ?>"
                                                                   class="<?php if ($menu_1['active']) echo 'active'; ?>"><?php echo $menu_1['me_name'] ?></a>
                                                            </h5>
                                                            <?php $index2 = $size2 = 0; ?>
                                                            <?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) {
                                                                $size2 = count($menu_1['submenu']); ?>
                                                                <?php foreach ($menu_1['submenu'] as $subkey => $menu_2) { ?>
                                                                    <?php if ($index2 == 0) { ?>
                                                                        <ul>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <a href="<?php echo $menu_2['me_link']; ?>"
                                                                           target="_<?php echo $menu_2['me_target']; ?>"
                                                                           class="mega-menu-item <?php if ($menu_2['active']) echo 'active'; ?>"><?php echo $menu_2['me_name']; ?></a>
                                                                        <?php $index3 = $size3 = 0; ?>
                                                                        <?php if (isset($menu_2['subsub']) && is_array($menu_2['subsub'])) {
                                                                            $size3 = count($menu_2['subsub']); ?>
                                                                            <?php foreach ($menu_2['subsub'] as $ssubkey => $menu_3) { ?>
                                                                                <?php if ($index3 == 0) { ?>
                                                                                    <ul class="menu3-ul">
                                                                                <?php } ?>
                                                                                <li>
                                                                                    <a href="<?php echo $menu_3['me_link']; ?>"
                                                                                       target="_<?php echo $menu_3['me_target']; ?>"
                                                                                       class="mega-menu-item <?php if (isset($menu_3['active']) && $menu_3['active']) echo 'active'; ?>"><?php echo $menu_3['me_name']; ?></a>
                                                                                </li>
                                                                                <?php if ($index3 == $size3 - 1) { ?>
                                                                                    </ul>
                                                                                <?php } ?>
                                                                                <?php $index3++;
                                                                            } ?>
                                                                        <?php } ?>
                                                                    </li>
                                                                    <?php if ($index2 == $size2 - 1) { ?>
                                                                        </ul>
                                                                    <?php } ?>
                                                                    <?php $index2++;
                                                                } ?>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <?php /*----- header 끝 -----*/ ?>

    <?php if (!defined('_INDEX_')) { // 메인이 아닐때 ?>
        <?php /*----- page title 시작 -----*/ ?>
        <div class="page-title-wrap">
            <div class="container">
                <?php if (!defined('_EYOOM_MYPAGE_')) { ?>
                    <h2>
                        <?php if (!$it_id) { ?>
                            <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
                        <?php } else { ?>
                            <span class="f-s-14r"><i
                                        class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?></span>
                        <?php } ?>
                    </h2>
                    <?php if (!$it_id) { ?>
                        <div class="sub-breadcrumb-wrap">
                            <ul class="sub-breadcrumb hidden-xs">
                                <?php echo $subinfo['path']; ?>
                            </ul>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <h2><i class="fas fa-arrow-alt-circle-right"></i> 마이페이지</h2>
                <?php } ?>
            </div>
        </div>
        <?php /*----- page title 끝 -----*/ ?>
    <?php } ?>

<div class="basic-body <?php if (!defined('_INDEX_')) { ?>page-body<?php } ?>">
    <?php if (defined('_INDEX_')) { ?>
        <div class="main-slider-top">
            <?php /* EB슬라이더 - basic */ ?>
            <?php echo eb_slider('1516512257'); ?>
        </div>
    <?php } ?>
    <div class="container">
    <?php if ($side_layout['use'] == 'yes') { ?>
    <div class="main-wrap">
    <?php
    if ($side_layout['pos'] == 'left') {
        /* 사이드영역 시작 */
        include_once(EYOOM_THEME_PATH . '/side.html.php');
        /* 사이드영역 끝 */
    }
    ?>
    <main class="basic-body-main <?php if ($side_layout['pos'] == 'left') {
        echo 'right';
    } else {
        echo 'left';
    } ?>-main">
    <?php } else { ?>
    <div class="main-wrap">
    <main class="basic-body-main">
<?php } ?>
<?php } // !$wmode ?>