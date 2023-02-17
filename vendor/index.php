<?php

require_once 'vendor/autoload.php';

use Courier\Client;
use Courier\Messages\Send\Send;
use Courier\Messages\Send\SendEmail;
use Courier\Messages\Send\SendEmailRecipient;

$client = new CourierClient(getenv('COURIER_AUTH_TOKEN'));

//*****Sending a Simple Notification*****

$message = new Courier\Message([
    'event' => 'your.event.id',
    'recipient' => 'recipient@example.com',
    'profile' => 'your-profile-id',
    'data' => [
        'name' => 'John Doe'
    ]
]);

$response = $client->send($message);

var_dump($response->getMessageId());

//*****Sending Scheduled Notifications*****

$client = new Client('your-auth-token');

// create a Send object with the message and recipient information
$send = new Send();
$send->setId('my-scheduled-email');
$send->setBrand('my-brand');
$send->setTemplateId('my-template-id');
$send->setProfile('my-profile');

$email = new SendEmail();
$email->setFrom('my-sender@example.com');
$email->setSubject('Happy birthday!');
$email->setText('Happy birthday! We hope you have a great day.');

$recipient = new SendEmailRecipient();
$recipient->setEmail('johndoe@example.com');

$email->setRecipients([$recipient]);
$send->setEmail($email);

// set the send time for the scheduled notification
$send->setScheduledAt((new DateTime())->modify('+1 day'));

// send the scheduled notification
$client->messages->schedule($send);

//*****Sending Recurring Notifications*****

require_once 'vendor/autoload.php';

use Courier\CourierClient;
use Courier\Exceptions\CourierException;

try {
  $client = CourierClient::create('<your-auth-token>');

  $subject = 'Daily News Update';

  $message = '<p>Here are today\'s top news articles:</p>';

  // Retrieve the latest news articles from the database
  $articles = get_latest_news_articles();

  // Loop through the list of subscribers and send them an email
  foreach ($subscribers as $subscriber) {
    $recipient = [
      'id' => $subscriber['id'],
      'type' => 'email'
    ];

    $data = [
      'email' => $subscriber['email'],
      'articles' => $articles
    ];

    // Send the email message using Courier
    $response = $client->send([
      'event' => '<your-event-id>',
      'recipient' => $recipient,
      'data' => $data,
      'profile' => '<your-profile-id>',
      'override' => [
        'subject' => $subject,
        'body' => $message
      ]
    ]);
  }
} catch (CourierException $e) {
  echo 'Error: ' . $e->getMessage();
}

function get_latest_news_articles() {
  // Code to retrieve the latest news articles from the database
}