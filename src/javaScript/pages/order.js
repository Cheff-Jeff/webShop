import '../main';
import Vue from '../../../node_modules/vue/dist/vue.common.prod';
 
new Vue({
  el: '#orderForm',
  data: {
    errors: {
      'firstName': null,
      'lastName': null,
      'email': null,
      'phoneNumber': null,
      'street': null,
      'houseNum': null,
      'zipCode': null,
      'city': null,
      'methods': null,
    },  
    FirstName: null,
    valitFirstName: false,

    LastName: null,
    valitLastName: false,

    Email: null,
    valitEmail: false,

    PhoneNum: null,
    valitPhoneNum: false,

    Street: null,
    valitStreet: false,

    HouseNum: null, 
    valitHouseNum: false,

    ZipCode: null,
    valitZipCode: false,

    City: null,
    valitCity: false,

    PayMethods: null, 
    valitMethods: false,
  },
  methods: {
    onSubmit: function(e)
    {
      if(!this.valitFirstName)
      {
        this.checkFirstName(this.FirstName);
      }
      if(!this.valitLastName)
      {
        this.checkLastName(this.LastName);
      }
      if(!this.valitEmail)
      {
        this.checkEmail(this.Email);
      }
      if(!this.valitPhoneNum)
      {
        this.checkPhone(this.PhoneNum);
      }
      if(!this.valitStreet)
      {
        this.checkSreet(this.Street);
      }
      if(!this.valitHouseNum)
      {
        this.checkHouseNum(this.HouseNum);
      }
      if(!this.valitZipCode)
      {
        this.checkZipcode(this.zipCode);
      }
      if(!this.valitCity)
      {
        this.checkCity(this.City);
      }
      if(!this.valitMethods)
      {
        this.checkPaymethod(this.PayMethods);
      }
      if(!this.valitFirstName || !this.valitLastName || !this.valitEmail || 
        !this.valitPhoneNum || !this.valitStreet || !this.valitHouseNum || 
        !this.valitZipCode || !this.valitCity || !this.valitMethods)
      {
        e.preventDefault(); 
      }
    },
    checkFirstName: function(name)
    {
      if(name == null || name == '' || name == 'null')
      {
        this.errors['firstName'] = 'First name can not be epmty.';
        this.valitFirstName = false;
      }
      else if(!this.validateString(name))
      {
        this.errors['firstName'] = `${name} is not a name. A name can only contain letters.`;
        this.valitFirstName = false;
      }
      else
      {
        this.errors['firstName'] = null;
        this.valitFirstName = true;
      }
    },
    checkLastName: function(name)
    {
      if(name == null || name == '' || name == 'null')
      {
        this.errors['lastName'] = 'Last name can not be epmty.';
        this.valitLastName = false;
      }
      else if(!this.validateString(name))
      {
        this.errors['lastName'] = `${name} is not a name. A name can only contain letters.`;
        this.valitLastName = false;
      }
      else
      {
        this.errors['lastName'] = null;
        this.valitLastName = true;
      }
    },
    checkEmail: function(email)
    {
      if(email == null || email == '' || email == 'null')
      {
        this.errors['email'] = 'Email can not be empty.';
        this.valitEmail = false;
      }
      else if(!this.validateEmail(email))
      {
        this.errors['email'] = `${email} is not an email.`;
        this.valitEmail = false;
      }
      else
      {
        this.errors['email'] = null;
        this.valitEmail = true;
      }
    },
    checkPhone: function(phone)
    {
      if(phone == null || phone == '' || phone == 'null')
      {
        this.errors['phoneNumber'] = 'Phone number can not be empty';
        this.valitPhoneNum = false;
      }
      else if(!this.validatePhone(phone))
      {
        this.errors['phoneNumber'] = `${phone} is not a phone number.`;
        this.valitPhoneNum = false;
      }
      else
      {
        this.errors['phoneNumber'] = null;
        this.valitPhoneNum = true;
      }
    },
    checkSreet: function(street)
    {
      if(street == null || street == '' || street == 'null')
      {
        this.errors['street'] = 'Street can not be epmty.';
        this.valitStreet = false;
      }
      else if(!this.validateString(street))
      {
        this.errors['street'] = `${street} is not a street. A street can only contain letters.`;
        this.valitStreet = false;
      }
      else
      {
        this.errors['street'] = null;
        this.valitStreet = true;
      }
    },
    checkHouseNum: function(num)
    {
      if(num == null || num == '' || num == 'null')
      {
        this.errors['houseNum'] = 'House number can not be epmty.';
        this.valitHouseNum = false;
      }
      else if(!this.validatePhone(num))
      {
        this.errors['houseNum'] = `${num} is not a house number. A house number can only contain numbers.`;
        this.valitHouseNum = false;
      }
      else
      {
        this.errors['houseNum'] = null;
        this.valitHouseNum = true;
      }
    },
    checkZipcode: function(zip)
    {
      if(zip == null || zip == '' || zip == 'null')
      {
        this.errors['zipCode'] = 'Zipcode can not be epmty.';
        this.valitZipCode = false;
      }
      else
      {
        this.errors['zipCode'] = null;
        this.valitZipCode = true;
      }
    },
    checkCity: function(city)
    {
      if(city == null || city == '' || city == 'null')
      {
        this.errors['city'] = 'City can not be epmty.';
        this.valitCity = false;
      }
      else if(!this.validateString(city))
      {
        this.errors['city'] = `${city} is not a city. A house number can only contain letter.`;
        this.valitCity = false;
      }
      else
      {
        this.errors['city'] = null;
        this.valitCity = true;
      }
    },
    checkPaymethod: function(method)
    {
      if(method == null || method == '' || method == 'null')
      {
        this.errors['methods'] = 'Payment pethod can not be empty.';
        this.valitMethods = false;
      }
      else
      {
        this.errors['methods'] = null;
        this.valitMethods = true;
      }
    },
    validateString: function(text)
    {
      const re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]*$/;
      return re.test(text);
    },
    validateEmail: function(email)
    {
      const re = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return re.test(email);
    },
    validatePhone: function(phone)
    {
      const re = /^[0-9]*$/;
      return re.test(phone);
    },
  },
})