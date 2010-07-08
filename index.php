<?php echo '<?xml version="1.0" ?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
DEFINE ("_BBCLONE_DIR", "bbclone/");
DEFINE ("_NEW_COUNTER", _BBCLONE_DIR . "mark_page.php");
if (file_exists (_NEW_COUNTER)) include (_NEW_COUNTER);
?>
 
<html lang="en">
<head>
  <title>Quark - Anti-GUI Music Player</title>
  <link rel="stylesheet" type="text/css" href="css.css" />
  <link rel="shortcut icon" href="/favicon.png" type="image/png" />
  <link rel="shortcut icon" href="/favicon.bmp" type="image/bmp" />
</head>

<body>

<div class="header">
<a name="top"></a>
<img src="quark.gif" alt="Quark" />
</div>
<div class="menu">
  <a href="#about">About</a> |
  <a href="#faq">FAQ</a> |
  <a href="#download">Download</a> |
  <a href="#shots">Screenshots</a> |
  <a href="#license">License</a> |
  <a href="#contact">Contact</a>
</div>

<div class="about">
<div class="toplink"><a href="#top">[top]</a></div>
<a name="about" /><h2>About</h2>
<blockquote>
  <div>
    A quark is a very small, almost virtual, particle that combines with other
    quarks to create something useful.
  </div>
</blockquote>
<p>
  Quark is an audio player, for geeks, by geeks. It runs in the background with
  access provided via a FIFO in the filesystem. It uses
  <a href="http://xinehq.de/">Xine-lib</a> for playing music, and can
  therefore play any file format
  <a href="http://xinehq.de/index.php/features">supported by Xine</a>.
</p>
<p>
  Quark comes with a couple front-ends to make it more useful.
</p>
<ul>
  <li>
    <span class="name">charm-quark</span> - a CLI interface
  </li>
  <li>
    <span class="name">strange-quark</span> - a GTK System Tray
    interface
  </li>
</ul>
</div>

<div class="faq">
<div class="toplink"><a href="#top">[top]</a></div>
<a name="faq" /><h2>FAQ</h2>
<!--<ul>
  <li>
    <div class="question">
    	It doesn't play!
	</div>
	<div class="answer">
	<p>
	Since quark uses gstreamer, most likely this is because of your configuration of that subsystem. Consult their documentation on how to configure it.</p>
	<p>
	Also, after running make install, you should restart gnome-settings-daemon if it is running. This will apply the default configuration parameters for quark.
	</p>
	</div>
  </li>
</ul>-->
</div>

<div class="download">
<div class="toplink"><a href="#top">[top]</a></div>
<a name="download" /><h2>Download</h2>
<div class="releases">
  <h3>Releases</h3>
  <a href="quark-3.21.tar.gz">3.21</a> - October 8, 2003
  <div class="releasenotes">
  	Fixes a crash in strange-quark.
  </div>
  <a href="quark-3.20.tar.gz">3.20</a> - September 30, 2003
  <div class="releasenotes">
    strange-quark's tooltip now shows the current song. Quark exports a
    proper protocol for client notification. A bunch of bug fixes in quark and
    strange-quark. Quark loads the ~/.xine/config file for detailed
    configuration of its playback.
  </div>
  <a href="quark-3.11.tar.gz">3.11</a> - June 19, 2003
  <div class="releasenotes">
    strange-quark now has a Recent menu with recent selections made from its
    file dialogs. quark parses playlists created on more platforms correctly
    by treating \n and \r as line breaks. Sort directories when adding their
    contents to the playlist. Fix for playlists with absolute paths. Prevent
    infinite loop if quark is unable to play anything in the playlist, only
    looping through them once. Close the audio device when paused.
  </div>
  <a href="quark-3.1.tar.gz">3.1</a> - June 18, 2003
  <div class="releasenotes">
    strange-quark supports entering URLs directly into its file dialog. Add
	support to quark for playing real-audio streams. Fix for laggy pause/resume.
	Added a 'ko' translation from Kang Jeong-Hee. Fix for bugs in net playlist
	parsing. Fix bug where excess whitespace would be included in the filename.
	Hide the Playlist Editor that was not meant for inclusion in 3.0.
  </div>
  <a href="quark-3.0.tar.gz">3.0</a> - June 18, 2003
  <div class="releasenotes">
    Quark has changed backends from GStreamer to Xine-lib. Added support for
	playing .pls files from off the Web. Internationalized the backend and
	strange-quark GUI, allowing for language translations.
  </div>
  <a href="quark-2.2.tar.gz">2.2</a> - June 15, 2003
  <div class="releasenotes">
    Quark can now be passed a .m3u or .pls playlist, and it will add the songs
	contained in the list. Fixed bugs in adding recursive directories. Bugs in
	gstreamer 0.6.2 have caused a workaround which only allows Quark to play
	MP3 streams (see gstreamer bug #94113).
  </div>
  <a href="quark-2.1.tar.gz">2.1</a> - June 14, 2003
  <div class="releasenotes">
    Quark now has the ability to play HTTP streams. Added options in the
    strange-quark menu. Ability to add directories to quark recursivelty
    in addition to individual files. strange-quark runs the backend process if
    it is unable to connect to it. Add schemas for the options in gconf with
	descriptions of all the options. A number of usability improvements to make
	life more pleasant when using strange-quark.
  </div>
  <a href="quark-2.0.tar.gz">2.0</a> - June 13, 2003
  <div class="releasenotes">
    This release makes strange-quark into a functional frontend. It is added to
	the GNOME menus on install (if installed to the same prefix). charm-quark
	can now provide control over the network by running it with -l on the server
	and with -r on the client machine. quark now uses GConf to save its options
	and persists its playlist when it is shutdown and started again.
  </div>
  <a href="quark-1.0.tar.gz">1.0</a> - June 11, 2003
  <div class="releasenotes">
    This is the initial release of quark. The backend is functional via the
    FIFO and charm-quark provides a usable front-end to the application.
    strange-quark is not yet functional -- it docks in the system tray but does
    not provide any useful functionality.
  </div>
</div>
<p>
  You can <a href="http://svn.orodu.net/quark/trunk/">see the source code</a> or
  you can grab a copy of what we're working on, with
  <a href="http://subversion.tigris.org">subversion</a>:
  <code class="command">svn co svn://svn.orodu.net/home/svn/quark/trunk
  quark</code>
</p>
<p>
  To build Quark, you will need the following (or newer):
</p>
<ul>
  <li><a href="http://xinehq.de/index.php/releases">Xine-lib 1.0</a></li>
  <li><a href="http://www.gtk.org">GTK+ 2.0</a></li>
  <li><a href="http://www.gnome.org/projects/gconf/">GConf 2.0</a></li>
  <li><a href="ftp://ftp.gnome.org/pub/gnome/sources/gnome-vfs">GnomeVFS 2.0</a></li>
</ul>
</div>

<div class="shots">
<div class="toplink"><a href="#top">[top]</a></div>
<a name="shots" /><h2>Screenshots</h2>
  <div class="shot">
    <img src="quark_tray.png" alt="tray icon" />
    <div class="desc">
      strange-quark in the system tray (Notification Area)
    </div>
  </div>
  <div class="shot">
    <img src="quark_menu.png" alt="menu" />
    <div class="desc">
      strange-quark's popup menu
    </div>
  </div>
</div>

<div class="license">
<div class="toplink"><a href="#top">[top]</a></div>
<a name="license" /><h2>License</h2>
<p>
  Quark is licensed under the
  <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU General Public
  License</a> (GPL).
</p>
<div class="licensequote">
  This program is free software; you can redistribute it and/or modify it under
  the terms of the GNU General Public License as published by the Free Software
  Foundation; either version 2 of the License, or (at your option) any later
  version.
  <br />
  This program is distributed in the hope that it will be useful, but WITHOUT
  ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
  FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
  details.
</div>
</div>

<div class="contact">
<div class="toplink"><a href="#top">[top]</a></div>
<a name="contact" /><h2>Contact</h2>
<p>
  Quark is developed by <a href="mailto:xor@orodu.net">Ben Jansens</a> and
  <a href="mailto:smoynes@nerdnest.org">Scott Moynes</a>.
</p>
</div>

<p>
  <a href="http://validator.w3.org/check/referer"><img
      width="88" height="31"
      src="http://www.w3.org/Icons/valid-xhtml10"
      alt="Valid XHTML 1.0!" /></a>
  <a href="http://jigsaw.w3.org/css-validator/"><img
      width="88" height="31"
	  src="http://jigsaw.w3.org/css-validator/images/vcss" 
      alt="Valid CSS!" /></a>
</p>

</body>
</html>
