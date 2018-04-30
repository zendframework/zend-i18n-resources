# Usage

To use the resources zend-i18n-resources exposes, retrieve them from the
`Zend\I18n\Translator\Resources` class and pass them to
`Zend\I18n\Translator\Translator::addTranslationFilePattern()`:

```php
use Zend\I18n\Translator\Resources;
use Zend\I18n\Translator\Translator;

$translator = new Translator();
$translator->addTranslationFilePattern(
    'phpArray',
    Resources::getBasePath(),
    Resources::getPatternForValidator()
);

echo $translator->translate('Invalid type given. String expected', 'default', 'es');
```

You can also use the `getPatternForCaptcha()` method to setup translation messages for
`zend-captcha`:

```php
$translator->addTranslationFilePattern(
    'phpArray',
    Resources::getBasePath(),
    Resources::getPatternForCaptcha()
);
```

## Automating resource injection

If you are fetching `Zend\I18n\Translator\Translator` via `zend-servicemanager`,
you may want to automate injecting the translation messages. This can be done
using `zend-servicemanager`'s
[delegator factories](https://docs.zendframework.com/zend-servicemanager/delegators/).

As an example, consider the following delegator factory:

```php
use Interop\Container\ContainerInterface;
use Zend\I18n\Translator\Resources;
use Zend\ServiceManager\DelegatorFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TranslatorDelegator implements DelegatorFactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $name,
        callable $callback,
        array $options = null
    ) {
        $translator = $callback();

        $translator->addTranslationFilePattern(
            'phpArray',
            Resources::getBasePath(),
            Resources::getPatternForValidator()
        );
        $translator->addTranslationFilePattern(
            'phpArray',
            Resources::getBasePath(),
            Resources::getPatternForCaptcha()
        );

        return $translator;
    }

    public function createDelegatorWithName(
        ServiceLocatorInterface $container,
        $name,
        $requestedName,
        $callback
    ) {
        return $this($container, $requestedName, $callback);
    }
}
```

> ### Forwards compatibility
>
> The above definition will work with both zend-servicemanager v2 and v3
> releases. If you are targeting only v3 and up, you can remove the
> `createDelegatorWithName()` implementation.

You would then register this in your configuration:

```php
return [
    'service_manager' => [
        'delegators' => [
            'MvcTranslator' => [
                'TranslatorDelegator',
            ],
        ],
    ],
];
```
