<section id="Subscribe" data-aos="fade">
    <div class="row">
        <div class="col">
            <form action="{{ route('subscribe.post') }}" method="post">
                @csrf
                <div class="backgrouend_contact" ></div>
                <div class="textAndIcon ">
                    <svg version="1.1" id="OBJECTS" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 105 108" style="enable-background:new 0 0 105 108;" xml:space="preserve">
                        <style type="text/css">
                            .iconst0{fill:#fff;}
                        </style>
                        <g>
                            <g>
                                <path class="iconst0" d="M5.8,39.9l0.5,0.4c7.5,5,16.3,7.7,25.3,7.7l0,0c8.7,0,17.3-2.5,24.6-7.3l0,0c1.1-0.7,2.3,0.6,1.6,1.7
                                    l-17.8,24c-1.4,1.8-2.8,3.6-4.3,5.4L21.6,88.5c-1.3,1.6-3.9,0.5-3.8-1.5l0.5-7c0.6-9.2-1.9-18.2-7.1-25.8l-8-11.7
                                    C2.1,40.8,4.1,38.7,5.8,39.9z"/>
                                <circle class="iconst0" cx="33" cy="35.3" r="8.4"/>
                                <path class="iconst0" d="M99.8,52.9l-0.4,0.3c-6,4-13,6.2-20.2,6.2l0,0c-7,0-13.8-2-19.6-5.8l0,0c-0.9-0.6-1.9,0.5-1.3,1.3L72.5,74
                                    c1.1,1.5,2.2,2.9,3.4,4.3l11.3,13.4c1.1,1.3,3.1,0.4,3-1.2l-0.4-5.6c-0.5-7.3,1.5-14.5,5.6-20.6l6.4-9.3
                                    C102.8,53.6,101.1,52,99.8,52.9z"/>
                                <circle class="iconst0" cx="78.1" cy="49.2" r="6.7"/>
                                <path class="iconst0" d="M39.4,76.1l0.3,0.2c4.5,3.1,9.9,4.7,15.3,4.7l0,0c5.3,0,10.5-1.5,14.9-4.4l0,0c0.7-0.4,1.4,0.4,1,1L60.2,92.2
                                    c-0.8,1.1-1.7,2.2-2.6,3.2L49,105.6c-0.8,1-2.4,0.3-2.3-0.9l0.3-4.2c0.4-5.5-1.1-11.1-4.3-15.6l-4.8-7.1
                                    C37.2,76.7,38.4,75.4,39.4,76.1z"/>
                                <circle class="iconst0" cx="55.9" cy="73.3" r="5.1"/>
                                <path class="iconst0" d="M54.4,3.6c-20.2,0-37.2,13.9-41.8,32.7C19.2,21.1,34.4,10.5,52,10.5c10.2,0,19.5,3.5,26.9,9.4
                                    c1.5,1.2,3.8,0.9,4.9-0.8l0,0c1-1.4,0.7-3.3-0.6-4.4C75.6,7.8,65.5,3.6,54.4,3.6z"/>
                                <path class="iconst0" d="M90.2,18.6l1.7,3.4c0.1,0.2,0.3,0.3,0.5,0.4l3.8,0.6c0.5,0.1,0.8,0.7,0.4,1.1l-2.7,2.7
                                    c-0.2,0.2-0.2,0.4-0.2,0.6l0.6,3.8c0.1,0.5-0.5,0.9-1,0.7L89.9,30c-0.2-0.1-0.4-0.1-0.6,0l-3.4,1.8c-0.5,0.3-1-0.2-1-0.7l0.6-3.8
                                    c0-0.2,0-0.4-0.2-0.6l-2.7-2.7c-0.4-0.4-0.2-1,0.4-1.1l3.8-0.6c0.2,0,0.4-0.2,0.5-0.4l1.7-3.4C89.2,18.1,89.9,18.1,90.2,18.6z"/>
                            </g>
                        </g>
                    </svg>
                    <p>
                        {{ Settings::get('subscribe_form_title_'.$lang) ?? "We’re here to support you every step of the way." }}
                    </p>
                </div>
                <div class="app_all_input">
                    <div class="form-grope">
                        <input type="text" name="name" id="name" placeholder="{{ __("your name") }}">
                        <label for="name">{{ __("leave your name here") }}</label>
                    </div>
                    <div class="form-grope">
                        <input type="email" name="email" id="email" placeholder="{{ __("your email") }} " emailRequired="true">
                        <label for="email">{{ __("leave your email here") }}</label>
                    </div>
                    <div class="form-grope">
                        <input type="tel" name="phone" id="phone" placeholder="{{ __('your phone number') }}">
                        <label for="phone">{{ __("leave your phone number here  “optional”") }}</label>
                    </div>
                    <div class="form-grope">
                        <button type="submit">{{ __("Subscribe") }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
