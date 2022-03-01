<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="@asset('images/icons/favicon.png')">
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
  @php wp_head() @endphp
</head>
<script>
      Calendly.initInlineWidget({
        url: 'https://calendly.com/intllc',
        parentElement: document.getElementById('SAMPLEdivID'),
        prefill: {},
        utm: {}
        });
  </script>
