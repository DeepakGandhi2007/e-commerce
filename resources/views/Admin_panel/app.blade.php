<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard</title>
 @include("admin_panel/layouts/header")

  </head>

  <body>

  @include("admin_panel/layouts/navbar")

  @section("admin")
  @show


  @include("admin_panel/layouts/footer")

  </body>
</html>
