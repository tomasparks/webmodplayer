<html>
  <head>
    <title>MOD/S3M/XM module player for Web Audio</title>
    <meta name="description" content="A MOD/S3M/XM module player in Javascript using the Web Audio API.">
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen" />
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/js/utils.js"></script>
    <script type="text/javascript" src="/js/player.js"></script>
    <script type="text/javascript" src="/js/pt.js"></script>
    <script type="text/javascript" src="/js/st3.js"></script>
    <script type="text/javascript" src="/js/ft2.js"></script>
    <script type="text/javascript" src="/js/ui.js"></script>
    <script type="text/javascript">
      window.musicPath='';
      window.musicLibrary=[];
    </script>
  </head>
  <body>
    <div id="outercontainer">
      <div id="headercontainer">
        <div style="margin-left:8px;float:left">MOD/S3M/XM module player for Web Audio</div>
        <div style="margin-right:8px;float:right">(c) 2012-2015 Firehawk/<a class="tdalink" href="http://tda.haxor.fi/" target="_blank">TDA</a></div>
        <div style="clear:both;"></div>
      </div>
      <div id="innercontainer">
        <div id="modsamples"></div>
        <div style="position:relative;top:8px;margin-bottom:8px;">
          <span id="modtitle"></span>
          <span id="modinfo">('&nbsp;&nbsp;&nbsp;&nbsp;')</span>
          <span id="modtimer"></span>
          <br/><br/>
          <a class="inactive" href="#" id="prev_track">[|&lt;]</a>
          <a href="#" id="go_back">[&lt;&lt;]</a>
          <a href="#" id="play">[play]</a>
          <a href="#" id="pause">[pause]</a>
          <a href="#" id="go_fwd">[&gt;&gt;]</a>
          <a class="inactive" href="#" id="next_track">[&gt;|]</a>
          <span style="white-space:pre;">     </span>
          <a href="#" title="Repeat song" id="modrepeat">[rept]</a>
          <a class="down" title="Stereo separation" href="#" id="modpaula">[)oo(]</a>
          <a class="down" title="Visualization type" href="#" id="modvis">[trks]</a>
          <a title="Amiga A500 lowpass filter" href="#" id="modamiga">[filt]</a>
          <span style="white-space:pre;">     </span>
          <a title="Load song or edit playlist" href="#" id="load_song">[load song]</a>
        </div>
        <div id="modchannels"><div id="even-channels"></div><div id="odd-channels"></div></div>
        <div id="modpattern"></div>
        <div style="clear:both"></div>
        <div id="infotext">
          The player has been tested on Chrome 14+, Firefox 24+, Safari 6+ and Edge 20+ so far. <span style="color:#faa">Disable AdBlock if you get cuts or stuttering!</span>
          To report bugs, suggest features or request songs, contact me on <a href="https://twitter.com/janihalme" style="color:#cce;">Twitter</a> or
          email <a href="mailto:firehawk@haxor.fi" style="color:#cce">firehawk@haxor.fi</a>.
          Source code available on <a style="color:#cce;" target="_blank" href="https://github.com/jhalme/webaudio-mod-player">GitHub</a>.
        </div>
      </div>

      <div style="display:none;" id="loadercontainer">
        <div id="musiclibrary">
          <br/>dh0:music_library&gt;<br/><br/>
          <select size="24" id="modfile"></select>
          <br/><br/>
          <div style="clear:left;"></div>
          <div style="margin-left: 24px;">
            <a href="#" id="load_cancel">[&lt; back]</a>&nbsp;
            <a href="#" id="load">[load song]</a>&nbsp;
            <a href="#" id="add_playlist">[add +&gt;]</a>
          </div>
          <div style="margin-left: 24px; margin-top: 12px;">
          <input value="" id="loadfilter" size="48" placeholder="Filter songs" style="border: 1px solid #8f8; background-color: #181818" />
          </div>
        </div>

        <div id="playlist">
        <br/>ram:playlist&gt;<br/><br/>
        <select size="24" id="playlist_box">
        </select>
          <div style="clear:right;"></div>
          <div style="margin-left: 24px;">
            <a href="#" id="playlist_up">[^^]</a>&nbsp;
            <a href="#" id="playlist_dn">[vv]</a>&nbsp;
            <a href="#" id="playlist_remove">[remove]</a>&nbsp;
            <a href="#" id="playlist_clear">[clear]</a>&nbsp;
            <a href="#" id="playlist_jumpto">[play song]</a>
          </div>
        </div>

        <div style="clear:both"></div>
      </div>

    </div>
  </body>
</html>
