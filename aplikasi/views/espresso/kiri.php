<div class="left-sidebar">
        
        <!-- LOGO -->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="<?= ASET;?>/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="<?= ASET;?>/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                    <img src="<?= ASET;?>/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <div class="sidebar-user-pro media border-end">
            <div class="position-relative mx-auto">
                <!-- <img src="<?= ASET;?>/images/users/user-11.jpg" alt="user" class="rounded-circle thumb-md"> -->
                <!-- <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span> -->
            </div>
            <div class="media-body ms-2 user-detail align-self-center">
                <h5 class="font-14 m-0 fw-bold">Kasus 2 </h5>
                <!-- <p class="opacity-50 mb-0">admin@kajili-jili.com</p> -->
            </div>
        </div>
        <div class="border-end">
            <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab" aria-selected="true">M<span>ain</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#Extra" role="tab" aria-selected="false">E<span>xtra</span></a>
                </li> -->
            </ul>
        </div>
        <!-- Tab panes -->

        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">

                        <!-- menu satu -->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto">
                                <i class="ti ti-currency-bitcoin menu-icon"></i>
                                <span>Tabel</span>
                            </a>
                            <div class="collapse " id="sidebarCrypto">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/nama_barang/data_nama_barang">Nama Barang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/nama_kasir/data_nama_kasir">Nama Kasir</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/nama_vendor/data_nama_vendor">Nama Vendor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/nama_yang_menerima/data_nama_yang_menerima">Nama Yang Menerima</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/pembayaran/data_pembayaran">Pembayaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/pemesanan/data_pemesanan">Pemesanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/penerimaan/data_penerimaan">Penerimaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/rincianpemesanan/data_rincianpemesanan">Rincian Pemesanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/rincianpenerimaan/data_rincianpenerimaan">Rincian Penerimaan</a>
                                    </li>      
                                </ul>
                            </div><!--end sidebarCrypto-->
                        </li>

                        
                        <!-- menu dua -->
                        <!-- <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>ain</span><br><span class="font-10 text-secondary fw-normal">Unique Dashboard</span></li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                <i class="ti ti-stack menu-icon"></i>
                                <span>View</span>
                            </a>
                            <div class="collapse " id="sidebarAnalytics">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/daftar_pemesanan/data_daftarpemesanan">Daftar Pemesanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/daftar_penerimaan/data_daftarpenerimaan">Daftar Penerimaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/daftar_pembayaran/data_daftarpembayaran">Daftar Pembayaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/rincian_pemesanan/data_rincian_pemesanan">Rincian Pemesanan</a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/rincian_penerimaan/data_rincian_penerimaan">Rincian Penerimaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/daftar_barang/data_daftar_barang">Daftar Barang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/daftar_vendor/data_daftar_vendor">Daftar Vendor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/daftar_penerima/data_daftar_penerima">Daftar Penerima</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo APLIKASI; ?>/daftar_kasir/data_daftar_kasir
                                        ">Daftar Kasir</a>
                                    </li>
                                
                                </ul>
                            </div><!--end sidebarAnalytics-->
                        </li>

                        







                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                <i class="ti ti-brand-asana menu-icon"></i>
                                <span>Projects</span>
                            </a>
                            <div class="collapse " id="sidebarProjects">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-index.html">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-clients.html">Clients</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-team.html">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-project.html">Project</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-task.html">Task</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-kanban-board.html">Kanban Board</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-chat.html">Chat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-users.html">Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="projects-create.html">Project Create</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                                <i class="ti ti-shopping-cart menu-icon"></i>
                                <span>Ecommerce</span>
                            </a>
                            <div class="collapse " id="sidebarEcommerce">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-index.html">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-products.html">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-product-list.html">Product List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-product-detail.html">Product Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-cart.html">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-checkout.html">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                        <!-- <li class="menu-label mt-0 text-primary font-12 fw-semibold">A<span>pps</span><br><span class="font-10 text-secondary fw-normal">Morder Applications</span></li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail">
                                <i class="ti ti-mail menu-icon"></i>
                                <span>Email</span>
                            </a>
                            <div class="collapse " id="sidebarEmail">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="apps-email-inbox.html">Inbox</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="apps-email-read.html">Read Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="apps-chat.html"><i class="ti ti-brand-hipchat menu-icon"></i><span>Chat</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apps-contact-list.html"><i class="ti ti-headphones menu-icon"></i><span>Contact List</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apps-calendar.html"><i class="ti ti-calendar menu-icon"></i><span>Calendar</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apps-invoice.html"><i class="ti ti-file-invoice menu-icon"></i><span>Invoice</span></a>
                        </li> -->
                        <!-- <li class="menu-label mt-0 text-primary font-12 fw-semibold">C<span>omponents</span><br><span class="font-10 text-secondary fw-normal">Bootstrap & Custom</span></li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarElements">
                                <i class="ti ti-planet menu-icon"></i>
                                <span>UI Elements</span>
                            </a>
                            <div class="collapse " id="sidebarElements">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-alerts.html">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-avatar.html">Avatar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-badges.html">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-cards.html">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-carousels.html">Carousels</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-grids.html">Grids</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-images.html">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-list.html">List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-modals.html">Modals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-navs.html">Navs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-navbar.html">Navbar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-paginations.html">Paginations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-progress.html">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-typography.html">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-videos.html">Videos</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                <i class="ti ti-chart-bubble menu-icon"></i>
                                <span>Advanced UI</span>
                            </a>
                            <div class="collapse " id="sidebarAdvancedUI">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-animation.html">Animation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-clipboard.html">Clip Board</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-dragula.html">Dragula</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-files.html">File Manager</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-highlight.html">Highlight</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-rangeslider.html">Range Slider</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-ratings.html">Ratings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-ribbons.html">Ribbons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-sweetalerts.html">Sweet Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-toasts.html">Toasts</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                                <i class="ti ti-forms menu-icon"></i>
                                <span>Forms</span>
                            </a>
                            <div class="collapse " id="sidebarForms">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-elements.html">Basic Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-validation.html">Validation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-wizard.html">Wizard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-editors.html">Editors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-uploads.html">File Upload</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-img-crop.html">Image Crop</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                                <i class="ti ti-chart-donut menu-icon"></i>
                                <span>Charts</span>
                            </a>
                            <div class="collapse " id="sidebarCharts">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts-apex.html">Apex</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts-justgage.html">JustGage</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts-chartjs.html">Chartjs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="charts-toast-ui.html">Toast</a>
                                    </li>
                                </ul>
                            </div>                      
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                                <i class="ti ti-table menu-icon"></i>
                                <span>Tables</span>
                            </a>
                            <div class="collapse " id="sidebarTables">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="tables-basic.html">Basic</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="tables-datatable.html">Datatables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="tables-editable.html">Editable</a>
                                    </li>
                                </ul>
                            </div>                 </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                <i class="ti ti-parachute menu-icon"></i>
                                <span>Icons</span>
                            </a>
                            <div class="collapse " id="sidebarIcons">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons-materialdesign.html">Material Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons-fontawesome.html">Font awesome</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons-tabler.html">Tabler</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons-feather.html">Feather</a>
                                    </li>
                                </ul>
                            </div>                </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="ti ti-map menu-icon"></i>
                                <span>Maps</span>
                            </a>
                            <div class="collapse " id="sidebarMaps">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="maps-google.html">Google Maps</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="maps-leaflet.html">Leaflet Maps</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="maps-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </div>               </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                <i class="ti ti-target menu-icon"></i>
                                <span>Email Templates</span>
                            </a>
                            <div class="collapse " id="sidebarEmailTemplates">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-templates-basic.html">Basic Action Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-templates-alert.html">Alert Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="email-templates-billing.html">Billing Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-label mt-0 text-primary font-12 fw-semibold">C<span>rafted</span><br><span class="font-10 text-secondary fw-normal">Unique Extra Pages</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="ti ti-file-diff menu-icon"></i>
                                <span>Pages</span>
                            </a>
                            <div class="collapse " id="sidebarPages">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-profile.html">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-tour.html">Tour</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-timeline.html">Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-treeview.html">Treeview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-starter.html">Starter Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-pricing.html">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-blogs.html">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-faq.html">FAQs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-gallery.html">Gallery</a>
                                    </li>
                                </ul>
                            </div>                </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                                <i class="ti ti-shield-lock menu-icon"></i>
                                <span>Authentication</span>
                            </a>
                            <div class="collapse " id="sidebarAuthentication">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-login.html">Log in</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-register.html">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-404.html">Error 404</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="auth-500.html">Error 500</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                        <li>
                            <div class="update-msg text-center position-relative">
                                <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                                <img src="<?= ASET;?>/images/speaker-light.png" alt="" class="" height="110">
                                <h5 class="mt-0">Mannat Themes</h5>
                                <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                                <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                            </div>
                        </li>
                    </ul>       </div>       </div>
        </div>
    </div>
    <!-- end left-sidenav-->
    <!-- end leftbar-menu-->