newage-ipsum
===============

A new aged ipsum generator inspired/ported to php by Seb Pearce https://github.com/sebpearce/bullshit.
It was just to good to not use with my testing tools!

###Usage

```php
$generator = new \NewAgeIpsum\Generator();
$generator->generateSentence();
```

###Faker
You can also use it with the fantastic Faker library! (It's actually what its designed for)

https://github.com/fzaninotto/Faker

```php
$faker = new Faker\Generator();
$faker->addProvider(new NewAgeProvider($faker));
```
