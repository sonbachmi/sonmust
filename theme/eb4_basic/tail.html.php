<?php
/**
 * theme file : /theme/THEME_NAME/tail.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if (!$wmode) { ?>
    <?php if ($side_layout['use'] == 'yes') { ?>
        </main>
        <?php
        if ($side_layout['pos'] == 'right') {
            /* 사이드영역 시작 */
            include_once(EYOOM_THEME_PATH . '/side.html.php');
            /* 사이드영역 끝 */
        }
        ?>
        </div><?php /* End .main-wrap */ ?>
    <?php } else { ?>
        </main>
        </div><?php /* End .main-wrap */ ?>
    <?php } ?>

    </div><?php /* End .container */ ?>
    </div><?php /* End .basic-body */ ?>

    <?php /*----- footer 시작 -----*/
//    Temporarily use static content from design
    $bizinfo['bi_cs_tel1'] = '1522-2041';
    $bizinfo['bi_cs_time'] = '평일 10:00 ~ 17:00 (점심 12:00 ~ 13:00)';
    $bizinfo['bi_cs_email'] = 'soo@p2u.kr';
    $bizinfo['bi_cs_closed'] = '토요일, 일요일, 공휴일은 휴무입니다. 근무시간 이후 문의는 1:1 문의를 이용해주세요.';
    $bizinfo['bi_company_name'] = '주식회사 포인투유';
    $bizinfo['bi_company_ceo'] = '최병호';
    $bizinfo['bi_company_bizno'] = '443-86-024-22';
    $bizinfo['bi_company_sellno'] = '제2024-서울금천-0326호';
    $bizinfo['bi_company_addr1'] = '08502 서울 금천구 가산디지털1로 212 202-52호 (가산동, 코오롱디지털타워애스턴)';
    ?>

    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-logo">
                    <svg width="54" height="29" viewBox="0 0 54 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36.051 29H17.0735C15.9303 29 15.0158 28.0593 15.092 26.9304L16.3876 8.83096C16.4638 7.81499 17.3022 7.02478 18.3692 7.02478H34.7554C35.7842 7.02478 36.6607 7.81499 36.7369 8.83096L38.0326 26.9304C38.1088 28.0216 37.1942 29 36.051 29Z"
                              fill="white"/>
                        <path d="M0.306305 24.4846V13.4217C0.306305 11.6532 1.22089 10.6372 2.89761 10.6372H7.16563C11.7766 10.6372 14.3298 12.6315 14.3298 16.4697C14.3298 20.2702 11.8909 22.1892 7.31806 22.1892H5.37459V24.4846C5.37459 25.9521 4.61243 26.78 3.16436 26.78H2.44032C1.10656 26.78 0.306305 25.9898 0.306305 24.4846ZM9.41397 16.4697C9.41397 15.115 8.5756 14.3625 7.0132 14.3625H5.29837V18.5393H7.08942C8.61371 18.5016 9.41397 17.7867 9.41397 16.4697Z"
                              fill="white"/>
                        <path d="M39.1758 12.7819C39.1758 11.2392 40.0142 10.4866 41.386 10.4866H41.9957C43.4438 10.4866 44.1679 11.2392 44.1679 12.7819V19.668C44.1679 21.6247 44.9681 22.603 46.5686 22.603C48.1691 22.603 48.8932 21.6623 48.8932 19.668V12.7819C48.8932 11.2015 49.7315 10.4866 51.1034 10.4866H51.7512C53.1993 10.4866 53.9233 11.2392 53.9233 12.7819V19.5927C53.9233 24.4092 51.4082 26.8927 46.5305 26.8927C41.6147 26.8927 39.1377 24.4468 39.1377 19.5927V12.7819H39.1758Z"
                              fill="white"/>
                        <path d="M20.0078 24.2588V23.3181C20.0078 20.5335 22.8278 18.9531 24.9618 17.9748C26.829 17.1093 28.2771 16.6954 28.2771 15.6794C28.2771 14.6634 27.5912 14.1743 26.2193 14.1743C24.5426 14.1743 23.5518 15.416 23.3232 16.6578C23.3232 16.6954 20.084 16.8459 20.084 14.4377C20.084 13.2335 20.6556 12.2176 21.7608 11.465C22.8278 10.7124 24.4664 10.2609 26.5623 10.2609C30.8303 10.2609 33.1548 12.1799 33.1548 15.416C33.1548 18.5016 31.0208 19.4799 28.7344 20.3454C27.172 20.9474 25.6858 21.399 24.8855 22.2268C24.7331 22.3773 24.5807 22.5278 24.4664 22.6407H30.9065C32.6213 22.6407 33.2692 23.3181 33.2692 24.4846V24.6727C33.2692 25.9144 32.6594 26.5918 30.9065 26.5918H23.0183C20.6937 26.6294 20.0078 26.2907 20.0078 24.2588Z"
                              fill="#17191E"/>
                        <path d="M19.8173 8.37938C19.8173 4.72938 22.8277 1.75671 26.5242 1.75671C30.2206 1.75671 33.231 4.72938 33.231 8.37938"
                              stroke="white" stroke-width="2.8346" stroke-miterlimit="10"/>
                    </svg>

                </div>
                <div class="footer-nav">
                    <a href="<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a>
                    <a href="<?php echo G5_BBS_URL; ?>/qalist.php">1:1문의</a>
                </div>
            </div>
            <div class="footer-info">
                <div class="footer-line cs has-break">
                    <span>CS CENTER <?php echo $bizinfo['bi_cs_tel1'] ?></span>
                    <br><span class="info-divider no-mobile">|</span>
                    <span>통신판매업 : <?php echo $bizinfo['bi_cs_time'] ?></span>
                </div>
                <div class="footer-line secondary has-break">
                    <span><?php echo $bizinfo['bi_cs_email'] ?></span>
                    <br><span class="info-divider no-mobile">|</span>
                    <span><?php echo $bizinfo['bi_cs_closed'] ?></span>
                </div>
                <div class="footer-line small">사업자 등록번호 :
                    <span><?php echo $bizinfo['bi_company_name'] ?></span>
                    <span class="info-divider">|</span>
                    <span>대표 : <?php echo $bizinfo['bi_company_ceo'] ?></span>
                </div>
                <div class="footer-line secondary normal-height"><span>사업자 등록번호 :
                    <span><?php echo $bizinfo['bi_company_bizno'] ?></span>
                    <br><span class="info-divider no-mobile">|</span>
                    <span>통신판매업 : <?php echo $bizinfo['bi_company_sellno'] ?></span>
                    <br><span class="info-divider no-mobile">|</span>
                    <span>주소 : <?php echo $bizinfo['bi_company_addr1']; ?></span>
                </div>
            </div>
            <div class="footer-copyright">
                Copyright &copy; P2U :: <?php echo $config['cf_title']; ?>. All Rights Reserved.
            </div>
            <div class="footer-legal-nav">
                <a href="<?php echo get_eyoom_pretty_url('page', 'provision'); ?>">서비스이용약관</a>
                <a href="<?php echo get_eyoom_pretty_url('page', 'privacy'); ?>">개인정보처리방침</a>
                <a href="<?php echo get_eyoom_pretty_url('page', 'noemail'); ?>">이메일무단수집거부</a>
            </div>
        </div>
    </footer>


    <?php /*----- wrapper 끝 -----*/ ?>

    <?php /*----- 전체 검색 입력창 시작 -----*/ ?>
    <div class="search-full">
        <div class="search-close-btn"></div>
        <fieldset class="search-field">
            <legend>게시판 전체검색</legend>
            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php"
                  onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <label for="search_input" class="sound_only">검색어 입력 필수</label>
                <input type="text" name="stx" id="search_input" maxlength="20" placeholder="검색어 입력 [ 전체 게시판 검색 ]">
                <button type="submit" class="search-btn" value="검색"><i class="fas fa-search"
                                                                       aria-hidden="true"></i><span class="sound_only">검색</span>
                </button>
            </form>
            <script>
                function fsearchbox_submit(f) {
                    var stx = f.stx.value.trim();
                    if (stx.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i = 0; i < stx.length; i++) {
                        if (stx.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }
                    f.stx.value = stx;

                    return true;
                }
            </script>
        </fieldset>
    </div>
    <?php /*----- 전체 검색 입력창 끝 -----*/ ?>

    <?php /* 상담 신청 버튼 */ ?>
    <?php if ($config['cf_use_counsel'] == '1') { ?>
        <a <?php if (!G5_IS_MOBILE) { ?>href="javascript:void(0);" onclick="counsel_modal();"
           <?php } else { ?>href="<?php echo G5_URL; ?>/page/?pid=counsel"<?php } ?> class="counsel-btn"><i
                    class="fas fa-headset"></i><span class="sound-only">상담신청</span></a>
    <?php } ?>

    <?php /* 사이드바 회원 버튼 */ ?>
    <button type="button" class="sidebar-user-trigger sidebar-user-btn mo-btn" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasUserRight" aria-controls="offcanvasUserRight"><i class="fas fa-user-alt"></i><span
                class="sound-only">회원 사이드바</span></button>

    <?php /* Side Nav Mobile Toggler */ ?>
    <button type="button" class="navbar-mobile-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft"
            aria-controls="offcanvasLeft"><i class="fas fa-bars"></i><span class="sound-only">메뉴 사이드바</span></button>

    <?php /* Back To Top */ ?>
    <div class="eb-backtotop">
        <svg class="backtotop-progress" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            <span class="progress-count"></span>
        </svg>
    </div>
<?php } // !$wmode ?>

<?php
include_once(EYOOM_THEME_PATH . '/misc.html.php');
?>

<?php
if ($is_member && $eyoomer['onoff_push'] == 'on') {
    include_once(EYOOM_THEME_PATH . '/skin/push/basic/push.skin.html.php');
}
?>

    <script src="<?php echo EYOOM_THEME_URL; ?>/js/app.js?ver=<?php echo G5_JS_VER; ?>"></script>
<?php if ($is_admin == 'super') { ?>
    <script>
        $(document).ready(function () {
            var edit_mode = "<?php echo $eyoom_default['edit_mode']; ?>";
            if (edit_mode == 'on') {
                $(".btn-edit-mode").show();
            } else {
                $(".btn-edit-mode").hide();
            }

            $("#btn_edit_mode").click(function () {
                var edit_mode = $("#edit_mode").val();
                if (edit_mode == 'on') {
                    $(".btn-edit-mode").hide();
                    $("#edit_mode").val('');
                } else {
                    $(".btn-edit-mode").show();
                    $("#edit_mode").val('on');
                }

                $.post("<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=theme_editmode&smode=1", {edit_mode: edit_mode});
            });
        });
    </script>
<?php } ?>

<?php
if ($config['cf_analytics']) echo $config['cf_analytics'];
?>