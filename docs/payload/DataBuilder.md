#### NotificationBuilder

```php

use Prgayman\Fcm\Support\Payload\Data\DataBuilder;

$dataBuilder = new DataBuilder;


/**
 * add data to existing data or set data if data is null.
 * 
 * @param array $data
 * @return DataBuilder
 */
$dataBuilder->addData(array $data);

/**
 * Erase data with new data.
 *
 * @param array $data
 * @return DataBuilder
 */
$dataBuilder->setData(array $data)

/**
 * Remove all data.
 */
$dataBuilder->removeAllData()

/**
 * Get All Data
 *
 * @return array
 */
$dataBuilder->getDate()

/**
 * Build Payload Data 
 * @return  Prgayman\Fcm\Support\Payload\Data\Data
 */
$dataBuilder->build()

```