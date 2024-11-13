<?php

// Poller settings
$config['distributed_poller'] = true;
$config['distributed_poller_name'] = 'Poller-1';
$config['distributed_poller_group'] = 1; // if you have multiple poller groups
$config['poller_id'] = 1;
$config['poller_threads'] = 16;
$config['distributed_poller_memcached_host'] = 'redis';
$config['distributed_poller_memcached_port'] = 6379;
$config['distributed_poller_memcached_timeout'] = 1000;

// Redis settings
$config['redis_host'] = 'redis';
$config['redis_port'] = 6379;
