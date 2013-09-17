# elb-tools

These are just some simple php scripts that will interface with Amazon's Elastic Load Balancer. They are meant to be used as scripts and not actual webpages.

```
listInstances.php - list all instances in a specified ELB
addInstance.php - add instance to a specified ELB
removeInstance.php - remove instance from a specified ELB
```

### Requirements

You'll need to download the latest php sdk from aws. You can download it here or install with PEAR: http://pear.amazonwebservices.com/get/aws.phar 

You will also need to have a working aws keypair.

### Syntax

```
listInstances.php <lbname> <region>
```

```
addInstance.php <lbname> <region> <instance>
```

```
removeInstance.php <lbname> <region> <instance>
```


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/pfrederiksen/elb-tools/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

