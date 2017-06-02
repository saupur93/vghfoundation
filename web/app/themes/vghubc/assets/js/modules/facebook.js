'use strict';
import $ from 'jquery';
// import st from './scrollto';

let _module;

export default _module = {
	loginButton : document.querySelector('.fb-login'),
	logoutButton : document.querySelector('.fb-logout'),
	content : document.querySelector('.contest-register'),
	fields : {
		email : document.querySelector('#survey-cons-email'),
		first_name : document.querySelector('#survey-cons-first-name'),
		last_name : document.querySelector('#survey-cons-last-name')
	},

	init : () => {
		_module.loadSDK();

		window.fbAsyncInit = () => {
			FB.init({
				appId      : '1971766793058772',
				cookie     : false,
				xfbml      : true,
				version    : 'v2.8'
			});

			FB.getLoginStatus(function(response) {
				_module.statusChangeCallback(response);
			});
		}
	},


	loadSDK : () => {
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	},


	statusChangeCallback : (response) => {
		//console.log('statusChangeCallback');
		console.log(response);

		if (response.status === 'connected') {
			console.log('You are logged in');
			//_module.loginButton.classList.add('hidden');
			//_module.logoutButton.classList.remove('hidden');
		} else if (response.status === 'not_authorized') {
			//console.log('Please log into this app.');
		} else {
			//console.log('Please log into Facebook.');
		}
	},


	checkLoginState : () => {
		FB.getLoginStatus(function(response) {
			_module.statusChangeCallback(response);
		});
	},


	login : (el) => {
		if (el.classList.contains('disabled')) return false;

		FB.login(function(response) {
			if (response.authResponse) {
				console.log('Welcome!  Fetching your information.... ', response);
				//_module.checkLoginState();

				FB.api('/me?fields=first_name,last_name,email', function(response) {
					console.log(response);

					_module.loginButton.classList.add('hidden');
					_module.logoutButton.classList.remove('hidden');
					// st.animate(_module.content.offsetTop, 100);

					_module.populateFormFields(response);
				});
				var uri = "https://support.vghfoundation.ca/site/CRSurveyAPI",
					postdata = "method=listUserFields&v=1.7.1&api_key=wDB09SQODRpVIOvX";

				xhr = new XMLHttpRequest();
				   xhr.open('POST', uri, true);
				   console.log(xhr);
				   xhr.onreadystatechange=function() {
				     if (xhr.readyState == 4) {
				        console.log(xhr.status);
				        console.log(xhr.responseText);
				     }
				   };
				   xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				   xhr.send(postdata);

			} else {
				//console.log('User cancelled login or did not fully authorize.');
			}
		}, {
			scope: 'public_profile,email'
		});
	},


	logout : () => {
		FB.logout(function(response) {
			_module.loginButton.classList.remove('hidden');
			_module.logoutButton.classList.add('hidden');
		});
	},


	populateFormFields : (user) => {
		for (var key in user) {
			if (user.hasOwnProperty(key)) {
				if (_module.fields[key]) {
					_module.fields[key].value = user[key];
				}
			}
		}
	}

}
