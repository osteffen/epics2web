EPICS 2 WEB
===========

EPICS2WEB allows to read EPICS PVs from the web.
It is a simple http server written in Perl, inspired by httpi (http://www.floodgap.com/httpi/)

How to use
----------
Open the URL in your browser. Like this:

   http://hostname:port/pv1/pv2/pv3

This will show a table containing the values of pv1, pv2, and pv3.
The web page will refresh itself every 2 seconds.

The output can be switched to the JSON format by adding ?json to the end of the URL:

	   http://hostname:port/pv1/pv2/pv3?json


Security Note
-------------
This program is NOT secure in any way!
Do NOT use this on the internet or anywhere else where you
don't trust your clients.
