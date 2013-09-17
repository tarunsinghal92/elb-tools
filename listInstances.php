<?php

// Usage: listInstances <lbname> <region>
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

$response = $client->DescribeLoadBalancers(array(
	'LoadBalancerNames' => array($argv[1])
));

foreach($response->getPath('LoadBalancerDescriptions/*/Instances/*/InstanceId') as $name){
	echo "$name\n";
}

?>
