<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Labels</title>

</head>
<body>

<?php
$settings->labels_width = $settings->labels_width - $settings->labels_display_sgutter;
$settings->labels_height = $settings->labels_height - $settings->labels_display_bgutter;
// Leave space on bottom for 1D barcode if necessary
$qr_size = ($settings->alt_barcode_enabled=='1') && ($settings->alt_barcode!='') ? $settings->labels_height - .3 : $settings->labels_height - 0.1;
// Leave space on left for QR code if necessary
$qr_txt_size = ($settings->qr_code=='1' ? $settings->labels_width - $qr_size - .1: $settings->labels_width);
?>

<style>
    body {
        font-family: arial, helvetica, sans-serif;
        width: {{ $settings->labels_pagewidth }}in;
        height: {{ $settings->labels_pageheight }}in;
        margin: {{ $settings->labels_pmargin_top }}in {{ $settings->labels_pmargin_right }}in {{ $settings->labels_pmargin_bottom }}in {{ $settings->labels_pmargin_left }}in;
        font-size: {{ $settings->labels_fontsize }}pt;
    }
    .label {
        width: {{ $settings->labels_width }}in;
        height: {{ $settings->labels_height }}in;
        padding: 0in;
        margin-right: {{ $settings->labels_display_sgutter }}in; /* the gutter */
        margin-bottom: {{ $settings->labels_display_bgutter }}in;
        display: inline-block;
        overflow: hidden;
    }
    .page-break  {
        page-break-after:always;
    }
    div.qr_img {
        width: {{ $qr_size }}in;
        height: {{ $qr_size }}in;

        float: left;
        display: inline-block;
        padding-right: .04in;
    }
    img.qr_img {

        width: 100%;
        height: 100%;
    }
    img.barcode {
        width: 95%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .qr_text {
        width: {{ $qr_txt_size }}in;
        height: {{ $qr_size }}in;
        padding-top: .01in;
        font-family: arial, helvetica, sans-serif;
        padding-right: .01in;
        overflow: hidden !important;
        display: inline-block;
        word-wrap: break-word;
        word-break: break-all;
    }
    div.barcode_container {

        float: left;
        width: 100%;
        display: inline;
        height: 50px;
    }
    .next-padding {
        margin: {{ $settings->labels_pmargin_top }}in {{ $settings->labels_pmargin_right }}in {{ $settings->labels_pmargin_bottom }}in {{ $settings->labels_pmargin_left }}in;
    }
    @media print {
        .noprint {
            display: none !important;
        }
        .next-padding {
            margin: {{ $settings->labels_pmargin_top }}in {{ $settings->labels_pmargin_right }}in {{ $settings->labels_pmargin_bottom }}in {{ $settings->labels_pmargin_left }}in;
            font-size: 0;
        }
    }
    @media screen {
        .label {
            outline: .02in black solid; /* outline doesn't occupy space like border does */
        }
        .noprint {
            font-size: 13px;
            padding-bottom: 15px;
        }
    }
    @if ($snipeSettings->custom_css)
        {!! $snipeSettings->show_custom_css() !!}
    @endif
    div.asset_tag {
        margin: 5px 0 3px 0;
        font-weight: bold;
        font-size: {{ $settings->labels_fontsize * 2.1 }}pt;
    }
    div.serial {
        margin-left: 1px;
    }
    div.contact_text {
        margin: 7px 0 0 1px;
        font-size: {{ $settings->labels_fontsize * 0.67 }}pt;
    }

</style>

@foreach ($assets as $asset)
    <?php $count++; ?>
    <div class="label">

        @if ($settings->qr_code=='1')
            <div class="qr_img">
                <img src="{{ config('app.url') }}/hardware/{{ $asset->id }}/qr_code" class="qr_img">
            </div>
        @endif

        <div class="qr_text">
            <div class="pull-left asset_tag">
                {{ $asset->asset_tag }}
            </div>
            <div class="pull-left serial">
                {{ $asset->serial }}
            </div>
            <div class="pull-left contact_text">
                Property of School of Computing, University of Kent
                <br>
                For assistance please contact cs-syshelp@kent.ac.uk
	    </div>

        </div>

        @if ((($settings->alt_barcode_enabled=='1') && $settings->alt_barcode!=''))
            <div class="barcode_container">
                <img src="{{ config('app.url') }}/hardware/{{ $asset->id }}/barcode" class="barcode">
            </div>
        @endif



    </div>

    @if ($count % $settings->labels_per_page == 0)
        <div class="page-break"></div>
        <div class="next-padding">&nbsp;</div>
    @endif

@endforeach


</body>
</html>
