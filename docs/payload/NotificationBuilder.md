#### NotificationBuilder

```php

use Prgayman\Fcm\Support\Payload\Notification\NotificationBuilder;

$notifyBuilder = new NotificationBuilder;

/**
 * Set title notification
 * @param string $title
 * @return NotificationBuilder
 */
$notifyBuilder->setTitle($title);

/**
 * Get title notification
 * @return string
 */
$notifyBuilder->getTitle();

/**
 * Set body notification
 * @param string $body
 * @return NotificationBuilder
 */
$notifyBuilder->setBody($body);

/**
 * Get body notification
 * @return string
 */
$notifyBuilder->getBody();

/**
 * Set Click Action
 * @param string $clickAction
 * @return NotificationBuilder
 */
$notifyBuilder->setClickAction($clickAction);

/**
 * Get Click Action
 * @return string
 */
$notifyBuilder->getClickAction();

/**
 * Set Sound Notification
 * @param string $sound
 * @return NotificationBuilder
 */
$notifyBuilder->setSound($sound);

/**
 * Get Sound Notification
 * @return string
 */
$notifyBuilder->getSound();

/**
 * Set Icon Notification
 * @param string $iconUrl
 * @return NotificationBuilder
 */
$notifyBuilder->setIcon($iconUrl);

/**
 * Get Icon Notification
 * @return string
 */
$notifyBuilder->getIcon();

/**
 * Set body Loc key 
 * @param string $bodyLockey
 * @return NotificationBuilder
 */
$notifyBuilder->setBodyLockey($bodyLockey);

/**
 * Get body Loc key
 * @return string
 */
$notifyBuilder->getBodyLockey();

/**
 * Set body Loc Args 
 * @param string $bodyLocArgs
 * @return NotificationBuilder
 */
$notifyBuilder->setBodyLocArgs($bodyLocArgs);

/**
 * Get body Loc Args
 * @return string
 */
$notifyBuilder->getBodyLocArgs();

/**
 * Set title Loc key 
 * @param string $titleLockey
 * @return NotificationBuilder
 */
$notifyBuilder->setTitleLockey($titleLockey);

/**
 * Get title Loc key
 * @return string
 */
$notifyBuilder->getTitleLockey();

/**
 * Set title Loc Args 
 * @param string $titleLocArgs
 * @return NotificationBuilder
 */
$notifyBuilder->setTitleLocArgs($bodyLotitleLocArgscArgs);

/**
 * Get title Loc Args
 * @return string
 */
$notifyBuilder->getTitleLocArgs();

/**
 * Set Image 
 * @param string $imageUrl
 * @return NotificationBuilder
 */
$notifyBuilder->setImage($imageUrl);

/**
 * Get IMage 
 * @return string
 */
$notifyBuilder->getImage();

/**
 * Build Payload Notification 
 * @return  Prgayman\Fcm\Support\Payload\Notification\Notification
 */
$notifyBuilder->build();

```
