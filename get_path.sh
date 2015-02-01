#!/bin/sh
#
# Shell script that checks the path for traffic to the baan server
# This is determined by checking the next hop for a specific
#  route, ie --> 192.168.0.0/24

#
# Start
#

if [ `snmpwalk -v2c -c <string> <router-name> iso.3.6.1.2.1.4.21.1.7.192.168.0.0 | /usr/bin/awk '{print $4}'` = <path route is learned from> ]
then
   echo '1'
else
   echo '2'
fi


# End
