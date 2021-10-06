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
    <form action="" id="orderForm" class="order-form" method="POST" @submit="onSubmit">
        <input 
            type="text" 
            placeholder="First name"
            name="FirstName"
            @keyup=""
            @blur="" 
            v-model="FirstName"
        >
        <input 
            type="text" 
            placeholder="Last name"
            name="LastName"
            @keyup=""
            @blur="" 
            v-model="LastName"
        >
        <input 
            type="email" 
            placeholder="Email"
            name="Email"
            @keyup=""
            @blur="" 
            v-model="Email"
        >
        <input 
            type="tel" 
            placeholder="PhoneNumber"
            name="PhoneNumber"
            @keyup=""
            @blur="" 
            v-model="PhoneNum"
        >
        <input 
            type="text" 
            placeholder="Street"
            name="Street"
            @keyup=""
            @blur="" 
            v-model="Street"
        >
        <input 
            type="num" 
            placeholder="House number"
            name="HouseNumber"
            @keyup=""
            @blur="" 
            v-model="HouseNum"
        >
        <input 
            type="text" 
            placeholder="Zip code"
            name="ZipCode"
            @keyup=""
            @blur="" 
            v-model="ZipCode"
        >
        <input 
            type="text" 
            placeholder="City"
            name="City"
            @keyup=""
            @blur="" 
            v-model="City"
        >
    </form>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>