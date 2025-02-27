<?php
    use app\widgets\Alert;
    use yii\bootstrap5\Html;
?>

    <nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-fixed">
        <div class="container-fluid navbar-wrapper">
            <div class="navbar-header d-flex">
                <div class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center" data-toggle="collapse"><i class="ft-menu font-medium-3"></i></div>
                <ul class="navbar-nav">
                    <li class="nav-item mr-2 d-none d-lg-block"><a class="nav-link apptogglefullscreen" id="navbar-fullscreen" href="javascript:;"><i class="ft-maximize font-medium-3"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="javascript:"><i class="ft-search font-medium-3"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="ft-search font-medium-3"></i></div>
                            <input class="input" type="text" placeholder="Explore Apex..." tabindex="0" data-search="template-search">
                            <div class="search-input-close"><i class="ft-x font-medium-3"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="navbar-container">
                <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="i18n-dropdown dropdown nav-item mr-2"><a class="nav-link d-flex align-items-center dropdown-toggle dropdown-language" id="dropdown-flag" href="javascript:;" data-toggle="dropdown"><img class="langimg selected-flag" src="../../../app-assets/img/flags/us.png" alt="flag"><span class="selected-language d-md-flex d-none">English</span></a>
                            <div class="dropdown-menu dropdown-menu-right text-left" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:;" data-language="en"><img class="langimg mr-2" src="../../../app-assets/img/flags/us.png" alt="flag"><span class="font-small-3">English</span></a><a class="dropdown-item" href="javascript:;" data-language="es"><img class="langimg mr-2" src="../../../app-assets/img/flags/es.png" alt="flag"><span class="font-small-3">Spanish</span></a><a class="dropdown-item" href="javascript:;" data-language="pt"><img class="langimg mr-2" src="../../../app-assets/img/flags/pt.png" alt="flag"><span class="font-small-3">Portuguese</span></a><a class="dropdown-item" href="javascript:;" data-language="de"><img class="langimg mr-2" src="../../../app-assets/img/flags/de.png" alt="flag"><span class="font-small-3">German</span></a></div>
                        </li>
                        <li class="dropdown nav-item"><a class="nav-link dropdown-toggle dropdown-notification p-0 mt-2" id="dropdownBasic1" href="javascript:;" data-toggle="dropdown"><i class="ft-bell font-medium-3"></i><span class="notification badge badge-pill badge-danger">4</span></a>
                            <ul class="notification-dropdown dropdown-menu dropdown-menu-media dropdown-menu-right m-0 overflow-hidden">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header d-flex justify-content-between m-0 px-3 py-2 white bg-primary">
                                        <div class="d-flex"><i class="ft-bell font-medium-3 d-flex align-items-center mr-2"></i><span class="noti-title">7 New Notification</span></div><span class="text-bold-400 cursor-pointer">Mark all as read</span>
                                    </div>
                                </li>
                                <li class="scrollable-container"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left">
                                                <div class="mr-3"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-20.png" alt="avatar" height="45" width="45"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="m-0"><span>Kate Young</span><small class="grey lighten-1 font-italic float-right">5 mins ago</small></h6><small class="noti-text">Commented on your photo</small>
                                                <h6 class="noti-text font-small-3 m-0">Great Shot John! Really enjoying the composition on this piece.</h6>
                                            </div>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left">
                                                <div class="mr-3"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-11.png" alt="avatar" height="45" width="45"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="m-0"><span>Andrew Watts</span><small class="grey lighten-1 font-italic float-right">49 mins ago</small></h6><small class="noti-text">Liked your album: UI/UX Inspo</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center py-0 pr-0">
                                            <div class="media-left">
                                                <div class="mr-3"><img src="../../../app-assets/img/icons/sketch-mac-icon.png" alt="avatar" height="45" width="45"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="m-0">Update</h6><small class="noti-text">MyBook v2.0.7</small>
                                            </div>
                                            <div class="media-right">
                                                <div class="border-left">
                                                    <div class="px-4 py-2 border-bottom">
                                                        <h6 class="m-0 text-bold-600">Update</h6>
                                                    </div>
                                                    <div class="px-4 py-2 text-center">
                                                        <h6 class="m-0">Close</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left">
                                                <div class="avatar bg-primary bg-lighten-3 mr-3 p-1"><span class="avatar-content font-medium-2">LD</span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="m-0"><span>Registration done</span><small class="grey lighten-1 font-italic float-right">6 hrs ago</small></h6>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="cursor-pointer">
                                        <div class="media d-flex align-items-center justify-content-between">
                                            <div class="media-left">
                                                <div class="media-body">
                                                    <h6 class="m-0">New Offers</h6>
                                                </div>
                                            </div>
                                            <div class="media-right">
                                                <div class="custom-control custom-switch">
                                                    <input class="switchery" type="checkbox" checked id="notificationSwtich" data-size="sm">
                                                    <label for="notificationSwtich"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer read-notification">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left">
                                                <div class="avatar bg-danger bg-lighten-4 mr-3 p-1"><span class="avatar-content font-medium-2"><i class="ft-heart text-danger"></i></span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="m-0"><span>Application approved</span><small class="grey lighten-1 font-italic float-right">18 hrs ago</small></h6>
                                            </div>
                                        </div>
                                    </div><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left">
                                                <div class="mr-3"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-6.png" alt="avatar" height="45" width="45"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="m-0"><span>Anna Lee</span><small class="grey lighten-1 font-italic float-right">27 hrs ago</small></h6><small class="noti-text">Commented on your photo</small>
                                                <h6 class="noti-text font-small-3 text-bold-500 m-0">Woah!Loving these colors! Keep it up</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-flex justify-content-between cursor-pointer read-notification">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left">
                                                <div class="avatar bg-info bg-lighten-4 mr-3 p-1">
                                                    <div class="avatar-content font-medium-2"><i class="ft-align-left text-info"></i></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="m-0"><span>Report generated</span><small class="grey lighten-1 font-italic float-right">35 hrs ago</small></h6>
                                            </div>
                                        </div>
                                    </div><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left">
                                                <div class="mr-3"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-7.png" alt="avatar" height="45" width="45"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="m-0"><span>Oliver Wright</span><small class="grey lighten-1 font-italic float-right">2 days ago</small></h6><small class="noti-text">Liked your album: UI/UX Inspo</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer">
                                    <div class="noti-footer text-center cursor-pointer primary border-top text-bold-400 py-1">Read All Notifications</div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item mr-1"><a class="nav-link dropdown-toggle user-dropdown d-flex align-items-end" id="dropdownBasic2" href="javascript:;" data-toggle="dropdown">
                                <div class="user d-md-flex d-none mr-2"><span class="text-right">John Doe</span><span class="text-right text-muted font-small-3">Available</span></div><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-1.png" alt="avatar" height="35" width="35">
                            </a>
                            <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0" aria-labelledby="dropdownBasic2"><a class="dropdown-item" href="app-chat.html">
                                    <div class="d-flex align-items-center"><i class="ft-message-square mr-2"></i><span>Chat</span></div>
                                </a><a class="dropdown-item" href="page-user-profile.html">
                                    <div class="d-flex align-items-center"><i class="ft-edit mr-2"></i><span>Edit Profile</span></div>
                                </a><a class="dropdown-item" href="app-email.html">
                                    <div class="d-flex align-items-center"><i class="ft-mail mr-2"></i><span>My Inbox</span></div>
                                </a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="auth-login.html">
                                    <div class="d-flex align-items-center"><i class="ft-power mr-2"></i><span>Logout</span></div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block mr-2 mt-1"><a class="nav-link notification-sidebar-toggle" href="javascript:;"><i class="ft-align-right font-medium-3"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar (Header) Ends-->

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
        <!-- main menu-->
        <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
        <div class="app-sidebar menu-fixed" data-background-color="man-of-steel" data-image="../../../app-assets/img/sidebar-bg/01.jpg" data-scroll-to-active="true">
            <!-- main menu header-->
            <!-- Sidebar Header starts-->
            <div class="sidebar-header">
                <div class="logo clearfix"><a class="logo-text float-left" href="index.html">
                        <div class="logo-img">
                            <?= Html::img('@web/templates/apexhtml-14/app-assets/img/logo.png', ['alt' => 'Apex Logo']) ?>
                        </div>
                        <span class="text">APEX</span>
                    </a><a class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle" href="javascript:;"><i class="toggle-icon ft-toggle-right" data-toggle="expanded"></i></a><a class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose" href="javascript:;"><i class="ft-x"></i></a></div>
            </div>
            <!-- Sidebar Header Ends-->
            <!-- / main menu header-->
            <!-- main menu content-->
            <div class="sidebar-content main-menu-content">
                <div class="nav-container">
                    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span></a>
                            <ul class="menu-content">
                                <li class="active"><a href="dashboard1.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Dashboard 1">Dashboard 1</span></a>
                                </li>
                                <li><a href="dashboard2.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Dashboard 2">Dashboard 2</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href="app-email.html"><i class="ft-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
                        </li>
                        <li class=" nav-item"><a href="app-chat.html"><i class="ft-message-square"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
                        </li>
                        <li class=" nav-item"><a href="app-taskboard.html"><i class="ft-file-text"></i><span class="menu-title" data-i18n="Task Board">Task Board</span></a>
                        </li>
                        <li class=" nav-item"><a href="app-calendar.html"><i class="ft-calendar"></i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-aperture"></i><span class="menu-title" data-i18n="UI Kit">UI Kit</span><span class="tag badge badge-pill badge-success float-right mr-1 mt-1">6</span></a>
                            <ul class="menu-content">
                                <li><a href="grids.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Grid">Grid</span></a>
                                </li>
                                <li><a href="typography.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Typography">Typography</span></a>
                                </li>
                                <li><a href="syntax-highlighter.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Syntax Highlighter">Syntax Highlighter</span></a>
                                </li>
                                <li><a href="helper-classes.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Helper Classes">Helper Classes</span></a>
                                </li>
                                <li><a href="text-utilities.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Text Utilities">Text Utilities</span></a>
                                </li>
                                <li><a href="color-palette.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Color Palette">Color Palette</span></a>
                                </li>
                                <li class="has-sub"><a href="javascript:;"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Icons">Icons</span></a>
                                    <ul class="menu-content">
                                        <li><a href="icons-feather.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Feather Icon">Feather Icon</span></a>
                                        </li>
                                        <li><a href="icons-font-awesome.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Font Awesome Icon">Font Awesome Icon</span></a>
                                        </li>
                                        <li><a href="icons-simple-line.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Simple Line Icon">Simple Line Icon</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-box"></i><span class="menu-title" data-i18n="Components">Components</span></a>
                            <ul class="menu-content">
                                <li class="has-sub"><a href="javascript:;"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Bootstrap">Bootstrap</span></a>
                                    <ul class="menu-content">
                                        <li><a href="components-buttons.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Buttons">Buttons</span></a>
                                        </li>
                                        <li><a href="components-alerts.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Alerts">Alerts</span></a>
                                        </li>
                                        <li><a href="components-badges.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Badges">Badges</span></a>
                                        </li>
                                        <li><a href="components-dropdowns.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Dropdowns">Dropdowns</span></a>
                                        </li>
                                        <li><a href="components-media-objects.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Media Objects">Media Objects</span></a>
                                        </li>
                                        <li><a href="components-pagination.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Pagination">Pagination</span></a>
                                        </li>
                                        <li><a href="components-progress.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Progress Bars">Progress Bars</span></a>
                                        </li>
                                        <li><a href="components-modals.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Modals">Modals</span></a>
                                        </li>
                                        <li><a href="components-collapse.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Collapse">Collapse</span></a>
                                        </li>
                                        <li><a href="components-lists.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="List">List</span></a>
                                        </li>
                                        <li><a href="components-carousel.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Carousel">Carousel</span></a>
                                        </li>
                                        <li><a href="components-popover.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Popover">Popover</span></a>
                                        </li>
                                        <li><a href="components-tabs.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Tabs">Tabs</span></a>
                                        </li>
                                        <li><a href="components-tooltip.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Tooltip">Tooltip</span></a>
                                        </li>
                                        <li><a href="components-spinner.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Spinner">Spinner</span></a>
                                        </li>
                                        <li><a href="components-toast.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Toast">Toast</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="javascript:;"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Extra">Extra</span></a>
                                    <ul class="menu-content">
                                        <li><a href="ex-component-sweet-alerts.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Sweet Alert">Sweet Alert</span></a>
                                        </li>
                                        <li><a href="ex-component-toastr.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Toastr">Toastr</span></a>
                                        </li>
                                        <li><a href="ex-component-nouislider.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="NoUI Slider">NoUI Slider</span></a>
                                        </li>
                                        <li><a href="ex-component-upload.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Upload">Upload</span></a>
                                        </li>
                                        <li><a href="ex-component-dragndrop.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Drag and Drop">Drag and Drop</span></a>
                                        </li>
                                        <li><a href="ex-component-tour.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Tour">Tour</span></a>
                                        </li>
                                        <li><a href="ex-component-media-player.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Media Player">Media Player</span></a>
                                        </li>
                                        <li><a href="ex-component-treeview.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Treeview">Treeview</span></a>
                                        </li>
                                        <li><a href="ex-component-swiper.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Swiper">Swiper</span></a>
                                        </li>
                                        <li><a href="ex-component-miscellaneous.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Miscellaneous">Miscellaneous</span></a>
                                        </li>
                                        <li><a href="ex-component-avatar.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Avatar">Avatar</span></a>
                                        </li>
                                        <li><a href="ex-component-image-cropper.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Image Cropper">Image Cropper</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-edit"></i><span class="menu-title" data-i18n="Forms">Forms</span></a>
                            <ul class="menu-content">
                                <li class="has-sub"><a href="javascript:;"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Elements">Elements</span></a>
                                    <ul class="menu-content">
                                        <li><a href="form-inputs.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Inputs">Inputs</span></a>
                                        </li>
                                        <li><a href="form-input-groups.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Input Groups">Input Groups</span></a>
                                        </li>
                                        <li><a href="form-radio.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Radio">Radio</span></a>
                                        </li>
                                        <li><a href="form-checkbox.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Checkbox">Checkbox</span></a>
                                        </li>
                                        <li><a href="form-switch.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Switch">Switch</span></a>
                                        </li>
                                        <li><a href="form-select.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Select">Select</span></a>
                                        </li>
                                        <li><a href="form-editor.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Editor">Editor</span></a>
                                        </li>
                                        <li><a href="form-input-tags.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Input Tag">Input Tag</span></a>
                                        </li>
                                        <li><a href="form-datetimepicker.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Datepicker">Datepicker</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="form-layout.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Layouts">Layouts</span></a>
                                </li>
                                <li><a href="form-validation.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Validation">Validation</span></a>
                                </li>
                                <li><a href="form-wizard.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Wizard">Wizard</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-grid"></i><span class="menu-title" data-i18n="Tables">Tables</span></a>
                            <ul class="menu-content">
                                <li><a href="table-basic.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a href="table-extended.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Extended">Extended</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-layout"></i><span class="menu-title" data-i18n="Data Tables">Data Tables</span></a>
                            <ul class="menu-content">
                                <li><a href="dt-basic-initialization.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a href="dt-advanced-initialization.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Advanced">Advanced</span></a>
                                </li>
                                <li><a href="dt-data-sources.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Data Sources">Data Sources</span></a>
                                </li>
                                <li><a href="dt-api.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="API">API</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-layers"></i><span class="menu-title" data-i18n="Cards">Cards</span></a>
                            <ul class="menu-content">
                                <li><a href="cards-basic.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Basic Cards">Basic Cards</span></a>
                                </li>
                                <li><a href="cards-advanced.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Advanced Cards">Advanced Cards</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-map"></i><span class="menu-title" data-i18n="Maps">Maps</span></a>
                            <ul class="menu-content">
                                <li><a href="map-leaflet.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="Charts">Charts</span></a>
                            <ul class="menu-content">
                                <li><a href="charts-apex.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Apex Charts">Apex Charts</span></a>
                                </li>
                                <li><a href="charts-chartjs.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="ChartJs">ChartJs</span></a>
                                </li>
                                <li><a href="charts-chartist.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Chartist">Chartist</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub nav-item"><a href="javascript:;"><i class="ft-copy"></i><span class="menu-title" data-i18n="Pages">Pages</span></a>
                            <ul class="menu-content">
                                <li class="has-sub"><a href="javascript:;"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Authentication">Authentication</span></a>
                                    <ul class="menu-content">
                                        <li><a href="auth-forgot-password.html" target="_blank"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Forgot Password">Forgot Password</span></a>
                                        </li>
                                        <li><a href="auth-login.html" target="_blank"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Login">Login</span></a>
                                        </li>
                                        <li><a href="auth-register.html" target="_blank"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Register">Register</span></a>
                                        </li>
                                        <li><a href="auth-lock-screen.html" target="_blank"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Lock Screen">Lock Screen</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="timeline-horizontal.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Horizontal Timeline">Horizontal Timeline</span></a>
                                </li>
                                <li class="has-sub"><a href="javascript:;"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Vertical Timeline">Vertical Timeline</span></a>
                                    <ul class="menu-content">
                                        <li><a href="timeline-vertical-center.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Center">Center</span></a>
                                        </li>
                                        <li><a href="timeline-vertical-left.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Left">Left</span></a>
                                        </li>
                                        <li><a href="timeline-vertical-right.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Right">Right</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="javascript:;"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Users">Users</span></a>
                                    <ul class="menu-content">
                                        <li><a href="page-users-list.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="List">List</span></a>
                                        </li>
                                        <li><a href="page-users-view.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="View">View</span></a>
                                        </li>
                                        <li><a href="page-users-edit.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="page-account-settings.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Account Settings">Account Settings</span></a>
                                </li>
                                <li><a href="page-user-profile.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="User Profile">User Profile</span></a>
                                </li>
                                <li><a href="page-invoice.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Invoice">Invoice</span></a>
                                </li>
                                <li><a href="page-error.html" target="_blank"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Error">Error</span></a>
                                </li>
                                <li><a href="page-coming-soon.html" target="_blank"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                                </li>
                                <li><a href="page-maintenance.html" target="_blank"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                                <li><a href="page-gallery.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Gallery">Gallery</span></a>
                                </li>
                                <li><a href="page-search.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Search">Search</span></a>
                                </li>
                                <li><a href="page-faq.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="FAQ">FAQ</span></a>
                                </li>
                                <li><a href="page-knowledge-base.html"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Knowledge Base">Knowledge Base</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nav-item"><a href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/html-documentation" target="_blank"><i class="ft-book"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
                        </li>
                        <li class=" nav-item"><a href="https://pixinvent.ticksy.com/" target="_blank"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="Support">Support</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- main menu content-->
            <div class="sidebar-background"></div>
            <!-- main menu footer-->
            <!-- include includes/menu-footer-->
            <!-- main menu footer-->
            <!-- / main menu-->
        </div>

        <div class="main-panel">

            <?=$content;?>
            
            <!-- BEGIN : Footer-->
            <footer class="footer undefined undefined">
                <p class="clearfix text-muted m-0"><span>Copyright &copy; 2020 &nbsp;</span><a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank">PIXINVENT</a><span class="d-none d-sm-inline-block">, All rights reserved.</span></p>
            </footer>
            <!-- End : Footer-->
            <!-- Scroll to top button -->
            <button class="btn btn-primary scroll-top" type="button"><i class="ft-arrow-up"></i></button>

        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- START Notification Sidebar-->
    <aside class="notification-sidebar d-none d-sm-none d-md-block" id="notification-sidebar"><a class="notification-sidebar-close"><i class="ft-x font-medium-3 grey darken-1"></i></a>
        <div class="side-nav notification-sidebar-content">
            <div class="row">
                <div class="col-12 notification-nav-tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="activity-tab" href="#activity-tab" aria-expanded="true">Activity</a></li>
                        <li class="nav-item"><a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="settings-tab" href="#settings-tab" aria-expanded="false">Settings</a></li>
                    </ul>
                </div>
                <div class="col-12 notification-tab-content">
                    <div class="tab-content">
                        <div class="row tab-pane active" id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1">
                            <div class="col-12" id="activity">
                                <h5 class="my-2 text-bold-500">System Logs</h5>
                                <div class="timeline-left timeline-wrapper mb-3" id="timeline-1">
                                    <ul class="timeline">
                                        <li class="timeline-line mt-4"></li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-download primary"></i></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>New Update Available</span><span class="float-right grey font-italic font-small-2">1 min ago</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">Android Pie 9.0.0_r52v availabe (658MB).</p>
                                                <div class="notification-note">
                                                    <div class="p-1 pl-2"><span class="text-bold-500">Download Now!</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-15.png" alt="avatar" width="40"></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>Reminder!</span><span class="float-right grey font-italic font-small-2">52 min ago</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">Your meeting is scheduled with Mr. Derrick Walters at 16:00.</p>
                                                <div class="notification-note">
                                                    <div class="p-1 pl-2"><span class="text-bold-500">Snooze</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-16.png" alt="avatar" width="40"></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>Recieved a File</span><span class="float-right grey font-italic font-small-2">4 hours ago</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">Christina Rogers sent you a file for the next conference.</p>
                                                <div class="notification-note">
                                                    <div class="p-1 pl-2"><img src="../../../app-assets/img/icons/sketch-mac-icon.png" alt="icon" width="20"><span class="text-bold-500 ml-2">Diamond.sketch</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-mic primary"></i></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>Voice Message</span><span class="float-right grey font-italic font-small-2">10 hours ago</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">Natalya Parker sent you a voice message.</p>
                                                <div class="notification-note">
                                                    <div class="p-1 pl-2"><span class="text-bold-500">Listen</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-cloud-drizzle primary"></i></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>Weather Update</span><span class="float-right grey font-italic font-small-2">Yesterday</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">Hi John! It is a rainy day with 16&deg;C.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h5 class="my-2 text-bold-500">Applications Logs</h5>
                                <div class="timeline-left timeline-wrapper" id="timeline-2">
                                    <ul class="timeline">
                                        <li class="timeline-line mt-4"></li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-26.png" alt="avatar" width="40"></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>Gmail</span><span class="float-right grey font-italic font-small-2">Just now</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">Victoria Hampton sent you a mail and has a file attachment with it.</p>
                                                <div class="notification-note">
                                                    <div class="p-1 pl-2"><img src="../../../app-assets/img/icons/pdf.png" alt="pdf icon" width="20"><span class="text-bold-500 ml-2">Register.pdf</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-droplet primary"></i></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>MakeMyTrip</span><span class="float-right grey font-italic font-small-2">7 hours ago</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">Your next flight for San Francisco will be on 24th March.</p>
                                                <div class="notification-note">
                                                    <div class="p-1 pl-2"><span class="text-bold-500">Important</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-23.png" alt="avatar" width="40"></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>CNN</span><span class="float-right grey font-italic font-small-2">16 hours ago</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">U.S. investigating report says email account linked to CIA Director was hacked.</p>
                                                <div class="notification-note">
                                                    <div class="p-1 pl-2"><span class="text-bold-500">Read full article</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-map primary"></i></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>Maps</span><span class="float-right grey font-italic font-small-2">Yesterday</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">You visited Walmart Supercenter in Chicago.</p>
                                                <div class="notification-note">
                                                    <div class="p-1 pl-2"><span class="text-bold-500">Write a Review!</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="ft-package primary"></i></span></div>
                                            <div class="activity-list-text">
                                                <h6 class="mb-1"><span>Updates Available</span><span class="float-right grey font-italic font-small-2">2 days ago</span></h6>
                                                <p class="mt-0 mb-2 font-small-3">19 app updates found.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row tab-pane" id="settings-tab" aria-labelledby="base-tab2">
                            <div class="col-12" id="settings">
                                <h5 class="mt-2 mb-3">General Settings</h5>
                                <ul class="list-unstyled mb-0 mx-2">
                                    <li class="mb-3">
                                        <div class="mb-1"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-switch">
                                                    <input class="custom-control-input" id="noti-s-switch-1" type="checkbox">
                                                    <label class="custom-control-label" for="noti-s-switch-1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-small-3 m-0">Use switches when looking for yes or no answers.</p>
                                    </li>
                                    <li class="mb-3">
                                        <div class="mb-1"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="checkbox">
                                                    <input id="noti-s-checkbox-1" type="checkbox" checked>
                                                    <label for="noti-s-checkbox-1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-small-3 m-0">The "for" attribute is necessary to bind checkbox with the input.</p>
                                    </li>
                                    <li class="mb-3">
                                        <div class="mb-1"><span class="text-bold-500">Product Update</span>
                                            <div class="float-right">
                                                <div class="custom-switch">
                                                    <input class="custom-control-input" id="noti-s-switch-4" type="checkbox" checked>
                                                    <label class="custom-control-label" for="noti-s-switch-4"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-small-3 m-0">Message and mail me on weekly product updates.</p>
                                    </li>
                                    <li class="mb-3">
                                        <div class="mb-1"><span class="text-bold-500">Email on Follow</span>
                                            <div class="float-right">
                                                <div class="custom-switch">
                                                    <input class="custom-control-input" id="noti-s-switch-3" type="checkbox">
                                                    <label class="custom-control-label" for="noti-s-switch-3"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-small-3 m-0">Mail me when someone follows me.</p>
                                    </li>
                                    <li class="mb-3">
                                        <div class="mb-1"><span class="text-bold-500">Announcements</span>
                                            <div class="float-right">
                                                <div class="checkbox">
                                                    <input id="noti-s-checkbox-2" type="checkbox" checked>
                                                    <label for="noti-s-checkbox-2"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-small-3 m-0">Receive all the news and announcements from my clients.</p>
                                    </li>
                                    <li class="mb-3">
                                        <div class="mb-1"><span class="text-bold-500">Date and Time</span>
                                            <div class="float-right">
                                                <div class="checkbox">
                                                    <input id="noti-s-checkbox-3" type="checkbox">
                                                    <label for="noti-s-checkbox-3"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-small-3 m-0">Show date and time on top of every page.</p>
                                    </li>
                                    <li>
                                        <div class="mb-1"><span class="text-bold-500">Email on Comments</span>
                                            <div class="float-right">
                                                <div class="custom-switch">
                                                    <input class="custom-control-input" id="noti-s-switch-2" type="checkbox" checked>
                                                    <label class="custom-control-label" for="noti-s-switch-2"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-small-3 m-0">Mail me when someone comments on my article.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- END Notification Sidebar-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>