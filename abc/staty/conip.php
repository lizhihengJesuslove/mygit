<?php
/***************************Linux虚拟机配置联网*******************
*编辑 /etc/sysconfig/network-scripts/ifcfg-eth0
* 设置IP为dhcp自动获取,
* BOOTPROTO=dhcp
* ONBOOT="yes"
******************************************************************
*如果是设置固定ip,直接在/etc/sysconfig/network-scripts/ifcfg-eth0下添加
*IPADDR=192.168.1.106		//这是ip地址
*NETMASK=255.255.255.0		//子网掩码
*GATEWAY=192.168.1.1		//默认网关
*/
