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
    <form action="/src/php/functions/checkOrder.php" id="orderForm" class="order-form" method="POST" @submit="onSubmit">
        <input 
            type="text" 
            placeholder="First name"
            name="FirstName"
            @keyup="checkFirstName(FirstName)"
            @blur="checkFirstName(FirstName)" 
            v-model="FirstName"
        >
        <span class="error">
            {{ errors['firstName'] }}
        </span>
        <input 
            type="text" 
            placeholder="Last name"
            name="LastName"
            @keyup="checkLastName(LastName)"
            @blur="checkLastName(LastName)" 
            v-model="LastName"
        >
        <span class="error">
            {{ errors['lastName'] }}
        </span>
        <input 
            type="email" 
            placeholder="Email"
            name="Email"
            @keyup="checkEmail(Email)"
            @blur="checkEmail(Email)" 
            v-model="Email"
        >
        <span class="error">
            {{ errors['email'] }}
        </span>
        <input 
            type="tel" 
            placeholder="PhoneNumber"
            name="PhoneNumber"
            @keyup="checkPhone(PhoneNum)"
            @blur="checkPhone(PhoneNum)" 
            v-model="PhoneNum"
        >
        <span class="error">
            {{ errors['phoneNumber'] }}
        </span>
        <input 
            type="text" 
            placeholder="Street"
            name="Street"
            @keyup="checkSreet(Street)"
            @blur="checkSreet(Street)" 
            v-model="Street"
        >
        <span class="error">
            {{ errors['street'] }}
        </span>
        <input 
            type="num" 
            placeholder="House number"
            name="HouseNumber"
            @keyup="checkHouseNum(HouseNum)"
            @blur="checkHouseNum(HouseNum)" 
            v-model="HouseNum"
        >
        <span class="error">
            {{ errors['houseNum'] }}
        </span>
        <input 
            type="text" 
            placeholder="Zip code"
            name="ZipCode"
            @keyup="checkZipcode(ZipCode)"
            @blur="checkZipcode(ZipCode)" 
            v-model="ZipCode"
        >
        <span class="error">
            {{ errors['zipCode'] }}
        </span>
        <input 
            type="text" 
            placeholder="City"
            name="City"
            @keyup="checkCity(City)"
            @blur="checkCity(City)" 
            v-model="City"
        >
        <span class="error">
            {{ errors['city'] }}
        </span>
        <select 
            name="methods"
            @change=""
            v-model="PayMethods">
            <option value="card">creddit Card</option>
            <option value="Bancontact">Bancontact</option>
        </select>
        <span class="error">
            {{ errors['methods'] }}
        </span>
        <button type="submit">Place order</button>
    </form>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>