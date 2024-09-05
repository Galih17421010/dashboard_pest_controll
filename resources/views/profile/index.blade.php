@extends('layouts.master')
@section('navhead')
<div class="header header-fixed header-logo-center">
    @include('layouts.navhead')
</div>
@endsection
@section('content')
<div class="page-content header-clear-large">
    <img style="margin-bottom:-110px"
    src={{asset("assets/images/icons/icon-512x512.png")}} class="mx-auto
    shadow-xl rounded-circle over-card" width="250">
    <div style="padding-top: 120px" class="card card-style">
        <div class="content">
            <h1 class="boxed-text-xl font-40">{{ Auth::user()->name }}</h1>
            <p class="text-center">
                <i class="fa fa-fire color-red-dark pe-2"></i
                ><span class="opacity-50">Purchased 125 Products</span>
            </p>
            <div class="row text-center mb-3 mx-n2">
                <div class="col-4">
                    <i class="fa fa-shopping-bag color-brown font-20"></i>
                    <h1 class="color-gray-dark font-20 font-400">125</h1>
                    <span class="font-9 d-block mt-n3">Purchases</span>
                </div>
                <div class="col-4">
                    <i class="fa fa-star color-yellow-dark font-20"></i>
                    <h1 class="color-gray-dark font-20 font-400">110</h1>
                    <span class="font-9 d-block mt-n3">Ratings</span>
                </div>
                <div class="col-4">
                    <i class="fa fa-heart color-red-dark font-20"></i>
                    <h1 class="color-gray-dark font-20 font-400">Fashion</h1>
                    <span class="font-9 d-block mt-n3">Most Loved</span>
                </div>
            </div>
            <p></p>
            <a
                href="#"
                class="btn btn-m rounded-sm btn-full bg-highlight font-700 text-uppercase"
                >Edit Profile</a
            >
        </div>
    </div>
    <a
        data-bs-toggle="collapse"
        href="#category-1"
        aria-expanded="false"
        aria-controls="category-1"
        class="no-effect card card-style mb-2"
    >
        <div class="content">
            <div class="d-flex mb-n1">
                <div class="align-self-center">
                    <i
                        class="fa fa-shopping-bag color-brown-dark font-35 fa-fw me-2"
                    ></i>
                </div>
                <div class="align-self-center">
                    <h4>Recent Purchases</h4>
                    <p class="opacity-80 font-10 mt-n2">Tap here to Expand</p>
                </div>
                <div class="ms-auto align-self-center text-center opacity-70">
                    <i
                        class="fa fa-angle-down color-gray-dark opacity-70 font-10 mt-1"
                    ></i
                    ><br />
                </div>
            </div>
        </div>
    </a>
    <div class="collapse" id="category-1">
        <div class="card card-style">
            <div class="content mb-2">
                <p>
                    Your last 3 purchases appear here. You can edit these in
                    your profile settings.
                </p>
                <div class="d-flex mb-3">
                    <div class="w-75 me-3">
                        <div
                            class="card card-style m-0 bg-21"
                            data-card-height="100"
                        ></div>
                    </div>
                    <div class="ms-auto w-100">
                        <h5 class="font-600 font-16 line-height-sm">
                            Macbook Pro, 2TB SSD, 64GB DDR4, Apple Chip M9X
                        </h5>
                        <span class="color-green-dark d-block font-11 font-600"
                            >In Stock</span
                        >
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="w-75 me-3">
                        <div
                            class="card card-style m-0 bg-8"
                            data-card-height="100"
                        ></div>
                    </div>
                    <div class="ms-auto w-100">
                        <span class="color-red-dark d-block font-11 font-600"
                            >Out of Stock</span
                        >
                        <h5 class="opacity-40 font-600 font-16 line-height-sm">
                            Macbook Air, 1TB Fushion Drive, 16GB DDR4, Apple
                            Chip M9X
                        </h5>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="w-75 me-3">
                        <div
                            class="card card-style m-0 bg-28"
                            data-card-height="100"
                        ></div>
                    </div>
                    <div class="ms-auto w-100">
                        <span class="color-red-dark d-block font-11 font-600"
                            >Out of Stock</span
                        >
                        <h5 class="font-600 font-16 line-height-sm">
                            Macbook Air, 256GB SSD, 16GB DDR4, Apple Chip M5X
                        </h5>
                    </div>
                </div>
                <div class="divider mb-3"></div>
                <a
                    href="#"
                    class="btn btn-l rounded-sm btn-full bg-blue-dark font-700 text-uppercase mb-2 mt-3"
                    >View More Purchases</a
                >
            </div>
        </div>
    </div>
    <a
        data-bs-toggle="collapse"
        href="#category-2"
        aria-expanded="false"
        aria-controls="category-2"
        class="no-effect card card-style mb-2"
    >
        <div class="content">
            <div class="d-flex mb-n1">
                <div class="align-self-center">
                    <i
                        class="fa fa-heart color-red-dark font-35 fa-fw me-2"
                    ></i>
                </div>
                <div class="align-self-center">
                    <h4>Your Interests</h4>
                    <p class="opacity-80 font-10 mt-n2">Tap here to Expand</p>
                </div>
                <div class="ms-auto align-self-center text-center opacity-70">
                    <i
                        class="fa fa-angle-down color-gray-dark opacity-70 font-10 mt-1"
                    ></i
                    ><br />
                </div>
            </div>
        </div>
    </a>
    <div class="collapse" id="category-2">
        <div class="card card-style">
            <div class="content">
                <p>
                    We'll recommend products based on your interests. Select a
                    few and you'll start seeing them in your feed.
                </p>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check1"
                    />
                    <label class="form-check-label rounded-m" for="check1"
                        >Technology</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-mobile-alt font-17 color-red-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check2"
                    />
                    <label class="form-check-label rounded-m" for="check2"
                        >Pets</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-paw font-17 color-brown-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check3"
                        checked
                    />
                    <label class="form-check-label rounded-sm" for="check3"
                        >Food</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-utensils font-17 color-gray-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check4"
                        checked
                    />
                    <label class="form-check-label rounded-m" for="check4"
                        >Biking</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-bicycle font-17 color-blue-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check5"
                    />
                    <label class="form-check-label rounded-m" for="check5"
                        >Sports</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i
                        class="fa fa-basketball-ball color-brown-dark font-17"
                    ></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check6"
                    />
                    <label class="form-check-label rounded-m" for="check6"
                        >Comedy</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="far fa-smile font-17 color-yellow-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check7"
                    />
                    <label class="form-check-label rounded-m" for="check7"
                        >Music</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-music font-17 color-instagram"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check8"
                        checked
                    />
                    <label class="form-check-label rounded-m" for="check8"
                        >Travel</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-plane font-14 color-dark-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check9"
                    />
                    <label class="form-check-label rounded-m" for="check9"
                        >Hacks</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-cut font-16 color-blue-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check10"
                        checked
                    />
                    <label class="form-check-label rounded-m" for="check10"
                        >Science</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-vial font-17 color-blue-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check11"
                    />
                    <label class="form-check-label rounded-m" for="check11"
                        >Physics</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-atom font-17 color-green-dark"></i>
                </div>
                <div class="form-check interest-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value
                        id="check12"
                    />
                    <label class="form-check-label rounded-m" for="check12"
                        >Space</label
                    >
                    <i class="fa fa-check-circle color-white font-18"></i>
                    <i class="fa fa-rocket font-16 color-teal-dark"></i>
                </div>
                <div class="divider mt-3 mb-4"></div>
                <a
                    href="#"
                    class="btn btn-l rounded-sm text-uppercase font-700 btn-full bg-highlight shadow-xxl"
                    >Save Interests</a
                >
                <p class="font-11 line-height-xs boxed-text-xl pt-4">
                    These elements are built with default input checkboxes.
                    <br />Easy to use for your programatic functions.
                </p>
            </div>
        </div>
    </div>
    <a
        data-bs-toggle="collapse"
        href="#category-3"
        aria-expanded="false"
        aria-controls="category-2"
        class="no-effect card card-style mb-2"
    >
        <div class="content">
            <div class="d-flex mb-n1">
                <div class="align-self-center">
                    <i
                        class="fa fa-file color-blue-dark font-35 fa-fw me-2"
                    ></i>
                </div>
                <div class="align-self-center">
                    <h4>Billing Information</h4>
                    <p class="opacity-80 font-10 mt-n2">Tap here to Expand</p>
                </div>
                <div class="ms-auto align-self-center text-center opacity-70">
                    <i
                        class="fa fa-angle-down color-gray-dark opacity-70 font-10 mt-1"
                    ></i
                    ><br />
                </div>
            </div>
        </div>
    </a>
    <div class="collapse" id="category-3">
        <div class="card card-style">
            <div class="content">
                <p>
                    Finished Shopping? Let's checkout! Remember, this is just a
                    template!
                </p>
                <div
                    class="input-style has-borders no-icon validate-field mb-4"
                >
                    <input
                        type="name"
                        class="form-control validate-name"
                        id="form2"
                        placeholder="First Name"
                    />
                    <label for="form2" class="color-blue-dark"
                        >First Name</label
                    >
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div
                    class="input-style has-borders no-icon validate-field mb-4"
                >
                    <input
                        type="name"
                        class="form-control validate-name"
                        id="form2a"
                        placeholder="Last Name"
                    />
                    <label for="form2a" class="color-blue-dark"
                        >Last Name</label
                    >
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div
                    class="input-style has-borders no-icon validate-field mb-4"
                >
                    <input
                        type="name"
                        class="form-control validate-name"
                        id="form2ab"
                        placeholder="Company Name"
                    />
                    <label for="form2ab" class="color-blue-dark"
                        >Company Name</label
                    >
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style has-borders no-icon mb-4">
                    <label for="form5" class="color-blue-dark"
                        >Select A Value</label
                    >
                    <select id="form5">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">
                            Antigua and Barbuda
                        </option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">
                            Bosnia and Herzegovina
                        </option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">
                            British Indian Ocean Territory
                        </option>
                        <option value="Brunei Darussalam">
                            Brunei Darussalam
                        </option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">
                            Central African Republic
                        </option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">
                            Christmas Island
                        </option>
                        <option value="Cocos (Keeling) Islands">
                            Cocos (Keeling) Islands
                        </option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">
                            Congo, The Democratic Republic of The
                        </option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">
                            Dominican Republic
                        </option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">
                            Equatorial Guinea
                        </option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">
                            Falkland Islands (Malvinas)
                        </option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">
                            French Polynesia
                        </option>
                        <option value="French Southern Territories">
                            French Southern Territories
                        </option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">
                            Heard Island and Mcdonald Islands
                        </option>
                        <option value="Holy See (Vatican City State)">
                            Holy See (Vatican City State)
                        </option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">
                            Iran, Islamic Republic of
                        </option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">
                            Korea, Democratic People's Republic of
                        </option>
                        <option value="Korea, Republic of">
                            Korea, Republic of
                        </option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">
                            Lao People's Democratic Republic
                        </option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">
                            Libyan Arab Jamahiriya
                        </option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option
                            value="Macedonia, The Former Yugoslav Republic of"
                        >
                            Macedonia, The Former Yugoslav Republic of
                        </option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">
                            Marshall Islands
                        </option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">
                            Micronesia, Federated States of
                        </option>
                        <option value="Moldova, Republic of">
                            Moldova, Republic of
                        </option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">
                            Netherlands Antilles
                        </option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">
                            Northern Mariana Islands
                        </option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">
                            Palestinian Territory, Occupied
                        </option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">
                            Papua New Guinea
                        </option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">
                            Russian Federation
                        </option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">
                            Saint Kitts and Nevis
                        </option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">
                            Saint Pierre and Miquelon
                        </option>
                        <option value="Saint Vincent and The Grenadines">
                            Saint Vincent and The Grenadines
                        </option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">
                            Sao Tome and Principe
                        </option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option
                            value="South Georgia and The South Sandwich Islands"
                        >
                            South Georgia and The South Sandwich Islands
                        </option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">
                            Svalbard and Jan Mayen
                        </option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">
                            Syrian Arab Republic
                        </option>
                        <option value="Taiwan, Province of China">
                            Taiwan, Province of China
                        </option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">
                            Tanzania, United Republic of
                        </option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">
                            Trinidad and Tobago
                        </option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">
                            Turks and Caicos Islands
                        </option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">
                            United Arab Emirates
                        </option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States" selected>
                            United States
                        </option>
                        <option value="United States Minor Outlying Islands">
                            United States Minor Outlying Islands
                        </option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">
                            Virgin Islands, British
                        </option>
                        <option value="Virgin Islands, U.S.">
                            Virgin Islands, U.S.
                        </option>
                        <option value="Wallis and Futuna">
                            Wallis and Futuna
                        </option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <span><i class="fa fa-chevron-down"></i></span>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <i class="fa fa-check disabled invalid color-red-dark"></i>
                    <em></em>
                </div>
                <div
                    class="input-style has-borders no-icon validate-field mb-4"
                >
                    <input
                        type="text"
                        class="form-control validate-text"
                        id="form23"
                        placeholder="Town/State"
                    />
                    <label for="form23" class="color-blue-dark"
                        >Town/State</label
                    >
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div
                    class="input-style has-borders no-icon validate-field mb-4"
                >
                    <input
                        type="text"
                        class="form-control validate-text"
                        id="form234"
                        placeholder="Street Address"
                    />
                    <label for="form234" class="color-blue-dark"
                        >Town/State</label
                    >
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div
                    class="input-style has-borders no-icon validate-field mb-4"
                >
                    <input
                        type="text"
                        class="form-control validate-text"
                        id="form2345"
                        placeholder="Apartament, Suite, Unit"
                    />
                    <label for="form2345" class="color-blue-dark"
                        >Apartament, Suite, Unit</label
                    >
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="divider mb-3"></div>
                <a
                    href="#"
                    class="btn btn-l rounded-sm btn-full bg-blue-dark font-700 text-uppercase mb-0 mt-3"
                    >Save For Future Purchases</a
                >
            </div>
        </div>
    </div>
    <a
        data-bs-toggle="collapse"
        href="#category-4"
        aria-expanded="false"
        aria-controls="category-2"
        class="no-effect card card-style mb-2"
    >
        <div class="content">
            <div class="d-flex mb-n1">
                <div class="align-self-center">
                    <i
                        class="fa fa-credit-card color-green-dark font-35 fa-fw me-2"
                    ></i>
                </div>
                <div class="align-self-center">
                    <h4>Payment Method</h4>
                    <p class="opacity-80 font-10 mt-n2">Tap here to Expand</p>
                </div>
                <div class="ms-auto align-self-center text-center opacity-70">
                    <i
                        class="fa fa-angle-down color-gray-dark opacity-70 font-10 mt-1"
                    ></i
                    ><br />
                </div>
            </div>
        </div>
    </a>
    <div class="collapse" id="category-4">
        <div class="card card-style">
            <div class="content">
                <p>
                    Please select your payment method. This page is a dummy
                    template.
                </p>
                <div class="input-style has-borders no-icon mb-4">
                    <label for="form52" class="color-blue-dark"
                        >Select Payment Type</label
                    >
                    <select id="form52">
                        <option value="default" disabled selected>
                            Select Payment Type
                        </option>
                        <option value="1">Credit Card</option>
                        <option value="2">PayPal / Stripe</option>
                        <option value="3">Crypto Curency</option>
                    </select>
                    <span><i class="fa fa-chevron-down"></i></span>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <i class="fa fa-check disabled invalid color-red-dark"></i>
                    <em></em>
                </div>
                <div
                    class="input-style has-borders no-icon validate-field mb-4"
                >
                    <input
                        type="name"
                        class="form-control validate-name"
                        id="form23451"
                        placeholder="Cardholder Name"
                    />
                    <label for="form23451" class="color-blue-dark"
                        >Cardholder Name</label
                    >
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div
                    class="input-style has-borders no-icon validate-field mb-4"
                >
                    <input
                        type="number"
                        class="form-control validate-name"
                        id="form234512"
                        placeholder="Card Number"
                    />
                    <label for="form234512" class="color-blue-dark"
                        >Card Number</label
                    >
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="row mb-0">
                    <div class="col-7">
                        <div
                            class="input-style has-borders no-icon validate-field mb-4"
                        >
                            <input
                                type="date"
                                class="form-control validate-name"
                                id="form234512"
                                value="2030-12-31"
                                value="2030-12-31"
                                max="2030-01-01"
                                min="2021-01-01"
                                placeholder="Valid Tru"
                            />
                            <label for="form234512" class="color-blue-dark"
                                >Valid Tru</label
                            >
                            <i
                                class="fa fa-times disabled invalid color-red-dark"
                            ></i>
                            <i
                                class="fa fa-check disabled valid color-green-dark"
                            ></i>
                            <em></em>
                        </div>
                    </div>
                    <div class="col-5">
                        <div
                            class="input-style has-borders no-icon validate-field mb-4"
                        >
                            <input
                                type="number"
                                class="form-control validate-name"
                                id="form2345123"
                                placeholder="CCV"
                            />
                            <label for="form2345123" class="color-blue-dark"
                                >CCV</label
                            >
                            <i
                                class="fa fa-times disabled invalid color-red-dark"
                            ></i>
                            <i
                                class="fa fa-check disabled valid color-green-dark"
                            ></i>
                            <em>(required)</em>
                        </div>
                    </div>
                </div>
                <div class="divider mb-3"></div>
                <a
                    href="#"
                    class="btn btn-l rounded-sm btn-full bg-blue-dark font-700 text-uppercase mb-0 mt-3"
                    >Save For Future Purchases</a
                >
            </div>
        </div>
    </div>
    <div class="footer card card-style mt-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a
                href="{{route('logout')}}"
                onclick="event.preventDefault();
        this.closest('form').submit();"
                class="btn btn-m rounded-sm btn-full bg-highlight font-700 text-uppercase"
                >Logout</a
            >
        </form>
    </div>
</div>

@endsection
