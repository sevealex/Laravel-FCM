<?php

return [

  /**
   * Firebase Base Url  
   */
  "base_url" => "POST https://fcm.googleapis.com/fcm/send",

  /**
   * Registration ids limit in per request
   */
  "registration_ids_limit" => 10000,

  /**
   * Firebase Server Key
   */
  "server_key" => env("FIREBASE_SERVER_KEY"),


];
