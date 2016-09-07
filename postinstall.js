'use strict';

var prompt = require('prompt');
var chalk = require('chalk');
var exec = require('child_process').exec;
var fs = require('fs');
var request = require('request');
var mysql = require('mysql');

/**
 * Start our post-install script
 */

var projectVariables = {
	// defaults
	projectname: 'myproject',
	site_url: 'myproject.dev',
	environment: 'development',
	db_name: 'dev_myproject_dev',
	db_user: 'root',
	db_password: 'root',
	// db_host: 'localhost'
	db_host: '192.168.34.72'

};

var initialize = function (){
		prompt.start();
		prompt.message = 'Signals'.green;

		var schema = {
			properties: {
				askWizard: {
					description: 'Would you like to run the setup wizard? (y/n)',
					pattern: '^(?:y|n)$',
					required: true,
					type: 'string',
					before: function (value) {
						return value === 'y' ? true : false;
					}
				}
			}
		};


		prompt.get(schema, function (err, result) {
			if (result.askWizard){
				runWizard();
			} else {
				console.log(chalk.green('Signals: ') + chalk.grey('You\'re good to go. Happy coding!'));
				process.exit();
			}
		});

};


/**
 * Build .env file for environmental variables
 */
var buildDotEnvFile = function (){
	fs.readFile('.env.example', 'utf8', function (err, data) {
		if (err) {
			console.log(chalk.green('Signals: ') + chalk.red('Cannot find example file'));
		}

		var newFile = data.replace(/database_name/g, projectVariables.db_name)
								.replace(/database_user/g, projectVariables.db_user)
								.replace(/database_password/g, projectVariables.db_password)
								.replace(/database_host/g, projectVariables.db_host)
								.replace(/WP_ENV=development/g, 'WP_ENV=' + projectVariables.environment)
								.replace(/example.com/g, projectVariables.site_url);


		fs.writeFile('.env', newFile, 'utf8', function (err) {
			if (err) return console.log(err);

			console.log(chalk.green('Signals: ') + chalk.grey('Successfully built .env file.'));
		});


	});
};


/**
 * Build gulpfile with your project name
 */
var buildGulpFile = function (){
	fs.readFile('gulpfile.js', 'utf8', function (err, data) {
		if (err) {
			console.log(chalk.green('Signals: ') + chalk.red('Cannot find gulpfile.js'));
		}

		var newFile = data.replace(/YOURPROJECT/g, projectVariables.projectname);



		fs.writeFile('gulpfile.js', newFile, 'utf8', function (err) {
			if (err) return console.log(err);

			console.log(chalk.green('Signals: ') + chalk.grey('Successfully built gulpfile.js'));
		});


	});
};


/**
 * Build gruntfile with your project name
 */
var buildGruntFile = function (){
	fs.readFile('Gruntfile.js', 'utf8', function (err, data) {
		if (err) {
			console.log(chalk.green('Signals: ') + chalk.red('Cannot find gulpfile.js'));
		}

		var newFile = data.replace(/YOURPROJECT/g, projectVariables.projectname);

		fs.writeFile('Gruntfile.js', newFile, 'utf8', function (err) {
			if (err) return console.log(err);

			console.log(chalk.green('Signals: ') + chalk.grey('Successfully built Gruntfile.js'));
		});


	});
};



/**
 * Set default theme to new theme in WordPress to avoid WSOD on initial set up
 */
var setDefaultTheme = function (){
	fs.readFile('config/application.php', 'utf8', function (err, data) {
		if (err) {
			console.log(chalk.green('Signals: ') + chalk.red('Error with config/application.php'));
		}
		var newFile = data.replace(/YOURPROJECT/g, projectVariables.projectname);

		fs.writeFile('config/application.php', newFile, 'utf8', function (err) {
			if (err) return console.log(err);

			console.log(chalk.green('Signals: ') + chalk.grey('Successfully built Gruntfile.js'));
		});


	});
};



/**
 * Run Wizard
 */
var runWizard = function (){

	var projectOptions = {
		properties: {
			projectname: {
				description: 'Project name: to use for theme, config, and default database (ie. ' + projectVariables.projectname + ')',
				message: 'Please enter a project name!',
				type: 'string',
				required: true,
				before: function (value) {
					projectVariables.projectname = value;
					return value;
				}
			},

			site_url: {
				description: 'What is your site\'s local URL? (Press enter for default. ie. ' + projectVariables.projectname + '.dev)',
				type: 'string',
				before: function (value) {
					projectVariables.site_url = value !== '' ? value : projectVariables.projectname + '.dev';
					return value;
				}
			},

			db_name: {
				description: 'DB NAME? (Press enter for default. ie. dev_' + projectVariables.projectname + '_wp)',
				type: 'string',
				before: function (value) {
					projectVariables.db_name = value !== '' ? value : 'dev_' + projectVariables.projectname + '_wp';
					return value;
				}
			},

			db_user: {
				description: 'DB USER? (Press enter for default. Default: root)',
				type: 'string',
				before: function (value) {
					projectVariables.db_user = value !== '' ? value : projectVariables.db_user;
					return value;
				}
			},

			db_password: {
				description: 'DB_PASSWORD? (Press enter for default. Default: root)',
				type: 'string',
				before: function (value) {
					projectVariables.db_password = value !== '' ? value : projectVariables.db_password;
					return value;
				}
			},

			db_host: {
				description: 'DB_HOST? (Press enter for default. Default: localhost)',
				type: 'string',
				before: function (value) {
					projectVariables.db_host = value !== '' ? value : projectVariables.db_host;
					return value;
				}
			},

			environment: {
				description: 'ENV? (Press enter for default. Default: development)',
				type: 'string',
				before: function (value) {
					projectVariables.environment = value !== '' ? value : projectVariables.environment;
					return value;
				}
			},

			askWordPress: {
				description: 'Do you want to automatically get the latest WordPress version? (y/n)',
				message: 'Please tell me if you want to download the latest WordPress.',
				pattern: '^(?:y|n)$',
				required: true,
				type: 'string',
				before: function (value) {
					return value === 'y' ? true : false;
				}
			},

			askDatabase: {
				description: 'Shall we automatically create this database for you? (y/n)',
				message: 'Please tell me if you want to automatically create the database.',
				pattern: '^(?:y|n)$',
				required: true,
				type: 'string',
				before: function (value) {
					return value === 'y' ? true : false;
				}
			}


		}
	};


	prompt.get(projectOptions, function (err, result) {
		if (err) console.error(err);


		// build dotenv file
		if (result.projectname){
			buildDotEnvFile();
			buildGulpFile();
			//buildGruntFile();
			setDefaultTheme();

			// rename theme folder
			exec('mv web/app/themes/YOURPROJECT web/app/themes/' + projectVariables.projectname, function (err, stdout, stderr) {
				if (err) console.error(err);
				console.log(chalk.green('Signals: ') + chalk.grey('Changed theme folder name to match project name.'));
			});
		}


		// download wordpress and put it in the right place
		if (result.askWordPress){
			console.log(chalk.green('Signals: ') + chalk.grey('Getting the latest version of WordPress'));

			var wordpressCore = fs.createWriteStream("latest.tar.gz");

			var rem = request('http://wordpress.org/latest.tar.gz');
			rem.on('data', function(chunk) {
				wordpressCore.write(chunk);
			});

			rem.on('end', function () {
				exec('tar -zxvf latest.tar.gz && mv wordpress web/wp && rm latest.tar.gz', function (err, stdout, stderr) {
					if (err) console.error(err);
					console.log(chalk.green('Signals: ') + chalk.grey('Got WordPress.'));
				});
			});
		}

		if (result.askDatabase){

				var connection = mysql.createConnection({
					host: projectVariables.db_host,
					user: projectVariables.db_user,
					password: projectVariables.db_password
				});

				connection.connect(function(err) {
					if (err) console.error(err.stack);

					connection.query('CREATE DATABASE IF NOT EXISTS ' + projectVariables.db_name, function (err, rows, fields) {
						if (err) console.error(err);
						console.log(chalk.green('Signals: ') + chalk.grey('Successfully created a new MySQL database.'));

						connection.end();
					});


				});

		}



	});


};

// kick things off
initialize();
