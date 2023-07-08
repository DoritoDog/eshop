<x-layout>
    <div class="shopping-layout-breadcrumb" itemscope="" itemtype="https://schema.org/WebPage">
        <div data-view="Global.Breadcrumb" data-type="breadcrumb">
            <!-- TEMPLATE STARTS: global_views_breadcrumb-->
            <div id="banner-breadcrumb-top" class="content-banner banner-breadcrumb-top"
                 data-cms-area="breadcrumb_top" data-cms-area-filters="global"></div>
            <ul class="global-views-breadcrumb" itemprop="breadcrumb">
                <li class="global-views-breadcrumb-item-active"> Shop</li>
            </ul>
            <div id="banner-breadcrumb-bottom" class="content-banner banner-breadcrumb-bottom"
                 data-cms-area="breadcrumb_bottom" data-cms-area-filters="global"></div>
            <!-- TEMPLATE ENDS: global_views_breadcrumb --></div>
    </div>
    <div class="shopping-layout-notifications">
        <div data-view="Notifications"><!-- TEMPLATE STARTS: notifications-->
            <div class="notifications">
                <div data-view="Order.Notifications"><!-- TEMPLATE STARTS: notifications_order-->
                    <div class="notifications-order">
                        <div data-view="Promocode.Notifications"></div>
                        <div data-view="FreeGift.Notifications"></div>
                    </div>
                    <!-- TEMPLATE ENDS: notifications_order -->
                </div>
                <div data-view="Profile.Notifications"><!-- TEMPLATE STARTS: notifications_profile-->
                    <div class="notifications-profile">
                        <div data-view="ProfileChanges.Notifications"></div>
                    </div>
                    <!-- TEMPLATE ENDS: notifications_profile -->
                </div>
            </div>
            <!-- TEMPLATE ENDS: notifications -->
        </div>
    </div>
    <div id="content" class="shopping-layout-content">
        <div id="facet-browse" class="view facet-browse" data-root-component-id="Facets.Browse.View">
            <!-- TEMPLATE STARTS: facets_facet_browse-->
            <section class="facets-facet-browse">
                <div data-view="BayWaQuickNav">
                    <div><!-- TEMPLATE STARTS: baywa_baywaquicknav_navmenu-->
                        <div class="baywa-quicknav">
                            <div class="baywa-quicknav-list">
                                <div class="baywa-quicknav-item"><a href="#" data-touchpoint="home"
                                                                    data-target="" data-hashtag="#/search">
                                                    <span
                                                        class="baywa-quicknav-itemtitle">All products</span></a></div>
                                <div class="baywa-quicknav-item"><a href="#" data-touchpoint="home"
                                                                    data-target=""
                                                                    data-hashtag="#/products/category/solar-modules">
                                                    <span
                                                        class="baywa-quicknav-itemtitle">Solar Modules</span></a></div>
                                <div class="baywa-quicknav-item"><a href="#" data-touchpoint="home"
                                                                    data-target=""
                                                                    data-hashtag="#/products/category/inverters">
                                                    <span
                                                        class="baywa-quicknav-itemtitle">Inverters</span></a></div>
                                <div class="baywa-quicknav-item"><a href="#" data-touchpoint="home"
                                                                    data-target=""
                                                                    data-hashtag="#/products/category/inverter-accessories">
                                                    <span
                                                        class="baywa-quicknav-itemtitle">Inverter Accessories</span></a>
                                </div>
                                <div class="baywa-quicknav-item"><a href="#" data-touchpoint="home"
                                                                    data-target=""
                                                                    data-hashtag="#/products/category/mounting-systems">
                                                    <span
                                                        class="baywa-quicknav-itemtitle">Mounting Systems</span></a>
                                </div>
                                <div class="baywa-quicknav-item"><a href="#" data-touchpoint="home"
                                                                    data-target=""
                                                                    data-hashtag="#/products/category/storage-systems">
                                                    <span
                                                        class="baywa-quicknav-itemtitle">Storage Systems</span></a>
                                </div>
                                <div class="baywa-quicknav-item"><a href="#" data-touchpoint="home"
                                                                    data-target=""
                                                                    data-hashtag="#/products/category/system-accessories">
                                                    <span
                                                        class="baywa-quicknav-itemtitle">System Accessories</span></a>
                                </div>
                                <div class="baywa-quicknav-item"><a href="#" data-touchpoint="home"
                                                                    data-target=""
                                                                    data-hashtag="#/products/category/e-mobility">
                                                    <span
                                                        class="baywa-quicknav-itemtitle">E-Mobility</span></a></div>
                            </div>
                        </div>
                        <!-- TEMPLATE ENDS: baywa_baywaquicknav_navmenu --></div>
                </div>
                <div data-cms-area="item_list_banner" data-cms-area-filters="page_type"></div>
                <div class="facets-facet-browse-content">
                    <div class="facets-facet-browse-facets" data-action="pushable"
                         data-id="product-search-facets" data-pusher="sc-pushable-md">
                        <div class="sc-pusher-header"><a href="#" class="sc-pusher-header-back"
                                                         data-action="sc-pusher-dismiss">Back</a></div>
                        <div data-cms-area="facet_navigation_top" data-cms-area-filters="page_type"></div>
                        <div data-view="Facets.FacetedNavigation"
                             data-exclude-facets="commercecategoryname,category">
                            <!-- TEMPLATE STARTS: facets_faceted_navigation-->
                            <div data-view="Facets.FacetedNavigationItems" class="facets-facet-container">
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_262"
                                     data-type="rendered-facet" data-facet-id="manufacturers"><a href="#"
                                                                                                 class="facets-faceted-navigation-item-facet-group-expander "
                                                                                                 data-toggle="collapse"
                                                                                                 data-target="#facetList_262-wrapper"
                                                                                                 data-type="collapse"
                                                                                                 title="Manufacturer"><i
                                            class="facets-faceted-navigation-item-facet-group-expander-icon"></i>
                                        <h4 class="facets-faceted-navigation-item-facet-group-title">
                                            Manufacturer</h4></a>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_262-wrapper">
                                        <script>
                                            function filterByManufacturer(manufacturer) {
                                                $(`.${manufacturer}:not`).hide();
                                            }
                                        </script>
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       onclick="filterByManufacturer('Acrel')" title="Acrel">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>Acrel</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?manufacturers=Alfen" title="Alfen">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>Alfen</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?manufacturers=Amphenol"
                                                       title="Amphenol"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Amphenol</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?manufacturers=BYD" title="BYD"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>BYD</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?manufacturers=Citel" title="Citel">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>Citel</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?manufacturers=Dinitech"
                                                       title="Dinitech"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Dinitech</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?manufacturers=EPCOS" title="EPCOS">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>EPCOS</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?manufacturers=Enphase" title="Enphase">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>Enphase</span>
                                                    </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Fronius" title="Fronius">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> Fronius </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=GoodWe" title="GoodWe">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> GoodWe </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=HIS" title="HIS"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> HIS </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Huawei" title="Huawei">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> Huawei </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Hyundai" title="Hyundai">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> Hyundai </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=JA-Solar"
                                                       title="JA Solar"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> JA Solar
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Janitza" title="Janitza">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> Janitza </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Jinko-Solar-"
                                                       title="Jinko Solar "> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Jinko Solar
                                                    </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=KEBA" title="KEBA"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> KEBA </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Kabelwerk-Eupen-"
                                                       title="Kabelwerk Eupen "> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Kabelwerk
                                                        Eupen </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Kostal" title="Kostal">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> Kostal </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=LG-Chem" title="LG Chem">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> LG Chem </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=LONGi-Solar"
                                                       title="LONGi Solar"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> LONGi Solar
                                                    </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Last-Mile-Solutions"
                                                       title="Last Mile Solutions"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Last Mile
                                                        Solutions
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=MENNEKES"
                                                       title="MENNEKES"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> MENNEKES
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Meyer-Burger"
                                                       title="Meyer Burger"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Meyer Burger
                                                    </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Omvormer-Service"
                                                       title="Omvormer Service"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Omvormer
                                                        Service
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Phoenix-Contact"
                                                       title="Phoenix Contact"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Phoenix
                                                        Contact </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=PylonTech"
                                                       title="PylonTech"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> PylonTech
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=QC-Solar"
                                                       title="QC Solar"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> QC Solar
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Rennsteig"
                                                       title="Rennsteig"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Rennsteig
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Renusol" title="Renusol">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> Renusol </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=SMA" title="SMA"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> SMA </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=SP" title="SP"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> SP </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=SolarEdge"
                                                       title="SolarEdge"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> SolarEdge
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Soluxtec"
                                                       title="Soluxtec"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Soluxtec
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=St%C3%A4ubli"
                                                       title="Stäubli"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Stäubli </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Tongwei-Solar"
                                                       title="Tongwei Solar"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Tongwei
                                                        Solar </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Top-Cable"
                                                       title="Top Cable"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Top Cable
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=Trina-Solar"
                                                       title="Trina Solar"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Trina Solar
                                                    </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?manufacturers=novotegra"
                                                       title="novotegra"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> novotegra
                                                    </a></li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_262 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-range-facet-group"
                                     id="facetList_264" data-type="rendered-facet"
                                     data-facet-id="custitem_itemwatt">
                                    <div class="facets-faceted-navigation-item-range-facet-group-expander">
                                        <h4 class="facets-faceted-navigation-item-range-facet-group-title">
                                            Power (W) </h4></div>
                                    <div class="facets-faceted-navigation-item-range-facet-group-wrapper">
                                        <div class="facets-faceted-navigation-item-range-slider"
                                             data-toggle="slider" data-facet-id="custitem_itemwatt"
                                             data-min="290" data-max="120000" data-low="290"
                                             data-high="120000" data-step="10">
                                            <div class="facets-faceted-navigation-item-range-slider-bar"
                                                 data-control="bar" style="left: 0%; width: 100%;"></div>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-right"
                                                data-control="low" style="left: 0%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-start"
                                                        data-range-indicator="start">290</span></span>
                                            </button>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-left"
                                                data-control="high" style="left: 100%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-end"
                                                        data-range-indicator="end">120,000</span></span>
                                            </button>
                                        </div>
                                        <div class="facets-faceted-navigation-item-range-slider-text"> 290
                                            to 120,000
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_266"
                                     data-type="rendered-facet" data-facet-id="moduletype">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title"> Module
                                            Cell Type </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_266-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?moduletype=Monofacial-Framed"
                                                       title="Monofacial Framed"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Monofacial Framed</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?moduletype=Bifacial-Framed"
                                                       title="Bifacial Framed"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Bifacial Framed</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_268"
                                     data-type="rendered-facet" data-facet-id="cells">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title"> Solar
                                            Cells (Quantity) </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_268-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?cells=108-%2854%29" title="108 (54)">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>108 (54)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?cells=120-%2860%29" title="120 (60)">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>120 (60)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?cells=132-%2866%29" title="132 (66)">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>132 (66)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?cells=144-%2872%29" title="144 (72)">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>144 (72)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?cells=305" title="305"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>305</span>
                                                    </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?cells=320" title="320"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> 320 </a>
                                                </li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_268 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_270"
                                     data-type="rendered-facet" data-facet-id="backsheet">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title"> Module
                                            Backsheet Color </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_270-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?backsheet=White-Tedlar"
                                                       title="White Tedlar"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>White Tedlar</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?backsheet=Black-Tedlar"
                                                       title="Black Tedlar"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Black Tedlar</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?backsheet=Glass-%28clear%29"
                                                       title="Glass (clear)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Glass (clear)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?backsheet=Glass-%28milk%29"
                                                       title="Glass (milk)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Glass (milk)</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-color-facet-group"
                                     id="facetList_272" data-type="rendered-facet" data-facet-id="frame">
                                    <div class="facets-faceted-navigation-item-color-facet-group-expander">
                                        <h4 class="facets-faceted-navigation-item-color-facet-group-title">
                                            Module Frame Color </h4></div>
                                    <div class="facets-faceted-navigation-item-color-facet-group-wrapper">
                                        <div
                                            class="facets-faceted-navigation-item-color-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-color-picker">
                                                <li><a href="/search?frame=Black" title="Black"
                                                       data-color="Black"
                                                       class="facets-faceted-navigation-item-color-option  ">
                                                        <span style="background: #212121"></span> </a></li>
                                                <li><a href="/search?frame=Silver" title="Silver"
                                                       data-color="Silver"
                                                       class="facets-faceted-navigation-item-color-option  ">
                                                        <span style="background: #c0c0c0"></span> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_274"
                                     data-type="rendered-facet" data-facet-id="wafer-size">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title"> Wafer
                                            Size </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_274-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?wafer-size=M6-%28166mm%29"
                                                       title="M6 (166mm)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>M6 (166mm)</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?wafer-size=M10-%28182mm%29"
                                                       title="M10 (182mm)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>M10 (182mm)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?wafer-size=G12R-%28210x182mm%29"
                                                       title="G12R (210x182mm)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>G12R (210x182mm)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?wafer-size=G12-%28210mm%29"
                                                       title="G12 (210mm)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>G12 (210mm)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?wafer-size=M10-%28182-x-186-mm%29"
                                                       title="M10 (182 x 186 mm)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>M10 (182 x 186 mm)</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-range-facet-group"
                                     id="facetList_276" data-type="rendered-facet"
                                     data-facet-id="custitem_cablelength">
                                    <div class="facets-faceted-navigation-item-range-facet-group-expander">
                                        <h4 class="facets-faceted-navigation-item-range-facet-group-title">
                                            Cable Length (mm) </h4></div>
                                    <div class="facets-faceted-navigation-item-range-facet-group-wrapper">
                                        <div class="facets-faceted-navigation-item-range-slider"
                                             data-toggle="slider" data-facet-id="custitem_cablelength"
                                             data-min="280" data-max="10000" data-low="280"
                                             data-high="10000" data-step="10">
                                            <div class="facets-faceted-navigation-item-range-slider-bar"
                                                 data-control="bar" style="left: 0%; width: 100%;"></div>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-right"
                                                data-control="low" style="left: 0%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-start"
                                                        data-range-indicator="start">280</span></span>
                                            </button>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-left"
                                                data-control="high" style="left: 100%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-end"
                                                        data-range-indicator="end">10,000</span></span>
                                            </button>
                                        </div>
                                        <div class="facets-faceted-navigation-item-range-slider-text"> 280
                                            to 10,000
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_278"
                                     data-type="rendered-facet" data-facet-id="connector">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Connector Type </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_278-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?connector=JK03" title="JK03"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>JK03</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?connector=MC4" title="MC4"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>MC4</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?connector=MC4~EVO2" title="MC4-EVO2">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>MC4-EVO2</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?connector=QC4.10~35" title="QC4.10-35">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>QC4.10-35</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?connector=TS4" title="TS4"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>TS4</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-range-facet-group"
                                     id="facetList_280" data-type="rendered-facet"
                                     data-facet-id="custitem_pacejetitemheight">
                                    <div class="facets-faceted-navigation-item-range-facet-group-expander">
                                        <h4 class="facets-faceted-navigation-item-range-facet-group-title">
                                            Height (cm) </h4></div>
                                    <div class="facets-faceted-navigation-item-range-facet-group-wrapper">
                                        <div class="facets-faceted-navigation-item-range-slider"
                                             data-toggle="slider" data-facet-id="custitem_pacejetitemheight"
                                             data-min="0" data-max="150" data-low="0" data-high="150"
                                             data-step="10">
                                            <div class="facets-faceted-navigation-item-range-slider-bar"
                                                 data-control="bar" style="left: 0%; width: 100%;"></div>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-right"
                                                data-control="low" style="left: 0%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-start"
                                                        data-range-indicator="start">0</span></span>
                                            </button>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-left"
                                                data-control="high" style="left: 100%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-end"
                                                        data-range-indicator="end">150</span></span>
                                            </button>
                                        </div>
                                        <div class="facets-faceted-navigation-item-range-slider-text"> 0 to
                                            150
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-range-facet-group"
                                     id="facetList_282" data-type="rendered-facet"
                                     data-facet-id="custitem_pacejetitemlength">
                                    <div class="facets-faceted-navigation-item-range-facet-group-expander">
                                        <h4 class="facets-faceted-navigation-item-range-facet-group-title">
                                            Length (cm) </h4></div>
                                    <div class="facets-faceted-navigation-item-range-facet-group-wrapper">
                                        <div class="facets-faceted-navigation-item-range-slider"
                                             data-toggle="slider" data-facet-id="custitem_pacejetitemlength"
                                             data-min="0" data-max="1000" data-low="0" data-high="1000"
                                             data-step="10">
                                            <div class="facets-faceted-navigation-item-range-slider-bar"
                                                 data-control="bar" style="left: 0%; width: 100%;"></div>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-right"
                                                data-control="low" style="left: 0%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-start"
                                                        data-range-indicator="start">0</span></span>
                                            </button>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-left"
                                                data-control="high" style="left: 100%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-end"
                                                        data-range-indicator="end">1000</span></span>
                                            </button>
                                        </div>
                                        <div class="facets-faceted-navigation-item-range-slider-text"> 0 to
                                            1000
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-range-facet-group"
                                     id="facetList_284" data-type="rendered-facet"
                                     data-facet-id="custitem_pacejetitemwidth">
                                    <div class="facets-faceted-navigation-item-range-facet-group-expander">
                                        <h4 class="facets-faceted-navigation-item-range-facet-group-title">
                                            Width (cm) </h4></div>
                                    <div class="facets-faceted-navigation-item-range-facet-group-wrapper">
                                        <div class="facets-faceted-navigation-item-range-slider"
                                             data-toggle="slider" data-facet-id="custitem_pacejetitemwidth"
                                             data-min="0" data-max="197" data-low="0" data-high="197"
                                             data-step="10">
                                            <div class="facets-faceted-navigation-item-range-slider-bar"
                                                 data-control="bar" style="left: 0%; width: 100%;"></div>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-right"
                                                data-control="low" style="left: 0%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-start"
                                                        data-range-indicator="start">0</span></span>
                                            </button>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-left"
                                                data-control="high" style="left: 100%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-end"
                                                        data-range-indicator="end">197</span></span>
                                            </button>
                                        </div>
                                        <div class="facets-faceted-navigation-item-range-slider-text"> 0 to
                                            197
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_286"
                                     data-type="rendered-facet" data-facet-id="electricaltype"><a href="#"
                                                                                                  class="facets-faceted-navigation-item-facet-group-expander "
                                                                                                  data-toggle="collapse"
                                                                                                  data-target="#facetList_286-wrapper"
                                                                                                  data-type="collapse"
                                                                                                  title="Accessories Type"><i
                                            class="facets-faceted-navigation-item-facet-group-expander-icon"></i>
                                        <h4 class="facets-faceted-navigation-item-facet-group-title">
                                            Accessories
                                            Type</h4></a>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_286-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?electricaltype=Connectors-SLASH-Tools"
                                                       title="Connectors/Tools"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Connectors/Tools</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?electricaltype=Cables" title="Cables">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>Cables</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?electricaltype=DC-Protection"
                                                       title="DC Protection"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>DC Protection</span>
                                                    </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?electricaltype=Cable-extensions-SLASH-sets"
                                                       title="Cable extensions/sets"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Cable
                                                        extensions/sets </a></li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_286 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_288"
                                     data-type="rendered-facet" data-facet-id="phase">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Phase </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_288-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?phase=1~--AND--3~phase"
                                                       title="1- &amp; 3-phase"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>1- &amp; 3-phase</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?phase=1~phase" title="1-phase"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>1-phase</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?phase=3~phase" title="3-phase"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>3-phase</span> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_290"
                                     data-type="rendered-facet" data-facet-id="invertertype">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Inverter Type </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_290-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?invertertype=Battery" title="Battery">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>Battery</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?invertertype=Hybrid" title="Hybrid">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>Hybrid</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?invertertype=Microinverter"
                                                       title="Microinverter"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Microinverter</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?invertertype=On-grid" title="On grid">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span> <span>On grid</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_292"
                                     data-type="rendered-facet" data-facet-id="application">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Application </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_292-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?application=Accessories"
                                                       title="Accessories"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>Accessories</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?application=Adapter-plates"
                                                       title="Adapter plates"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Adapter plates</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?application=Cable-fixing"
                                                       title="Cable fixing"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Cable fixing</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?application=Cross-rail-connector"
                                                       title="Cross rail connector"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>Cross rail connector</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?application=Elevation"
                                                       title="Elevation"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Elevation</span> </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Expansion-joint"
                                                       title="Expansion joint"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Expansion
                                                        joint </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Module-attachment"
                                                       title="Module attachment"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Module
                                                        attachment
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Module-protection"
                                                       title="Module protection"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Module
                                                        protection
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Profile-rails"
                                                       title="Profile rails"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Profile
                                                        rails </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Protective-device"
                                                       title="Protective device"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Protective
                                                        device
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Rail-connector"
                                                       title="Rail connector"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Rail
                                                        connector </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Rail-top-cover"
                                                       title="Rail top cover"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Rail top
                                                        cover </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Roof-attachment"
                                                       title="Roof attachment"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Roof
                                                        attachment </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Roof-hook"
                                                       title="Roof hook"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Roof hook
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Screws" title="Screws">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> Screws </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Sealing-parts"
                                                       title="Sealing parts"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Sealing
                                                        parts </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?application=Tools" title="Tools"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Tools </a>
                                                </li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_292 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_294"
                                     data-type="rendered-facet" data-facet-id="rooftype">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title"> Roof
                                            Type </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_294-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?rooftype=Bitumen-sloped-roof"
                                                       title="Bitumen sloped roof"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>Bitumen sloped roof</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?rooftype=Green-roof"
                                                       title="Green roof"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Green roof</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?rooftype=Sloped-roof"
                                                       title="Sloped roof"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>Sloped roof</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?rooftype=corrugated-and-sandwich-roof%28s%29"
                                                       title="corrugated and sandwich roof(s)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>corrugated and sandwich roof(s)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?rooftype=facade-%28system%29"
                                                       title="facade (system)"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>facade (system)</span>
                                                    </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?rooftype=flat-roof%28s%29"
                                                       title="flat roof(s)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> flat roof(s)
                                                    </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?rooftype=seamed-metal-roof%28s%29"
                                                       title="seamed metal roof(s)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> seamed metal
                                                        roof(s)
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?rooftype=tile-roof%28s%29"
                                                       title="tile roof(s)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> tile roof(s)
                                                    </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?rooftype=trapezoidal-panel-roof%28s%29"
                                                       title="trapezoidal panel roof(s)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> trapezoidal
                                                        panel
                                                        roof(s) </a></li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_294 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_296"
                                     data-type="rendered-facet" data-facet-id="battery-manufacturer">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Battery Manufacturer </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_296-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?battery-manufacturer=BYD" title="BYD">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>BYD</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?battery-manufacturer=Enphase"
                                                       title="Enphase"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Enphase</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?battery-manufacturer=Huawei"
                                                       title="Huawei"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Huawei</span> </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?battery-manufacturer=LG-Chem"
                                                       title="LG Chem"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> LG Chem </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?battery-manufacturer=PylonTech"
                                                       title="PylonTech"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> PylonTech
                                                    </a></li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_296 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_298"
                                     data-type="rendered-facet" data-facet-id="technology">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Battery Cell Type </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_298-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?technology=LFP-%28Lithium%29"
                                                       title="LFP (Lithium)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>LFP (Lithium)</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?technology=NMC-%28Lithium%29"
                                                       title="NMC (Lithium)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>NMC (Lithium)</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_300"
                                     data-type="rendered-facet" data-facet-id="batterytype">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Battery Type </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_300-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?batterytype=DC-High-Voltage"
                                                       title="DC High Voltage"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>DC High Voltage</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?batterytype=DC-Low-Voltage"
                                                       title="DC Low Voltage"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>DC Low Voltage</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?batterytype=AC-%28Inverter-included%29"
                                                       title="AC (Inverter included)"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>AC (Inverter included)</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_302"
                                     data-type="rendered-facet" data-facet-id="capacityextension">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Battery Capacity Extension </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_302-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?capacityextension=Modular"
                                                       title="Modular"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Modular</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?capacityextension=Parallel"
                                                       title="Parallel"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Parallel</span> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_304"
                                     data-type="rendered-facet" data-facet-id="compatible-inverter">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Compatible Inverter </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_304-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?compatible-inverter=Enphase"
                                                       title="Enphase"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Enphase</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?compatible-inverter=Fronius"
                                                       title="Fronius"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Fronius</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?compatible-inverter=Goodwe"
                                                       title="Goodwe"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Goodwe</span> </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?compatible-inverter=Huawei"
                                                       title="Huawei"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Huawei </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?compatible-inverter=Kostal"
                                                       title="Kostal"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Kostal </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?compatible-inverter=SMA" title="SMA">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> SMA </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?compatible-inverter=Solar-Edge"
                                                       title="Solar Edge"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Solar Edge
                                                    </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?compatible-inverter=Victron"
                                                       title="Victron"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> Victron </a>
                                                </li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_304 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_306"
                                     data-type="rendered-facet" data-facet-id="totalnominalenergy">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Battery Total Nominal Energy </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_306-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?totalnominalenergy=2.56" title="2.56">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>2.56</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?totalnominalenergy=2.76" title="2.76">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>2.76</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?totalnominalenergy=3.5" title="3.5">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>3.5</span> </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=3.55" title="3.55">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 3.55 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=4.0" title="4.0">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 4.0 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=5.0" title="5.0">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 5.0 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=6.5" title="6.5">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 6.5 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=9.8" title="9.8">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 9.8 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=10.0" title="10.0">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 10.0 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=10.3" title="10.3">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 10.3 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=13.1" title="13.1">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 13.1 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=15.36"
                                                       title="15.36"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> 15.36 </a>
                                                </li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?totalnominalenergy=16.0" title="16.0">
                                                                <span class="baywaCheckbox"><input type="checkbox"
                                                                                                   class="facets-faceted-navigation-item-facet-multi"><span
                                                                        class="checkbox"></span></span> 16.0 </a></li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_306 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-range-facet-group"
                                     id="facetList_308" data-type="rendered-facet"
                                     data-facet-id="custitem_usableenergy">
                                    <div class="facets-faceted-navigation-item-range-facet-group-expander">
                                        <h4 class="facets-faceted-navigation-item-range-facet-group-title">
                                            Battery Usable Energy (KWh) </h4></div>
                                    <div class="facets-faceted-navigation-item-range-facet-group-wrapper">
                                        <div class="facets-faceted-navigation-item-range-slider"
                                             data-toggle="slider" data-facet-id="custitem_usableenergy"
                                             data-min="2.56" data-max="24" data-low="2.56" data-high="24"
                                             data-step="10">
                                            <div class="facets-faceted-navigation-item-range-slider-bar"
                                                 data-control="bar" style="left: 0%; width: 100%;"></div>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-right"
                                                data-control="low" style="left: 0%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-start"
                                                        data-range-indicator="start">2.56</span></span>
                                            </button>
                                            <button
                                                class="facets-faceted-navigation-item-range-slider-bar-left"
                                                data-control="high" style="left: 100%;"><span
                                                    class="facets-faceted-navigation-item-range-bubble"><span
                                                        class="facets-faceted-navigation-item-range-label facets-faceted-navigation-item-range-end"
                                                        data-range-indicator="end">24</span></span></button>
                                        </div>
                                        <div class="facets-faceted-navigation-item-range-slider-text"> 2.56
                                            to 24
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_310"
                                     data-type="rendered-facet"
                                     data-facet-id="battery_storage_sub-category">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Battery Storage Sub-Category </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_310-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?battery_storage_sub-category=Batteries"
                                                       title="Batteries"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Batteries</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?battery_storage_sub-category=Battery-Management-Unit"
                                                       title="Battery Management Unit"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>Battery Management Unit</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?battery_storage_sub-category=Battery-Accessories"
                                                       title="Battery Accessories"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> <span>Battery Accessories</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_312"
                                     data-type="rendered-facet" data-facet-id="activation">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Activation </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_312-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?activation=RFID" title="RFID"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>RFID</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?activation=App" title="App"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>App</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?activation=RFID--AND--App"
                                                       title="RFID &amp; App"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>RFID &amp; App</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?activation=Plug--AND--Charge"
                                                       title="Plug &amp; Charge"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Plug &amp; Charge</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_314"
                                     data-type="rendered-facet" data-facet-id="e-mobility_sub-category">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            E-Mobility Sub-Category </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_314-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?e-mobility_sub-category=Wallboxes"
                                                       title="Wallboxes"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Wallboxes</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?e-mobility_sub-category=Charging-cables"
                                                       title="Charging cables"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Charging cables</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?e-mobility_sub-category=Pedestal"
                                                       title="Pedestal"> <span class="baywaCheckbox"><input
                                                                type="checkbox"
                                                                class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Pedestal</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?e-mobility_sub-category=Other-Accessories"
                                                       title="Other Accessories"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Other Accessories</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_316"
                                     data-type="rendered-facet" data-facet-id="emobility-type">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            E-Mobility Cable Type </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_316-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?emobility-type=Type-2-Cable"
                                                       title="Type 2 Cable"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Type 2 Cable</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?emobility-type=Type-2-Socket"
                                                       title="Type 2 Socket"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Type 2 Socket</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?emobility-type=Type-2-Twin-Socket"
                                                       title="Type 2 Twin Socket"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>Type 2 Twin Socket</span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_318"
                                     data-type="rendered-facet" data-facet-id="maxpower">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Maximum Power </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_318-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?maxpower=11-kW" title="11 kW"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>11 kW</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?maxpower=22-kW" title="22 kW"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>22 kW</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?maxpower=4%2C6-kW" title="4,6 kW">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>4,6 kW</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?maxpower=7%2C4-kW" title="7,4 kW">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>7,4 kW</span> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_320"
                                     data-type="rendered-facet" data-facet-id="performance-warranty">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Performance Warranty (years) </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_320-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?performance-warranty=25" title="25">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>25</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?performance-warranty=30" title="30">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>30</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?performance-warranty=10" title="10">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>10</span> </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?performance-warranty=15" title="15">
                                                                    <span class="baywaCheckbox"><input type="checkbox"
                                                                                                       class="facets-faceted-navigation-item-facet-multi"><span
                                                                            class="checkbox"></span></span>
                                                        <span>15</span> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="facets-faceted-navigation-item-facet-group" id="facetList_322"
                                     data-type="rendered-facet" data-facet-id="warranty">
                                    <div class="facets-faceted-navigation-item-facet-group-expander"><h4
                                            class="facets-faceted-navigation-item-facet-group-title">
                                            Product Warranty (years) </h4></div>
                                    <div
                                        class=" collapse in  facets-faceted-navigation-item-facet-group-wrapper"
                                        id="facetList_322-wrapper">
                                        <div class="facets-faceted-navigation-item-facet-group-content">
                                            <ul class="facets-faceted-navigation-item-facet-optionlist">
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?warranty=10" title="10"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>10</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?warranty=12" title="12"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>12</span>
                                                    </a></li>
                                                <li>
                                                    <a class="facets-faceted-navigation-item-facet-option baywaCheckboxContainer "
                                                       href="/search?warranty=15" title="15"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span>
                                                        <span>15</span>
                                                    </a></li>
                                            </ul>
                                            <ul class="facets-faceted-navigation-item-facet-optionlist-extra collapse">
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?warranty=25" title="25"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> 25 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?warranty=2" title="2"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> 2 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?warranty=3" title="3"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> 3 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?warranty=5" title="5"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> 5 </a></li>
                                                <li><a class="facets-faceted-navigation-item-facet-option "
                                                       href="/search?warranty=7" title="7"> <span
                                                            class="baywaCheckbox"><input type="checkbox"
                                                                                         class="facets-faceted-navigation-item-facet-multi"><span
                                                                class="checkbox"></span></span> 7 </a></li>
                                            </ul>
                                            <div
                                                class="facets-faceted-navigation-item-optionlist-extra-wrapper">
                                                <a class="facets-faceted-navigation-item-category-optionlist-extra-button"
                                                   data-toggle="collapse"
                                                   data-target="#facetList_322 .facets-faceted-navigation-item-facet-optionlist-extra"
                                                   data-action="see-more"><span
                                                        data-type="see-more"> See More </span><span
                                                        data-type="see-less"
                                                        class="facets-faceted-navigation-item-alt-caption"> See Less </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><!-- TEMPLATE STARTS: facets_faceted_navigation_item-->

                                    <!-- TEMPLATE ENDS: facets_faceted_navigation_item --></div>
                            </div>
                            <!-- TEMPLATE ENDS: facets_faceted_navigation --></div>
                        <div data-cms-area="facet_navigation_bottom"
                             data-cms-area-filters="page_type"></div>
                    </div>
                    <div class="facets-facet-browse-results" itemscope=""
                         itemtype="https://schema.org/ItemList">
                        <header class="facets-facet-browse-header"><h1 class="facets-facet-browse-title"
                                                                       data-quantity="871"> {{ count($products) }}
                                Products </h1>
                            <nav class="facets-facet-browse-list-header">
                                <div class="facets-facet-browse-list-header-expander">
                                    <button
                                        class="facets-facet-browse-list-header-expander-button collapsed"
                                        data-toggle="collapse" data-target="#list-header-filters"
                                        aria-expanded="true" aria-controls="list-header-filters"> Sort
                                        &amp; Filter <i
                                            class="facets-facet-browse-list-header-expander-icon"></i>
                                    </button>
                                </div>
                                <div class="facets-facet-browse-list-header-filters collapse"
                                     id="list-header-filters">
                                    <div class="facets-facet-browse-list-header-filters-wrapper">
                                        <div class="facets-facet-browse-list-header-filters-row">
                                            <div class="facets-facet-browse-list-header-filter-column"
                                                 data-view="Facets.ItemListShowSelector">
                                                <!-- TEMPLATE STARTS: facets_item_list_show_selector-->
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle" type="button"
                                                            id="showSelector" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="true"> 24
                                                        per page <i class="icon-chevron-down"
                                                                    aria-hidden="true"></i></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="/search?show=12" class="12">12 per
                                                                page</a></li>
                                                        <li><a href="/search" class="24">24 per page</a>
                                                        </li>
                                                        <li><a href="/search?show=48" class="48">48 per
                                                                page</a></li>
                                                    </ul>
                                                </div>
                                                <!-- TEMPLATE ENDS: facets_item_list_show_selector --></div>
                                            <div class="facets-facet-browse-list-header-filter-column"
                                                 data-view="Facets.ItemListSortSelector">
                                                <!-- TEMPLATE STARTS: facets_item_list_sort_selector-->
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> Default <i
                                                            class="icon-chevron-down"
                                                            aria-hidden="true"></i></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="/search"
                                                               class="custitem_sca_beneluxscore-desc">Default</a>
                                                        </li>
                                                        <li><a href="/search?order=custitem_itemwatt:asc"
                                                               class="custitem_itemwatt-asc">Watt, low -&gt;
                                                                high</a></li>
                                                        <li><a href="/search?order=custitem_itemwatt:desc"
                                                               class="custitem_itemwatt-desc">Watt, high -&gt;
                                                                low</a></li>
                                                        <li><a href="/search?order=displayname:asc"
                                                               class="displayname-asc">Item Reference, A -&gt;
                                                                Z</a></li>
                                                        <li><a href="/search?order=displayname:desc"
                                                               class="displayname-desc">Item Reference, Z -&gt;
                                                                A</a></li>
                                                    </ul>
                                                </div>
                                                <!-- TEMPLATE ENDS: facets_item_list_sort_selector --></div>
                                            <div class="facets-facet-browse-list-header-filter-column">
                                                <button
                                                    class="facets-facet-browse-list-header-filter-facets"
                                                    data-type="sc-pusher"
                                                    data-target="product-search-facets"> Narrow By <i
                                                        class="facets-facet-browse-list-header-filter-facets-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </header>
                        <meta itemprop="name" content="Products">
                        <div data-cms-area="facets_facet_browse_cms_area_1"
                             data-cms-area-filters="page_type"></div>
                        <div id="banner-section-top" class="content-banner banner-section-top"
                             data-cms-area="item_list_banner_top" data-cms-area-filters="path"></div>
                        <div class="facets-facet-browse-narrowedby" data-view="Facets.FacetsDisplay">
                            <!-- TEMPLATE STARTS: facets_facets_display-->

                            <!-- TEMPLATE ENDS: facets_facets_display -->
                        </div>
                        <div class="facets-facet-browse-items" data-view="Facets.Items">
                            <!-- TEMPLATE STARTS: facets_items_collection-->
                            @for ($i = 0; $i < 8; $i++)
                            <div class="facets-items-collection-view-row">
                                @for ($j = 0; $j < 3; $j++)
                                    @if($i + $j < count($products))
                                        @php $product = $products[$i + $j]; @endphp
                                        <div class="facets-items-collection-view-cell-span4">
                                        <div class="facets-item-cell-grid" data-type="item"
                                             itemprop="itemListElement" itemscope=""
                                             itemtype="http://schema.org/Product" data-track-productlist-list=""
                                             data-track-productlist-category=""
                                             data-track-productlist-position="" data-sku="32-111865">
                                            <meta itemprop="url"
                                                  content="/SolarEdge-Power-Optimizer-S440-32-111865">
                                            <div class="facets-item-cell-grid-image-wrapper"><a
                                                    class="facets-item-cell-grid-link-image"
                                                    href="/SolarEdge-Power-Optimizer-S440-32-111865">
                                                    <div data-view="BayWa.BayWaCustomBadges.ListItem">
                                                        <div class="baywa-itembadges listview">
                                                            <div class="baywa-itembadges-badge position-7"><img
                                                                    width="75"
                                                                    class="baywa-itembadges-badge-image"
                                                                    src="/images/badges/SolarEdge.png"
                                                                    alt="Manufacturer - SolarEdge"></div>
                                                        </div>
                                                    </div>
                                                    <img class="facets-item-cell-grid-image"
                                                         src="https://solarshop.baywa-re.lu/Product Images Lux/32-111865_1.jpg?resizeid=3&amp;resizeh=175&amp;resizew=175"
                                                         alt="" itemprop="image"><span itemprop="name">SolarEdge Power Optimizer S440 (S440-1GM4MRM)</span>
                                                    <div class="list-price" data-view="Cart.QuickAddToCart">
                                                        <!-- TEMPLATE STARTS: cart_quickaddtocart-->
                                                        <form class="cart-quickaddtocart"
                                                              data-action="add-to-cart">
                                                            <div data-view="ProductViewsPrice.Price"
                                                                 class="cart-quickaddtocart-price">
                                                                <!-- TEMPLATE STARTS: product_views_price-->
                                                                <div class="product-views-price">
                                                                    <div class="product-views-price-login-to-see-prices">
                                                                        <p class="product-views-price-message">
                                                                            @isset($user) ${{ $product->price }} @else Log in to see price @endisset
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- TEMPLATE ENDS: product_views_price -->
                                                            </div>
                                                        </form>
                                                        <!-- TEMPLATE ENDS: cart_quickaddtocart --></div>
                                                    <div data-view="ItemViews.Stock"
                                                         class="facets-item-cell-grid-stock-message">
                                                        <!-- TEMPLATE STARTS: baywa_baywaupcommingavailability_itemavailability-->

                                                        <!-- TEMPLATE ENDS: baywa_baywaupcommingavailability_itemavailability --></div>
                                                </a></div>
                                        </div>
                                    @endif
                                </div>
                                @endfor
                            </div>
                            @endfor
                            <!-- TEMPLATE ENDS: facets_items_collection -->
                        </div>
                    </div>
                    <div class="facets-facet-browse-pagination" data-view="GlobalViews.Pagination">
                        <!-- TEMPLATE STARTS: global_views_pagination-->
                        <nav class="global-views-pagination">
                            <ul class="global-views-pagination-links ">
                                <li class="global-views-pagination-prev-disabled"><a href="/search"><i
                                            class="global-views-pagination-prev-icon"></i></a></li>
                                <li class="global-views-pagination-links-number"><a
                                        class="global-views-pagination-active" href="/search">1</a></li>
                                <li class="global-views-pagination-links-number"><a
                                        href="/search?page=2">2</a></li>
                                <li class="global-views-pagination-links-number"><a
                                        href="/search?page=3">3</a></li>
                                <li class="global-views-pagination-links-number"><a
                                        href="/search?page=4">4</a></li>
                                <li class="global-views-pagination-links-number"><a
                                        href="/search?page=5">5</a></li>
                                <li class="global-views-pagination-links-number"><a
                                        href="/search?page=6">6</a></li>
                                <li class="global-views-pagination-links-number"><a
                                        href="/search?page=7">7</a></li>
                                <li class="global-views-pagination-links-number"><a
                                        href="/search?page=8">8</a></li>
                                <li class="global-views-pagination-links-number"><a
                                        href="/search?page=9">9</a></li>
                                <li class="global-views-pagination-disabled"><a href="/search">...</a></li>
                                <li class="global-views-pagination-next"><a href="/search?page=2"><i
                                            class="global-views-pagination-next-icon"></i></a></li>
                            </ul>
                        </nav>
                        <!-- TEMPLATE ENDS: global_views_pagination --></div>
                </div>
                <div class="facets-facet-browse-cms-area-2" data-cms-area="facets_facet_browse_cms_area_2"
                     data-cms-area-filters="page_type"></div>
                <div id="banner-section-bottom"
                     class="content-banner banner-section-bottom facets-facet-browse-banner-section-bottom"
                     data-cms-area="item_list_banner_bottom" data-cms-area-filters="page_type"></div>
            </section>
            <!-- TEMPLATE ENDS: facets_facet_browse --></div>
    </div>
</x-layout>
