#### OptionsBuilder

```php

use Prgayman\Fcm\Support\Payload\Options\OptionsBuilder;

$optionsBuilder = new OptionsBuilder;

/**
 * Set collapseKey
 * @param string $collapseKey
 * @return OptionsBuilder
 */
$optionsBuilder->setCollapseKey($collapseKey)

/**
 * Get collapseKey
 * @return string
 */
$optionsBuilder->setCollapseKey()

/**
 * Set Priority
 * @param string $priority [normal|high]
 * @return OptionsBuilder
 */
$optionsBuilder->setPriority($priority)

/**
 * Get Priority
 * @return string
 */
$optionsBuilder->getPriority()

/**
 * Set Content Available
 * @param bool $contentAvailable
 * @return OptionsBuilder
 */
$optionsBuilder->setContentAvailable($contentAvailable)

/**
 * Get Content Available
 * @return bool
 */
$optionsBuilder->setContentAvailable()

/**
 * Set Mutable Content
 * @param bool $mutableContent
 * @return OptionsBuilder
 */
$optionsBuilder->setMutableContent($mutableContent)

/**
 * Get Mutable Content
 * @return bool
 */
$optionsBuilder->getMutableContent()

/**
 * Set Time To Live
 * @param int $timeToLive
 * @return OptionsBuilder
 */
$optionsBuilder->setTimeToLive($timeToLive)

/**
 * Get Time To Live
 * @return int
 */
$optionsBuilder->getTimeToLive()

/**
 * Set Restricted Package Name
 * @param string $restrictedPackageName
 * @return OptionsBuilder
 */
$optionsBuilder->setRestrictedPackageName($restrictedPackageName)

/**
 * Get Restricted Package Name
 * @return string
 */
$optionsBuilder->getRestrictedPackageName()

/**
 * Set Dry Run
 * @param bool $dryRun
 * @return OptionsBuilder
 */
$optionsBuilder->setDryRun($dryRun)

/**
 * Get Dry Run
 * @return bool
 */
$optionsBuilder->getDryRun()

/**
 * Build Payload Options 
 * @return  Prgayman\Fcm\Support\Payload\Options\Options
 */
$optionsBuilder->build()
```