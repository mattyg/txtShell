txtShell
======

A daemon that reads in a (likely private) RSS feed from twitter, takes in the text as shell input to the machine it's running on, and sends the shell output as a SMS text message. It is written in PHP.

The only reason that twitter is used is because anybody can text twitter free. Otherwise this would require a GSM/GPRS modem. 

This is probably *NOT* secure.

Possible Uses
----

**This program gives anybody with text messages the possibility of extended functionality, including access to the web and processing power of a remote computer (or a smartphone)**

The only downside is *all user interaction must be through SMS messages.* 

With simple syntax and scripts, one could write programs to get weather and other information from the web, send (short) emails, do system maintenance, and much more. 

Setup and Use
----

Run the master script, it calls the slave script.
