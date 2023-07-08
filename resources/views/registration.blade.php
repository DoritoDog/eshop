<x-layout>
    <div class="shopping-layout-breadcrumb" itemscope="" itemtype="https://schema.org/WebPage">
        <div data-view="Global.Breadcrumb" data-type="breadcrumb">
            <!-- TEMPLATE STARTS: global_views_breadcrumb-->
            <div id="banner-breadcrumb-top" class="content-banner banner-breadcrumb-top"
                 data-cms-area="breadcrumb_top" data-cms-area-filters="global"></div>
            <ul class="global-views-breadcrumb" itemprop="breadcrumb">
                <li class="global-views-breadcrumb-item-active"> Registration Form</li>
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
                    <!-- TEMPLATE ENDS: notifications_order --></div>
                <div data-view="Profile.Notifications"><!-- TEMPLATE STARTS: notifications_profile-->
                    <div class="notifications-profile">
                        <div data-view="ProfileChanges.Notifications"></div>
                    </div>
                    <!-- TEMPLATE ENDS: notifications_profile --></div>
            </div>
            <!-- TEMPLATE ENDS: notifications --></div>
    </div>
    <div id="content" class="shopping-layout-content" style="min-height: 0px;">
        <div class="contact-us"><!-- TEMPLATE STARTS: contact_us-->
            <div class="contact-us-container">
                <header class="contact-us-header"><h1 class="contact-us-title">Registration Form</h1>
                    <div id="contact-us-header-cms" class="contact-us-header-cms"
                         data-cms-area="contact-us-header-cms" data-cms-area-filters="path"></div>
                </header>
                <div class="contact-us-content">
                    <div id="contact-us-form-cms" class="contact-us-form-cms"
                         data-cms-area="contact-us-form-cms" data-cms-area-filters="path"></div>
                    <div class="contact-us-alert-placeholder" data-type="alert-placeholder"></div>
                    <form action="/register" class="contact-us-form" method="POST">
                        @csrf
                        <div class="lead-form-login-register-body">
                            <div class="lead-form-login-register-wrapper-column-login">
                                <div class="lead-form-login-register-wrapper-login"><h3></h3>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group">
                                    </div>
                                    <h3>Contact Information</h3>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="firstname"> First Name <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="name"
                                                   id="firstname" class="contact-us-form-input @error('name') is-invalid @enderror" value=""
                                                   maxlength="300">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="surname"> Last Name <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="surname"
                                                   id="lastname" class="contact-us-form-input @error('surname') is-invalid @enderror" value=""
                                                   maxlength="300"></div>
                                            @error('surname')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="email"> Email <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="email" id="email"
                                                   class="contact-us-form-input @error('email') is-invalid @enderror" value="" maxlength="300">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="password"> Password <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="password" name="password"
                                                   id="password" class="contact-us-form-input @error('password') is-invalid @enderror" value=""
                                                   maxlength="300"></div>
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="phone"> Phone <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="tel" name="phone" id="phone"
                                                   class="contact-us-form-input @error('phone') is-invalid @enderror" value="">
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <small class="contact-us-required"> Required<span class="contact-us-form-required">*</span></small>
                            </div>
                            <div class="lead-form-login-register-wrapper-column-register">
                                <div class="lead-form-login-register-wrapper-register"><h3>Company
                                        Information</h3>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="companyname"> Company Name
                                            <small class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="company_name"
                                                   id="companyname" class="contact-us-form-input @error('company_name') is-invalid @enderror" value=""
                                                   maxlength="300"></div>
                                        @error('company_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="vatregnumber"> VAT
                                            Registration Nr <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="vat"
                                                   id="vatregnumber" class="contact-us-form-input @error('vat') is-invalid @enderror" value=""
                                                   maxlength="300">
                                            @error('vat')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="address1"> Street <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="company_address1"
                                                   id="address1" class="contact-us-form-input @error('company_address1') is-invalid @enderror" value=""
                                                   maxlength="300">
                                            @error('company_address1')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="address2"> Number <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="company_address2"
                                                   id="address2" class="contact-us-form-input @error('company_address2') is-invalid @enderror" value=""
                                                   maxlength="300">
                                            @error('company_address2')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="city"> City <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="company_city" id="city"
                                                   class="contact-us-form-input @error('company_city') is-invalid @enderror" value="" maxlength="300">
                                            @error('company_city')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="zipcode"> Postal Code <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text" name="company_postal_code"
                                                   id="zipcode" class="contact-us-form-input @error('company_postal_code') is-invalid @enderror" value=""
                                                   maxlength="300">
                                            @error('company_postal_code')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="country"> Country <small
                                                class="contact-us-form-required">*</small> </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <select class="global-views-countriesDropdown-select @error('country') is-invalid @enderror"
                                                    name="country" id="country">
                                                <option value=""> Select </option>
                                                <option value="AT">Austria</option>
                                                <option value="BE">Belgium</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="FR">France</option>
                                                <option value="DE">Germany</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="NL">Netherlands</option>
                                            </select>
                                            @error('country')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="custentity_invoicecc">
                                            Invoice Email </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text"
                                                   name="invoice_email" id="custentity_invoicecc"
                                                   class="contact-us-form-input @error('invoice_email') is-invalid @enderror" value="" maxlength="300">
                                            @error('invoice_email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group"><label
                                            class="contact-us-form-label" for="custentity_trackingemail1">
                                            Tracking Email </label>
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input data-action="text" type="text"
                                                   name="tracking_email"
                                                   id="custentity_trackingemail1"
                                                   class="contact-us-form-input @error('tracking_email') is-invalid @enderror" value="" maxlength="300">
                                            @error('tracking_email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group">
                                    </div>
                                    <div class="contact-us-form-controls-group"
                                         data-validation="control-group">
                                        <div class="contact-us-form-controls" data-validation="control">
                                            <input type="checkbox" name="custentity_gdpr"
                                                   id="custentity_gdpr" value="T"> By submitting this
                                            registration, I agree to the
                                            Data Protection Policy, that is accessible via <a
                                                href="/not"
                                                target="_blank">this link</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contact-us-extras-cms" class="contact-us-extras-cms"
                             data-cms-area="contact-us-extras-cms" data-cms-area-filters="path"></div>
                        <div class="hide message"></div>
                        <div class="contact-us-form-controls-group" data-action="show-modal"
                             data-toggle="show-in-modal">
                            <button type="submit" class="contact-us-button-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- TEMPLATE ENDS: contact_us -->
        </div>
    </div>
</x-layout>
