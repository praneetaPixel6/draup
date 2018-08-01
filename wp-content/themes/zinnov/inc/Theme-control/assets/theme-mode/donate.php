
<section id="form-show" class="section">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 payment-block">
              <h3 class="section-heading section-heading--payment text-capitalize">Support Gurukul,<em class="payment-subtext text-lowercase">See a Change in 4 months</em></h3>
              <p class="text-center payment-content">By choosing to support gurukul’s program today, you are directly supporting a unprivileged family &amp; helping to reduce the Skill Gap in India .</p>
              <form class="radio-btn">
                <ul class="radio-btn-list">
                  <li class="radio-btn-list__item">
                    <input id="f-option" type="radio" name="selector" data-toggle="select-1" value="select-1">
                    <label for="f-option">one time</label>
                    <div class="check"></div>
                  </li>
                  <li class="radio-btn-list__item">
                    <input id="s-option" type="radio" name="selector" data-toggle="select-2" value="select-2">
                    <label for="s-option">monthly</label>
                    <div class="check">
                      <div class="inside"></div>
                    </div>
                  </li>
                </ul>
              </form>
              <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                <div class="panel panel-default">
                  <div id="headingOne" role="tab"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="accordian-title">your pledge</a></div>
                  <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                    <div class="grukl-payment-body">
                      <ul class="nav nav-tabs grukl-prices-list">
                        <li class="active grukl-prices-list__item"><a href="#price1" data-toggle="tab" role="tabpanel"><span class="price-tag">499</span></a></li>
                        <li class="grukl-prices-list__item"><a href="#price2" data-toggle="tab" role="tabpanel"><span class="price-tag">999</span></a></li>
                        <li class="grukl-prices-list__item"><a href="#price3" data-toggle="tab" role="tabpanel"><span class="price-tag">1999</span></a></li>
                        <li class="grukl-prices-list__item"><a href="#price4" data-toggle="tab" role="tabpanel"><span class="price-tag">4999</span></a></li>
                        <li class="grukl-prices-list__item">
                          <input type="text" placeholder="Other Amount" class="enter-price">
                        </li>
                      </ul>
                      <div class="tab tab-content">
                        <div id="price1" role="tabpanel" class="active tab-pane grukl-price-txt"> 499  will support 1 underprivileged youth like Mallige start her education at the Gurukul</div>
                        <div id="price2" role="tabpanel" class="tab-pane grukl-price-txt"> 999 will support 2 underprivileged youth like Mallige start their education at the Gurukul</div>
                        <div id="price3" role="tabpanel" class="tab-pane grukl-price-txt"> 1,999 will support 4 underprivileged youth like Mallige start their education at the Gurukul</div>
                        <div id="price4" role="tabpanel" class="tab-pane grukl-price-txt"> 4,999 will support 10 underprivileged youth like Mallige start their education at the Gurukul</div>
                      </div>
                      <div data-toggle="step-1" class="next">
                        <button id="btn1" class="btn btn-theme btn-theme--style">donate</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div id="headingTwo" role="tab"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="accordian-title collapsed">your details</a></div>
                  <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                    <div class="grukl-payment-body">
                      <form data-toggle="validator" role="form" class="details-form clearfix">
                        <div class="col-sm-6 details-form__theme">
                          <div class="input-field form-group">
                            <input id="first-name" type="text" maxlength="36" pattern="[a-zA-Z ]{1,31}" data-error="*Please enter only alphabets." required="" class="effect-16">
                            <label for="first-name" class="input-label">First Name</label><span class="focus-border"></span>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="input-field form-group">
                            <input id="last-name" type="text" maxlength="36" pattern="[a-zA-Z ]{1,31}" data-error="*Please enter only alphabets." required="" class="effect-16">
                            <label for="last-name" class="input-label">Last Name</label><span class="focus-border"></span>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 details-form__theme">
                          <div class="input-field form-group">
                            <input id="email" type="email" data-error="* Please enter your valid email address." pattern="^([a-zA-Z0-9_-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([a-zA-Z0-9-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$" required="" class="effect-16">
                            <label for="email" class="input-label">Email Address</label><span class="focus-border"></span>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="input-field form-group">
                            <input id="phone-no" type="number" pattern="{10,10}" data-minlength="10" max="9999999999" data-error="* Please enter valid 10-digit mobile number." step="1" required="" class="effect-16">
                            <label for="phone-no" class="input-label">Phone number</label><span class="focus-border"></span>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="grukl-terms-block"><span class="input-checked">
                            <input id="box1" type="checkbox">
                            <label for="box1"></label></span>
                          <p class="terms-text">I have read through the website’s<a href="#">Privacy Policy</a>&amp;<a href="#">Donor’s Policy</a>and Terms &amp; Conditions to make a donation.</p>
                        </div>
                      </form>
                      <div class="next"><a href="javascript:void(0)" class="btn btn-theme btn-theme--style">next</a></div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div id="headingThree" role="tab"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="accordian-title collapsed">your payment</a></div>
                  <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                    <div class="grukl-payment-body">
                      <div class="card-details">
                        <form class="radio-btn">
                          <ul class="radio-btn-list">
                            <li class="radio-btn-list__item">
                              <input id="credit" type="radio" name="selector" value="select-1" class="select-1">
                              <label for="credit">one time</label>
                              <div class="check"></div>
                            </li>
                            <li class="radio-btn-list__item">
                              <input id="debit" type="radio" name="selector" value="select-2" class="select-2">
                              <label for="debit">monthly</label>
                              <div class="check">
                                <div class="inside"></div>
                              </div>
                            </li>
                          </ul>
                        </form>
                      </div>
                      <div class="enter-card-details">
                        <h5 class="card-no-heading">card number</h5>
                        <form class="clearfix">
                          <div class="col-md-5 card-no-details">
                            <div class="input-field-align">
                              <div class="input-field card-no-input">
                                <input id="four-4" type="number" placeholder="Credit Card Number 0000 0000 0000 0000" pattern="{10,10}" data-minlength="10" max="9999999999" data-error="* Please enter valid 10-digit mobile number." step="1" required="" class="input-theme effect-16">
                                <label for="four-4" class="input-label"></label><span class="focus-border"></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-md-offset-1 payment-cards">
                            <ul class="payment-cards-list">
                              <li class="payment-cards-list__item"><img src="img/card-01.png" alt="payment-card-img" class="img-responsive"></li>
                              <li class="payment-cards-list__item"><img src="img/card-04.png" alt="payment-card-img" class="img-responsive"></li>
                              <li class="payment-cards-list__item"><img src="img/card-02.png" alt="payment-card-img" class="img-responsive"></li>
                              <li class="payment-cards-list__item"><img src="img/card-03.png" alt="payment-card-img" class="img-responsive"></li>
                            </ul>
                          </div>
                          <div class="col-xs-12 option-list">
                            <h5 class="card-no-heading">expiration  date</h5>
                            <select class="select-option">
                              <option value="1" class="option-theme">01</option>
                              <option value="2" class="option-theme">02</option>
                              <option value="3" class="option-theme">03</option>
                              <option value="4" class="option-theme">04</option>
                              <option value="5" class="option-theme">05</option>
                              <option value="6" class="option-theme">06</option>
                              <option value="7" class="option-theme">07</option>
                              <option value="8" class="option-theme">08</option>
                              <option value="9" class="option-theme">09</option>
                              <option value="10" class="option-theme">10</option>
                              <option value="11" class="option-theme">11</option>
                              <option value="12" class="option-theme">12</option>
                              <option value="13" class="option-theme">13</option>
                              <option value="14" class="option-theme">14</option>
                              <option value="15" class="option-theme">15</option>
                              <option value="16" class="option-theme">16</option>
                              <option value="17" class="option-theme">17</option>
                              <option value="18" class="option-theme">18</option>
                              <option value="19" class="option-theme">19</option>
                              <option value="20" class="option-theme">20</option>
                              <option value="21" class="option-theme">21</option>
                              <option value="22" class="option-theme">22</option>
                              <option value="23" class="option-theme">23</option>
                              <option value="24" class="option-theme">24</option>
                              <option value="25" class="option-theme">25</option>
                              <option value="26" class="option-theme">26</option>
                              <option value="27" class="option-theme">27</option>
                              <option value="28" class="option-theme">28</option>
                              <option value="29" class="option-theme">29</option>
                              <option value="30" class="option-theme">30</option>
                              <option value="31" class="option-theme">31</option>
                            </select>
                            <select class="select-option">
                              <option value="2017" class="option-theme">2017</option>
                              <option value="2018" class="option-theme">2018</option>
                              <option value="2019" class="option-theme">2019</option>
                              <option value="2020" class="option-theme">2020</option>
                              <option value="2021" class="option-theme">2021</option>
                              <option value="2022" class="option-theme">2022</option>
                              <option value="2023" class="option-theme">2023</option>
                              <option value="2024" class="option-theme">2024</option>
                              <option value="2025" class="option-theme">2025</option>
                              <option value="2026" class="option-theme">2026</option>
                              <option value="2027" class="option-theme">2027</option>
                              <option value="2028" class="option-theme">2028</option>
                              <option value="2029" class="option-theme">2029</option>
                              <option value="2029" class="option-theme">2030</option>
                            </select>
                          </div>
                          <div class="col-xs-12 payment-cards-blck">
                            <ul class="payment-cards-list payment-list">
                              <li class="payment-cards-list__item"><img src="img/card-05.png" alt="payment-card-img" class="img-responsive"></li>
                              <li class="payment-cards-list__item"><img src="img/card-06.png" alt="payment-card-img" class="img-responsive"></li>
                              <li class="payment-cards-list__item"><img src="img/card-07.png" alt="payment-card-img" class="img-responsive"></li>
                            </ul>
                            <div class="contribute-btn">
                              <button class="btn btn-theme btn-theme--style">contribute</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>