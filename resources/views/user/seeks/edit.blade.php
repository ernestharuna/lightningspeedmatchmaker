<x-app-layout>
    <div class="d-flex align-items-center justify-content-center mt-3">
        <div
            class="bg-white border rounded-3 shadow col-sm-10 col-md-10 col-lg-6 mx-3 p-4 animate__animated animate__fadeIn">
            <div class="text-left my-4">
                <h3>Edit your matching preferences</h3>
                <p class="m-0">
                    - "<b>N/A</b>" signifies that you may have selected a neutral option when filling out your
                    preference
                    form
                </p>
                <p>
                    - <span class="text-danger">Remember</span> to fill out what you seek in you soulmate.
                </p>
            </div>
            <hr>
            <form method="POST" action="{{ route('seeks.update', $seeks) }}" enctype="multipart/form-data" class="row g-3">
                @csrf
                @method('PATCH')

                {{-- gender --}}
                <div class="col-md-6">
                    <label for="gender" class="form-label fw-bold">Their gender <b class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="gender" name="gender"
                        required>
                        <option value="{{ $seeks->gender }}" selected disabled>
                            {{ $seeks->gender ? $seeks->gender : __('Choose an option') }}
                        </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                {{-- sexual orientation --}}
                <div class="col-md-6">
                    <label for="sexual_orientation" class="form-label fw-bold">
                        Their sexual orientation
                        <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="sexual_orientation"
                        name="sexual_orientation" required>
                        <option value="{{ $seeks->sexual_orientation }}" selected disabled>
                            {{ $seeks->sexual_orientation ? $seeks->sexual_orientation : __('Choose an option') }}
                        </option>
                        <option value="Heterosexual">Heterosexual</option>
                        <option value="Lesbian">Lesbian</option>
                        <option value="Gay">Gay</option>
                        <option value="Bisexual">Bisexual</option>
                    </select>
                </div>

                {{-- height --}}
                <div class="col-md-6">
                    <label for="height" class="form-label fw-bold">Their height</label>
                    <select class="form-select" aria-label="Default select example" id="height" name="height"
                        value="{{ old('height') }}">
                        <option value="{{ $seeks->height }}" selected disabled>
                            {{ $seeks->height ? $seeks->height : __('Choose an option') }}
                        </option>
                        <option value="4ft - 4'5ft">4ft - 4'5ft</option>
                        <option value="4'6ft - 5'5ft">4'6ft - 5'5ft</option>
                        <option value="5'5ft - 6ft">5'5ft - 6ft</option>
                        <option value="6ft - 6'5ft">6ft - 6'5ft</option>
                        <option value="6'5 above">6'5 above</option>
                    </select>
                </div>

                {{-- body type --}}
                <div class="col-md-6">
                    <label for="body_type" class="form-label fw-bold">Their body type</label>
                    <select class="form-select" aria-label="Default select example" id="body_type" name="body_type">
                        <option value="{{ $seeks->body_type }}" selected disabled>
                            {{ $seeks->body_type ? $seeks->body_type : __('Choose an option') }}
                        </option>
                        <option value="Slim">Slim</option>
                        <option value="Petite">Petite</option>
                        <option value="Muscular">Muscular</option>
                        <option value="Chubby">Chubby</option>
                        <option value="Fat">Fat</option>
                    </select>
                </div>

                {{-- hair color --}}
                <div class="col-md-6">
                    <label for="hair_color" class="form-label fw-bold">Their Hair color</label>
                    <select class="form-select" aria-label="Default select example" id="hair_color" name="hair_color">
                        <option value="{{ $seeks->hair_color }}" selected disabled>
                            {{ $seeks->hair_color ? $seeks->hair_color : __('Choose an option') }}
                        </option>
                        <option value="Black">Black</option>
                        <option value="Brunet">Brunet</option>
                        <option value="Blonde">Blonde</option>
                        <option value="Red">Red</option>
                    </select>
                </div>

                {{-- eye color --}}
                <div class="col-md-6">
                    <label for="eye_color" class="form-label fw-bold">Their Eye color</label>
                    <select class="form-select" aria-label="Default select example" id="eye_color" name="eye_color">
                        <option value="{{ $seeks->eye_color }}" selected disabled>
                            {{ $seeks->eye_color ? $seeks->eye_color : __('Choose an option') }}
                        </option>
                        <option value="Black">Black</option>
                        <option value="Brown">Brown</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                        <option value="Hazel">Hazel</option>
                    </select>
                </div>

                {{-- physically active --}}
                <div class="col-md-6">
                    <label for="how_pa" class="form-label fw-bold"
                        title="How physically active do you want your partner to be">Activity level</label>
                    <select class="form-select" aria-label="Default select example" id="how_pa" name="how_pa">
                        <option value="{{ $seeks->how_pa }}" selected disabled>
                            {{ $seeks->how_pa ? $seeks->how_pa : __('Choose an option') }}
                        </option>
                        <option value="I don't mind a couch potato">I don't mind a couch potato</option>
                        <option value="A couple times a week">A couple times a week</option>
                        <option value="An obsessive cross fit animal">An obsessive cross fit animal</option>
                        <option value="Daily fitness">Daily fitness</option>
                    </select>
                </div>

                {{-- education --}}
                <div class="col-md-6">
                    <label for="education" class="form-label fw-bold"
                        title="What level of education would you like them to have">Education <b
                            class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="education" name="education"
                        required>
                        <option value="{{ $seeks->education }}" selected disabled>
                            {{ $seeks->education ? $seeks->education : __('Choose an option') }}
                        </option>
                        <option value="Some college">Some college</option>
                        <option value="Bachelors">Bachelors</option>
                        <option value="Masters">Masters</option>
                        <option value="Post-graduate">Post-graduate</option>
                    </select>
                </div>

                {{-- What they're looking for --}}
                <div class="col-md-6">
                    <label for="rel_type" class="form-label fw-bold"
                        title="What kind of relationship do you expect your partner to be searching for ?">What they
                        seek <b class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="rel_type" name="rel_type"
                        required>
                        <option value="{{ $seeks->rel_type }}" selected disabled>
                            {{ $seeks->rel_type ? $seeks->rel_type : __('Choose an option') }}
                        </option>
                        <option value="Marriage">Someone looking for Marriage</option>
                        <option value="Platonic relationship">Someone looking for a platonic relationship</option>
                        <option value="Hang out buddy">Hangout buddy</option>
                        <option value="Friends with benefit">Friends with benefit</option>
                    </select>
                </div>

                {{-- how_jelly --}}
                <div class="col-md-6">
                    <label for="how_jelly" class="form-label fw-bold">Do you want an obsessive partner ?</label>
                    <select class="form-select" aria-label="Default select example" id="how_jelly" name="how_jelly">
                        <option value="{{ $seeks->how_jelly }}" selected disabled>
                            {{ $seeks->how_jelly ? $seeks->how_jelly : __('Choose an option') }}
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="I don't know">I don't know</option>
                    </select>
                </div>

                {{-- ethnicity --}}
                <div class="col-md-6">
                    <label for="ethnicity" class="form-label fw-bold">Ethnicity</label>
                    <select class="form-select" aria-label="Default select example" id="ethnicity" name="ethnicity">
                        <option value="{{ $seeks->ethnicity }}" selected disabled>
                            {{ $seeks->ethnicity ? $seeks->ethnicity : __('Choose an option') }}
                        </option>
                        <option value="American">American</option>
                        <option value="Asian">Asian</option>
                        <option value="African">African</option>
                        <option value="Latinos">Latino/Hispanic</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                {{-- religion --}}
                <div class="col-md-6">
                    <label for="religion" class="form-label fw-bold">Their Religion</label>
                    <select class="form-select" aria-label="Default select example" id="religion" name="religion"
                        required>
                        <option value="{{ $seeks->religion }}" selected disabled>
                            {{ $seeks->religion ? $seeks->religion : __('Choose an option') }}
                        </option>
                        <option value="Muslim">Muslim</option>
                        <option value="Christian">Christian</option>
                        <option value="Jewish">Jewish</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddhist">Buddhist</option>
                        <option value="Agnostic">Agnostic</option>
                        <option value="Atheist">Atheist</option>
                    </select>
                </div>

                {{-- zodiac  --}}
                <div class="col-md-6">
                    <label for="zodiac_sign" class="form-label fw-bold">Their zodiac sign</label>
                    <select class="form-select" aria-label="Default select example" id="zodiac_sign"
                        name="zodiac_sign">
                        <option value="{{ $seeks->zodiac_sign }}" selected disabled>
                            {{ $seeks->zodiac_sign ? $seeks->zodiac_sign : __('Choose an option') }}
                        </option>
                        <option value="Capricon">Capricon</option>
                        <option value="Libra">Libra</option>
                        <option value="Sagittarius">Sagittarius</option>
                        <option value="Cancer">Cancer</option>
                        <option value="Gemini">Gemini</option>
                        <option value="Leo">Leo</option>
                        <option value="Aquarius">Aquarius</option>
                        <option value="Taurus">Taurus</option>
                        <option value="Pisces">Pisces</option>
                        <option value="Virgo">Virgo</option>
                        <option value="Aries">Aries</option>
                        <option value="Scorpio">Scorpio</option>
                    </select>
                </div>

                {{-- children --}}
                <div class="col-md-6">
                    <label for="children" class="form-label fw-bold"
                        title="Do you mind a partner with children?">Children? <b class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="children" name="children"
                        required>
                        <option value="{{ $seeks->children }}" selected disabled>
                            {{ $seeks->children ? $seeks->children : __('Choose an option') }}
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="Yes, independent">Yes, if they're on their own</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- date pet owner --}}
                <div class="col-md-6">
                    <label for="date_pet_owner" class="form-label fw-bold">Can you date a pet owner? <b
                            class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="date_pet_owner"
                        name="date_pet_owner" required>
                        <option value="{{ $seeks->date_pet_owner }}" selected disabled>
                            {{ $seeks->date_pet_owner ? $seeks->date_pet_owner : __('Choose an option') }}
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- date drug doer --}}
                <div class="col-md-6">
                    <label for="date_drug" class="form-label fw-bold">
                        Can you date someone who does drugs ? <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="date_drug" name="date_drug"
                        required>
                        <option value="{{ $seeks->date_drug }}" selected disabled>
                            {{ $seeks->date_drug ? $seeks->date_drug : __('Choose an option') }}
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- date drinker --}}
                <div class="col-md-6">
                    <label for="date_drink" class="form-label fw-bold">
                        Can you date someone who drinks ? <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="date_drink"
                        name="date_drink" required>
                        <option value="{{ $seeks->date_drink }}" selected disabled>
                            {{ $seeks->date_drink ? $seeks->date_drink : __('Choose an option') }}
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- date smoker --}}
                <div class="col-md-6">
                    <label for="date_smoker" class="form-label fw-bold">
                        Can you date someone who smokes ? <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="date_smoker"
                        name="date_smoker" required>
                        <option value="{{ $seeks->date_smoker }}" selected disabled>
                            {{ $seeks->date_smoker ? $seeks->date_smoker : __('Choose an option') }}
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- country --}}
                <div class="col-md-6">
                    <label for="country" class="form-label fw-bold">
                        Country <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="country" name="country"
                        required>
                        <option value="{{ $seeks->country }}" selected disabled>
                            {{ $seeks->country ? $seeks->country : __('Choose an option') }}
                        </option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua & Barbuda</option>
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
                        <option value="Bonaire, Sint Eustatius and Saba">Caribbean Netherlands</option>
                        <option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo - Brazzaville</option>
                        <option value="Congo, Democratic Republic of the Congo">Congo - Kinshasa</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'Ivoire">Côte d’Ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curacao">Curaçao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czechia</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
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
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option>
                        <option value="Holy See (Vatican City State)">Vatican City</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran</option>
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
                        <option value="Korea, Democratic People's Republic of">North Korea</option>
                        <option value="Korea, Republic of">South Korea</option>
                        <option value="Kosovo">Kosovo</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, the Former Yugoslav Republic of">North Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia</option>
                        <option value="Moldova, Republic of">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar (Burma)</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Curaçao</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn Islands</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Réunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Barthelemy">St. Barthélemy</option>
                        <option value="Saint Helena">St. Helena</option>
                        <option value="Saint Kitts and Nevis">St. Kitts & Nevis</option>
                        <option value="Saint Lucia">St. Lucia</option>
                        <option value="Saint Martin">St. Martin</option>
                        <option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option>
                        <option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">São Tomé & Príncipe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Serbia and Montenegro">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Sint Maarten">Sint Maarten</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and the South Sandwich Islands">
                            South Georgia & South Sandwich
                            Islands
                        </option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option>
                        <option value="Swaziland">Eswatini</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syria</option>
                        <option value="Taiwan, Province of China">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks & Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Vietnam</option>
                        <option value="Virgin Islands, British">British Virgin Islands</option>
                        <option value="Virgin Islands, U.s.">U.S. Virgin Islands</option>
                        <option value="Wallis and Futuna">Wallis & Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>

                    </select>
                </div>

                <div class="mt-4 d-flex align-item-center justify-content-between">
                    <div>
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary shadow fw-bold">Back</a>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success shadow fw-bold">Done & Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
