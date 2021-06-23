# php-logging
PHP Logging software or processes

<h2>If this software integrates it into your website, it receives the following data from users!</h2>
<small>It is recommended that you inform the users who enter your website about the data you receive in terms of awareness.
</small><br>
<small>Those who write, publish or contribute this code assume no responsibility. All responsibility belongs to the users who integrate or use this code on the website.
</small><br>

<ul>
<li>Date</li>
<li>Time</li>
<li>IP Adress</li>
<li>Remote Host</li>
<li>Server Protocol</li>
<li>PORT</li>
<li>Compression Request</li>
<li>Character Set</li>
<li>Request Type</li>
<li>Browser Language</li>
<li>Browser Type</li>
<li>*Browser Type-2*	For advanced browsers otherwise it returns null
</li>
<li>*Browser Version*	For advanced browsers otherwise it returns null
</li>
<li>OS</li>
<li>File Path</li>

<b><p>The javascript file is published as an attachment. You can use optional. Update and development will come.
</p></b>
<li>Screen Resolution -> additional/main.js</li>
</ul>

<h2>How does it work?</h2>
<ul>
<li>If the logs folder does not exist, it creates a new logs folder.
</li>
<li>It automatically takes the date you were found under the logs folder and creates a text file that writes date-logs.
</li>
<li>It automatically records the data it receives every time a website or page is logged.
</li>
<li>It does not log the screen resolution as a log. The main.js file contains the screen resolution. it just writes to console.log.
</li>
</ul>
