
  
const name = document.getElementById('name');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmpassword = document.getElementById('confirmpassword');

let validEmail = false;
let validPhone = false;
let validUser = false;
let validpass = false;
let validcpass = false;

//its jquery .  and initially i hide this for up shapces.
$('#failure').hide();
$('#success').hide();


// name validarion
name.addEventListener('blur', ()=>{
    console.log("name is blurred");
    // Validate name here
    let regex = /^[a-zA-Z]([0-9a-zA-Z .]){3,40}$/;
    let str = name.value;
    console.log(regex, str);
    if(regex.test(str)){
        console.log('Your name is valid');
        name.classList.remove('is-invalid');
        validUser = true;
    }
    else{
        console.log('Your name is not valid');
        name.classList.add('is-invalid');
        validUser = false;
        
    }
})

// number validaton

phone.addEventListener('blur', ()=>{
  console.log("phone is blurred");
  // Validate phone here
  let regex = /^([0-9]){11}$/;
  let str = phone.value;
  console.log(regex, str);
  if(regex.test(str)){
      console.log('Your phone is valid');
      phone.classList.remove('is-invalid');
      validPhone = true;
  }
  else{
      console.log('Your phone is not valid');
      phone.classList.add('is-invalid');
      validPhone = false;
      
  }
})


// email validaton

email.addEventListener('blur', ()=>{
    console.log("email is blurred");
    // Validate email here
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let str = email.value;
    console.log(regex, str);
    if(regex.test(str)){
        console.log('Your email is valid');
        email.classList.remove('is-invalid');
        validEmail = true;
    }
    else{
        console.log('Your email is not valid');
        email.classList.add('is-invalid');
        validEmail = false;
    }
})
// password validaton

password.addEventListener('blur', ()=>{
    
    // Validate password here
    let regex = /^[a-zA-Z0-9!@#$%^&*]{6,30}$/;
    let str = password.value;
    console.log(regex, str);
    if(regex.test(str)){
        console.log('Your password is valid');
        password.classList.remove('is-invalid');
        validpass = true;
    }
    else{
        console.log('Your password is not valid');
        password.classList.add('is-invalid');
        validpass = false;
    }
})

//Confirm password validaton

confirmpassword.addEventListener('blur', ()=>{
    

    let str = password.value;

    if(str.match(confirmpassword.value)){
        console.log('Your password is valid');
        confirmpassword.classList.remove('is-invalid');
        validcpass = true;
    }
    else{
        console.log('Your password is not valid');
        confirmpassword.classList.add('is-invalid');
        validcpass = false;
    }
})


// let submit = document.getElementById('submit');

// submit.addEventListener('click', (e)=>{
//     e.preventDefault();

//     console.log('You clicked on submit');
//     console.log(validEmail, validUser, validPhone, validpass, validcpass);
    
//     // Submit your form here
//     if(validEmail && validUser && validPhone && validpass && validcpass){
//         let failure = document.getElementById('failure');

//         console.log('Phone, email, user, password and confirm password are valid. Submitting the form');
//         let success = document.getElementById('success');
//         success.classList.add('show');
//         // failure.classList.remove('show');
//         // $('#failure').alert('close');
//         $('#failure').hide();
//         $('#success').show();

//          name.value = '';
//          phone.value = '';
//          email.value = '';
//          password.value = '';
//          confirmPassword.value = '';
        
//     }
//     else{
//         console.log('One of Phone, email, user, password or confirm password are not valid. Hence not submitting the form. Please correct the errors and try again');
//         let failure = document.getElementById('failure');
//         failure.classList.add('show');
//         // success.classList.remove('show');
//         // $('#success').alert('hide');
//         $('#success').hide();
//         $('#failure').show();
//         }

    
    
// })






    