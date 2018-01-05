<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GI</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/92410/responsive-youtube.js"></script>
    <script src="js/skrollr.min.js"></script>

    <script src="js/scripts.js"></script>


</head>
<body>
    <!-- HEADER -->
    <?php include 'header.php'; ?>


    <section class="videoheader">
        <div class="videowrapper">
          <div class="videologo"><!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In  -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 577.7 54.2"><path fill="none" d="M194.7-39.2h112.7v3.7H194.7zM384.1-3.3H227.6h156.5z"/><path d="M14.4 16.7v.8c1.2.1 2 .2 2.6.4.5.2.9.7 1.1 1.3.2.6.3 1.6.3 2.9v4c0 .9-.3 1.6-.8 2-.5.3-1.1.5-2 .5-2 0-3.6-1.1-4.7-3.4s-1.7-5.8-1.7-10.4c0-2.2.2-4.4.7-6.4.5-2.1 1.3-3.8 2.5-5.1 1.2-1.3 2.7-2 4.7-2 .7 0 1.4.1 2.2.3.7.2 1.4.5 1.9.9 1.3.9 2.1 1.9 2.6 3.1.5 1.2.9 2.9 1 5h.9c0-4.8.1-8.1.2-10H25c0 .8-.1 1.4-.3 1.8-.1.4-.4.6-.6.6-.2 0-.5-.1-.8-.4-1-.8-2.1-1.5-3.4-1.9-1.2-.5-2.7-.7-4.4-.7-3 0-5.7.6-8 1.9-2.4 1.2-4.2 3-5.5 5.3C.7 9.4 0 12 0 15c0 4.6 1.3 8.2 3.8 10.7s6.3 3.8 11.2 3.8c1.8 0 4.1-.6 6.8-1.9 1.3-.6 2.2-.9 2.7-.9.4 0 .7.2.9.7s.3 1 .4 1.6h.8v-8c0-1 0-1.7.1-2.2.1-.5.2-.8.5-.9.2-.2.6-.3 1.1-.3v-.8c-1.4.1-3.4.1-6.2.1-3.3-.1-5.9-.1-7.7-.2zm61.3 8.8L66 .6c-.9.1-1.5.1-2.1.1-.6 0-1.3 0-2.1-.1L53 23.4c-.6 1.6-1.2 2.7-1.8 3.4-.6.7-1.2 1.1-1.9 1.2v.8c.8-.1 1.8-.1 3.1-.1 1.5 0 3.2 0 5.2.1V28c-1.2-.1-2.1-.3-2.7-.7s-.9-1-.9-2.1c0-1.2.4-2.9 1.3-5.2l.7-1.8h8l2.4 6.6c.3.8.5 1.4.5 1.9s-.2.9-.6 1.1c-.4.2-1.1.3-2.2.4v.8c1.4-.1 3.7-.1 6.7-.1 2.9 0 5.4 0 7.3.1v-.8c-.4 0-.8-.2-1.2-.7-.5-.5-.8-1.1-1.2-2zm-19.4-8.1l3.8-10 3.6 10h-7.4zm62.9-2.2c-.9-.8-2.1-1.7-3.5-2.7-.1-.1-.3-.2-.4-.3-.1-.1-.3-.2-.5-.3-1.8-1.2-3-2.2-3.8-2.8s-1.4-1.3-1.8-1.9c-.4-.7-.6-1.5-.6-2.4 0-1.2.4-2.1 1.1-2.7.7-.7 1.7-1 3-1s2.5.4 3.5 1.3 1.8 2 2.4 3.4c.6 1.4.9 2.8 1 4.4h.9c0-4.6.1-7.8.2-9.8h-.9c-.1.6-.2 1.1-.3 1.3-.1.3-.3.4-.6.4-.2 0-.4-.1-.6-.2-.2-.1-.5-.2-.8-.4-.9-.5-1.8-.9-2.8-1.2-.7-.2-2-.3-3.5-.3-1.8 0-3.4.3-4.9.8-1.5.5-2.7 1.4-3.6 2.5-.9 1.1-1.4 2.5-1.4 4.2 0 1.4.3 2.6.9 3.7.6 1.1 1.4 2 2.4 2.8 1 .8 2.2 1.7 3.8 2.8 2 1.3 3.5 2.5 4.4 3.6.9 1.1 1.4 2.4 1.4 3.9 0 1.2-.4 2.2-1.3 2.9-.9.7-2 1-3.5 1-2.4 0-4.1-1-5.3-3-1.1-2-1.8-4.5-2-7.7h-.9c0 5.9-.1 9.8-.2 11.6h.9c.1-.6.2-1.1.3-1.3.1-.3.3-.4.6-.4s.8.2 1.4.6c.9.5 1.9.8 3 1.1 1.1.3 2.4.4 4.1.4 2 0 3.8-.3 5.5-.9 1.7-.6 3-1.5 3.9-2.7 1-1.2 1.5-2.6 1.5-4.4 0-1.4-.3-2.6-.8-3.6-.6-1-1.3-1.9-2.2-2.7zm48.2 12.9c-1.3 0-2.3-.1-2.9-.3-.6-.2-1-.5-1.2-1-.2-.5-.3-1.3-.3-2.4V1.5c1.6 0 3.1.8 4.5 2.3 1.4 1.5 2.5 4.1 3.4 7.6h.9c-.1-.7-.1-1.7-.1-2.9 0-2.3.1-5 .3-7.9-2.5.1-6.9.1-13 .1-6.2 0-10.5 0-13.1-.1.2 3 .3 5.6.3 7.9 0 1.2 0 2.2-.1 2.9h.9c.9-3.5 2-6 3.4-7.6 1.4-1.5 2.9-2.3 4.5-2.3v22.9c0 1.1-.1 1.9-.3 2.4-.2.5-.6.8-1.2 1-.6.2-1.6.3-2.9.3v.8c3.6-.1 6.3-.1 8.2-.1 2.1 0 5 0 8.8.1v-.8zm54.9-.8c-.5 0-.9-.2-1.1-.6-.3-.4-.5-1.1-.7-2l-.8-4.2c-.3-1.6-1.2-2.9-2.6-3.7-1.4-.8-3.4-1.4-6.2-1.5 3.5-.3 6-1.2 7.5-2.6 1.5-1.4 2.2-3.1 2.2-5.1 0-2.3-1-4.1-3-5.2-2-1.1-5-1.7-9.1-1.7h-6.4c-3.1 0-5.4 0-6.9-.1v.8c.9.1 1.5.2 1.8.3.4.2.6.5.8.9.1.5.2 1.2.2 2.2v19.8c0 1-.1 1.7-.2 2.2-.1.5-.4.8-.8.9-.4.2-1 .3-1.9.3v.8c1.5-.1 3.9-.1 7.1-.1 2.9 0 5.1 0 6.7.1V28c-.9-.1-1.5-.2-1.8-.3-.4-.2-.6-.5-.8-.9-.1-.5-.2-1.2-.2-2.2v-9.2h1.8c.9 0 1.6.5 2.1 1.4.5 1 .8 2.4 1.1 4.2l.6 4c.2 1.6.9 2.7 1.9 3.3 1 .7 2.4 1 4.3 1 1.3 0 2.4-.2 3.4-.5s1.8-.9 2.6-1.7l-.5-.5c-.2.5-.6.7-1.1.7zm-14.9-12.7h-1.1V4.8c0-1 .1-1.7.2-2.2.1-.5.3-.8.6-1 .3-.2.8-.3 1.4-.3 1.4 0 2.3.6 2.9 1.7.6 1.1.9 2.8.9 5 0 2.1-.3 3.7-1 4.9-.7 1.2-2 1.7-3.9 1.7zm66.7 7.7c1.3-2.3 1.9-4.9 1.9-7.8 0-3-.6-5.6-1.9-7.8-1.3-2.2-3-3.8-5.3-5C266.6.6 264 0 261 0c-2.9 0-5.5.6-7.8 1.9-2.3 1.3-4.1 3-5.4 5.3-1.3 2.3-1.9 4.9-1.9 7.8 0 3 .6 5.6 1.9 7.8 1.3 2.2 3 3.8 5.3 5 2.3 1.1 4.9 1.7 7.9 1.7 2.9 0 5.5-.6 7.8-1.9s4-3.1 5.3-5.3zm-7.3-.3c-.5 2.1-1.3 3.8-2.3 5-1 1.2-2.2 1.8-3.5 1.8-1.3 0-2.4-.6-3.4-1.7s-1.9-2.8-2.5-4.9-.9-4.5-.9-7.3c0-2.7.3-5.2.8-7.3.5-2.1 1.3-3.8 2.3-5s2.2-1.8 3.5-1.8c1.3 0 2.4.6 3.4 1.7s1.9 2.8 2.5 4.9c.6 2.1.9 4.5.9 7.3 0 2.7-.2 5.1-.8 7.3zM319.3.6v.8c1.3.2 2.2.5 2.7.9s.9 1 1.1 1.9c.2.9.2 2.3.2 4.3v9.4L307 .6c-1 .1-2.2.1-3.7.1-1.4 0-2.5 0-3.3-.1v.8c.9.1 1.5.2 1.8.3.4.2.6.5.8.9.1.5.2 1.2.2 2.2v17c0 1.6-.1 2.8-.2 3.6-.1.8-.4 1.4-.8 1.8-.4.4-1 .7-1.8.9v.8c.8-.1 1.9-.1 3.3-.1 1.9 0 3.4 0 4.5.1v-.8c-1.3-.2-2.2-.5-2.7-.9s-.9-1-1.1-1.9c-.2-.9-.2-2.3-.2-4.3V9.5l17.7 19.4c.7-.1 1.2-.1 1.5-.1.3 0 .8 0 1.3.1V7.6c0-1.6.1-2.8.2-3.6.1-.8.4-1.4.8-1.8.4-.4 1-.7 1.8-.9V.6c-.8.1-1.9.1-3.3.1-1.9 0-3.4-.1-4.5-.1zm54.6 1.1C371.6.6 369 0 366 0c-2.9 0-5.5.6-7.8 1.9-2.3 1.3-4.1 3-5.4 5.3-1.3 2.3-1.9 4.9-1.9 7.8 0 3 .6 5.6 1.9 7.8 1.3 2.2 3 3.8 5.3 5 2.3 1.1 4.9 1.7 7.9 1.7 2.9 0 5.5-.6 7.8-1.9 2.3-1.3 4.1-3 5.4-5.3 1.3-2.3 1.9-4.9 1.9-7.8 0-3-.6-5.6-1.9-7.8-1.3-2.2-3.1-3.8-5.3-5zM371.8 22c-.5 2.1-1.3 3.8-2.3 5-1 1.2-2.2 1.8-3.5 1.8-1.3 0-2.4-.6-3.4-1.7s-1.9-2.8-2.5-4.9-.9-4.5-.9-7.3c0-2.7.3-5.2.8-7.3.5-2.1 1.3-3.8 2.3-5s2.2-1.8 3.5-1.8c1.3 0 2.4.6 3.4 1.7s1.9 2.8 2.5 4.9c.6 2.1.9 4.5.9 7.3 0 2.7-.2 5.1-.8 7.3zM430.7.7l-6.6 16.9-7.6-17c-2.3.1-5.1.1-8.3.1-1.4 0-2.5 0-3.3-.1v.8c.9.1 1.5.2 1.8.3.4.2.6.5.8.9.1.5.2 1.2.2 2.2v17c0 1.6-.1 2.8-.2 3.6-.1.8-.4 1.4-.8 1.8-.4.4-1 .7-1.8.9v.8c.8-.1 1.9-.1 3.3-.1 1.9 0 3.4 0 4.5.1v-.8c-1.3-.2-2.2-.5-2.7-.9s-.9-1-1.1-1.9c-.2-.9-.2-2.3-.2-4.3V3.2L420 28.8h.6l9.6-24.6v20.4c0 1-.1 1.7-.2 2.2-.2.5-.5.8-.9.9-.4.2-1.1.3-2.1.3v.8c1.5-.1 3.9-.1 7.1-.1 3.1 0 5.5 0 7.1.1V28c-.9-.1-1.5-.2-1.8-.3-.4-.2-.6-.5-.8-.9-.1-.5-.2-1.2-.2-2.2V4.8c0-1 .1-1.7.2-2.2.1-.5.4-.8.8-.9.4-.2 1-.3 1.9-.3V.6c-1.6.1-4 .1-7.1.1h-3.5zm34.1-.1v.8c.9.1 1.5.2 1.8.3.4.2.6.5.8.9.1.5.2 1.2.2 2.2v19.8c0 1-.1 1.7-.2 2.2-.1.5-.4.8-.8.9-.4.2-1 .3-1.9.3v.8c1.5-.1 3.9-.1 7.1-.1 2.9 0 5.1 0 6.7.1V28c-.9-.1-1.5-.2-1.8-.3-.4-.2-.6-.5-.8-.9-.1-.5-.2-1.2-.2-2.2V4.8c0-1 .1-1.7.2-2.2.1-.5.4-.8.8-.9.4-.2 1-.3 1.9-.3V.6c-1.6.1-3.8.1-6.7.1-3.2 0-5.5-.1-7.1-.1zm56.4 14.6c-.9-.8-2.1-1.7-3.5-2.7-.1-.1-.3-.2-.4-.3-.1-.1-.3-.2-.5-.3-1.8-1.2-3-2.2-3.8-2.8s-1.4-1.3-1.8-1.9c-.4-.7-.6-1.5-.6-2.4 0-1.2.4-2.1 1.1-2.7.7-.7 1.7-1 3-1s2.5.4 3.5 1.3 1.8 2 2.4 3.4c.6 1.4.9 2.8 1 4.4h.9c0-4.6.1-7.8.2-9.8h-.9c-.1.6-.2 1.1-.3 1.3-.1.3-.3.4-.6.4-.2 0-.4-.1-.6-.2-.2-.1-.5-.2-.8-.4-.9-.5-1.8-.9-2.8-1.2-.9-.3-2.2-.4-3.7-.4-1.8 0-3.4.3-4.9.8-1.5.5-2.7 1.4-3.6 2.5-.9 1.1-1.4 2.5-1.4 4.2 0 1.4.3 2.6.9 3.7.6 1.1 1.4 2 2.4 2.8 1 .8 2.2 1.7 3.8 2.8 2 1.3 3.5 2.5 4.4 3.6.9 1.1 1.4 2.4 1.4 3.9 0 1.2-.4 2.2-1.3 2.9-.9.7-2 1-3.5 1-2.4 0-4.1-1-5.3-3-1.1-2-1.8-4.5-2-7.7h-.9c0 5.9-.1 9.8-.2 11.6h.9c.1-.6.2-1.1.3-1.3.1-.3.3-.4.6-.4s.8.2 1.4.6c.9.5 1.9.8 3 1.1 1.1.3 2.4.4 4.1.4 2 0 3.8-.3 5.5-.9 1.7-.6 3-1.5 3.9-2.7 1-1.2 1.5-2.6 1.5-4.4 0-1.4-.3-2.6-.8-3.6s-1.1-1.8-2-2.6zm55.2 11.9c-.3-.4-.7-.8-1.1-1.5L566 10.2l3.9-4.4c2.1-2.3 4.2-3.8 6.6-4.4V.6c-1.1.1-2.4.1-4 .1-2.3 0-4.5 0-6.8-.1v.8c1 .1 1.7.3 2.4.8.6.5.9 1.1.9 1.9 0 1.1-.6 2.3-1.8 3.6l-1.4 1.5c-1.5 1.7-2.7 2.8-3.7 3.6-1 .7-2.1 1.1-3.1 1.2V5c0-1 .1-1.7.2-2.2.1-.5.4-.8.8-.9.4-.2 1-.3 1.9-.3v-1c-1.6.1-3.8.1-6.7.1-3.2 0-5.6 0-7.1-.1v.8c.9.1 1.5.2 1.8.3.4.2.6.5.8.9.1.5.2 1.2.2 2.2v19.8c0 1-.1 1.7-.2 2.2-.1.5-.4.8-.8.9-.4.2-1 .3-1.9.3v.8c1.5-.1 3.9-.1 7.1-.1 2.9 0 5.1 0 6.7.1V28c-.9-.1-1.5-.2-1.8-.3-.4-.2-.6-.5-.8-.9-.1-.5-.2-1.2-.2-2.2v-9.9c.4.1.7.2.9.4.3.2.6.7.9 1.3l5.8 9.8c.3.4.4.8.4 1 0 .3-.2.4-.5.5-.3.1-.9.2-1.8.2v.8c1.8-.1 3.7-.1 5.7-.1 2.6 0 5 0 7.2.1v-.8c-.4-.1-.9-.4-1.2-.8zm-441.1 9.8v.5c.6 0 1 .1 1.3.2.3.1.4.3.5.6.1.3.1.7.1 1.3v11.9c0 .6 0 1-.1 1.3-.1.3-.3.5-.5.6-.3.1-.7.2-1.3.2v.5c.7 0 1.7-.1 3.1-.1 1.3 0 2.3 0 3 .1v-.5c-.6 0-1-.1-1.3-.2-.3-.1-.4-.3-.5-.6-.1-.3-.1-.7-.1-1.3v-12c0-.6 0-1 .1-1.3.1-.3.3-.5.5-.6.3-.1.7-.2 1.3-.2v-.5c-.8 0-1.8.1-3 .1-1.4.1-2.4 0-3.1 0zm36.6 0v.5c.6 0 1.1.1 1.4.3.3.1.5.4.6.7.1.3.2.8.2 1.4v10.3L165.6 37c-.5 0-1.2.1-1.9.1-1 0-1.7 0-2.2-.1v.5c.6 0 1 .1 1.3.2.3.1.4.3.5.6.1.3.1.7.1 1.3v11.7c0 .6 0 1.1-.1 1.4-.1.3-.3.5-.6.7-.3.1-.7.2-1.2.3v.5c.5 0 1.3-.1 2.2-.1 1.1 0 1.9 0 2.4.1v-.5c-.6 0-1.1-.1-1.4-.3-.3-.1-.5-.4-.6-.7-.1-.3-.2-.8-.2-1.4V38.4L174.1 54h.6V39.7c0-.6 0-1.1.1-1.4.1-.3.3-.5.6-.7.3-.1.7-.2 1.2-.3v-.5c-.5 0-1.3.1-2.2.1-1.1.1-1.9 0-2.5 0zm35.1 0v.5c.6 0 1.1.1 1.4.3.3.1.5.4.6.7.1.3.2.8.2 1.4v10.3L200.7 37c-.5 0-1.2.1-1.9.1-1 0-1.7 0-2.2-.1v.5c.6 0 1 .1 1.3.2.3.1.4.3.5.6.1.3.1.7.1 1.3v11.7c0 .6 0 1.1-.1 1.4-.1.3-.3.5-.6.7-.3.1-.7.2-1.2.3v.5c.5 0 1.3-.1 2.2-.1 1.1 0 1.9 0 2.4.1v-.5c-.6 0-1.1-.1-1.4-.3-.3-.1-.5-.4-.6-.7-.1-.3-.2-.8-.2-1.4V38.4L209.1 54h.6V39.7c0-.6 0-1.1.1-1.4.1-.3.3-.5.6-.7.3-.1.7-.2 1.2-.3v-.5c-.5 0-1.3.1-2.2.1-1 .1-1.9 0-2.4 0zm36.3.7c-1.1-.7-2.5-1-4-1s-2.8.4-3.9 1.1c-1.2.8-2.1 1.8-2.7 3.2-.6 1.4-1 2.9-1 4.7 0 1.8.3 3.4.9 4.7.6 1.3 1.5 2.3 2.7 3 1.1.7 2.5 1 4 1s2.8-.4 3.9-1.1c1.2-.8 2.1-1.8 2.7-3.2s1-2.9 1-4.7c0-1.8-.3-3.4-.9-4.7-.6-1.3-1.5-2.3-2.7-3zm.6 12.1c-.4 1.3-1 2.3-1.8 3s-1.7 1.1-2.7 1.1c-1 0-1.9-.3-2.7-1-.8-.7-1.4-1.7-1.9-2.9-.5-1.3-.7-2.7-.7-4.4 0-1.6.2-3.1.6-4.4.4-1.3 1-2.3 1.8-3 .8-.7 1.7-1.1 2.7-1.1 1 0 1.9.3 2.7 1 .8.7 1.4 1.7 1.9 2.9.5 1.3.7 2.7.7 4.4 0 1.7-.2 3.1-.6 4.4zm32.8-12.8v.5c.7 0 1.2.1 1.6.4.3.2.5.6.5 1.1 0 .4-.2 1.1-.5 2l-3.9 10.2-4.3-11.5c-.2-.5-.3-.9-.3-1.1 0-.3.1-.5.4-.7.3-.1.7-.2 1.3-.2v-.5c-.7 0-1.7.1-3.1.1-1.1 0-1.9 0-2.6-.1v.5c.7 0 1.3.5 1.7 1.5l5.9 15.1h.4l5.6-14.5c.5-1.2 1.1-1.9 1.9-2.1v-.5c-.5 0-1.1.1-1.8.1-1-.2-1.9-.3-2.8-.3zm34.6 15l-5.9-15.1h-.4l-5.6 14.5c-.5 1.2-1.1 1.9-1.9 2.1v.5c.5 0 1.1-.1 1.8-.1.9 0 1.8 0 2.8.1v-.5c-.7 0-1.2-.1-1.6-.4s-.5-.5-.5-1c0-.4.2-1.1.5-2l1-2.5h5.8l1.5 3.9c.2.5.3.9.3 1.1 0 .3-.1.5-.4.7-.3.1-.7.2-1.3.2v.5c.7 0 1.7-.1 3.1-.1 1.1 0 1.9 0 2.6.1v-.5c-.9 0-1.4-.5-1.8-1.5zm-9.7-4.9l2.7-7.2L307 47h-5.4zm35.5-10c-3.2 0-5.4 0-6.8-.1.1 1.1.2 2.2.2 3.1 0 .8 0 1.5-.1 2h.6c.1-1.2.3-2.1.5-2.7s.5-1 1-1.3c.5-.3 1.2-.4 2.2-.4h1.3v13.7c0 .7-.1 1.2-.2 1.5-.1.3-.4.5-.7.6-.3.1-.8.2-1.6.2v.5c.8 0 2-.1 3.6-.1 1.5 0 2.7 0 3.5.1v-.5c-.7 0-1.2-.1-1.6-.2-.3-.1-.5-.3-.7-.6-.1-.3-.2-.8-.2-1.5V37.4h1.3c1 0 1.7.1 2.2.4.5.3.8.7 1 1.3s.4 1.5.5 2.7h.6c0-.5-.1-1.2-.1-2 0-.9.1-1.9.2-3.1-1.2.2-3.5.3-6.7.3zm26.6-.1v.5c.6 0 1 .1 1.3.2.3.1.4.3.5.6.1.3.1.7.1 1.3v11.9c0 .6 0 1-.1 1.3-.1.3-.3.5-.5.6-.3.1-.7.2-1.3.2v.5c.7 0 1.7-.1 3.1-.1 1.3 0 2.3 0 3 .1v-.5c-.6 0-1-.1-1.3-.2-.3-.1-.4-.3-.5-.6-.1-.3-.1-.7-.1-1.3v-12c0-.6 0-1 .1-1.3.1-.3.3-.5.5-.6.3-.1.7-.2 1.3-.2v-.5c-.8 0-1.8.1-3 .1-1.4.1-2.4 0-3.1 0zm37.9.7c-1.1-.7-2.5-1-4-1s-2.8.4-3.9 1.1-2.1 1.8-2.7 3.2c-.6 1.4-1 2.9-1 4.7 0 1.8.3 3.4.9 4.7.6 1.3 1.5 2.3 2.7 3 1.1.7 2.5 1 4 1s2.8-.4 3.9-1.1 2.1-1.8 2.7-3.2 1-2.9 1-4.7c0-1.8-.3-3.4-.9-4.7-.7-1.3-1.5-2.3-2.7-3zm.6 12.1c-.4 1.3-1 2.3-1.8 3s-1.7 1.1-2.7 1.1c-1 0-1.9-.3-2.7-1-.8-.7-1.4-1.7-1.9-2.9s-.7-2.7-.7-4.4c0-1.6.2-3.1.6-4.4s1-2.3 1.8-3c.8-.7 1.7-1.1 2.7-1.1 1 0 1.9.3 2.7 1 .8.7 1.4 1.7 1.9 2.9.5 1.3.7 2.7.7 4.4 0 1.7-.2 3.1-.6 4.4zm33.6-12.8v.5c.6 0 1.1.1 1.4.3.3.1.5.4.6.7.1.3.2.8.2 1.4v10.3L429.5 37c-.5 0-1.2.1-1.9.1-1 0-1.7 0-2.2-.1v.5c.6 0 1 .1 1.3.2.3.1.4.3.5.6.1.3.1.7.1 1.3v11.7c0 .6 0 1.1-.1 1.4-.1.3-.3.5-.6.7-.3.1-.7.2-1.2.3v.5c.5 0 1.3-.1 2.2-.1 1.1 0 1.9 0 2.4.1v-.5c-.6 0-1.1-.1-1.4-.3-.3-.1-.5-.4-.6-.7-.1-.3-.2-.8-.2-1.4V38.4L438 54h.6V39.7c0-.6 0-1.1.1-1.4.1-.3.3-.5.6-.7.3-.1.7-.2 1.2-.3v-.5c-.5 0-1.3.1-2.2.1-1.1.1-1.9 0-2.5 0z"/>
          </svg>
        </div>
          <h1 data-0="transform: translate(-50%, -50%)" data-1000="transform: translate(-50%, 100%)">Med gastronomi i centrum er vi eksperter i eventplanlægning og madudvikling til din virksomhed</h1>
              <div class="bg-placeholder"></div>
          <div id="background-video" class="background-video" data-id="aD1LZVoTXYc"></div>
      </div>

      <div class="border-bottom">
          <div class="arrow"></div>
          <div class="circle"></div>
      </div>
    </section>

    <!-- MAIN -->
    <main>

        <section class="quote">
            <blockquote>
                <p>“Mad er et af de bedste værktøjer til at samle folk, til at fortælle historier og skabe debat”
                    <span>Rasmus Leck Fischer<span>
                </p>
            </blockquote>
        </section>

        <section class="textimage">
            <figure><img src="https://source.unsplash.com/900x1000"></figure>
            <div class="text purple" data-bottom-top="margin-top: 0px;" data-top-bottom="margin-top: 300px;">
                <h2>Lorem ipsum dolor</h2>
                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
        </section>

        <section class="textimage image-right">
            <figure><img src="https://source.unsplash.com/900x800"></figure>
            <div class="text green" data-bottom-top="margin-top: 0px;" data-top-bottom="margin-top: 100px;">
                <h2>Lorem ipsum dolor</h2>
                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>


</html>
