<?php

require 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

$firestore = new FirestoreClient([
    'projectId' => 'empowher-9e7cb', 
]);

$docRef = $firestore->collection('test')->document('hello');
$docRef->set([
    'message' => 'Firestore is working!'
]);

echo "✅ Firestore write successful.\n";
