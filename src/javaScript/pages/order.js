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
      'method': null
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
  },
  methods: {
    onSubmit: function(e)
    {
      if(!this.valitFirstName)
      {
        this.checkFirstName(this.FirstName);
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
        this.valitPhoneNum = false;
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