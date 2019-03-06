# OEShortcode
OE Event Form Shortcode Plugin for UTD Alumni &amp; Development Website

## Usage

Use the shortcode on any page on your website like so:

    [event_form id="'f78d3ca2-c775-4b88-8195-a03c9e286e7d"]

The above example will output (roughly) the following code:

    <div id="bbox-root"></div>
    <script type="text/javascript">
           window.bboxInit = function () {
               bbox.showForm('f78d3ca2-c775-4b88-8195-a03c9e286e7d');
           };
           (function () {
               var e = document.createElement('script'); e.async = true;
               e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
               document.getElementsByTagName('head')[0].appendChild(e);
           } ());
    </script>
