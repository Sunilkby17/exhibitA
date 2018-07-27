<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <base href="/">

    <title ng-bind="context.head.title">Futuramo – Collaboration Platform for Teams</title>
    <meta name="description" ng-attr-content="{{context.head.description}}" content="Futuramo offers a suite of work management tools for teams working on digital projects. Foster collaboration between teams, clients and businesses.">
    <meta name="author" content="FUTURAMO">
    <meta name="robots" ng-attr-content="{{context.head.robots || &apos;all&apos;}}" content="all">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <!-- Social meta -->
    <meta property="og:url" content="https://futuramo.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" ng-attr-content="{{context.head.socialMeta.title}}" content="Futuramo - Collaboration Platform for Teams">
    <meta property="og:image" ng-attr-content="{{context.head.socialMeta.image}}" content="https://futuramo.com/assets/css/images/social-meta-futuramo.png">
    <meta property="og:site_name" content="futuramo.com">a
    <meta property="og:description" ng-attr-content="{{context.head.socialMeta.description}}" content="Futuramo offers a suite of work management tools for teams working on digital projects. Foster collaboration between teams, clients and businesses.">

    <!-- Manifest file -->
    <link rel="manifest" href="assets/favicons/manifest.json">
    <link rel="canonical" ng-if="context.head.canonical" ng-attr-href="{{context.head.canonical}}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon-180x180.png">

    <link ng-repeat="image in context.head.favicons.images" rel="icon" type="image/png" ng-href="{{image.path}}" ng-attr-sizes="{{image.size}}">

    <link rel="shortcut icon" type="image/x-icon" ng-href="{{context.head.favicons.default}}">


    <!-- default icon for old browsers -->

    <!-- icon for opera speed dial -->
    <!-- <link rel="shortcut icon" type="image/png" sizes="195x195" href="assets/favicons/opera-speed-dial.png"/>  -->

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicons/mstile-144x144.png">
    <!-- Custom Tiles for IE 11+ on Windows 8.1+ -->
    <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="preload" as="style" type="text/css" onload="this.rel=&apos;stylesheet&apos;" href="assets/css/3835b8b0.preload.css">

    <link rel="stylesheet" href="assets/css/258f8eab.styles.css">

    <link rel="stylesheet" href="assets/css/ded512d2.static.css">

    <!-- net -->
    <meta name="google-site-verification" content="3QHXp0b-Adqc-ASLKcWF3E4DuSYXf0VMvnUya8cBmzk">

</head>
<body id="home-app" ng-class="{&apos;with-sticky-version-bar&apos;: modConfig.StickyVersionBar}">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKSZ2CK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<noscript>turn on javascript in your browser</noscript>

<!-- SVG SOURCE -->	<mod-ui-icons-init urls="assets/css/svg/ui-icons.svg, assets/css/svg/svg-icons.svg"></mod-ui-icons-init>
<!-- SVG SOURCE ends-->

<div mod-impersonating-now=""></div>
<div mod-layer=""></div>
<div mod-mask-layer=""></div>
<div mod-dialog=""></div>
<div mod-cookies-info=""></div>

<div mod-watchers-count="" ng-if="modConfig.WatchersCount"></div>

<mod-hubspot-chat></mod-hubspot-chat>

<main class="page-for-preloading at-home" ng-class="context.route.layout">
    <div mod-version-box="apiData.version.full" front-version="{
				appName: &apos;app-home&apos;,
				appVersion: &apos;1.2.505&apos;,
				timestamp: &apos;2018-04-20 12:35&apos;
			}" class="at-home"></div>
    <div class="selectable-text" background-blur="">
        <mod-home-navigation></mod-home-navigation>
        <div id="home" mod-reset-scroll="" du-scroll-container="">
            <div ui-view="" class="home-view"></div>
            <mod-footer></mod-footer>
        </div>
    </div>
</main>

<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyC5cMYY_t76heq0w3JyS84GMMTOBK1z94w"></script>

<script src="assets/js/9f63fc1e.lib.js"></script>

<script src="assets/js/3358a471.mod.js"></script>

<script src="assets/js/67162005.core.js"></script>

<script src="assets/js/e3552754.app-stack.js"></script>

<script src="assets/js/d617db5b.auth-layer.js"></script>

<script src="assets/js/940fc8a8.app.js"></script>

<script src="assets/js/ee252f07.shop.js"></script>

<script src="assets/js/a11ef960.static.js"></script>

<script>
    angular.element(document).ready( function() {
        var initInjector = angular.injector(['ng']);
        var $http = initInjector.get('$http');

        $http.get('/config.json').then(
            function (response) {
                window.injectedConfigJson = response.data;
                // Google Tag Manager
                (function(w,d,s,l,i){if(!i)return;w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer', window.injectedConfigJson.TagManagerId);
                // End Google Tag Manager

                // Facebook Pixel Code
                !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                    document,'script','https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '241245523060467'); // Insert your pixel ID here.
                fbq('track', 'PageView');
                // End Facebook Pixel Code

                // Hotjar Tracking Code for Futuramo - MODIFIED TO SUPPORT DIFFERENT ENVIRONMENTS
                (function(h,o,t,j,a,r){
                    var id = window.injectedConfigJson.HotjarId;
                    if (id) {h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                        h._hjSettings={hjid:id,hjsv:6};
                        a=o.getElementsByTagName('head')[0];
                        r=o.createElement('script');r.async=1;
                        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                        a.appendChild(r);}
                })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
                // End Hotjar Tracking Code for Futuramo

                // Run angular APP
                angular.bootstrap(document, ['appHomeClientWebApp']);
            }, function myError(response) {
                var text = document.createTextNode('Oops! Something went wrong.');
                var element = document.createElement("p");
                element.style.position = "relative";
                element.style.fontSize = "16px";
                element.style.margin = "1em";
                element.prepend(text);
                document.body.appendChild(element);
            }
        );
    });
</script>


<!-- Begin Templates -->
<script type="text/ng-template" id="common/components/carousel/carousel.html">
    <div><ng-transclude class="carousel-wrapper"></ng-transclude><div class="carousel-nav" ng-if="carouselCtrl.shouldDisplayButton()" ng-mouseover="carouselCtrl.mouseover()" ng-mouseleave="carouselCtrl.mouseleave()"><div class="arrow arrow-left" ng-click="carouselCtrl.prev()"><mod-ui-icon icon-id="i-home-arrow-left" view-box="0 0 32 32"></mod-ui-icon></div><div class="arrow arrow-right" ng-click="carouselCtrl.next()"><mod-ui-icon icon-id="i-home-arrow-right" view-box="0 0 32 32"></mod-ui-icon></div></div></div>
</script>

<script type="text/ng-template" id="common/components/menu-slider/menu-slider.component.html">
    <nav class="mod-menu-slider slider"><ng-transclude ng-transclude-slot="controlPrev" ng-click="$ctrl.onPrev()" class="slider-control-container"><div class="slider-control slider-control-prev"><mod-ui-icon icon-id="i-arrow-ultra-slim" view-box="0 0 24 24"></mod-ui-icon></div></ng-transclude><div class="slider-elements"><ng-transclude ng-transclude-slot="iteratee" ng-click="$ctrl.onSelect(id)" ng-repeat="(id, desc) in $ctrl.options | _mapToObject" ng-class="{'active': id === $ctrl.current}" class="slider-element-container"></ng-transclude></div><ng-transclude ng-transclude-slot="controlNext" ng-click="$ctrl.onNext()" class="slider-control-container"><div class="slider-control slider-control-next"><mod-ui-icon icon-id="i-arrow-ultra-slim" view-box="0 0 24 24"></mod-ui-icon></div></ng-transclude></nav>
</script>

<script type="text/ng-template" id="common/components/scroll-indicator/scroll-indicator.html">
    <div class="scroll-indicator" ng-click="$ctrl.smoothScroll()"><span class="scroll-wheel"></span></div>
</script>

<script type="text/ng-template" id="common/components/scroll-side-navigation/scroll-side-navigation.html">
    <div class="mod-scroll-side-navigation"><ul><li ng-repeat="navItem in $ctrl.navElements" class="scroll-side-item" ng-click="$ctrl.scrollToNavElement(this)" du-smooth-scroll></li></ul></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/shop-layer.html">
    <div id="shop-layer" ng-controller="shopLayer"><div mod-preloader></div><section><header><h1>{{modShopService.get.productLabel()}}</h1><h2 ng-show="modShopService.get.licenseTemplateLabel()">You are buying ({{modShopService.get.licenseTemplateLabel()}})</h2></header><div class="tabs"><div class="tab" ng-repeat="item in modShopLayerStates.LIST" ng-class="{'current': $index === layer.state.step, 'disabled': !layer.state.visitedSteps[$index]}" ng-click="goToStep($index)"><span>{{item.name}}</span><mod-ui-icon ng-class="{validate: layer.state.validatedSteps[item.name]}" icon-id="i-checked-bold"></mod-ui-icon></div></div><div class="content-wrapper"><article><div ng-repeat="item in modShopLayerStates.LIST" ng-if="$index === layer.state.step" class="steps" ng-include="'common/components/shop-layer/steps/step-'+ ($index+1) + '.html'"></div><div ng-repeat="specialStep in modShopLayerStates.SPECIAL_LIST" ng-if="specialStep.name === layer.state.step" class="steps" ng-include="'common/components/shop-layer/steps/step-'+ specialStep.name + '.html'"></div></article><div class="buttons"><button class="next-btn" ng-click="buttonAction('next')" ng-class="{
					visible: isButtonVisible('next'),
					disabled: isButtonDisabled('next')
				}">Continue<mod-ui-icon icon-id="i-arrow-slim"></mod-ui-icon></button> <button class="pay-btn" ng-click="buttonAction('pay')" ng-class="{
					visible: isButtonVisible('pay'),
					disabled: isButtonDisabled('pay')
				}">Pay now</button> <button class="coupon-pay-btn" ng-click="buttonAction('coupon-pay')" ng-class="{
					visible: isButtonVisible('coupon-pay'),
					disabled: isButtonDisabled('coupon-pay')
				}">Get now</button> <button class="prev-btn" ng-click="buttonAction('prev')" ng-class="{
					visible: isButtonVisible('prev'),
					disabled: isButtonDisabled('prev')
				}">Back</button> <button class="retry-btn" ng-click="buttonAction('retry')" ng-class="{
					visible: isButtonVisible('retry'),
					disabled: isButtonDisabled('retry')
				}">Retry</button> <button class="open-dashboard-btn" ng-click="buttonAction('open-dashboard')" ng-class="{
					visible: isButtonVisible('open-dashboard'),
					disabled: isButtonDisabled('open-dashboard')
				}">Close</button></div></div><div class="footer"></div></section></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/steps/step-1.html">
    <div ng-controller="shopLayerStep-1" class="step"><fieldset class="help-opener"><button ng-click="helpShown = !helpShown" tabindex="-1"><mod-ui-icon icon-id="i-info"></mod-ui-icon></button></fieldset><div class="context-help" ng-class="{shown: helpShown}"><div class="header"><h3>Help</h3><button class="close" ng-click="helpShown = false"><mod-ui-icon icon-id="i-arrow-slim"></mod-ui-icon></button></div><div class="help-content"><h4>LICENSES SCREEN</h4><p>You’re in the buying app wizard now. The wizard will guide you through the buying licenses process. You’re in the “licenses” bookmark now. It’s the first out of four steps. In this bookmark you have to:</p><ul><li>Choose the organization you want to buy the app for. The licenses will be available only for this organization.</li><li>Change the number of the licenses you want to buy.</li><li>Choose if you want to assign the license to yourself or not (in the bottom box).</li></ul><p>When you are ready click the “continue” button in the bottom. To resign click the cross button in the top right corner (this will cancel the buying process).</p></div></div><div class="form-wrapper"><form name="formStep1" class="step1 mod-form" novalidate mod-form-valid-info><legend ng-if="!layer.model.prolongateLicenses.length">Buy the licenses for organization</legend><legend ng-if="layer.model.prolongateLicenses.length">Renew the license for organization</legend><mod-select-container><label>select your organization</label><select name="organization" ng-model="layer.model.organization.id" ng-options="item.id as item.name | modNameParser for item in organizations" required ng-change="onSelectOrganization()" ng-disabled="layer.model.prolongateLicenses.length" data-hj-suppress=""></select><div ng-messages="formStep1.organization.$error"><div ng-message="required">Organization required is required.</div></div></mod-select-container><div ng-switch="!layer.model.prolongateLicenses.length" class="mod-shop-directives"><div ng-switch-when="true"><pricing-licenses model="layer.model" mod-price-props="{
							showUnitPrice: layer.model.num > 1
						}"></pricing-licenses></div><div ng-switch-when="false"><mod-shop-license-templates ng-if="layer.model.prolongateLicenses.length" class="mod-license-templates" model="layer.model" model-change="onSelectLicenseTemplate()" app-name="appName" default="{{defaultLicenseTemplateId}}"></mod-shop-license-templates></div></div><mod-input-container ng-if="!layer.model.prolongateLicenses.length"><label for="addSelf">Assign one license to me automatically</label><input type="checkbox" id="addSelf" name="addSelf" ng-model="layer.model.addSelf"></mod-input-container></form></div></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/steps/step-2.html">
    <div ng-controller="shopLayerStep-2" class="step"><fieldset class="help-opener"><button ng-click="helpShown = !helpShown" tabindex="-1"><mod-ui-icon icon-id="i-info"></mod-ui-icon></button></fieldset><div class="context-help" ng-class="{shown: helpShown}"><div class="header"><h3>Help</h3><button class="close" ng-click="helpShown = false"><mod-ui-icon icon-id="i-arrow-slim"></mod-ui-icon></button></div><div class="help-content"><h4>INVOICE SCREEN</h4><p>You’re in the second bookmark in the buying app wizard now. It’s the second out of four steps. In this bookmark you should:</p><h4>For business</h4><ul><li>Give the company datas: legal name, address, postal code, city and country.</li><li>Buying as a company you need to choose your VAT ID option and enter your VAT ID (if you have one)</li></ul><p>If your company is based in one of the countries of European Union (except Poland) and this transaction is under the intra-Community supply of services you should choose option “I have EU VAT ID“, in other case &ndash; choose "I have non-EU VAT ID".</p><p><strong>*You are required to provide complete and true information in accordance with the intructions. All data in this form must be true!</strong></p><p>When you are ready click the “continue” button in the bottom. If you want to go back to correct something in the previous steps click the “back” button. To resign click the cross button in the top right corner (this will cancel the buying process).</p><h4>For individuals</h4><ul><li>Give your first name and last name, your address, postal code, city and country.</li><li>You should select "Private use", only if you will use the Icons purely for private and noncommercial purposes.</li><li>You should select "Commercial use", if you will use the Icons for purposes related to commercial, professional, craft use or to execute the contract<br>(eg. copyright contract work) with a third party.</li></ul><p><strong>*You're required to provide complete and true information in accordance of the instructions. All data in this form must be true!</strong></p><p>When you are ready click the “continue” button in the bottom. If you want to go back to correct something in the previous steps click the “back” button. To resign click the cross button in the top right corner (this will cancel the buying process).</p></div></div><div class="form-wrapper"><legend>Licensee and invoice data</legend><mod-finances-form model="layer.model" force-legal-form="layer.model.prolongateLicenses.length" countries-data="countries" countries-data-map="countriesMap" form-obj="formObj"></mod-finances-form></div></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/steps/step-3.html">
    <div ng-controller="shopLayerStep-3" class="step"><fieldset class="help-opener"><button ng-click="helpShown = !helpShown" tabindex="-1"><mod-ui-icon icon-id="i-info"></mod-ui-icon></button></fieldset><div class="context-help" ng-class="{shown: helpShown}"><div class="header"><h3>Help</h3><button class="close" ng-click="helpShown = false"><mod-ui-icon icon-id="i-arrow-slim"></mod-ui-icon></button></div><div class="help-content"><h4>CONFIRMATION SCREEN</h4><p>You’re in the “confirmation” bookmark now, it's the third out of four steps.<br>In this bookmark you can see a summary of the data you entered previously. You need to check if all the data are complete and true. If everything is correct click “continue” button. If there are any mistakes or you wish to change something click the “back” button. To resign click the cross button in the top right corner (this will cancel the buying process).</p></div></div><div class="form-wrapper"><form name="formStep3" class="step3 mod-form" novalidate><legend>Order summary and confirmation</legend><hr><fieldset><ul class="summary-list"><li><span class="label">Application</span> <span class="value">{{layer.model.licenseTemplate.label}}</span></li><li><span class="label">For organization</span> <span class="value noted" data-hj-suppress="">{{layer.model.organization.name | modNameParser}}<br><span class="grey note">(ID {{layer.model.organization.id | modObjectIdParser}})</span></span></li><li ng-show="layer.model.legalForm == 'business'"><span class="label">Licensee type</span> <span class="value">{{layer.model.legalForm | capitalize}}</span></li><li ng-show="layer.model.legalForm == 'individual'"><span class="label">Subscription purpose</span> <span class="value noted">Individual <span ng-if="layer.model.invoice.individual.use == 'private'" class="grey note"><br>(Private use)</span> <span ng-if="layer.model.invoice.individual.use == 'commercial'" class="grey note"><br>(Private and commercial use)</span></span></li><li><span class="label" ng-show="layer.model.legalForm == 'business'">Legal name (licensee)</span> <span class="label" ng-show="layer.model.legalForm == 'individual'">Licensee name</span> <span class="value" ng-show="layer.model.legalForm == 'business'" ng-class="{noted: layer.model.invoice.business.vat.type != 'NONE'}">{{layer.model.invoice.business.addressData.name | modNameParser}} <span class="grey note" ng-show="layer.model.invoice.business.vat.type=='GLOBAL'"><br>(VAT ID: {{layer.model.invoice.business.vat.id}})</span> <span class="grey note" ng-show="layer.model.invoice.business.vat.type=='EU'"><br>(VAT ID: {{layer.model.invoice.business.vat.country}}{{layer.model.invoice.business.vat.id}})</span></span> <span class="value" ng-show="layer.model.legalForm == 'individual'">{{layer.model.invoice.individual.addressData.name | modNameParser}}</span></li><li><span class="label">No. of licenses</span> <span class="value">{{layer.model.num}}</span></li><li ng-if="!layer.model.prolongateLicenses.length"><span class="label">Assign one to me</span> <span class="value">{{(layer.model.addSelf ? 'yes' : 'no')}}{{(hasLicenseInOrg(layer.model.licenseTemplate.id, layer.model.organization.id) ? ' (got already)' : '(!)')}}</span></li><li ng-switch on="layer.model.licenseTemplate.id"><span class="label">Subscription period</span> <span class="value">{{modShopService.get.licenseTemplateDurationString()}}</span></li><li><span class="label">Total excl. VAT</span> <span class="value">${{modShopService.get.priceNetto()}}</span></li><li><span class="label">VAT amount and rate</span> <span class="value">${{layer.model.vat}} ({{modShopService.get.vatRateString()}})</span></li><li class="total"><span class="label">Total incl. VAT</span> <span class="value">${{modShopService.get.price()}}</span> <span class="value before-coupon" ng-show="layer.model.coupon.Id">${{modShopService.get.price( serviceData.formData.licenseTemplate.id, serviceData.formData.num, serviceData.formData.legalForm, null )}}</span> <span class="value coupon-percent" ng-show="layer.model.coupon.Id">(Discount {{layer.model.coupon.PercentDiscount.toFixed(0)}}%)</span></li><li id="coupon-input-step3" class="coupon" ng-if="layer.model.licenseTemplate.requireCoupon"><mod-input-container><label>Coupon code</label><input placeholder="If you have a coupon code enter it here" type="text" name="coupon" ng-model="layer.model.coupon.Code" tabindex="2" required regex serverdefault unapplied ng-disabled="layer.model.coupon.Id.length" model-change="resetValidation()"><div ng-messages="formStep3.coupon.$error"><div ng-message="required">Coupon is required for this license.</div><div ng-message="regex">Invalid coupon code.</div><div ng-message="serverdefault">{{couponErrorMsg}}.</div><div ng-message="unapplied">You need to apply your coupon code first.</div></div></mod-input-container><button type="button" class="reset step-3" ng-if="layer.model.coupon.Code.length > 0" ng-click="resetCoupon()"><mod-ui-icon icon-id="i-cancel"></mod-ui-icon></button> <button type="submit" class="apply step-3" ng-if="layer.model.coupon.Code.length > 0 && !layer.model.coupon.Id" ng-click="applyCoupon()">Apply</button></li><li id="coupon-input-step3" class="coupon" ng-if="!layer.model.licenseTemplate.requireCoupon"><mod-input-container><label>Coupon code</label><input placeholder="If you have a coupon code enter it here" type="text" name="coupon" ng-model="layer.model.coupon.Code" regex serverdefault unapplied ng-disabled="layer.model.coupon.Id.length" model-change="resetValidation()"><div ng-messages="formStep3.coupon.$error"><div ng-message="regex">Invalid coupon code.</div><div ng-message="serverdefault">{{couponErrorMsg}}.</div><div ng-message="unapplied">You need to apply your coupon code first.</div></div></mod-input-container><button type="button" class="reset step-3" ng-if="layer.model.coupon.Code.length > 0" ng-click="resetCoupon()"><mod-ui-icon icon-id="i-cancel"></mod-ui-icon></button> <button type="submit" class="apply step-3" ng-if="layer.model.coupon.Code.length > 0 && !layer.model.coupon.Id" ng-click="applyCoupon()">Apply</button></li><li class="coupon-msg"><span class="back-msg" ng-if="layer.model.coupon.Id">Going back will reset the code so you'll have to enter it again.</span></li></ul></fieldset></form></div></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/steps/step-4.html">
    <div ng-controller="shopLayerStep-4" class="step"><fieldset class="help-opener"><button ng-click="helpShown = !helpShown" tabindex="-1"><mod-ui-icon icon-id="i-info"></mod-ui-icon></button></fieldset><div class="context-help" ng-class="{shown: helpShown}"><div class="header"><h3>Help</h3><button class="close" ng-click="helpShown = false"><mod-ui-icon icon-id="i-arrow-slim"></mod-ui-icon></button></div><div class="help-content"><h4>PAYMENT SCREEN</h4><p>You’re in the “payment” bookmark now, the fourth and last step in the buying app wizard.<br><strong>This is your last chance to change something in the buying apps wizard.</strong> If you want to go back to correct something in the previous steps click the “back” button. If everything is correct you need to choose the payment method, make sure that the circle next to this particular method is filled by a dot. If it's not, click on it. Then click the “pay now” button. After clicking “pay now” you will be redirected to the selected site of the electronic payment system in order to complete the payment. Follow the instructions there. After completing all the actions on selected site of the electronic payment system you will be redirected back to Futuramo buying wizard.<br>To resign click the cross button in the top right corner (this will cancel the buying process).</p></div></div><div class="form-wrapper"><form name="formStep4" class="step4" novalidate ng-show="layer.model.paymentMethod != 'coupon'"><legend class="inset">Payment method</legend><hr><fieldset class="payment"><div><input type="radio" id="paypal" name="radio" ng-model="layer.model.paymentMethod" value="paypal" required><label class="paypal" for="paypal"><span><i ng-if="layer.model.paymentMethod != 'paypal'"><mod-ui-icon icon-id="i-form-radio-off"></mod-ui-icon></i> <i ng-if="layer.model.paymentMethod == 'paypal'"><mod-ui-icon icon-id="i-form-radio-on"></mod-ui-icon></i></span><div class="paylogo"></div></label><p>You will be redirected to PayPal site</p></div><div><input type="radio" id="dotpay" name="radio" ng-model="layer.model.paymentMethod" value="dotpay" required><label class="dotpay" for="dotpay"><span><i ng-if="layer.model.paymentMethod != 'dotpay'"><mod-ui-icon icon-id="i-form-radio-off"></mod-ui-icon></i> <i ng-if="layer.model.paymentMethod == 'dotpay'"><mod-ui-icon icon-id="i-form-radio-on"></mod-ui-icon></i></span><div class="dotpaylogo"></div></label><p>You will be redirected to Dotpay site</p></div></fieldset><hr><div class="paymentMethod-validation" ng-show="formStep4.$invalid && formStep4.$submitted">Select payment method.</div></form><p ng-show="layer.model.paymentMethod == 'coupon'"><legend class="inset"><span class="title">Almost there!</span> <span>You are about to receive licenses with 100% discount<br>(free of charge). Just click "Get Now" and enjoy FUTURAMO.</span></legend></p></div></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/steps/step-critical.html">
    <div ng-controller="shopLayerStep-special" class="step"><h3 class="error">Sorry :(</h3><pre>{{layer.state.message | json}}</pre></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/steps/step-error.html">
    <div ng-controller="shopLayerStep-special" class="step"><h3 class="error">Sorry :(</h3><pre class="selectable-text">{{layer.state.message}}</pre></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/steps/step-processing.html">
    <div ng-controller="shopLayerStep-special" class="step"><h3>Processing...</h3><pre>{{layer.state.message | json}}</pre><p>Please wait while you're being redirected to the selected payment provider's secure window...</p></div>
</script>

<script type="text/ng-template" id="common/components/shop-layer/steps/step-success.html">
    <div ng-controller="shopLayerStep-special" class="step"><h3>Done!</h3><pre>{{layer.state.message | json}}</pre><p ng-show="layer.model.paymentMethod != 'coupon'">The payment process has been started by the payment provider. It usually takes seconds to complete, but a slight delay may occur. We'll send you a notification if the automatic charge was successful. Please check your mail.</p></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/auth-menu.html">
    <div class="row justify-content-start"><div ng-class="{selected: $ctrl.tabName == 'signin' || $ctrl.tabName == 'forgotpass'}" class="menu-btn" ng-click="$ctrl.onClick('login')">LOG IN</div><div ng-class="{selected: $ctrl.tabName == 'signup' || $ctrl.tabName == 'register'}" class="menu-btn" ng-click="$ctrl.onClick('register')">SIGN UP</div></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/confirmation-error/confirmation-error-layer.html">
    <section class="auth-layer"><div class="response warn"><h1 class="error">Caution<br><strong class="error">Incorrect confirmation link!</strong></h1><p>Something obviously went wrong! There might be several reasons, check the list below:</p><div><ul><li><p>Your account has already been created</p><a class="btn submit" ng-href="/login?email={{email | urlEscape}}">log in</a></li><li><p>Something else went wrong</p><a class="btn submit" ng-href="/register">create account</a></li></ul></div></div></section>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/confirmation/confirmation-layer.html">
    <div class="auth-layer" ng-controller="confirmationLayer"><section><div class="response info"><h1>Congratulations! Your email address has been confirmed!</h1><p>Your email address <strong ng-bind="email"></strong> has been successfully confirmed.<br>Use your email address and your password to log in and enjoy Futuramo.</p><a class="btn submit" ng-href="/login?email={{email | urlEscape}}">LOG IN</a></div></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/coupon/coupon-layer.html">
    <div class="auth-layer" ng-controller="couponLayer"><section><div class="form-wrapper"><form novalidate name="couponForm" class="mod-form"><legend>Take Futuramo Tasks for a spin!</legend><p>Subscribe to get an early access coupon<br>and be notified of the official launch!</p><mod-input-container><label>Name</label><input type="text" name="firstName" ng-model="formData.firstName" tabindex="1" required ng-minlength="2" ng-maxlength="128" serverregex autofocus><div ng-messages="couponForm.email.$error"><div ng-message="required">Name is required.</div><div ng-message="minlength">Name is too short.</div><div ng-message="maxlength">Name is too long.</div><div ng-message="serverregex">Name has wrong format.</div></div></mod-input-container><mod-input-container><label>Email</label><input type="email" name="email" ng-model="formData.email" tabindex="2" required ng-maxlength="128" serverunique serverregex ng-disabled="forceEmail" autofocus><div ng-messages="registerForm.email.$error"><div ng-message="email">Email is invalid.</div><div ng-message="required">Email is required.</div><div ng-message="maxlength">Email is too long.</div><div ng-message="serverregex">Email has wrong format.</div><div ng-message="serverunique">Email is already taken.</div></div></mod-input-container><button class="btn submit" tabindex="5" ng-click="submitForm()">subscribe</button></form></div></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/demo/demo-layer.html">
    <div id="demo-layer" class="auth-layer"><section><legend>Request a demo</legend><p>If you want to learn more about Futuramo, request a personal demo<br>- our team will contact you as soon as possible. You can still start using Futuramo for free now!</p><mod-hubspot-meetings></mod-hubspot-meetings></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/email-confirmed/email-confirmed-layer.html">
    <section class="auth-layer"><h1>Congratulations! Your email address has been confirmed!</h1><p>Your email address <strong ng-bind="email"></strong> has been successfully confirmed.<br>You can now use this email address and your password to log in to Futuramo.<br>All the other email addresses are still valid.</p><a class="btn submit" ng-href="/app/my-futuramo">My Futuramo</a></section>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/email-error/email-error-layer.html">
    <section class="auth-layer" ng-controller="emailErrorLayer"><h1 class="error">Caution Email confirmation unsuccessful!</h1><p ng-bind-html="msg"></p><div ng-if="!loggedIn"><ul><li><p>Log in to {{(reason == 'wrong_account') ? 'the correct' : 'an existing'}} account</p><a class="btn submit" ng-href="/login{{::email}}">log in</a></li></ul></div></section>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/facebook-register/facebook-register-layer.html">
    <div class="auth-layer" ng-controller="facebookFinalize"><section><div class="form-wrapper"><form class="mod-form" novalidate name="finalizeForm"><legend class="auth-layer-header">I agree to...</legend><div class="container"><mod-input-container><label for="terms"><a ng-href="/terms-of-use#terms-of-use" target="_balnk">Terms of Use and Privacy Policy</a></label><input type="checkbox" id="terms" ng-model="formData.terms" name="terms" tabindex="5" required><div ng-messages="finalizeForm.terms.$error"><div ng-message="required">Terms of use and Privacy Policy is required.</div></div></mod-input-container><mod-input-container><label><a ng-href="/terms-of-use#personal-data" tabindex="-1" target="_balnk">the processing of personal data</a> necessary for providing the service</label><input type="checkbox" id="policy" ng-model="formData.policy" name="policy" tabindex="6" required><div ng-messages="finalizeForm.policy.$error"><div ng-message="required">Consent to the Processing of Personal Data is required</div></div></mod-input-container></div><button class="btn submit" tabindex="7" ng-disabled="finalizePending" ng-click="createClick()">sign up</button></form></div></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/forgot-password/forgot-password-layer.html">
    <div class="auth-layer" ng-controller="forgotPasswordLayer"><auth-layer-menu tab-name="forgotpass"></auth-layer-menu><section><form class="mod-form" novalidate name="forgotForm" mod-form-autofill-fix ng-submit="requestForgotPasswordSubmit()"><legend>Forgot your password?</legend><p>Enter the email address you used to sign up.<br>We will send you further instructions.</p><mod-input-container><label>Email address</label><input type="email" name="email" ng-model="credentials.login" ng-focus="focusForgotEmail = true" required tabindex="1" ng-minlength="6" ng-change="onChange()"><div ng-messages="forgotForm.email.$error"><div ng-message="servernotfound">Email not found</div><div ng-message="serverdefault">An error has occured</div><div ng-message="required">Email is required</div><div ng-message="email">Email has wrong format</div><div ng-message="custom" ng-bind="forgotForm.email.customMessage"></div></div></mod-input-container><button class="btn submit" ng-disabled="resetPending || forgotForm.$error.custom">Reset my password</button></form></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/google-register/google-register-layer.html">
    <div class="auth-layer" ng-controller="googleFinalize"><section><div class="form-wrapper"><form class="mod-form" novalidate name="finalizeForm"><legend class="auth-layer-header">I agree to...</legend><div class="container"><mod-input-container><label for="terms"><a ng-href="/terms-of-use#terms-of-use" target="_balnk">Terms of Use and Privacy Policy</a></label><input type="checkbox" id="terms" ng-model="formData.terms" name="terms" tabindex="5" required><div ng-messages="finalizeForm.terms.$error"><div ng-message="required">Terms of use and Privacy Policy is required.</div></div></mod-input-container><mod-input-container><label><a ng-href="/terms-of-use#personal-data" tabindex="-1" target="_balnk">the processing of personal data</a> necessary for providing the service</label><input type="checkbox" id="policy" ng-model="formData.policy" name="policy" tabindex="6" required><div ng-messages="finalizeForm.policy.$error"><div ng-message="required">Consent to the Processing of Personal Data is required</div></div></mod-input-container></div><button class="btn submit" tabindex="7" ng-disabled="finalizePending" ng-click="createClick()">sign up</button></form></div></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/invitation-error/invitation-error-layer.html">
    <div class="auth-layer"><section><h1 class="error">Caution Incorrect invitation link!</h1><p>The link you have clicked is no longer active. Contact the person who sent you the invitation.</p></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/login/login-layer.html">
    <div class="auth-layer" ng-controller="loginLayer"><auth-layer-menu tab-name="signin"></auth-layer-menu><form name="loginForm" method="post" target="iframeLoginFormTarget" ng-submit="loginSubmit()" class="mod-form login" novalidate mod-form-valid-info><fieldset><div ng-show="errorMsg" class="error" ng-bind-html="errorMsg"></div><legend ng-show="!errorMsg">Log in to Futuramo</legend><mod-input-container><label for="email">Email address</label><input type="email" id="email" name="login" ng-model="credentials.login" required tabindex="1"><div ng-messages="loginForm.email.$error"><div ng-message="email">Email is invalid.</div><div ng-message="required">Email is required.</div></div></mod-input-container><mod-input-container><label for="password">Password</label><input type="password" id="password" name="password" ng-model="credentials.password" required tabindex="2"><div ng-messages="loginForm.email.$error"><div ng-message="required">Email is required.</div></div></mod-input-container><div class="row justify-content-between"><div class="col-7 remember"><mod-input-container><label for="remember">Keep me signed in</label><input type="checkbox" id="remember" ng-model="credentials.remember" name="remember" tabindex="3"></mod-input-container></div><div class="col-5"><a class="forgot-link" mod-ga-track="Forgot password" ng-click="openForgot()">Forgot Password?</a></div></div><button class="btn submit" ng-disabled="loginPending" tabindex="4">log in</button></fieldset></form><iframe src="" name="iframeLoginFormTarget" id="iframeLoginFormTarget" style="display:none"></iframe><div class="social-button"><mod-social-auth-button></mod-social-auth-button></div></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/register-inactive/register-inactive-layer.html">
    <div class="auth-layer" ng-controller="inactiveLayer"><section><h2 ng-if="error" class="error">{{error}}</h2><article ng-show="step == 1"><h1>Caution Verify your email to complete your registration.</h1><p>We sent a verification email to <strong data-hj-suppress>{{email}}</strong>.<br>Please follow the instructions given in the email.</p><p>If you didn't receive that email or you need to receive it again - please click the button below.</p><button type="button" class="btn submit" ng-click="resend()">Resend the verification email</button></article><article ng-show="step == 2"><h1>Caution Verify your email to complete your registration.</h1><p>We've sent a verification email to <strong data-hj-suppress>{{email}}</strong><br>Please follow the instructions given in our email.</p><a class="btn submit" ng-href="/login?email={{email | urlEscape}}">Proceed to sign-in</a></article></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/register-response/register-response-layer.html">
    <div class="auth-layer"><auth-layer-menu tab-name="register"></auth-layer-menu><div class="response"><h1><small>Thanks for registering!</small><br>Please confirm your email.</h1><p>A confirmation email has been sent to you at<br><strong data-hj-suppress>{{layer.data.email}}</strong></p><p class="interspace">Click on the link in that email to <strong>activate your account.</strong></p></div></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/register/register-layer.html">
    <div class="auth-layer" ng-controller="registerLayer"><auth-layer-menu tab-name="signup"></auth-layer-menu><form class="mod-form register" novalidate name="registerForm" mod-form-valid-info><fieldset><input type="email" value="{{formData.email}}" class="fake-form-field"> <input type="password" value="{{formData.password}}" class="fake-form-field"><legend>Sign up for Futuramo</legend><div class="order-items"><mod-input-container class="order-1"><label for="email">Email address</label><input type="email" id="email" name="email" ng-model="formData.email" tabindex="1" required ng-maxlength="128" serverregex serverunique ng-disabled="forceEmail"><div ng-messages="registerForm.email.$error"><div ng-message="email">Email is invalid.</div><div ng-message="required">Email is required.</div><div ng-message="maxlength">Email is too long.</div><div ng-message="serverregex">Email has wrong format.</div><div ng-message="serverunique">Email is already taken.</div></div></mod-input-container><mod-input-container class="order-3"><label for="password">Choose your password</label><input type="password" id="password" name="password" ng-model="formData.password" tabindex="4" required ng-maxlength="64" ng-minlength="8" serverregex><div ng-messages="registerForm.password.$error"><div ng-message="required">Password is required.</div><div ng-message="minlength">Password is too short.</div><div ng-message="maxlength">Password is too long.</div><div ng-message="serverregex">Password must contain 8-64 characters.</div></div></mod-input-container><div class="row order-2"><div class="col-12 col-md-6"><mod-input-container><label for="firstName">First name</label><input type="text" id="firstName" name="firstName" ng-model="formData.firstName" tabindex="2" required ng-maxlength="128" ng-minlength="2" ng-pattern="nameRegex" serverregex><div ng-messages="registerForm.firstName.$error"><div ng-message="required">First name is required.</div><div ng-message="minlength">First name is too short.</div><div ng-message="maxlength">First name is too long.</div><div ng-message="serverregex">Use only letters and characters: <em class="punctuation">- ' , .</em></div><div ng-message="pattern">Use only letters and characters: <em class="punctuation">- ' , .</em></div></div></mod-input-container></div><div class="col-12 col-md-6"><mod-input-container><label for="lastName">Last name</label><input type="text" name="lastName" ng-model="formData.lastName" tabindex="3" required ng-maxlength="128" ng-minlength="2" ng-pattern="nameRegex" serverregex><div ng-messages="registerForm.lastName.$error"><div ng-message="required">Last name is required.</div><div ng-message="minlength">Last name is too short.</div><div ng-message="maxlength">Last name is too long.</div><div ng-message="serverregex">Use only letters and characters: <em class="punctuation">- ' , .</em></div><div ng-message="pattern">Use only letters and characters: <em class="punctuation">- ' , .</em></div></div></mod-input-container></div></div></div><div class="container"><div class="row"><div class="col-12"><mod-input-container><label for="terms">I agree to <a ng-href="/terms-of-use#terms-of-use" target="_balnk">Terms of Use and Privacy Policy</a></label><input type="checkbox" id="terms" ng-model="formData.terms" name="terms" tabindex="5" required><div ng-messages="registerForm.terms.$error" class="checkbox-message terms-message"><div ng-message="required">Terms of use and Privacy Policy is required.</div></div></mod-input-container></div><div class="col-12"><mod-input-container><label for="policy">I agree to <a ng-href="/terms-of-use#personal-data" tabindex="-1" target="_blank">the processing of personal data</a> necessary for providing the service</label><input type="checkbox" id="policy" ng-model="formData.policy" name="policy" tabindex="6" required><div ng-messages=" registerForm.policy.$error" class="checkbox-message policy-message"><div ng-message="required">Consent to the processing of personal data is required.</div></div></mod-input-container></div></div></div><button class="btn submit" ng-disabled="registerPending" tabindex="7" ng-click="createClick()">sign up</button></fieldset></form><div class="social-button"><mod-social-auth-button></mod-social-auth-button></div></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/reset-error/reset-error-layer.html">
    <div class="auth-layer" ng-controller="resetLayer"><section><form><legend class="error">Incorrect reset link</legend><p>Something obviously went wrong or the link<br>you have clicked is no longer active</p><button class="btn submit" ng-click="resetView()">TRY AGAIN</button></form></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/reset/reset-layer.html">
    <div class="auth-layer" ng-controller="resetLayer"><auth-layer-menu></auth-layer-menu><section><form class="mod-form" novalidate name="newPassForm" mod-form-autofill-fix ng-submit="resetPasswordSubmit()" autocomplete="off"><legend>Set your new password</legend><mod-input-container><label>New password</label><input type="password" name="newPassword" autocomplete="off" ng-model="formData.newPassword" serverunique required tabindex="1" mg-maxlength="64" ng-minlength="8"><div ng-messages="newPassForm.newPassword.$error"><div ng-message="serverunique">Attempted to set the same password.</div><div ng-message="required">New password is required.</div><div ng-message="minlength">New password is too short.</div><div ng-message="maxlength">New password is too long.</div></div></mod-input-container><mod-input-container><label>Repeat new password</label><input type="password" name="reNewPassword" autocomplete="off" ng-model="formData.reNewPassword" required tabindex="2" repeat="newPassword"><div ng-messages="newPassForm.reNewPassword.$error"><div ng-message="required">Repeat new password is required.</div><div ng-message="repeat">Passwords must match together.</div></div></mod-input-container><button class="btn submit" ng-disabled="resetPending">Save</button></form></section></div>
</script>

<script type="text/ng-template" id="common/components/ui-auth-layer/social-auth-button.html">
    <div class="mod-social-auth-button"><hr><div class="row align-items-center"><span class="col-md-5 col-12 socials-header">Or use Google / Facebook</span> <button type="button" class="btn google" ng-disabled="googleLoginPending" ng-click="$ctrl.signInGoogle()"><mod-ui-icon view-box="0 0 18 18" icon-id="i-home-google"></mod-ui-icon></button> <button type="button" class="btn facebook" ng-disabled="facebookLoginPending" ng-click="$ctrl.signInFb()"><mod-ui-icon view-box="0 0 14 24" icon-id="i-fit-facebook"></mod-ui-icon></button></div></div>
</script>

<script type="text/ng-template" id="common/components/user-info/user-info.html">
    <div id="mod-user-info"><div class="user-image"><div class="img" ng-if="$ctrl.profile.picture.Uploaded" ng-attr-style="background-image:url({{ $ctrl.profile.avatarThumb64Url }})"></div></div><div class="user-info"><strong class="user-name" ng-attr-title="{{$ctrl.profile.name | modNameParser}}" ng-bind="$ctrl.profile.name | modNameParser"></strong><br><span class="user-organization" ng-bind="$ctrl.organizationRole"></span> at <span ng-bind="$ctrl.currentOrganization.name | modNameParser"></span><br></div><br><a class="btn btn-xl btn-default" ng-href="{{'/app/' + $ctrl.currentOrganization.id}}">go to app</a></div>
</script>

<script type="text/ng-template" id="lib/mod-dialog/dialog.html">
    <div id="mod-dialog" ng-switch on="opts.type"><div class="backdrop" ng-click="close()" ng-show="opts.backdrop"></div><div class="window" ng-class="[opts.type, {'ngClick': opts.manualAccept}]" ng-click="opts.manualAccept && close()"><section><div class="window-icon"><mod-ui-icon icon-id="{{opts.icon}}"></mod-ui-icon></div><div class="window-content" ng-if="opts.type != 'custom'"><h1>{{opts.header}}</h1><div class="content-wrapper selectable-text"><p ng-bind-html="opts.msg"></p><span class="request-id" ng-if="opts.requestId">Request ID: {{opts.requestId}}</span></div><div class="dialog-actions"><button class="actions-close" ng-click="goHome()" ng-if="opts.type == 'error'">{{opts.msgRetry}}</button><div ng-show="opts.pending" class="actions-loader" ng-if="opts.type == 'info' || opts.type == 'confirm'">Please wait...</div><button class="actions-confirm" ng-click="confirm()" ng-show="!opts.isDone" ng-if="opts.type == 'info' || opts.type == 'confirm'">{{opts.msgYes}}</button> <button class="actions-close" ng-click="close()" ng-show="!opts.isDone" ng-if="opts.type == 'info' || opts.type == 'confirm'">{{opts.msgNo}}</button> <button class="actions-close" ng-click="close()" ng-show="opts.isDone" ng-if="opts.type == 'info' || opts.type == 'confirm'">{{opts.msgClose}}</button> <button class="actions-close" ng-click="close()" ng-if="opts.type == 'alert'">{{opts.msgClose}}</button></div></div><div class="window-content" ng-if="opts.type == 'custom'" ng-include="opts.templateUrl"></div><div class="close-button"><button class="close" ng-click="close()" ng-show="opts.showX"><svg><polygon points="32,6 26.001,0 16,10 6,0 0,6 10.001,16 0,26 6,32 16,22.001 26.001,32 32,26 22.001,16"></polygon></svg></button></div></section></div></div>
</script>

<script type="text/ng-template" id="lib/mod-finances-form/finances-form.html">
    <form id="finances-form" name="financesForm" novalidate class="mod-form" mod-form-valid-info autocomplete="false"><fieldset><div class="row" ng-if="!forceLegalForm"><span>License for*</span><mod-input-container><label for="Business">Business</label><input name="Business" type="radio" ng-model="model.legalForm" value="business" ng-disabled="disabled"></mod-input-container><mod-input-container><label for="Individual">Individual</label><input name="Individual" type="radio" ng-model="model.legalForm" value="individual" ng-disabled="disabled"></mod-input-container></div></fieldset><div ng-if="model.legalForm == 'business'"><mod-input-container><label>Legal name (licensee)*</label><input type="text" id="name" name="name" ng-model="model.invoice[model.legalForm].addressData.name.first" required ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.name.$error"><div ng-message="required">Name is required.</div><div ng-message="maxlength">Name is too long.</div><div ng-message="serverregex">Name has wrong format.</div></div></mod-input-container><mod-input-container><label>Address*</label><input type="text" id="address" name="address" ng-model="model.invoice[model.legalForm].addressData.address" required ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.address.$error"><div ng-message="required">Address is required.</div><div ng-message="maxlength">Address is too long.</div><div ng-message="serverregex">Address has wrong format.</div></div></mod-input-container><mod-input-container><input type="text" id="subAddress" name="subAddress" autocomplete="false" ng-model="model.invoice[model.legalForm].addressData.subAddress" ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.subAddress.$error"><div ng-message="maxlength">Address is too long.</div><div ng-message="serverregex">Address has wrong format.</div></div></mod-input-container><div class="row justify-content-between"><div class="col-6"><mod-input-container><label>Postal code*</label><input type="text" id="zip" name="zip" ng-model="model.invoice[model.legalForm].addressData.zip" required ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.zip.$error"><div ng-message="required">Postal code is required.</div><div ng-message="maxlength">Postal code is too long.</div><div ng-message="serverregex">Postal code has wrong format.</div></div></mod-input-container></div><div class="col-6"><mod-input-container><label>City*</label><input type="text" id="city" name="city" ng-model="model.invoice[model.legalForm].addressData.city" required ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.city.$error"><div ng-message="required">City is required.</div><div ng-message="maxlength">City is too long.</div><div ng-message="serverregex">City has wrong format.</div></div></mod-input-container></div></div><mod-select-container><label>Country</label><select name="country" ng-model="model.invoice[model.legalForm].addressData.country" ng-options="country.Code as country.Name for country in countriesData.full[model.legalForm] | orderBy:'Name'" required serverregex ng-change="onCountryChange()" ng-disabled="disabled"></select><div ng-messages="financesForm.country.$error"><div ng-message="required">Country is required.</div><div ng-message="serverregex">Country is invalid.</div></div></mod-select-container><div class="row" ng-show="model.invoice[model.legalForm].addressData.country.length"><div class="col-5"><mod-select-container><label>VAT ID type</label><select name="vatType" ng-model="model.invoice[model.legalForm].vat.type" ng-options="opt.type as opt.name for opt in vatTypes[getVatType()]" required serverregex serverempty ng-change="onVatTypeChange()" ng-disabled="disabled"><option value=""></option></select><div ng-messages="financesForm.vatType.$error"><div ng-message="required">VAT ID type is required.</div><div ng-message="serverempty">VAT ID type is required.</div><div ng-message="serverregex">VAT ID type is invalid.</div></div></mod-select-container></div><div class="col-2" ng-if="model.invoice[model.legalForm].vat.type == 'EU'"><mod-select-container><label>Code</label><select name="vatCountryCode" ng-model="model.invoice[model.legalForm].vat.country" ng-options="prefix for prefix in EuVatIdPrefixes | orderBy" required serverregex serverempty ng-change="onCountryCodeChange()" ng-disabled="disabled" serverrepeat repeat="country" repeat-accept="GR|EL IM|GB MC|FR PT-20|PT PT-30|PT"><option value=""></option></select><div ng-messages="financesForm.vatCountryCode.$error"><div ng-message="required">Country code is required.</div><div ng-message="serverrepeat">Doesn\'t match selected country.</div><div ng-message="serverregex">Doesn\'t match selected country.</div></div></mod-select-container></div><div class="col-5" ng-if="model.invoice[model.legalForm].vat.type != 'NONE' && model.invoice[model.legalForm].vat.type"><mod-input-container><label>VAT ID</label><input type="text" id="vatId" name="vatId" ng-model="model.invoice[model.legalForm].vat.id" serverempty serverregex ng-disabled="disabled"><div ng-messages="financesForm.vatId.$error"><div ng-message="serverempty">VAT ID is required.</div><div ng-message="serverregex">VAT ID has wrong format.</div></div></mod-input-container></div></div></div><div novalidate ng-if="model.legalForm == 'individual'"><mod-select-container><label>Subscription purpose*</label><select name="use" ng-model="model.invoice.individual.use" ng-options="opt.option as opt.label for opt in subscriptionPurposes" required serverregex ng-change="onCountryChange()" ng-disabled="disabled || forceLegalForm"></select><div ng-messages="financesForm.use.$error"><div ng-message="required">Choose your subscription purpose.</div></div></mod-select-container><mod-input-container><label>First name*</label><input type="text" name="firstName" ng-model="model.invoice[model.legalForm].addressData.name.first" required ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.firstName.$error"><div ng-message="required">First name is required.</div><div ng-message="maxlength">First name is too long.</div><div ng-message="serverregex">First name has wrong format.</div></div></mod-input-container><mod-input-container><label>Last name*</label><input type="text" name="lastName" ng-model="model.invoice[model.legalForm].addressData.name.last" required ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.lastName.$error"><div ng-message="required">Last name is required.</div><div ng-message="maxlength">Last name is too long.</div><div ng-message="serverregex">Last name has wrong format.</div></div></mod-input-container><mod-input-container><label>Address*</label><input type="text" name="address" ng-model="model.invoice[model.legalForm].addressData.address" required ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.address.$error"><div ng-message="required">Address is required.</div><div ng-message="maxlength">Address is too long.</div><div ng-message="serverregex">Address has wrong format.</div></div></mod-input-container><mod-input-container><input type="text" name="subAddress" autocomplete="false" ng-model="model.invoice[model.legalForm].addressData.subAddress" ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.subAddress.$error"><div ng-message="maxlength">Address is too long.</div><div ng-message="serverregex">Address has wrong format.</div></div></mod-input-container><div class="row"><div class="col-6"><mod-input-container><label>Postal code</label><input type="text" name="zip" ng-model="model.invoice[model.legalForm].addressData.zip" required ng-maxlength="128" serverregex ng-disabled="disabled" data-hj-suppress=""><div ng-messages="financesForm.zip.$error"><div ng-message="required">Postal code is required.</div><div ng-message="maxlength">Postal code is too long.</div><div ng-message="serverregex">Postal code has wrong format.</div></div></mod-input-container></div><div class="col-6"><mod-input-container><label>City</label><input type="text" name="city" ng-model="model.invoice[model.legalForm].addressData.city" required ng-maxlength="128" serverregex ng-disabled="disabled"><div ng-messages="financesForm.city.$error"><div ng-message="required">City is required.</div><div ng-message="maxlength">City is too long.</div><div ng-message="serverregex">City has wrong format.</div></div></mod-input-container></div></div><mod-select-container><label>Country*</label><select name="country" ng-model="model.invoice[model.legalForm].addressData.country" ng-options="country.Code as country.Name for country in countriesData.full[model.legalForm] | orderBy:'Name'" required serverregex serverempty ng-change="onVatTypeChange()" ng-disabled="disabled" ng-required="required"></select><div ng-messages="financesForm.country.$error"><div ng-message="required">VAT ID type is required.</div><div ng-message="serverempty">VAT ID type is required.</div><div ng-message="serverregex">VAT ID type is invalid.</div></div></mod-select-container></div></form>
</script>

<script type="text/ng-template" id="lib/mod-layer/layer.html">
    <div id="mod-layer" ng-class="{
	shown: shownCounter
}"><div ng-repeat="layer in layers" ng-attr-id="{{::layer.id }}" mod-layer-iterator="layer" class="mod-layer animated type-{{layer.type}} {{layer.name}}" ng-class="{
			shown: layer.isShown,
			isShowing: layer.isShowing,

			windowZoomIn: layer.type == 'regular' && layer.isShowing,
			windowZoomOut: layer.type == 'regular' && !layer.isShowing,
			fadeInRight: layer.type == 'rightpanel' && layer.isShowing,
			fadeOutRight: layer.type == 'rightpanel' && !layer.isShowing,
			fadeInLeft: layer.type == 'leftpanel' && layer.isShowing,
			fadeOutLeft: layer.type == 'leftpanel' && !layer.isShowing,
			'disable-animation': layer.type == 'regular' && layer.isVideoFullscreen,
			'overlay-disable-rightpanel': layer.type == 'rightpanel' && !layer.overlay,
			'overlay-disable-leftpanel': layer.type == 'leftpanel' && !layer.overlay,
			'has-opened-child': layer.hasOpenedParent
		}" off-click="layer.toolbar.main.close.action(layer.toolbar.main.close, layer)" off-click-if="layer.isShown && !layer.overlay && layer.type !== 'regular'" off-click-filter="layer.overlayOffClickFilter"><div class="mod-layer-navigation-overlay" ng-if=":: layer.navigationOverlay" ng-click=":: layer.toolbar.main.close.action(layer.toolbar.main.close, layer)"></div><div class="mod-layer-overlay" ng-if=":: layer.overlay" ng-click=":: layer.toolbar.main.close.action(layer.toolbar.main.close, layer)"></div><div class="mod-layer-body"><div class="mod-layer-toolbar" ng-if=":: layer.toolbar && !layer.toolbar.hide"><div class="mod-layer-toolbar-header" ng-if=":: layer.toolbar.header"><h1 class="heading-ellipsis" ng-if="layer.toolbar.header.text" ng-bind="layer.toolbar.header.text | textOrFunction"></h1><div ng-if="layer.toolbar.header.title" mod-header><h1 class="heading-ellipsis" ng-bind="layer.toolbar.header.title | textOrFunction"></h1><small ng-bind="layer.toolbar.header.footnote | textOrFunction"></small></div><span class="header-action" ng-if="layer.toolbar.main.headerAction" ng-click="layer.toolbar.main.headerAction.action(layer.toolbar.main.headerAction, layer)"><mod-ui-icon icon-id="{{::layer.toolbar.main.headerAction.icon}}"></mod-ui-icon>{{::layer.toolbar.main.headerAction.label}}</span></div><div class="mod-layer-toolbar-actions" ng-if="layer.toolbar.actions"><div ng-repeat="actionName in ::layer.toolbar.actionsOrder" ng-init="actionDef = layer.toolbar.actions[actionName]" ng-show="actionDef.isShown(layer)" ng-disabled="actionDef.isDisabled(layer)" class="action media-threshold-{{actionDef.mediaThresholdPriority}}" ng-class="{highlight: actionDef.isHighlighted(layer)}" mod-ui-action icon-id="{{:: actionDef.icon}}" label="{{:: actionDef.label}}" ng-click=":: actionDef.action(actionDef, layer)"></div></div><div class="mod-layer-toolbar-main" ng-if="layer.toolbar.main"><button class="previous" ng-show="layer.toolbar.main.previous && layer.toolbar.main.previous.isShown(layer) && layer.state.itemsLength > 1" ng-disabled="layer.toolbar.main.previous.isDisabled(layer)" ng-class="{inactive: !layer.modelPrevious}" ng-click="layer.modelPrevious && layer.toolbar.main.previous.action(layer.toolbar.main.previous, layer)"><mod-ui-icon icon-id="{{:: layer.toolbar.main.previous.icon}}"></mod-ui-icon></button> <span ng-if="layer.toolbar.itemListPosition && (layer.toolbar.main.previous.isShown(layer) || layer.toolbar.main.next.isShown(layer))" class="list-position" ng-show="layer.state.itemsLength && (layer.state.itemIndex >= 0)"><em class="left" ng-class="{inactive: !layer.modelPrevious}">{{layer.state.itemIndex +1}}</em> <em>/</em> <em class="right" ng-class="{inactive: !layer.modelNext}">{{layer.state.itemsLength}}</em></span> <button class="next" ng-show="layer.toolbar.main.next && layer.toolbar.main.next.isShown(layer) && layer.state.itemsLength > 1" ng-disabled="layer.toolbar.main.next.isDisabled(layer)" ng-class="{inactive: !layer.modelNext}" ng-click="layer.modelNext && layer.toolbar.main.next.action(layer.toolbar.main.next, layer)"><mod-ui-icon icon-id="{{:: layer.toolbar.main.next.icon}}"></mod-ui-icon></button> <button class="close" ng-show="layer.toolbar.main.close" ng-disabled="layer.toolbar.main.close.isDisabled(layer)" ng-click="layer.toolbar.main.close.action(layer.toolbar.main.close, layer)"><mod-ui-icon icon-id="{{:: layer.toolbar.main.close.icon}}"></mod-ui-icon></button></div></div><div mod-layer-inner="layer"></div></div></div></div>
</script>

<script type="text/ng-template" id="lib/mod-organization-tile/organization-tile.html">
    <div class="organization-tile"><div class="org-bg-image" ng-if="org.picture.Uploaded" ng-attr-style="background-image:url({{ org.avatarThumb64Url }})"></div><div class="org-bg-color" ng-if="!org.picture.Uploaded && !org.colorHex && !!org.stylePalette" ng-class="org.stylePalette">{{org.name | modNameParser:1 }}</div><div class="org-bg-color" ng-if="!org.picture.Uploaded && org.colorHex" ng-style="{'background-color': org.colorHex}">{{org.name | modNameParser:1 }}</div><div class="org-bg-color org-style-palette-futu" ng-if="!org.picture.Uploaded && !org.colorHex && !org.stylePalette"><mod-ui-icon icon-id="i-yokel"></mod-ui-icon></div></div>
</script>

<script type="text/ng-template" id="lib/mod-preloader/spinner.html">
    <div id="mod-preloader"><div class="backdrop"></div><div class="spinner"><div class="la-ball-grid-pulse"><div style="color:#33B573"></div><div style="color:#33B573"></div><div style="visibility:hidden"></div><div style="color:#219E97"></div><div style="color:#33B573"></div><div style="visibility:hidden"></div><div style="color:#219E97"></div><div style="color:#219E97"></div><div style="color:#33B573"></div><div style="color:#33B573"></div><div style="visibility:hidden"></div><div style="color:#219E97"></div><div style="color:#33B573"></div><div style="visibility:hidden"></div><div style="color:#219E97"></div><div style="color:#219E97"></div></div></div></div>
</script>

<script type="text/ng-template" id="lib/mod-shop-directives/license-templates-and-num.html">
    <div class="mod-shop-directives"><mod-shop-license-templates class="mod-license-templates" model="model" model-change="onSelectLicenseTemplate()" app-name="appName" default="{{defaultLicenseTemplateId}}"></mod-shop-license-templates><mod-shop-licenses-num class="mod-licenses-num" type="{{numSelectType}}" model="model" data="numSelectData" model-change="onSelectNum()" default="{{defaultNum}}"></mod-shop-licenses-num></div>
</script>

<script type="text/ng-template" id="lib/mod-shop-directives/license-templates.html">
    <div class="mod-shop-radio-button"><fieldset class="license-tiles mod-input-radio" ng-class="{'disabled': disabled, 'nolabel': !label }"><label class="license-tile license-tile--default {{ model.licenseTemplate == value ? 'isSelected' : '' }}" ng-repeat="value in licenseTemplatesData"><input name="licenseTemplate" ng-disabled="disabled" ng-model="model.licenseTemplate" ng-change="modelChange()" ng-hide="true" type="radio" ng-value="value"><div class="license-label"><span class="license-text" ng-bind-html="licenseTemplatesLabels[$index] || value"></span></div></label></fieldset></div>
</script>

<script type="text/ng-template" id="lib/mod-shop-directives/licenses-num.html">
    <div ng-if="type == 'select'"><mod-select-container><select name="users" ng-model="model.num" ng-options="item.maxNum as item | licenseTemplateParser for item in data" required ng-change="modelChange()" ng-disabled="disabled"></select><div ng-messages="formStep1.users.$error"><div ng-message="required">Users is required.</div></div></mod-select-container></div><div ng-if="type == 'dropdown'" class="dropdown-price" off-click="togleDropdown()" off-click-if="dropdownShow"><ul><li class="toggle"><button ng-click="togleDropdown()">{{selectedItem | licenseTemplateParser}}</button></li><li ng-if="dropdownShow" ng-repeat="item in data"><button ng-class="{'selected': data == item}" ng-click="onSelectTypeDropdown(item)">{{item | licenseTemplateParser}}</button></li></ul></div>
</script>

<script type="text/ng-template" id="lib/mod-shop-directives/price.html">
    <div class="mod-price"><p class="price-tag"><sup>$</sup>{{ modShopService.get.price(model.licenseTemplate.id, model.num, model.legalForm, model.coupon) }}</p><p ng-show="props.showUnitPrice" class="price-per-user"><b>${{ modShopService.get.unitPrice(model.licenseTemplate.id, model.num, model.legalForm, model.coupon) }}</b> / license</p></div>
</script>

<script type="text/ng-template" id="lib/mod-ui-action/otb-ui-action.html">
    <div class="mod-ui-action"><div ng-if="actionIcon"><mod-ui-icon icon-id="{{:: actionIcon}}"></mod-ui-icon></div><span class="label">{{:: label}}</span> <span class="transcluded" ng-transclude></span></div>
</script>

<script type="text/ng-template" id="lib/mod-ui-action/ui-action.html">
    <div class="mod-ui-action"><div ng-if="actionIcon"><mod-ui-icon icon-id="{{actionIcon}}"></mod-ui-icon></div><span class="label">{{label}}</span> <span class="transcluded" ng-transclude></span></div>
</script>

<script type="text/ng-template" id="lib/mod-utils/state-info.html">
    <div class="state-info" ng-style="{display: 'block'}"><pre>name: {{state.current.name}}</pre><pre>params: {{state.params | json}}</pre><pre ng-repeat="(uiResourceId, data) in state.current.data.uiResource">{{uiResourceId}}:
<span ng-repeat="(key, value) in data" ng-if="key != 'item' && key != 'itemPrevious' && key != 'itemNext'">{{key}}: {{value | json}}
</span></pre></div>
</script>

<script type="text/ng-template" id="lib/mod-utils/watchers-count.html">
    <span class="watchers-count" ng-style="{
		display: 'block'
	}" ng-click="toggleHoverCounter()">W: {{watchersCount}} ({{watchersOnHoldCount}}) {{hoveredElementWatchersCount}}</span>
</script>

<script type="text/ng-template" id="lib/mod-version-box/version-box.html">
    <div class="mod-version-box"><span ng-if="!!server">{{::server.Name}} {{:: server.Server }}</span> <span ng-if="!!server">conf/{{:: server.Config }}</span> <span ng-if="!!server">db/{{:: server.Database }}</span> <span>&nbsp;|&nbsp;</span> <span ng-if="!!front && front.appName[0] != '@'">{{:: front.appName }}</span> <span ng-if="!!front && front.appVersion[0] != '@'">{{:: front.appVersion }}</span> <span ng-if="!!front && front.timestamp[0] != '@'">{{:: front.timestamp }}</span> <span>&nbsp;|&nbsp;</span> <span ng-if="!!location">{{ location.path() }}</span></div>
</script>
<!-- End Templates -->

</body>
</html>
