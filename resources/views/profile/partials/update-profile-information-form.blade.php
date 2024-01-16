<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Profile Details</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form method="POST" action="{{ route('profile.patch') }}" enctype="multipart/form-data">
            @csrf
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Photo</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('assets/media/svg/avatars/blank.svg') }}')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $user->photo !== null ? asset('uploads/avatars/'.$user->photo) : asset('assets/media/avatars/300-1.jpg') }})"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="ki-outline ki-pencil fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
													<!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <input type="text" name="fullname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="{{ $user->name }}">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Username</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <input type="text" name="username" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Username" value="{{ $user->username }}">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                        <span class="required">Contact Phone</span>
                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active" data-kt-initialized="1">
                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                        <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{ $user->phone }}">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                    <!--begin::Option-->
                    <div class="col-md-2 d-flex align-items-center justify-items-center">
                        <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                            <span class="fw-semibold fs-6 px-3">Phone Verified: </span>
                            <input class="form-check-input" name="phone_verified" type="checkbox" checked value="1">
                        </label>
                    </div>
                    <!--end::Option-->
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Address</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <input type="text" name="address" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Adress" value="{{ $user->address }}">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="{{ $user->company }}">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="{{ $user->company_site }}">
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                        <span class="required">Country</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
                            <option value="">Select a Country...</option>
                            <option data-kt-flag="flags/afghanistan.svg" value="AF" {{ $user->country === 'AF' ? 'selected' : '' }}>Afghanistan</option>
                            <option data-kt-flag="flags/aland-islands.svg" value="AX" {{ $user->country === 'AX' ? 'selected' : '' }}>Aland Islands</option>
                            <option data-kt-flag="flags/albania.svg" value="AL" {{ $user->country === 'AL' ? 'selected' : '' }}>Albania</option>
                            <option data-kt-flag="flags/algeria.svg" value="DZ" {{ $user->country === 'DZ' ? 'selected' : '' }}>Algeria</option>
                            <option data-kt-flag="flags/american-samoa.svg" value="AS" {{ $user->country === 'AS' ? 'selected' : '' }}>American Samoa</option>
                            <option data-kt-flag="flags/andorra.svg" value="AD" {{ $user->country === 'AD' ? 'selected' : '' }}>Andorra</option>
                            <option data-kt-flag="flags/angola.svg" value="AO" {{ $user->country === 'AO' ? 'selected' : '' }}>Angola</option>
                            <option data-kt-flag="flags/anguilla.svg" value="AI" {{ $user->country === 'AI' ? 'selected' : '' }}>Anguilla</option>
                            <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG" {{ $user->country === 'AG' ? 'selected' : '' }}>Antigua and Barbuda</option>
                            <option data-kt-flag="flags/argentina.svg" value="AR" {{ $user->country === 'AR' ? 'selected' : '' }}>Argentina</option>
                            <option data-kt-flag="flags/armenia.svg" value="AM" {{ $user->country === 'AM' ? 'selected' : '' }}>Armenia</option>
                            <option data-kt-flag="flags/aruba.svg" value="AW" {{ $user->country === 'AW' ? 'selected' : '' }}>Aruba</option>
                            <option data-kt-flag="flags/australia.svg" value="AU" {{ $user->country === 'AU' ? 'selected' : '' }}>Australia</option>
                            <option data-kt-flag="flags/austria.svg" value="AT" {{ $user->country === 'AT' ? 'selected' : '' }}>Austria</option>
                            <option data-kt-flag="flags/azerbaijan.svg" value="AZ" {{ $user->country === 'AZ' ? 'selected' : '' }}>Azerbaijan</option>
                            <option data-kt-flag="flags/bahamas.svg" value="BS" {{ $user->country === 'BS' ? 'selected' : '' }}>Bahamas</option>
                            <option data-kt-flag="flags/bahrain.svg" value="BH" {{ $user->country === 'BH' ? 'selected' : '' }}>Bahrain</option>
                            <option data-kt-flag="flags/bangladesh.svg" value="BD" {{ $user->country === 'BD' ? 'selected' : '' }}>Bangladesh</option>
                            <option data-kt-flag="flags/barbados.svg" value="BB" {{ $user->country === 'BB' ? 'selected' : '' }}>Barbados</option>
                            <option data-kt-flag="flags/belarus.svg" value="BY" {{ $user->country === 'BY' ? 'selected' : '' }}>Belarus</option>
                            <option data-kt-flag="flags/belgium.svg" value="BE" {{ $user->country === 'BE' ? 'selected' : '' }}>Belgium</option>
                            <option data-kt-flag="flags/belize.svg" value="BZ" {{ $user->country === 'BZ' ? 'selected' : '' }}>Belize</option>
                            <option data-kt-flag="flags/benin.svg" value="BJ" {{ $user->country === 'BJ' ? 'selected' : '' }}>Benin</option>
                            <option data-kt-flag="flags/bermuda.svg" value="BM" {{ $user->country === 'BM' ? 'selected' : '' }}>Bermuda</option>
                            <option data-kt-flag="flags/bhutan.svg" value="BT" {{ $user->country === 'BT' ? 'selected' : '' }}>Bhutan</option>
                            <option data-kt-flag="flags/bolivia.svg" value="BO" {{ $user->country === 'BO' ? 'selected' : '' }}>Bolivia, Plurinational State of</option>
                            <option data-kt-flag="flags/bonaire.svg" value="BQ" {{ $user->country === 'BQ' ? 'selected' : '' }}>Bonaire, Sint Eustatius and Saba</option>
                            <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA" {{ $user->country === 'BA' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                            <option data-kt-flag="flags/botswana.svg" value="BW" {{ $user->country === 'BW' ? 'selected' : '' }}>Botswana</option>
                            <option data-kt-flag="flags/brazil.svg" value="BR" {{ $user->country === 'BR' ? 'selected' : '' }}>Brazil</option>
                            <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO" {{ $user->country === 'IO' ? 'selected' : '' }}>British Indian Ocean Territory</option>
                            <option data-kt-flag="flags/brunei.svg" value="BN" {{ $user->country === 'BN' ? 'selected' : '' }}>Brunei Darussalam</option>
                            <option data-kt-flag="flags/bulgaria.svg" value="BG" {{ $user->country === 'BG' ? 'selected' : '' }}>Bulgaria</option>
                            <option data-kt-flag="flags/burkina-faso.svg" value="BF" {{ $user->country === 'BF' ? 'selected' : '' }}>Burkina Faso</option>
                            <option data-kt-flag="flags/burundi.svg" value="BI" {{ $user->country === 'BI' ? 'selected' : '' }}>Burundi</option>
                            <option data-kt-flag="flags/cambodia.svg" value="KH" {{ $user->country === 'KH' ? 'selected' : '' }}>Cambodia</option>
                            <option data-kt-flag="flags/cameroon.svg" value="CM" {{ $user->country === 'CM' ? 'selected' : '' }}>Cameroon</option>
                            <option data-kt-flag="flags/canada.svg" value="CA" {{ $user->country === 'CA' ? 'selected' : '' }}>Canada</option>
                            <option data-kt-flag="flags/cape-verde.svg" value="CV" {{ $user->country === 'CV' ? 'selected' : '' }}>Cape Verde</option>
                            <option data-kt-flag="flags/cayman-islands.svg" value="KY" {{ $user->country === 'KY' ? 'selected' : '' }}>Cayman Islands</option>
                            <option data-kt-flag="flags/central-african-republic.svg" value="CF" {{ $user->country === 'CF' ? 'selected' : '' }}>Central African Republic</option>
                            <option data-kt-flag="flags/chad.svg" value="TD" {{ $user->country === 'TD' ? 'selected' : '' }}>Chad</option>
                            <option data-kt-flag="flags/chile.svg" value="CL" {{ $user->country === 'CL' ? 'selected' : '' }}>Chile</option>
                            <option data-kt-flag="flags/china.svg" value="CN" {{ $user->country === 'CN' ? 'selected' : '' }}>China</option>
                            <option data-kt-flag="flags/christmas-island.svg" value="CX" {{ $user->country === 'CX' ? 'selected' : '' }}>Christmas Island</option>
                            <option data-kt-flag="flags/cocos-island.svg" value="CC" {{ $user->country === 'CC' ? 'selected' : '' }}>Cocos (Keeling) Islands</option>
                            <option data-kt-flag="flags/colombia.svg" value="CO" {{ $user->country === 'CO' ? 'selected' : '' }}>Colombia</option>
                            <option data-kt-flag="flags/comoros.svg" value="KM" {{ $user->country === 'KM' ? 'selected' : '' }}>Comoros</option>
                            <option data-kt-flag="flags/cook-islands.svg" value="CK" {{ $user->country === 'CK' ? 'selected' : '' }}>Cook Islands</option>
                            <option data-kt-flag="flags/costa-rica.svg" value="CR" {{ $user->country === 'CR' ? 'selected' : '' }}>Costa Rica</option>
                            <option data-kt-flag="flags/ivory-coast.svg" value="CI" {{ $user->country === 'CI' ? 'selected' : '' }}>Côte d'Ivoire</option>
                            <option data-kt-flag="flags/croatia.svg" value="HR" {{ $user->country === 'HR' ? 'selected' : '' }}>Croatia</option>
                            <option data-kt-flag="flags/cuba.svg" value="CU" {{ $user->country === 'CU' ? 'selected' : '' }}>Cuba</option>
                            <option data-kt-flag="flags/curacao.svg" value="CW" {{ $user->country === 'CW' ? 'selected' : '' }}>Curaçao</option>
                            <option data-kt-flag="flags/czech-republic.svg" value="CZ" {{ $user->country === 'CZ' ? 'selected' : '' }}>Czech Republic</option>
                            <option data-kt-flag="flags/denmark.svg" value="DK" {{ $user->country === 'DK' ? 'selected' : '' }}>Denmark</option>
                            <option data-kt-flag="flags/djibouti.svg" value="DJ" {{ $user->country === 'DJ' ? 'selected' : '' }}>Djibouti</option>
                            <option data-kt-flag="flags/dominica.svg" value="DM" {{ $user->country === 'DM' ? 'selected' : '' }}>Dominica</option>
                            <option data-kt-flag="flags/dominican-republic.svg" value="DO" {{ $user->country === 'DO' ? 'selected' : '' }}>Dominican Republic</option>
                            <option data-kt-flag="flags/ecuador.svg" value="EC" {{ $user->country === 'EC' ? 'selected' : '' }}>Ecuador</option>
                            <option data-kt-flag="flags/egypt.svg" value="EG" {{ $user->country === 'EG' ? 'selected' : '' }}>Egypt</option>
                            <option data-kt-flag="flags/el-salvador.svg" value="SV" {{ $user->country === 'SV' ? 'selected' : '' }}>El Salvador</option>
                            <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ" {{ $user->country === 'GQ' ? 'selected' : '' }}>Equatorial Guinea</option>
                            <option data-kt-flag="flags/eritrea.svg" value="ER" {{ $user->country === 'ER' ? 'selected' : '' }}>Eritrea</option>
                            <option data-kt-flag="flags/estonia.svg" value="EE" {{ $user->country === 'EE' ? 'selected' : '' }}>Estonia</option>
                            <option data-kt-flag="flags/ethiopia.svg" value="ET" {{ $user->country === 'ET' ? 'selected' : '' }}>Ethiopia</option>
                            <option data-kt-flag="flags/falkland-islands.svg" value="FK" {{ $user->country === 'FK' ? 'selected' : '' }}>Falkland Islands (Malvinas)</option>
                            <option data-kt-flag="flags/fiji.svg" value="FJ" {{ $user->country === 'FJ' ? 'selected' : '' }}>Fiji</option>
                            <option data-kt-flag="flags/finland.svg" value="FI" {{ $user->country === 'FI' ? 'selected' : '' }}>Finland</option>
                            <option data-kt-flag="flags/france.svg" value="FR" {{ $user->country === 'FR' ? 'selected' : '' }}>France</option>
                            <option data-kt-flag="flags/french-polynesia.svg" value="PF" {{ $user->country === 'PF' ? 'selected' : '' }}>French Polynesia</option>
                            <option data-kt-flag="flags/gabon.svg" value="GA" {{ $user->country === 'GA' ? 'selected' : '' }}>Gabon</option>
                            <option data-kt-flag="flags/gambia.svg" value="GM" {{ $user->country === 'GM' ? 'selected' : '' }}>Gambia</option>
                            <option data-kt-flag="flags/georgia.svg" value="GE" {{ $user->country === 'GE' ? 'selected' : '' }}>Georgia</option>
                            <option data-kt-flag="flags/germany.svg" value="DE" {{ $user->country === 'DE' ? 'selected' : '' }}>Germany</option>
                            <option data-kt-flag="flags/ghana.svg" value="GH" {{ $user->country === 'GH' ? 'selected' : '' }}>Ghana</option>
                            <option data-kt-flag="flags/gibraltar.svg" value="GI" {{ $user->country === 'GI' ? 'selected' : '' }}>Gibraltar</option>
                            <option data-kt-flag="flags/greece.svg" value="GR" {{ $user->country === 'GR' ? 'selected' : '' }}>Greece</option>
                            <option data-kt-flag="flags/greenland.svg" value="GL" {{ $user->country === 'GL' ? 'selected' : '' }}>Greenland</option>
                            <option data-kt-flag="flags/grenada.svg" value="GD" {{ $user->country === 'GD' ? 'selected' : '' }}>Grenada</option>
                            <option data-kt-flag="flags/guam.svg" value="GU" {{ $user->country === 'GU' ? 'selected' : '' }}>Guam</option>
                            <option data-kt-flag="flags/guatemala.svg" value="GT" {{ $user->country === 'GT' ? 'selected' : '' }}>Guatemala</option>
                            <option data-kt-flag="flags/guernsey.svg" value="GG" {{ $user->country === 'GG' ? 'selected' : '' }}>Guernsey</option>
                            <option data-kt-flag="flags/guinea.svg" value="GN" {{ $user->country === 'GN' ? 'selected' : '' }}>Guinea</option>
                            <option data-kt-flag="flags/guinea-bissau.svg" value="GW" {{ $user->country === 'GW' ? 'selected' : '' }}>Guinea-Bissau</option>
                            <option data-kt-flag="flags/haiti.svg" value="HT" {{ $user->country === 'HT' ? 'selected' : '' }}>Haiti</option>
                            <option data-kt-flag="flags/vatican-city.svg" value="VA" {{ $user->country === 'VA' ? 'selected' : '' }}>Holy See (Vatican City State)</option>
                            <option data-kt-flag="flags/honduras.svg" value="HN" {{ $user->country === 'HN' ? 'selected' : '' }}>Honduras</option>
                            <option data-kt-flag="flags/hong-kong.svg" value="HK" {{ $user->country === 'HK' ? 'selected' : '' }}>Hong Kong</option>
                            <option data-kt-flag="flags/hungary.svg" value="HU" {{ $user->country === 'HU' ? 'selected' : '' }}>Hungary</option>
                            <option data-kt-flag="flags/iceland.svg" value="IS" {{ $user->country === 'IS' ? 'selected' : '' }}>Iceland</option>
                            <option data-kt-flag="flags/india.svg" value="IN" {{ $user->country === 'IN' ? 'selected' : '' }}>India</option>
                            <option data-kt-flag="flags/indonesia.svg" value="ID" {{ $user->country === 'ID' ? 'selected' : '' }}>Indonesia</option>
                            <option data-kt-flag="flags/iran.svg" value="IR" {{ $user->country === 'IR' ? 'selected' : '' }}>Iran, Islamic Republic of</option>
                            <option data-kt-flag="flags/iraq.svg" value="IQ" {{ $user->country === 'IQ' ? 'selected' : '' }}>Iraq</option>
                            <option data-kt-flag="flags/ireland.svg" value="IE" {{ $user->country === 'IE' ? 'selected' : '' }}>Ireland</option>
                            <option data-kt-flag="flags/isle-of-man.svg" value="IM" {{ $user->country === 'IM' ? 'selected' : '' }}>Isle of Man</option>
                            <option data-kt-flag="flags/israel.svg" value="IL" {{ $user->country === 'IL' ? 'selected' : '' }}>Israel</option>
                            <option data-kt-flag="flags/italy.svg" value="IT" {{ $user->country === 'IT' ? 'selected' : '' }}>Italy</option>
                            <option data-kt-flag="flags/jamaica.svg" value="JM" {{ $user->country === 'JM' ? 'selected' : '' }}>Jamaica</option>
                            <option data-kt-flag="flags/japan.svg" value="JP" {{ $user->country === 'JP' ? 'selected' : '' }}>Japan</option>
                            <option data-kt-flag="flags/jersey.svg" value="JE" {{ $user->country === 'JE' ? 'selected' : '' }}>Jersey</option>
                            <option data-kt-flag="flags/jordan.svg" value="JO" {{ $user->country === 'JO' ? 'selected' : '' }}>Jordan</option>
                            <option data-kt-flag="flags/kazakhstan.svg" value="KZ" {{ $user->country === 'KZ' ? 'selected' : '' }}>Kazakhstan</option>
                            <option data-kt-flag="flags/kenya.svg" value="KE" {{ $user->country === 'KE' ? 'selected' : '' }}>Kenya</option>
                            <option data-kt-flag="flags/kiribati.svg" value="KI" {{ $user->country === 'KI' ? 'selected' : '' }}>Kiribati</option>
                            <option data-kt-flag="flags/north-korea.svg" value="KP" {{ $user->country === 'KP' ? 'selected' : '' }}>Korea, Democratic People's Republic of</option>
                            <option data-kt-flag="flags/kuwait.svg" value="KW" {{ $user->country === 'KW' ? 'selected' : '' }}>Kuwait</option>
                            <option data-kt-flag="flags/kyrgyzstan.svg" value="KG" {{ $user->country === 'KG' ? 'selected' : '' }}>Kyrgyzstan</option>
                            <option data-kt-flag="flags/laos.svg" value="LA" {{ $user->country === 'LA' ? 'selected' : '' }}>Lao People's Democratic Republic</option>
                            <option data-kt-flag="flags/latvia.svg" value="LV" {{ $user->country === 'LV' ? 'selected' : '' }}>Latvia</option>
                            <option data-kt-flag="flags/lebanon.svg" value="LB" {{ $user->country === 'LB' ? 'selected' : '' }}>Lebanon</option>
                            <option data-kt-flag="flags/lesotho.svg" value="LS" {{ $user->country === 'LS' ? 'selected' : '' }}>Lesotho</option>
                            <option data-kt-flag="flags/liberia.svg" value="LR" {{ $user->country === 'LR' ? 'selected' : '' }}>Liberia</option>
                            <option data-kt-flag="flags/libya.svg" value="LY" {{ $user->country === 'LY' ? 'selected' : '' }}>Libya</option>
                            <option data-kt-flag="flags/liechtenstein.svg" value="LI" {{ $user->country === 'LI' ? 'selected' : '' }}>Liechtenstein</option>
                            <option data-kt-flag="flags/lithuania.svg" value="LT" {{ $user->country === 'LT' ? 'selected' : '' }}>Lithuania</option>
                            <option data-kt-flag="flags/luxembourg.svg" value="LU" {{ $user->country === 'LU' ? 'selected' : '' }}>Luxembourg</option>
                            <option data-kt-flag="flags/macao.svg" value="MO" {{ $user->country === 'MO' ? 'selected' : '' }}>Macao</option>
                            <option data-kt-flag="flags/madagascar.svg" value="MG" {{ $user->country === 'MG' ? 'selected' : '' }}>Madagascar</option>
                            <option data-kt-flag="flags/malawi.svg" value="MW" {{ $user->country === 'MW' ? 'selected' : '' }}>Malawi</option>
                            <option data-kt-flag="flags/malaysia.svg" value="MY" {{ $user->country === 'MY' ? 'selected' : '' }}>Malaysia</option>
                            <option data-kt-flag="flags/maldives.svg" value="MV" {{ $user->country === 'MV' ? 'selected' : '' }}>Maldives</option>
                            <option data-kt-flag="flags/mali.svg" value="ML" {{ $user->country === 'ML' ? 'selected' : '' }}>Mali</option>
                            <option data-kt-flag="flags/malta.svg" value="MT" {{ $user->country === 'MT' ? 'selected' : '' }}>Malta</option>
                            <option data-kt-flag="flags/marshall-island.svg" value="MH" {{ $user->country === 'MH' ? 'selected' : '' }}>Marshall Islands</option>
                            <option data-kt-flag="flags/martinique.svg" value="MQ" {{ $user->country === 'MQ' ? 'selected' : '' }}>Martinique</option>
                            <option data-kt-flag="flags/mauritania.svg" value="MR" {{ $user->country === 'MR' ? 'selected' : '' }}>Mauritania</option>
                            <option data-kt-flag="flags/mauritius.svg" value="MU" {{ $user->country === 'MU' ? 'selected' : '' }}>Mauritius</option>
                            <option data-kt-flag="flags/mexico.svg" value="MX" {{ $user->country === 'MX' ? 'selected' : '' }}>Mexico</option>
                            <option data-kt-flag="flags/micronesia.svg" value="FM" {{ $user->country === 'FM' ? 'selected' : '' }}>Micronesia, Federated States of</option>
                            <option data-kt-flag="flags/moldova.svg" value="MD" {{ $user->country === 'MD' ? 'selected' : '' }}>Moldova, Republic of</option>
                            <option data-kt-flag="flags/monaco.svg" value="MC" {{ $user->country === 'MC' ? 'selected' : '' }}>Monaco</option>
                            <option data-kt-flag="flags/mongolia.svg" value="MN" {{ $user->country === 'MN' ? 'selected' : '' }}>Mongolia</option>
                            <option data-kt-flag="flags/montenegro.svg" value="ME" {{ $user->country === 'ME' ? 'selected' : '' }}>Montenegro</option>
                            <option data-kt-flag="flags/montserrat.svg" value="MS" {{ $user->country === 'MS' ? 'selected' : '' }}>Montserrat</option>
                            <option data-kt-flag="flags/morocco.svg" value="MA" {{ $user->country === 'MA' ? 'selected' : '' }}>Morocco</option>
                            <option data-kt-flag="flags/mozambique.svg" value="MZ" {{ $user->country === 'MZ' ? 'selected' : '' }}>Mozambique</option>
                            <option data-kt-flag="flags/myanmar.svg" value="MM" {{ $user->country === 'MM' ? 'selected' : '' }}>Myanmar</option>
                            <option data-kt-flag="flags/namibia.svg" value="NA" {{ $user->country === 'NA' ? 'selected' : '' }}>Namibia</option>
                            <option data-kt-flag="flags/nauru.svg" value="NR" {{ $user->country === 'NR' ? 'selected' : '' }}>Nauru</option>
                            <option data-kt-flag="flags/nepal.svg" value="NP" {{ $user->country === 'NP' ? 'selected' : '' }}>Nepal</option>
                            <option data-kt-flag="flags/netherlands.svg" value="NL" {{ $user->country === 'NL' ? 'selected' : '' }}>Netherlands</option>
                            <option data-kt-flag="flags/new-zealand.svg" value="NZ" {{ $user->country === 'NZ' ? 'selected' : '' }}>New Zealand</option>
                            <option data-kt-flag="flags/nicaragua.svg" value="NI" {{ $user->country === 'NI' ? 'selected' : '' }}>Nicaragua</option>
                            <option data-kt-flag="flags/niger.svg" value="NE" {{ $user->country === 'NE' ? 'selected' : '' }}>Niger</option>
                            <option data-kt-flag="flags/nigeria.svg" value="NG" {{ $user->country === 'NG' ? 'selected' : '' }}>Nigeria</option>
                            <option data-kt-flag="flags/niue.svg" value="NU" {{ $user->country === 'NU' ? 'selected' : '' }}>Niue</option>
                            <option data-kt-flag="flags/norfolk-island.svg" value="NF" {{ $user->country === 'NF' ? 'selected' : '' }}>Norfolk Island</option>
                            <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP" {{ $user->country === 'MP' ? 'selected' : '' }}>Northern Mariana Islands</option>
                            <option data-kt-flag="flags/norway.svg" value="NO" {{ $user->country === 'NO' ? 'selected' : '' }}>Norway</option>
                            <option data-kt-flag="flags/oman.svg" value="OM" {{ $user->country === 'OM' ? 'selected' : '' }}>Oman</option>
                            <option data-kt-flag="flags/pakistan.svg" value="PK" {{ $user->country === 'PK' ? 'selected' : '' }}>Pakistan</option>
                            <option data-kt-flag="flags/palau.svg" value="PW" {{ $user->country === 'PW' ? 'selected' : '' }}>Palau</option>
                            <option data-kt-flag="flags/palestine.svg" value="PS" {{ $user->country === 'PS' ? 'selected' : '' }}>Palestinian Territory, Occupied</option>
                            <option data-kt-flag="flags/panama.svg" value="PA" {{ $user->country === 'PA' ? 'selected' : '' }}>Panama</option>
                            <option data-kt-flag="flags/papua-new-guinea.svg" value="PG" {{ $user->country === 'PG' ? 'selected' : '' }}>Papua New Guinea</option>
                            <option data-kt-flag="flags/paraguay.svg" value="PY" {{ $user->country === 'PY' ? 'selected' : '' }}>Paraguay</option>
                            <option data-kt-flag="flags/peru.svg" value="PE" {{ $user->country === 'PE' ? 'selected' : '' }}>Peru</option>
                            <option data-kt-flag="flags/philippines.svg" value="PH" {{ $user->country === 'PH' ? 'selected' : '' }}>Philippines</option>
                            <option data-kt-flag="flags/poland.svg" value="PL" {{ $user->country === 'PL' ? 'selected' : '' }}>Poland</option>
                            <option data-kt-flag="flags/portugal.svg" value="PT" {{ $user->country === 'PT' ? 'selected' : '' }}>Portugal</option>
                            <option data-kt-flag="flags/puerto-rico.svg" value="PR" {{ $user->country === 'PR' ? 'selected' : '' }}>Puerto Rico</option>
                            <option data-kt-flag="flags/qatar.svg" value="QA" {{ $user->country === 'QA' ? 'selected' : '' }}>Qatar</option>
                            <option data-kt-flag="flags/romania.svg" value="RO" {{ $user->country === 'RO' ? 'selected' : '' }}>Romania</option>
                            <option data-kt-flag="flags/russia.svg" value="RU" {{ $user->country === 'RU' ? 'selected' : '' }}>Russian Federation</option>
                            <option data-kt-flag="flags/rwanda.svg" value="RW" {{ $user->country === 'RW' ? 'selected' : '' }}>Rwanda</option>
                            <option data-kt-flag="flags/st-barts.svg" value="BL" {{ $user->country === 'BL' ? 'selected' : '' }}>Saint Barthélemy</option>
                            <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN" {{ $user->country === 'KN' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                            <option data-kt-flag="flags/st-lucia.svg" value="LC" {{ $user->country === 'LC' ? 'selected' : '' }}>Saint Lucia</option>
                            <option data-kt-flag="flags/sint-maarten.svg" value="MF" {{ $user->country === 'MF' ? 'selected' : '' }}>Saint Martin (French part)</option>
                            <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC" {{ $user->country === 'VC' ? 'selected' : '' }}>Saint Vincent and the Grenadines</option>
                            <option data-kt-flag="flags/samoa.svg" value="WS" {{ $user->country === 'WS' ? 'selected' : '' }}>Samoa</option>
                            <option data-kt-flag="flags/san-marino.svg" value="SM" {{ $user->country === 'SM' ? 'selected' : '' }}>San Marino</option>
                            <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST" {{ $user->country === 'ST' ? 'selected' : '' }}>Sao Tome and Principe</option>
                            <option data-kt-flag="flags/saudi-arabia.svg" value="SA" {{ $user->country === 'SA' ? 'selected' : '' }}>Saudi Arabia</option>
                            <option data-kt-flag="flags/senegal.svg" value="SN" {{ $user->country === 'SN' ? 'selected' : '' }}>Senegal</option>
                            <option data-kt-flag="flags/serbia.svg" value="RS" {{ $user->country === 'RS' ? 'selected' : '' }}>Serbia</option>
                            <option data-kt-flag="flags/seychelles.svg" value="SC" {{ $user->country === 'SC' ? 'selected' : '' }}>Seychelles</option>
                            <option data-kt-flag="flags/sierra-leone.svg" value="SL" {{ $user->country === 'SL' ? 'selected' : '' }}>Sierra Leone</option>
                            <option data-kt-flag="flags/singapore.svg" value="SG" {{ $user->country === 'SG' ? 'selected' : '' }}>Singapore</option>
                            <option data-kt-flag="flags/sint-maarten.svg" value="SX" {{ $user->country === 'SX' ? 'selected' : '' }}>Sint Maarten (Dutch part)</option>
                            <option data-kt-flag="flags/slovakia.svg" value="SK" {{ $user->country === 'SK' ? 'selected' : '' }}>Slovakia</option>
                            <option data-kt-flag="flags/slovenia.svg" value="SI" {{ $user->country === 'SI' ? 'selected' : '' }}>Slovenia</option>
                            <option data-kt-flag="flags/solomon-islands.svg" value="SB" {{ $user->country === 'SB' ? 'selected' : '' }}>Solomon Islands</option>
                            <option data-kt-flag="flags/somalia.svg" value="SO" {{ $user->country === 'SO' ? 'selected' : '' }}>Somalia</option>
                            <option data-kt-flag="flags/south-africa.svg" value="ZA" {{ $user->country === 'ZA' ? 'selected' : '' }}>South Africa</option>
                            <option data-kt-flag="flags/south-korea.svg" value="KR" {{ $user->country === 'KR' ? 'selected' : '' }}>South Korea</option>
                            <option data-kt-flag="flags/south-sudan.svg" value="SS" {{ $user->country === 'SS' ? 'selected' : '' }}>South Sudan</option>
                            <option data-kt-flag="flags/spain.svg" value="ES" {{ $user->country === 'ES' ? 'selected' : '' }}>Spain</option>
                            <option data-kt-flag="flags/sri-lanka.svg" value="LK" {{ $user->country === 'LK' ? 'selected' : '' }}>Sri Lanka</option>
                            <option data-kt-flag="flags/sudan.svg" value="SD" {{ $user->country === 'SD' ? 'selected' : '' }}>Sudan</option>
                            <option data-kt-flag="flags/suriname.svg" value="SR" {{ $user->country === 'SR' ? 'selected' : '' }}>Suriname</option>
                            <option data-kt-flag="flags/swaziland.svg" value="SZ" {{ $user->country === 'SZ' ? 'selected' : '' }}>Swaziland</option>
                            <option data-kt-flag="flags/sweden.svg" value="SE" {{ $user->country === 'SE' ? 'selected' : '' }}>Sweden</option>
                            <option data-kt-flag="flags/switzerland.svg" value="CH" {{ $user->country === 'CH' ? 'selected' : '' }}>Switzerland</option>
                            <option data-kt-flag="flags/syria.svg" value="SY" {{ $user->country === 'SY' ? 'selected' : '' }}>Syrian Arab Republic</option>
                            <option data-kt-flag="flags/taiwan.svg" value="TW" {{ $user->country === 'TW' ? 'selected' : '' }}>Taiwan, Province of China</option>
                            <option data-kt-flag="flags/tajikistan.svg" value="TJ" {{ $user->country === 'TJ' ? 'selected' : '' }}>Tajikistan</option>
                            <option data-kt-flag="flags/tanzania.svg" value="TZ" {{ $user->country === 'TZ' ? 'selected' : '' }}>Tanzania, United Republic of</option>
                            <option data-kt-flag="flags/thailand.svg" value="TH" {{ $user->country === 'TH' ? 'selected' : '' }}>Thailand</option>
                            <option data-kt-flag="flags/togo.svg" value="TG" {{ $user->country === 'TG' ? 'selected' : '' }}>Togo</option>
                            <option data-kt-flag="flags/tokelau.svg" value="TK" {{ $user->country === 'TK' ? 'selected' : '' }}>Tokelau</option>
                            <option data-kt-flag="flags/tonga.svg" value="TO" {{ $user->country === 'TO' ? 'selected' : '' }}>Tonga</option>
                            <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT" {{ $user->country === 'TT' ? 'selected' : '' }}>Trinidad and Tobago</option>
                            <option data-kt-flag="flags/tunisia.svg" value="TN" {{ $user->country === 'TN' ? 'selected' : '' }}>Tunisia</option>
                            <option data-kt-flag="flags/turkey.svg" value="TR" {{ $user->country === 'TR' ? 'selected' : '' }}>Turkey</option>
                            <option data-kt-flag="flags/turkmenistan.svg" value="TM" {{ $user->country === 'TM' ? 'selected' : '' }}>Turkmenistan</option>
                            <option data-kt-flag="flags/turks-and-caicos.svg" value="TC" {{ $user->country === 'TC' ? 'selected' : '' }}>Turks and Caicos Islands</option>
                            <option data-kt-flag="flags/tuvalu.svg" value="TV" {{ $user->country === 'TV' ? 'selected' : '' }}>Tuvalu</option>
                            <option data-kt-flag="flags/uganda.svg" value="UG" {{ $user->country === 'UG' ? 'selected' : '' }}>Uganda</option>
                            <option data-kt-flag="flags/ukraine.svg" value="UA" {{ $user->country === 'UA' ? 'selected' : '' }}>Ukraine</option>
                            <option data-kt-flag="flags/united-arab-emirates.svg" value="AE" {{ $user->country === 'AE' ? 'selected' : '' }}>United Arab Emirates</option>
                            <option data-kt-flag="flags/united-kingdom.svg" value="GB" {{ $user->country === 'GB' ? 'selected' : '' }}>United Kingdom</option>
                            <option data-kt-flag="flags/united-states.svg" value="US" {{ $user->country === 'US' ? 'selected' : '' }}>United States</option>
                            <option data-kt-flag="flags/uruguay.svg" value="UY" {{ $user->country === 'UY' ? 'selected' : '' }}>Uruguay</option>
                            <option data-kt-flag="flags/uzbekistan.svg" value="UZ" {{ $user->country === 'UZ' ? 'selected' : '' }}>Uzbekistan</option>
                            <option data-kt-flag="flags/vanuatu.svg" value="VU" {{ $user->country === 'VU' ? 'selected' : '' }}>Vanuatu</option>
                            <option data-kt-flag="flags/venezuela.svg" value="VE" {{ $user->country === 'VE' ? 'selected' : '' }}>Venezuela, Bolivarian Republic of</option>
                            <option data-kt-flag="flags/vietnam.svg" value="VN" {{ $user->country === 'VN' ? 'selected' : '' }}>Vietnam</option>
                            <option data-kt-flag="flags/virgin-islands.svg" value="VI" {{ $user->country === 'VI' ? 'selected' : '' }}>Virgin Islands</option>
                            <option data-kt-flag="flags/yemen.svg" value="YE" {{ $user->country === 'YE' ? 'selected' : '' }}>Yemen</option>
                            <option data-kt-flag="flags/zambia.svg" value="ZM" {{ $user->country === 'ZM' ? 'selected' : '' }}>Zambia</option>
                            <option data-kt-flag="flags/zimbabwe.svg" value="ZW" {{ $user->country === 'ZW' ? 'selected' : '' }}>Zimbabwe</option>
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <!--begin::Input-->
                        <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
                            <option value="" {{ $user->language === null ? 'selected' : '' }}>Select a Language...</option>
                            <option data-kt-flag="flags/indonesia.svg" value="id" {{ $user->language === 'id' ? 'selected' : '' }}>Bahasa Indonesia - Indonesian</option>
                            <option data-kt-flag="flags/malaysia.svg" value="msa" {{ $user->language === 'msa' ? 'selected' : '' }}>Bahasa Melayu - Malay</option>
                            <option data-kt-flag="flags/canada.svg" value="ca" {{ $user->language === 'ca' ? 'selected' : '' }}>Català - Catalan</option>
                            <option data-kt-flag="flags/czech-republic.svg" value="cs" {{ $user->language === 'cs' ? 'selected' : '' }}>Čeština - Czech</option>
                            <option data-kt-flag="flags/netherlands.svg" value="da" {{ $user->language === 'da' ? 'selected' : '' }}>Dansk - Danish</option>
                            <option data-kt-flag="flags/germany.svg" value="de" {{ $user->language === 'de' ? 'selected' : '' }}>Deutsch - German</option>
                            <option data-kt-flag="flags/united-kingdom.svg" value="en" {{ $user->language === 'en' ? 'selected' : '' }}>English</option>
                            <option data-kt-flag="flags/united-kingdom.svg" value="en-gb" {{ $user->language === 'en-gb' ? 'selected' : '' }}>English UK - British English</option>
                            <option data-kt-flag="flags/spain.svg" value="es" {{ $user->language === 'es' ? 'selected' : '' }}>Español - Spanish</option>
                            <option data-kt-flag="flags/philippines.svg" value="fil" {{ $user->language === 'fil' ? 'selected' : '' }}>Filipino</option>
                            <option data-kt-flag="flags/france.svg" value="fr" {{ $user->language === 'fr' ? 'selected' : '' }}>Français - French</option>
                            <option data-kt-flag="flags/gabon.svg" value="ga" {{ $user->language === 'ga' ? 'selected' : '' }}>Gaeilge - Irish (beta)</option>
                            <option data-kt-flag="flags/greenland.svg" value="gl" {{ $user->language === 'gl' ? 'selected' : '' }}>Galego - Galician (beta)</option>
                            <option data-kt-flag="flags/croatia.svg" value="hr" {{ $user->language === 'hr' ? 'selected' : '' }}>Hrvatski - Croatian</option>
                            <option data-kt-flag="flags/italy.svg" value="it" {{ $user->language === 'it' ? 'selected' : '' }}>Italiano - Italian</option>
                            <option data-kt-flag="flags/hungary.svg" value="hu" {{ $user->language === 'hu' ? 'selected' : '' }}>Magyar - Hungarian</option>
                            <option data-kt-flag="flags/netherlands.svg" value="nl" {{ $user->language === 'nl' ? 'selected' : '' }}>Nederlands - Dutch</option>
                            <option data-kt-flag="flags/norway.svg" value="no" {{ $user->language === 'no' ? 'selected' : '' }}>Norsk - Norwegian</option>
                            <option data-kt-flag="flags/poland.svg" value="pl" {{ $user->language === 'pl' ? 'selected' : '' }}>Polski - Polish</option>
                            <option data-kt-flag="flags/portugal.svg" value="pt" {{ $user->language === 'pt' ? 'selected' : '' }}>Português - Portuguese</option>
                            <option data-kt-flag="flags/romania.svg" value="ro" {{ $user->language === 'ro' ? 'selected' : '' }}>Română - Romanian</option>
                            <option data-kt-flag="flags/slovakia.svg" value="sk" {{ $user->language === 'sk' ? 'selected' : '' }}>Slovenčina - Slovak</option>
                            <option data-kt-flag="flags/finland.svg" value="fi" {{ $user->language === 'fi' ? 'selected' : '' }}>Suomi - Finnish</option>
                            <option data-kt-flag="flags/el-salvador.svg" value="sv" {{ $user->language === 'sv' ? 'selected' : '' }}>Svenska - Swedish</option>
                            <option data-kt-flag="flags/virgin-islands.svg" value="vi" {{ $user->language === 'vi' ? 'selected' : '' }}>Tiếng Việt - Vietnamese</option>
                            <option data-kt-flag="flags/turkey.svg" value="tr" {{ $user->language === 'tr' ? 'selected' : '' }}>Türkçe - Turkish</option>
                            <option data-kt-flag="flags/greece.svg" value="el" {{ $user->language === 'el' ? 'selected' : '' }}>Ελληνικά - Greek</option>
                            <option data-kt-flag="flags/bulgaria.svg" value="bg" {{ $user->language === 'bg' ? 'selected' : '' }}>Български език - Bulgarian</option>
                            <option data-kt-flag="flags/russia.svg" value="ru" {{ $user->language === 'ru' ? 'selected' : '' }}>Русский - Russian</option>
                            <option data-kt-flag="flags/suriname.svg" value="sr" {{ $user->language === 'sr' ? 'selected' : '' }}>Српски - Serbian</option>
                            <option data-kt-flag="flags/ukraine.svg" value="uk" {{ $user->language === 'uk' ? 'selected' : '' }}>Українська мова - Ukrainian</option>
                            <option data-kt-flag="flags/israel.svg" value="he" {{ $user->language === 'he' ? 'selected' : '' }}>עִבְרִית - Hebrew</option>
                            <option data-kt-flag="flags/pakistan.svg" value="ur" {{ $user->language === 'ur' ? 'selected' : '' }}>اردو - Urdu (beta)</option>
                            <option data-kt-flag="flags/argentina.svg" value="ar" {{ $user->language === 'ar' ? 'selected' : '' }}>العربية - Arabic</option>
                            <option data-kt-flag="flags/argentina.svg" value="fa" {{ $user->language === 'fa' ? 'selected' : '' }}>فارسی - Persian</option>
                            <option data-kt-flag="flags/mauritania.svg" value="mr" {{ $user->language === 'mr' ? 'selected' : '' }}>मराठी - Marathi</option>
                            <option data-kt-flag="flags/india.svg" value="hi" {{ $user->language === 'hi' ? 'selected' : '' }}>हिन्दी - Hindi</option>
                            <option data-kt-flag="flags/bangladesh.svg" value="bn" {{ $user->language === 'bn' ? 'selected' : '' }}>বাংলা - Bangla</option>
                            <option data-kt-flag="flags/guam.svg" value="gu" {{ $user->language === 'gu' ? 'selected' : '' }}>ગુજરાતી - Gujarati</option>
                            <option data-kt-flag="flags/india.svg" value="ta" {{ $user->language === 'ta' ? 'selected' : '' }}>தமிழ் - Tamil</option>
                            <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn" {{ $user->language === 'kn' ? 'selected' : '' }}>ಕನ್ನಡ - Kannada</option>
                            <option data-kt-flag="flags/thailand.svg" value="th" {{ $user->language === 'th' ? 'selected' : '' }}>ภาษาไทย - Thai</option>
                            <option data-kt-flag="flags/south-korea.svg" value="ko" {{ $user->language === 'ko' ? 'selected' : '' }}>한국어 - Korean</option>
                            <option data-kt-flag="flags/japan.svg" value="ja" {{ $user->language === 'ja' ? 'selected' : '' }}>日本語 - Japanese</option>
                            <option data-kt-flag="flags/china.svg" value="zh-cn" {{ $user->language === 'zh-cn' ? 'selected' : '' }}>简体中文 - Simplified Chinese</option>
                            <option data-kt-flag="flags/taiwan.svg" value="zh-tw" {{ $user->language === 'zh-tw' ? 'selected' : '' }}>繁體中文 - Traditional Chinese</option>
                        </select>
                        <!--end::Input-->
                        <!--begin::Hint-->
                        <div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Currency</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="currency" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                            <option value="" {{ $user->currency === null ? 'selected' : '' }}>Select a currency..</option>
                            <option data-kt-flag="flags/united-states.svg" value="USD" {{ $user->currency === 'USD' ? 'selected' : '' }}>
                            <b>USD</b>&nbsp;-&nbsp;USA dollar</option>
                            <option data-kt-flag="flags/united-kingdom.svg" value="GBP" {{ $user->currency === 'GBP' ? 'selected' : '' }}>
                            <b>GBP</b>&nbsp;-&nbsp;British pound</option>
                            <option data-kt-flag="flags/australia.svg" value="AUD" {{ $user->currency === 'AUD' ? 'selected' : '' }}>
                            <b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
                            <option data-kt-flag="flags/japan.svg" value="JPY" {{ $user->currency === 'JPY' ? 'selected' : '' }}>
                            <b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
                            <option data-kt-flag="flags/sweden.svg" value="SEK" {{ $user->currency === 'SEK' ? 'selected' : '' }}>
                            <b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
                            <option data-kt-flag="flags/canada.svg" value="CAD" {{ $user->currency === 'CAD' ? 'selected' : '' }}>
                            <b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
                            <option data-kt-flag="flags/switzerland.svg" value="CHF" {{ $user->currency === 'CHF' ? 'selected' : '' }}>
                            <b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                @if (Auth::user()->role === 'super_admin')
                <div class="row mb-0">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Changes</label>
                    <!--begin::Label-->
                    <!--begin::Label-->
                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                            <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" name="allowchanges" checked="{{ $user->allow_changes == true ? 'checked' : ''}}">
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                    </div>
                    <!--begin::Label-->
                </div>
                @endif
                <!--end::Input group-->
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
