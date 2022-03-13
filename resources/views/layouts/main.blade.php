<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - {{ $title }}</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="wrap">
  <div class="header">
    @yield('header')

  </div>
  <div class="center_content">
    @yield('center_content')
  </div>

  <div class="footer">
    @yield('footer')
  </div>

</div>
</body>
</html>