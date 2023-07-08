<x-layout>
    <div class="checkout-layout-breadcrumb" data-view="Global.Breadcrumb" data-type="breadcrumb"></div>
    <div class="checkout-layout-notifications">
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
    <div id="content" class="checkout-layout-content">
        <div id="LoginRegister.View" data-root-component-id="LoginRegister.View">
            <!-- TEMPLATE STARTS: login_register-->
            <section class="login-register">
                <header class="login-register-header"><h1 class="login-register-title"> Log in | Register</h1></header>
                <div class="login-register-body">
                    <div class="login-register-wrapper-column-login">
                        <div class="login-register-wrapper-login" data-view="Login">
                            <!-- TEMPLATE STARTS: login_register_login-->
                            <h2 class="login-register-login-title">Returning customer</h2>
                            <p class="login-register-login-description"> Login below to checkout with an
                                existing account </p><small class="login-register-login-required">Required
                                <span class="login-register-login-form-required">*</span></small>
                            <form class="login-register-login-form focused-form-view" novalidate="" action="/auth" method="POST">
                                @csrf
                                <fieldset class="login-register-login-form-fieldset">
                                    <div class="login-register-login-form-controls-group"
                                         data-validation="control-group" data-validation-error="">
                                        <label class="login-register-login-form-label" for="login-email">
                                            <b>Email Address</b> <small class="login-register-login-form-required">*</small>
                                        </label>
                                        <div class="login-register-login-form-controls"
                                             data-validation="control"><input autofocus="" type="email"
                                                                              name="email" id="login-email"
                                                                              class="login-register-login-form-input @error('email') is-invalid @enderror"
                                                                              placeholder="your@email.com">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="login-register-login-form-controls-group"
                                         data-validation="control-group"><label
                                            class="login-register-login-form-label" for="login-password">
                                            <b>Password</b> <small
                                                class="login-register-login-form-required">*</small>
                                        </label>
                                        <div class="login-register-login-form-controls"
                                             data-validation="control"><input type="password"
                                                                              name="password"
                                                                              id="login-password"
                                                                              class="login-register-login-form-input">
                                            <div data-lastpass-icon-root="true"
                                                 style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                        </div>
                                    </div>
                                    <div data-view="Login.CustomFields"></div>
                                    <div class="login-register-login-form-controls-group"
                                         data-validation="control-group">
                                        <div class="login-register-login-form-controls"
                                             data-validation="control"><input value="true" type="hidden"
                                                                              name="redirect"></div>
                                    </div>
                                    <div data-type="alert-placeholder"
                                         class="login-register-login-form-messages"></div>
                                    <div class="login-register-login-form-controls-group"
                                         data-type="form-login-action">
                                        <button type="submit" class="login-register-login-submit"
                                                data-action="login-button"> Log In
                                        </button>
                                        <a class="login-register-login-forgot" data-action="forgot-password"
                                           href="/forgot-password"> Forgot password? </a></div>
                                </fieldset>
                            </form>
                            <!-- TEMPLATE ENDS: login_register_login -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- TEMPLATE ENDS: login_register -->
        </div>
    </div>
</x-layout>
