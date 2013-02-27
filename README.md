# Yii-AWS

Provides a simple way to configure and use **Amazon AWS SDK PHP 2**. For more information regarding its services, please go to [http://docs.aws.amazon.com/aws-sdk-php-2/latest/namespace-Aws.html](http://docs.aws.amazon.com/aws-sdk-php-2/latest/namespace-Aws.html "").

### Before you start
The wrapper is in **alpha** version. Obviously, I couldn't test all the possibilities of Amazon SDK, I have tested just a couple. But being just a wrapper, it should not have any issues whatsoever but those related to the SDK itself. 

I published, in order to get good feedback from you guys and again, provide another utility to the Yii framework. If you wish to collaborate, comment, whatever, please, do not hesitate to add your two cents [via its github repository](https://github.com/2amigos/yii-aws ""). Everybody welcome.

### Overview

The main purpose of this extension was to be able to configure the sdk in a very easy way, and then be able to make use of its classes with an easy and configurable import at my main config file.

### Install
I assume that if you wish to use this extension, you already have your [AWS credentials](http://aws.amazon.com/es/ ""). 

Since [schmunk](https://github.com/schmunk42 "") convinced me about [composer](http://getcomposer.org "") wonders. From now on, you will be able to install my extensions using composer ([https://packagist.org/packages/2amigos/](https://packagist.org/packages/2amigos/ "")). 

#### Via Composer
- Add `2amigos/yii-aws` as a dependency in your project's `composer.json` file.  

```
	{
   		"require": {
      		"2amigos/yii-aws": "dev-master"
   		}
	}
```

- Download and install Composer.  
```
curl -s "http://getcomposer.org/installer" | php
```
- Install your dependencies.  
```
php composer.phar install
```
- Require Composer's autoloader.
Composer also prepares an autoload file that's capable of autoloading all of the classes in any of the libraries that it downloads. To use it, just add the following line to your code's bootstrap process.  
```
require '/path/to/vendor/autoload.php';
```

You can find out more on how to install Composer, configure autoloading, and other best-practices for defining dependencies at getcomposer.org.

#### The Old Fashion Way
If you do not work with composer, then simply download or clone from its [repository](https://github.com/tonydspaniard/yii-aws "") and place it wherever you wish. 

After you do that, make sure you **import** on your `main.php` config file, the classes within the `yii-aws/components/*` folder.

#### Configuration 
The library has a `config` folder where you will find a file named "aws-config" to setup the configuration options for the services. For more information about configuring your services, please have a look at [http://docs.aws.amazon.com/awssdkdocsphp2/latest/gettingstartedguide/sdk-php2-using-the-sdk.html ](http://docs.aws.amazon.com/awssdkdocsphp2/latest/gettingstartedguide/sdk-php2-using-the-sdk.html  "")

***Note*** do not forget to add your `AWS credentials` there :)

###How to use it
~~~
// This import is better to be included in your main
// config file. For those newbies to the framework, 
// please recall that this is a path alias, you should 
// write exactly where it is
Yii::import('path.to.amazon.components.*');

$s3 = new A2S3();
$response = $s3->listBuckets(); // we are going to list the buckets

// just for the sake of the example
print_r($response);
~~~

###Requirements
- [Fulfill the requirements of the new SDK](http://docs.aws.amazon.com/awssdkdocsphp2/latest/gettingstartedguide/sdk-php2-prep-for-using-the-sdk.html)
- [aws.phar file](http://docs.aws.amazon.com/awssdkdocsphp2/latest/gettingstartedguide/sdk-php2-installing-the-sdk.html#sdk-php2-installing-via-phar) *(already included)*

###Resources  
- [Yii-Aws Github repository](https://github.com/tonydspaniard/yii-aws)  
- [Download latest ZIPball](https://github.com/2amigos/yii-aws/archive/master.zip)
- [2amigOS Packagist Profile](https://packagist.org/packages/2amigos/)

> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)    
<i>web development has never been so fun</i>  
[www.2amigos.us](http://www.2amigos.us) - under construction -
