<?php
include '../model/Instituicao.php';
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">

    <head>
        <script type="text/javascript">
            var siteurl = '/';
            var tmplurl = '/templates/ja_mendozite/';
            var isRTL = false;
        </script>

        <base href="http://gigacandanga.com.br/"/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="generator" content="Joomla! - Open Source Content Management" />
        <title>Gestão</title>        
        <link href="view/css/bootstrap.min.css" rel="stylesheet" media="screen" />
        <link href="view/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
        <link href="view/css/style.css" rel="stylesheet" media="screen" />
        <link href="/index.php/informes?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
        <link href="/index.php/informes?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
        <link rel="stylesheet" href="/t3-assets/css_3c489.css" type="text/css" />
        <link rel="stylesheet" href="/t3-assets/css_0a2b0.css?v=15" type="text/css" />
        <script src="/index.php?jat3action=gzip&amp;jat3type=js&amp;jat3file=t3-assets%2Fjs_1675c.js" type="text/javascript"></script>
        <script type="text/javascript">
            window.addEvent('domready', function() {
                $$('.hasTip').each(function(el) {
                    var title = el.get('title');
                    if (title) {
                        var parts = title.split('::', 2);
                        el.store('tip:title', parts[0]);
                        el.store('tip:text', parts[1]);
                    }
                });
                var JTooltips = new Tips($$('.hasTip'), {maxTitleChars: 50, fixed: false});
            });
        </script>

        <!--[if ie]><link href="/plugins/system/jat3/jat3/base-themes/default/css/template-ie.css" type="text/css" rel="stylesheet" /><![endif]--> 
        <!--[if ie 7]><link href="/plugins/system/jat3/jat3/base-themes/default/css/template-ie7.css" type="text/css" rel="stylesheet" /><![endif]--> 
        <!--[if ie 7]><link href="/templates/ja_mendozite/css/template-ie7.css" type="text/css" rel="stylesheet" /><![endif]--> 




        <link href="/plugins/system/jat3/jat3/base-themes/default/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans:bold&amp;subset=cyrillic" />

        <style type="text/css">
            /*dynamic css*/
            #ja-splitmenu,
            #jasdl-mainnav,
            #ja-cssmenu li,
            #ja-megamenu ul.level0
            {font-family: 'PT Sans';font-weight:bold;font-style:bold;}
            .contentheading,
            .article-content h1,
            .article-content h2,
            .article-content h3,
            .article-content h4,
            .article-content h5,
            .article-content h6
            {font-family: 'PT Sans';font-weight:bold;font-style:bold; }
            div.ja-moduletable h3, div.moduletable h3,
            div.ja-module h3, div.module h3
            {font-family: 'PT Sans';font-weight:bold;font-style:bold;}

            body.bd .main {width: 1000px;}
            body.bd #ja-wrapper {min-width: 1000px;}
        </style></head>

    <body id="bd" class="bd fs3 com_content">
        <a name="Top" id="Top"></a>
        <div id="ja-wrapper">


            <div id="ja-header"
                 class="wrap ">
                <div class="main">
                    <div class="main-inner1 clearfix">
                        <h1 class="logo">
                            <a href="/" title="GigaCandanga"><span>GigaCandanga</span></a>
                        </h1>


                        <div id="ja-callnow">
                            <ul>
                                <li>
                                    <a class="login-switch" href="/index.php/component/user/?view=login" onclick="showBox('ja-user-login', 'mod_login_username', this, window.event || event);
                return false;" title="Login"><span>Login</span></a>

                                    <!--LOFIN FORM content-->
                                    <div id="ja-user-login" style="width:240px;">
                                        <form action="/index.php/acessos-externos" method="post" name="form-login" id="login-form" >
                                            <div class="pretext">
                                            </div>
                                            <fieldset class="userdata">
                                                <p id="form-login-username">
                                                    <label for="modlgn-username">Username</label>
                                                    <input id="modlgn-username" type="text" name="username" class="inputbox"  size="18" />
                                                </p>
                                                <p id="form-login-password">
                                                    <label for="modlgn-passwd">Password</label>
                                                    <input id="modlgn-passwd" type="password" name="password" class="inputbox" size="18"  />
                                                </p>
                                                <p id="form-login-remember">
                                                    <label for="modlgn-remember">Remember Me</label>
                                                    <input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"/>
                                                </p>
                                                <input type="submit" name="Submit" class="button" value="Login" />
                                                <input type="hidden" name="option" value="com_users" />
                                                <input type="hidden" name="task" value="user.login" />
                                                <input type="hidden" name="return" value="L2luZGV4LnBocC9pbmZvcm1lcw==" />
                                                <input type="hidden" name="ae7a8dec348ca1b899d1fa075de73047" value="1" />			</fieldset>
                                            <ul>
                                                <li>
                                                    <a href="/index.php/component/users/?view=reset">
                                                        Forgot your password?</a>
                                                </li>
                                                <li>
                                                    <a href="/index.php/component/users/?view=remind">
                                                        Forgot your username?</a>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>

                                </li>
                                <li>
                                    <!--LOFIN FORM content-->
                                    <div id="ja-user-register"   style="width:240px;">

                                        <form id="member-registration" action="/index.php/component/users/?task=registration.register" method="post" class="form-validate">
                                            <fieldset>
                                                <dl>
                                                    <dt>
                                                        <label  class="hasTip required" for="jform_name" id="jform_name-lbl" title="Name&lt;br&gt;Enter your full name">Name:</label><em>*</em></dt>
                                                    <dd><input type="text" size="30" class="required" value="" id="jform_name" name="jform[name]"/></dd>

                                                    <dt>
                                                        <label title="" class="hasTip required" for="jform_username" id="jform_username-lbl">Username:</label><em>*</em></dt>
                                                    <dd><input type="text" size="30" class="validate-username required" value="" id="jform_username" name="jform[username]"/>
                                                    </dd>
                                                    <dt>
                                                        <label title="" class="hasTip required" for="jform_password1" id="jform_password1-lbl">Password:</label><em>*</em></dt>
                                                    <dd>
                                                        <input type="password" size="30" class="validate-password required" value="" id="jform_password1" name="jform[password1]" />
                                                    </dd>
                                                    <dt>
                                                        <label title="" class="hasTip required" for="jform_password2" id="jform_password2-lbl">Confirm Password:</label><em>*</em></dt>
                                                    <dd>
                                                        <input type="password" size="30" class="validate-password required" value="" id="jform_password2" name="jform[password2]" />
                                                    </dd>
                                                    <dt>
                                                        <label title="" class="hasTip required" for="jform_email1" id="jform_email1-lbl">Email:</label><em>*</em></dt>
                                                    <dd>
                                                        <input type="text" size="30" class="validate-email required" value="" id="jform_email1" name="jform[email1]" />
                                                    </dd>
                                                    <dt>
                                                        <label title="" class="hasTip required" for="jform_email2" id="jform_email2-lbl">Confirm email Address:</label><em>*</em></dt>
                                                    <dd>
                                                        <input type="text" size="30" class="validate-email required" value="" id="jform_email2" name="jform[email2]" />
                                                    </dd>
                                                </dl>
                                            </fieldset>
                                            <p>Fields marked with an asterisk (*) are required.</p>
                                            <button type="submit" class="validate">Create an account</button>
                                            <div>
                                                <input type="hidden" name="option" value="com_users" />
                                                <input type="hidden" name="task" value="registration.register" />
                                                <input type="hidden" name="ae7a8dec348ca1b899d1fa075de73047" value="1" />				</div>
                                        </form>
                                        <!-- Old code -->
                                    </div>
                                </li>
                                <!--LOFIN FORM content-->
                            </ul>
                        </div>                </div>
                </div>
            </div>
            <div id="ja-mainnav"
                 class="wrap ">
                <div class="main">
                    <div class="main-inner1 clearfix">
                        <div class="ja-megamenu clearfix" id="ja-megamenu">
                            <ul class="megamenu level0"><li  class="mega first"><a href="http://gigacandanga.com.br/"  class="mega first" id="menu435" title="Inícial"><span class="menu-title">Inícial</span></a></li><li  class="mega haschild"><a href="/index.php/gigacandanga"  class="mega haschild" id="menu472" title="GigaCandanga"><span class="menu-title">GigaCandanga</span></a><div class="childcontent cols1 ">
                                        <div class="childcontent-inner-wrap">
                                            <div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level1"><li  class="mega first"><a href="/index.php/gigacandanga/historia"  class="mega first" id="menu473" title="História"><span class="menu-title">História</span></a></li><li  class="mega"><a href="/index.php/gigacandanga/mapa-da-rede"  class="mega" id="menu474" title="Mapa da Rede"><span class="menu-title">Mapa da Rede</span></a></li><li  class="mega"><a href="/index.php/gigacandanga/como-aderir"  class="mega" id="menu475" title="Como aderir"><span class="menu-title">Como aderir</span></a></li><li  class="mega"><a href="/index.php/gigacandanga/participantes"  class="mega" id="menu476" title="Participantes"><span class="menu-title">Participantes</span></a></li><li  class="mega"><a href="/index.php/gigacandanga/patrocinadores"  class="mega" id="menu477" title="Patrocinadores"><span class="menu-title">Patrocinadores</span></a></li><li  class="mega last"><a href="/index.php/gigacandanga/perguntas-frequentes"  class="mega last" id="menu478" title="Perguntas Frequentes"><span class="menu-title">Perguntas Frequentes</span></a></li></ul></div></div>
                                        </div></div></li><li  class="mega"><a href="/index.php/informes"  class="mega" id="menu482" title="Informes"><span class="menu-title">Informes</span></a></li><li  class="mega"><a href="/index.php/galeria"  class="mega" id="menu548" title="Galeria"><span class="menu-title">Galeria</span></a></li><li  class="mega"><a href="/index.php/contato"  class="mega" id="menu532" title="Contato"><span class="menu-title">Contato</span></a></li><li  class="mega last"><a href="/index.php/acessos-externos"  class="mega last" id="menu531" title="Parceiros"><span class="menu-title">Parceiros</span></a></li>
                                <li class="mega haschild"><a href="http://gigacandanga.net.br/gestao/" class="mega haschild" id="menu472" title="Gestão"><span class="menu-title">Gestão</span></a><div class="childcontent cols1 " style="width: 220px; height: 298px; display: none; margin-left: 0px; left: 98px; z-index: 1000;">
                                        <div class="childcontent-inner-wrap" style="width: 200px;">
                                            <div class="childcontent-inner clearfix" style="width: 200px;"><div class="megacol column1 first" style="width: 200px;"><ul class="megamenu level1"><li class="mega first"><a href="gestao/cadastraInstituicao.php" class="mega first" id="" title="Cadastrar Instituição"><span class="menu-title">Cadastrar Instituição</span></a></li><li class="mega"><a href="gestao/relatorio.php" class="mega" id="" title="Relatório"><span class="menu-title">Relatório</span></a></li>
                                                </div></div></li>
                                        </div>            <script type="text/javascript">
                            var megamenu = new jaMegaMenuMoo('ja-megamenu', {
                                'bgopacity': 0,
                                'delayHide': 300,
                                'slide': 0,
                                'fading': 0,
                                'direction': 'down',
                                'action': 'mouseover',
                                'tips': false,
                                'duration': 300,
                                'hidestyle': 'fastwhenshow'
                            });
                                        </script>
                                        <!-- jdoc:include type="menu" level="0" / -->



                                        <ul class="no-display">
                                            <li><a href="#ja-content" title="Skip to content">Skip to content</a></li>
                                        </ul>                </div>
                                    </div>
                                    </div>