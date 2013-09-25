# KoCSRF

KoCSRF is a very simple implementation of a defense mechanism to prevent [Cross Site Request Forgery attacks](https://www.owasp.org/index.php/CSRF). 

## Installing the KoCSRF module

### Using Git

Go into the `modules` directory of your Kohana application, then run the following command:

	git clone https://bitbucket.org/csolar/kocsrf.git kocsrf

### Downloading the source

1. Dowload the latest compressed release (you can see a list of the releases by clicking on the Tags tab) from 

		https://bitbucket.org/csolar/kocsrf/downloads

2. Un-compress the downloaded source into the `modules` directory of your Kohana application.
3. Re-name the un-compressed directory to `kocsrf`.

## Getting started

In order to use KoCSRF, all the relevant modules must be enabled in the modules configuration section within `application/bootstrap.php`:

	Kohana::modules(array(
		...
		'auth'  => MODPATH.'auth',
		'orm'   => MODPATH.'orm',
		'kocsrf' => MODPATH.'kocsrf'
		...
	));

[!!] The ORM and Auth modules are required for KoCSRF to work. 

## Using KoCSRF

## Exception Handling

