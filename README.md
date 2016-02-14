Cloud-P1
========
Web Service Description
=======================
This web service is for weight conversion. It takes a number of pounds as input and returns the number of kilograms.

Url: /index.php?pounds=<number>
Returns: JSON string 

Example Usage:
==============

Url: http://localhost/index.php?pounds=10
Returns: {"pounds":"10","kilograms":4.53}

Docker Notes
============
Run the following commands in docker to start the service
> docker import weightconv.tar imagename
> docker run -d -p 8080:80 imagename /bin/bash/startme.sh

This will start the container, web server and forward traffic on port 8080 into the container

Future Work
==========

I would like to add different unit converters to this (area,volume etc) and develop a large application 
