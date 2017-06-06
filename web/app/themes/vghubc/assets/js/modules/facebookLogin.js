import jump from 'jump.js'

let facebookLogin;

export default facebookLogin = {
  loginButton : document.querySelector('.fb-login'),
  logoutButton : document.querySelector('.fb-logout'),
  messageText : document.querySelector('.message'),
  thankYou : document.querySelector('.thank-you'),
  content : document.querySelector('.contest-register'),
  form: document.querySelector('.facebook-luminate'),
  fields : {
    email : document.querySelector('#survey-cons-email'),
    first_name : document.querySelector('#survey-cons-first-name'),
    last_name : document.querySelector('#survey-cons-last-name')
  },

  init () {

    facebookLogin.loadSDK();

    window.fbAsyncInit = () => {
      FB.init({
        appId      : '1971766793058772',
        cookie     : false,
        xfbml      : true,
        version    : 'v2.8'
      });

      FB.getLoginStatus(function(response) {
        facebookLogin.statusChangeCallback(response);
      });
    }

  },


  loadSDK () {
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  },


  statusChangeCallback (response) {
    //console.log('statusChangeCallback');
    console.log(response);

    if (response.status === 'connected') {
      console.log('You are logged in');
      //facebookLogin.loginButton.classList.add('hidden');
      //facebookLogin.logoutButton.classList.remove('hidden');
    } else if (response.status === 'not_authorized') {
      //console.log('Please log into this app.');
    } else {
      //console.log('Please log into facebookLogin.');
    }
  },


  checkLoginState () {
    FB.getLoginStatus(function(response) {
      facebookLogin.statusChangeCallback(response);
    });
  },


  login (el) {
    if (el.classList.contains('disabled')) return false;

    FB.login(function(response) {
      if (response.authResponse) {
        console.log('Welcome!  Fetching your information.... ', response);
        //facebookLogin.checkLoginState();

        FB.api('/me?fields=first_name,last_name,email', function(response) {
          facebookLogin.populateFormFields(response);

          if(facebookLogin.form.length > 0) {
            facebookLogin.form.querySelector('button').click();
          }
        });


      } else {
        //console.log('User cancelled login or did not fully authorize.');
      }
    }, {
      scope: 'public_profile,email'
    });
  },


  logout () {
    FB.logout(function(response) {
      facebookLogin.loginButton.classList.remove('hidden');
      facebookLogin.logoutButton.classList.add('hidden');
    });
  },

  // populates hidden form inputs
  populateFormFields (user) {
    for (var key in user) {
      if (user.hasOwnProperty(key)) {
        if (facebookLogin.fields[key]) {
          facebookLogin.fields[key].value = user[key];
        }
      }
    }
  },


  submitLuminateSurveyCallback (response) {
    console.log('submitted')
    console.log(response)
    if(response.submitSurveyResponse) {
      if(response.success == 'false' || response.submitSurveyResponse.errors) {
        facebookLogin.luminateFormErrorHandler(response);

      } else {
          // success
          facebookLogin.loginButton.classList.add('hidden');
          facebookLogin.messageText.classList.add('hidden');
          facebookLogin.messageText.innerHTML = "You've successfully registered for a chance to win. We'll be in touch via email to let you know more details.";
          facebookLogin.thankYou.classList.remove('hidden');
          facebookLogin.form.classList.add('hidden');
          jump(facebookLogin.thankYou);
      }
    } else {
      facebookLogin.luminateFormErrorHandler(response);
    }
  },


  luminateFormErrorHandler (response) {
    console.log('failed');
    facebookLogin.loginButton.classList.add('hidden');
    facebookLogin.form.classList.remove('hidden');
    if(response.errorResponse) {
      facebookLogin.messageText.innerHTML = response.errorResponse.message;
      facebookLogin.form.classList.add('hidden');
    } else {
      facebookLogin.messageText.innerHTML = 'There was a problem with your submission. Please check the information in the form and re-submit.';
    }
    jump('.theme-sharing-panel');
    let ctamsgbox = document.querySelector('#cta-message');
    facebookLogin.loginButton.style.display = 'none';
    ctamsgbox.classList.remove('show');
    ctamsgbox.outerHTML = '';
  },


  showEmailForm (el) {
    console.log('show-email')
    jump('.theme-sharing-panel');
    let ctamsgbox = document.querySelector('#cta-message');
    facebookLogin.loginButton.style.display = 'none';
    ctamsgbox.classList.remove('show');
    ctamsgbox.outerHTML = '';
    // document.querySelector('#cta-message').innerHTML = '';
    // document.querySelector('#cta-message .fb-buttons').style.display = 'none';
    facebookLogin.form.classList.remove('hidden');
  }



}
