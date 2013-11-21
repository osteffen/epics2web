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

To start the server run the epics2web executable perl script.
To stop it use

	killall -r epics2web

Security Note
-------------
This program is NOT secure in any way!
Do NOT use this on the internet or anywhere else where you
don't trust your clients.

Trouble Shooting
----------------
 * In case the CA.pm perl module can not be found you might have to adjust the
   EPICS path in the use-statement at the beginning of the program.

 * In **EPICS 3.15.01** (not EPICS 3.14.x), the PERL library is not
   correctly named (extraneous . in filename). See
   [Known Problems](http://www.aps.anl.gov/epics/base/R3-15/0-docs/KnownProblems.html).
   Thus in order to correctly run the PERL scripts below `scripts/`
   you must apply this
   [Patch](http://www.aps.anl.gov/epics/base/R3-15/0-docs/CONFIG-Unix.patch)
   **before** building.
