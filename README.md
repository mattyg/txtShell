txtApps
======

This is a server application that can run a script and send its output via a SMS messages. 

It uses twitter to read in SMS messages for free. Otherwise it would require a GSM/GPRS modem. The ability to use a GSM/GPRS modem as txt message input will be added in the future.

Possible Uses
----

**This program gives anybody with text messages the possibility of extended functionality, including access to the web and processing power of a remote computer (or a smartphone)**

The only downside is *all user interaction must be through SMS messages.* 

With simple syntax and scripts, one could write programs to get information from the internet, send (short) emails, do system maintenance, and much more.

Developer Info
----

**The value of txtApps is based on the scripts that will be created by developers**

Add a script in any language to the 'scripts' folder and make it executable. It will be run with its name (minus the file extension).

An included example script is called 'weather.php'.
The txt message to run this script is 'weather 02420' (02420 is a command line argument).

Setup and Use
----

Edit the file 'config.php' with your phone number, carrier email domain, and the url of your twitter feed.

Run the master script, it calls the slave script every 10 seconds to check for new updates on your twitter feed.

Text messages commands are styled 'command arg1 arg2 arg3' and the command is simply the script name minus its file extension.
