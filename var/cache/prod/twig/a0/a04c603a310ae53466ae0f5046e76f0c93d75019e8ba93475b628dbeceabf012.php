<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__4ccee00f14efaa72ce82b3c871fb615891381f7a5369d8e59fa668b66eaea8de */
class __TwigTemplate_ae98367b96dd277af96f27d0485a90af3e93900dfbb40b48c9001a4d86fa4302 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/Presta/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/Presta/img/app_icon.png\" />

<title>Thème et logo > Thème • Ma boutique</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.7.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'fd7f68519d3efec1e03ea5fb3a899611';
    var token_admin_orders = 'af51f52dba9b7a6581177027e511a785';
    var token_admin_customers = '15f175d1282aa5dd67a01cb562c6ecf4';
    var token_admin_customer_threads = 'c5b65f1b2eb85cd41590c4e0d8390f77';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '8745702bb23801a56b1ae8416acb98a3';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/Presta/admin735kcaaj4/index.php/improve/modules/catalog/recommended?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40';
    var admin_notification_get_link = '/Presta/admin735kcaaj4/index.php/common/notifications?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40';
    var admin_notification_push_link = '/Presta/admin735kcaaj4/index.php/common/notifications/ack?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/Presta/admin735kcaaj4/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Presta/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Presta/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Presta/admin735kcaaj4/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Presta/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Presta/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Presta/modules/leoblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Presta/modules/appagebuilder/views/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var appagebuilder_listshortcode_url = \"http:\\/\\/localhost\\/Presta\\/admin735kcaaj4\\/index.php?controller=AdminApPageBuilderShortcode&token=779b96702099fb5cf37220ba5e69802b&get_listshortcode=1\";
var appagebuilder_module_dir = \"\\/Presta\\/modules\\/appagebuilder\\/\";
var baseAdminDir = \"\\/Presta\\/admin735kcaaj4\\/\";
var baseDir = \"\\/Presta\\/\";
var changeFormLanguageUrl = \"\\/Presta\\/admin735kcaaj4\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var leofeature_module_dir = \"\\/Presta\\/modules\\/leofeature\\/\";
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
var url_ajax_blog = \"http:\\/\\/localhost\\/Presta\\/modules\\/leoblog\\/adminajax.php\";
</script>
<script type=\"text/javascript\" src=\"/Presta/admin735kcaaj4/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/js/admin.js?v=1.7.7.7\"></script>
<script type=\"text/javascript\" src=\"/Presta/admin735kcaaj4/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/js/tools.js?v=1.7.7.7\"></script>
<script type=\"text/javascript\" src=\"/Presta/admin735kcaaj4/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/admin735kcaaj4/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/modules/appagebuilder/views/js/admin/function.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/Presta/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/Presta/admin735kcaaj4/index.php/common/notifications?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 106
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-fr adminthemes\"
  data-base-url=\"/Presta/admin735kcaaj4/index.php\"  data-token=\"FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminDashboard&amp;token=09c09ae3b636d9801d17f580f0a630f2\"></a>
      <span id=\"shop_version\">1.7.7.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminOrders&amp;token=af51f52dba9b7a6581177027e511a785\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=858101ac0d5b96d30527c06175875ec7\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Presta/admin735kcaaj4/index.php/improve/modules/manage?token=ff25e650ec870690682cd425ea504554\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=4798cf614a46f8fb4202920bbd635e16\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Presta/admin735kcaaj4/index.php/sell/catalog/products/new?token=ff25e650ec870690682cd425ea504554\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Presta/admin735kcaaj4/index.php/sell/catalog/categories/new?token=ff25e650ec870690682cd425ea504554\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"139\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-zdiQpEhQEMDduoQcWEh40\"
        data-post-link=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminQuickAccesses&token=e09694093123b3e9e81c4b096ce4424a\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Th&egrave;me et logo - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminQuickAccesses&token=e09694093123b3e9e81c4b096ce4424a\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/Presta/admin735kcaaj4/index.php?controller=AdminSearch&amp;token=45861d899987170aaa5a192cf4b96eb6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/Presta/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous pensé à vendre sur les places de marché ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/urbs.aina%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Urbain</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/employees/1/edit?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\">
      <i class=\"material-icons\">settings</i>
      Votre profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLogin&amp;logout=1&amp;token=b9d89aaa66f032204531fdc7a61757f1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/Presta/admin735kcaaj4/index.php/configure/advanced/employees/toggle-navigation?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminDashboard&amp;token=09c09ae3b636d9801d17f580f0a630f2\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/sell/orders/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/orders/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/orders/invoices/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/orders/credit-slips/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/orders/delivery-slips/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminCarts&amp;token=21d0b744ec8b8c8619bad274d22d1a8a\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/sell/catalog/products?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/catalog/products?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/catalog/categories?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/catalog/monitoring/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminAttributesGroups&amp;token=55fa31bcf4a64e396eccb39dbaca13c4\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/catalog/brands/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/attachments/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminCartRules&amp;token=4798cf614a46f8fb4202920bbd635e16\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/stocks/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/sell/customers/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/customers/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/addresses/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminCustomerThreads&amp;token=c5b65f1b2eb85cd41590c4e0d8390f77\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminCustomerThreads&amp;token=c5b65f1b2eb85cd41590c4e0d8390f77\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/sell/customer-service/order-messages/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminReturn&amp;token=343642742b39e5f4158156ea9afb2071\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminStats&amp;token=858101ac0d5b96d30527c06175875ec7\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/improve/modules/manage?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/modules/manage?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/modules/catalog?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"150\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=588c4d7bd40724cd8aea078afac2fa42\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=b74640eec4b2219dfeb62eda451c8268\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/improve/design/themes/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/design/themes/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminThemesCatalog\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/design/themes-catalog/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/design/mail_theme/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/design/cms-pages/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/design/modules/positions/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminImages&amp;token=7e74d055f8cc1aeebd5bd7525ef07659\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/modules/link-widget/list?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminCarriers&amp;token=9613cc81898c5a1b3a3ea0a9cadc81de\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminCarriers&amp;token=9613cc81898c5a1b3a3ea0a9cadc81de\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/shipping/preferences?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/improve/payment/payment_methods?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/payment/payment_methods?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/payment/preferences?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/improve/international/localization/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/international/localization/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminZones&amp;token=d6f227458c84815c15a87bc7f2c9e6f6\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/international/taxes/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/improve/international/translations/settings?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-AdminApPageBuilder\">
                    <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderProfiles&amp;token=551d183fc5d25adb72663ed24430fc1f\" class=\"link\">
                      <i class=\"material-icons mi-tab\">tab</i>
                      <span>
                      Ap PageBuilder
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-131\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminApPageBuilderProfiles\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderProfiles&amp;token=551d183fc5d25adb72663ed24430fc1f\" class=\"link\"> Ap Profiles Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"133\" id=\"subtab-AdminApPageBuilderPositions\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderPositions&amp;token=f253e6d7a78f0bbb0c9d06336b028cc4\" class=\"link\"> Ap Positions Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminApPageBuilderShortcode\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderShortcode&amp;token=779b96702099fb5cf37220ba5e69802b\" class=\"link\"> Ap ShortCode Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminApPageBuilderProducts\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderProducts&amp;token=1a9632f55b536fa1d033e3d6791a7348\" class=\"link\"> Ap Products List Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminApPageBuilderDetails\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderDetails&amp;token=3ad75e7da88b7eadacb289b16181e228\" class=\"link\"> Ap Products Details Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"139\" id=\"subtab-AdminApPageBuilderThemeEditor\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderThemeEditor&amp;token=da18e87989a4c8d4ad516d4ea89d8e9b\" class=\"link\"> Ap Live Theme Editor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-AdminApPageBuilderModule\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderModule&amp;token=a271a77df4930d2a0e8d3e601a71f5a3\" class=\"link\"> Ap Module Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-AdminApPageBuilderThemeConfiguration\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderThemeConfiguration&amp;token=89fe5030332a0f90409dbe44c6944652\" class=\"link\"> Ap Theme Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminApPageBuilderHook\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminApPageBuilderHook&amp;token=6105c5c705b814b0b1fee0341fe13225\" class=\"link\"> Ap Hook Control Panel
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-AdminLeoblogManagement\">
                    <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeoblogDashboard&amp;token=644c1624c1bb0dbd38c653e1c79d8dbf\" class=\"link\">
                      <i class=\"material-icons mi-create\">create</i>
                      <span>
                      Leo Blog Gestion
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"145\" id=\"subtab-AdminLeoblogDashboard\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeoblogDashboard&amp;token=644c1624c1bb0dbd38c653e1c79d8dbf\" class=\"link\"> Blog Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-AdminLeoblogCategories\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeoblogCategories&amp;token=ed6c7f38e2b86d28702cd031616f2645\" class=\"link\"> Categories Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-AdminLeoblogBlogs\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeoblogBlogs&amp;token=de652caad74a548f83f47ad5e8a2e8c3\" class=\"link\"> Blogs Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminLeoblogComments\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeoblogComments&amp;token=6489236c9fc7475b4a53e3eb8b944022\" class=\"link\"> Comment Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminLeoblogModule\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeoblogModule&amp;token=246b50460d4c1f9e03f7475afbb60047\" class=\"link\"> Leo Blog Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"154\" id=\"subtab-AdminLeofeatureManagement\">
                    <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeofeatureModule&amp;token=087f5556122e0e50541756865f95ee1c\" class=\"link\">
                      <i class=\"material-icons mi-star\">star</i>
                      <span>
                      Leo Management Feature
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-154\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeofeatureModule&amp;token=087f5556122e0e50541756865f95ee1c\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-AdminLeofeatureReviews\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminLeofeatureReviews&amp;token=f85759d7925ccb6b7db94da986d7ea2d\" class=\"link\"> Product Review Management
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/configure/shop/preferences/preferences?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/shop/preferences/preferences?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/shop/order-preferences/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/shop/product-preferences/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/shop/customer-preferences/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/shop/contacts/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/shop/seo-urls/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminSearchConf&amp;token=7821c8f639b8c3d50d242981b3f5e120\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/system-information/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/system-information/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/performance/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/administration/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/emails/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/import/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/employees/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/sql-requests/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/logs/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/Presta/admin735kcaaj4/index.php/configure/advanced/webservice-keys/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lancez votre boutique !
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Reprendre</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Quitter le tutoriel</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Thème et logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thème et logo &gt; Thème          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/Presta/admin735kcaaj4/index.php/improve/design/themes/import?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\"                  title=\"Ajouter un thème\"                >
                  <i class=\"material-icons\">add</i>                  Ajouter un thème
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/Presta/admin735kcaaj4/index.php/improve/design/themes/export?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\"                  title=\"Exporter le thème actif\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Exporter le thème actif
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/Presta/admin735kcaaj4/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D1.7.7.7%2526country%253Dfr/Aide?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/Presta/admin735kcaaj4/index.php/improve/design/themes/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Thème et logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminPsThemeCustoConfiguration&token=b898351b251791e3df8283162f3b686d\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminPsThemeCustoAdvanced&token=953a656638882ad730fba1653e5c170e\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Personnalisation avancée
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </ul>
    </div>
    
</div>
      
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 8.3333333333333%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 41.666666666667%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 16.666666666667%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 8.3333333333333%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 8.3333333333333%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 16.666666666667%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuer</button>
  <a class=\"onboarding-button-shut-down\">Passer le tutoriel</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Bienvenue chez vous !<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Bonjour ! Je m'appelle Preston et je suis l\\u00e0 pour vous pr\\u00e9senter l'interface.<\\/p>\\n    <p>Vous d\\u00e9couvrirez les quelques \\u00e9tapes essentielles avant de lancer votre boutique :\\n    ajouter votre premier produit, personnaliser votre boutique, param\\u00e9trer vos transporteurs et modes de paiement...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>C'est parti !<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Plus tard<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">D\\u00e9marrer<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/Presta\\/admin735kcaaj4\\/index.php?controller=AdminDashboard&token=09c09ae3b636d9801d17f580f0a630f2\"}]},{\"title\":\"Cr\\u00e9ons votre premier produit\",\"subtitle\":{\"1\":\"Que souhaitez-vous en dire ? Pensez \\u00e0 ce que vos clients aimeraient savoir \\u00e0 propos de ce produit.\",\"2\":\"Ajoutez un contenu clair et attrayant. Pas d'inqui\\u00e9tude, vous pourrez toujours le modifier apr\\u00e8s !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Donnez un nom accrocheur \\u00e0 votre produit.\",\"options\":[\"savepoint\"],\"page\":[\"\\/Presta\\/admin735kcaaj4\\/index.php\\/sell\\/catalog\\/products\\/new?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Renseignez les informations essentielles dans cet onglet. Les autres onglets vous permettront de g\\u00e9rer les options plus avanc\\u00e9es.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ajoutez une ou plusieurs images pour montrer votre produit sous son meilleur jour !\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Combien voulez-vous le vendre ?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Bravo ! Vous venez de cr\\u00e9er votre premier produit. Pas mal, non ?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Donnez \\u00e0 votre boutique sa touche personnelle\",\"subtitle\":{\"1\":\"Qu'est-ce qui rend votre boutique si unique ? Comment voudriez-vous qu'elle soit ?\",\"2\":\"Personnalisez votre th\\u00e8me ou choisissez parmi les nombreux mod\\u00e8les de notre catalogue de th\\u00e8mes.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Commencez par ajouter votre propre logo ici !\",\"options\":[\"savepoint\"],\"page\":\"\\/Presta\\/admin735kcaaj4\\/index.php\\/improve\\/design\\/themes\\/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si vous cherchez quelque chose de vraiment unique, consultez notre catalogue de th\\u00e8mes.\",\"page\":\"\\/Presta\\/admin735kcaaj4\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Soyez pr\\u00eat \\u00e0 recevoir des paiements\",\"subtitle\":{\"1\":\"Comment souhaitez-vous \\u00eatre pay\\u00e9 par vos clients ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ces modes de paiement sont d\\u00e9j\\u00e0 disponibles sur votre boutique.\",\"options\":[\"savepoint\"],\"page\":\"\\/Presta\\/admin735kcaaj4\\/index.php\\/improve\\/payment\\/payment_methods?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"title\":\"Choisissez vos transporteurs\",\"subtitle\":{\"1\":\"Comment souhaitez-vous livrer vos produits ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Voici les m\\u00e9thodes de livraisons disponibles sur votre boutique aujourd'hui.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/Presta\\/admin735kcaaj4\\/index.php?controller=AdminCarriers&token=9613cc81898c5a1b3a3ea0a9cadc81de\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"}]},{\"title\":\"Am\\u00e9liorez votre boutique avec des modules\",\"subtitle\":{\"1\":\"Ajoutez de nouvelles fonctionnalit\\u00e9s et g\\u00e9rez-en de nombreuses autres gr\\u00e2ce aux modules.\",\"2\":\"Certains modules sont d\\u00e9j\\u00e0 pr\\u00e9-install\\u00e9s, d'autres peuvent \\u00eatre gratuits ou payants - parcourez notre s\\u00e9lection et d\\u00e9couvrez ceux disponibles !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"D\\u00e9couvrez notre s\\u00e9lection de modules dans le 1er onglet. G\\u00e9rez vos modules dans le second, et soyez avertis des alertes dans le troisi\\u00e8me onglet.\",\"options\":[\"savepoint\"],\"page\":\"\\/Presta\\/admin735kcaaj4\\/index.php\\/improve\\/modules\\/catalog?_token=FWQ67IUCE45IcmBDcAOPe-zdiQpEhQEMDduoQcWEh40\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00c0 vous de jouer !<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Vous avez vu l'essentiel, mais il y en a bien plus \\u00e0 d\\u00e9couvrir.<br \\/>\\n          Ces ressources vous aideront \\u00e0 aller plus loin :\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Guide de d\\u00e9marrage<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Formation<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutoriels Vid\\u00e9o<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Je suis pr\\u00eat<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminWelcome&token=629da9a7443348c33c0dfc3cbc5f9e0f\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Vous êtes perdu ?</p>    <p>Pour continuer, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuer</button>    </div>    <p>Pour quitter le tutoriel de façon définitive, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quitter le tutoriel de bienvenue</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Étape <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Suivant</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1397
        $this->displayBlock('content_header', $context, $blocks);
        // line 1398
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1399
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1400
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1401
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/Presta/admin735kcaaj4/index.php?controller=AdminDashboard&amp;token=09c09ae3b636d9801d17f580f0a630f2\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=urbs.aina%40gmail.com&amp;firstname=Urbain&amp;lastname=HERINIAINA&amp;website=http%3A%2F%2Flocalhost%2FPresta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/Presta/admin735kcaaj4/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=urbs.aina%40gmail.com&amp;firstname=Urbain&amp;lastname=HERINIAINA&amp;website=http%3A%2F%2Flocalhost%2FPresta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1508
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1397
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1398
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1399
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1400
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1508
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__4ccee00f14efaa72ce82b3c871fb615891381f7a5369d8e59fa668b66eaea8de";
    }

    public function getDebugInfo()
    {
        return array (  1598 => 1508,  1593 => 1400,  1588 => 1399,  1583 => 1398,  1578 => 1397,  1569 => 106,  1561 => 1508,  1452 => 1401,  1449 => 1400,  1446 => 1399,  1443 => 1398,  1441 => 1397,  146 => 106,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4ccee00f14efaa72ce82b3c871fb615891381f7a5369d8e59fa668b66eaea8de", "");
    }
}
