<?php
    $Page = "Order";
    $JS = "order";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/order.php");
    include_once($root."/pages/templates/top.php");
?>
<section class="banner">
    <div class="txtWrap">
        <h1><?=$txt1?></h1>
    </div>
    <div class="imgWrap">
        <img src="<?=$img1?>">
    </div>
</section>
<section class="form-section">
    <div class="background" style="background-image: url(<?=$img2?>);"></div>
    <div class="container small-page">
        <form action="/src/php/functions/checkOrder.php" id="orderForm" class="order-form" method="POST" @submit="onSubmit">
            <div class="form-section2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap">
                            <h3>Receiver</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap">
                            <input type="text" placeholder="First name"name="FirstName"
                                @keyup="checkFirstName(FirstName)" @blur="checkFirstName(FirstName)" 
                                v-model="FirstName">
                            <span class="error">
                                {{ errors['firstName'] }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap">
                            <input type="text" placeholder="Last name"name="LastName"
                                @keyup="checkLastName(LastName)" @blur="checkLastName(LastName)" 
                                v-model="LastName">
                            <span class="error">
                                {{ errors['lastName'] }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-wrap">
                            <input type="email" placeholder="Email"name="Email"
                                @keyup="checkEmail(Email)" @blur="checkEmail(Email)" 
                                v-model="Email">
                            <span class="error">
                                {{ errors['email'] }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap">
                            <input type="tel" placeholder="PhoneNumber"name="PhoneNumber"
                                @keyup="checkPhone(PhoneNum)" @blur="checkPhone(PhoneNum)" 
                                v-model="PhoneNum">
                            <span class="error">
                                {{ errors['phoneNumber'] }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap">
                            <h3>Shipping to</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-wrap">
                            <input type="text" placeholder="Street" name="Street"
                                @keyup="checkSreet(Street)" @blur="checkSreet(Street)" v-model="Street">
                            <span class="error">
                                {{ errors['street'] }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap">
                            <input type="num" placeholder="House number" name="HouseNumber"
                                @keyup="checkHouseNum(HouseNum)" @blur="checkHouseNum(HouseNum)" v-model="HouseNum">
                            <span class="error">
                                {{ errors['houseNum'] }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap">
                            <input type="text" placeholder="Zip code"name="ZipCode"
                                @keyup="checkZipcode(ZipCode)" @blur="checkZipcode(ZipCode)" v-model="ZipCode">
                            <span class="error">
                                {{ errors['zipCode'] }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap">
                            <input type="text" placeholder="City" name="City"
                                @keyup="checkCity(City)" @blur="checkCity(City)"  v-model="City">
                            <span class="error">
                                {{ errors['city'] }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section2">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="title-wrap">
                            <h3>Payment method</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap select-input">
                            <label id="methodLbl" for="methods">Payment method</label>
                            <svg id="arrow" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort-down" class="svg-inline--fa fa-sort-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z"></path></svg>
                            <select id="paymethodInput" name="methods" @change="checkPaymethod(PayMethods)" v-model="PayMethods">
                                <option value="card">creddit Card</option>
                                <option value="Bancontact">Bancontact</option>
                            </select>
                        </div>
                        <span class="error">
                            {{ errors['methods'] }}
                        </span>
                    </div>
                    <div class="col-md-12">
                        <div class="btn-wrap">
                            <button class="main-btn" type="submit">Place order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>