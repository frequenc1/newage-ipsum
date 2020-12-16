newage-ipsum
===============

A new aged ipsum generator inspired/ported to php by Seb Pearce https://github.com/sebpearce/bullshit.
It was just to good to not use with tests!

###Usage

```php
$generator = new \NewAgeIpsum\Generator();
$generator->generateSentence();
```

###Faker
You can also use it with the fantastic Faker library! (It's actually what its designed for)

https://github.com/FakerPHP/Faker

```php
$faker = Faker\Factory::create();
$faker->addProvider(new NewAgeProvider($faker));
```
This will replace the default Faker\Provider\Lorem methods with newage versions

```
word                    // 'dreamscape'
words($nb = 3)          // array('develop', 'healing', 'harmonizing')
sentence()  // 'You will soon be guided by a power deep within yourself — a power that is technological, unlimited.'
sentences($nb = 3)      // array('We are in the midst of a internal condensing of fulfillment that will open up the infinite itself.', 'As you self-actualize, you will enter into infinite joy that transcends understanding.')
paragraph($nbSentences = 3) // 'This life is nothing short of a blossoming flow of intergalatic empathy. To go along the circuit is to become one with it. prophet, look within and synergize yourself.'
paragraphs($nb = 3)     // array('We heal, we vibrate, we are reborn. We are in the midst of a spiritual ennobling of peace that will align us with the quantum cycle itself. The solar system is calling to you via four-dimensional superstructures. Can you hear it? This life is nothing short of a flowering quantum leap of powerful transcendence. Have you found your quest?', 'choice is the driver of science. We must unify ourselves and recreate others. We must learn how to lead interstellar lives in the face of discontinuity.', 'Reality has always been adjWith warriors whose lives are enveloped in nature. Soon there will be a unfolding of being the likes of which the stratosphere has never seen.')
text($maxNbChars = 200) // 'How should you navigate this mystical cosmos? Who are we? Where on the great circuit will we be recreated? Who are we? Where on the great story will we be aligned?It is a sign of things to come. Throu'
```
