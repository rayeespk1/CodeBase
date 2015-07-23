<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-28 00:08:06
         compiled from "C:\wamp\www\WC\Real\user\views\templates\common\page_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29381558ec3012d0e51-46170707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c116ae52bbd6104e95c24410c548fc93d770ed00' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\Real\\user\\views\\templates\\common\\page_footer.tpl',
      1 => 1435421071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29381558ec3012d0e51-46170707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558ec3012e6272_28634076',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558ec3012e6272_28634076')) {function content_558ec3012e6272_28634076($_smarty_tpl) {?><!-- Footer
            ============================================= -->
            <footer id="footer" class="dark">

                <div class="container">

                    <!-- Footer Widgets
                    ============================================= -->
                    <div class="footer-widgets-wrap clearfix">

                        <div class="col_two_third">

                            <div class="col_one_third">

                                <div class="widget clearfix">

                                    <img src="../../assets/images/logo.png" alt="" class="footer-logo">

                                    <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

                                    <div style="background: url('../../assets/images/world-map.png') no-repeat center center; background-size: 100%;">
                                        <address>
                                            <strong>Headquarters:</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                        </address>
                                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                        <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                    </div>

                                </div>

                            </div>

                            <div class="col_one_third col_last">

                                <div class="widget clearfix">
                                    <h4>Recent Posts</h4>

                                    <div id="post-list-footer">
                                        <div class="spost clearfix">
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li>10th July 2014</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="spost clearfix">
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li>10th July 2014</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="spost clearfix">
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li>10th July 2014</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col_one_third col_last">

                            <div class="widget subscribe-widget clearfix">
                                <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                                <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                                <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                    <div class="input-group divcenter">
                                        <span class="input-group-addon"><i class="icon-email2"></i></span>
                                        <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit">Subscribe</button>
                                        </span>
                                    </div>
                                </form>
                                <?php echo '<script'; ?>
 type="text/javascript">
                                    jQuery("#widget-subscribe-form").validate({
                                        submitHandler: function (form) {
                                            jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                            jQuery(form).ajaxSubmit({
                                                target: '#widget-subscribe-form-result',
                                                success: function () {
                                                    jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                                    jQuery('#widget-subscribe-form').find('.form-control').val('');
                                                    jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
                                                    SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
                                                }
                                            });
                                        }
                                    });
                                <?php echo '</script'; ?>
>
                            </div>

                            <div class="widget clearfix" style="margin-bottom: -20px;">

                                <div class="row">

                                    <div class="col-md-6 clearfix bottommargin-sm">
                                        <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                                    </div>
                                    <div class="col-md-6 clearfix">
                                        <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div><!-- .footer-widgets-wrap end -->

                </div>

                <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="col_half">
                            Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
                        </div>

                        <div class="col_half col_last tright">
                            <div class="fright clearfix">
                                <a href="#" class="social-icon si-small si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-github">
                                    <i class="icon-github"></i>
                                    <i class="icon-github"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                    <i class="icon-yahoo"></i>
                                    <i class="icon-yahoo"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div>

                            <div class="clear"></div>

                            <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
                        </div>

                    </div>

                </div><!-- #copyrights end -->

            </footer><!-- #footer end -->

        </div><!-- #wrapper end -->

        <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div><?php }} ?>
