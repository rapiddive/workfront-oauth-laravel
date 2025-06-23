@extends('layouts.switcher-app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0 text-primary">Switcher</h4>
                                </div>
                                <div class="page-rightheader">
                                </div>
                            </div>
                            <!-- END PAGE-HEADER -->

                            <!-- ROW -->
                            <div class="container">
                                <div class="row row-sm">
                                    <div class="col-xl-6 m-auto">
                                        <div class="card sidebar-right1 ps">
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Navigation Style</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Vertical Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                                id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizontal Click Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                                id="myonoffswitch35" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizontal Hover Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                                id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">LTR and RTL VERSIONS</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">LTR Version</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                                id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch54" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">RTL Version</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                                id="myonoffswitch55" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch55" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Theme Style</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Light Theme</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                                id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Dark Theme</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body horizontal-switcher">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Horizontal layout Styles</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Default Logo</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch16" id="switchbtn-defaultlogo" class="onoffswitch2-checkbox" checked>
                                                            <label for="switchbtn-defaultlogo" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Center Logo</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch16" id="switchbtn-centerlogo" class="onoffswitch2-checkbox">
                                                            <label for="switchbtn-centerlogo" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Theme Color</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Primary Color</span>
                                                        <div>
                                                            <input class="input-color-picker color-primary-light"
                                                                value="#664dc9" id="colorID" type="color"
                                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" name="lightPrimary">
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Custom Background</span>
                                                        <div>
                                                            <input class="input-bg-picker background-primary-light"
                                                                value="#1a1c32" id="bgID"
                                                                type="color" data-id3="body" data-id4="theme" name="BackgroundPrimary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Menu Styles</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle lightMenu d-flex">
                                                        <span class="me-auto">Light Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                                        <span class="me-auto">Color Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                                        <span class="me-auto">Dark Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle gradientMenu d-flex mt-2">
                                                        <span class="me-auto">Gradient Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                id="myonoffswitch25" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Header Styles</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle lightHeader d-flex">
                                                        <span class="me-auto">Light Header</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                                id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                                        <span class="me-auto">Color Header</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                                id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                                        <span class="me-auto">Dark Header</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                                id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>

                                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                                        <span class="me-auto">Gradient Header</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                                id="myonoffswitch26" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Layout Width Styles</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Full Width</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                                id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Boxed</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                                id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Layout Positions</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Fixed</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                                id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Scrollable</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                                id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body leftmenu-styles">
                                                <div>
                                                    <h5 class="font-weight-semibold mb-3">Sidemenu Layout Styles</h5>
                                                </div>
                                                <div class="switch_section px-0">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Default Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Icon with Text</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Icon Overlay</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Closed Sidemenu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch30" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Hover Submenu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch17" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Hover Submenu Style 1</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch18" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Double Menu</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch19" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Double Menu with Tabs</span>
                                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                                id="myonoffswitch20" class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="switch_section px-0">
                                                    <div class="swichermainleft">
                                                        <h5 class="font-weight-semibold mb-4">Reset All Styles</h5>
                                                        <div class="skin-body">
                                                            <div class="switch_section text-center px-0"> 
                                                                <div class="btn-list"> 
                                                                    <button class="btn btn-success w-lg">Save Settings</button> 
                                                                    <button id="resetAll" class="btn btn-danger" type="button">Reset All</button>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->

@endsection

@section('scripts')


@endsection