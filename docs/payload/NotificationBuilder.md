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
 * @param array $bodyLocArgs
 * @return NotificationBuilder
 */
$notifyBuilder->setBodyLocArgs($bodyLocArgs);

/**
 * Get body Loc Args
 * @return array
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
 * @param array $titleLocArgs
 * @return NotificationBuilder
 */
$notifyBuilder->setTitleLocArgs($bodyLotitleLocArgscArgs);

/**
 * Get title Loc Args
 * @return array
 */
$notifyBuilder->getTitleLocArgs();

/**
 * Set Image 
 * @param string $imageUrl
 * @return NotificationBuilder
 */
$notifyBuilder->setImage($imageUrl);

/**
 * Get Image 
 * @return string
 */
$notifyBuilder->getImage();


/**
 * Set Android Channel Id
 * @param string $channelId
 * @return NotificationAndroidBuilder
 */
$notifyBuilder->android->setChannelId($channelId);

/**
 * Get Channel Id 
 * @return string
 */
$notifyBuilder->android->getChannelId();

/**
 * Set Tag
 * @param string $tag
 * @return NotificationAndroidBuilder
 */
$notifyBuilder->android->setTag($tag);

/**
 * Get Tag
 * @return string
 */
$notifyBuilder->android->getTag();

/**
 * Set Color
 * @param string $color
 * @return NotificationAndroidBuilder
 */
$notifyBuilder->android->setColor($color);

/**
 * Get Color
 * @return string
 */
$notifyBuilder->android->getColor();


/**
 * Set Badge
 * @param string $badge
 * @return NotificationIOSBuilder
 */
$notifyBuilder->ios->setBadge($badge);

/**
 * Get Badge
 * @return string
 */
$notifyBuilder->ios->getBadge();

/**
 * Set subtitle
 * @param string $subtitle
 * @return NotificationIOSBuilder
 */
$notifyBuilder->ios->setSubtitle($subtitle);

/**
 * Get subtitle
 * @return string
 */
$notifyBuilder->ios->getSubtitle();

/**
 * Build Payload Notification 
 * @return  Prgayman\Fcm\Support\Payload\Notification\Notification
 */
$notifyBuilder->build();

```
