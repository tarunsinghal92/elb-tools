<?php

// Usage: addInstance.php <lbname> <region> <instance>

include 'aws.phar';
use Aws\Common\Aws;
use Aws\ElasticLoadBalancing\ElasticLoadBalancingClient;

$awskey = 'ENTERKEY';
$awssecret = 'ENTERSECRET';

$client = ElasticLoadBalancingClient::factory(array(
	'key' => $awskey,
	'secret' => $awssecret,
	'region' => $argv[2]
));

$response = $client->registerInstancesWithLoadBalancer(array(
	'LoadBalancerName' => $argv[1],
	'Instances' => array(
		array('InstanceId' => $argv[3]
		)
	)
));


?>
