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
```
